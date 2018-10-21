<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item active">Customers</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Customers</h4>
                    </div>
                </div>
            </div> 
            <div class="row">
    			<div class="col-12">
    			    <div class="card">
                        <div class="card-body">
                            <p class="text-muted font-13 mb-4">
                                <a href="<?php echo base_url('index.php/customers/create');?>" class="btn btn-dark">Add</a>
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
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Type User</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        if ($customers) {
                                           foreach ($customers->result() as $key => $customers) {
                                                echo '
                                                    <tr>
                                                        <td>'.$key.'</td>
                                                        <td>
                                                            '.ucwords(strtolower($customers->full_name)).'
                                                        </td>
                                                        <td>
                                                            '.$customers->email.'
                                                        </td>
                                                         <td>
                                                            '.ucwords($customers->user_type).'
                                                        </td>
                                                        <td>
                                                            <a href="'.base_url('index.php/customers/edit/'.$customers->user_id).'"><i class="fe-edit-2"></i> </a>

                                                            <a href="'.base_url('index.php/customers/destroy/'.$customers->user_id).'"> <i class="fe-x"></i></a>
                                                        </td>
                                                    </tr>
                                                ';
                                            }
                                        } 
                                    ?>
                                </tbody>                            
                            </table>
                        </div> 
    			    </div>  
    			</div> 
            </div>
        </div>
    </div>
</div>