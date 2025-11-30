<!doctype html>
<html lang="en">
<head>
<?php $this->load->view('pages/default/header_script'); ?>
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
	<?php $this->load->view('pages/default/header'); ?>
	<div class="app-main">
		<?php $this->load->view('pages/default/sidemenu'); ?>
		<!--- Main Content Data --->
		<div class="app-main__outer">
			<div class="app-main__inner">
				<div class="app-page-title">
					<div class="page-title-wrapper" style="background-color:#fff;">
						<div class="page-title-heading p-2">
							<p>User Profile</p>
						</div>
					</div>
				</div> 
				<div class="main-card mb-3 card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<h4>User Information</h4>
								<hr>
								<form class="form-submit" method="post" action="<?= site_url('user/update_user_info'); ?>">
									<div class="row form-group">
										<div class="col-md-6">
											<label>First Name</label>
											<input type="text" name="f_name" value="<?=$emp_info->f_name;?>" class="form-control">
										</div>
										<div class="col-md-6">
											<label>Last Name</label>
											<input type="text" name="l_name" value="<?=$emp_info->l_name;?>" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<div class="col-md-6">
											<label>Email ID</label>
											<input type="text" name="email" value="<?=$emp_info->email_id;?>" class="form-control">
										</div>
										<div class="col-md-6">
											<label>Password</label>
											<input type="text" name="password" value="<?=$emp_info->password;?>" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<div class="col-md-6">
											<label>Type</label>
											<select name="type" class="form-control">
											<?php foreach($user_type as $ut){ ?>
												<option value="<?= $ut->user_key; ?>" <?= (($emp_info->type == $ut->user_key)?'selected':''); ?> ><?= $ut->name; ?></option>
											<?php } ?>
											</select>
										</div>
										<div class="col-md-6">
											<label>Status</label>
											<select name="status" class="form-control">
												<option value="A" <?= (($emp_info->status == "A")?'selected':''); ?> >Activate</option>
												<option value="D" <?= (($emp_info->status == "D")?'selected':''); ?> >Deactivate</option>
											</select>
										</div>
									</div>
									<div class="row form-group">
										<div class="col-md-12">
										<?php if(in_array('2',$other_action)){ ?>
											<input type="hidden" name="user_id" value="<?= $user_id; ?>">
											<button type="submit" class="btn btn-success" style="width: 100%;"> <span class="btn-val">Update</span></button>
										<?php } ?>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6">
								<h4>User Access</h4>
								<hr>
								<form class="form-submit" method="post" action="<?= site_url('user/update_access'); ?>">
									<table class="table f-s-13">
										<?php foreach($menu as $tbgroup => $submenu){ ?>
											<tr><th><i class="<?=$submenu['icon'];?>"></i></th><th colspan="2"><?=$tbgroup;?></th></tr>
											<?php 
												foreach($submenu['menu'] as $name => $prop){ 
												$oa = explode(',',$prop['other_action']);
											?>
												<tr>
													<th><input type="checkbox" name="tab[]" value="<?=$prop['id'];?>" <?php echo ((isset($user_access[$prop['id']]) && $user_access[$prop['id']]['status']=='A')?'checked':''); ?> ></th>
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
																echo '<label><input type="checkbox" name="action['.$prop['id'].'][]" value="'.$toa[1].'" '.((in_array($toa[1],$uaoa)?'checked':'')).'> '.ucfirst($toa[0]).'</label> ';
																
															}
														}
														?>
													</td>
												</tr>
											<?php } ?>
										<?php } ?>
										<tr>
											<td colspan="3">
											<?php if(in_array('2',$other_action)){ ?>
												<input type="hidden" name="user_id" value="<?= $user_id; ?>">
												<button type="submit" class="btn btn-success" style="width: 100%;"> <span class="btn-val">Update</span></button>
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
<?php $this->load->view('pages/default/footer_script'); ?>
</body>
</html>