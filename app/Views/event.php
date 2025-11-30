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


<style>
.modal-header{
	background-color: #b00409;
}
.modal-title{
	color: #fff;
    font-weight: 600;
    letter-spacing: 1px;
}
</style>

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
				<div class="section-title text-center">
				  <div class="row">
					<div class="col-md-8 col-md-offset-2">
					  <h2 class="text-uppercase title">Event <span class="text-theme-colored2">Types</span></h2>
					  <div class="diamond-line-centered-theme-colored2"></div>
					</div>
				  </div>
				</div>
				<div class="section-content">
				  <div class="row">
					<?php $i=0; foreach($event as $cat){ ?>
					<div class="col-sm-6 col-md-4">
					  <div class="feature-item maxwidth400 mb-sm-30">
						<div class="thumb">
						  <img src="<?=base_url('images/'.$image_detail[$cat->img]);?>" alt="<?=$cat->alt;?>" title="<?=$cat->title;?>" class="img-fullwidth">
						  <div class="title">
							<h3> <?=ucfirst($cat->name);?><i class="fa fa-caret-right pull-right mt-5"></i></h3>
							<!--
							<p>Fixed Price: <?=$cat->fixed_price;?></p>
							<p>Addon Per Person: <?=$cat->addon_price;?></p>
							<p><?=$cat->description;?></p>
							-->
							<a href="#" class="text-white font-13" data-toggle="modal" data-target="#Quote-Modal">Get a Quote <span class="fa fa-angle-right"></span></a>  
						  </div>
						</div>
					  </div>
					</div>
					<?php $i++; if($i%3 == 0){ echo ' </div> <div class="row mt-10"> '; } } ?>
					
				  </div>
				</div>
			  </div>
	</section>
	<!-- Divider: Google Map -->
    
  </div>  
  <!-- end main-content -->
  <?php 
		include("default/footer.php");
	?>

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->


<!-------  Enquiry Modal  ---------->
<div class="modal fade" id="Quote-Modal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content mt-140">
			<div class="modal-header">
				<button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Get a Quote</h4>
			</div>
			<div class="modal-body" > 
				<div class="row">
					<div class="col-md-12">
						<!-- Register Form Starts -->
						<form action="<?=site_url('form/getquote');?>" method="post" class="form-submit reservation-form mb-0 bg-silver-deep p-30">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group mb-15">
									<input placeholder="Name" name="name" class="form-control" required="" aria-required="true" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group mb-15">
									<input placeholder="Email ID" name="email_id" class="form-control" required="" aria-required="true" type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group mb-15">
									<input placeholder="Phone Number" name="phone" class="form-control" required="" aria-required="true" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group mb-15">
									<input placeholder="Event" name="event" class="form-control" required="" aria-required="true" type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-30">
									<textarea placeholder="Message" name="message" class="form-control" required="" aria-required="true"></textarea>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group mb-0 mt-0">
									<div class="g-recaptcha" data-sitekey="6Le1na8ZAAAAAN-mpDIFHUuwZ5_CVyWa0Nr30CrO" style="transform:scale(0.73);transform-origin:0;-webkit-transform:scale(0.73);
	transform:scale(0.73);-webkit-transform-origin:0 0;transform-origin:0 0; margin-bottom:-16px;margin-top: 6px;"></div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group mb-0 mt-10">
									<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
									<button type="submit" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" data-loading-text="Please wait...">Submit</button>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--\\------  Enquiry Modal  ---------->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?=base_url('js/custom.js');?>"></script>
<script src="<?=base_url('js/gaurav-js.js');?>"></script>
<?php
include("default/footer_script.php");
?>
</body>
</html>