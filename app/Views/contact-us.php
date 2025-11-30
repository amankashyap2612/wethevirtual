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
          <div class="col-md-6 <?= (($page_info->form=='N')?'col-md-push-3':''); ?>">
              <div class="icon-box mb-0 p-0">
                <h4 class="text-gray pt-10 mt-0 mb-30">Contact Details:</h4>
              </div>
			  <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                  <i class="pe-7s-users"></i>
                </a>
                <p class="text-gray"><?= $settings['office_address']; ?></p>
              </div>
              <hr>
			  <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                  <i class="pe-7s-call"></i>
                </a>
                <p class="text-gray"><?= $settings['contact']; ?></p>
              </div>
              <hr>
              <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                  <i class="pe-7s-call"></i>
                </a>
                <p class="text-gray"><?= $settings['ivr1']; ?>, <?= $settings['ivr2']; ?></p>
              </div>
              <hr>
			  <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                  <i class="pe-7s-mail"></i>
                </a>
                <p class="text-gray"><?= $settings['email_id']; ?></p>
              </div>
			  <hr>
			  <div class="icon-box mb-0 p-0">
			  <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled clearfix mt-10">
					<?php echo (isset($settings['facebook'])?'<li><a href="'.$settings['facebook'].'"><i class="fa fa-facebook" style="font-size:10px;" ></i></a></li>':''); ?>
					<?php echo (isset($settings['twitter'])?'<li><a href="'.$settings['twitter'].'"><i class="fa fa-twitter" style="font-size:10px;" ></i></a></li>':''); ?>
					<?php echo (isset($settings['instagram'])?'<li><a href="'.$settings['instagram'].'"><i class="fa fa-instagram" style="font-size:10px;" ></i></a></li>':''); ?>
					<?php echo (isset($settings['linkedin'])?'<li><a href="'.$settings['linkedin'].'"><i class="fa fa-linkedin" style="font-size:10px;" ></i></a></li>':''); ?>
					<?php echo (isset($settings['youtube'])?'<li><a href="'.$settings['youtube'].'"><i class="fa fa-youtube" style="font-size:10px;" ></i></a></li>':''); ?>
			  </ul>
			  </div>
              
          </div>
				<?php if($page_info->form=='Y'){ ?>
				<div class="col-md-6">
					<div class="icon-box mb-0 p-0">
						<h4 class="text-gray pt-10 mt-0 mb-30">Feel Free to Contact Us:</h4>
					</div>
					
          <?php include("form/pagecontact.php"); ?>
				</div>
			<?php } ?>
			</div>
		</div>
	</section>
	<!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">
          <iframe src="<?=(isset($settings['google_map'])?$settings['google_map']:'');?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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