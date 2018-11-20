<section id="slider" class="slider">
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
<?php  if ($products) { ?>
    <section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
        <div class="bg-section">
            <img src="<?php echo base_url('frontend_template/assets/images/page-title/6.jpg') ?>" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-4 text-center">
                        <div class="title--content">
                            <div class="title--heading">
                                <h1>Products</h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
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
                        <h2>Our News</h2>
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
                                    <div class="entry--title">
                                        <h4><a href="<?php echo base_url('blogs/show/'.$blogs->blog_id); ?>"><?php echo ucwords(strtolower(substr($blogs->title,0,20))) ?></a></h4>
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
<script src="<?php echo base_url('admin_template/js/pagination.js') ?>"></script>   
