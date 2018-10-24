<section id="slider" class="slider slide-overlay-black">
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<!-- slide 1 -->

				<?php  
					if ($slider) {
						foreach ($slider->result() as $key => $slider) {
				?>
							<li data-transition="zoomin"
								data-slotamount="default"
								data-easein="Power4.easeInOut"
								data-easeout="Power4.easeInOut"
								data-masterspeed="2000">
								<!-- MAIN IMAGE -->
								<img src="<?php echo base_url('uploads/imagenes/'.$slider->image);?>" alt="Slide Background Image"  width="1920" height="1280">
								<!-- LAYER NR. 1 -->
								<div class="tp-caption"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-130"
									data-whitespace="nowrap"
									data-width="none"
									data-height="none"
			                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none"
									data-splitout="none"
									data-responsive_offset="on">
									<div class="slide--subheadline">Granny Offers You</div>
								</div>


								<!-- LAYER NR. 2 -->
								<div class="tp-caption"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-65"
									data-whitespace="nowrap"
									data-width="none"
									data-height="none"
			                        data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none"
									data-splitout="none"
									data-responsive_offset="on">
									<div class="slide--headline">The Best Tasting Experience!</div>
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="20"
									data-width="none"
									data-height="none"
			                        data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-splitin="none"
									data-splitout="none"
									data-responsive_offset="on">
									<div class="slide--bio text-center">Granny is a restaurant, bar and coffee roastery located on Egypt. We have<br> awesome recipes and the most talented chefs in town! </div>
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="100"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
			                        data-frames='[{"delay":2250,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none"
									data-splitout="none"
									data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
									data-basealign="slide"
									data-responsive_offset="on"
									data-responsive="off">
									<div class="slide-action">
										<a class="btn btn--white btn--bordered btn--lg" href="#">Get A Reservation Now</a>
									</div>
								</div>
							</li>
				<?php 			
						}
					}
				?>
			</ul>
		</div>
		<!-- END REVOLUTION SLIDER -->
	</div><!-- END OF SLIDER WRAPPER -->
</section>
<!-- tabs
============================================= -->
<section id="tabs1" class="tabs text-center bg-white pb-90">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">Hello dear</p>
                    <h2 class="heading--title mb-0">Welcome To Granny</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Granny was the first retaurant to open in Egypt, the resturant was designed with the history in mind we have created a soft industrial dining room, combined with an open kitchen, coffee take out bar and on site coffee roastery.</p>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#About" data-toggle="tab">About</a></li>
                    <li><a href="#History" data-toggle="tab">History</a></li>
                    <li><a href="#Awards" data-toggle="tab">Awards</a></li>
                    <li><a href="#Chefs" data-toggle="tab">Chefs</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active banner banner-1" id="About">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="banner-panel">
                                    <div class="banner--img">
                                        <img src="<?php base_url('granny/assets/images/banners/1.jpg')?>" alt="banner img" class="img-responsive">
                                    </div>
                                    <div class="banner--content">
                                        <h3>Start eating better</h3>
                                        <h4>Daily New Fresh Menus</h4>
                                        <p>Granny help you treat yourself with a different meal everyday, thanks to our daily changing menus and our awesome creative chefs!</p>
                                    </div>
                                </div>
                                <!-- .banner-panel end -->
                            </div>
                            <!-- .col-md-4 end -->

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="banner-panel">
                                    <div class="banner--img">
                                        <img src="<?php base_url('granny/assets/images/banners/2.jpg')?>" alt="banner img" class="img-responsive">
                                    </div>
                                    <div class="banner--content">
                                        <h3>Quality is the heart</h3>
                                        <h4>Fresh Ingredient, Tasty Meals</h4>
                                        <p>Who said healthy food can't also be delicious? Granny creative chefs use fresh and seasonal ingredients to make affordable.</p>
                                    </div>
                                </div>
                                <!-- .banner-panel end -->
                            </div>
                            <!-- .col-md-4 end -->

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="banner-panel">
                                    <div class="banner--img">
                                        <img src="assets/images/banners/3.jpg" alt="banner img" class="img-responsive">
                                    </div>
                                    <div class="banner--content">
                                        <h3>Hot & ready to serve</h3>
                                        <h4>Creative & Talented Chefs</h4>
                                        <p>Granny have offered a team of culinary professionals that make delectable dishes at memorable events for both private clientele.</p>
                                    </div>
                                </div>
                                <!-- .banner-panel end -->
                            </div>
                            <!-- .col-md-4 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .tab-pane end -->
                    <div class="tab-pane fade banner banner-5" id="History">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                                <img class="center-block mb-20" src="<?php echo base_url('granny/assets/images/banners/15.png'); ?>" alt="history">
                                <div class="banner--desc">
                                    I don't like food that's too carefully arranged; it makes me think that the chef is spending too much time arranging and not enough time cooking.
                                </div>
                            </div>
                        </div>
                        <!-- .row end -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="history-panel">
                                    <h6>1995</h6>
                                    <h3>Grand Opening</h3>
                                    <div class="divider--shape-13"></div>
                                    <p>Granny was opened in May 6, 1990, the interior was created by the most famous artists. Today our restaurant welcomes 250 people!</p>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="history-panel">
                                    <h6>2005</h6>
                                    <h3>Second Branch</h3>
                                    <div class="divider--shape-13"></div>
                                    <p>Since the very first day, Granny was a gathering place for teachers, doctors, actors. Therefore we decided to open our second branch!</p>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="history-panel">
                                    <h6>2015</h6>
                                    <h3>Great Taste Award</h3>
                                    <div class="divider--shape-13"></div>
                                    <p>Granny was and still remains not just a restaurant, but also a remarkable part of the culture. We are happy to announce that we claim tate award.</p>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .tab-pane end -->
                    <div class="tab-pane fade" id="Awards">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                                <ul class="tab--logos list-unstyled list-inline mb-50">
                                    <li><img src="<?php echo base_url('granny/assets/images/tabs/1.png'); ?>" alt="logo"></li>
                                    <li><img src="<?php echo base_url('granny/assets/images/tabs/2.png'); ?>" alt="logo"></li>
                                    <li><img src="<?php echo base_url('granny/assets/images/tabs/3.png'); ?>" alt="logo"></li>
                                    <li><img src="<?php echo base_url('granny/assets/images/tabs/7.png'); ?>" alt="logo"></li>
                                    <li><img src="<?php echo base_url('granny/assets/images/tabs/4.png'); ?>" alt="logo"></li>
                                    <li><img src="<?php echo base_url('granny/assets/images/tabs/5.png'); ?>" alt="logo"></li>
                                    <li><img src="<?php echo base_url('granny/assets/images/tabs/6.png'); ?>" alt="logo"></li>
                                </ul>
                                <h3 class="tab--heading">Since our grand opening in May 1995, Granny has won great awards from food critics and organizations all over the world.</h3>
                            </div>
                            <!-- .col-md-10 end -->
                        </div>
                        <!-- .row end -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-2">
                                <ul class="tab--details text-left">
                                    <li>The Good Food Award, Gold Seal (2017)</li>
                                    <li>The Organic Food Award, Soil Association (2017)</li>
                                    <li>The Great British & Egyptian Food Award (2016)</li>
                                    <li>The Food Made Good Award (2015)</li>
                                    <li>The Great Food Taste Award (2014)</li>
                                    <li>The Food Award, Egypt (2014)</li>
                                </ul>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <ul class="tab--details text-left">
                                    <li>The Best Food Award, Egypt (2013)</li>
                                    <li>The Best Chef in Egypt & Best Restaurant (2012, 2013)</li>
                                    <li>The Best Emerging Egypt Cuisine (2012)</li>
                                    <li>The Best Dining Experience (2011)</li>
                                    <li>The Best Chef in Egypt (2010)</li>
                                    <li>The Egyptian Star (2009)</li>
                                </ul>
                            </div>
                            <!-- .col-md-6 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .tab-pane end -->
                    <div class="tab-pane fade team pb-0 team-2" id="Chefs">
                        <div class="row">
                            <!-- Member #1 -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="<?php echo base_url('granny/assets/images/team/1.jpg') ?>" alt="member">
                                        <div class="member-overlay">
                                            <div class="member-hover">
                                                <div class="pos-vertical-center">
                                                    <div class="member-social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                    </div>
                                                    <!-- .memebr-social end -->
                                                    <div class="member-desc">
                                                        <p>Passion for cooking is in his genes. He grew up appreciating outstanding food and service at an early age.</p>
                                                    </div>
                                                    <!-- .memebr-desc end -->
                                                </div>
                                                <!-- .pos-vertical-center end -->
                                            </div>
                                            <!-- .memebr-hover end -->
                                        </div>
                                        <!-- .memebr-ovelay end -->
                                    </div>
                                    <!-- .member-img end -->
                                    <div class="member-info">
                                        <h5>Todd Stephen</h5>
                                        <h6>CEO & Founder</h6>
                                    </div>
                                    <!-- .member-info end -->
                                </div>
                                <!-- .member end -->
                            </div>
                            <!-- .col-md-3 end -->

                            <!-- Member #2 -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="<?php echo base_url('granny/assets/images/team/2.jpg') ?>" alt="member">
                                        <div class="member-overlay">
                                            <div class="member-hover">
                                                <div class="pos-vertical-center">
                                                    <div class="member-social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                    </div>
                                                    <!-- .memebr-social end -->
                                                    <div class="member-desc">
                                                        <p>Passion for cooking is in his genes. He grew up appreciating outstanding food and service at an early age.</p>
                                                    </div>
                                                    <!-- .memebr-desc end -->
                                                </div>
                                                <!-- .pos-vertical-center end -->
                                            </div>
                                            <!-- .memebr-hover end -->
                                        </div>
                                        <!-- .memebr-ovelay end -->
                                    </div>
                                    <!-- .member-img end -->
                                    <div class="member-info">
                                        <h5>Walter Adler</h5>
                                        <h6>Master Chef</h6>
                                    </div>
                                    <!-- .member-info end -->
                                </div>
                                <!-- .member end -->
                            </div>
                            <!-- .col-md-3 end -->

                            <!-- Member #3 -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="<?php echo base_url('granny/assets/images/team/3.jpg'); ?>" alt="member">
                                        <div class="member-overlay">
                                            <div class="member-hover">
                                                <div class="pos-vertical-center">
                                                    <div class="member-social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                    </div>
                                                    <!-- .memebr-social end -->
                                                    <div class="member-desc">
                                                        <p>Passion for cooking is in his genes. He grew up appreciating outstanding food and service at an early age.</p>
                                                    </div>
                                                    <!-- .memebr-desc end -->
                                                </div>
                                                <!-- .pos-vertical-center end -->
                                            </div>
                                            <!-- .memebr-hover end -->
                                        </div>
                                        <!-- .memebr-ovelay end -->
                                    </div>
                                    <!-- .member-img end -->
                                    <div class="member-info">
                                        <h5>James Carter</h5>
                                        <h6>Thai Master Chef</h6>
                                    </div>
                                    <!-- .member-info end -->
                                </div>
                                <!-- .member end -->
                            </div>
                            <!-- .col-md-3 end -->

                            <!-- Member #4 -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="<?php echo base_url('granny/assets/images/team/4.jpg'); ?>" alt="member">
                                        <div class="member-overlay">
                                            <div class="member-hover">
                                                <div class="pos-vertical-center">
                                                    <div class="member-social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                    </div>
                                                    <!-- .memebr-social end -->
                                                    <div class="member-desc">
                                                        <p>Passion for cooking is in his genes. He grew up appreciating outstanding food and service at an early age.</p>
                                                    </div>
                                                    <!-- .memebr-desc end -->
                                                </div>
                                                <!-- .pos-vertical-center end -->
                                            </div>
                                            <!-- .memebr-hover end -->
                                        </div>
                                        <!-- .memebr-ovelay end -->
                                    </div>
                                    <!-- .member-img end -->
                                    <div class="member-info">
                                        <h5>Michael Luke</h5>
                                        <h6>Chinese Master Chef</h6>
                                    </div>
                                    <!-- .member-info end -->
                                </div>
                                <!-- .member end -->
                            </div>
                            <!-- .col-md-3 end -->
                        </div>
                    </div>
                    <!-- .tab-pane end -->
                </div>
                <!-- .tabs-content end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #tabs1 end -->

<!-- specials #1
============================================= -->
<section id="specials" class="specials specials-1 bg-overlay bg-overlay-dark4 bg-parallax text--center">
    <div class="bg-section">
        <img src="<?php echo base_url('granny/assets/images/background/8.jpg'); ?>" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">What’s for lunch?</p>
                    <h2 class="heading--title color-white">Check Our Daily Specials</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="dishes-wrapper text--center">
                    <!-- Dish #1 -->
                    <div class="dish-panel">
                        <div class="dish--price">$24.95</div>
                        <h3 class="dish--title">Chesapeake crab and artichoke dip</h3>
                        <p class="dish--desc">Creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. served crusty bread for dipping.</p>
                        <div class="divider--shape-12"></div>
                    </div>
                    <!-- .dish end -->
                    <!-- Dish #2 -->
                    <div class="dish-panel">
                        <div class="dish--price">$36.95</div>
                        <h3 class="dish--title">Crispy shrimp and grits</h3>
                        <p class="dish--desc">Beer battered jumbo shrimp served with crispy cheddar grit polenta, corn and tomato salsa and old bay remoulade.</p>
                        <div class="divider--shape-12"></div>
                    </div>
                    <!-- .dish end -->
                    <!-- Dish #3 -->
                    <div class="dish-panel">
                        <div class="dish--price">$21.95</div>
                        <h3 class="dish--title">Thai chicken quesadilla</h3>
                        <p class="dish--desc">A chipotle pepper tortilla stuffed with grilled chicken, fresh cilantro, red cabbage, mozzarella with sweet thai chili sauce</p>
                    </div>
                    <!-- .dish end -->
                </div>
                <!-- .dishes-wrapper end -->
            </div>
            <!-- .col-md-10 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #specials1 end -->

<!-- Menu Mixed Grid
============================================= -->
<section id="menuMixedGrid" class="bg-white">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">Taste the best</p>
                    <h2 class="heading--title mb-0">Discover Our Menu</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Everyone has taste, even if they don't realize it. Even if you're not a great chef, there's nothing to stop you understanding the difference between what tastes good and what doesn't.</p>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
    <div class="container-fluid pr-0 pl-0 tabs">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#lunch" data-toggle="tab">Lunch</a></li>
                    <li><a href="#dinner" data-toggle="tab">Dinner</a></li>
                    <li><a href="#dessert" data-toggle="tab">Dessert</a></li>
                    <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="lunch">
                        <!-- Menu #5
						============================================= -->
						<div id="menu8" class="menu menu-5 bg-white text-center">
						    <div class="dishes-bg">
						        <div class="bg-section">
						            <img src="<?php echo base_url('granny/assets/images/background/9.jpg'); ?>" alt="bg">
						        </div>
						    </div>
						    <div class="container">
						        <div class="row">
						            <div class="dishes-wrapper">
						                <!-- Dish #1 -->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--content">
						                            <span class="dish--price">$24.95</span>
						                            <h3 class="dish--title">Grilled American Fillet</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                        <div class="dish--img">
						                            <div class="divider--shape-14down"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/2.jpg'); ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup13"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup13">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/1.jpg'); ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$24.95</div>
														                                <h3 class="popup--title">Grilled American Fillet</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						                <!-- Dish #2 -->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--img">
						                            <div class="divider--shape-14up"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/1.jpg'); ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup14"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup14">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/2.jpg'); ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$12.95</div>
														                                <h3 class="popup--title">Roast Sea Trout</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                        <div class="dish--content">
						                            <span class="dish--price">$38.95</span>
						                            <h3 class="dish--title">Roast Sea Trout</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						                <!-- Dish #3 -->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--content">
						                            <div class="dish--tag">New</div>
						                            <span class="dish--price">$13.95</span>
						                            <h3 class="dish--title">Grilled Seafood Paella</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                        <div class="dish--img">
						                            <div class="divider--shape-14down"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/3.jpg'); ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup15"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup15">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/3.jpg'); ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$12.95</div>
														                                <h3 class="popup--title">Grilled Seafood Paella</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						                <!-- Dish #4-->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--content">
						                            <div class="dish--tag">Recommended</div>
						                            <span class="dish--price">$33.95</span>
						                            <h3 class="dish--title">Chicken Breast</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                        <div class="dish--img">
						                            <div class="divider--shape-14down"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/5.jpg'); ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup16"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup16">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/4.jpg') ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$12.95</div>
														                                <h3 class="popup--title">Chicken Breast</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						                <!-- Dish #5 -->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--img">
						                            <div class="divider--shape-14up"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/4.jpg'); ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup17"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup17">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/5.jpg'); ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$29.95</div>
														                                <h3 class="popup--title">Roasted Steak Roulade</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                        <div class="dish--content">
						                            <span class="dish--price">$29.95</span>
						                            <h3 class="dish--title">Roasted Steak Roulade</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						                <!-- Dish #6 -->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--content">
						                            <span class="dish--price">$34.95</span>
						                            <h3 class="dish--title">Grilled Seafood Paella</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                        <div class="dish--img">
						                            <div class="divider--shape-14down"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/6.jpg'); ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup19"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup18">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/6.jpg'); ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$34.95</div>
														                                <h3 class="popup--title">Grilled Seafood Paella</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						            </div>
						            <!-- .row end -->
						        </div>
						        <!-- .menu-content end -->
						    </div>
						    <!-- .menu-content end -->
						</div>
                    </div>
                    <!-- .tab-pane end -->
                    <div class="tab-pane fade" id="dinner">
                        <!-- Menu #5
						============================================= -->
						<div id="menu6" class="menu menu-5 bg-white text-center">
						    <div class="dishes-bg">
						        <div class="bg-section">
						            <img src="<?php echo base_url('granny/assets/images/background/9.jpg'); ?>" alt="bg">
						        </div>
						    </div>
						    <div class="container">
						        <div class="row">
						            <div class="dishes-wrapper">
						                <!-- Dish #1 -->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--content">
						                            <span class="dish--price">$24.95</span>
						                            <h3 class="dish--title">Grilled Fillet</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                        <div class="dish--img">
						                            <div class="divider--shape-14down"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/13.jpg'); ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/13.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$24.95</div>
													                                <h3 class="popup--title">Grilled Fillet</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						                <!-- Dish #2 -->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--img">
						                            <div class="divider--shape-14up"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/14.jpg') ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopupTwo"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopupTwo">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/14.jpg') ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$38.95</div>
														                                <h3 class="popup--title">Chicken Breast</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                        <div class="dish--content">
						                            <span class="dish--price">$38.95</span>
						                            <h3 class="dish--title">Chicken Breast</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						                <!-- Dish #3 -->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--content">
						                            <div class="dish--tag">New</div>
						                            <span class="dish--price">$13.95</span>
						                            <h3 class="dish--title">Alder Grilled Seafood</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                        <div class="dish--img">
						                            <div class="divider--shape-14down"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/15.jpg'); ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup3"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup3">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/15.jpg'); ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$13.95</div>
														                                <h3 class="popup--title">Alder Grilled Seafood</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						                <!-- Dish #4-->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--content">
						                            <div class="dish--tag">Recommended</div>
						                            <span class="dish--price">$33.95</span>
						                            <h3 class="dish--title">Sea Trout</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                        <div class="dish--img">
						                            <div class="divider--shape-14down"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/16.jpg'); ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup4"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup4">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/16.jpg'); ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$33.95</div>
														                                <h3 class="popup--title">Sea Trout</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						                <!-- Dish #5 -->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--img">
						                            <div class="divider--shape-14up"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/17.jpg') ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup5"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup5">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/17.jpg') ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$29.95</div>
														                                <h3 class="popup--title">Roasted Steak Roulade</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                        <div class="dish--content">
						                            <span class="dish--price">$29.95</span>
						                            <h3 class="dish--title">Roasted Steak Roulade</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						                <!-- Dish #6 -->
						                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
						                    <div class="dish-panel">
						                        <div class="dish--content">
						                            <span class="dish--price">$34.95</span>
						                            <h3 class="dish--title">Grilled Seafood Paella</h3>
						                            <div class="divider--shape-13"></div>
						                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
						                        </div>
						                        <div class="dish--img">
						                            <div class="divider--shape-14down"></div>
						                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/18.jpg'); ?>" alt="dish img">
						                            <div class="dish--overlay">
						                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup6"><i class="fa fa-search-plus"></i></a>
														<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup6">
														    <div class="modal-dialog" role="document">
														        <div class="modal-content">
														            <div class="modal-body">
														                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
														                <div class="row reservation">
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="img-popup">
														                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/18.jpg'); ?>" alt="dish img">
														                            <div class="img-popup-overlay">
														                                <div class="popup--price">$34.95</div>
														                                <h3 class="popup--title">Grilled Seafood Paella</h3>
														                            </div>
														                        </div>
														                    </div>
														                    <!-- .col-md-12 end -->
														                    <div class="col-xs-12 col-sm-12 col-md-12">
														                        <div class="content-popup">
														                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
						                    </div>
						                </div>
						                <!-- .col-md-4 end -->
						            </div>
						            <!-- .row end -->
						        </div>
						        <!-- .menu-content end -->
						    </div>
						    <!-- .menu-content end -->
						</div>
	                </div>
                    <!-- .tab-pane end -->
                    <div class="tab-pane fade" id="dessert">
                        <!-- Menu #5
					============================================= -->
					<div id="menu5" class="menu menu-5 bg-white text-center">
					    <div class="dishes-bg">
					        <div class="bg-section">
					            <img src="<?php echo base_url('granny/assets/images/background/9.jpg'); ?>" alt="bg">
					        </div>
					    </div>
					    <div class="container">
					        <div class="row">
					            <div class="dishes-wrapper">
					                <!-- Dish #1 -->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--content">
					                            <span class="dish--price">$24.95</span>
					                            <h3 class="dish--title">Homemade croissants</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                        <div class="dish--img">
					                            <div class="divider--shape-14down"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/19.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup19"><i class="fa fa-search-plus"></i></a>
													<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup19">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/19.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$24.95</div>
													                                <h3 class="popup--title">Homemade croissants</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					                <!-- Dish #2 -->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--img">
					                            <div class="divider--shape-14up"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/20.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup20"><i class="fa fa-search-plus"></i></a>
													<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup20">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/20.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$12.95</div>
													                                <h3 class="popup--title">Pain au chocolat</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                        <div class="dish--content">
					                            <span class="dish--price">$38.95</span>
					                            <h3 class="dish--title">Pain au chocolat</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					                <!-- Dish #3 -->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--content">
					                            <div class="dish--tag">New</div>
					                            <span class="dish--price">$13.95</span>
					                            <h3 class="dish--title">Cannoli with cream cheese</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                        <div class="dish--img">
					                            <div class="divider--shape-14down"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/21.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup21"><i class="fa fa-search-plus"></i></a>
													<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup21">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/21.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$21.95</div>
													                                <h3 class="popup--title">Cannoli with cream cheese</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					                <!-- Dish #4-->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--content">
					                            <div class="dish--tag">Recommended</div>
					                            <span class="dish--price">$33.95</span>
					                            <h3 class="dish--title">Chocolate Cherry Cake</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                        <div class="dish--img">
					                            <div class="divider--shape-14down"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/22.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup22"><i class="fa fa-search-plus"></i></a>
													<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup22">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/22.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$33.95</div>
													                                <h3 class="popup--title">Chocolate Cherry Cake</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					                <!-- Dish #5 -->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--img">
					                            <div class="divider--shape-14up"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/23.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup23"><i class="fa fa-search-plus"></i></a>
													<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup23">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/23.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$29.95</div>
													                                <h3 class="popup--title">Blueberry Sweet Rolls</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                        <div class="dish--content">
					                            <span class="dish--price">$29.95</span>
					                            <h3 class="dish--title">Blueberry Sweet Rolls</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					                <!-- Dish #6 -->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--content">
					                            <span class="dish--price">$34.95</span>
					                            <h3 class="dish--title">Traditional pancakes</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                        <div class="dish--img">
					                            <div class="divider--shape-14down"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/24.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup24"><i class="fa fa-search-plus"></i></a>
													<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup24">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/24.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$34.95</div>
													                                <h3 class="popup--title">Traditional pancakes</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					            </div>
					            <!-- .row end -->
					        </div>
					        <!-- .menu-content end -->
					    </div>
					    <!-- .menu-content end -->
					</div>
                </div>
                    <!-- .tab-pane end -->
           		<div class="tab-pane fade" id="drinks">
                        <!-- Menu #5-->
					<div id="menu75" class="menu menu-5 bg-white text-center">
					    <div class="dishes-bg">
					        <div class="bg-section">
					            <img src="<?php echo base_url('granny/assets/images/background/9.jpg'); ?>" alt="bg">
					        </div>
					    </div>
					    <div class="container">
					        <div class="row">
					            <div class="dishes-wrapper">
					                <!-- Dish #1 -->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--content">
					                            <span class="dish--price">$24.95</span>
					                            <h3 class="dish--title">Cappuccino Coffee</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                        <div class="dish--img">
					                            <div class="divider--shape-14down"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/7.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup7"><i class="fa fa-search-plus"></i></a>
												<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup7">
												    <div class="modal-dialog" role="document">
												        <div class="modal-content">
												            <div class="modal-body">
												                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
												                <div class="row reservation">
												                    <div class="col-xs-12 col-sm-12 col-md-12">
												                        <div class="img-popup">
												                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/7.jpg'); ?>" alt="dish img">
												                            <div class="img-popup-overlay">
												                                <div class="popup--price">$24.95</div>
												                                <h3 class="popup--title">Cappuccino Coffee</h3>
												                            </div>
												                        </div>
												                    </div>
												                    <!-- .col-md-12 end -->
												                    <div class="col-xs-12 col-sm-12 col-md-12">
												                        <div class="content-popup">
												                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					                <!-- Dish #2 -->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--img">
					                            <div class="divider--shape-14up"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/8.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup8"><i class="fa fa-search-plus"></i></a>
												<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup8">
												    <div class="modal-dialog" role="document">
												        <div class="modal-content">
												            <div class="modal-body">
												                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
												                <div class="row reservation">
												                    <div class="col-xs-12 col-sm-12 col-md-12">
												                        <div class="img-popup">
												                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/8.jpg'); ?>" alt="dish img">
												                            <div class="img-popup-overlay">
												                                <div class="popup--price">$38.95</div>
												                                <h3 class="popup--title">Dark Coffee</h3>
												                            </div>
												                        </div>
												                    </div>
												                    <!-- .col-md-12 end -->
												                    <div class="col-xs-12 col-sm-12 col-md-12">
												                        <div class="content-popup">
												                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                        <div class="dish--content">
					                            <span class="dish--price">$38.95</span>
					                            <h3 class="dish--title">Dark Coffee</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					                <!-- Dish #3 -->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--content">
					                            <div class="dish--tag">New</div>
					                            <span class="dish--price">$13.95</span>
					                            <h3 class="dish--title">Caffè Macchiato</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                        <div class="dish--img">
					                            <div class="divider--shape-14down"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/9.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup9"><i class="fa fa-search-plus"></i></a>
													<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup9">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/9.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$13.95</div>
													                                <h3 class="popup--title">Caffè Macchiato</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					                <!-- Dish #4-->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--content">
					                            <div class="dish--tag">Recommended</div>
					                            <span class="dish--price">$33.95</span>
					                            <h3 class="dish--title">Espresso Coffee</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                        <div class="dish--img">
					                            <div class="divider--shape-14down"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/10.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup10"><i class="fa fa-search-plus"></i></a>
													<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup10">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/10.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$12.95</div>
													                                <h3 class="popup--title">Espresso Coffee</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					                <!-- Dish #5 -->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--img">
					                            <div class="divider--shape-14up"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/11.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup11"><i class="fa fa-search-plus"></i></a>
													<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup11">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/11.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$12.95</div>
													                                <h3 class="popup--title">Coffee & Strawberry Jam</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                        <div class="dish--content">
					                            <span class="dish--price">$29.95</span>
					                            <h3 class="dish--title">Coffee & Strawberry Jam</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					                <!-- Dish #6 -->
					                <div class="col-xs-12 col-sm-6 col-md-4 p-0">
					                    <div class="dish-panel">
					                        <div class="dish--content">
					                            <span class="dish--price">$34.95</span>
					                            <h3 class="dish--title">Coffee Latte</h3>
					                            <div class="divider--shape-13"></div>
					                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
					                        </div>
					                        <div class="dish--img">
					                            <div class="divider--shape-14down"></div>
					                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/12.jpg'); ?>" alt="dish img">
					                            <div class="dish--overlay">
					                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup12"><i class="fa fa-search-plus"></i></a>
													<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup12">
													    <div class="modal-dialog" role="document">
													        <div class="modal-content">
													            <div class="modal-body">
													                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
													                <div class="row reservation">
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="img-popup">
													                            <img src="<?php echo base_url('granny/assets/images/menu/menu-mixed-grid/12.jpg'); ?>" alt="dish img">
													                            <div class="img-popup-overlay">
													                                <div class="popup--price">$34.95</div>
													                                <h3 class="popup--title">Coffee Latte</h3>
													                            </div>
													                        </div>
													                    </div>
													                    <!-- .col-md-12 end -->
													                    <div class="col-xs-12 col-sm-12 col-md-12">
													                        <div class="content-popup">
													                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
					                    </div>
					                </div>
					                <!-- .col-md-4 end -->
					            </div>
					            <!-- .row end -->
					        </div>
					        <!-- .menu-content end -->
					    </div>
					    <!-- .menu-content end -->
					</div>
                </div>
                    <!-- .tab-pane end -->
            </div>
                <!-- .tabs-content end -->
        </div>
            <!-- .col-md-12 end -->
   	</div>
    <!-- .row end -->
    <div class="row text-center mt-70">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn--secondary btn--lg" href="#">Discover Full Menu</a>
        </div>
    </div>
    <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menuMixedGrid end -->

<!-- Testimonial #1
============================================= -->
<section id="testimonial1" class="testimonial testimonial-1 bg-overlay bg-overlay-dark bg-parallax pb-90">
    <div class="bg-section">
        <img src="<?php echo base_url('granny/assets/images/background/1.jpg'); ?>" alt="Background" />
    </div>

    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-40 text--center">
                    <p class="heading--subtitle">People talk</p>
                    <h2 class="heading--title color-white">Our Guestbook</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="testimonial-carousel" class="carousel carousel-dots carousel-white" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                    <!-- Testimonial #1 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p>“ Granny is simply the best. Great Food, nice atmosphere and very reasonable prices. It just doesn't get any better ”</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="<?php echo base_url('granny/assets/images/testimonial/1.png'); ?>" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>- Todd Stephen</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #2 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p>“ We've been to Granny many times over the years. We know what to expect: great food and awesome prices ”</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="<?php echo base_url('granny/assets/images/testimonial/2.png') ?>" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>- David Casper</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #3 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p>“ The reasonable prices, the great atmosphere are only topped by the delicious food. Keep up the great work ”</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="<?php echo base_url('granny/assets/images/testimonial/3.png') ?>" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>- John Arax</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #4 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p>“ Granny is simply the best. Great Food, nice atmosphere and very reasonable prices. It just doesn't get any better ”</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="<?php echo base_url('granny/assets/images/testimonial/4.png'); ?>" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>- Anthony Kevin</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #testimonial1 end -->

<!-- Blog Carousel
============================================= -->
<section id="blog" class="blog blog-carousel pb-90">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">Don’t miss</p>
                    <h2 class="heading--title mb-0">Our News & Events</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Follow our latest news updates to know about our offers, recipes and events. One cannot think well, love well, sleep well, if one has not dined well. </p>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                    <!-- Blog Entry #1 -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
								<img src="<?php echo base_url('granny/assets/images/blog/grid/1.jpg'); ?>" alt="entry image"/>
							</a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span><a href="#">Fall</a> , <a href="#">Side Dish</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Simple Recipes for Spring</a></h4>
                            </div>
                            <div class="entry--bio">
                                My favorite form of cold-weather exercise is snow-shoeing, but by chance I haven’t been able to go this year.
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Feb 22, 2017
                                </div>

                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #2 -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
								<img src="<?php echo base_url('granny/assets/images/blog/grid/2.jpg'); ?>" alt="entry image"/>
							</a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span><a href="#">Apple</a> , <a href="#">Stuffing And Dressing</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Dinner Party for a Chef!</a></h4>
                            </div>
                            <div class="entry--bio">
                                I began my career as a recipe tester for cookbooks, and I did that work for two years. I loved cookbooks and loved browsing for them at...
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Feb 22, 2017
                                </div>
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #3 -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
								<img src="<?php echo base_url('granny/assets/images/blog/grid/3.jpg'); ?>" alt="entry image"/>
							</a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span><a href="#">Food</a> , <a href="#">Cheese</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Cake with Cream Cheese</a></h4>
                            </div>
                            <div class="entry--bio">
                                I’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted...
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Feb 22, 2017
                                </div>
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #4 -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
								<img src="<?php echo base_url('granny/assets/images/blog/grid/4.jpg'); ?>" alt="entry image"/>
							</a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span><a href="#">Green</a> , <a href="#">Casserole</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">The Best Side Dishes for dinner</a></h4>
                            </div>
                            <div class="entry--bio">
                                From green bean casserole to mashed potatoes and cranberry sauce, find standout Thanksgiving sides from Food Network chefs..
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Feb 22, 2017
                                </div>

                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #5 -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
								<img src="<?php echo base_url('granny/assets/images/blog/grid/5.jpg'); ?>" alt="entry image"/>
							</a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span><a href="#">Casserole</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Cornbread Stuffing Apples</a></h4>
                            </div>
                            <div class="entry--bio">
                                Cook sausage for 5 to 7 minutes until browned. Add onions and celery and saute until softened. Add salt and pepper, to taste..
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Feb 22, 2017
                                </div>

                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #6 -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
								<img src="<?php echo base_url('granny/assets/images/blog/grid/6.jpg'); ?>" alt="entry image"/>
							</a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span><a href="#">Casserole</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Best Ever Green Bean for spring</a></h4>
                            </div>
                            <div class="entry--bio">
                                Combine the onions, flour, panko and salt in a large mixing bowl and toss to combine. Coat a sheet pan nonstick spray & evenly..
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Feb 22, 2017
                                </div>

                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #7 -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
								<img src="<?php echo base_url('granny/assets/images/blog/grid/7.jpg'); ?>" alt="entry image"/>
							</a>
                        </div>
                        <div class="entry--content">

                            <div class="entry--meta">
                                <span><a href="#">Fall</a> , <a href="#">Side Dish</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Simple Recipes for Spring</a></h4>
                            </div>
                            <div class="entry--bio">
                                My favorite form of cold-weather exercise is snow-shoeing, but by chance I haven’t been able to go this year..
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Feb 22, 2017
                                </div>

                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #8 -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
								<img src="<?php echo base_url('granny/assets/images/blog/grid/8.jpg'); ?>" alt="entry image"/>
							</a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span><a href="#">Apple</a> , <a href="#">Stuffing And Dressing</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Dinner Party for a Chef!</a></h4>
                            </div>
                            <div class="entry--bio">
                                I began my career as a recipe tester for cookbooks, and I did that work for two years. I loved cookbooks and loved browsing for them...
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Feb 22, 2017
                                </div>
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #9 -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
								<img src="<?php echo base_url('granny/assets/images/blog/grid/9.jpg'); ?>" alt="entry image"/>
							</a>
                        </div>
                        <div class="entry--content">

                            <div class="entry--meta">
                                <span><a href="#">Food</a> , <a href="#">Cheese</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Cake with Cream Cheese</a></h4>
                            </div>
                            <div class="entry--bio">
                                I’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted..
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Feb 22, 2017
                                </div>
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->
                </div>
                <!-- .carousel end -->
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog end -->
<!-- footer#1
============================================= -->