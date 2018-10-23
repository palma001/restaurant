<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('home/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item active">Settings</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Settings</h4>
                     </div>
                </div>
            </div> 
        </div>    
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mission</label>
                                <div class="col-sm-10">
                                    <textarea name="textarea"  required placeholder="Mission" name="mission" rows="4" cols="40" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="example-email">Vision</label>
                                 <div class="col-sm-10">
                                      <textarea name="textarea" required  placeholder="Vision" name="vision" rows="4" cols="40" class="form-control"></textarea>
                                 </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tax</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tax" class="form-control" placeholder="Tax" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tax Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="taxname" class="form-control" placeholder="Tax Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Currency</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="currency">
                                        <option value="0">-- Select --</option>
                                        <option value="1">    Dollar   </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Language</label>
                                <div class="col-sm-10">
                                     <select class="form-control" name="lenguage">
                                          <option value="0">-- Select --</option>
                                          <option value="1">English</option>
                                    </select>
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
    </div>
</div>
