<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<?php include("default/header_script.php"); ?>

<!-- Favicon and Touch Icons -->
<link href="<?=base_url('images/favicon.png');?>" rel="shortcut icon" type="image/png">
<link href="<?=base_url('images/apple-touch-icon.png');?>" rel="apple-touch-icon">
<link href="<?=base_url('images/apple-touch-icon-72x72.png');?>" rel="apple-touch-icon" sizes="72x72">
<link href="<?=base_url('images/apple-touch-icon-114x114.png');?>" rel="apple-touch-icon" sizes="114x114">
<link href="<?=base_url('images/apple-touch-icon-144x144.png');?>" rel="apple-touch-icon" sizes="144x144">

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

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?=base_url('js/revolution-slider/css/settings.css');?>" rel="stylesheet" type="text/css"/>
<link  href="<?=base_url('js/revolution-slider/css/layers.css');?>" rel="stylesheet" type="text/css"/>
<link  href="<?=base_url('js/revolution-slider/css/navigation.css');?>" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?=base_url('css/colors/theme-skin-color-set2.css');?>" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?=base_url('js/jquery-2.2.4.min.js');?>"></script>
<script src="<?=base_url('js/jquery-ui.min.js');?>"></script>
<script src="<?=base_url('js/bootstrap.min.js');?>"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?=base_url('js/jquery-plugin-collection.js');?>"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?=base_url('js/revolution-slider/js/jquery.themepunch.tools.min.js');?>"></script>
<script src="<?=base_url('js/revolution-slider/js/jquery.themepunch.revolution.min.js');?>"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
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
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/5.gif">
    </div>
   <!-- <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div> -->
  </div>
  
  <?php include("default/header.php");?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34" style="margin:0px auto; background-color:#ffffff; padding:0px; margin-top:0px; margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul >
              
              <!-- SLIDE 1 -->
			  <?php $i=1; foreach($slider as $sld){ 
			  
			  //if($i ==4){
			  //break ;
			//	}
				?>
              <li data-index="rs-<?=$i;?>" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?=base_url('images');?>/<?=$image_detail[$sld->img]?>" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="<?=base_url('images');?>/<?=$image_detail[$sld->img]?>" data-bgposition="center 30%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-1" 
                  id="slide-<?=$i;?>-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1500;e:Power3.easeInOut;" 
                  data-start="0"
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-<?=$i;?>-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['48','42','38','28']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','720','640','460']"
                  data-height="none"
                  data-whitespace="normal"
                  data-frames='[{"from":"y:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><?=$sld->top_line;?>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-center text-white rs-parallaxlevel-0" 
                  id="slide-<?=$i;?>-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',16',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><?=$sld->bottom_text;?>
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-<?=$i;?>-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
					<?php if($sld->link_button == 'Y') { ?>
							<a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" target="_blank" href="<?=$sld->url_ref;?>">View</a>
					<?php } if($sld->form_button == 'Y'){ ?>
							<a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#" data-toggle="modal" data-target="#Quote-Modal">Get a Quote</a>
					<?php } ?>
                </div>
              </li>
			  <?php $i++; } ?>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.2);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
          var tpj=jQuery;
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:5000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->

      </div>
    </section>
	<!--<?php if(count($news) > 0){ ?>
	<!-- Divider: Call To Action 
	<section class="bg-theme-colored2">
		<div class="container pt-0 pb-0">
			<div class="row">
				<div class="call-to-action sm-text-center pt-30 pb-20 pb-sm-30">
					<div class="col-md-12">
						<marquee onmouseover="this.stop();" onmouseout="this.start();">
						<h3 class="mt-5 text-white font-weight-600">
							<?php foreach($news as $nws){ ?>
								<a href="<?=$nws->link;?>" class="text-white"><?=$nws->headline;?></a> |
							<?php } ?>
						</h3>
						</marquee>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	
	
	<!-- Section: Features -->
    <section id="features">
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
            <?php  foreach($event_cat as $cat){  ?>
			<div class="col-sm-6 col-md-4">
              <div class="feature-item maxwidth400 mb-sm-30">
                <div class="thumb">
                  <img src="<?=base_url('images/'.$image_detail[$cat->img]);?>" alt="<?=$cat->alt;?>" title="<?=$cat->title;?>" class="img-fullwidth">
                  <div class="title">
                     <a href="<?=site_url('event/'.$cat->category)?>"><h3> <?=ucfirst($cat->category);?><i class="fa fa-caret-right pull-right mt-5"></i></h3></a>
					 
                    <p><?=$cat->description;?></p>
                    <a href="<?=site_url('event/'.$cat->category)?>" class="text-theme-colored2">Read More <span class="fa fa-angle-right"></span></a>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
	<section id="gallery">
		<div class="container">
			<div class="section-title text-center">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="text-uppercase title">Project<span class="text-theme-colored2"> Gallery</span></h2>
						<div class="diamond-line-centered-theme-colored2"></div>
					</div>
				</div>
			</div>
			<div class="section-content">
				<div class="row">
					<div class="col-md-12">
						<!-- Works Filter -->
						<div class="portfolio-filter text-center">
							<a href="#" class="active" data-filter="*">All</a>
							<?php foreach($event_cat as $cat){ ?>
								<a href="#<?=$cat->category;?>" class="" data-filter=".<?=$cat->id;?>"><?=ucfirst($cat->category);?></a>
							<?php } ?>
						</div>
						<!-- End Works Filter -->
              
						<!-- Portfolio Gallery Grid -->
						<div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">
						<?php foreach($event as $eve){ ?>
						<!-- Portfolio Item Start -->
							<div class="gallery-item <?=$eve->event_cat;?>">
								<div class="project-gallery">
									<div class="project-thumb">
										<img class="img-fullwidth" style="height:182px;" title="<?=$eve->title;?>" alt="<?=$eve->alt;?>" src="<?=base_url('images/'.$image_detail[$eve->img]);?>">
										<div class="project-caption">
											<h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20"><?=$eve->name;?></h3>
											<!--
											<p class="text-white description">Fixed Price: <?=$eve->fixed_price;?></p>
											<p class="text-white description">Addon Per Person: <?=$eve->addon_price;?></p>
											-->
											<a href="#" class="text-white font-13" data-toggle="modal" data-target="#Quote-Modal">Get a Quote <span class="fa fa-angle-right"></span></a>                  
										</div>
									</div>
								</div>
							</div>
						<!-- Portfolio Item End -->
						<?php } ?>
						</div>
					<!-- End Portfolio Gallery Grid -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php if(count($testimonial) > 0){ ?>
	<!-- Section: Client Say -->
	<section class="layer-overlay overlay-theme-colored-9 parallax" data-bg-img="http://www.wethevirtual.com/images/homeslider/202006241749525.jpg">
		<div class="container pt-90 pb-70">
			<div class="section-title text-center">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="text-uppercase text-white title">Customer<span class="text-theme-colored2"> Feedback</span></h2>
						<div class="line-bottom-centered"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="owl-carousel-1col nav-testimonials" data-dots="true">
					<?php foreach($testimonial as $tst){ ?>
						<div class="item">
							<div class="testimonial-wrapper text-center">
								<div class="content pt-10">
									<p class="font-17 text-white font-weight-300"><?=$tst->message;?></p>
									<div class="thumb mt-30"><img class="img-circle img-thumbnail mb-15" alt="" src="<?=base_url('images/'.(isset($image_detail[$tst->img])?$image_detail[$tst->img]:'testimonials/1.jpg'));?>" width="72"></div>
									<h5 class="author text-white mt-0 mb-5"><?=$tst->name;?> <span class="text-theme-colored2 font-14"></span></h5>
									<p class="text-gray-darkgray"><?=date('d M Y',strtotime($tst->comment_date));?></p>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	<!-- Section: Team 
	<section id="team">
		<div class="container pb-20">
			<div class="section-title text-center">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="text-uppercase title">Meet Our<span class="text-theme-colored2"> Team</span></h2>
						<div class="diamond-line-centered-theme-colored2"></div>
					</div>
				</div>
			</div>
			<div class="section-content">
				<div class="row">
				<?php foreach($team as $tm){ ?>
					<div class="col-sm-6 col-md-4">
						<div class="single-member maxwidth400 mb-30">
							<div class="team-thumb">
								<img src="<?=base_url('images/'.$image_detail[$tm->img]);?>" alt="" class="img-fullwidth">
								<h4 class="text-uppercase font-raleway text-white font-16 line-bottom-center m-0"><?=ucfirst($tm->name);?> <span class="text-white font-12 ml-5">- <?=$tm->specialist;?></span></h4>
							</div>
							<div class="team-bottom-part bg-white p-15">
								<p class="mb-10"><?=$tm->detail;?></p>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>
-->
    <!--
    <section class="clients bg-silver-light">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel-6col clients-logo transparent text-center">
              <div class="item"> <a href="#"><img src="images/clients/1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
	-->
  </div>
  <!-- end main-content -->
  <!-- Footer -->
  <?php include("default/footer.php"); ?>
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
						<form action="<?= site_url('form/getquote');?>" method="post" class="form-submit reservation-form mb-0 bg-silver-deep p-30">
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
<!-- JS | Chart-->
<script src="<?=base_url('s/chart.js');?>"></script>
<!-- JS | Custom script for all pages -->
<script src="<?=base_url('js/custom.js');?>"></script>
<script src="<?=base_url('js/gaurav-js.js');?>"></script>



<?php include("default/footer_script.php"); ?>
</body>
</html>