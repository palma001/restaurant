			<footer id="footer" class="footer footer-1 text-center">
				    <!-- Widget Section
					============================================= -->
				    <div class="footer--widget text--center">
				        <div class="container">
				            <div class="row">
				                <div class="col-xs-12 col-sm-3 col-md-4">
				                    <div class="footer--widget-content">
				                        <h3><home_footer_title>Our address</home_footer_title></h3>
				                        <p><?php echo $settings->address ?></p>
				                    </div>
				                </div>
				                <!-- .col-md-3 end -->
				                <div class="col-xs-12 col-sm-6 col-md-4">
				                    
				                </div>
				                <!-- .col-md-3 end -->
				                <div class="col-xs-12 col-sm-3 col-md-4">
				                    <div class="footer--widget-content">
				                        <h3>Contact us</h3>
				                        <p class="mb-0">Phone: <?php echo $settings->phone ?></p>
				                    </div>
				                </div>
				                <!-- .col-md-3 end -->
				            </div>
				        </div>
				        <!-- .container end -->
				    </div>
				    <!-- .footer-widget end -->
				    <!--Social
					============================================= -->
				    <div class="footer--social">
				        <div class="container">
				            <div class="row">
				                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
				                    <div class="footer--social-icons">
				                        <a href="<?php echo $settings->facebook; ?>"><i class="fa fa-facebook"></i></a>
				                        <a href="<?php echo $settings->twitter; ?>"><i class="fa fa-twitter"></i></a>
				                        <a href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a>
				                        <a href="<?php echo $settings->pinterest; ?>"><i class="fa fa-pinterest"></i></a>
				                    </div>
				                    <!-- .social-icons end -->
				                </div>
				                <!-- .col-md-6 end -->
				                <div class="col-xs-12 col-sm-6 col-md-6 widget--newsletter">
				                    <form class="footer--social-newsletter">
				                        <input type="email" name="email" id="email" class="form-control" placeholder="Subscribe Our Newsletter">
				                        <button type="button" id="add_newsletter"><i class="fa fa-long-arrow-right"></i></button>
				                    </form>
				                    <div class="subscribe-alert"></div>
				                </div>
				                <!-- .col-md-6 end -->
				            </div>
				            <!-- .row end -->
				        </div>
				        <!-- .container end -->
				    </div>
				    <!-- .footer-widget end -->
				    <!-- Copyrights
					============================================= -->
				    <div class="footer--copyright text-center">
				        <div class="divider--shape-dark"></div>
				        <div class="container">
				            <div class="row">
				                <div class="col-xs-12 col-sm-12 col-md-12">
				                    <span>&copy; 2017 Granny, With Love by </span> <a href="http://themeforest.net/user/zytheme/portfolio?ref=zytheme">7oroof</a>
				                </div>
				            </div>
				        </div>
				        <!-- .container end -->
				    </div>
				    <!-- .footer-copyright end -->
			</footer>
		</div>	
		<script src="<?php echo base_url('frontend_template/assets/js/plugins.js'); ?>"></script>
		<script src="<?php echo base_url('frontend_template/assets/js/functions.js'); ?>"></script>
		<!-- RS5.0 Core JS Files -->
		<script src="<?php echo base_url('frontend_template/assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0'); ?>"></script>
		<script src="<?php echo base_url('frontend_template/assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0'); ?>"></script>
		<script src="<?php echo base_url('frontend_template/assets/revolution/js/extensions/revolution.extension.video.min.js'); ?>"></script>
		<script src="<?php echo base_url('frontend_template/assets/revolution/js/extensions/revolution.extension.slideanims.min.js'); ?>"></script>
		<script src="<?php echo base_url('frontend_template/assets/revolution/js/extensions/revolution.extension.actions.min.js'); ?>"></script>
		<script src="<?php echo base_url('frontend_template/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js'); ?>"></script>
		<script src="<?php echo base_url('frontend_template/assets/revolution/js/extensions/revolution.extension.kenburn.min.js'); ?>"></script>
		<script src="<?php echo base_url('frontend_template/assets/revolution/js/extensions/revolution.extension.navigation.min.js'); ?>"></script>
		<script src="<?php echo base_url('frontend_template/assets/revolution/js/extensions/revolution.extension.migration.min.js'); ?>"></script>
		<script src="<?php echo base_url('frontend_template/assets/assets/revolution/js/extensions/revolution.extension.parallax.min.js'); ?>"></script>
		<!-- RS Configration JS Files -->
		<script src="<?php echo base_url('frontend_template/assets/js/rsconfig.js'); ?>"></script>
    	<script src="<?php echo  base_url('admin_template/js/pagination.js')?>"></script>

    	<script>
    		$(document).ready(function(){
    			$(document).on('click','#add_newsletter',function(){
    				var email = $('#email').val();
    				if ($.trim(email).length > 0) {
    					newsletter(email);
    				}else{
    					$(".subscribe-alert").html('<h5 class="alert alert-danger">Empty Field</h5>');
    				}
    			})
    		})
    		function newsletter(email){

		        $.ajax({
		            url: '<?php echo base_url()?>/newsletters/store/',
		            type: 'POST',
		            data: {email:email},
		            dataType:'JSON',
		            success:function(data){
		               var html = "";
		               if (data == 1) {
		               		$(".subscribe-alert").html('<h5 class="alert alert-success">Thank you for subscribing!</h5>');
		               		$('#email').val('');
		               }
		            }
		        })

		    }
    	</script> 
	</body>
</html>