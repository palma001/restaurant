<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item active">Blogs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Blogs</h4>
                    </div>
                </div>
            </div> 
            <div class="row">
    			<div class="col-12">
    			    <div class="card">
                        <div class="card-body">
                            <p class="text-muted font-13 mb-4">
                                <a href="<?php echo base_url().'index.php/blogs/create'?>" class="btn btn-dark">Add</a>
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
                                        <th>Users</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        if ($blogs) {
                                            foreach ($blogs->result() as $key => $blogs) {
                                                echo '
                                                    <tr>
                                                        <td>'.$key.'</td>
                                                        <td>
                                                            '.ucwords(strtolower(substr($blogs->full_name,0,20))).'
                                                        </td>
                                                        <td>
                                                            '.ucfirst(strtolower(substr($blogs->title,0,20))).'
                                                        </td>
                                                        <td>
                                                            '.ucfirst(strtolower(substr($blogs->description,0,50))).'
                                                        </td>
                                                        <td>
                                                            '.$blogs->date.'
                                                        </td>
                                                        <td>
                                                            <a href="'.base_url('index.php/blogs/edit/'.$blogs->blog_id).'"><i class="fe-edit-2"></i>
                                                            </a>
                                                            <a href="'.base_url('index.php/blogs/destroy/'.$blogs->blog_id).'"> <i class="fe-x"></i>
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
