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
							<p>Login Users</p>
							<form action="<?=site_url('user');?>" method="post">
								<div class="row">
									<div class="col-md-6">
										<select name="status" class="form-control">
											<option value="A" <?=($status == 'A')?'selected':'';?>>Active</option>
											<option value="D" <?=($status == 'D')?'selected':'';?>>Deactive</option>
										</select>
									</div>
									<div class="col-md-6">
										<button class="btn btn-success form-control" type="submit">Submit</button>
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
									<th>Name</th>
									<th>Type</th>
									<th>Password</th>
									<th>Last Update</th>
									<th>Settings</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($emp as $em){ ?>
								<tr>
									<td><?=$em->f_name;?> <?=$em->l_name;?></td>
									<td><?=$em->type;?></td>
									<td><?=$em->password;?></td>
									<td><?=$em->update_time;?></td>
									<td><?php if(in_array('2',$other_action)){ ?><a href="<?=site_url('user/user_access');?>?req=<?=base64_encode($em->email_id);?>" class="badge badge-primary">Profile</a><?php } ?></td>
								</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Type</th>
									<th>Password</th>
									<th>Last Update</th>
									<th>Settings</th>
								</tr>
							</tfoot>
						</table>
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