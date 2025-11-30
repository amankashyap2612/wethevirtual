<form class="form-submit" method="post" action="<?= site_url('student/add_assignment'); ?>" enctype="multipart/form-data" >
	<div class="row">
		<div class="form-group col-md-12">
			<label>Select Your Batch</label>
			<select name="batch_code" class="form-control">
			<?php if(isset($batch)){ foreach($batch as $b){ ?>
				<option name="<?=$b->batch_code;?>"><?=$b->batch_code;?></option>
			<?php } }else{ ?>
				<option name="0">Your not registered yet</option>
			<?php } ?>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Assignment File</label>
			<input type="file" name="files[]" class="form-control" placeholder="Assignment File">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<div class="g-recaptcha" data-sitekey="6LdDpqsZAAAAAACH_VHCTKoAZyfo43NuLjnRVdst"></div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<input type="hidden" name="student_id" value="<?=$student_info['student_id'];?>">
			<button class="btn btn-colored btn-theme-colored2 btn-lg btn-block mt-15" type="submit" data-loading-text="Please wait...">Submit</button>
		</div>
	</div>
</form>