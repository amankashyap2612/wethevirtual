<section>
	<div class="container position-relative p-0 mt-90" style="max-width: 570px;">
		<h3 class="bg-theme-colored2 p-15 pt-10 mt-0 mb-0 text-white">Student Login</h3>
		<div class="section-content bg-white p-30">
			<div class="row" id="login-sec-display">
				<div class="col-md-12">
					<!-- Register Form Starts -->
					<form class="form-submit" name="reservation_form" class="reservation-form mb-0 bg-silver-deep p-30" method="post" action="<?= site_url("student/login"); ?>" novalidate="novalidate">
						<h3 class="text-center mt-0 mb-30">Student Login</h3>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-30">
									<input placeholder="Enter A Registered Email" name="email_id" class="form-control" required="" aria-required="true" type="text">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group mb-30">
									<input placeholder="Password" name="password" required="" class="form-control" aria-required="true" type="password">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group mb-0 mt-0">
									<input name="form_botcheck" class="form-control" value="" type="hidden">
									<button type="submit" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" data-loading-text="Please wait...">Login Now</button>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group mt-15 text-center">
									<p><a href="#" id="forgot-password" class="text-theme-colored2 text-underline">Forgotten Password?</a></p>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row" id="forgot-pwd-display" style="display:none;">
				<div class="col-md-12">
				<!-- Register Form Starts -->
					<form class="form-submit" name="reservation_form" class="reservation-form mb-0 bg-silver-deep p-30" method="post" action="<?= site_url("student/forgotPassword"); ?>" novalidate="novalidate">
						<h3 class="text-center mt-0 mb-30">Forgot Login</h3>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-30">
									<input placeholder="Enter A Registered Email" name="forget_email" class="form-control" required="" aria-required="true" type="email">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group mb-0 mt-0">
									<input name="form_botcheck" class="form-control" value="" type="hidden">
									<button type="submit" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" data-loading-text="Please wait...">Submit</button>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group mt-15 text-center">
									<p><a href="#" id="login-password-btn" class="text-theme-colored2 text-underline">Login</a></p>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<button title="Close (Esc)" type="button" class="mfp-close font-36">×</button>
	</div>
</section>


<script src="<?=base_url();?>js/gaurav-js.js"></script>
<!-- Appointment Form Validation-->
<script type="text/javascript">

$('#login-password-btn').click(function(){
	$('#forgot-pwd-display').hide();
	$('#login-sec-display').show();
	
});
$('#forgot-password').click(function(){
	$('#forgot-pwd-display').show();
	$('#login-sec-display').hide();
});


</script>