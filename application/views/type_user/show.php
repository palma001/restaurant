<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Types of Users</h4>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-3 header-title">Update Types Of Users</h4>
                                            <form method="post" action="<?= base_url().'index.php/typeUser/edit/'.$user_types->user_type_id; ?>">
                                                <div class="form-group">
                                                    <input name="type_user" name="type_user" value="<?= ucwords($user_types->user_type);?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                </div>
                                                <button type="submit" class="btn btn-dark"><i class="fe-edit"></i> Update</button>
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
