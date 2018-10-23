<div class="navbar-custom navbar-custom-light" style="margin-top: -21px;">
    <ul class="list-unstyled topbar-right-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <small class="pro-user-name ml-1">
                   <?php echo ucwords(strtolower($this->session->userdata['full_name'])); ?>
                </small>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="<?php echo base_url("myaccount")?>" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>My Account</span>
                </a>

            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left disable-btn">
        <i class="fe-menu"></i>
    </button>
    <div class="app-search" style="height:70px;">                            
    </div>
</div>