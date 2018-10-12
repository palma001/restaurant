<?PHP  
  
                 
                    $mission=array('class' => 'form-control',
                    'rows' => 4,   'cols' => 40 ,'name'=>'mission','placeholder'=>'mission');
                   $currency=array('name'=>'currency','class'=>'form-control','required'=>'required',
                    'type'=>'text','placeholder'=>'currency');
                    $language=array('name'=>'language','class'=>'form-control','required'=>'required',
                    'type'=>'text','placeholder'=>'language');
                    $vision=array('class' => 'form-control',
                    'rows' => 4,   'cols' => 40 ,'name'=>'vision','placeholder'=>'vision');
                    $tax=array('name'=>'tax','class'=>'form-control','required'=>'required',
                    'type'=>'text','placeholder'=>'tax','id'=>'pass');
                    $tax_name=array('name'=>'tax_name','class'=>'form-control','required'=>'required',
                    'type'=>'password','placeholder'=>'tax_name');

                  $sub=array('value'=>'Procesar','type'=>'submit',
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
                                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                            <li class="breadcrumb-item active">General</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">User Create</h4>
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
                                                <label class="col-sm-2 col-form-label" for="example-email">mission</label>
                                                <div class="col-sm-10">
                                                 <?= form_textarea($mission); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="example-email">currency</label>
                                                <div class="col-sm-10">
                                                    <?= form_input($currency);?>
                                                </div>
                                            </div>
                                           <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">language</label>
                                                <div class="col-sm-10">
                                                    <?= form_input($language);?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">vision</label>
                                                <div class="col-sm-10">
                                                    <?= form_textarea($vision);?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">tax</label>
                                                <div class="col-sm-10">
                                                    <?= form_input($tax);?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">tax name</label>
                                                <div class="col-sm-10">
                                                    <?= form_input($tax_name);?>
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
