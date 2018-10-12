<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                <li class="breadcrumb-item active">Products</li>
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
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-3">Add Types Of Users</h4>
                                            <form method="post" action="<?=base_url().'index.php/typeUser/create';?>">
                                                <div class="form-group">
                                                    <input name="type_user" placeholder="Types Of Users"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                </div>
                                                <button type="submit" class="btn btn-dark">Save</button>
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
