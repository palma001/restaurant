 <?PHP  
  
                
                   $Email=array('name'=>'Email','class'=>'form-control','required'=>'required','type'=>'email',
                  'placeholder'=>'Email','id'=>'email');
                  $sub=array('value'=>'Procesar','type'=>'submit',
                    'class'=>'btn btn-success btn-flat m-b-30 m-t-30');
                  $form=array('class'=>'form-horizontal jsform');
    ?>

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
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
                        <h4 class="page-title">Delete Users</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title"></h4>
                              <?=form_open('customers/destroy',$form);?>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="example-email">Email</label>
                                    <div class="col-sm-6">
                                        <?= form_input($Email);?> 
                                    </div>
                                    <div class="col-sm-4">
                                         <?= form_submit($sub)?>
                                    </div>
                                </div> 
                                <div class="jsError"></div>
                        </div> <!-- end card-box -->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('form.jsform').on('submit',function(form){
            form.preventDefault();
            $.post('http://localhost/comidas/index.php/customers/destroy', $('form.jsform').serialize(), function(data){
                $('div.jsError').html(data);
                email.value="";
            });
        });
    });
</script>
