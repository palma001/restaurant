  <div class="content-page">
                <div class="content">

                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                         <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                            <li class="breadcrumb-item active">Sliders</li>
                                            <li class="breadcrumb-item active">Create Slider</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Create Sliders</h4>
            
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title"></h4>
                                      <form class="form-horizontal" enctype="multipart/form-data" method="post"  action="<?php echo base_url()."index.php/sliders/sliders/uploadd";?> ">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Slider</label>
                                                <div class="col-sm-10">
                                                  <input type="text" name="Slidername" class="form-control" placeholder="Slider" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="fileImagen" class="form-control" placeholder="Slider"  id"uploader" accept="image/*" required>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <input type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" value="Save">
                                                </div>
                                            </div>
            
                                      </form>
            
                                    </div> <!-- end card-box -->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        
                  </div> <!-- container -->

             </div> <!-- content -->
      </div>

    