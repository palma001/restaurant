<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item active">Reservations</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Reservations</h4>
                    </div>
                </div>
            </div> 
            <div class="row">
    			<div class="col-12">
    			    <div class="card">
                        <div class="card-body">
                            <?php 
                                $message=$this->session->flashdata('message');
                                if ($message) {
                                   echo ' 
                                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                            '.$message.'
                                        </div>
                                    ';
                                }
                            ?>
                            <table id="basic-datatable" class="table table-sm table-striped nowrap text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Full Name</th>
                                        <th>Phone</th>
                                        <th>People</th>
                                        <th>Entrance Date</th>
                                        <th>Entrance Hours</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
                                        if ($reservations) {
                                           foreach ($reservations->result() as $key => $reservations) {
                                                echo '
                                                    <tr>
                                                        <td>'.$key.'</td>
                                                        <td>'.ucwords(strtolower($reservations->full_name)).'
                                                        </td>
                                                        <td>'.$reservations->phone.'
                                                        </td>
                                                        <td>'.ucwords(strtolower($reservations->people_quantity)).'
                                                        </td>
                                                        <td>'.$reservations->entrance_date.'
                                                        </td>
                                                        <td>'.$reservations->entrance_hour.'
                                                        </td>
                                                        <td>
                                                            <a href="'.base_url('reservations/destroy/'.$reservations->reservation_id).'"><i class="fe-x"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ';
                                            } 
                                        }
                                   ?>
                                </tbody>                            
                            </table>
                        </div> <!-- end card body-->
    			         <!-- end card-body -->
    			    </div>  <!-- end card -->
    			</div>  <!-- end col -->
            </div>
        </div>
    </div>
</div>
<script>
    function show_products(id){
        $.ajax({
            url: '<?= base_url()?>/index.php/products/show/',
            type: 'POST',
            data: {id:id},
            dataType:'JSON',
            success:function(data){
               var html = "";
               html = "<h5>"+data.title+"</h5><p><strong class='float-right'>"+data.date+"</strong></p>"+
                      "<h6>User: </h6>"+      
                      "<h6>Price : "+data.price+"</h6>"+
                      "<p class='mt-3'>Description:</p>"+
                      "<p class='mt-1'>"+data.description+"</p><hr>"+
                      "<p class='mt-3'>Outstanding: "+data.outstanding+"</p>"+
                      "<p>Views: "+data.views+"</p>";
               $('.products').html(html);
            }
        })
    }
</script>