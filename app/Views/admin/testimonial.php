<!DOCTYPE html>
<html lang="en">
<head>
<?php include('common/header_script.php'); ?>	
</head>
<body>
<?php include('common/side.php'); ?>
	<?php include('common/header.php'); ?>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Testimonial</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Testimonial</li>
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
                               <form action="<?=site_url('web-admin/testimonial');?>" method="post">
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
                                    <a class="btn btn-success form-control" href="#" data-toggle="modal" data-target="#addTestimonial">Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table f-s-13">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Profile</th>
                                        <th>Message</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Last Update</th>
                                        <th>Updated By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($testimonial as $tst){?>
									<form class="form-submit" action="<?= site_url('web-admin/testimonial/update_testimonial'); ?>" method="post">
										<tr>
											<td><?= $i++; ?></td>
											<td><img src="<?=web_url();?>images/<?= $images[$tst->img]->location; ?>" width="200px"></td>
											<td><textarea name="message" class="form-control" width="200px"><?= $tst->message; ?></textarea></td>
											<td><input type="text" name="name" value="<?= $tst->name; ?>" ></td>
											<td><input type="text" name="comment_date" id="datepicker2" value="<?= date('Y-m-d',strtotime($tst->comment_date)); ?>" ></td>
											<td><?= $tst->last_update; ?></td>
											<td><?= ($tst->update_by==0)?'Visitor':$user_info[$tst->update_by]->f_name; ?></td>
											<td id="test-<?=$tst->id?>"><?= (($tst->status == 'I')?'<a href="#" data-src="'.site_url('web-admin/testimonial/change_testimonial_status').'" data-id="'.$tst->id.'" data-status="'.$tst->status.'" class="change-status badge badge-primary">INSERT</a>':(($tst->status == 'D')?'<a href="#" data-src="'.site_url('web-admin/testimonial/change_testimonial_status').'" data-id="'.$tst->id.'" data-status="'.$tst->status.'" class="change-status badge badge-primary">ACTIVE</a>':'<a href="#" data-src="'.site_url('web-admin/testimonial/change_testimonial_status').'" data-id="'.$tst->id.'" data-status="'.$tst->status.'" class="change-status badge badge-danger">DEACTIVE</a>')); ?></td>
											<td>
												<input type="hidden" class="form-control" name="test_id" value="<?= $tst->id; ?>">
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
	
<div class="modal fade" id="addTestimonial" role="dialog">
	<div class="modal-dialog modal-lg modal-full">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Testimonial</h4>
			</div>
			<div class="modal-body">
				<div class="tab-content">
					<div id="mediaadd" class="tab-pane fade in active">
						<div class="row">
							<div class="col-sm-12 attach-details">
								<form class="form-submit" method="post" action="<?= site_url('/web-admin/testimonial/add_testimonial')?>">
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group" >
											<label>Name</label>
											<input type="text" name="name" class="form-control" placeholder="Display Name">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group ">
											<label>Comment Date</label>
											<input type="text" name="comment_date" id="datepicker1" class="form-control" placeholder="YYYY-MM-DD">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group" >
											<label>Message</label>
											<textarea name="message" class="form-control" placeholder="Bottom Text" ></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group">
                                        <input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
											<button type="submit" class="btn btn-success" style="width: 100%;"> <span class="btn-val">Add Testimonial</span></button>
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
<!--End Add Home Slide-->
<?php include('common/footer.php'); ?>
</body>
</html>