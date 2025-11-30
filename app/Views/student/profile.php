
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<!-- Favicon and Touch Icons -->
<link href="<?=base_url();?>images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?=base_url();?>images/capture-phone.png" rel="apple-touch-icon">
<link href="<?=base_url();?>images/capture-phone.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?=base_url();?>images/capture-phone.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?=base_url();?>images/capture-phone.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="<?=base_url();?>css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="<?=base_url();?>css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?=base_url();?>css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?=base_url();?>css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?=base_url();?>css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?=base_url();?>css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<link href="<?=base_url();?>css/style.css" rel="stylesheet" type="text/css"> 

<!-- CSS | Theme Color -->
<link href="<?=base_url();?>css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?=base_url();?>js/jquery-2.2.4.min.js"></script>
<script src="<?=base_url();?>js/jquery-ui.min.js"></script>
<script src="<?=base_url();?>js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?=base_url();?>js/jquery-plugin-collection.js"></script>
<?php
	$this->load->view("default/header_script");
?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
	<div id="preloader">
		<div id="spinner">
			<img alt="" src="<?=base_url();?>images/preloaders/5.gif">
		</div>
	<!-- <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div> -->
	</div>
  
	<?php 
	$this->load->view("default/student_header");
	?>
  
	<!-- Start main-content -->
	<div class="main-content">

    <?php 
		$this->load->view("default/banner");
	?>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="icon-box mb-0 p-0">
							<a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10"><i class="pe-7s-global"></i></a>
							<p class="text-gray">Basic Information</p>
						</div>
						<hr>
						<div class="row">
							<div class="form-group col-md-6">
								<label>Membership : </label>
							</div>
							<div class="form-group col-md-6">
								<label><?=$membership->name;?></label>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label>Period : </label>
							</div>
							<div class="form-group col-md-6">
								<label><?=$membership->days;?> Days</label>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label>Activate From : </label>
							</div>
							<div class="form-group col-md-6">
								<label><?= date('Y-m-d',strtotime($student_info['create_time'])); ?> </label>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label>Expired on : </label>
							</div>
							<div class="form-group col-md-6">
								<label><?= date('Y-m-d',strtotime($student_info['create_time'].' +180 days')); ?></label>
							</div>
						</div>
						<br/>
						<div class="icon-box mb-0 p-0">
							<a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10"><i class="pe-7s-global"></i></a>
							<p class="text-gray">Reset Password</p>
						</div>
						<hr>
						<form class="form-submit" action="<?=site_url('student/resetpassword');?>" class="register-form" method="post">
							<div class="row">
								<div class="form-group col-md-6">
									<label>New Password</label>
									<input name="password" class="form-control" type="password" value="">
								</div>
								<div class="form-group col-md-6">
									<label>Confirm Password</label>
									<input name="confirm" class="form-control" type="password" value="">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<div class="g-recaptcha" data-sitekey="6Lc6Z-gUAAAAAFY-gUMX2C3HolMt4CCWGRNkWBgT"></div>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-colored btn-theme-colored2 btn-lg btn-block mt-15" type="submit" data-loading-text="Please wait...">Reset</button>
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="icon-box mb-0 p-0">
							<a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10"><i class="pe-7s-users"></i></a>
							<p class="text-gray">Personal Details</p>
						</div>
						<hr>
						<form class="form-submit" action="<?=site_url('student/update_information');?>" class="register-form" method="post">
							<div class="row">
								<div class="form-group col-md-6">
									<label>Name</label>
									<input name="name" class="form-control" type="text" value="<?=$profile->name;?>">
								</div>
								<div class="form-group col-md-6">
									<label>Phone</label>
									<input name="phone" class="form-control" type="text" value="<?=$profile->contact;?>">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<label>Email Address</label>
									<input name="email_id" class="form-control" type="email" value="<?=$profile->email_id;?>" readonly>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>Program</label>
									<input name="program" class="form-control" type="text" value="<?=$profile->program;?>">
								</div>
								<div class="form-group col-md-6">
									<label>Qualification</label>
									<input name="qualification" class="form-control" type="text" value="<?=$profile->qualification;?>">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>DOB</label>
									<input name="dob" class="form-control" id="datetimepicker4" type="text" value="<?=$profile->dob;?>">
								</div>
								<div class="form-group col-md-6">
									<label>Gender</label>
									<select name="gender" class="form-control">
										<option value="M" <?=(($profile->gender == 'M')?'selected':'');?> >Male</option>
										<option value="F" <?=(($profile->gender == 'F')?'selected':'');?> >Female</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<label>Address</label>
									<textarea name="address" class="form-control"><?=$profile->address;?></textarea>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<div class="g-recaptcha" data-sitekey="6Lc6Z-gUAAAAAFY-gUMX2C3HolMt4CCWGRNkWBgT"></div>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-colored btn-theme-colored2 btn-lg btn-block mt-15" type="submit" data-loading-text="Please wait...">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>  
	<!-- end main-content -->
	<?php 
		$this->load->view("default/footer");
	?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?=base_url();?>js/custom.js"></script>
<script src="<?=base_url();?>js/gaurav-js.js"></script>
<?php
	$this->load->view("default/footer_script");
?>
<script>
$('#datetimepicker4').datetimepicker({
	viewMode: 'years',
	format: 'YYYY-MM-DD'
});
</script>
</body>
</html>