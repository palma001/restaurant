<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                <li class="breadcrumb-item active">Types of Users</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Types of Users</h4>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-md-center">
                <div class="col-11">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-muted font-13 mb-4">
                                <a href="<?= base_url().'index.php/typeUser/add_types'?>" class="btn btn-dark">Add</a>
                            </p>
                            <h4 class="mb-3">List Types of Users</h4>
                            <table id="basic-datatable" class="table table-sm table-striped nowrap text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Types of Users</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
                                   		if ($user_types==false) {
                                   			echo '<tr><td colspan="3"><strong>NO HAY REGISTROS</strong></td></tr>';
                                   		}else{
                                   			foreach ($user_types->result() as $key => $user_types) {
    		                               		echo '
    												<tr>
    													<td>'.$key.'</td>
    													<td>'.ucwords(strtolower($user_types->user_type)).'</td>
    													<td>
    														<a href="'.base_url()."index.php/typeUser/show/".$user_types->user_type_id.'"><i class="fe-edit-2"></i> </a>
    														<a href="'.base_url()."index.php/typeUser/destroy/".$user_types->user_type_id.'"> <i class="fe-x"></i></a>

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
