<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./admin/dashboard.php" class="brand-link">
        <!--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
        <span class="brand-text font-weight-light">Olymic</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
        <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
        </div>
        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
        </div>
        <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 921px;"></div>
        <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <!--<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
                        </div>
                        <div class="info">
                        <a href="#" class="d-block"><?php echo "<p class='d-block'>".$_SESSION['sess_admin_username']."</p>";  ?></a>
                        </div>
                    </div>



                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="./admin/dashboard.php" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt" aria-hidden="true"></i>
                                    <p>dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                        Event Manage
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="display: none;">
                                    <li class="nav-item">
                                        <a href="./eventform.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Event</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./eventManageForm.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage Event</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-newspaper"></i>
                                    <p>
                                        News Manage
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="display: none;">
                                    <li class="nav-item">
                                        <a href="./newsform.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add News</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./newsManageForm.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage News</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-plus-square"></i>
                                    <p>
                                        Sponsor Manage
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="display: none;">
                                    <li class="nav-item">
                                        <a href="./sponsorform.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Sponsor</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./sponsorManageForm.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage Sponsor</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                                    <p>
                                        Administrator Manage
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="display: none;">
                                    <li class="nav-item">
                                        <a href="./adminform.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Administrator</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./adminManageForm.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage Administrator</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-bullhorn" aria-hidden="true"></i>
                                    <p>
                                        Broadcast Manage
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="display: none;">
                                    <li class="nav-item">
                                        <a href="./broadcastform.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Broadcast</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./broadcastManageForm.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage Broadcast</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="./logout.php" class="nav-link">
                                    <i class="nav-icon far fa-circle text-info"></i>
                                    <p>Log Out</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
        </div>
        <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
        </div>
        <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="height: 74.9593%; transform: translate(0px, 0px);"></div>
            </div>
        </div>
        <div class="os-scrollbar-corner"></div>
    </div>
    <!-- /.sidebar -->
</aside>