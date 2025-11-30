<!doctype html>
<html lang="en">
<head>
<?php include('default/header_script.php'); ?>
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
	<?php include('default/header.php'); ?>
	<div class="app-main">
		<?php include('default/sidemenu.php'); ?>
		<!--- Main Content Data --->
		<div class="app-main__outer">
			<div class="app-main__inner">
                <div class="app-page-title">
					<div class="page-title-wrapper" style="background-color:#fff;">
                        <div class="page-title-heading p-2">
                                           
                                            <form action="<?=site_url('web-admin/user_type');?>" method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <select name="type" class="form-control">
                                                            <option value="">Select Type</option>
                                                            <?php if(isset($user_type)){ foreach($user_type as $ut){ ?>
                                                                <option value="<?= $ut->user_key; ?>"<?=($ut->user_key == $type)?'selected':'';?>><?= $ut->name; ?></option>
                                                            <?php } } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
                                    <button class="btn btn-success form-control" type="submit">Submit</button>
                                                    </div>
                                <div class="col-md-3">
                               
                                </div>
								</div>
							</form>
						</div>
					</div>
				</div> 
				<div class="main-card mb-3 card">
					<div class="card-body">
						<div class="row">
                            <div class="col-md-12">
                                <h4>User Access</h4>
                                <hr>
                                <form class="form-submit" method="post" action="<?= site_url('web-admin/user/update_type_access'); ?>">
                                        
                                    <table class="table f-s-13">
                                        <?php if(isset($menu)){ foreach($menu as $tbgroup => $submenu){ ?>
                                            <tr><th><i class="<?=$submenu['icon'];?>"></i></th><th colspan="2"><?=$tbgroup;?></th></tr>
                                            <?php 
                                                foreach($submenu['menu'] as $name => $prop){ 
                                                $oa = explode(',',$prop['other_action']);
                                            ?>
                                                <tr>
                                                    <th><input type="checkbox" id="tab" name="tab[]" value="<?=$prop['id'];?>" <?php echo ((isset($user_access[$prop['id']]) && $user_access[$prop['id']]['status']=='A')?'checked':''); ?> ></th>
                                                    <th><?=$name;?></th>
                                                    <td>
                                                        <?php 
                                                        if($oa[0] != null)
                                                        {
                                                            $uaoa = array();
                                                            if(isset($user_access[$prop['id']]['other_action']))
                                                            {
                                                                $uaoa = explode(' ',$user_access[$prop['id']]['other_action']);
                                                            }
                                                            foreach($oa as $a){
                                                                $toa = explode('|',$a);
                                                                echo '<label><input type="checkbox" id="action-'.$prop['id'].'" name="action['.$prop['id'].'][]" value="'.$toa[1].'" '.((in_array($toa[1],$uaoa)?'checked':'')).'> '.ucfirst($toa[0]).'</label> ';  
                                                            }
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php } } ?>
                                        <tr>
                                            <td colspan="3">
                                            <?php if(in_array('2',$other_action)){ ?>

                                                
                                                <input type="hidden" name="type" value="<?=$type; ?>">
                                                <input type="hidden" name="user_id" value="<?= isset($user_id)?$user_id:''; ?>">
                                                <input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
                                                <button type="submit" class="btn btn-success form-control">Update</button>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<?php include('default/footer_script.php'); ?>

</body>
</html>