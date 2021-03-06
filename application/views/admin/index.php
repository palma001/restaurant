<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Home</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body p-0">
                            <div class="p-3 pb-0">
                                <div class="float-right">
                                    <i class="mdi mdi-cart text-primary widget-icon"></i>
                                </div>
                                <h5 class="text-muted font-weight-normal mt-0">Total Sales</h5>
                                <h3 class="mt-2">
                                    <?php
                                        if ($rows){
                                            echo number_format($rows->num_rows(),'2',',','.');
                                        }else{
                                            echo number_format("0",'2',',','.');
                                        }
                                    ?>
                                </h3>
                            </div>
                            <div id="sparkline1"></div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-xl-3 col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body p-0">
                            <div class="p-3 pb-0">
                                <div class="float-right">
                                    <i class="mdi mdi-currency-usd text-danger widget-icon"></i>
                                </div>
                                <h5 class="text-muted font-weight-normal mt-0">Income Amounts</h5>
                                <h3 class="mt-2">
                                    <?php
                                        if ($total){
                                            echo number_format($total->total,'2',',','.');
                                        }else{
                                            echo number_format("0",'2',',','.');
                                        }
                                    ?>
                                </h3>
                            </div>
                            <div id="sparkline2"></div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-xl-3 col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body p-0">
                            <div class="p-3 pb-0">
                                <div class="float-right">
                                    <i class="mdi mdi-account-multiple text-primary widget-icon"></i>
                                </div>
                                <h5 class="text-muted font-weight-normal mt-0">Total Users</h5>
                                <h3 class="mt-2">
                                    <?php
                                        if($customer){
                                           echo number_format($customer->num_rows(),'2',',','.');
                                        }else {
                                            echo number_format("0",'2',',','.');
                                        }
                                    ?>
                                </h3>
                            </div>
                            <div id="sparkline3"></div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-xl-3 col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body p-0">
                            <div class="p-3 pb-0">
                                <div class="float-right">
                                    <i class="mdi mdi-eye-outline text-danger widget-icon"></i>
                                </div>
                                <h5 class="text-muted font-weight-normal mt-0">Total Visits</h5>
                                <h3 class="mt-2">
                                    <?php
                                        if ($views->views != "") {
                                            echo number_format($views->views,'2',',','.');
                                        }else{
                                             echo number_format("0",'2',',','.');
                                        }
                                    ?>   
                                </h3>
                            </div>
                            <div id="sparkline4"></div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
            	<div class="col-xl-2">
            	</div>
                <div class="col-xl-8">
                    <center><img src="<?= base_url('admin_template/assets/images/logo binfrix.png')?>" alt="" class="img-fluid" /></center>
                </div>
                <div class="col-xl-2">
            	</div>
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->
    <!-- Footer Start -->
    <footer class="footer">
    </footer>
    <!-- end Footer -->
</div>