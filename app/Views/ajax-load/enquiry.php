<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<section >
	<div class="container position-relative p-0 mt-90" style="max-width: 570px;">
		<h3 class="bg-theme-colored2 p-15 pt-10 mt-0 mb-0 text-white">Enquiry</h3>
		<div class="section-content bg-white p-30">
			<div class="row">
				<div class="col-md-12">
					<!-- Register Form Starts -->
					<form action="<?=site_url('form/contact');?>" method="post" class="form-submit reservation-form mb-0 bg-silver-deep p-30">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group mb-30">
								<input placeholder="Name" name="name" class="form-control" required="" aria-required="true" type="text">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group mb-30">
								<input placeholder="Email ID" name="email_id" class="form-control" required="" aria-required="true" type="text">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group mb-30">
								<input placeholder="Phone Number" name="phone" class="form-control" required="" aria-required="true" type="text">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group mb-30">
								<input placeholder="Purpose" name="purpose" class="form-control" required="" aria-required="true" type="text">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group mb-30">
								<textarea placeholder="Message" name="message" class="form-control" required="" aria-required="true"></textarea>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group mb-30">
								<div class="g-recaptcha" data-sitekey="6Lc6Z-gUAAAAAFY-gUMX2C3HolMt4CCWGRNkWBgT"></div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group mb-0 mt-0">
								<button type="submit" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" data-loading-text="Please wait...">Submit</button>
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
