<?php $uniq1 = rand(111111,999999); ?>
<form class="form-submit" action="<?=site_url('form/student_registration');?>" class="register-form" method="post">
	<div class="icon-box mb-0 p-0">
		<a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
			<i class="pe-7s-users"></i>
		</a>
		<h4 class="text-gray pt-10 mt-0 mb-30">Free Membership Registration.</h4>
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
		<div class="form-group col-md-12">
			<label>Email ID</label>
			<input name="email" class="form-control" type="email">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Program/Course</label>
			<input name="program" class="form-control" type="text">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Highest Qualification</label>
			<input name="qualification" class="form-control" type="text">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Date Of Birth</label>
			<input name="dob" class="form-control" type="text" id='datetimepicker4'>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="male-radio" >Male</label>
			<input id="male-radio" name="gender" style="height:15px;margin-left: 30px;" value="M" checked type="radio">
		</div>
		<div class="form-group col-md-6">
			<label for="female-radio" >Female</label>
			<input id="female-radio" name="gender" style="height:15px;margin-left: 30px;" Value="F" type="radio">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Address</label>
			<textarea name="address" class="form-control" ></textarea>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<div class="g-recaptcha" data-sitekey="6LdDpqsZAAAAAACH_VHCTKoAZyfo43NuLjnRVdst"></div>
		</div>
	</div>
	<div class="form-group">
		<input type="hidden" name="uniq_id" value="<?=$uniq1;?>">
		<!-- <button class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block mt-15" type="submit" data-loading-text="Please wait...">Generate OTP</button> -->
		<button class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block mt-15" type="submit" data-loading-text="Please wait...">Submit</button>
	</div>
</form>
<form class="form-submit" action="<?=site_url('form/registration_otp');?>" class="register-form" method="post" style="display:none;">
	<div class="row">
		<div class="form-group col-md-6">
			<input name="otp" class="form-control" type="text" placeholder="Enter OTP">
		</div>
		<div class="form-group col-md-6">
			<input type="hidden" name="uniq_id" value="<?=$uniq1;?>">
			<button class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" type="submit" data-loading-text="Please wait...">Submit</button>
		</div>
	</div>
</form>