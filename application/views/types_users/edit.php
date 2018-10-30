<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url()."typesusers";?>" title="">Types of Users</a></li>
                                <li class="breadcrumb-item active">Modify User Type</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Modify User Type</h4>
                    </div>
                </div>
            </div>  
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php
                                $error = validation_errors();
                                if ($error) {
                                   echo '
                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert" style="padding-bottom:1px;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                            '.$error.'
                                        </div>
                                    ';
                                }  
                            ?>
                            <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/TypesUsers/update/'.$users_types->user_type_id); ?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Type of User</label>
                                    <div class="col-sm-10">
                                        <input name="type_user" name="type_user" value="<?php echo ucwords($users_types->user_type);?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer">
        </footer>
        <!-- end Footer -->
    </div>
</div>
