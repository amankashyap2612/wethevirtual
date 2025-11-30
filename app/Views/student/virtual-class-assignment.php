
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
				<div class="col-md-8">
					<div class="icon-box mb-0 p-0">
						<h4 class="text-gray pt-10 mt-0 mb-30">Virtual Class 2020 Assignment</h4>
					</div>
					<div class="row">
					<?php if(isset($virtual_class_assignment)){ foreach($virtual_class_assignment as $batch => $student){ ?>
						<div class="col-md-12" id="transaction-info">
							<h3><?=ucfirst($batch);?></h3>
							<?php foreach($student as $stu_id => $cnt){ foreach($cnt as $val){ ?>
							<div class="payment-method">
								<div class="row">
									<div class="col-md-6">
										<h4> <?=$val['name'];?></h4>
									</div>
									<div class="col-md-6">
										<p><a href="<?=base_url($val['file']);?>" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block">Download</a></p>
									</div>
								</div>
							</div>
							<?php } } ?>
						</div>
					<?php } }  ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box mb-0 p-0">
						<h4 class="text-gray pt-10 mt-0 mb-30">Assignment Submission:</h4>
					</div>

				<?php $this->load->view("form/virtual_assignment"); ?>
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
</body>
</html>