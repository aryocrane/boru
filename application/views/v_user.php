<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <title>SIMPAN </title>
        <?php $this->load->view('templates/css/v_global'); ?>
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <?php $this->load->view('templates/css/v_plugins'); ?>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <?php $this->load->view('templates/css/v_theme'); ?>
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-quick-sidebar-over-content">
        <?php $this->load->view('templates/v_header'); ?>
		<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <?php $this->load->view('templates/js/v_core'); ?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <?php $this->load->view('templates/js/v_page_plugin'); ?>
		<?php $this->load->view('templates/js/komisariat'); ?>
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view('templates/v_sidemenu'); ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <h3 class="page-title">
                        User <small>Management</small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Search Data</a>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                                    <div class="btn-group pull-right">
                                        <a href="#mdlAdd" data-toggle="modal" class="btn green">
                                        <i class="fa fa-plus"></i> Add New User
                                        </a>
                                    </div>
                                </div>
                        </div>
		
			<div class="row">
				                            <div class="col-md-12">
                                <!-- BEGIN PARAMETER PORTLET-->

			

								
				
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-globe"></i>RESULT
									</div>
									<div class="tools"></div>
								</div>
								<div class="portlet-body">
									<table class="table table-striped table-bordered table-hover"
										id="sample_1">
							<thead>
								<tr>
									<?php foreach($records['title'] as $value):?>
									<th>
									<?php echo $value; ?>
									</th>
									<?php endforeach;?>
								</tr>
								</thead>
							<tbody>
								<tr>
								 <?php foreach($records['item'] as $key => $value): ?>
                <?php foreach($value as $key_item => $item):?>

									
									<td>
										 <?php echo $item; ?>
									</td>
									
									<?php endforeach;?>
									<!--td>
                                        <a href="<?php echo base_url()?>index.php/Usermgt/edit/<?php echo $value['USER_ID'];?>" data-toggle="modal" class="btn green" id="mdleditbtn" data-target="#mdledit">
                                        <i class="fa fa-plus"></i> Edit
                                        </a>
                                    </td-->
									<td>
                                        <a href="<?php echo base_url()?>index.php/Usermgt/delete/<?php echo $value['USER_ID'];?>" data-toggle="modal" class="btn green" id="mdldelbtn" >
                                        <i class="fa fa-minus"></i> Delete
                                        </a>
                                    </td>
								</tr>
								 <?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				
			
				</div>
					<!-- END PORTLET-->
                    </div>
                    <!-- END PAGE HEADER-->
                    
                </div>
            
            </div>
			<div id="mdlAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">New User</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- BEGIN FORM-->
                                            <form action="<?php echo base_url(); ?>index.php/Usermgt/addmember" id="form_sample_3" class="form-horizontal" method="POST">
                                                <div class="form-body">
                                                    <div class="alert alert-danger display-hide">
                                                            <button class="close" data-close="alert"></button>
                                                            You have some form errors. Please check below.
                                                    </div>
                                                    <div class="alert alert-success display-hide">
                                                            <button class="close" data-close="alert"></button>
                                                            Your form validation is successful!
                                                    </div>
                                                    <div class="row margin-top-10">
                                                        <div class="col-md-12">
															<div class="form-group">
                                                                    <label class="control-label col-md-4">USER NAME <span>
                                                                     </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="username" id="username" data-required="1" class="form-control" value=""/>
																	</div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">EMAIL <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="email" name="email" id="email" data-required="1" class="form-control"/>
                                                                    </div>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">TYPE <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="type" id="type">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="wilayah">wilayah</option>
                                                                            </select>
                                                                    </div>
                                                            </div>
															
															
															<div class="form-group">
                                                                    <label class="control-label col-md-4">PASSWORD <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="password" name="password" id="password" data-required="1" class="form-control"/>
                                                                    </div>
                                                            </div>
                                                            <?php if($_SESSION['uwilayah'] == 'all'){
                                                    echo '<div class="form-group">
                                                                    <label class="control-label col-md-4">Wilayah <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="wilayah" id="wilayah">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                                                                                    <option value="Jakarta Utara">Jakarta Utara</option>
                                                                                    <option value="Jakarta Barat">Jakarta Barat</option>
																					<option value="Jakarta Selatan I">Jakarta Selatan I</option>
																					<option value="Jakarta Selatan II">Jakarta Selatan II</option>
																					<option value="Jakarta Timur I">Jakarta Timur I</option>
																					<option value="Jakarta Timur II">Jakarta Timur II</option>
																					<option value="depok">Depok</option>
																					<option value="bogor">Bogor</option>
																					<option value="bekasi">Bekasi</option>
																					<option value="tangerang">Tangerang</option>
																					<option value="cibinong">Cibinong</option>																				
                                                                            </select>
                                                                    </div>
                                                        </div>
                                                    '; } 
													?>
															
                                                        </div>
                                                    
                                               
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-5 col-md-7">
                                                            <button type="submit" class="btn green">Update</button>
                                                            <a href="" class="btn default">Cancel</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END FORM-->
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        </div>
                                    </div>
                                </div>
                            
							<div id="mdledit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Edit User</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php $this->load->view('useredit');?>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
			
            <!-- END CONTENT -->
        </div>
		
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
                2017 &copy; SIMPAN.
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function () {
                Metronic.init(); // init metronic core componets
                Layout.init(); // init layout
                //Demo.init(); // init demo features  
                //Index.init();  
                Datepicker.init(); // init index page's custom scripts
                Dashboard.init();
                
            });
        </script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
		<!--script type="text/javascript" src="<?php echo base_url()?>assets/admin/pages/scripts/jquery.dataTables.min.js"--></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/global/scripts/datatable.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/global/plugins/datatables/dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
		<!--script src="<?php echo base_url()?>assets/admin/pages/scripts/components-pickers.js"></script-->
		<!--script type="text/javascript" src="<?php echo base_url()?>assets/admin/pages/scripts/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/admin/pages/scripts/pdfmake.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/admin/pages/scripts/buttons.html5.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/admin/pages/scripts/jszip.min.js"></script-->
		
		<script type="text/javascript" src="<?php echo base_url()?>assets/global/scripts/app.min.js"></script>
		<?php $this->load->view('templates/js/dashboard'); ?>
		<?php $this->load->view('templates/js/datetimepicker'); ?>
		<script src="<?php echo base_url()?>assets/layouts/layout/scripts/layout.min.js"></script>  
<!--script type="text/javascript" src="<?php echo base_url()?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.js"></script-->
 
       <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>