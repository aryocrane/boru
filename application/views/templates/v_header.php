
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo base_url(); ?>index.php/dashboard">
                        <img src="<?php echo base_url(); ?>assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler hide">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
									<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-bell"></i>
					<span class="badge badge-default">
					<?php echo $jumlah;  ?> </span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<p> 
								 Ada <?php echo $jumlah;  ?> Anggota Yang Ulang Tahun hari ini!
							</p>
						</li>
						
						<li> 						
							<ul class="dropdown-menu-list scroller" style="height: 250px;">	
							<?php foreach($ultah['item'] as $keye => $valuee): ?> 
								<?php //foreach($valuee as $key_iteme => $iteme):?>
								<li>									
									<a href="#">									
									<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
									</span><?php echo $valuee['no_anggota']." - ".$valuee['suddud']." - ".$valuee['panggoaran']; ?>
									<span class="time"> <?php echo $valuee['ttl'];?> </span>
									</a>									
								</li>
									<?php //endforeach;?>.
									<?php endforeach;?>.
							</ul>						
						</li>
						<!--li class="external">
							<a href="#">
							See all Birthday <i class="m-icon-swapright"></i>
							</a>
						</li-->
					</ul>
				</li>
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown dropdown-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle hide1" src="<?php echo base_url(); ?>assets/admin/layout/img/avatar3_small.jpg"/>
                                <span class="username username-hide-on-mobile">
                                    <?php echo ucfirst($_SESSION['username'])?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <!--li>
                                    <a href="<?php echo base_url(); ?>index.php/profile">
                                        <i class="icon-user"></i> My Profile </a>
                                </li-->
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/logout">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->