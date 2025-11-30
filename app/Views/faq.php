
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
				<div class="col-md-8 <?= (($page_info->form=='N')?'col-md-push-2':''); ?>">
					<div class="text-gray icon-box mb-0 p-0">
						<?=$page_info->main_content;?>
						<div class="heading-line-bottom">
							<h4 class="heading-title">Frequently Asked Questions</h4>
						</div>
						<div class="panel-group toggle accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="active" data-toggle="collapse" href="#faq1" aria-expanded="false">
											<span class="open-sub"></span>What is We the virtual? 
										</a> 
									</div>
								</div>
								<div id="faq1" class="panel-collapse collapse in" aria-expanded="true" >
									<div class="panel-body">
										<p> WE THE VIRTUAL, a passionate project by the industry stalwarts and the brainchild of PCTI LTD which got formed to cater the human emotions during the time of social distancing and lockdowns. The main motto is “The Show Must Go On”. In this period of anxiety, it is very important to get connected to maintain positivity and human bonding.</p>
										<p>It is an association of professionals from varied fields comprising IT Professionals, Event Professionals, Catering experts, educationists, marketing experts and business development professionals. We will be catering towards many different forms of events and shows keeping in mind the benchmark of the industry. As an event it means getting together on a single platform for different kinds of celebration, launches, seminars, conferences, meetings, weddings, birthdays, personal parties and get together and many more.</p>
										<p>So, we as a team at WE THE VIRTUAL caters entire event needs for the society virtually by an amalgamation of technology and artificial intelligence giving the viewers the sense of physical participation while being in the virtual world, that’s what’s the reality of the future now. So, to make the society future ready the team at WE THE VIRTUAL is the solution provider with the team of professionals with the creative instinct to make your dreams come true.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq2" aria-expanded="false">
											<span class="open-sub"></span>What are Virtual Celebrations?
										</a> 
									</div>
								</div>
								<div id="faq2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> Virtual celebrations are just like your normal parties but happen over a video call and are a lot more fun. The entire experience is designed around the birthday child and is professionally organised with an experienced anchor to welcome, greet and entertain your guests.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq3" aria-expanded="false">
											<span class="open-sub"></span>Which video conference call software do you use?
										</a> 
									</div>
								</div>
								<div id="faq3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> We offer Webex/Zoom as of now to organise the video call with all the privacy settings ensured. We are also working on our own video conference app reimagined with celebrations as core.( Also as per requirement we can use any other which shall be specified by the organiser)</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq4" aria-expanded="false">
											<span class="open-sub"></span>Can I see the video of any virtual birthday party?
										</a> 
									</div>
								</div>
								<div id="faq4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> Just like we want to protect your privacy, we want to do it for other customers too and hence we cannot provide you with the link to a complete virtual celebration. However, you can check out this short video mashup: ( we have to organise an event of birthday amongst us and record that, also the same has to be uploaded on Youtube and the link to be applied here for customers.)</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq5" aria-expanded="false">
											<span class="open-sub"></span>I have more guests, what should I do?
										</a> 
									</div>
								</div>
								<div id="faq5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> The maximum of 20 unique logins is designed to have minimal technical glitches and to engage all the audience. With more guests joining beyond the limit it becomes hard to engage and we charge extra on a pro-rata basis for the same.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq6" aria-expanded="false">
											<span class="open-sub"></span>Can I choose our own songs?
										</a> 
									</div>
								</div>
								<div id="faq6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> Absolutely, you can share the list in the party details form once your booking is done.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq7" aria-expanded="false">
											<span class="open-sub"></span>Can I have my child's photo on the invite?
										</a> 
									</div>
								</div>
								<div id="faq7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> Yes, our invites are designed for personalisation. At the time of booking, you can upload your child’s picture.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq8" aria-expanded="false">
											<span class="open-sub"></span>Who is the anchor?
										</a> 
									</div>
								</div>
								<div id="faq8" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> All our anchors are experienced, background checked and trained before. We assure you a professional celebration experience.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq9" aria-expanded="false">
											<span class="open-sub"></span>In which language does the anchor speak?
										</a> 
									</div>
								</div>
								<div id="faq9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> English is the primary language to host the party. If you are specific about having any other language, please choose the “Language Preference” add-on, we will try to match with the best anchor suiting your requirements.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq10" aria-expanded="false">
											<span class="open-sub"></span>Can I talk to the anchor before the party?
										</a> 
									</div>
								</div>
								<div id="faq10" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> The entire party script is prepared by WE THE VIRTUAL and the anchor will execute it during the party slot you have booked. Yes, any customisation or special guest recognition are most welcomed.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq11" aria-expanded="false">
											<span class="open-sub"></span>Can I get the digital invite of my own design?
										</a> 
									</div>
								</div>
								<div id="faq11" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> Our digital invitations are complementary and are personalised with your party details. However, we have 6 templates for you to select at the time of booking . Please note any other customisations can be taken on request and for extra charges.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq12" aria-expanded="false">
											<span class="open-sub"></span>Can I increase the party duration?
										</a> 
									</div>
								</div>
								<div id="faq12" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> We take multiple parties for a day and we usually keep a 15 minutes buffer just in case. So, if you need any extension beyond that you need to let us know while making a booking, it would be chargeable on a pro-rata basis.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq13" aria-expanded="false">
											<span class="open-sub"></span>How does virtual backdrop work?
										</a> 
									</div>
								</div>
								<div id="faq13" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> Virtual backdrop is a feature on zoom so we suggest you test your zoom with a dummy theme image as a virtual backdrop on your device. If it works, you can opt in for this customised theme decorated backdrop image instead of doing elaborate decorations at your home.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq14" aria-expanded="false">
											<span class="open-sub"></span>Who is the point of contact for the event?
										</a> 
									</div>
								</div>
								<div id="faq14" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> A team member from WE THE VIRTUAL will be your point of contact as the whole script is prepared from our side.The team member details will be mentioned to you when you make a booking.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq15" aria-expanded="false">
											<span class="open-sub"></span>How to differentiate kids event surprise packages? Do you have any surprise packages for adults or seniors?
										</a> 
									</div>
								</div>
								<div id="faq15" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> If you are interested in hiring an anchor for your surprise, we can change the games format and it is a lot of fun for all ages. Otherwise you can opt in for a guitarist, stand up comedian etc as well and we can help you with the details and charges.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq16" aria-expanded="false">
											<span class="open-sub"></span>What is the speed of the internet required for the event?
										</a> 
									</div>
								</div>
								<div id="faq16" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> It is working well with most of the Indian Internet connection. To give you an example - it would work well with 1 MBPS connection. We however suggest you to have a test run from your side before you make a booking.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title"> 
										<a class="collapsed" data-toggle="collapse" href="#faq17" aria-expanded="false">
											<span class="open-sub"></span>Why are you charging the amount whereas in zoom we can celebrate from our end?
										</a> 
									</div>
								</div>
								<div id="faq17" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p> Webex/Zoom is a software that is free for 45 minutes where the customer needs to manage everything. We are using webex/zoom enterprise account which doesn’t end in 45-50 minutes and our services are bundled with artists to take care of the entire party.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if($page_info->form=='Y'){ ?>
				<div class="col-md-4">
					<div class="icon-box mb-0 p-0">
						<h4 class="text-gray pt-10 mt-0 mb-30">Feel Free to Contact Us:</h4>
					</div>
				
				<?php include("form/pagecontact.php"); ?>
				</div>
				<?php } ?>
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