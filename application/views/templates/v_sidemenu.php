
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu " data-auto-scroll="true" data-slide-speed="200">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                            <form class="sidebar-search " action="extra_search.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        <li class="start">
                            <a href="<?php echo base_url(); ?>index.php/dashboard">
                                <i class="icon-home"></i>
                                <span class="title">Search Data</span>
                                <span class="selected"></span>
                            </a>
                        </li>
						<?php if($_SESSION['utype'] == 'admin'){
						echo '<li class="start">
                            <a href="bulkupdate">
                                <i class="icon-home"></i>
                                <span class="title">Bulk Upload Member</span>
                                <span class=""></span>
                            </a>
                        </li>';
						} ?>
						<?php if($_SESSION['utype'] == 'admin'){
						echo '<li class="start">
                            <a href="Usermgt">
                                <i class="icon-home"></i>
                                <span class="title">User Managemement</span>
                                <span class=""></span>
                            </a>
                        </li>';
						} ?>
                        <!--li >
                            <a href="<?php //echo base_url(); ?>index.php/profile">
                                <i class="icon-home"></i>
                                <span class="title"></span>
                                <span class="selected"></span>
                            </a>
                        </li-->
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->