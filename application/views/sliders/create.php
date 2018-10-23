<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('home/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('sliders/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item active">Create Slider</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create Slider</h4>
                    </div>
                </div>
            </div> 
          <div class="row">
              <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php 
                            $message=$this->session->flashdata('message');
                            if ($message) {
                                echo '
                                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"  role="alert">
                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                         </button>
                                         "'.$message.'"
                                    </div>
                                ';
                            }
                        ?>
                        <form class="form-horizontal uploader" enctype="multipart/form-data" method="post"  action="<?php echo base_url()."index.php/sliders/store";?> ">
                            <!--<div class="form-group row">
                                <label class="col-sm-2 col-form-label">Slider</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Slidername" class="form-control" placeholder="Slider" required>
                                </div>
                            </div>-->
                            <img src="<?php echo base_url("admin_template/assets/images/logo.png"); ?>" alt="">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label label" for="file">
                                    Image
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" name="fileImagen" class="form-control loaded" placeholder="Slider"  accept="image/*" required>
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
        </div>
    </div> <!-- content -->
</div>
<script src="<?php echo base_url('js/js_core.js')?>"></script> 
<script type="text/javascript">
  $('#uploader').fileUploader({activeColor:'green', baseColor: '#ccc'});
</script>