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

                                            <form action="<?php echo base_url(); ?>index.php/Dashboard/editmember" id="form_sample_3" class="form-horizontal" method="POST">
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
                                                                    <label class="control-label col-md-4">No Anggota <span>
                                                                    </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="noanggota" id="noanggota" data-required="1" class="form-control" value="<?php echo $no_anggota;?>" readonly />
																	</div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">Goar <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="panggoaran" id="panggoaran" data-required="1" class="form-control" value="<?php echo $panggoaran;?>"/>
																		<input type="hidden" name="id" id="id" data-required="1" class="form-control" value="<?php echo $id;?>"/>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
																	<label class="control-label col-md-4">Tanggal Lahir <span class="required">
                                                                    * </span>
																	</label>
																	<div class="col-md-7">
																		<div class="input-group input-medium date date-picker" data-date="2000-12-31" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
																			<input type="text" class="form-control" id="ttl" name="ttl" value="<?php echo $ttl;?>" readonly>
																			<span class="input-group-btn">
																				<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
																			</span>
																		</div>
																	</div>
															</div>
															<?php if(!empty($suddud)){
															$arr = str_split($suddud); } ?>
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">Raja <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="raja" id="raja">
																					<option value="<?php if (!empty($suddud)){ echo $arr[0]; } else { echo ""; } ?>" selected>
																					<?php if (!empty($suddud)) {
																						if ($arr[0] =="M"){ echo "Martibiraja"; }else if
																					($arr[0] =="D"){ echo "Dogor"; } else if
																					($arr[0] =="P"){ echo "Ponot"; } else { echo "Janggut";}
																					} else { echo "Select.."; } ?>
																					</option>
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
                                                                                    <option value="<?php echo $status;?>" selected><?php echo $status;?></option>
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
                                                                                    <option value="<?php if (!empty($suddud)){ echo $arr[1].$arr[2]; } else { echo ""; } ?>" selected><?php if (!empty($suddud)){ echo $arr[1].$arr[2]; } else { echo "Select.."; };?></option>
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
                                                                    <label class="control-label col-md-4">Jabatan Baru <span class="required">
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
																	<label class="control-label col-md-4">Jabatan Sekarang <span class="required">
                                                                     </span>
                                                                    </label>
																	<div class="col-md-7">
																	<input type="text" name="jabatannow" id="jabatannow" data-required="1" class="form-control" value="<?php echo $jabatan;?>" readonly />
																	</div>
															</div>
															<div class="form-group">
                                                                    <label class="control-label col-md-4">Alamat <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="alamat" id="alamat" data-required="1" class="form-control" value="<?php echo $alamat;?>"/>
                                                                    </div>
                                                            </div>
															<?php if($_SESSION['uwilayah'] == 'all'){
                                                            echo '<div class="form-group">
                                                                    <label class="control-label col-md-4">Wilayah Baru <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="wilayahmodaledit" id="wilayahmodaledit">
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
																	<input type="text" name="wilayahnow" id="wilayahnow" data-required="1" class="form-control" value="'.$wilayah.'" readonly />
																	</div>
															</div> '; } else {
																echo '<div class="form-group">
                                                                    <label class="control-label col-md-4">Wilayah Baru <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="wilayahmodaledit" id="wilayahmodaledit">
                                                                                    <option value="" selected>Select...</option>
                                                                                    <option value="'.$_SESSION['uwilayah'].'">'.$_SESSION['uwilayah'].'</option>																				
                                                                            </select>
															</div>
																	<label class="control-label col-md-4">Wilayah Sekarang <span class="required">
                                                                     </span>
                                                                    </label>
																	<div class="col-md-7">
																	<input type="text" name="wilayahnow" id="wilayahnow" data-required="1" class="form-control" value="'.$wilayah.'" readonly />
																	</div>
															</div> ';
															}?>
															<div class="form-group">
                                                                    <label class="control-label col-md-4">Komisariat Baru<span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                            <select class="form-control select2me" name="komisariatmodaledit" id="komisariatmodaledit">
                                                                                    <option value="">Select...</option>
                                                                                    																			
                                                                            </select>
                                                                    </div>
																	<label class="control-label col-md-4">Komisariat Sekarang <span class="required">
                                                                     </span>
                                                                    </label>
																	<div class="col-md-7">
																	<input type="text" name="komisariatnow" id="komisariatnow" data-required="1" class="form-control" value="<?php echo $komisariat;?>" readonly />
																	</div>
															</div>
                                                            
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">Phone <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="phone" id="phone" data-required="1" class="form-control" value="<?php  if (!empty($telepon)) { echo $telepon; } ?>" />
                                                                    </div>
                                                            </div>
															<div class="form-group">
                                                                    <label class="control-label col-md-4">Pekerjaan <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="pekerjaan" id="pekerjaan" data-required="1" class="form-control" <?php echo $pekerjaan;?>/>
                                                                    </div>
                                                            </div>
															<div class="form-group">
                                                                    <label class="control-label col-md-4">Pendidikan <span class="required">
                                                                    * </span>
                                                                    </label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" name="pendidikan" id="pendidikan" data-required="1" class="form-control" <?php echo $pendidikan;?>/>
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
											<script>
            jQuery(document).ready(function () {
                //Metronic.init(); // init metronic core componets
                //Layout.init(); // init layout
                //Demo.init(); // init demo features  
                //Index.init();  
                Datepicker_edit.init(); // init index page's custom scripts
               // Dashboard.init();
                
            });
        </script>
		
	<script type="text/javascript" src="<?php echo base_url()?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<?php $this->load->view('templates/js/datetimepicker_edit'); ?>
    </body>
    <!-- END BODY -->
</html>