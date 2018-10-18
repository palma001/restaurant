<div class="content-page">
   <div class="content">
       <!-- Start Content-->
      <div class="container-fluid">
      <!-- start page title -->
         <div class="row">
              <div class="col-12">
                  <div class="page-title-box">
                      <div class="page-title-right">
                          <ol class="breadcrumb m-0">
                             <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                             <li class="breadcrumb-item active">Clients</li>
                             <li class="breadcrumb-item active">Edit</li>
                          </ol>
                          </div>
                           <h4 class="page-title">Edit Client</h4>
                        </div>
                  </div>
            </div>     
  <!-- end page title --> 
     <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                <h4 class="header-title"></h4>
                  <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/customers/update";?> ">
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="fullname" class="form-control" placeholder="Full Name" required value="<?php echo $full_name; ?>">
                                </div>
                            </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label" for="example-email">Email</label>
                               <div class="col-sm-10">
                                  <input type="email" name="email" class="form-control" placeholder="Email" required value="<?php echo $email; ?>">
                               </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password" class="form-control" placeholder="Password" required value="<?php echo $password; ?>">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label"></label>
                              <div class="col-sm-10">
                                   <input type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" value="Save">
                              </div>
                          </div>
                  </form>
            
                  </div> <!-- end card-box -->
               </div> <!-- end card-->
            </div><!-- end col -->
          </div>
     </div> <!-- container -->
  </div> <!-- content -->
</div>