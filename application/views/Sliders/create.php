 <?PHP  
  
                 $Slidername=array('name'=>'Slidername','class'=>'form-control','required'=>'required','type'=>'text',
                    'placeholder'=>'Slider');
                   $image=array('name'=>'fileImagen','class'=>'form-control','required'=>'required','type'=>'file',
                 'id'=>'uploader','accept'=>'image/*');
                   $sub=array('value'=>'Save','type'=>'submit',
                    'class'=>'btn btn-success btn-flat m-b-30 m-t-30');
                 $form=array('class'=>'form-horizontal','enctype'=>'multipart/form-data');
    ?>

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

                                    <?php 
                                      //   $message=$this->session->flashdata('message');
                                  //  if ($message) {?>

                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"  role="alert">
                                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                             </button>
                                          <? //$message ?>
                                        </div>
                                          <?php 
                                  //  }else {

                                       //  }

                                    ?>

                                       <?=form_open('Sliders/edit',$form);?>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Slider</label>
                                                <div class="col-sm-10">
                                                    <?= form_input($Slidername); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                     <?=form_input($image) ?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <?= form_submit($sub)?>
                                                </div>
                                            </div>
            
                                          <?=form_close();?>
            
                                    </div> <!-- end card-box -->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        
                    </div> <!-- container -->

                </div> <!-- content -->
            </div>

    <script type="text/javascript">
        $('#uploader').fileUploader({activeColor:'green', baseColor: '#ccc'});
    </script>
