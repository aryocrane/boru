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
                                <a href="#">Search Data</a>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                                    <div class="btn-group pull-right">
                                        <a href="#mdlAdd" data-toggle="modal" class="btn green">
                                        <i class="fa fa-plus"></i> Add New Member
                                        </a>
                                    </div>
                                </div>
                        </div>
		
			<div class="row">
				                            <div class="col-md-12">
                                <!-- BEGIN PARAMETER PORTLET-->
                                <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Parameter Search</div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"> </a>
                                            <a href="javascript:;" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->
                                        <form action="<?php echo base_url();?>index.php/Dashboard/search" class="form-horizontal" id="form1" name="form1">
                                            <div class="form-body">
                                                <div class="row">
													<div class="col-md-6">
														<div class="form-group">
                                                                    <label class="control-label col-md-3">Raja <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-6">
                                                                            <select class="form-control select2me" name="raja" id="raja">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="M">Martibiraja</option>
                                                                                    <option value="D">Dogor</option>
                                                                                    <option value="P">Ponot</option>
																					<option value="J">Janggut</option>
                                                                            </select>
                                                                    </div>
                                                        </div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
                                                                    <label class="control-label col-md-3">Suddud <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-6">
                                                                            <select class="form-control select2me" name="suddud">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="13">13</option>
                                                                                    <option value="14">14</option>
																					<option value="15">15</option>
																					<option value="16">16</option>
																					<option value="17">17</option>
																					<option value="18">18</option>
																					<option value="19">19</option>
																					<option value="20">20</option>
																					<option value="21">21</option>
																					<option value="22">22</option>
																					<option value="23">23</option>
																					<option value="24">24</option>
																					<option value="25">25</option>
																					
																					
                                                                            </select>
                                                                    </div>
                                                        </div>
													</div>
													<?php if($_SESSION['uwilayah'] == 'all'){
                                                    echo '<div class="col-md-6">
                                                        <div class="form-group">
                                                                    <label class="control-label col-md-3">Wilayah <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-6">
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
                                                    </div>'; } else {
													echo '<div class="col-md-6">
                                                        <div class="form-group">
                                                                    <label class="control-label col-md-3">Wilayah <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-6">
                                                                            <select class="form-control select2me" name="wilayah" id="wilayah">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="'.$_SESSION['uwilayah'].'">'.$_SESSION['uwilayah'].'</option>																				
                                                                            </select>
                                                                    </div>
                                                        </div>
                                                    </div>';}
													?>
													
                                                    <!--/span-->
													<div class="col-md-6">
                                                        <div class="form-group">
                                                                    <label class="control-label col-md-3">Jabatan <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-6">
                                                                            <select class="form-control select2me" name="jabatan">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="jakpus">Ketua</option>
                                                                                    <option value="jakut">Sekretaris</option>
                                                                                    <option value="jakbar">Bendahara</option>
																					<option value="jaksel1">Anggota</option>
																																								
                                                                            </select>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                       
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Goar</label>
                                                            <div class="col-md-6">
                                                                <input type="text" id="panggoaran" class="form-control" name="panggoaran">
                                                               
                                                            </div>
                                                        </div>
                                                                
                                                    </div>
													<div class="col-md-6">
														<div class="form-group">
                                                                    <label class="control-label col-md-3">Komisariat <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-6">
                                                                            <select class="form-control select2me" name="komisariat" id="komisariat">
                                                                                    <option value="">Select...</option>
                                                                                    																			
                                                                            </select>
                                                                    </div>
															</div>
														</div>
														<div class="col-md-6">
                                                        <div class="form-group">
                                                                    <label class="control-label col-md-3">Usia <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-6">
                                                                            <select class="form-control select2me" name="usia">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="tua">Lebih dari 60 tahun</option>
																					<option value="senior">40-60 tahun</option>
                                                                                    <option value="dewasa">25-40 tahun</option>
                                                                                    <option value="remaja">13-25 tahun</option>
																					<option value="anak">0-13 tahun</option>
																																								
                                                                            </select>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                    <div class="col-md-6">
													<div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button id="submitd" type="submit" class="btn purple">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                    </div>
                                </div> 
			

								
				
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
									<td colspan="2">
                                        <a href="<?php echo base_url()?>index.php/dashboard/edit/<?php echo $value['id'];?>" data-toggle="modal" class="btn green" id="mdleditbtn" data-target="#mdledit">
                                        <i class="fa fa-edit"></i> Edit 
                                        </a>
										<p> </p>
                                        <a href="<?php echo base_url()?>index.php/dashboard/deletemember/<?php echo $value['id'];?>"  class="btn green" id="deletebtn" onClick="return confirm('Are you absolutely sure you want to delete?')" >
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
                                            <h4 class="modal-title">New Member</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- BEGIN FORM-->
                                            <form action="<?php echo base_url(); ?>index.php/Dashboard/addmember" id="form_sample_3" class="form-horizontal" method="POST">
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
                                                                    <label class="control-label col-md-4">PSO <span>
                                                                     </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="pso" id="pso" data-required="1" class="form-control" value="<?php echo $panggoaran;?>"/>
																	</div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">Panggoaran <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="panggoaran" id="panggoaran" data-required="1" class="form-control"/>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
																	<label class="control-label col-md-4">Tanggal Lahir <span class="required">
                                                                    * </span>
																	</label>
																	<div class="col-md-7">
																		<div class="input-group input-medium date date-picker" data-date="2000-12-31" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
																			<input type="text" class="form-control" id="ttl" name="ttl" readonly>
																			<span class="input-group-btn">
																				<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
																			</span>
																		</div>
																	</div>
															</div>
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">Raja <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="raja" id="raja">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="M">Martibiraja</option>
                                                                                    <option value="D">Dogor</option>
                                                                                    <option value="P">Ponot</option>
																					<option value="J">Janggut</option>
                                                                            </select>
                                                                    </div>
                                                            </div>
															<div class="form-group">
                                                                    <label class="control-label col-md-4">Status <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="status" id="status">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="Ama">Ama</option>
                                                                                    <option value="Ina">Ina</option>
                                                                                    <option value="Anak">Anak</option>
																					<option value="Boru">Boru</option>
                                                                            </select>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">Suddud <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                           <select class="form-control select2me" name="suddud" id="suddud">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="13">13</option>
                                                                                    <option value="14">14</option>
																					<option value="15">15</option>
																					<option value="16">16</option>
																					<option value="17">17</option>
																					<option value="18">18</option>
																					<option value="19">19</option>
																					<option value="20">20</option>
																					<option value="21">21</option>
																					<option value="22">22</option>
																					<option value="23">23</option>
																					<option value="24">24</option>
																					<option value="25">25</option>
																			</select>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">Jabatan <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="jabatan" id="jabatan">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="ketua">Ketua</option>
                                                                                    <option value="sekretaris">Sekretaris</option>
                                                                                    <option value="bendahara">Bendahara</option>
																					<option value="anggota">Anggota</option>
																																								
                                                                            </select>
                                                                    </div>
															</div>
															<div class="form-group">
                                                                    <label class="control-label col-md-4">Alamat <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="alamat" id="alamat" data-required="1" class="form-control"/>
                                                                    </div>
                                                            </div>
                                                            <?php if($_SESSION['uwilayah'] == 'all'){
                                                    echo '<div class="form-group">
                                                                    <label class="control-label col-md-4">Wilayah <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="wilayahmodal" id="wilayahmodal">
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
                                                    '; } else {
													echo ' <div class="form-group">
                                                                    <label class="control-label col-md-4">Wilayah <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="wilayahmodal" id="wilayahmodal">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="'.$_SESSION['uwilayah'].'">'.$_SESSION['uwilayah'].'</option>																				
                                                                            </select>
                                                                    </div>
                                                        </div>
                                                    ';}
													?>
															<div class="form-group">
                                                                    <label class="control-label col-md-4">Komisariat <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="komisariatmodal" id="komisariatmodal">
                                                                                    <option value="">Select...</option>
                                                                                    																			
                                                                            </select>
                                                                    </div>
															</div>
                                                            
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">Phone <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="phone" id="phone" data-required="1" class="form-control"/>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                            </div>
							<div id="mdledit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Edit Member</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php $this->load->view('editmodal');?>
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