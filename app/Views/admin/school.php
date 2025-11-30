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
							<p>news</p>
							<form action="<?=site_url('web-admin/news');?>" method="post">
								<div class="row">
									<div class="col-md-6">
										<select name="status" class="form-control">
											<option value="A" <?=($status == 'A')?'selected':'';?>>Active</option>
											<option value="D" <?=($status == 'D')?'selected':'';?>>Deactive</option>
										</select>
									</div>
									<div class="col-md-3">
									<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
                                    <button class="btn btn-success form-control" type="submit">Submit</button>
									</div>
                  <div class="col-md-3">
                  <button type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#add">Add</button>
                  </div>
								</div>
							</form>
						</div>
					</div>
				</div> 
				<div class="main-card mb-3 card">
					<div class="card-body">
						<table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
							<thead>
								<tr>
                <th>S.no</th>
                  <th>Headline</th>
                  <th>Link</th>
                  <th>Last Update</th>
                  <th>Updated By</th>
									<th>Status</th>
									<th>Update</th>
									
								</tr>
							</thead>
							<tbody>
								<?php if(isset($load_data)){ $i=1; foreach($load_data as $obj){ ?>
								<tr>
									<td><?=$i++;?></td>
								 <td><?=$obj->headline;?></td>
									<td><?=$obj->link;?></td>              
									<td><?= $obj->last_update;?>
                  <td><?php if(isset($user_info[$obj->update_by]->f_name)){echo $user_info[$obj->update_by]->f_name;}else{echo '<p style="color:red;">Not Found</p>';} ?></td>

									<td id="status-<?=$obj->id?>">
									<?= ($obj->status == 'D')?'<a href="#" data-id="'.$obj->id.'" data-status="'.$obj->status.'" class="change-status badge badge-primary">ACTIVE</a>':'<a href="#" data-id="'.$obj->id.'" data-status="'.$obj->status.'" class="change-status badge badge-danger">DEACTIVE</a>'; ?></td>
									
									<td>
                  <a href="#" class="badge badge-info edit-object" 
										data-id="<?=$obj->id;?>" 
										data-headline="<?=$obj->headline;?>"
										data-link="<?=$obj->link;?>" 
										data-toggle="modal" data-target="#editObject">Edit</a>
                    </td>
									
								</tr>
								<?php } } ?>
							</tbody>
							<tfoot>
								<tr>
								<th>S.no</th>
                  <th>Headline</th>
                  <th>Link</th>
                  <th>Last Update</th>
                  <th>Updated By</th>
									<th>Status</th>
									<th>Update</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="add" role="dialog">
	<div class="modal-dialog modal-lg modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Admission Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-submit" method="post" action="<?= site_url('web-admin/news/add-con')?>">
                            <div class="row">
							<div class="col-md-12 col-sm-12 form-group">
                        
                    </div>
                                <div class="col-md-12 col-sm-12 form-group" >
                                    <input type="text" name="headline" class="form-control" placeholder="headline">
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-12 col-sm-12 form-group" >
									<input type="text" name="link" class="form-control" value="" placeholder="link">
								</div>
							</div>
							

                

                

                            <div class="row">
                                <div class="col-md-12 col-sm-12 form-group">
                                    <input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
                                    <button type="submit" class="btn btn-success" style="width: 100%;"> <span class="btn-val">Add</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editObject" role="dialog">
	<div class="modal-dialog modal-lg modal-full">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Update news</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
						<form class="form-submit" method="post" action="<?= site_url('web-admin/news/update-con')?>">
							<div class="row">
							<div class="col-md-12 col-sm-12 form-group">
                       
   
                    </div>


                                <div class="col-md-12 col-sm-12 form-group" >
                                    <input type="text" name="edt_headline" class="form-control" placeholder="headline">
								</div>
								<div class="col-md-12 col-sm-12 form-group" >
									<input type="text" name="edt_link" class="form-control"  placeholder="link">
                </div>
							</div>
							<div class="row">
                <div class="col-md-12 col-sm-12 form-group">
                  <input type="hidden" name="edt_id" class="form-control">
									<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
									<button type="submit" class="btn btn-success" style="width: 100%;"> <span class="btn-val">Update</span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>

<div class="app-drawer-overlay d-none animated fadeIn"></div>
<?php include('default/footer_script.php'); ?>
<script>

$('.edit-object').on('click',function(){
    
    var id = $(this).data('id');
    var headline = $(this).data('headline');
    var link = $(this).data('link');

    $('input[name=edt_id]').attr('value',id);
    $('input[name=edt_headline]').attr('value',headline);
	$('input[name=edt_link]').attr('value',link);
	
    //$('select[name=edt_rm_admission_contact]').find("option[value='"+rm_admission_contact+"']").attr('selected','selected');
});


$('.change-status').on('click', function(){
            var item = $(this).data('id');
            var status = $(this).data('status');
            var crsf_name = '<?=csrf_token();?>';
            var crsf_hash = '<?=csrf_hash();?>';
            if(item != "" && status != "")
            {
              $("#status-"+item).html("<img src='<?= base_url('assets'); ?>/images/loader.gif' style='width: 40px;'>");
              $.ajax({
                type: "POST",
                url: "<?= site_url('web-admin/news/change-status'); ?>",
                data: {status:status,id:item, [crsf_name]:crsf_hash},
                dataType: 'json',
                cache: false,
                success: function(result){
                  if(result.success == true){
                    if(result.rlink){
                      window.location.href = result.rlink;
                    }else if(result.alert){
                      frm.before(result.alert);
                    }else if(result.alert1){
                      frm.before(result.alert1);
                      frm.remove();
                    }else{
                      location.reload();
                    }
                  }else{
                    $.each(result.message, function(key,value){
                      var inpt = frm.find('input[name='+key+'], textarea[name='+key+'], select[name='+key+']');
                      if(value.length > 2){
                        if(result.border == true){
                          inpt.addClass('border-danger');
                          $('#toast-erromsg').show().append(value);
                        }else{
                          inpt.addClass('border-danger').before(value);
                        }
                      }
                    });
                    setTimeout(function(){
                      $('#toast-erromsg').fadeOut(600)
                    }, 3500);
                  }
                  $('.preloader').hide();
                }
              });
            } 
          });

</script>
</body>
</html>