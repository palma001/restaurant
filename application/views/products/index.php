<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Binfrix</a></li>
                                <li class="breadcrumb-item active">Products</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Products</h4>
                    </div>
                </div>
            </div> 
            <div class="row">
    			<div class="col-12">
    			    <div class="card">
                        <div class="card-body">
                            <p class="text-muted font-13 mb-4">
                                <a href="<?= base_url().'index.php/products/create'?>" class="btn btn-dark">Add</a>
                            </p>
                             <?php 
                                 $message=$this->session->flashdata('message');
                                  if ($message) {?>

                                <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                  <?= $message ?>
                                  </div>
                                  <?php 
                                 }else {

                                 }
                            ?>
                            <table id="basic-datatable" class="table table-sm table-striped nowrap text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
                                        if ($products) {
                                           foreach ($products->result() as $key => $products) {
                                                echo '
                                                    <tr>
                                                        <td>'.$key.'</td>
                                                        <td>'.ucwords(strtolower($products->title)).'
                                                        </td>
                                                        <td>'. substr(ucwords(strtolower($products->description)),0,60).'
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
                        </div> <!-- end card body-->
    			         <!-- end card-body -->
    			    </div>  <!-- end card -->
    			</div>  <!-- end col -->
            </div>
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