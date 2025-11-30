<div class="app-sidebar sidebar-shadow">
	<div class="app-header__logo">
		<div class="logo-src"></div>
		<div class="header__pane ml-auto">
			<div>
				<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</div>
	</div>
	<div class="app-header__mobile-menu">
		<div>
			<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</div>
	</div>
	<div class="app-header__menu">
		<span>
			<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
				<span class="btn-icon-wrapper">
					<i class="fa fa-ellipsis-v fa-w-6"></i>
				</span>
			</button>
		</span>
	</div>
	<div class="scrollbar-sidebar">
		<div class="app-sidebar__inner">
			<ul class="vertical-nav-menu">
				<li class="app-sidebar__heading">Menu</li>
				<?php if(isset($tab)){ foreach($tab as $grp => $val){ ?>
				<li class="mm-active">
					<a href="#">
						<i class="metismenu-icon <?=$val['icon'];?>"></i> <?=$grp;?>
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul class="mm-show">
						<?php asort($val['menu']); foreach($val['menu'] as $name => $url){ ?>
						<li><a href="<?= site_url($url); ?>"><i class="metismenu-icon"></i><?=ucfirst($name);?></a></li>
						<?php } ?>
					</ul>
				</li>
				<?php } } ?>
			</ul>
		</div>
	</div>
</div>