
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
                                            <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                            <li class="breadcrumb-item"><a href="#">Clients</a></li>
                                         
                                        </ol>
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
                                            <a href="<?= base_url('index.php/Welcome/create/')?>" class="btn btn-dark">Add</a>

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
                                                    <th>Id Client</th>
                                                    <th>Full Name </th>
                                                    <th>Email</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                             <?PHP  
                                            if ($obtener) {
                                            foreach ($obtener->result() as $obten) { ?>
                                                <tr>
                                                     <td><?=$obten->user_id;?><?php  $var=$obten->user_id;?></td>
                                                     <td><?=$obten->full_name;?></td>
                                                     <td><?=$obten->email;?></td>
                                                    
                                                    <td>
                                                       <a  href="<?= base_url('index.php/Welcome/edit/'.$obten->user_id);?>">  <i class="fe-edit-2"></i> </a>
                                                       <a   id="client"   data-toggle="modal" data-target="#bs-example-modal-lg" 
                                                           data-id="<?php echo $obten->user_id; ?>"
                                                           data-fullname="<?php echo $obten->full_name; ?>" 
                                                           data-email="<?php echo $obten->email;?>" data-date="<?php echo $obten->date;?>"
                                                            href="#"> <i class="fe-eye"></i></a>
                                                        <a href="<?= base_url('index.php/customers/destroy/'.$obten->user_id);?>"><i class="fe-x"></i></a>
                                                    </td>
                    
                                                </tr>
                                                <?PHP  
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
                        <!-- end row-->                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>


<script type="text/javascript">
      $(document).ready(function (e) {
            $('#client').click(function () {
                var data_id = '';
                var full_name='';
                var email='';
                var date='';
                if (typeof $(this).data('id') !== 'undefined') {
                    data_id = $(this).data('id');
                    full_name=$(this).data('fullname');
                    email=$(this).data('email');
                    date=$(this).data('date');
                }
                $('#use').val(data_id);
               document.getElementById("table1").rows[1].cells[0].innerHTML = data_id  
                document.getElementById("table1").rows[1].cells[1].innerHTML = full_name
                document.getElementById("table1").rows[1].cells[2].innerHTML = email       
               document.getElementById("table1").rows[1].cells[3].innerHTML = date   
            })
         });
    </script>


