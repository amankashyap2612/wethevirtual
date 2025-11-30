<!DOCTYPE html>
<html lang="en">
<head>
<?php include('common/header_script.php'); ?>
	<style>
	.btn-custom {
		width: 100%;
		color: #fff;
		border-radius: 0;
		outline: 0 !important;
		font-weight: 500;
		background: #ee0000;
	}
	.media-list, .media-list1 {
		list-style-type: none;
		margin-top: 0;
		padding-top: 20px;
		padding-left: 0;
		height: 420px;
		overflow-y: overlay;
	}
	.media-list li, .media-list1 li {
		display: inline-block;
		margin-bottom: 12px;
	}
	.media-list1 input[type=radio] {
		display: none;
		position: relative;
		top: -67px;
		left: 12px;
	}
	.media-list img, .media-list1 img {
		width: 130px;
		height: 120px;
	}
	.attach-details {
		background: #f2f2f2;
		padding: 10px 10px;
		height: 420px;
		overflow-y: scroll;
	}
	.attach-details h6 {
		text-transform: uppercase;
		text-align: center;
	}
	.attach-details img {
		width: 100%;
		height: 140px;
	}
	.attach-details hr {
		border-top: 1px solid #ddd;
	}
	.attach-details .form-group {
		display: inline-block;
		margin-bottom: 5px;
	}
	.attach-details label {
		display: inline-block;
		width: 100%;
		text-align: left;
		padding-right: 5px;
		font-size: 12px;
		font-weight: 500;
	}
	.attach-details .form-control {
		color: #666 !important;
		font-size: 14px;
		padding: 5px 5px;
		display: inline-block;
		width: 100%;
		vertical-align: middle;
	}
	.btn-custom {
		width: 100%;
		color: #fff;
		border-radius: 0;
		outline: 0 !important;
		font-weight: 500;
		background: #ee0000;
	}
	.btn-custom span.btn-val {
		top: 0;
		right: 0;
		padding: 0;
		color: #fff;
		font-size: 14px;
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.5s;
	}
	.modal-dialog{
		margin: 0px auto;
		width: 90%;
	}
	.radio-control label {
		width: 40%;
		font-size: 20px;
	}
	</style>
</head>

<body>

    <?php include('common/side.php'); ?>
    <!-- /# sidebar -->

    <?php include('common/header.php'); ?>
    


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-6 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Event Request</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Event Request</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="card">
                        <div class="card-header m-b-20">
							<form action="<?=site_url("web-admin/event_request");?>" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" id="datepicker1" class="form-control" name="from_date" placeholder="YYYY-MM-DD" value="<?=$from_date;?>">
                                </div>
								<div class="col-md-4">
                                    <input type="text" id="datepicker2" class="form-control" name="to_date" placeholder="YYYY-MM-DD" value="<?=$to_date;?>">
                                </div>
								<div class="col-md-4">
								<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
                                    <button type="submit" class="form-control btn-primary">Fetch</button>
                                </div>
                            </div>
							</form>
                        </div>
                        <div class="card-body">
                            <table class="table f-s-13">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Event</th>
                                        <th>Message</th>
                                        <th>Insert Time</th>
                                        <th>SystemInfo</th>
                                        <th>Response</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($event_request as $event){ ?>
									<tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $event->name; ?></td>
                                        <td><?= $event->contact; ?></td>
                                        <td><?= $event->email_id; ?></td>
										<td><?= $event->event; ?></td>
                                        <td><?= $event->message; ?></td>
                                        <td><?= $event->insert_time; ?></td>
                                        <td><?= $event->ip_address; ?><br>
											<?php foreach(json_decode($event->system_info) as $sys => $val){ ?>
												<?=$sys;?>:<?=$val;?><br>
											<?php } ?>
										</td>
                                        <td id="email-<?= $event->id; ?>">
											<a class="send-email badge badge-primary" data-id="<?= $event->id; ?>" href="#">Send Mail</a>
										</td>
                                    </tr>
									<?php } ?>
								</tbody>
                            </table>
                            <div class="m-t-10 text-center">
                               
                            </div>
                            
                        </div>

                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>This page was generated on <span id="date-time"><?= date('h:i a, d M Y')?>. </span> <a href="#" class="page-refresh">Refresh Page</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <!-- jquery vendor -->
    <script src="<?= base_url('assets'); ?>/js/lib/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="<?= base_url('assets'); ?>/js/lib/menubar/sidebar.js"></script>
    <script src="<?= base_url('assets'); ?>/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="<?= base_url('assets'); ?>/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->
    <script src="<?= base_url('assets'); ?>/js/scripts.js"></script>
    <script src="<?= base_url('assets'); ?>/js/myjs.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	</script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                maxDate : "-18y",
                changeYear: true,
                changeMonth: true
            });
            $( "#datepicker1,#datepicker2" ).datepicker({
                dateFormat: 'yy-mm-dd',
				changeYear: true,
                changeMonth: true
            });
			
			$('.send-email').on('click', function(){
				var item = $(this).data('id');
				var button = $("#email-"+item).html();
				$("#email-"+item).html("<img src='<?= base_url('assets'); ?>/images/loader.gif' style='width: 40px;'>");
					$.ajax({
					type: "POST",
					url: "<?= site_url('event/response_email'); ?>",
					data: {id:item},
					dataType: 'json',
					cache: false,
					success: function(result){
						if(result.success == true){
							if(result.rlink){
								window.location.href = result.rlink;
							}else if(result.alert){
								frm.before(result.alert);
							}else if(result.alert1){
								frm.before(result.alert1);
								frm.remove();
							}else{
								location.reload();
							}
						}else{
							$.each(result.message, function(key,value){
								var inpt = frm.find('input[name='+key+'], textarea[name='+key+'], select[name='+key+']');
								if(value.length > 2){
									if(result.border == true){
										inpt.addClass('border-danger');
										$('#toast-erromsg').show().append(value);
									}else{
										inpt.addClass('border-danger').before(value);
									}
								}
							});
							setTimeout(function(){
								$('#toast-erromsg').fadeOut(600)
							}, 3500);
						}
						$('.preloader').hide();
						$("#email-"+item).html(button);
					}
				});
			});
		});
    </script>
</body>
</html>