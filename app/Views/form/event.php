<form class="form-submit" action="<?=site_url('form/event_registration');?>" class="register-form" method="post">
	<div class="icon-box mb-0 p-0">
		<a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
			<i class="pe-7s-users"></i>
		</a>
		<h4 class="text-gray pt-10 mt-0 mb-30">Fill this Form to Registration.</h4>
	</div>
	<hr>
	<div class="row">
		<div class="form-group col-md-6">
			<label>Name</label>
			<input name="name" class="form-control" type="text">
		</div>
		<div class="form-group col-md-6">
			<label>Phone Number</label>
			<input name="phone" class="form-control" type="text">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label>Organisation/Institution</label>
			<input name="sector" class="form-control" type="text">
		</div>
		<div class="form-group col-md-6">
			<label>Highest Qualification</label>
			<input name="qualification" class="form-control" type="text">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Email ID</label>
			<input name="email" class="form-control" type="email">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<div class="g-recaptcha" data-sitekey="6LdDpqsZAAAAAACH_VHCTKoAZyfo43NuLjnRVdst"></div>
		</div>
	</div>
	<div class="form-group">
		<button class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block mt-15" type="submit" data-loading-text="Please wait...">Submit</button>
	</div>
</form>