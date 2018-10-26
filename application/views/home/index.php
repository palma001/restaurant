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

<?php  if ($products) { ?>
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
                    <div class="row products">
                        
                    </div>
                    <!-- .row end -->
                    <!-- .row end -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 clearfix text--center pagination">
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
<?php } ?>

<!-- Blog Carousel
============================================= -->
<?php if ($blogs) { ?> 
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
                    <?php 
                        foreach ($blogs->result() as $key => $blogs) {
                    ?>
                            <!-- Blog Entry #1 -->
                            <div class="blog-entry">
                                <div class="entry--img">
                                    <a href="#">
        								<img src="<?php echo base_url('uploads/blogs/'.$blogs->image); ?>" alt="entry image"/>
        							</a>
                                </div>
                                <div class="entry--content">
                                    <div class="entry--meta">
                                        <span><a href="#">Fall</a> , <a href="#">Side Dish</a></span>
                                    </div>
                                    <div class="entry--title">
                                        <h4><a href="#"><?php echo ucwords(strtolower(substr($blogs->title,0,20))) ?></a></h4>
                                    </div>
                                    <div class="entry--bio">
                                        <?php echo ucwords(strtolower(substr($blogs->description,0,100))) ?>
                                    </div>
                                    <div class="entry--footer">
                                        <div class="entry--date">
                                            <?php echo ucwords(strtolower($blogs->date)) ?>
                                        </div>

                                    </div>
                                </div>
                                <!-- .entry-content end -->
                            </div>
                            <!-- .blog-entry end -->
                    <?php } ?>
                    </div>
                    <!-- .carousel end -->
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
<?php } ?>
<!-- #blog end -->
<!-- footer#1
============================================= -->
<script src="<?php echo base_url('js/pagination.js') ?>"></script>   