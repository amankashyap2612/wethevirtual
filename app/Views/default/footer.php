<!-- Footer -->
<footer id="footer" class="footer layer-overlay overlay-dark-9 parallax border-top-theme-colored2-5px" data-bg-img="<?=base_url('images/bg/8.jpg')?>">
    <div class="container pt-70 pb-40">
		<div class="col-md-12">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="widget dark">
						<h4 class="widget-title">Office Details</h4>
						<p class="mt-20"><?=(isset($settings['office_address'])?$settings['office_address']:''); ?></p>
						<ul class="list-inline">
							
							<?php if(isset($settings['contact'])){ ?>
                
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-gray mr-5"></i> <a class="text-gray" href="tel:<?=str_replace(" ","",str_replace("-","",$settings['contact']));?>"><?=$settings['contact'];?></a> </li>
							<?php } ?>
							<?php if(isset($settings['email_id'])){ ?>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-gray mr-5"></i> <a class="text-gray" href="mailto:<?=trim($settings['email_id']);?>"><?=$settings['email_id'];?></a> </li>
							<?php } ?>
						</ul>            
						<ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled clearfix mt-10">
							<?php echo (isset($settings['facebook'])?'<li><a href="'.$settings['facebook'].'"><i class="fa fa-facebook"></i></a></li>':''); ?>
							<?php echo (isset($settings['twitter'])?'<li><a href="'.$settings['twitter'].'"><i class="fa fa-twitter"></i></a></li>':''); ?>
							<?php echo (isset($settings['instagram'])?'<li><a href="'.$settings['instagram'].'"><i class="fa fa-instagram"></i></a></li>':''); ?>
							<?php echo (isset($settings['linkedin'])?'<li><a href="'.$settings['linkedin'].'"><i class="fa fa-linkedin"></i></a></li>':''); ?>
							<?php echo (isset($settings['youtube'])?'<li><a href="'.$settings['youtube'].'"><i class="fa fa-youtube"></i></a></li>':''); ?>
						</ul>
					</div>
				</div>
				 
				<div class="col-sm-6 col-md-4">
					<div class="widget dark">
						<h4 class="widget-title">Useful Links</h4>
						<div class="row clearfix">
							<div class="col-xs-12 col-sm-6 col-md-12">
								<ul>
									<li><a href="<?= site_url("marketing-videos"); ?>">PCTI Videos</a></li>
									<li><a href="<?= site_url("student-registration"); ?>">Student Registration</a></li>
									<li><a href="<?= site_url("about-us"); ?>">About Us</a></li>
									<li><a href="<?= site_url("testimonial"); ?>">Testimonial</a></li>
									<li><a href="<?= site_url("fees-status"); ?>">Fees Status</a></li>
									<li><a href="<?= site_url("online-classroom"); ?>" class="blinking">Online Free Classes</a></li>
									<li><a href="http://pctiltd.com/podcasts.html" target="_blank" rel="nofollow">Podcasts</a></li>
									<li><a href="<?= site_url("pcti-news"); ?>">Pcti NEWS</a></li>
									<li><a href="<?= site_url("upskills"); ?>">Upskills</a></li>
									<!--
									<li><a href="<?= site_url("join-us"); ?>">Join Us</a></li>
									-->
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="widget dark">
						<h4 class="widget-title">Subscribe Now</h4>
						<div class="widget-subscribe">
							<h5 class="subscribe-title text-gray">To get latest news and update keep connected with us by mailing</h5>
							<p class="subscribe-sub-title">Subscribe to Connect with us</p>
							<form class="form-submit" action="<?=site_url('form/subscribe');?>" method="post" novalidate>
								<div class="input-group">
									<input value="" name="email" placeholder="Your Email" class="form-control" data-height="45px" style="height:45px;" type="email">
									<span class="input-group-btn">
										<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">				
										<button data-height="45px" class="btn btn-colored btn-theme-colored2 text-white m-0" type="submit"><i class="fa fa-paper-plane-o font-20"></i></button>
									</span>
								</div>
							</form>
							<!-- Subscription Form Validation-->
							
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div class="footer-bottom" data-bg-color="#253039">
		<div class="container pt-20 pb-20">
			<div class="row">
				<div class="col-md-6">
				<?php if(isset($settings['copyright'])){ ?>
					<p class="font-12 text-black-777 m-0"><?=$settings['copyright']?></p>
					<?php }?>
				</div>
				<div class="col-md-6 text-right">
					<div class="widget no-border m-0">
					<ul class="list-inline sm-text-center mt-5 font-12">
						<li> <a href="<?= site_url("terms"); ?>">Terms & Conditions</a> </li>
						<li>|</li>
						<li> <a href="<?= site_url("privacy-policy"); ?>">Privacy Policy</a> </li>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!--
<div class="modal fade" id="information-modal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-theme-colored2">
				<div class="col-md-6 ">
				<h5 class="modal-title">Important Information</h5>
				</div>
				<div class="col-md-6 ">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
			</div>
			<div class="modal-body">
				<!--	<h3>Dear IGNOU Learners,</h3>
			<p>IGNOU December 2021 Exam will be held from 4<sup>th</sup> March, 2022 to 11<sup>th</sup> April, 2022. </p> 
				<h5>IGNOU Assignment submission last date is 31<sup>st</sup> May, 2022</h5>
				<hr style="border:1px; border-top: 1px solid #16c0d5;"> -->
				<!--
				<p>Hurry up!!.. Limited seats!!. <br>Last date for B.VOC –  <span class="text-theme-colored2">TISS (TATA INSTITUTE OF SOCIAL SCIENCES)</span> Program is <br>30<sup>th</sup> September,2021. </p>
				
				--><!--
				<img src="https://www.pcti.pctiltd.com/images/ignou_placement.jpg" height="500px" width="570px"/>
			</div>
		</div>
	</div>
</div> -->