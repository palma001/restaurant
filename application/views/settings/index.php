<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/');?>">Binfrix</a></li>
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
                        <form class="form-horizontal" method="post" action="<?php echo base_url("settings/update/") ?>">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $settings->title; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-10">
                                    <input type="file" name="logo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Favicon</label>
                                <div class="col-sm-10">
                                    <input type="file" name="favicon" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="textarea"  placeholder="Address" name="address" rows="4" cols="40" class="form-control"><?php echo $settings->address; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mission</label>
                                <div class="col-sm-10">
                                    <textarea name="textarea"  placeholder="Mission" name="mission" rows="4" cols="40" class="form-control"><?php echo $settings->mission; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="example-email">Vision</label>
                                 <div class="col-sm-10">
                                      <textarea name="textarea"  placeholder="Vision" name="vision" rows="4" cols="40" class="form-control"><?php echo $settings->vision; ?></textarea>
                                 </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="<?php echo $settings->facebook; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input type="text" name="twitter" class="form-control" placeholder="Twitter" value="<?php echo $settings->twitter; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" name="instagram" class="form-control" placeholder="Instagram" value="<?php echo $settings->instagram; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pinterest</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pinterest" class="form-control" placeholder="Pinterest" value="<?php echo $settings->pinterest; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo $settings->phone; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tax</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tax" class="form-control" placeholder="Tax" value="<?php echo $settings->tax; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tax Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="taxname" class="form-control" placeholder="Tax Name" value="<?php echo $settings->tax_name; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Currency</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="currency">
                                        <option value="<?php echo $settings->currency; ?>"> 
                                            <?php  
                                                if ( $settings->currency == 1) {
                                                    echo "Dollar";
                                                } 
                                            ?> 
                                        </option>
                                        <option value="0">-- Select --</option>
                                        <option value="1">    Dollar   </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Language</label>
                                <div class="col-sm-10">
                                     <select class="form-control" name="lenguage">
                                        <option value="<?php echo $settings->currency; ?>"> 
                                            <?php  
                                                if ( $settings->language == 1) {
                                                    echo "English";
                                                } 
                                            ?> 
                                        </option>
                                          <option value="0">-- Select --</option>
                                          <option value="1">English</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Would you like to activate the reservation module?</label>
                                <div class="col-sm-10">
                                     <select class="form-control" name="reservations">
                                        <option value="<?php echo $settings->active_reservations; ?>"> 
                                            <?php  
                                                if ($settings->active_reservations == 1) {
                                                    echo "Yes";
                                                }else if ($settings->active_reservations == 2) {
                                                    echo 'No';
                                                }
                                            ?> 
                                        </option>
                                          <option value="0">-- Select --</option>
                                          <option value="1">Yes</option>
                                          <option value="2">No</option>
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
