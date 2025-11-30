<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<?php $this->load->view("default/header_script"); ?>

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
<link id="menuzord-menu-skins" href="<?=base_url();?>css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
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
<link href="<?=base_url();?>css/colors/theme-skin-color-set2.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?=base_url();?>js/jquery-2.2.4.min.js"></script>
<script src="<?=base_url();?>js/jquery-ui.min.js"></script>
<script src="<?=base_url();?>js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?=base_url();?>js/jquery-plugin-collection.js"></script>



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
  $this->load->view("default/header");
  ?>
  
  <!-- Start main-content -->
  <div class="main-content">

    <?php 
		$this->load->view("default/banner");
	?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-gray icon-box mb-0 p-0">
						<?=$page_info->main_content;?>
					</div>
					<div class="text-gray icon-box mb-0 p-0">
						<div class="row">
							<div class="col-md-12">
								<h4 class="widget-title title-dots mt-30"><span>Select The School For Admission</span></h4>
							</div>
							<?php foreach($school as $sch){ ?>
							<div class="col-xs-12 col-sm-4 col-md-4">                  
								<article class="post media-post clearfix pb-0 mb-10">
									<a class="post-thumb" href="#"><img src="<?=base_url('images/'.$image_detail[$sch->img]);?>" style="width:180px;" title="<?=$sch->title;?>" alt="<?=$sch->alt;?>"></a>
									<div class="post-right">
										<h5 class="entry-title text-uppercase mt-0 mb-5"><?= $sch->school_title; ?></h5>
										<p class="post-date mb-10 font-12"><?=ucfirst($sch->shift);?> Shift</p>
										<p><?=$sch->description;?></p>
										<p>
											<form class="form-submit" action="<?=site_url('form/admission');?>" method="post">
												<input type="hidden" name="school_id" value="<?=$sch->id;?>">
												<button class="btn btn-colored btn-theme-colored2 btn-lg btn-block mt-15">Admission</button>
											</form>
										</p>
									</div>
								</article>
							</div>
							<?php } ?>
						</div>
					</div>
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