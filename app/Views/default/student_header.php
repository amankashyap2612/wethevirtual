<!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget text-white">
              <ul class="list-inline xs-text-center text-white">
                <li class="m-0 pl-10 pr-10"> <a href="tel:<?=str_replace(" ","",str_replace("-","",$settings['contact']));?>" class="text-white"><i class="fa fa-phone text-theme-colored2"></i> <?=$settings['contact'];?> </a> </li>
                <li class="m-0 pl-10 pr-10"> 
                  <a href="mailto:<?=trim($settings['email_id']);?>" class="text-white"><i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <?=$settings['email_id'];?></a> 
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget">
              <ul class="styled-icons icon-sm icon-theme-colored2 pull-right flip sm-pull-none sm-text-center mt-5">
                <?php echo (isset($settings['facebook'])?'<li><a href="'.$settings['facebook'].'"><i class="fa fa-facebook"></i></a></li>':''); ?>
                <?php echo (isset($settings['twitter'])?'<li><a href="'.$settings['twitter'].'"><i class="fa fa-twitter"></i></a></li>':''); ?>
                <?php echo (isset($settings['instagram'])?'<li><a href="'.$settings['instagram'].'"><i class="fa fa-instagram"></i></a></li>':''); ?>
                <?php echo (isset($settings['linkedin'])?'<li><a href="'.$settings['linkedin'].'"><i class="fa fa-linkedin"></i></a></li>':''); ?>
                <?php echo (isset($settings['youtube'])?'<li><a href="'.$settings['youtube'].'"><i class="fa fa-youtube"></i></a></li>':''); ?>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
              <li class="m-0 pl-10"> <a href="<?=site_url('student/dashboard');?>" class="text-white"><i class="fa fa-user-o mr-5 text-white"></i> <?=ucfirst($student_info['name']);?> </a> / </li>
              <li class="m-0 pl-0 pr-10"> 
                <a href="<?=site_url('student/logout');?>" class="text-white"><i class="fa fa-sign-out mr-5"></i>Logout</a> 
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
	
    <div class="header-nav">
		<div class="header-nav-wrapper navbar-scrolltofixed bg-white">
			<div class="container">
				<nav id="menuzord-right" class="menuzord default">
					<a class="menuzord-brand pull-left flip mt-sm-15 mb-sm-15" href="<?=base_url();?>">
						<img src="<?=base_url("images/capture.png");?>" title="cft" alt="center for future technology">
					</a>
					<ul class="menuzord-menu">
						<li class="<?=(($page_info->page_url=="dashboard")?'active':'');?>"><a href="<?=site_url('student/dashboard');?>">Dashboard</a></li>
						<li class="<?=(($page_info->page_url=="shop")?'active':'');?>"><a href="<?=site_url('student/shop');?>">Enroll</a></li>
						<li class="<?=(($page_info->page_url=="course")?'active':'');?>"><a href="<?=site_url('student/course');?>">Course</a></li>
						<li class="<?=(($page_info->page_url=="profile")?'active':'');?>"><a href="<?=site_url('student/profile');?>">Profile</a></li>
						<li class="<?=(($page_info->page_url=="virtual-class-assignment" || $page_info->page_url=="virtual-class-2020" || $page_info->page_url=="virtual-class-2020-video")?'active':'');?>"><a href="#">Online Classes</a>
							<ul class="dropdown">
								<li><a href="<?=site_url('student/virtual-class-2020');?>">Class 2020</a></li>
								<li><a href="<?=site_url('student/virtual-class-2020-video');?>">Class 2020 Video</a></li>
								<li><a href="<?=site_url('student/virtual-class-assignment');?>">Class Assignment</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
    </div>
</header>