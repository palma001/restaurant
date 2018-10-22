<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body p-4">
                        
                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span><img src="<?php echo base_url('admin_template/assets/images/logo.png') ?>" alt="" height="60"></span>
                            </a>
                            <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                        </div>
                        <?php 
                            $message=$this->session->flashdata('message');
                            if ($message) {
                                echo '  
                                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"  role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        '.$message.'
                                    </div>
                                ';
                            }
                        ?>
                        <form method="post" action="<?php echo base_url('index.php/login/authenticated');?>">
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email address</label>
                                 <input class="form-control" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <a href="pages-recoverpw.html" class="text-muted float-right"><small></small></a>
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" required>
                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>