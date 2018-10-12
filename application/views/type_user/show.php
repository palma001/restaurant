<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Update Types of Users</h4>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <form method="post" action="<?= base_url().'index.php/typeUser/edit/'.$user_types->user_type_id; ?>">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="example-email">Types Of Users</label>
                                                    <div class="col-sm-9">
                                                       <input name="type_user" name="type_user" value="<?= ucwords($user_types->user_type);?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success">Update</button>
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
