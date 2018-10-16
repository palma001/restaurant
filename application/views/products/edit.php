<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url()."index.php/products";?>" title="">Products</a></li>
                                <li class="breadcrumb-item active">Update Products</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Update Products</h4>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-md-center">
    			<div class="col-lg-12">
    			    <div class="card">
    			        <div class="card-body">
                            <?php if ($product){?>
                                <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/products/update/".$product->product_id;?>">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" value="<?php echo $product->title;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" name="description" required><?php echo $product->description;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="example-email">Price</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="example-email" name="price" class="form-control" value="<?php echo $product->price;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Outstanding</label>
                                        <div class="col-sm-10">
                                            <select name="out" class="form-control">

                                                <?php  
                                                    if ($product->outstanding == "yes") 
                                                    {
                                                        echo '
                                                            <option value="'.$product->outstanding.'">
                                                            '.ucwords($product->outstanding).'
                                                            </option>
                                                        ';
                                                        echo " <option value= 'no'>No</option>";
                                                    }else{
                                                        echo '<option value="'.$product->outstanding.'">'.ucwords($product->outstanding).'</option>';
                                                            
                                                        echo " <option value= 'no'>Yes</option>";
                                                    }

                                                ?>
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
                            <?php }else{echo "<div class='alert alert-danger'><strong>Error!</strong> in the System</div>";} ?>
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
