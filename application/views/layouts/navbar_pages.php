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
               <li class="menu-title">Pages</li>

               <?php  
                    if ($pages) {
                        foreach ($pages->result() as $key => $pages) {
                           echo '
                           <li><a href="'.base_url('pages/'.$pages->page_id).'" title="">
                                <i class="fe-book"></i> '.$pages->page_title.'</a>
                           </li>';
                        }
                    }
               ?>
               
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>