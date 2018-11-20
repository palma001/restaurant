<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/');?>">Binfrix</a></li>
                                <li class="breadcrumb-item active">Pages</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Pages</h4>
                    </div>
                </div>
            </div>     

            <div class="row">
            	<div class="col-xl-12">
                    <div class="col-sm-12 textarea">
                        
                    </div>
            	</div>
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->
    <!-- Footer Start -->
    <footer class="footer">
    </footer>
    <!-- end Footer -->
</div>

<script>
    $(document).ready(function() {

        $(document).on('click','.page',function(){
            var page = $(this).attr('id');
            page_html(page);
        });
        page_html('home');
    });

    function page_html(page){
        $.ajax({
            url: '<?php echo base_url()?>/index.php/pages/edit/',
            type: 'POST',
            data: {page:page},
            dataType:'JSON',
            success:function(data){
               var html = "";
               html =  '<textarea class="form-control" rows="5" placeholder="Description" name="description" style="height: 700px;">'+data+'</textarea>';
               $('.textarea').html(html);
            }
        })

    }
</script>