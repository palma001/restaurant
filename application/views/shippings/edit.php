<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/');?>">Binfrix</a></li>

                                <li class="breadcrumb-item"><a href="<?php echo base_url('countries/');?>">Countries</a></li>
                                <li class="breadcrumb-item active">Create State</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create State</h4>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                    $error = validation_errors();
                                    if ($error) {
                                       echo '
                                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert" style="padding-bottom:1px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                                '.$error.'
                                            </div>
                                        ';
                                    }  
                                ?>
                                <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/shippings/update/'.$shippings->shipping_id);?>">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Countries</label>
                                        <div class="col-sm-10">
                                            <select name="country" id="country" class="form-control">
                                                <option value="<?php echo $shippings->country_id ?>"><?php echo ucwords($shippings->country) ?></option>
                                                <option value="">--- Select --</option>
                                                <?php  
                                                    if ($countries) {
                                                       foreach ($countries->result() as $key => $countries) {
                                                            if ($countries->country_id != $shippings->country_id) {
                                                                echo '<option value="'.$countries->country_id.'">'.ucwords($countries->country).'</option>';
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">States</label>
                                        <div class="col-sm-10">
                                            <select name="state" id="states" class="form-control">
                                                <option value="<?php echo $shippings->state_id ?>"><?php echo $shippings->state ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Zip</label>
                                        <div class="col-sm-10">
                                            <input name="zip" placeholder="Zip"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $shippings->zip; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Cost</label>
                                        <div class="col-sm-10">
                                            <input name="cost" placeholder="Cost"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $shippings->cost ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div><!-- end col-->
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer">
        </footer>
        <!-- end Footer -->
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#country').change(function(){
            var country_id = $(this).val();
            states(country_id);
        });
        states($('#country').val());
    });

    function states(country_id){
        $.ajax({
            url: 'http://localhost/comida/states/serach_states/',
            type: 'POST',
            data: {country_id:country_id},
            dataType:'JSON',
            success:function(data){
                var state = "";
                $.each(data.states,function(key,item){
                    state +='<option value="'+item.state_id+'">'+item.state.charAt(0).toUpperCase() + item.state.slice(1);+'</option>';
                });
                $('#states').html(state);
            }
        });
    }
</script>