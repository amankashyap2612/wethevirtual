<form class="form-submit" action="<?=site_url('form/contact');?>" class="register-form" method="post">
	<div class="row">
		<div class="form-group col-md-6">
			<label>Name</label>
			<input name="name" class="form-control" type="text">
		</div>
		<div class="form-group col-md-6">
			<label>Phone</label>
			<input name="phone" class="form-control" type="text">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Email Address</label>
			<input name="email_id" class="form-control" type="email">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label for="form_choose_username">Purpose</label>
			<input id="form_choose_username" name="purpose" class="form-control" type="text">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label for="form_choose_password">Message</label>
			<textarea id="form_choose_password" name="message" class="form-control"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<div class="g-recaptcha" data-sitekey="6Le1na8ZAAAAAN-mpDIFHUuwZ5_CVyWa0Nr30CrO"></div>
		</div>
	</div>
	<div class="form-group">
	<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
		<button class="btn btn-colored btn-theme-colored2 btn-lg btn-block mt-15" type="submit" data-loading-text="Please wait...">Submit</button>
	</div>
</form>