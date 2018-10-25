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
                                        <th>Client</th>
                                        <th>Quantity</th>
                                        <th>Entrance Date</th>
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
                                                        <td>'.ucwords(strtolower($reservations->people_quantity)).'
                                                        </td>
                                                        <td>'.$reservations->entrance_date.'
                                                        </td>
                                                        <td>
                                                            <a href="#" data-toggle="modal" onclick="show_reservations('.$reservations->reservation_id.')" data-target="#modal_reservations"><i class="fe-eye"></i></a>
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
    function show_reservations(id){
        $.ajax({
            url: '<?php echo base_url()?>/index.php/reservations/show/',
            type: 'POST',
            data: {id:id},
            dataType:'JSON',
            success:function(data){
               var html = "";
               html = "<h4>"+data.full_name+"</h4>"+
                "<h4 class='mt-3'>"+data.entrance_date+" : "+data.entrance_hour+"</h4>"+   
                "<h4 class='mt-3'>Quantity : "+data.people_quantity+"</h4>"+
                "<h4 class='mt-3'>Phone: "+data.phone+"</h4>";
               $('.reservations').html(html);
            }
        })
    }
</script>