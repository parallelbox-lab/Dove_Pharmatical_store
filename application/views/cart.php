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
                <?php $cart_content = $this->cart->contents();
						
						?>
                        <?php if($this->cart->total_items() > 0) {  ?>
                    <div class="shopping__cart__table">

                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
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
                                            <h5>₦ <?php echo $items['price']?></h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                    <form action="<?php echo base_url('update-cart-qty')?>" method="post">

                                        <div class="quantity">
                                            <div class="pro-qty-2"><span class="fa fa-angle-left dec qtybtn"></span>
                                                <input type="text" name="qty" value="<?php echo $items['qty']?>" >
                                                <input  type="hidden" name="rowid" value="<?php echo $items['rowid']?>">

                                            <span class="fa fa-angle-right inc qtybtn"></span></div>
                                        </div>
                                       

                                    </td>
                                    <td class="cart__price">₦ <?php echo $items['subtotal']?></td>
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
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <button type="submit" value="Update" ><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <form>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ 169.50</span></li>
                            <li>Total <span>$ 169.50</span></li>
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div>            
                </div>
          <?php  }else{ ?>
							<tr><td colspan="6"><p>Your cart is empty.....</p></td>
							<?php } ?>
            </div>
        </div>
    </section>