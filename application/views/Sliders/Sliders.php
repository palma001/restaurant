<div id="wrapper">
   <div class="content-page">
       <div class="content">
                    <!-- Start Content-->
         <div class="container-fluid">      
          <!-- start page title -->
             <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>">Binfrix</a></li>
                             <li class="breadcrumb-item"><a>Sliders</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sliders</h4>
                    </div>
                    </div>
                </div>     
                <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                     <div class="card">
                         <div class="card-body">
                                <p class="text-muted font-13 mb-4">
                                 <a href="<?= base_url('index.php/sliders/Sliders/create/')?>" class="btn btn-dark">Add</a>
                                 </p>
                                   <table id="basic-datatable" class="table table-striped nowrap">
                                       <thead>
                                       <?php
                                  if ($obtener) {
                                      foreach ($obtener->result() as $obten) { ?>
                                          <tr>
                                             <th>Id</th>
                                             <th>Elider</th>
                                              <th>Image</th>
                                              <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td><?php echo $obten->slider_id;?></td>
                                            <td><?php echo $obten->slider;?></td>
                                            <td><img src="<?php echo base_url()?>uploads/imagenes/thumbs/<?php echo  $obten->image;?>" /></td>
                                            <td>
                                             <a  href="<?= base_url('index.php/Welcome/edit/');?>">  <i class="fe-edit-2"></i> </a>
                                             <a href="<?= base_url('index.php/customers/destroy/');?>"><i class="fe-x"></i></a>
                                            </td>
                                             </tr>
                                        </tbody>
                                        <?php 
                                          }
                                          }
                                        ?>
                                 </table>
                                <br>
                            </div> <!-- end card body-->

                        </div> <!-- end card -->
                    </div><!-- end col-->
              </div>
                        <!-- end row-->                        
            </div> <!-- container -->
       </div> <!-- content -->
    </div>
</div>