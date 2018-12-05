<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <!-- BEGIN FORM-->
	<?php $this->load->view('templates/css/v_global'); ?>
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <?php $this->load->view('templates/css/v_plugins'); ?>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <?php $this->load->view('templates/css/v_theme'); ?>
	<?php $this->load->view('templates/js/v_core'); ?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <?php $this->load->view('templates/js/v_page_plugin'); ?>
	<?php $this->load->view('templates/js/komisariat'); ?>

            <form action="<?php echo base_url(); ?>index.php/Usermgt/editmember" id="form_sample_3" class="form-horizontal" method="POST">
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
                            <label class="control-label col-md-4">USERNAME <span>
                            </span>
                            </label>
                            <div class="col-md-7">
                                 <input type="text" name="username" id="username" data-required="1" class="form-control" value="<?php echo $USERNAME;?>"/>
							</div>
                        </div>
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">OLD PASSWORD <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="password" name="oldpassword" id="oldpassword" data-required="1" readonly class="form-control" value="<?php echo $PASSWORD;?>"/>
																		
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
																	<label class="control-label col-md-4">NEW PASSWORD <span class="required">
                                                                    * </span>
																	</label>
																	<div class="col-md-7">
																		<input type="password" name="password" id="password" data-required="1" class="form-control" value=""/>
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
																	<label class="control-label col-md-4">CURRENT TYPE <span class="required">
                                                                     </span>
                                                                    </label>
																	<div class="col-md-7">
																	<input type="text" name="typenow" id="typenow" data-required="1" class="form-control" value="<?php echo $TYPE;?>" readonly />
																	</div>
															</div>
															<div class="form-group">
                                                                    <label class="control-label col-md-4">EMAIL <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="email" name="email" id="email" data-required="1" class="form-control" value="<?php echo $EMAIL;?>"/>
                                                                    </div>
                                                            </div>
															<?php if($_SESSION['uwilayah'] == 'all'){
                                                            echo '<div class="form-group">
                                                                    <label class="control-label col-md-4">Wilayah Baru <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="wilayahedit" id="wilayahedit">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="jakpus">Jakarta Pusat</option>
                                                                                    <option value="jakut">Jakarta Utara</option>
                                                                                    <option value="jakbar">Jakarta Barat</option>
																					<option value="jaksel1">Jakarta Selatan I</option>
																					<option value="jaksel2">Jakarta Selatan II</option>
																					<option value="jaktim1">Jakarta Timur I</option>
																					<option value="jaktim2">Jakarta Timur II</option>
																					<option value="depok">Depok</option>
																					<option value="bogor">Bogor</option>
																					<option value="bekasi">Bekasi</option>
																					<option value="tangerang">Tangerang</option>
																					<option value="cibinong">Cibinong</option>																				
                                                                            </select>
																	</div>
																	<label class="control-label col-md-4">Wilayah Sekarang <span class="required">
                                                                     </span>
                                                                    </label>
																	<div class="col-md-7">
																	<input type="text" name="wilayahnow" id="wilayahnow" data-required="1" class="form-control" value="'.$WILAYAH.'" readonly />
																	</div>
															</div> '; }?>
															
                                                            
                                                            
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
											<script>
            jQuery(document).ready(function () {
                //Metronic.init(); // init metronic core componets
                //Layout.init(); // init layout
                //Demo.init(); // init demo features  
                //Index.init();  
                //Datepicker_edit.init(); // init index page's custom scripts
               // Dashboard.init();
                
            });
        </script>
		
	<script type="text/javascript" src="<?php echo base_url()?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	
    </body>
    <!-- END BODY -->
</html>