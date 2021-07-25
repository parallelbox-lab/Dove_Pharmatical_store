
<!-- start banner Area -->
            <?php if(!isset($post))
            {?>
     <?php   } 
            else //display the post
            {?> 
			<!-- End banner Area -->
<!-- product details -->
<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Product Details</h4>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url();?>">Home</a>
                            <a href="<?php echo base_url();?>products">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo form_open(base_url('add-to-cart')) ?>

<div class="product">
    <div class="container">
        <div class="row product_row">

            <!-- Product Image -->
            <div class="col-lg-7">
                <div class="product_image">
                    <div class="product_image_large"><img src="<?php echo base_url();?>asset/img/<?= $post['product_image']; ?>" alt=""></div>
                    <div class="product_image_thumbnails d-flex flex-row align-items-start justify-content-start">
                        <div class="product_image_thumbnail" style="background-image:url(<?php echo base_url();?>asset/img/digital_infared_thermometer.png)" data-image="images/product_image_1.jpg"></div>
                        <div class="product_image_thumbnail" style="background-image:url(<?php echo base_url();?>asset/img/digital_infared_thermometer.png)" data-image="images/product_image_2.jpg"></div>
                        <div class="product_image_thumbnail" style="background-image:url(<?php echo base_url();?>asset/img/digital_infared_thermometer.png)" data-image="images/product_image_4.jpg"></div>
                    </div>
                </div>
            </div>

            <!-- Product Content -->
            <div class="col-lg-5">
                <div class="product_content">
                    <div class="product_name"><?= $post['product_name']; ?></div>
                    <div class="product_price">NGN <?= $post['price']; ?></div>
                    <div class="rating rating_4" data-rating="4">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>

                    <div class="product_text">
                        <p><?= $post['product_description']; ?>.</p>
                    </div>
                    <!-- Product Quantity -->
                    <div class="product_quantity_container">
                        <span>Quantity</span>
                        <div class="product_quantity clearfix">
                            <input id="quantity_input" type="text"  pattern="[0-9]*" value="1" name="qty">
                        </div>
                    </div>
                    <input type="hidden" value="<?=$post['product_id']?>" name="product_auth"/>


                    <div class="product_size_container">
                        <div class="button cart_button">
                            <button class="btn" type="submit" style="width:100%;color:#fff;border:none;background: #937c6f;line-height:34px;">Add To Cart <i class="zmdi zmdi-shopping-cart ml-2"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
	


         <?php   } ?>
<!-- start footer Area -->