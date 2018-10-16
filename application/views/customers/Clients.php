<<<<<<< HEAD

  <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

               
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

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
                                            <li class="breadcrumb-item"><a href="<?= base_url();?>">Binfrix</a></li>
                                            <li class="breadcrumb-item"><a>Clients</a></li>
                                         
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Clients</h4>

   


=======
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
                                  <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                <li class="breadcrumb-item"><a href="#">Clients</a></li>       
                                 </ol>
>>>>>>> williams
                                </div>
                                    <h4 class="page-title">Clients</h4>
                               </div>
                             </div>
                        </div>     
                        <!-- end page title --> 
        <div class="row">
          <div class="col-12">
            <div class="card">
             <div class="card-body">
                <p class="text-muted font-13 mb-4">
                 <a href="<?php echo base_url()."index.php/Welcome/create/";?>" class="btn btn-dark">Add</a>
                   </p>
                   <?php 
                      $message=$this->session->flashdata('message');
                          if ($message) {?>
                          <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                               </button>
                               <?= $message ?>
                            </div>
                        <?php 
                           }else {

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
                            <tbody>
                                <?php
                                  if ($obtener) {
                                    foreach ($obtener->result() as $obten) { ?>
                                    <tr>
                                            <td><?php echo $obten->user_id;?></td>
                                            <td><?php echo $obten->full_name;?></td>
                                            <td><?php echo $obten->email;?></td>
                                        <td>
                                            <a  href="<?= base_url('index.php/Welcome/edit/'.$obten->user_id);?>">  <i class="fe-edit-2"></i> </a>
                                            <a   id="client"   data-toggle="modal" data-target="#bs-example-modal-lg" 
                                                   data-id="<?php echo $obten->user_id; ?>"
                                                    data-fullname="<?php echo $obten->full_name; ?>" 
                                                    data-email="<?php echo $obten->email;?>" data-date="<?php echo $obten->date;?>"
                                                    href="#"> <i class="fe-eye"></i></a>
                                             <a href="<?php  echo  base_url()."index.php/customers/destroy/".$obten->user_id;?>"><i class="fe-x"></i></a>
                                        </td>
                                    </tr>
                                        <?php 
                                          }
                                          }
                                        ?>
                                               
                                </tbody>
                            </table>
                          <br>
                   </div> <!-- end card body-->
                 </div> <!-- end card -->
                </div><!-- end col-->
            </div>                     
         </div> <!-- container -->
     </div> <!-- content -->
                <!-- Footer Start -->
     <footer class="footer">
    </footer>
                <!-- end Footer -->
  </div>
</div>


