<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('home/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url()."products";?>" title="">Products</a></li>
                                <li class="breadcrumb-item active">Create Product</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create Product</h4>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-md-center">
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
                            <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/products/store') ?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="alloptions" name="title" class="form-control" placeholder="Title" value="<?php echo $this->input->post('title'); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="5" placeholder="Description" name="description"><?php echo $this->input->post('description'); ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="example-email">Price(USD)</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="example-email" name="price" class="form-control" placeholder="Price" value="<?php echo $this->input->post('price'); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Outstanding</label>
                                    <div class="col-sm-10">
                                        <select name="out" class="form-control">
                                            <option value="">-- Select -- </option>
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Save</button>
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
