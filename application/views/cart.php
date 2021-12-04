<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url();?>">Home</a>
                            <a href="<?php echo base_url();?>products">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                 	<?php $this->load->view('admin/flash'); ?>

                <?php $cart_content = $this->cart->contents();
						
						?>
                        <?php if($this->cart->total_items() > 0) {  ?>
                    <div class="shopping__cart__table">

                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($cart_content as $items){ ?>

                                <tr>

                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="<?php echo base_url();?>asset/img/<?php echo $items['options']['pro_image']?>" alt="<?php echo $items['name']?>" style="width:100px;">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $items['name']?></h6>
                                            <h5>₦ <?php echo number_format($items['price'])?></h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">

                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="hidden" class="csrf" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>">
                                                <input type="text" name="qty" class="itemQty" value="<?php echo $items['qty']?>" >
                                                <input  type="hidden" name="rowid" value="<?php echo $items['rowid']?>" id="rowid">

                                          </div>
                                        </div>
                                       

                                    </td>
                                    <td class="cart__price">₦ <?php echo number_format($items['subtotal'])?></td>
                                    <td class="cart__close">	<a  href="<?php echo base_url()?>delete-to-cart/<?php echo $items['rowid']?>"><i class="fa fa-close"></i></a></td>
                                </tr>
                               
 
                                 <?php } ?>
						
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="<?php echo base_url();?>products">Continue Shopping</a>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <button type="submit" value="Update" style="color: #111111;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    border: 1px solid #e1e1e1;
    padding: 14px 35px;
    display: inline-block;" ><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div> -->
                    </div>
                </div>
<div class="col-lg-4">
                   
                    <div class="cart__total mt-5">
                        <h6>Cart total</h6>
                        <ul>
                        <li>Subtotal <span>₦  <?php echo number_format($this->cart->total());?></span></li>
                        <li>Total <span>₦  <?php echo number_format($this->cart->total());?></span></li>
                        </ul>
                        <a href="<?= base_url('checkout');?>" class="primary-btn">Proceed to checkout</a>
                    </div>            
                </div>
                <?= form_close();?>
          <?php  }else{ ?>
							<div class="empty-cart">
                                <p class="mb-5">Your cart is empty.....</p>
                                <div class="continue__btn">
                                <a href="<?php echo base_url();?>products">Continue Shopping</a>
                            </div>
                            </div>
							<?php } ?>
            </div>
        </div>
    </section>