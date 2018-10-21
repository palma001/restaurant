<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/');?>">Binfrix</a></li>

                                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/blogs/');?>">Blogs</a></li>
                                <li class="breadcrumb-item active">Update Blog</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Update Blog</h4>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php  
                                $error = validation_errors();
                                $message = $this->session->flashdata('message');

                                if ($error) {
                                   echo '
                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                            '.$error.'
                                        </div>
                                    ';
                                }

                                if ($message) {
                                    echo '
                                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                            '.$message.'
                                        </div>
                                    ';
                                }
                            ?>
                            <div class="row justify-content-md-center">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <?php 
                                                if ($blogs) {
                                            ?>
                                                <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/blogs/update/'.$blogs->blog_id);?>" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Title</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $blogs->title ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Description</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" rows="5" placeholder="Description" name="description"><?php echo $blogs->description; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Image</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" name="img" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"></label>
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            <?php } ?>
                                            <hr>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer">
        </footer>
        <!-- end Footer -->
    </div>
</div>


