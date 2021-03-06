<div id="wrapper">
    <div class="content-page">
        <div class="content">       
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/');?>">Binfrix</a></li>
                                    <li class="breadcrumb-item"><a>Galleries</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Galleries</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                  <p class="text-muted font-13 mb-4">
                                      <a href="<?= base_url('galleries/create/')?>" class="btn btn-dark">Add</a>
                                  </p>
                                  <?php 
                                    $message=$this->session->flashdata('message');
                                    if ($message) {
                                      echo '
                                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                             </button>

                                            '.$message.'
                                        </div>';
                                    }    
                                  ?>
                                  <table id="basic-datatable" class="table table-striped nowrap">
                                      <thead>
                                          <tr>
                                              <th>Id</th>
                                              <th>Gallery</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <?php
                                        if ($galleries) {
                                          foreach ($galleries->result() as $key => $galleries) { 
                                          $key = $key + 1;
                                      ?>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?php echo $key;?>
                                                    </td>
                                                    <td>
                                                        <img src="<?php echo base_url()?>/uploads/galleries/thumbs/<?php echo  $galleries->gallery;?>">
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo $galleries->gallery_id; ?>" data-toggle="modal" data-target="#confirm" class="confir"> 
                                                          <i class="fe-x"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php 
                                          }
                                        }
                                      ?>
                                  </table>
                            </div> <!-- end card body-->
                          </div> <!-- end card -->
                    </div><!-- end col-->
                </div>                         
            </div> <!-- container -->
        </div> <!-- content -->
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".confir").on('click', function(event) {
            event.preventDefault();
            var id = $(this).attr('href');
            $('.accept').val(id);
        }); 

        $(document).on('click','.accept',function(){
            var id = $(this).val();
            destroy(id);
        });
    });

    function destroy(id){
         $.ajax({
            url: '<?php echo base_url()?>/galleries/destroy/',
            type: 'POST',
            data: {id:id},
            success:function(data){
                window.location.href = "<?php echo base_url("galleries/");?>";
            }
        });
    }
</script>