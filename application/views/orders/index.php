<div id="wrapper">
    <div class="container-fluid">
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/');?>">Binfrix</a></li>
                                        <li class="breadcrumb-item"><a href="#">Orders</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Orders</h4>
                            </div>
                        </div>
                    </div>
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
                                                    <a  href="<?=base_url('index.php/orders/show/'.$obten->order_id);?>">
                                                        <i class="fe-eye"></i>
                                                    </a>
                                                    <i class="fe-x"></i>
                                                </td>
                                            </tr>
                                            <?php  
                                                }}
                                            ?>               
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                                <!-- end row-->                        
                </div> 
            </div> 
        </div>
    </div>
    <!-- Footer Start -->
    <footer class="footer">
    </footer>
    <!-- end Footer -->
</div>
