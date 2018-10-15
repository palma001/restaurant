<?PHP  
  
                 
                    $mission=array('class' => 'form-control',
                    'rows' => 4,   'cols' => 40 ,'name'=>'mission','placeholder'=>'Mission');
                   $currency=array('name'=>'currency','class'=>'form-control','required'=>'required',
                    'type'=>'text','placeholder'=>'Currency');
                    $language=array('name'=>'language','class'=>'form-control','required'=>'required',
                    'type'=>'text','placeholder'=>'Language');
                    $vision=array('class' => 'form-control',
                    'rows' => 4,   'cols' => 40 ,'name'=>'vision','placeholder'=>'Vision');
                    $tax=array('name'=>'tax','class'=>'form-control','required'=>'required',
                    'type'=>'text','placeholder'=>'Tax','id'=>'pass');
                    $tax_name=array('name'=>'tax_name','class'=>'form-control','required'=>'required',
                    'type'=>'password','placeholder'=>'Tax Name');

                  $sub=array('value'=>'Save','type'=>'submit',
                    'class'=>'btn btn-success btn-flat m-b-30 m-t-30');
                 $form=array('class'=>'form-horizontal jsform');
    ?>

  <div class="content-page">
                <div class="content">

                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                            <li class="breadcrumb-item active">Settings</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Settings</h4>
                                      <div class="jsError"></div>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title"></h4>
            
                                       <?=form_open('',$form);?>
                                            
                                          <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="example-email">Mission</label>
                                                <div class="col-sm-10">
                                                 <?= form_textarea($mission); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Vision</label>
                                                <div class="col-sm-10">
                                                    <?= form_textarea($vision);?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tax</label>
                                                <div class="col-sm-10">
                                                    <?= form_input($tax);?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tax Name</label>
                                                <div class="col-sm-10">
                                                    <?= form_input($tax_name);?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="example-email">Currency</label>
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
                                                    <?= form_submit($sub)?>
                                                </div>
                                            </div>
            
                                          <?=form_close();?>
            
                                    </div> <!-- end card-box -->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        
                    </div> <!-- container -->

                </div> <!-- content -->
            </div>
 <script>
    $(document).ready(function(){
        $('form.jsform').on('submit',function(form){
            form.preventDefault();
            $.post('http://localhost/comidas/index.php/customers/create', $('form.jsform').serialize(), function(data){
                $('div.jsError').html(data);
                email.value="";
                fullname.value="";
                pass.value="";
            });
        });
    });
</script>
