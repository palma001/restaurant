<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('home/');?>">Binfrix</a></li>

                                <li class="breadcrumb-item"><a href="<?php echo base_url('typesusers/');?>">Types of Users</a></li>
                                <li class="breadcrumb-item active">Create Type of User</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create Type of User</h4>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                    $error = validation_errors();
                                    if ($error) {
                                       echo '
                                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                                '.$error.'
                                            </div>
                                        ';
                                    }  
                                ?>
                                <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/TypesUsers/store');?>">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Type of User</label>
                                        <div class="col-sm-10">
                                            <input name="type_user" placeholder="Type of User"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Save</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <h3>Permissions</h3>
                                    <hr>
                                    <ol style="list-style: none; padding: 0px;">
                                        <?php  
                                            if ($permissions) {
                                                foreach ($permissions->result() as $key => $permission) {
                                                    echo '
                                                        <li style="border-bottom:solid black 1px; padding: 10px;">
                                                            <div>
                                                                <label style="width: 100%; margin-top:7px;">
                                                                    '.$permission->permission.'
                                                                    <input type="checkbox" id="customCheck1" style="float: right; margin-top: 7px" value="'.$permission->permission_id.'" name="permissions[]">
                                                                </label>
                                                            </div>
                                                        </li>
                                                    ';
                                                }
                                            }
                                        ?>
                                    </ol>
                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
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
