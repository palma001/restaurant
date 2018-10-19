<div id="wrapper">
  <div class="content-page">
    <div class="content">       
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="page-title-box">
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/');?>">Binfrix</a></li>
                  <li class="breadcrumb-item"><a>Sliders</a></li>
                  </ol>
                </div>
              <h4 class="page-title">Sliders</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                  <p class="text-muted font-13 mb-4">
                   <a href="<?= base_url('index.php/sliders/create/')?>" class="btn btn-dark">Add</a>
                  </p>
                  <?php 
                    $message=$this->session->flashdata('message');
                    if ($message) {
                      echo '
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                             </button>

                            "'.$message.'" 
                        </div>';
                    }    
                  ?>
                  <table id="basic-datatable" class="table table-striped nowrap">
                    <thead>
                        <tr>
                           <th>Id</th>
                           <th>Slider</th>
                            <th>Image</th>
                            <th></th>
                          </tr>
                    </thead>
                    <?php
                      if ($obtener) {
                        foreach ($obtener->result() as $obten) { ?>
                          <tbody>
                            <tr>
                              <td>
                                <?php echo $obten->slider_id;?>
                              </td>
                              <td>
                                <?php echo $obten->slider;?>
                              </td>
                              <td>
                                <img src="<?php echo base_url()?>uploads/imagenes/thumbs/<?php echo  $obten->image;?>" />
                              </td>
                              <td>
                               <a href="<?php  echo  base_url()."index.php/sliders/destroy/".$obten->slider_id;?>"><i class="fe-x"></i></a>
                              </td>
                            </tr>
                          </tbody>
                          <?php 
                      }
                    }
                  ?>
                  </table>
              </div> <!-- end card body-->
            </div> <!-- end card -->
          </div><!-- end col-->
        </div>                         
      </div> <!-- container -->
    </div> <!-- content -->
  </div>
</div>