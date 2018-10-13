 <div id="wrapper">

         
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
                                            <li class="breadcrumb-item"><a href="<?=base_url();?>">Binfrix</a></li>
                                            <li class="breadcrumb-item"><a href="<?=base_url('/index.php/orders/index/');?>">Orders</a></li>
                                            <li class="breadcrumb-item active">Details</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Order Details</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                            <h4 class="page-title"></h4>
                                          <table  class="table table-striped nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Address</th>
                                                    <th>Tax</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>

                                            <?php  
                                            if ($obtener) {
                                            foreach ($obtener->result() as $obten) { ?>
                                                <tr>
                                                    <td><?=$obten->full_name;?></td>
                                                    <td><?=$obten->address;?></td>
                                                    <td><?=$obten->tax;?></td>
                                                    <th><?=$obten->total;?></th>
                                                    
                                                    
                                                </tr>
                                                 <?php  

                                                  }}else{

                                                  }

                                                 ?>
                                               
                                            </tbody>
                                        </table>
                                        <h4 class="page-title"></h4>
                                            <table  class="table table-striped nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Id Product</th>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>

                                            <?php  
                                            if ($obtener) {
                                            foreach ($obtener->result() as $obten) { ?>
                                                <tr>
                                                    <td><?=$obten->product_id;?></td>
                                                    <td><?=$obten->description;?></td>
                                                    <td><?=$obten->quantity;?></td>
                                                </tr>
                                                 <?php  

                                                  }}else{

                                                  }

                                                 ?>
                                               
                                            </tbody>
                                        </table>




                                    </div> <!-- end card body-->

                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        