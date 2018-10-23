<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('home/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url()."customers";?>" title="">Customers</a></li>
                                <li class="breadcrumb-item active">Modify Customer</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Modify Customer</h4>
                    </div>
                </div>
            </div>  
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php  
                                $errors = validation_errors();
                                if ($errors) {
                                    echo ' 
                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                            '.$errors.'
                                        </div>
                                    ';
                                }
                            ?>
                            <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/customers/update/'.$customers->user_id); ?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="full_name" value="<?php echo ucwords($customers->full_name);?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" value="<?php echo ucwords($customers->email);?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Type User</label>
                                    <div class="col-sm-10">
                                        <select name="user_type_id" class="form-control">
                                            <option value="<?php echo $customers->user_type_id; ?>">
                                                <?php echo ucwords($customers->user_type); ?>
                                            </option>
                                            <?php  
                                                if ($users_types) {
                                                   foreach ($users_types->result() as $key => $users_types) {
                                                       echo '
                                                       <option value="'.$users_types->user_type_id.'">
                                                       '.ucwords($users_types->user_type).'
                                                       </option>';
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" placeholder="Password" name="password"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" placeholder="Confirm Password" name="passconf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end card-body-->
                    </div> 
                </div><!-- end col-->
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer">
        </footer>
        <!-- end Footer -->
    </div>
</div>
