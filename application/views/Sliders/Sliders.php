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
                                            <a href="<?= base_url('index.php/Sliders/create/')?>" class="btn btn-dark">Add</a>

                                        </p>

                                        
                                        <table id="basic-datatable" class="table table-striped nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Full Name </th>
                                                    <th>Email</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                             
                                                <tr>
                                                     <td></td>
                                                     <td></td>
                                                     <td></td>
                                                    
                                                    <td>
                                                       <a  href="<?= base_url('index.php/Welcome/edit/');?>">  <i class="fe-edit-2"></i> </a>
                                                       <a   id="client"   data-toggle="modal" data-target="#bs-example-modal-lg" 
                                                           data-id=""
                                                           data-fullname="" 
                                                           data-email="" data-date=""
                                                            href="#"> <i class="fe-eye"></i></a>
                                                        <a href="<?= base_url('index.php/customers/destroy/');?>"><i class="fe-x"></i></a>
                                                    </td>
                    
                                                </tr>
                                                
                                               
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