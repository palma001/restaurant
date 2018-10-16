<div id="wrapper">
   <div class="content-page">
     <div class="content">
             <!-- Start Content-->
             <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                         <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                         <li class="breadcrumb-item"><a href="#">Orders</a></li>
                                        </ol>
                                </div>
                                <h4 class="page-title">Orders</h4>
                            </div>
                        </div>
                    </div>     
                        <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table table-striped nowrap">
                                <thead>
                                 <tr>
                                   <th>Orders Id</th>
                                    <th>Full Name</th>
                                    <th>Total</th>
                                     <th></th>
                                 </tr>
                                 </thead>
                                <tbody>
                                <?php  
                                if ($obtener) {
                                foreach ($obtener->result() as $obten) { ?>
                                 <tr> 
                                 <td><?=$obten->order_id;?></td>
                                    <td><?=$obten->full_name;?></td>
                                    <td><?=$obten->total;?></td>
                                    <td>
                                    <i class="fe-edit-2"></i> 
                                     <a  href="<?=base_url('index.php/orders/show/'.$obten->order_id);?>"><i class="fe-eye"></i></a>
                                     <i class="fe-x"></i>
                                  </td>
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
    <footer class="footer">
    </footer>
    <!-- end Footer -->
</div>
