<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                <li class="breadcrumb-item"><a href="<?=base_url()."index.php/typeUser";?>" title="">Types of Users</a></li>
                                <li class="breadcrumb-item active">Update Types of Users</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Types of Users</h4>
                    </div>
                </div>
            </div>  
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-horizontal" method="post" action="<?= base_url().'index.php/TypesUsers/edit/'.$user_types->user_type_id; ?>">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Type of User</label>
                                                    <div class="col-sm-10">
                                                        <input name="type_user" name="type_user" value="<?= ucwords($user_types->user_type);?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
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
                                    </div> <!-- end card-->
                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer">
        </footer>
        <!-- end Footer -->
    </div>
</div>
