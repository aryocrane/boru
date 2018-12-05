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
                        SIMPAN <small>Sistem Informasi Panjaitan</small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Bulk Upload data</a>
                            </li>
                        </ul>
                        
		
			<div class="row">
				                            <div class="col-md-12">
                                <!-- BEGIN PARAMETER PORTLET-->
                                <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Upload File</div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"> </a>
                                            <a href="javascript:;" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->
                                        <form role="form"  name="upload_form" id="upload_form" action="<?php echo base_url()?>index.php/bulkupdate/update" method="post" data-ajax="false" enctype="multipart/form-data" accept-charset="utf-8">
								<div class="form-body">
									<div class="form-group">
										<label for="nama_file">Masukan CSV File</label>
										<input type="file" id="nama_file" required="required" name="nama_file" >
										<p class="help-block">
											 Please only upload csv file with correct format.
										</p>
									</div>
									<div class="form-actions right">
									<button type="button" class="btn default">Cancel</button>
									<button type="submit" class="btn green">Submit</button>
									</div>
								</div>
							</form>
                                        <!-- END FORM-->
                                    </div>
                                </div> 
					</div>
				</div>			
							
        <!-- END CONTAINER -->
		</div>
		</div>
		</div>
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
                //Datepicker.init(); // init index page's custom scripts
                //Dashboard.init();
                
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
		
    </body>
    <!-- END BODY -->
</html>