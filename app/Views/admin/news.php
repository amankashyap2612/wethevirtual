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
                                <h1>News</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">News</li>
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
                                <form action="<?=site_url('web-admin/news');?>"method="post">
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
										<a class=" badge badge-success form-control" href="#" data-toggle="modal" data-target="#addNews">Add</a>
									</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table f-s-13">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Headline</th>
                                        <th>Link</th>
                                        <th>Last Update</th>
                                        <th>Updated By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($news as $ns){ ?>
									<form class="form-submit" action="<?= site_url('web-admin/news/update_news'); ?>" method="post">
										<tr>
											<td><?= $i++; ?></td>
											<td><input type="text" name="headline" value="<?= $ns->headline; ?>" ></td>
											<td><input type="text" name="link" value="<?= $ns->link; ?>" ></td>
											<td><?= $ns->last_update; ?></td>
											<td><?= $user_info[$ns->update_by]->f_name; ?></td>
											<td id="news-<?= $ns->id; ?>"><?= ($ns->status == 'D')?'<a href="#" data-src="'.site_url('/web-admin/news/change-status-news').'" data-id="'.$ns->id.'" data-status="'.$ns->status.'" class="change-status badge badge-primary">ACTIVE</a>':'<a href="#" data-src="'.site_url('/web-admin/news/change-status-news').'"  data-id="'.$ns->id.'" data-status="'.$ns->status.'" class="change-status badge badge-danger">DEACTIVE</a>'; ?></td>
											<td>
                                            <input type="hidden" class="form-control" name="news_id" value="<?= $ns->id; ?>">
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
	
<div class="modal fade" id="addNews" role="dialog">
	<div class="modal-dialog modal-lg modal-full">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">News & Updates</h4>
			</div>
			<div class="modal-body">
				<div class="tab-content">
					<div id="mediaadd" class="tab-pane fade in active">
						<div class="row">
							<div class="col-sm-12 attach-details">
								<form class="form-submit" method="post" action="<?= site_url('/web-admin/news/add-news')?>">
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group" >
											<label>Headline</label>
											<input type="text" name="headline" class="form-control" placeholder="Headline">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group ">
											<label>Link</label>
											<input type="text" name="link" class="form-control" placeholder="Link">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 form-group">
											<input id="csrf-token" type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
											<button type="submit" class="btn btn-success" style="width: 100%;"> <span class="btn-val">Add News</span></button>
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