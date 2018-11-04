<!-- Page Title #4
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="<?php echo base_url('frontend_template/assets/images/page-title/9.jpg') ?>" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-4 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Memories</div>
                        <div class="title--heading">
                            <h1>Our Gallery</h1>
                        </div>
                    </div>
                    <div class="divider--shape-1down"></div>
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

<!-- Portfolio 5 Column
============================================= -->
<section id="portfolio" class="portfolio portfolio-gallery portfolio-5col pt-80 bg-white">
    <div class="container-fluid pr-0 pl-0">


        <div id="portfolio-all" class="row-no-padding">
            <!-- Portfolio #1 -->
            <?php  
                if ($galleries) {
                  foreach ($galleries->result() as $key => $galleries) {
            ?>
                    <div class="col-xs-6 col-sm-4 col-md-5ths portfolio-item filter-clients">
                        <div class="portfolio--img">
                            <img src="<?php echo base_url('uploads/galleries/'.$galleries->gallery) ?>" alt="Dish Image">
                            <div class="portfolio--hover">
                                <div class="portfolio--action">
                                    <div class="pos-vertical-center">
                                        <div class="portfolio--zoom">
                                            <a class="img-gallery-item" href="<?php echo base_url('uploads/galleries/'.$galleries->gallery) ?>" title="Dish Image"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .Portfolio-action end -->
                            </div>
                            <!-- .Portfolio-hover end -->
                        </div>
                        <!-- .Portfolio-img end -->
                    </div>
                    <!-- . portfolio-item end -->
            <?php 
                  }
                }
            ?>
        </div>
        <!-- .row end -->
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text--center mt-50">
                <a class="btn btn--secondary" href="#"><span></span>Load More</a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container-fluid end -->
</section>
<!-- #portfolio end -->