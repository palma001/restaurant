<div class="left-side-menu">
        <div class="slimscroll-menu">
            <a href="<?php echo base_url('')?>" class="logo text-center mb-4">
            <a href="index.html" class="logo text-center mb-4">
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
                   <li class="menu-title">Navigation</li>
                   <li><a href="<?php echo base_url("index.php/home");?>" title=""><i class="fe-home"></i> Home</a></li>
                   <li>
                        <a href="<?= base_url().'index.php/products'?>">
                            <i class="fe-clipboard"></i>
                            <span> Products </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo  base_url('index.php/customers/');?>">   <i class="fe-user"></i> 
                            <span> Clients </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/orders/');?>">
                            <i class="fe-edit"></i>
                            <span> Orders </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/users/');?>">
                            <i class="fe-user"></i>
                            <span> Users </span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('index.php/sliders/');?>"> <i class="fe-sliders"></i> Sliders </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url("index.php/home/");?>"> <i class="fe-globe"></i> Social Networks </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/typesusers/');?>">
                            <i class="fe-user-check"></i>
                            <span>Types of Users</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('index.php/sliders/');?>"> <i class="fe-sliders"></i> Sliders </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/settings/');?>"> <i class="fe-settings"></i> Settings </a>
                    <li>
                        <a href="<?php  echo base_url().'/index.php/login/destroy/';?>"> <i class="fe-log-in"></i> Exit </a>
                    </li>
                </ul>
            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->
</div>