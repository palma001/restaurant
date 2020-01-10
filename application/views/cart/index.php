<!-- Page Title #4
============================================= -->
<section id="page-title" style="margin-top: -105px" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="<?php echo base_url('frontend_template/assets/images/page-title/6.jpg') ?>" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-4 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Products</div>
                        <div class="title--heading">
                            <h1>Shopping Cart</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html">shop</a></li>
                        <li class="active">Cart</li>
                    </ol>
                    <div class="divider--shape-1down divider--shape-gray"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Shop Cart
============================================= -->
<section id="shopcart" class="shop shop-cart bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="cart-product">
                                <th class="cart-product-item">Product</th>
                                <th class="cart-product-price">Price</th>
                                <th class="cart-product-quantity">Quantity</th>
                                <th class="cart-product-total">Total</th>
                            </tr>
                        </thead>
                    	<?php $i = 1;?>
                        <tbody>
                    		<?php if (!empty($this->cart->contents())) {?>
                    		<form action="<?php echo base_url('cart/update/'); ?>" method="post">
                        		<?php foreach ($this->cart->contents() as $items) {?>
		                            <input type="hidden" name="<?php echo $i . "[rowid]"; ?>" value="<?php echo $items['rowid'] ?>">
		                            <tr class="cart-product">
		                                <td class="cart-product-item">
	                                        <a href="<?php echo base_url('cart/destroy/' . $items['rowid']) ?>" title="">
			                                    <div class="cart-product-remove">
			                                        	<i class="fa fa-close"></i>
			                                    </div>
	                                        </a>
		                                    <div class="cart-product-img">
		                                        <img width="70" height="70" src="<?php echo base_url('uploads/products/' . $items['img']); ?>" alt="product" />
		                                    </div>
		                                    <div class="cart-product-name">
		                                        <h6> <?php echo $items['name']; ?></h6>
		                                    </div>
		                                </td>
		                                <td class="cart-product-price">$ <?php echo $items['price'] ?></td>
		                                <td class="cart-product-quantity">
		                                    <div class="product-quantity">
		                                        <a href="#"><i class="fa fa-minus"></i></a>


		                                        <input type="number" value="<?php echo $items['qty'] ?>" name="<?php echo $i . '[qty]' ?>" id="pro2-qunt">

		                                        <a href="#"><i class="fa fa-plus"></i></a>
		                                    </div>
		                                </td>
		                                <td class="cart-product-total">$ <?php echo $items['subtotal'] ?></td>
		                        	</tr>
	                            <?php $i++;?>

	                        	<?php }?>
	                            <tr class="cart-product-action">
	                                <td colspan="4">
	                                    <div class="row clearfix">
	                                        <div class="col-xs-12 col-sm-6 col-md-6">
	                                            <button class="btn btn--secondary" type="submit">update cart</button>
	                                            <a class="btn btn--primary" href="#">Checkout</a>
	                                        </div>
	                                        <!-- .col-md-6 end -->
	                                    </div>
	                                </td>
	                            </tr>
                    		</form>
                    		<?php } else {
							    echo "<tr align='center'><td colspan='5'><h5>The car is empty</h5></td></tr>";
							}?>
                        </tbody>
                    </table>
                </div>
                <!-- .cart-table end -->
            </div>
            <!-- .col-md-12 end -->
            <?php if (!empty($this->cart->contents())) {?>
	            <div class="col-xs-12 col-sm-12  col-md-6 mb-30-xs mb-30-sm">
	                <div class="cart-shiping">
	                    <h6>Shipping :</h6>
	                    <div class="row">
	                            <div class="col-xs-12 col-md-12">
	                                <i class="fa fa-angle-down"></i>
	                                <select class="form-control" id="country">
										<option value="">-- Select --</option>
										<?php  
											if ($countries) {
												foreach ($countries->result() as $key => $country) {
													echo '<option value="'.$country->country_id.'">'.ucwords($country->country).'</option>';
												}
											}
										?>
									</select>
	                            </div>
	                            <div class="col-xs-12 col-md-6">
	                                <i class="fa fa-angle-down"></i>
	                                <select class="form-control" id="states">
										<option value="">-- Select --</option>
									</select>
	                            </div>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" id="postal-code" placeholder="Postal Code / ZIP">
	                            </div>
	                        	<div class="col-xs-12 col-sm-12 col-md-12">
                                    <textarea class="form-control" name="address" id="resMessage" rows="5" placeholder="Address"></textarea>
                                </div>

	                            <div class="col-md-12">
	                                <button type="button" class="btn btn--primary pull-right pull-none-xs calcular">Add</button>
	                            </div>
	                    </div>
	                </div>
	                <!-- .cart-shiping end -->
	            </div>
	            <!-- .col-md-6 end -->
	            <div class="col-xs-12 col-sm-12  col-md-6">
	                <div class="cart-total-amount">
	                    <h6>Cart Totals :</h6>
	                    <ul class="list-unstyled">
	                        <li>Cart Subtotal :<span class="pull-right text-right">$ <?php echo $this->cart->total(); ?></span>
								<input type="hidden" name="" id="subtotal" value="<?php echo $this->cart->total(); ?>">
	                        </li>
	                        <li>Shipping :<span class="pull-right text-right shippings">Free Shipping</span>
	                        	<input type="hidden" value="" id="price">
	                        </li>
	                        <li>Order Total :<span class="pull-right text-right order-total">$ <?php echo $this->cart->total(); ?> </span></li>
	                    </ul>
	                </div>
	                <!-- .cart-total-amount end -->
	            </div>
	            <!-- .col-md-6 end -->
        	<?php }?>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #shopcart end -->

<script>
	$(document).ready(function(){
		$('#country').change(function(){
			var country_id = $(this).val();
			states(country_id);
		});
		$('#states').change(function(){
			var country = $("#country").val();
			var states  = $("#states").val();
			price(country,states);
		});
		$('.calcular').click(function(){
			var country = $("#country").val();
			var states  = $("#states").val();
			price(country,states);
			setTimeout(function(){
				total();
			},500)
		});
		
	});

	function states(country_id){
		$.ajax({
            url: 'http://localhost/delivery/states/serach_states/',
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

	function price(country,states){
		$.ajax({
            url: 'http://localhost/delivery/shippings/shippings_price/',
            type: 'POST',
            data: {country:country,states:states},
            dataType:'JSON',
            success:function(data){
            	if (data != 1) {
	                var state = "";
	                $.each(data.price,function(key,item){
	                	state = item.cost;
	                });
	                $(".shippings").html('$ '+state);
	                $('#price').val(state);
            	}else{
            		$(".shippings").html('$ '+ 0);
            		$('#price').val(0)
            	}
            }	
            
        });
	}

	function total() {
        var n1 = document.getElementById('subtotal').value;
        var n2 = document.getElementById('price').value;
        var suma = parseInt(n1) + parseInt(n2);
       	$(".order-total").html("$ " +new Intl.NumberFormat("de-DE").format(suma));
    }
</script>
