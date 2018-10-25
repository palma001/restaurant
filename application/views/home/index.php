<section id="slider" class="slider slide-overlay-black">
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider" data-version="5.0">
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

<!-- Page Title #4
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="assets/images/page-title/6.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-4 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Products</div>
                        <div class="title--heading">
                            <h1>Shop Products</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html">shop</a></li>
                        <li class="active">Shop Products</li>
                    </ol>
                    <div class="divider--shape-1down divider--shape-gray"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Shop #4
============================================= -->
<section id="shop" class="shop shop-3 bg-gray pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12  col-md-12">
                        <div class="shop-options">
                            <!-- .product-options end -->
                            <div class="product-view-mode text-right pull-none-xs">
                                <span>View as:</span>
                                <a class="active" href="#"><i class="fa fa-th-large"></i></a>
                                <a href="#"><i class="fa fa-th-list"></i></a>
                            </div>
                            <!-- .product-num end -->
                        </div>
                        <!-- .shop-options end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- Product #1 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/1.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Light</span> - <span>Mexican</span> - <span>Organic</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Grilled American Fillet</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$24.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #2 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/2.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Low Carb</span> - <span>Fresh</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Roast Sea Trout</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$38.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #3 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/3.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Nut Free</span> - <span>Sweet</span> - <span>Fresh</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Grilled Seafood Paella</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$34.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #4 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/4.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Grilled</span> - <span>Fresh</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Chicken Breast</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$29.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #5 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/5.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Sweet</span> - <span>Nut Free</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Roast Sea Trout</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$13.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #6-->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/6.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Light</span> - <span>Mexican</span> - <span>Organic</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Grilled American Fillet</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$13.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #7 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/7.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Sweet</span> - <span>Fresh</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Cannoli Cream Cheese</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$24.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #8 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/8.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Fresh</span> - <span>Light</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Spain Tapas</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$23.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #9 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/9.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Nut Free</span> - <span>Sweet</span> - <span>Fresh</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Grilled Seafood Paella</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$34.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #10 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/10.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Sweet</span> - <span>Fresh</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Cannoli Cream Cheese</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$34.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #11 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/11.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Nut Free</span> - <span>Sweet</span> - <span>Fresh</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Grilled American Fillet</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$54.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                    <!-- Product #12 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="product-item">
                            <div class="product--img">
                                <img src="assets/images/shop/grid/12.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                                <div class="divider--shape-1down"></div>
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--type">
                                    <span>Nut Free</span> - <span>Fresh</span>
                                </div>
                                <div class="product--title">
                                    <h3><a href="#">Roasted Steak Roulade</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$14.95</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                    </div>
                    <!-- .productFilter end -->

                </div>
                <!-- .row end -->
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 clearfix text--center">
                        <ul class="pagination mt-20">
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                  <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                              </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
        </div>
    </div>
    <!-- .container end -->
</section>
<!-- #shop end -->


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