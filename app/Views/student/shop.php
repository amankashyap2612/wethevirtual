
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

		<section class="">
			<div class="container mt-30 mb-30 p-30">
				<div class="section-content">
					<div class="row">
						<div class="col-sm-12 col-md-9">
							<div class="row multi-row-clearfix">
								<div class="products">
								<?php foreach($course as $prog_id => $prog_arry){ ?>
									<?php foreach($prog_arry as $course_id => $crs){ ?>
									<div class="col-sm-6 col-md-4 col-lg-4 mb-30">
										<div class="product pb-0">
										<!-- <span class="tag-sale">Sale!</span> -->
										<div class="product-thumb"> 
										<img alt="<?=$crs->img_alt;?>" title="<?=$crs->img_title;?>" src="<?=base_url("images/".$image_detail[$crs->img_id]);?>" class="img-responsive img-fullwidth">
										<div class="overlay">
										<div class="btn-add-to-cart-wrapper">
										<a class="add-cart btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" data-course="<?=$crs->course_code;?>" href="#">Add To List</a>
										</div>
										<!--
										<div class="btn-product-view-details">
										<a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
										</div>
										-->
										</div>
										</div>
										<div class="product-details text-center bg-lighter pt-15 pb-10">
										<a href="#"><h5 class="product-title mt-0"><?=ucfirst($crs->course_code);?></h5></a>
										<a href="#"><h5 class="product-title mt-0"><?=ucfirst($crs->title);?></h5></a>
										<!--
										<div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 67%;">3.50</span></div>
										<div class="price"><del><span class="amount">$110.00</span></del><ins><span class="amount">$90.00</span></ins></div>
										-->
										</div>
										</div>
									</div>
									<?php } ?>
								<?php } ?>
									<div class="col-md-12">
										<nav>
										<ul class="pagination theme-colored mt-0">
											<li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">...</a></li>
											<li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
										</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="sidebar sidebar-right mt-sm-30">
								<div class="widget">
									<?php 
										if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0)
										{
											echo '<h5 class="widget-title line-bottom">Your Course List</h5>';
											echo '<ul class="list list-border angle-double-right">';
												foreach($_SESSION['cart'] as $cnt => $list)
												{
													echo '<li>'.$list.'</li>';
												}
											echo '</ul>';
										}
									?>
								</div>
								<div class="widget">
									<h5 class="widget-title line-bottom">Categories</h5>
									<div class="categories">
										<ul class="list list-border angle-double-right">
										<?php foreach($category as $cat){  ?>
											<li><a href="<?=site_url('student/shop');?>?prg=<?=$cat->program_id;?>"><?=ucfirst($cat->title);?><span>(<?=$cat->cnt;?>)</span></a></li>
										<?php } ?>
										</ul>
									</div>
								</div>
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

<!-------  Error Modal  ---------->
<div class="modal fade" id="error-Modal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" id="modal-title"></h4>
			</div>
			<div class="modal-body" > 
				<p style="text-align:center;" id="error_msg"></p>
			</div>
		</div>
	</div>
</div>
<!--\\------  Error Modal  ---------->


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

$('.add-cart').on('click',function(){
	var course_code = $(this).data('course');
	$('#preloader').show();
	$.ajax({
		url: '<?= site_url("student/addcart"); ?>',
		data: {'code':course_code},
		type: 'post',
		dataType: 'json',
		cache: false,
		success: function(result){
			if(result.success)
			{
				location.reload();
			}
			else
			{
				$("#modal-title").html("Error Message");
				$("#error_msg").html(result.message.refrence);
				$("#error-Modal").modal("show");
			}
		}
	});
	$('#preloader').hide();
	return false;
});
</script>
</body>
</html>