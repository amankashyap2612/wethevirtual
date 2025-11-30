<?php $uniq1 = rand(111111,999999); $uniq2 = rand(111111,999999); ?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<?php $this->load->view("default/header_script"); ?>

<!-- Favicon and Touch Icons -->
<link href="<?=base_url();?>images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?=base_url();?>images/capture-phone.png" rel="apple-touch-icon">
<link href="<?=base_url();?>images/capture-phone.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?=base_url();?>images/capture-phone.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?=base_url();?>images/capture-phone.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="<?=base_url();?>css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="<?=base_url();?>css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?=base_url();?>css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?=base_url();?>css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?=base_url();?>css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?=base_url();?>css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<link href="<?=base_url();?>css/style.css" rel="stylesheet" type="text/css"> 

<!-- CSS | Theme Color -->
<link href="<?=base_url();?>css/colors/theme-skin-color-set2.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?=base_url();?>js/jquery-2.2.4.min.js"></script>
<script src="<?=base_url();?>js/jquery-ui.min.js"></script>
<script src="<?=base_url();?>js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?=base_url();?>js/jquery-plugin-collection.js"></script>



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
      <img alt="" src="<?=base_url();?>images/preloaders/5.gif">
    </div>
   <!-- <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div> -->
  </div>
   <?php 
  $this->load->view("default/header");
  ?>
  
  <!-- Start main-content -->
<div class="main-content">
    <?php 
		$this->load->view("default/banner");
	?>
	<section>
		<div class="container">
			<div class="section-content">
				
					<div class="row mt-15">
						<div class="col-md-12">
							<h3>Details</h3>
							<div class="payment-method">
								<div class="col-md-12" style="border: 1px solid #eee;padding: 10px;">
									<p>Name : <?= $student->name; ?></p>
									<p>Email ID : <?= $student->email_id; ?></p>
									<p>Contact : <?= $student->contact; ?></p>
									<p>Address : <?= $student->address; ?></p>
									<p>School : <?= $school->school_title; ?></p>
									<p>Class : <?= $student->class; ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<h3>Your order</h3>
							<table class="table table-striped table-bordered tbl-shopping-cart">
								<thead>
									<tr>
										<th>S. no</th>
										<th>Product Name</th>
										<th class="text-right">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="product-thumbnail"><a href="#"><!-- <img alt="member" src="images/products/4.jpg"> --></a>1</td>
										<td>Registration Fees</td>
										<td class="text-right"><span class="amount"><?=number_format($school->registration_fees,2);?></span></td>
									</tr>
									<tr>
										<td class="product-thumbnail"><a href="#"><!-- <img alt="member" src="images/products/4.jpg"> --></a>2</td>
										<td>Security Amount</td>
										<td class="text-right"><span class="amount"><?=number_format($school->security_amount,2);?></span></td>
									</tr>
									<tr>
										<td class="product-thumbnail"><a href="#"><!-- <img alt="member" src="images/products/4.jpg"> --></a>3</td>
										<td>Class Fees</td>
										<td class="text-right"><span class="amount"><?=number_format($class_fees->amount,2);?></span></td>
									</tr>
									<?php if(isset($discount)){ ?>
									<tr>
										<td class="product-thumbnail"><a href="#"><!-- <img alt="member" src="images/products/4.jpg"> --></a>4</td>
										<td>Promo Discount</td>
										<td class="text-right"><span class="amount"> - <?=number_format($discount,2);?></span></td>
									</tr>
									<?php } ?>
									<tr>
										<td>Final Price</td>
										<td>&nbsp;</td>
										<td class="text-right"><?= number_format($form['price'],2); ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-12">
							
							<div class="payment-method">
								<form class="form-submit" method="post" action="<?= site_url("form/apply_promo"); ?>">
									<div class="col-md-4">
										<label><h3>Apply Promo</h3>	</label>
									</div>
									<div class="col-md-4">
										<input type="text" name="promo_code" value="" class="form-control">
									</div>
									<div class="col-md-4">
										<input type="submit" name="submit" value="Apply" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please Wait..!">
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-12">
							<h3>Payment Information</h3>
							<div class="payment-method">
								<div class="radio">
									<label> <input type="radio" name="optionsRadios" value="option3" checked> PayU Payment </label>
									<p>Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
								</div>
							</div>
						</div>
						<div class="col-md-12" style="display:none;" id="transaction-info">
							<h3>Transaction ID and Order ID</h3>
							<div class="payment-method">
								<div class="radio">
									<p>Transaction ID : <?= $form['txnid']; ?></p>
									<p>Product ID : <?= str_replace(",","-",$form['product_info']); ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<form class="form-checkout" method="post" action="<?= site_url("form/payment_information"); ?>" >
								<input type="hidden" name="key" value="<?= $form['key']; ?>" />
								<input type="hidden" name="hash" value="<?= $form['hash']; ?>" />
								<input type="hidden" name="txnid" value="<?= $form['txnid']; ?>" />
								<input type="hidden" name="amount" value="<?= $form['price']; ?>" />
								<input type="hidden" name="firstname" value="<?= $form['name']; ?>" />
								<input type="hidden" name="email" value="<?= $form['email']; ?>" />
								<input type="hidden" name="phone" value="<?= $form['phone']; ?>" />
								<input type="hidden" name="productinfo" value="<?= $form['product_info']; ?>" />
								<input type="hidden" name="surl" value="<?= $form['surl']; ?>" />
								<input type="hidden" name="furl" value="<?= $form['furl']; ?>" />
								<input type="hidden" name="stu_id" value="<?= $form['stu_id']; ?>" />
								<input type="hidden" name="promo_type" value="<?= $form['promo_type']; ?>" />
								<input type="hidden" name="promo_value" value="<?= $form['promo_value']; ?>" />
								<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
								<div class="text-right"> 
									<button type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please Wait..!">Confirm Order</button> 
								</div>
							</form>
						</div>
						<div class="col-md-6">
							<form method="post" action="<?= $form['action_url']; ?>" >
								<input type="hidden" name="key" value="<?= $form['key']; ?>" />
								<input type="hidden" name="hash" value="<?= $form['hash']; ?>" />
								<input type="hidden" name="txnid" value="<?= $form['txnid']; ?>" />
								<input type="hidden" name="amount" value="<?= $form['price']; ?>" />
								<input type="hidden" name="firstname" value="<?= $form['name']; ?>" />
								<input type="hidden" name="email" value="<?= $form['email']; ?>" />
								<input type="hidden" name="phone" value="<?= $form['phone']; ?>" />
								<input type="hidden" name="productinfo" value="<?= $form['product_info']; ?>" />
								<input type="hidden" name="surl" value="<?= $form['surl']; ?>" />
								<input type="hidden" name="furl" value="<?= $form['furl']; ?>" />
								<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
								<div class="text-right"> 
									<button type="submit" id="btn-buy-now" style="display:none;" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please Wait..!">Pay Now</button> 
								</div>
							</form>
						</div>
					</div>
			</div>
		</div>
	</section>
</div>  
  <!-- end main-content -->
	<?php 
		$this->load->view("default/footer");
	?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?=base_url();?>js/custom.js"></script>
<script src="<?=base_url();?>js/gaurav-js.js"></script>
<?php
	$this->load->view("default/footer_script");
?>
<script type="text/javascript">
	$(function () {
		$('.datetimepicker').datetimepicker({
			viewMode: 'years',
			format: 'YYYY-MM-DD'
		});
	});
	
	$('.form-checkout').submit(function(e){
        e.preventDefault();
		var frm = $(this);
		var form_btn = frm.find('button[type="submit"]');
		var form_result_div = '#form-result';
		$(form_result_div).remove();
		form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
		var form_btn_old_msg = form_btn.html();
		form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
		
		$.ajax({
			url: frm.attr('action'),
			data: new FormData(this),
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,
			success: function(result){
				if(result.success == true)
				{
					form_btn.prop('disabled', false).html(form_btn_old_msg);
					$('#btn-buy-now').show();
					$('#transaction-info').show();
					frm.hide();
					form_error = true;
				}else{
					form_btn.prop('disabled', false).html(form_btn_old_msg);
					var error = '';
                    $.each(result.message, function(key,value){
                        var inpt = frm.find('input[name='+key+'], textarea[name='+key+'], select[name='+key+']');
                        if(value.length > 2){
                            if(result.border == true){
                                inpt.addClass('border-danger');
								error = error+', '+value;
                            }else{
                                inpt.addClass('border-danger').before(value);
                            }
                        }
                    });
					$(form_result_div).html(error).fadeIn('slow');
					setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
					form_error = false;
                }
			}
		});
		return false;
	});
</script>
</body>
</html>