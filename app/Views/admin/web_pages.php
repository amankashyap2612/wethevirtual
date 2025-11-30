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
                                <h1>Pages</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Pages</li>
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
                                <form action="<?=site_url('web-admin/web_pages');?>" method="post">
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
									<a class="btn btn-success form-control" href="<?= site_url('web-admin/web_pages/addpage'); ?>" >Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table f-s-13">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Heading</th>
                                        <th>URL</th>
                                        <th>Form</th>
                                        <th>Last Update</th>
                                        <th>Updated By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($pages as $pgs){?>
									<tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $pgs->page_heading; ?></td>
                                        <td><?= $pgs->page_url; ?></td>
                                        <td><?= $pgs->form; ?></td>
                                        <td><?= $pgs->last_update; ?></td>
                                        <td><?= $user_info[$pgs->update_by]->f_name; ?></td>
                                        <td id="page-<?=$pgs->id?>">
										<?php if(in_array('3',$other_action)){ ?>
										<?= ($pgs->status == 'D')?'<a href="#" data-src="'.site_url('web-admin/web_pages/change_page_status').'" data-id="'.$pgs->id.'" data-status="'.$pgs->status.'" class="change-status badge badge-primary">ACTIVE</a>':'<a href="#" data-src="'.site_url('web-admin/web_pages/change_page_status').'" data-id="'.$pgs->id.'" data-status="'.$pgs->status.'" class="change-status badge badge-danger">DEACTIVE</a>'; ?>
										<?php } ?>
										</td>
                                        <td>
											<a class="edit-course badge badge-primary" href="<?= site_url("web-admin/web_pages/edit_web_pages/".$pgs->id); ?>" >Edit</a>
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


    <?php include('common/footer.php'); ?>
</body>
</html>