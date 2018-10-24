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
                        <a class="logo" href="index.html">
                            <img class="logo-light" src="<?php echo base_url('granny/assets/images/logo/logo-light.png') ?>" alt="granny Logo">

                            <img class="logo-dark" src="<?php echo base_url('granny/assets/images/logo/logo-dark.png') ?>" alt="granny Logo">
                        </a>
                    </div>

                    <div class="module-container pull-right">
                        <!-- Module Reservation  -->
                        <div class="module module-reservation">
                            <a class="btn-popup" data-toggle="modal" data-target="#reservationModule"><i class="lnr lnr-users"></i>Reservation</a>
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
                        <!-- Module Search -->
                        <div class="module module-search">
                            <div class="module-icon search-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="module-content module-fullscreen module--search-box">
                                <div class="pos-vertical-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                                                <form class="form-search">
                                                    <input type="text" class="form-control" placeholder="Type Search Words Then Enter">
                                                    <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                                </form>
                                                <!-- .form-search end -->
                                            </div>
                                            <!-- .col-md-8 end -->
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .container end -->
                                </div>
                                <a class="module-cancel" href="#">close</a>
                            </div>
                        </div>
                        <!-- .module-search end -->
                        <!-- Module Side NAV -->
                        <div class="module module-side-nav">
                            <div class="module-icon side-nav-icon">
                                <i class="fa fa-bars"></i>
                                <span class="title">Side Navigation</span>
                            </div>
                            <div class="module-content module-hamburger">
                                <div class="hamburger-panel module-widgets bg-white">
                                    <!-- Recent Posts
                                    ============================================= -->
                                    <div class="widget widget-recent-posts">
                                        <div class="widget--title">
                                            <h5>recent posts</h5>
                                        </div>
                                        <div class="widget--content">
                                            <div class="entry">
                                                <img src="<?php echo base_url('granny/assets/images/blog/thumb/1.jpg'); ?>" alt="title" />
                                                <div class="entry-desc">
                                                    <div class="entry-meta">
                                                        <a href="#">Oct 15, 2017</a>
                                                    </div>
                                                    <div class="entry-title">
                                                        <a href="#">The Best Side Dishes for Next Dinner</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .recent-entry end -->
                                            <div class="entry">
                                                <img src="<?php echo base_url('granny/assets/images/blog/thumb/2.jpg') ?>" alt="title" />
                                                <div class="entry-desc">
                                                    <div class="entry-meta">
                                                        <a href="#">sep 15, 2017</a>
                                                    </div>
                                                    <div class="entry-title">
                                                        <a href="#">Cornbread Stuffing Apples and Sausage</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .recent-entry end -->
                                        </div>
                                    </div>
                                    <!-- .widget-recent end -->
                                    <!-- Instagram Feed
                                    ============================================= -->
                                    <div class="widget widget-instagram">
                                        <div class="widget--title">
                                            <h5>Instagram</h5>
                                        </div>
                                        <div class="widget--content">
                                            <div id="instafeedModule" class="instafeed" data-insta-number="8"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <!-- .widget-instagram end -->
                                    <!-- Tag Clouds
                                    ============================================= -->
                                    <div class="widget widget-tags">
                                        <div class="widget--title">
                                            <h5>tag clouds</h5>
                                        </div>
                                        <div class="widget--content">
                                            <a href="#">responsive</a>
                                            <a href="#">modern</a>
                                            <a href="#">corporate</a>
                                            <a href="#">business</a>
                                            <a href="#">awesome</a>
                                            <a href="#">fresh</a>
                                        </div>
                                    </div>
                                    <!-- .widget-tags end -->
                                    <a class="module-cancel" href="#">close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .module-container end -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse text-dark pull-right" id="navbar-collapse-1">
                        <ul class="nav navbar-nav nav-pos-right navbar-left">
                            <!-- Home Menu -->
                            <li class="has-dropdown mega-dropdown active">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">home</a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li>
                                        <div class="container">
                                            <div class="row">
                                                <!-- Column #1 -->
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>
                                                            <a href="index.html">home main</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-2.html">homepage 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-3.html">homepage 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-4.html">homepage 4</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .col-md-3 end -->

                                                <!-- Column #2 -->
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>
                                                            <a href="homepage-5.html">homepage 5</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-6.html">homepage 6</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-7.html">homepage 7</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-8.html">homepage 8</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .col-md-2 end -->

                                                <!-- Column #3 -->
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>
                                                            <a href="homepage-9.html">homepage 9</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-10-classic.html">homepage 10 (classic)</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-11-bordered.html">homepage 11 (boardered)</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-12-boxed.html">homepage 12 (boxed)</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .col-md-3 end -->

                                                <!-- Column #4 -->
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>
                                                            <a href="homepage-13-dark.html">homepage 13 (dark)</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-14-onepage.html">homepage 14 (onepage)</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-15-fullscreen.html">homepage 15 (fullscreen)</a>
                                                        </li>
                                                        <li>
                                                            <a href="homepage-16-shop.html">homepage 16 (shop)</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .col-md-2 end -->
                                            </div>
                                            <!-- .row end -->
                                        </div>
                                        <!-- container end -->
                                    </li>
                                </ul>
                                <!-- .mega-dropdown-menu end -->
                            </li>
                            <!-- li end -->
                            <!-- About Menu -->
                            <li class="has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">About</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="page-about.html">our story</a>
                                    </li>
                                    <li>
                                        <a href="page-chefs.html">our chefs</a>
                                    </li>
                                    <li>
                                        <a href="page-contacts.html">contact us</a>
                                    </li>
                                    <li>
                                        <a href="page-faqs.html">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="page-guestbook.html">guestbook</a>
                                    </li>
                                    <li>
                                        <a href="page-reservation.html">online reservation</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- li end -->
                            <!-- Menu Menu -->
                            <li class="has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Menu</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="menu-board.html">menu board</a>
                                    </li>
                                    <li>
                                        <a href="menu-classic.html">menu classic</a>
                                    </li>
                                    <li>
                                        <a href="menu-gallery.html">menu gallery</a>
                                    </li>
                                    <li>
                                        <a href="menu-grid.html">menu grid</a>
                                    </li>
                                    <li>
                                        <a href="menu-mixed-grid.html">menu mixed grid</a>
                                    </li>
                                    <li>
                                        <a href="menu-mixed.html">menu mixed</a>
                                    </li>
                                    <li>
                                        <a href="menu-plates.html">menu plates</a>
                                    </li>
                                    <li>
                                        <a href="menu-split.html">menu split</a>
                                    </li>
                                    <li>
                                        <a href="menu-variations.html">menu variations</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- li end -->
                            <!-- Features Menu-->
                            <li class="has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">features</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">revolution sliders</a>
                                        <ul class="dropdown-menu">
                                            <li class="has-dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Sliders 1</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="slider-1.html">slider 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="slider-2.html">slider 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="slider-3.html">slider 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="slider-4.html">slider 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="slider-5.html">slider 5</a>
                                                    </li>
                                                    <li>
                                                        <a href="slider-6.html">slider 6</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Sliders 2</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="slider-9.html">slider 7</a>
                                                    </li>
                                                    <li>
                                                        <a href="slider-9.html">slider 8</a>
                                                    </li>
                                                    <li>
                                                        <a href="slider-9.html">slider 9</a>
                                                    </li>
                                                    <li>
                                                        <a href="slider-10.html">slider 10</a>
                                                    </li>
                                                    <li>
                                                        <a href="slider-11.html">slider 11</a>
                                                    </li>
                                                    <li>
                                                        <a href="slider-12.html">slider 12</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Headers</a>
                                        <ul class="dropdown-menu">
                                            <li class="has-dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">transparent</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="header-1.html">transparent 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-2.html">transparent 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-3.html">transparent 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-5.html">transparent 5</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-6.html">transparent 6</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-10.html">transparent 7</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-11.html">transparent 8</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-12.html">transparent 9</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-13.html">transparent 10</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-20.html">transparent 11</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-22.html">transparent 12</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">white</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="header-9.html">white 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-15.html">white 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-16.html">white 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-17.html">white 5</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-19.html">white 6</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-23.html">white 7</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">centered</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="header-7.html">centered 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-9.html">centered 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-11.html">centered 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-13.html">centered 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-17.html">centered 5</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-18.html">centered 6</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-19.html">centered 7</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">fullscreen</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="header-8.html">fullscreen 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-22.html">fullscreen 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">with topbar</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="header-7.html">topbar 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-11.html">topbar 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-14.html">topbar 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-18.html">topbar 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">fixed top</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="header-1.html">fixed 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-2.html">fixed 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-15.html">fixed 3</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">bordered</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="header-1.html">bordered 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-2.html">bordered 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-3.html">bordered 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-5.html">bordered 5</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-6.html">bordered 6</a>
                                                    </li>
                                                    <li>
                                                        <a href="header-8.html">bordered 8</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="header-23.html">dark header</a></li>
                                            <li><a href="header-21.html">left menu</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Footers</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="footer-1.html#footer">Footer 1</a>
                                            </li>
                                            <li>
                                                <a href="footer-2.html#footer">Footer 2</a>
                                            </li>
                                            <li>
                                                <a href="footer-3.html#footer">Footer 3</a>
                                            </li>
                                            <li>
                                                <a href="footer-4.html#footer">Footer 4</a>
                                            </li>
                                            <li>
                                                <a href="footer-5.html#footer">Footer 5</a>
                                            </li>
                                            <li>
                                                <a href="footer-6.html#footer">Footer 6</a>
                                            </li>
                                            <li>
                                                <a href="footer-7.html#footer">Footer 7</a>
                                            </li>
                                            <li>
                                                <a href="footer-8.html#footer">Footer 8</a>
                                            </li>
                                            <li>
                                                <a href="footer-10.html#footer">Footer 10</a>
                                            </li>
                                            <li>
                                                <a href="footer-11.html#footer">Footer 11</a>
                                            </li>
                                            <li>
                                                <a href="footer-12.html#footer">Footer 12</a>
                                            </li>
                                            <li>
                                                <a href="footer-13.html#footer">Footer 13</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">page titels</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="page-title-1.html">page title 1</a>
                                            </li>
                                            <li>
                                                <a href="page-title-2.html">page title 2</a>
                                            </li>
                                            <li>
                                                <a href="page-title-3.html">page title 3</a>
                                            </li>
                                            <li>
                                                <a href="page-title-4.html">page title 4</a>
                                            </li>
                                            <li>
                                                <a href="page-title-5.html">page title 5</a>
                                            </li>
                                            <li>
                                                <a href="page-title-6.html">page title 6</a>
                                            </li>
                                            <li>
                                                <a href="page-title-7.html">page title 7</a>
                                            </li>
                                            <li>
                                                <a href="page-title-8.html">page title 8</a>
                                            </li>
                                            <li>
                                                <a href="page-title-9.html">page title 9</a>
                                            </li>
                                            <li>
                                                <a href="page-title-10.html">page title 10</a>
                                            </li>
                                            <li>
                                                <a href="page-title-11.html">page title 11</a>
                                            </li>
                                            <li>
                                                <a href="page-title-12.html">page title 12</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">widgets</a>
                                        <ul class="mega-menu">
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="elements-widgets.html">flickr stream</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-widgets.html">search</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-widgets.html">last tweets</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-widgets.html">Filter</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-widgets.html">recent posts</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="elements-widgets.html">Advertisement</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-widgets.html">Recent Items</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-widgets.html">tag clouds</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-widgets.html">categories</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">untility pages</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="page-404.html">page 404</a>
                                            </li>
                                            <li>
                                                <a href="page-soon.html">coming soon</a>
                                            </li>
                                            <li>
                                                <a href="page-maintenance.html">maintenance</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">page tempalates</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="page-layout-fullwidth.html">fullwidth</a>
                                            </li>
                                            <li>
                                                <a href="page-layout-fullwidth-wide.html">fullwidth wide</a>
                                            </li>
                                            <li>
                                                <a href="page-layout-sidebar-right.html">right sidebar</a>
                                            </li>
                                            <li>
                                                <a href="page-layout-sidebar-left.html">left sidebar</a>
                                            </li>

                                            <li>
                                                <a href="page-layout-blank.html">blank page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="landing.html">landing page</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- li end -->
                            <li>
                                <a class="menu-item" href="page-gallery.html">gallery</a>
                            </li>
                            <!-- li end -->
                            <!-- Blog Menu-->
                            <li class="has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Blog</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="blog-carousel.html">blog carousel</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog grid</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="blog-grid-3cols.html">3 columns</a>
                                            </li>
                                            <li>
                                                <a href="blog-grid-3cols-sidebar.html">3 columns sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-grid-4cols.html">4 columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog standard</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="blog-standard-sidebar-right.html">right sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-standard-sidebar-left.html">left sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-standard-centered.html">centered</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog single</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="blog-single-sidebar-right.html">right sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-single-sidebar-left.html">left sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-single-centered.html">centered</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- li end -->
                            <!-- shop Menu -->
                            <li class="has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">shop</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="shop-4cols.html">shop 4 columns</a>
                                    </li>
                                    <li>
                                        <a href="shop-products.html">shop products</a>
                                    </li>
                                    <li>
                                        <a href="shop-single.html">shop single</a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">shop cart</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- li end -->
                            <!-- Elements Menu -->
                            <li class="has-dropdown mega-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">elements</a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li>
                                        <div class="container">
                                            <div class="row">
                                                <!-- Column #1 -->
                                                <div class="col-md-3">
                                                    <a href="#">interactive elements</a>
                                                    <ul>
                                                        <li>
                                                            <a href="elements-testimonials.html"><i class="fa fa-quote-right"></i>testimonials</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-interactive-banners.html"><i class="fa fa-clone"></i>interactive banners</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-carousel.html"><i class="fa fa-laptop"></i>post carousel</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-dividers.html"><i class="fa fa-dot-circle-o"></i>section divider</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-reservation.html"><i class="fa fa-calendar-check-o"></i>reservation</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-daily-specials.html"><i class="fa fa-newspaper-o"></i>Daily Specials</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- .col-md-3 end -->

                                                <!-- Column #2 -->
                                                <div class="col-md-3">
                                                    <a href="#">standard elements</a>
                                                    <ul>
                                                        <li>
                                                            <a href="elements-accordion.html"><i class="fa fa-server"></i>accordion</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-buttons.html"><i class="fa fa-suitcase"></i>buttons</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-cta.html"><i class="fa fa-child"></i>call to action</a>
                                                        </li>

                                                        <li>
                                                            <a href="elements-team.html"><i class="fa fa-group"></i>team variations</a>
                                                        </li>

                                                        <li>
                                                            <a href="elements-clients.html"><i class="fa fa-user"></i>clients</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-clients-carousel.html"><i class="fa fa-picture-o"></i>clients carousel</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- .col-md-3 end -->

                                                <!-- Column #3 -->
                                                <div class="col-md-3">
                                                    <a href="#">infographics elements</a>
                                                    <ul>
                                                        <li>
                                                            <a href="elements-counters.html"><i class="fa fa-dashboard"></i>counters</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-pricing.html"><i class="fa fa-exchange"></i>pricing tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-list.html"><i class="fa fa-list"></i>list</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-progress-bars.html"><i class="fa fa-hourglass-half"></i>progress bars</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-tabs.html"><i class="fa fa-ellipsis-h"></i>tabs</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-contact-form.html"><i class="fa fa-check-square-o"></i>contact form</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .col-md-3 end -->

                                                <!-- Column #4 -->
                                                <div class="col-md-3">
                                                    <a href="#">typography</a>
                                                    <ul>
                                                        <li>
                                                            <a href="elements-heading.html"><i class="fa fa-sort-alpha-asc"></i>heading</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-columns-grids.html"><i class="fa fa-th"></i>columns grids</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-icon-text.html"><i class="fa fa-sliders"></i>icon text</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-typography.html"><i class="fa fa-text-height"></i>typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-blockquotes.html"><i class="fa fa-quote-left"></i>blockquotes</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-video-buttons.html"><i class="fa fa-toggle-right"></i>video buttons</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .col-md-3 end -->
                                            </div>
                                            <!-- .row end -->
                                        </div>
                                        <!-- container end -->
                                    </li>
                                </ul>
                                <!-- .mega-dropdown-menu end -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>