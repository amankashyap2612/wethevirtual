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
							<div class="row">
								<div class="col-md-6">
									<h4>Employee</h4>
								</div>
								
								<?php if(in_array('1',$other_action)){ ?>
								<div class="col-md-3 text-right">
									<a class="btn btn-success form-control" href="#" data-toggle="modal" data-target="#add">Add</a>
								</div>
								<div class="col-md-3 text-right">
									<a class="btn btn-success form-control" href="#" data-toggle="modal" data-target="#upload">Upload</a>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div> 
				<div class="main-card mb-3 card">
					<div class="card-body">
						<table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
							<thead>
								<tr>
									<th>S.no</th>
									<th>Name</th>
									<th>Department</th>
									<th>Contact</th>
									<th>LastUpdate</th>
									<th>UpdateBy</th>
									<th>Status</th>
									<th>Qr Code</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach($empl as $prg){ ?>
								<tr>
									<td><?=$i++;?></td>
									<td><?=$prg->name;?></td>
									<td><?=$depat[$prg->department];?></td>
									<td><?=$prg->contact;?></td>
									<td><?= date('Y-m-d H:i:s',strtotime($prg->last_update)); ?></td>
									<td><?=$user_info[$prg->update_by]->f_name;?></td>
									<td id="object-<?= $prg->id; ?>"><?= ($prg->status == 'D')?'<a href="#" data-id="'.$prg->id.'" data-status="'.$prg->status.'" class="change-status badge badge-primary">ACTIVE</a>':'<a href="#" data-id="'.$prg->id.'" data-status="'.$prg->status.'" class="change-status badge badge-danger">DEACTIVE</a>'; ?></td>
									<td id="object1-<?= $prg->id; ?>"><?= ($prg->qr_status == 0)?'<a href="#" data-id="'.$prg->id.'" data-status="'.$prg->status.'" class="qr_genrate badge badge-success">Create</a>':'<a href="#" data-id="'.$prg->id.'"  data-name="'.$prg->name.'" data-img_src="'.web_url("images/employee_qr_code/EMP-".$prg->id.".png").'" data-toggle="modal" data-target="#qrObject" class="qr-Object badge badge-danger">View</a>'; ?></td>
									<td>
									<?php if(in_array('2',$other_action)){ ?>
										<a href="#" class="edit-object" 
										data-id="<?=$prg->id?>" 
										data-name="<?=$prg->name;?>" 
										data-contact="<?=$prg->contact;?>"
										data-email_id="<?=$prg->email_id;?>"
										data-department="<?=$prg->department;?>" 
										data-emp_code="<?=$prg->emp_code;?>" 
										data-dob="<?=$prg->dob;?>" 
										data-dom="<?=$prg->dom;?>" 
										data-doj="<?=$prg->doj;?>" 
										data-toggle="modal" data-target="#editObject"><i class="pe-7s-pen" aria-hidden="true"></i></a>
									<?php } ?>
									</td>
								</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>S.no</th>
									<th>Name</th>
									<th>Department</th>
									<th>Contact</th>
									<th>LastUpdate</th>
									<th>UpdateBy</th>
									<th>Status</th>
									<th>Qr Code</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="qrObject" role="dialog">
	<div class="modal-dialog modal-full">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Employee Qr Code</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
							<div class="row">
								<div class="col-md-12 text-center">
									<h6 class="emp-name">Name</h6>
									<img src="<?=base_url("assets/images/question/")?>Penguins.jpg"  style="width:50%;height:50%;"  id="qr-img" title="">
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
	
	
  <!--add slider-->

<div class="modal fade" id="editObject" role="dialog">
	<div class="modal-dialog modal-lg modal-full">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Employee</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
						<form class="form-submit" method="post" action="<?= site_url('organization/update_employee')?>">
							<div class="row">
								<div class="col-md-4 col-sm-12 form-group" >
									<label>Name</label>
									<input type="text" name="edt_name" class="form-control" placeholder="name">
								</div>
								<div class="col-md-4 col-sm-12 form-group" >
									<label>Email ID</label>
									<input type="text" name="edt_email" class="form-control" placeholder="Email ID">
								</div>
								<div class="col-md-4 col-sm-12 form-group" >
									<label>Phone</label>
									<input type="text" name="edt_phone" class="form-control" placeholder="Phone/Contact/Mobile">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12 form-group" >
									<label>Department</label>
									<select name="edt_department" class="form-control">
										<?php foreach($department as $dep) { ?>
											<option value="<?=$dep->id;?>"><?=$dep->name;?></option>	
										<?php } ?>
									</select>
								</div>
								<div class="col-md-6 col-sm-12 form-group" >
									<label>Employee Code</label>
									<input type="text" name="edt_emp_code" class="form-control" placeholder="Employee Code">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 form-group " >
									<label>Date Of Birth</label>
									<input type="text" name="edt_dob" class="form-control datepicker" placeholder="YYYY-MM-DD">
								</div>
								<div class="col-md-4 col-sm-12 form-group " >
									<label>Date of Marriage</label>
									<input type="text" name="edt_dom" class="form-control  datepicker" placeholder="YYYY-MM-DD">
								</div>
								<div class="col-md-4 col-sm-12 form-group " >
									<label>Date of Joining</label>
									<input type="text" name="edt_doj" class="form-control datepicker" placeholder="YYYY-MM-DD">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 form-group">
									<input type="hidden" name="edt_id" value="">
									<button type="submit" class="btn btn-success form-control">Update Employee</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>


<div class="modal fade" id="add" role="dialog">
	<div class="modal-dialog modal-lg modal-full">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Employee</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12 attach-details">
						<form class="form-submit" method="post" action="<?= site_url('organization/add_employee')?>">
							<div class="row">
								<div class="col-md-4 col-sm-12 form-group" >
									<label>Name</label>
									<input type="text" name="name" class="form-control" placeholder="name">
								</div>
								<div class="col-md-4 col-sm-12 form-group" >
									<label>Email ID</label>
									<input type="text" name="email" class="form-control" placeholder="Email ID">
								</div>
								<div class="col-md-4 col-sm-12 form-group" >
									<label>Phone</label>
									<input type="text" name="phone" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12 form-group" >
									<label>Department</label>
									<select name="department" class="form-control">
										<?php foreach($department as $dep) { ?>
											<option value="<?=$dep->id;?>"><?=$dep->name;?></option>	
										<?php } ?>
									</select>
								</div>
								<div class="col-md-6 col-sm-12 form-group" >
									<label>Employee Code</label>
									<input type="text" name="emp_code" class="form-control" placeholder="Employee Code">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 form-group " >
									<label>Date Of Birth</label>
									<input type="text" name="dob" class="form-control datepicker" placeholder="YYYY-MM-DD">
								</div>
								<div class="col-md-4 col-sm-12 form-group " >
									<label>Joining Date</label>
									<input type="text" name="doj" class="form-control datepicker" placeholder="YYYY-MM-DD">
								</div>
								<div class="col-md-4 col-sm-12 form-group " >
									<label>Marriage Anniversary</label>
									<input type="text" name="dom" class="form-control  datepicker" placeholder="YYYY-MM-DD">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 form-group">
									<button type="submit" class="btn btn-success form-control">Add Employee</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>


<!--End Add Home Slide-->
<div class="modal fade" id="upload" role="dialog">
	<div class="modal-dialog modal-lg modal-full">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Upload Employee Sheet</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12 ">
						<form class="form-submit" method="post" action="<?= site_url('organization/upload_employee_details')?>">
							<div class="row">
								<div class="col-md-12 col-sm-12 form-group">
									<label>Upload File (.csv)</label>
								</div>
								<div class="col-md-12 col-sm-12 form-group" >
									<input type="file" name="practical" class="form-control" placeholder="Practical Eligibility">
								</div>
								<div class="col-md-12 col-sm-12 form-group" >
									<button type="submit" class="btn btn-success form-control">Upload</button>
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
<?php $this->load->view('pages/default/footer_script'); ?>

<script>
	$( function() {
		$( "#datepicker" ).datepicker({
			maxDate : "-18y",
			changeYear: true,
			changeMonth: true
		});
		$( "#datepicker1,#datepicker2" ).datepicker({
			dateFormat: 'yy-mm-dd',
			changeYear: true,
			changeMonth: true
		});
		$( ".datepicker" ).datepicker({
			dateFormat: 'yy-mm-dd',
			changeYear: true,
			changeMonth: true
		});
		$('.edit-object').on('click',function(){
			var name = $(this).data('name');
			var email_id = $(this).data('email_id');
			var phone = $(this).data('contact');
			var department = $(this).data('department');
			var emp_code = $(this).data('emp_code');
			var dob = $(this).data('dob');
			var dom = $(this).data('dom');
			var doj = $(this).data('doj');
			var id = $(this).data('id');
			
			
			$('input[name=edt_emp_code]').attr('value',emp_code);
			$('input[name=edt_name]').attr('value',name);
			$('input[name=edt_email]').attr('value',email_id);
			$('input[name=edt_phone]').attr('value',phone);
			$('input[name=edt_dob]').attr('value',dob);
			$('input[name=edt_dom]').attr('value',dom);
			$('input[name=edt_doj]').attr('value',doj);
			$('select[name=edt_department]').find('option[value="'+department+'"]').attr('selected','selected');
			$('input[name=edt_id]').attr('value',id);
		});
		$('.qr-Object').on('click',function(){
			var id = $(this).data('id');
			var name = $(this).data('name');
			var img_src = $(this).data('img_src');
			
			//alert(img_src);
			$('.emp-name').text(name);
			$('input[name=edt_id]').attr('value',id);
			$('#qr-img').attr('src',img_src);
		});
		
		$('.change-status').on('click', function(){
			var item = $(this).data('id');
			var status = $(this).data('status');
			if(item != "" && status != "")
			{
				$("#object-"+item).html("<img src='<?= base_url('assets'); ?>/images/loader.gif' style='width: 40px;'>");
				$.ajax({
					type: "POST",
					url: "<?= site_url('organization/change_employee_status'); ?>",
					data: {status:status,id:item},
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
		$('.qr_genrate').on('click', function(){
			var item = $(this).data('id');
			var status = $(this).data('status');
			if(item != "" && status != "")
			{
				$("#object1-"+item).html("<img src='<?= base_url('assets'); ?>/images/loader.gif' style='width: 40px;'>");
				$.ajax({
					type: "POST",
					url: "<?= site_url('organization/qr_genrate_emp'); ?>",
					data: {status:status,id:item},
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
		
		
	});
</script>
</body>
</html>