<div class="left-side-menu">
    <div class="slimscroll-menu">
        <a href="<?php echo base_url('home')?>" class="logo text-center mb-4">
        <a href="<?php echo base_url('home')?>" class="logo text-center mb-4">
            <span class="logo-lg">
                <img src="<?php echo base_url('admin_template/assets/images/logo.png') ?>" alt="" height="60">
            </span>
            <span class="logo-sm">
                <img src="<?php echo base_url('admin_template/assets/images/logo-sm.png') ?>" alt="" height="24">
            </span>
        </a>
         <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
               <li><a href="<?php echo base_url("admin/");?>" title=""><i class="fe-home"></i> Home</a></li>
               <li class="menu-title">Shop</li>
               <li>
                    <a href="<?= base_url().'products'?>">
                        <i class="fe-clipboard"></i>
                        <span> Products </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('categories/');?>">
                        <i class="fe-archive"></i>
                        <span>Categories</span>
                    </a>
                </li> 
                <li>
                    <a href="<?php echo  base_url('customers/');?>">   <i class="fe-user"></i> 
                        <span> Customers </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('orders/');?>">
                        <i class="fe-edit"></i>
                        <span> Orders </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('shippings/');?>">
                        <i class="fe-shopping-cart"></i>
                        <span> Shippings </span>
                    </a>
                </li>
                <li class="menu-title">Accounts</li>
                <li>
                    <a href="<?php echo base_url('users/');?>">
                        <i class="fe-users"></i>
                        <span> Users </span>
                    </a>
                </li> 
                <li>
                    <a href="<?php echo base_url('typesusers/');?>">
                        <i class="fe-user-check"></i>
                        <span>Roles</span>
                    </a>
                </li>
                <li class="menu-title">Performance</li>
                <li>
                    <a href="<?php echo base_url('pages/');?>">
                        <i class="fe-book"></i>
                        <span>Pages</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('sliders/');?>"> <i class="fe-sliders"></i> Sliders </a>
                </li>
                <li>
                    <a href="<?php echo base_url('galleries/');?>">
                        <i class="fe-image"></i>
                        <span>Galleries</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('blogs/');?>">
                        <i class="fe-book"></i>
                        <span>Blogs</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('countries/');?>">
                        <i class="fe-map"></i>
                        <span>Countries</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('states/');?>">
                        <i class="fe-map-pin"></i>
                        <span>States</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('reservations/');?>">
                        <i class="fe-book-open"></i>
                        <span>Reservations</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("admin/");?>"> <i class="fe-globe"></i> Social Networks </a>
                </li>
                <li>
                    <a href="<?php echo base_url('settings/');?>"> <i class="fe-settings"></i> Settings </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>