<div class="content-page">
    <div class="content">
    	<div class="navbar-custom navbar-custom-light">
            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-bell noti-icon"></i>
                        <span class="badge badge-danger rounded-circle noti-icon-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                <span class="float-right">
                                    <a href="" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification</h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Hi, How are you? What about our next meeting</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-light">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-light">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user registered.
                                    <small class="text-muted">5 hours ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-light">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-light">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <small class="pro-user-name ml-1">
                            Morgan K
                        </small>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>
            <button class="button-menu-mobile open-left disable-btn">
                <i class="fe-menu"></i>
            </button>
            <div class="app-search" style="height:70px;">                            
            </div>
    	</div>
    </div> <!-- content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Products</h4>
                </div>
            </div>
        </div> 
        <div class="row justify-content-md-center">
			<div class="col-lg-12">
			    <div class="card">
			        <div class="card-body">
			            <h4 class="mb-3 header-title">List Products</h4>
			            <table id="basic-datatable" class="table table-sm table-striped nowrap text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php 
                               		if ($products==false) {
                               			echo '<tr><td colspan="7"><strong>NO HAY REGISTROS</strong></td></tr>';
                               		}else{
                               			foreach ($products->result() as $key => $products) {
		                               		echo '
												<tr>
													<td>'.$key.'</td>
													<td>'.ucwords(strtolower($products->title)).'
													</td>
													<td>'.ucwords(strtolower($products->description)).'
													</td>
													<td>'.ucwords(strtolower($products->price)).'
													</td>
													<td>'.ucwords(strtolower($products->date)).'
													</td>
													<td>
														<a href="'.base_url().'index.php/products/edit/'.$products->product_id.'"><i class="fe-edit-2"></i>
                                                        </a>

                                                        <a href="#" data-toggle="modal" onclick="show_products('.$products->product_id.')" data-target="#modal_products"><i class="fe-eye"></i></a>

														<a href="'.base_url().'index.php/products/destroy/'.$products->product_id.'"><i class="fe-x"></i>
                                                        </a>
													</td>
												</tr>
		                               		';
	                               		} 
                               		}
                               ?>
                            </tbody>
                        </table>
			        </div>  <!-- end card-body -->
			    </div>  <!-- end card -->
			</div>  <!-- end col -->
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