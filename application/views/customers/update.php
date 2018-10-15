<?PHP  
    $fullname=array('name'=>'fullname','class'=>'form-control','required'=>'required','type'=>'text',
    'placeholder'=>'full name','id'=>'fullname','value'=>$full_name);
    $email=array('name'=>'email','class'=>'form-control','required'=>'required','type'=>'email',
    'placeholder'=>'Email', 'id'=>'email','value'=>$email);
    $pas=array('name'=>'password','class'=>'form-control','required'=>'required',
    'type'=>'password','placeholder'=>'password','id'=>'pass','value'=>$password);
    $sub=array('value'=>'Procesar','type'=>'submit',
    'class'=>'btn btn-success btn-flat m-b-30 m-t-30');
    $hidden=array('name'=>'user_id','type'=>'hidden','value'=>$user_id);
    $form=array('class'=>'form-horizontal');
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
                                    <h4 class="page-title">General Elements</h4>
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
            
                                       <?=form_open('customers/update',$form);?>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <?= form_input($fullname); ?>
                                                    <?= form_input($hidden)?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="example-email">Email</label>
                                                <div class="col-sm-10">
                                                    <?= form_input($email);?>
                                                </div>
                                            </div>
                                           <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <?= form_input($pas);?>
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
            $.post('http://localhost/comidas/index.php/customers/update', $('form.jsform').serialize(), function(data){
                $('div.jsError').html(data);
                email.value="";
                fullname.value="";
                pass.value="";
            });
        });
    });
</script>
