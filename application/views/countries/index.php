<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item active">Countries</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Countries</h4>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-muted font-13 mb-4">
                                <a href="<?php echo base_url('countries/create');?>" class="btn btn-dark">Add</a>
                            </p>

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
                                        <th>Countries</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
                                   		if ($countries) {
                                   			foreach ($countries->result() as $key => $countries) {
                                                $key = $key + 1;
                                                echo '
                                                    <tr>
                                                        <td>'.$key.'</td>
                                                        <td>'.ucwords(strtolower($countries->country)).'</td>
                                                        <td>
                                                            <a href="'.base_url('countries/edit/'.$countries->country_id).'"><i class="fe-edit-2"></i>
                                                            </a>
                                                            <a href="'.$countries->country_id.'" data-toggle="modal" data-target="#confirm" class="confir"> <i class="fe-x"></i>
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

<script type="text/javascript">
    $(document).ready(function() {
        $(".confir").on('click', function(event) {
            event.preventDefault();
            var id = $(this).attr('href');
            $('.accept').val(id);
        }); 

        $(document).on('click','.accept',function(){
            var id = $(this).val();
            destroy(id);
        });
    });

    function destroy(id){
         $.ajax({
            url: '<?php echo base_url()?>/index.php/countries/destroy/',
            type: 'POST',
            data: {id:id},
            success:function(data){
                window.location.href = "<?php echo base_url("countries/");?>";
            }
        });
    }
</script>