
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

<style>
.modal-header{
	background-color: #00BBD1;
}
.modal-title{
	color: #fff;
    font-weight: 600;
    letter-spacing: 1px;
}
</style>

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
					<?php foreach($class as $cls_date => $cls_arr) { ?>
					<div class="icon-box mb-0 p-0">
						<h4 class="text-gray pt-10 mt-0 mb-30"><?=date('d M Y',strtotime($cls_date));?></h4>
					</div>
					<div class="row multi-row-clearfix">
						<div class="products">
							<?php foreach($cls_arr as $cls){ ?>
							<div class="col-sm-6 col-md-4 col-lg-4 mb-30">
								<div class="product pb-0">
									<div class="product-thumb" style="padding: 30px;text-align: -webkit-center;"> 
										<a href="#" class="play-video" data-toggle="modal" data-target="#video-Modal" data-title="<?=ucfirst($cls->topic);?>" data-id="<?=$cls->id;?>" data-video="<?=$cls->video_url;?>">
											<img alt="play" title="Play" src="<?= base_url("images/play-button/b3.png"); ?>" class="img-responsive" style="width: 30%;">
										</a>
									</div>
									<div class="product-details text-center bg-lighter pt-15 pb-10">
										<h5 class="product-title mt-0"><?=ucfirst($cls->topic);?></h5>
										<h5 class="product-title mt-0"><?=date('d M Y',strtotime($cls->class_date));?></h5>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<?php } ?>
					<div class="text-gray icon-box mb-0 p-0">
						<!--- Add Page content Here --->
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box mb-0 p-0">
						<h4 class="text-gray pt-10 mt-0 mb-30">Feel Free to Contact Us:</h4>
					</div>

				<?php $this->load->view("form/pagecontact"); ?>
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



<!-------  Video Modal  ---------->
<div class="modal fade" id="video-Modal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" id="modal-title">Course Title</h4>
			</div>
			<div class="modal-body" > 
				<video width="100%" id="played_video" controls controlsList="nodownload">
					<source id="video_src" src="<?=base_url('video/20-20-class/sample.mp4');?>" type="video/mp4">
				</video>
			</div>
			<div class="modal-footer">
				<button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--\\------  Video Modal  ---------->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?=base_url();?>js/custom.js"></script>
<script src="<?=base_url();?>js/gaurav-js.js"></script>
<script>
jQuery('#video-Modal').on('hidden.bs.modal', function (e) {
  // do something...
  video = document.getElementById('played_video');
  video.pause();
});

$(".play-video").on("click",function(){
	video = document.getElementById('played_video');
	var base_url = '<?=base_url();?>';
	var video_id = $(this).data("id");
	var video_url = $(this).data("video");
	var title = $(this).data("title");
	var url = base_url+video_url;
	$('#video_src').attr('src',url);
	$('#modal-title').html(title);
	$.ajax({
		url: '<?= site_url("form/video_count_2020"); ?>',
		data: {'video_id':video_id},
		type: 'post',
		dataType: 'json',
		cache: false,
		success: function(result){
			if(result.success)
			{
				video.load();
			}
		}
	});
	//return false;
});
</script>
<script language="JavaScript">
window.onload = function () {
	document.addEventListener("contextmenu", function (e) {
		e.preventDefault();
	}, false);
	document.addEventListener("keydown", function (e) {
		//document.onkeydown = function(e) {
		// "I" key
		if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
			disabledEvent(e);
		}
		// "J" key
		if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
			disabledEvent(e);
		}
		// "S" key + macOS
		if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
			disabledEvent(e);
		}
		// "U" key
		if (e.ctrlKey && e.keyCode == 85) {
			disabledEvent(e);
		}
		// "F12" key
		if (event.keyCode == 123) {
			disabledEvent(e);
		}
	}, false);
	function disabledEvent(e)
	{
		if (e.stopPropagation) {
			e.stopPropagation();
		} else if (window.event) {
			window.event.cancelBubble = true;
		}
		e.preventDefault();
		return false;
	}
}
</script>
<?php
	$this->load->view("default/footer_script");
?>
</body>
</html>