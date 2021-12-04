
<!-- start banner Area -->
            <?php if(!isset($post))
            {?>
     <?php   } 
            else //display the post
            {?> 
			<!-- End banner Area -->
<!-- product details -->
<section class="breadcrumb-option text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Product Details</h4>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url();?>">Home</a>
                            <a href="<?php echo base_url();?>products">Shop</a>
                            <span><?= $post['product_name'];?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo form_open(base_url('add-to-cart')) ?>
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__body">
                  <?php $this->load->view('admin/flash'); ?>

       <div class="row">
           <div class="col-md-6">
           <div class="product_image" >
                      <img src="<?= base_url();?>asset/img/<?= $post['product_image'];?>" alt="<?= $post['product_name'];?>" style="width:100%;">
                  </div>
                  </div>
                                               <div class="col-md-6">
        <div class="product__details__content mt-4">
                        <div class="product__details__text">
                            <h4><?= $post['product_name'];?></h4>
                           
                            <h3>NGN <?= number_format($post['price']); ?> </h3>
                          
                           
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" id="quantity_input"  value="1" name="qty" min="1" max="10">
                                        <input type="hidden" value="<?=$post['product_id']?>" name="product_auth">

                                    </div>
                                </div>
                                <button type="submit" class="primary-btn">add to cart <i class="zmdi zmdi-shopping-cart ml-2"></i></button>
                            </div>
                     
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <?php echo form_close(); ?>
                <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Description</a>
                                </li>
                            
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Additional
                                    information</a>
                                </li> -->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note"></p>
                                        <div class="product__details__tab__content__item mb-5">
                                            <h5>Products Infomation</h5>
                                            <p><?= $post['product_description'];?></p>
                                        </div>
                                     
                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                                            solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis
                                            ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                                        pharetras loremos.</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>A Pocket PC is a handheld computer, which features many of the same
                                                capabilities as a modern PC. These handy little devices allow
                                                individuals to retrieve and store e-mail messages, create a contact
                                                file, coordinate appointments, surf the internet, exchange text messages
                                                and more. Every product that is labeled as a Pocket PC must be
                                                accompanied with specific software to operate the unit and must feature
                                            a touchscreen and touchpad.</p>
                                            <p>As is the case with any new technology product, the cost of a Pocket PC
                                                was substantial during it’s early release. For approximately $700.00,
                                                consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                These days, customers are finding that prices have become much more
                                                reasonable now that the newness is wearing off. For approximately
                                            $350.00, a new Pocket PC can now be purchased.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                          worn all year round.</p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
   
    <!-- <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        
                        </div>
                        <div class="product__item__text">
                            <h6>Diagonal Textured Cap</h6>
                           
                            <h5>$60.9</h5>
                            <div class="product__color__select">
                                <label for="pc-10">
                                    <input type="radio" id="pc-10">
                                </label>
                                <label class="active black" for="pc-11">
                                    <input type="radio" id="pc-11">
                                </label>
                                <label class="grey" for="pc-12">
                                    <input type="radio" id="pc-12">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

         <?php   } ?>
<!-- start footer Area -->