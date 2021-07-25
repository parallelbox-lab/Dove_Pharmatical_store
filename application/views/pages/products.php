<main class="main">
<div class="bradcam_area bradcam_bg_1" style="background-image:url(<?php echo base_url();?>asset/img/hero2.png)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <div class="breadcrumb__text">
                        <h3>Products </h3>
                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content mt-4 pt-4">
                <div class="container">
                	<div class="row">
                		<div class="col">
                			<div class="toolbox">
                			
                			
                            <div class="products-container mt-5" data-layout="fitRows">
        <?php foreach($data as $row) { ?>

            <div class="product-item furniture  col-md-4 ">
                <div class="product product-4">
                    <figure class="product-media">
                        <a href="<?= base_url();?>products/<?= $row->slug;?>">
                            <img src="<?php echo base_url();?>asset/img/<?= $row->product_image ?>" alt="Product image" class="product-image">
                        </a>




                        <!-- End .product-action -->
                    </figure>
                    <!-- End .product-media -->

                    <div class="product-body">
                        <h3 class="product-title"><a href="<?php echo base_url(); ?>products/<?php echo $row->slug; ?>"><?= $row->product_name; ?></a></h3>
                        <!-- End .product-title -->
                        <div class="price-box">
                            <p class="regular-product ">
                                <span><span class="money" data-currency-usd="$210.00">NGN <?= $row->price; ?></span></span>
                            </p>
                        </div>
                        <!--  <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                            </div> -->
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product-body -->
                </div>

                <!-- End .product -->
            </div>
            <!-- End .product-item -->
            <!-- End .product-item -->
            <?php } ?>

        </div>
                			<nav aria-label="Page navigation">
							    <ul class="pagination">
							        <li class="page-item disabled">
							            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
							                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
							            </a>
							        </li>
							        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
							        <li class="page-item"><a class="page-link" href="#">2</a></li>
							        <li class="page-item"><a class="page-link" href="#">3</a></li>
							        <li class="page-item-total">of 6</li>
							        <li class="page-item">
							            <a class="page-link page-link-next" href="#" aria-label="Next">
							                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
							            </a>
							        </li>
							    </ul>
							</nav>
                		</div><!-- End .col-lg-9 -->
                	
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div>