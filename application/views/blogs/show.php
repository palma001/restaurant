<!-- Page Title #4
============================================= -->
 <!-- Some Open Graph tags -->
<meta name="description"                content="<?php echo ucfirst($blogs->title); ?>">
<meta name="author"                     content="Mahsource">
<meta property="og:locale"              content="en_EN"/>
<meta property="og:type"                content="article"/>
<meta property="og:title"               content=" <?php echo ucfirst($blogs->description); ?>"/>
<meta property="og:description"         content="The first thing Game Of Thrones released to tease its upcoming sixth season was a poster featuring Jon Snow."/>
<meta property="og:url"                 content="<?php echo base_url(); ?>"/>
<meta property="og:site_name"           content="mahcode.com"/>
<meta property="article:publisher"      content="https://www.facebook.com/Mahcode-849841581779986"/>
<meta property="article:published_time" content="2015-12-10T02:05:30Z"/>
<meta property="og:image"               content="<?php echo base_url('uploads/blogs/'.$blogs->image)?>"/>
  

<meta name="twitter:title"              content="<?php echo ucfirst($blogs->title); ?>"/>
<meta name="twitter:description"        content=" <?php echo ucfirst($blogs->description); ?>"/>
<meta name="twitter:image"              content="<?php echo base_url('uploads/blogs/'.$blogs->image)?>"/>
<meta name="twitter:site"               content="@itsmahcode"/>
<meta name="twitter:creator"            content="@itsmahcode"/>
<meta name="twitter:via"                content="itsmahcode"/>
<meta name="twitter:card"               content="photo"/>
<meta name="twitter:url"                content="<?php echo base_url(); ?>"/>

<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="<?php echo base_url('frontend_template/assets/images/page-title/7.jpg') ?>" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-4 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Don't miss</div>
                        <div class="title--heading">
                            <h1>Single Post Page</h1>
                        </div>
                    </div>
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

<!-- Blog Single Right Sidebar
============================================= -->
<section id="blog" class="blog blog-single bg-gray pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <!-- Blog Entry -->
                <div class="blog-entry">
                    <div class="entry--img">
                        <a href="#">
                            <img src="<?php echo base_url('uploads/blogs/'.$blogs->image)?>" alt="entry image"/>
                        </a>
                    </div>
                    <div class="entry--content">
                        <div class="entry--meta">
                            <span><?php echo $blogs->date; ?>
                        </div>
                        <div class="entry--title">
                            <h4><a href="#"><?php echo ucfirst($blogs->title); ?></a></h4>
                        </div>
                        <div class="entry--bio">
                            <p>
                                <?php echo ucfirst($blogs->description); ?>
                            </p>
                        </div>
                        <div class="entry--share">
                            <div class="pull-left">
                                <span class="share--title">share this article: </span>
                            </div>
                            <div class="text-right share-buttons-row">
                                <a href="#"><i class="fa fa-facebook share-fb"></i></a>
                                <a href="#"><i class="fa fa-twitter share-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus share-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest share-pinterest"></i></a>
                            </div>
                        </div>
                        <!-- .entry-share end -->
                    </div>
                </div>

            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog end -->