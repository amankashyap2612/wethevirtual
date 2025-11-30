<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<?php include("default/header_script.php"); ?>

<!-- Favicon and Touch Icons -->
<link href="<?=base_url('images/favicon.png');?>" rel="shortcut icon" type="image/png">
<link href="<?=base_url('images/capture-phone.png');?>" rel="apple-touch-icon">
<link href="<?=base_url('images/capture-phone.png');?>" rel="apple-touch-icon" sizes="72x72">
<link href="<?=base_url('images/capture-phone.png');?>" rel="apple-touch-icon" sizes="114x114">
<link href="<?=base_url('images/capture-phone.png');?>" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?=base_url('css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?=base_url('css/jquery-ui.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?=base_url('css/animate.css');?>" rel="stylesheet" type="text/css">
<link href="<?=base_url('css/css-plugin-collections.css');?>" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="<?=base_url('css/menuzord-megamenu.css');?>" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="<?=base_url('css/menuzord-skins/menuzord-rounded-boxed.css');?>" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?=base_url('css/style-main.css');?>" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?=base_url('css/preloader.css');?>" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?=base_url('css/custom-bootstrap-margin-padding.css');?>" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?=base_url('css/responsive.css');?>" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<link href="<?=base_url('css/style.css');?>" rel="stylesheet" type="text/css"> 

<!-- CSS | Theme Color -->
<link href="<?=base_url('css/colors/theme-skin-color-set2.css');?>" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?=base_url('js/jquery-2.2.4.min.js');?>"></script>
<script src="<?=base_url('js/jquery-ui.min.js');?>"></script>
<script src="<?=base_url('js/bootstrap.min.js');?>"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?=base_url('js/jquery-plugin-collection.js');?>"></script>



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
      <img alt="" src="<?=base_url('images/preloaders/5.gif');?>">
    </div>
   <!-- <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div> -->
  </div>
  
  
  <?php include("default/header.php");?>
  
  <!-- Start main-content -->
  <div class="main-content">

  <?php 
		include("default/banner.php");
	?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-8 <?= (($page_info->form=='N')?'col-md-push-2':''); ?>">
					<div class="text-gray icon-box mb-0 p-0">
						<?=$page_info->main_content;?>
					</div>
					<?php foreach($testimonial as $tst){ ?>
					<div class="entry-content border-1px p-20 pr-10 mb-10">
						<div class="entry-meta media mt-0 no-bg no-border">
							<div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
								<ul>
									<li class="font-16 text-white font-weight-600"><?=date('d',strtotime($tst->comment_date));?></li>
									<li class="font-12 text-white text-uppercase"><?=date('M',strtotime($tst->comment_date));?></li>
									<li class="font-16 text-white font-weight-600"><?=date('Y',strtotime($tst->comment_date));?></li>
								</ul>
							</div>
							<div class="media-body pl-15">
								<div class="event-content pull-left flip">
									<h4 class="entry-title text-gray text-uppercase m-0 mt-5">
									<img src="<?=web_url();?>images/<?= $images[$tst->img]->location; ?>" width="200px"><?=$tst->name?></h4>
									<p class="mt-10"> <?=$tst->message?></p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<?php } ?>
				</div>
				<?php if($page_info->form=='Y'){ ?>
				<div class="col-md-4">
					<div class="icon-box mb-0 p-0">
						<h4 class="text-gray pt-10 mt-0 mb-30">Drop your testimonial here:</h4>
					</div>
					<form  id="testform" class="form-submit" action="<?=site_url('form/testimonial');?>" class="register-form" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="form-group col-md-8">
								<label>Your Picture Dimensions(75x75)</label>
								<input name="profile" onchange="preview_image(event,'profile-img-box')" class="form-control" type="file">
							</div>
							<div class="col-md-4">
								<img id="profile-img-box" src="<?=base_url()?>images/testimonials/1.jpg">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<label>Name</label>
								<input name="name" class="form-control" type="text">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<label>Phone</label>
								<input name="phone" class="form-control" type="text">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<label>Email Address</label>
								<input name="email_id" class="form-control" type="email">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<label for="form_choose_password">Message</label>
								<textarea id="form_choose_password" name="message" class="form-control"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<div class="g-recaptcha" data-sitekey="6Le1na8ZAAAAAN-mpDIFHUuwZ5_CVyWa0Nr30CrO"></div> 
							</div>
						</div>
						<div class="form-group">
							<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
							<button class="btn btn-colored btn-theme-colored2 btn-lg btn-block mt-15" type="submit" data-loading-text="Please wait...">Submit</button>
						</div>
					</form>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	</div>  
  <!-- end main-content -->
  <?php 
		include("default/footer.php");
	?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?=base_url('js/custom.js');?>"></script>
<script src="<?=base_url('js/gaurav-js.js');?>"></script>
<?php
include("default/footer_script.php");
?>
</body>
</html>