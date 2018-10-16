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
                             <li class="breadcrumb-item active">Create Client</li>
                          </ol>
                          </div>
                           <h4 class="page-title">Create Client</h4>
                        </div>
                  </div>
            </div>     
  <!-- end page title --> 
     <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                    <h4 class="header-title"></h4>
                    <?php 
                      $message=$this->session->flashdata('message');
                     if ($message) {?>
                     <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"  role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                         </button>
                        <?= $message ?>
                      </div>
                          <?php 
                         }else {
                         }
                        ?>
                  <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/customers/create";?> ">
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
                                </div>
                            </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label" for="example-email">Email</label>
                               <div class="col-sm-10">
                                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                               </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password" class="form-control" placeholder="Password" required>
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



