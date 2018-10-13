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
                   <li><a href="<?= base_url();?>" title=""><i class="fe-home"></i> Home</a></li>
                   <li>
                        <a href="<?= base_url().'index.php/products';?>" aria-expanded="false">
                            <i class="fe-clipboard"></i> Products
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="fe-user"></i>  Clients</a>
                    </li>
                    <li>
                        <a href="<?= base_url().'index.php/orders';?>"> <i class="fe-edit"></i> Orders</a>
                    </li>
                    <li>
                       <a href="<?= base_url().'index.php/typeUser';?>">
                            <i class="fe-folder-plus"></i> Types of Users
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url().'index.php/settings';?>"> <i class="fe-settings"></i> Settings </a>
                    </li>      
                </ul>
            </div>
            <!-- End Sidebar -->
            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->
</div>