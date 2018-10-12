<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                <li class="breadcrumb-item active">Add Products</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Products</h4>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-md-center">
    			<div class="col-lg-11">
    			    <div class="card">
    			        <div class="card-body">
    			            <h4 class="mb-3">Add Products</h4>
                            <form class="form-horizontal" method="post" action="create">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" placeholder="Title..." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="5" placeholder="Description..." name="description" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="example-email">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="example-email" name="price" class="form-control" placeholder="Price" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Outstanding</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="out" class="form-control" placeholder="Outstanding" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Views</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="views" class="form-control" placeholder="Views" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-dark ">Save</button>
                                    </div>
                                </div>
                            </form>
    			        </div>  <!-- end card-body -->
    			    </div>  <!-- end card -->
    			</div>  <!-- end col -->
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer">
        </footer>
        <!-- end Footer -->
    </div>
</div>
