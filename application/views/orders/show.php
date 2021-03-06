<div id="wrapper">
   <div class="content-page">
        <div class="content">
           <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url('admin/');?>">Binfrix</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('orders/');?>">Orders</a></li>
                                    <li class="breadcrumb-item active">Details</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Order Details</h4>
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
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
                                              foreach ($obtener->result() as $obten) { 
                                           ?>
                                                <tr>
                                                    <td><?php echo $obten->full_name;?></td>
                                                    <td><?php echo $obten->address;?></td>
                                                    <td><?php echo $obten->tax;?></td>
                                                    <th><?php echo $obten->total;?></th>
                                                </tr>
                                        <?php  
                                              }
                                            }      
                                        ?>
                                    </tbody>
                                </table>
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
                                                  <td><?php echo $obten->product_id;?></td>
                                                  <td><?php echo $obten->description;?></td>
                                                  <td><?php echo $obten->quantity;?></td>
                                              </tr>
                                        <?php 
                                          }
                                        }
                                      ?>
                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>                      
            </div> <!-- container -->
        </div> <!-- content -->
    </div>
</div>        
        