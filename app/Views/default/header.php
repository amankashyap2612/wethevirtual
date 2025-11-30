<!-- Header -->
<header id="header" class="header header-floating header-transparent-dark dark-light">
	<div class="header-top bg-theme-colored2 sm-text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="widget text-white">
						<ul class="list-inline xs-text-center text-white">
							<li class="m-0 pl-10 pr-10"> 
								<a href="tel:<?=str_replace(" ","",str_replace("-","",$settings['contact']));?>" class="text-white"><i class="fa fa-phone text-white"></i> <?=$settings['contact'];?></a> 
							</li>
							<li class="m-0 pl-10 pr-10"> 
								<a href="mailto:<?=trim($settings['email_id']);?>" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> <?=$settings['email_id'];?></a> 
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 pr-0">
					<div class="widget">
						<ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
							<?php echo (isset($settings['facebook'])?'<li><a href="'.$settings['facebook'].'"><i class="fa fa-facebook text-white"></i></a></li>':''); ?>
							<?php echo (isset($settings['twitter'])?'<li><a href="'.$settings['twitter'].'"><i class="fa fa-twitter text-white"></i></a></li>':''); ?>
							<?php echo (isset($settings['instagram'])?'<li><a href="'.$settings['instagram'].'"><i class="fa fa-instagram text-white"></i></a></li>':''); ?>
							<?php echo (isset($settings['linkedin'])?'<li><a href="'.$settings['linkedin'].'"><i class="fa fa-linkedin text-white"></i></a></li>':''); ?>
							<?php echo (isset($settings['youtube'])?'<li><a href="'.$settings['youtube'].'"><i class="fa fa-youtube text-white"></i></a></li>':''); ?>
						</ul>
					</div>
				</div>
					<!--
				<div class="col-md-2">
					<ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
						<li class="m-0 pl-10"> 
							<a href="ajax-load/login-form.html" class="text-white ajaxload-popup"><i class="fa fa-user-o mr-5 text-white"></i> Login /</a> </li>
						<li class="m-0 pl-0 pr-10"> 
							<a href="<?=site_url('student-registration');?>" class="text-white"><i class="fa fa-edit mr-5"></i>Register</a> 
						</li>
					</ul>
				</div>
					-->
			</div>
		</div>
	</div>
	<div class="header-nav navbar-sticky navbar-sticky-animated">
		<div class="header-nav-wrapper">
			<div class="container p-0">
				<nav id="menuzord-right" class="menuzord default no-bg">
					<a class="menuzord-brand switchable-logo pull-left flip mb-15 mt-20 text-white" href="<?=base_url();?>">
					<!--
						<span class="logo-default">WeTheVirtual</span>
						<span class="logo-scrolled-to-fixed" style="color:red;">WeTheVirtual</span>
					-->
						<span class="logo-default"><img src='<?=base_url('images/logo.png');?>' width="70px" height="63px"></span>
						<span class="logo-scrolled-to-fixed" style="color:red;"><img src='<?=base_url('images/logo.png');?>' width="70px" height="63px"></span>
					</a>
					<ul class="menuzord-menu">
						<li class="<?=(($page_info->page_url=="home")?'active':'');?>"><a href="<?=base_url();?>">Home</a></li>
						<li class="<?=(($page_info->page_url=="about-us")?'active':'');?>"><a href="<?=site_url('about-us');?>">About Us</a></li>
						<li class="<?=(($page_info->page_url=="faq")?'active':'');?>"><a href="<?=site_url('faq');?>">FAQ</a></li>
						<li class="<?=(($page_info->page_url=="contact-us")?'active':'');?>"><a href="<?=site_url('contact-us');?>">Contact Us</a></li>
						<!--
						<li><a href="#">Service</a>
							<ul class="dropdown">
								<li><a href="page-service-business-consulting.html">Business Consulting</a></li>
								<li><a href="page-service-financial-analysis.html">Financial Analysis</a></li>
								<li><a href="page-service-investment-banking.html">Investment Banking</a></li>
								<li><a href="page-service-investment-planning.html">Investment Planning</a></li>
								<li><a href="page-service-online-consulting.html">Online Consulting</a></li>
								<li><a href="page-service-saving-investments.html">Saving Investments</a></li>
							</ul>
						</li>
						-->
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
