<div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<div id="wrapper" class="wrapper clearfix">
    <header id="navbar-spy" class="header header-1 header-transparent header-bordered header-fixed">
        <nav id="primary-menu" class="navbar navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="<?php echo base_url(); ?>">
                        <img class="logo-light" width="100" src="<?php echo base_url('uploads/logo/' . $settings->logo); ?>"  alt="granny Logo" >

                        <img class="logo-dark" width="100" src="<?php echo base_url('uploads/logo/' . $settings->logo); ?>" alt="granny Logo">
                    </a>
                </div>

                <div class="module-container pull-right">
                    <!-- Module Reservation  -->
                    <div class="module module-reservation">
                        <?php if ($settings) {?>

                           <?php if ($settings->active_reservations == 1) {?>
                            <a class="btn-popup" data-toggle="modal" data-target="#reservationModule"><i class="lnr lnr-users"></i>Reservation</a>
                        <?php }?>
                       <?php }?>


                        <div class="modal fade reservation-popup" tabindex="-1" role="dialog" id="reservationModule">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                        <div class="row reservation">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="reservation-form mb-30 bg-white text-center">
                                                    <form method="post" action="<?php echo base_url('granny/assets/php/reservation.php') ?>" class="reservationForm mb-0">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                                <div class="form-select">
                                                                    <i class="fa fa-angle-down"></i>
                                                                    <select class="form-control" name="res-pepole" id="resPepole">
                                                                        <option value="2">2 People</option>
                                                                        <option value="3">3 People</option>
                                                                        <option value="4">4 People</option>
                                                                        <option value="5">5 People</option>
                                                                        <option value="6">6 People</option>
                                                                        <option value="8">8 People</option>
                                                                        <option value="10">10 People</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                                <div class="form-select">
                                                                    <i class="fa fa-angle-down"></i>
                                                                    <select class="form-control" name="res-day" id="resDay">
                                                                        <option value="March 23">March 23, 2017</option>
                                                                        <option value="March 24">March 24, 2017</option>
                                                                        <option value="March 25">March 25, 2017</option>
                                                                        <option value="March 26">March 26, 2017</option>
                                                                        <option value="March 27">March 27, 2017</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                                <div class="form-select">
                                                                    <i class="fa fa-angle-down"></i>
                                                                    <select class="form-control" name="res-time" id="resTime">
                                                                        <option value="8:00">8:00 PM</option>
                                                                        <option value="9:00">9:00 PM</option>
                                                                        <option value="10:00">10:00 PM</option>
                                                                        <option value="11:00">11:00 PM</option>
                                                                        <option value="12:00">12:00 AM</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                                <input type="text" class="form-control" name="res-name" id="resName" placeholder="Your Name" required>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                                <input type="email" class="form-control" name="res-email" id="resEmail" placeholder="Your Email" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="res-phone" id="resNumber" placeholder="Phone Number" required>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <textarea class="form-control" name="res-message" id="resMessage" rows="2" placeholder="Add a special request (optional)"></textarea>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <input type="submit" value="Find Table" name="res-submit" class="btn btn--secondary btn--block">
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                              <!--Alert Message-->
                                                                <div class="reservation-result">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .row end -->
                                                    </form>
                                                    <!-- form end -->
                                                </div>
                                                <!-- .contact-form end -->
                                            </div>
                                            <!-- .col-md-8 end -->
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="text-uppercase text-center">
                                                    <strong><span class="text-white">Reservation Powered by</span> <a class="reservation-link" href="#">Opentable</a></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                </div>
                <!-- .module-container end -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse text-dark pull-right" id="navbar-collapse-1">
                    <ul class="nav navbar-nav nav-pos-right navbar-left">
                        <!-- Home Menu -->
                        <li class="has-dropdown mega-dropdown">
                            <a href="<?php echo base_url('home') ?>" class="menu-item">home</a>
                        </li>
                        <!-- li end -->
                        <!-- About Menu -->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">About</a>
                        </li>
                        <!-- li end -->
                        <!-- Menu -->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Menu</a>
                        </li>
                        <!--end -->
                        <li>
                            <a class="menu-item" href="<?php echo base_url('galleries/gallery'); ?>">gallery</a>
                        </li>
                        <!-- li end -->
                        <!-- Blog Menu-->
                        <?php
if ($blogs) {
    ?>
                            <li class="has-dropdown">
                                <a href="#" class="menu-item">Blog</a>
                            </li>
                        <?php
}
?>
                        <!-- li end -->
                        <li>
                            <a class="menu-item" href="<?php echo base_url('cart'); ?>"><i class='fas fa-cart-arrow-down'></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
</div>