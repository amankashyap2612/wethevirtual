<!DOCTYPE html>
<html lang="en">
<head>
<?php include('common/header_script.php'); ?>
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
                                <h1>Promo Code</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Promo Code</li>
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
                            <div class="row">
                                <form action="<?=site_url('web-admin/promo_code');?>"method="post">
									<div class="col-md-4">
											<select class="form-control" name="status">
												<option value="A"  <?php echo (('A'==$status)?'selected':''); ?> >Activated</option>
												<option value="D"  <?php echo (('D'==$status)?'selected':''); ?> >Deactivated</option>
											</select>
									</div>
									<div class="col-md-4">
										<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
									   <input class="form-control badge-success" value="Fetch" type="submit"/>
									</div>
								</form>
                                <div class="col-md-4 text-right">
                                    <a class="badge badge-success  form-control" href="#" data-toggle="modal" data-target="#addPromo">Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table f-s-13">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>PromoCode</th>
                                        <th>Start</th>
                                        <th>Expire</th>
                                        <th>Discount</th>
                                        <th>Last Update</th>
                                        <th>Updated By</th>
                                        <th>Action</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($promo_code as $pro){ ?>
									<form class="form-submit" action="<?= site_url('/web-admin/promo-code/update_promo'); ?>" method="post">
										<tr>
											<td><?= $i++; ?></td>
											<td><input type="text" name="promo_code" value="<?= $pro->promo_code; ?>" ></td>
											<td><input type="text" name="start_date" class="datepicker" value="<?= $pro->start_date; ?>" ></td>
											<td><input type="text" name="expire_date" class="datepicker" value="<?= $pro->expire_date; ?>" ></td>
											<td>
												<select name="type" class="form-control">
													<option value="P" <?= (($pro->type == 'P')?'selected':''); ?>>Percentage</option>
													<option value="A" <?= (($pro->type == 'A')?'selected':''); ?>>Amount</option>
												</select>
												<input type="text" name="value" value="<?= $pro->value; ?>" ></td>
											<td><?= $pro->last_update; ?></td>
											<td><?= $user_info[$pro->update_by]->f_name; ?></td>
											<td id="promo-<?=$pro->id?>"><?= ($pro->status == 'D')?'<a href="#" data-src="'.site_url('/web-admin/promo-code/change_promo_status').'" data-id="'.$pro->id.'" data-status="'.$pro->status.'" class="change-status badge badge-primary">ACTIVE</a>':'<a href="#"  data-src="'.site_url('/web-admin/promo-code/change_promo_status').'" data-id="'.$pro->id.'" data-status="'.$pro->status.'" class="change-status badge badge-danger">DEACTIVE</a>'; ?></td>
											<td>
											<input type="hidden" class="form-control" name="promo_id" value="<?= $pro->id; ?>">
                                    		<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
												<button type="submit" class="edit-course badge badge-primary"> Update </button>
											</td>
										</tr>
									</form>
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
  <!--add slider-->
	
<div class="modal fade" id="addPromo" role="dialog">
	<div class="modal-dialog modal-lg modal-full">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Promo Code</h4>
			</div>
			<div class="modal-body">
				<div class="tab-content">
					<div id="mediaadd" class="tab-pane fade in active">
						<div class="row">
							<div class="col-sm-12 attach-details">
								<form class="form-submit" method="post" action="<?= site_url('/web-admin/promo-code/add-promo')?>">
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group" >
											<label>Promo Code</label>
											<input type="text" name="promo_code" class="form-control" placeholder="Code">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group ">
											<label>Start Date</label>
											<input type="text" name="start_date" id="datepicker1" class="form-control" placeholder="YYYY-MM-DD">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group" >
											<label>Expire Date</label>
											<input type="text" name="expire_date" id="datepicker2" class="form-control" placeholder="YYYY-MM-DD">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group" >
											<label>Type</label>
											<select class="form-control" name="type">
												<option value="P">Percentage</option>
												<option value="A">Amount</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group" >
											<label>Value</label>
											<input type="text" name="value" class="form-control" placeholder="value">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group">
										<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
											<button type="submit" class="btn btn-success" style="width: 100%;"> <span class="btn-val">Add Promo</span></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<?php include('common/footer.php'); ?>
</body>
</html>