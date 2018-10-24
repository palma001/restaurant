<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('reservations');?>" title="">Products</a></li>
                                <li class="breadcrumb-item active">Modify Reservation</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Modify Reservation</h4>
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
                            <?php 
                                if ($reservations){
                            ?>
                                <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/reservations/update/".$reservations->reservation_id;?>">  
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="full_name" class="form-control" value="<?php echo $reservations->full_name;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phone" class="form-control" value="<?php echo $reservations->phone;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="example-email">People Quantity</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="example-email" name="people" class="form-control" value="<?php echo $reservations->people_quantity;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="example-email">Entrance Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" id="example-email" name="entrance_date" class="form-control" value="<?php echo $reservations->entrance_date;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="example-email">Entrance Hours</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="example-email" name="entrance_hour" class="form-control" value="<?php echo $reservations->entrance_hour;?>">
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
