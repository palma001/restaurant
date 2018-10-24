<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item active">Categories</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Categories</h4>
                    </div>
                </div>
            </div> 
            <div class="row">
    			<div class="col-12">
    			    <div class="card">
                        <div class="card-body">
                            <p class="text-muted font-13 mb-4">
                                <a href="<?php echo base_url('categories/create');?>" class="btn btn-dark">Add</a>
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
                                        <th>Category</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        if ($categories) {
                                            foreach ($categories->result() as $key => $categories) {
                                                echo '
                                                    <tr>
                                                        <td>'.$key.'</td>
                                                        <td>
                                                            '.ucwords(strtolower($categories->category)).'
                                                        </td>
                                                        <td>
                                                            <a href="'.base_url('categories/edit/'.$categories->category_id).'"><i class="fe-edit-2"></i>
                                                            </a>
                                                            <a href="'.base_url('categories/destroy/'.$categories->category_id).'"> <i class="fe-x"></i>
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
