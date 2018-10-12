<div class="left-side-menu">
        <div class="slimscroll-menu">
            <!-- LOGO -->
            <a href="index.html" class="logo text-center mb-4">
                <span class="logo-lg">
                    <img src="<?= base_url('admin_template/assets/images/logo.png') ?>" alt="" height="60">
                </span>
                <span class="logo-sm">
                    <img src="<?= base_url('admin_template/assets/images/logo-sm.png') ?>" alt="" height="24">
                </span>
            </a>
             <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul class="metismenu" id="side-menu">
                   <li class="menu-title">Navigation</li>
                   <li>
                        <a href="javascript: void(0);">
                            <i class="fe-clipboard"></i>
                            <span> Products </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li>
                                <a href="<?= base_url().'index.php/products';?>" aria-expanded="false">
                                    Products
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-user"></i> 
                            <span> Clients </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li>
                                <a href="#">Clients</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-edit"></i>
                            <span> Orders </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li>
                                <a href="#">Orders</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-folder-plus"></i>
                            <span> Type of User </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li>
                                <a href="<?= base_url().'index.php/typeUser';?>">
                                    Type of User
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> <i class="fe-settings"></i> Settings </a>
                    </li>
                            
                </ul>
            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->
</div>