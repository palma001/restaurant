<!-- Page Title #4
============================================= -->
<?php  if ($products) { ?>
    <section id="page-title" style="margin-top: -105px" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
        <div class="bg-section">
            <img src="<?php echo base_url('frontend_template/assets/images/page-title/6.jpg') ?>" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-4 text-center">
                        <div class="title--content">
                            <div class="title--heading">
                                <h1>Products</h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
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
<!-- Shop #4
============================================= -->
    <section id="shop" class="shop shop-3 bg-gray pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    
                    <div class="cart-table table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="cart-product">
                                <th class="cart-product-item">Product</th>
                                <th class="cart-product-price">Price</th>
                                <th class="cart-product-price">Add Cart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($products) {?>
                                <?php foreach ($products->result() as $items) {?>
                                    <form action ="<?php echo base_url('cart/store/'); ?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $items->product_id ?>">
                                        <tr class="cart-product">
                                            <td class="cart-product-item">
                                                <div class="cart-product-img">
                                                    <img width="70" height="70" src="<?php echo base_url('uploads/products/' .$items->image); ?>" alt="product" />
                                                    <input type="hidden" name="img" value="<?php echo $items->image; ?>">
                                                </div>
                                                <div class="cart-product-name">
                                                    <h6> <?php echo $items->title; ?></h6>
                                                    <input type="hidden" name="title" value="<?php echo $items->title; ?>">
                                                </div>
                                            </td>
                                            <td class="cart-product-item">
                                                <div class="cart-product-name">
                                                    <h6> <?php echo number_format($items->price,'2',',','.'); ?></h6>
                                                    <input type="hidden" name="price" value="<?php echo $items->price; ?>">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-product-item">
                                                    <button type="submit" class="btn btn--primary btn--rounded" href="#">Add Cart</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                <?php }?>
                            <?php } else {
                                echo "<tr align='center'><td colspan='5'><h5>The car is empty</h5></td></tr>";
                            }?>
                        </tbody>
                    </table>
                </div>
                <!-- .cart-table end -->
                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #shop end -->
<?php } ?>