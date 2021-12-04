<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url();?>">Home</a>
                            <a href="<?php echo base_url();?>products">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    #border-danger {
                 border-color: #bc0723!important;
             }
             
             #label-error {
                 color: #bc0723!important;
             }
</style>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <?php echo form_open() ?>

                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <?php if(validation_errors() == Null){
                                
                            }else {?>
                       <div class="alert alert-danger" id="error_sub"><?php echo validation_errors(); ?></div> 
<?php } ?>
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fullname<span>*</span></p>
                                        <input type="text" <?php if (form_error('fullname') !=='') { echo 'id="border-danger"'; } ?>  name="fullname" placeholder="" value="<?php echo $account['fullname']; ?>" readonly>
                                        <span class="text-danger"><?php echo form_error('fullname'); ?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email" name="email" value="<?php echo $account['email']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p <?php if (form_error('country') !=='') { echo 'id="label-error"'; } ?>>Country<span>*</span></p>
                                <input type="text" <?php if (form_error('country') !=='') { echo 'id="border-danger"'; } ?> placeholder="Enter your Country name"  name="country" value="<?php if(isset($get_address['country'])){ set_value('country');if(set_value('country')==''){echo $get_address['country'];}}?>">
                                <span class="text-danger"><?php echo form_error('country'); ?></span>
                            </div>
                            <div class="checkout__input">
                                <p <?php if (form_error('address') !=='') { echo 'id="label-error"'; } ?>>Address<span>*</span></p>
                                <input type="text" <?php if (form_error('address') !=='') { echo 'id="border-danger"'; } ?>  placeholder="Street Address" name="address" placeholder="Enter your Address" value="<?php if(isset($get_address['address'])){ set_value('address');if(set_value('address')==''){echo $get_address['address'];}}?>" class="checkout__input__add">
                            <span class="text-danger"><?php echo form_error('address'); ?></span>
                            </div>
                            <div class="checkout__input">
                                <p <?php if (form_error('town/city') !=='') { echo 'id="label-error"'; } ?>>Town/City<span>*</span></p>
                                <input type="text" <?php if (form_error('town/city') !=='') { echo 'id="border-danger"'; } ?> placeholder="town/city" name="town/city" value="<?php if(isset($get_address['town/city'])){ set_value('town/city');if(set_value('town/city')==''){echo $get_address['town/city'];}}?>">
                                <span class="text-danger"><?php echo form_error('town/city'); ?></span>
                            </div>
                            <div class="checkout__input">
                                <p <?php if (form_error('state') !=='') { echo 'id="label-error"'; } ?>>State<span>*</span></p>
                                <input type="text" <?php if (form_error('state') !=='') { echo 'id="border-danger"'; } ?> placeholder="Enter State name"  name="state" value="<?php if(isset($get_address['state'])){ set_value('state');if(set_value('state')==''){echo $get_address['state'];}}?>" >
                                <span class="text-danger"><?php echo form_error('state'); ?></span>
                            </div>
                            <div class="checkout__input">
                                <p <?php if (form_error('postcode/zip') !=='') { echo 'id="label-error"'; } ?>>Postcode / ZIP<span>*</span></p>
                                <input type="text" placeholder="Postcode/zip" <?php if (form_error('postcode/zip') !=='') { echo 'id="border-danger"'; } ?> name="postcode/zip" value="<?php if(isset($get_address['postcode/zip'])){ set_value('postcode/zip');if(set_value('postcode/zip')==''){echo $get_address['postcode/zip'];}}?>">
                                  <span class="text-danger"><?php echo form_error('postcode/zip'); ?></span>
                            </div>
                            
                              
                                    <div class="checkout__input">
                                        <p <?php if (form_error('phone') !=='') { echo 'id="label-error"'; } ?>>Phone<span>*</span></p>
                                        <input type="tel" placeholder="Phone" <?php if (form_error('phone') !=='') { echo 'id="border-danger"'; } ?> name="phone" value="<?php if(isset($get_address['phone'])){ set_value('phone');if(set_value('phone')==''){echo $get_address['phone'];}}?>">
                                        <span class="text-danger"><?php echo form_error('phone'); ?></span>
                                    </div>
                
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                <?php $sum = array(); ?>

                             <?php $i = 0;   foreach ($cart as $item) : ?>

                                    <li><?php echo $item['name']; ?> <span>$ <?php echo number_format($item['price']); ?></span></li>
                                   
                                    <?php
                                    $sum = 0;
                                    $sum += $item['subtotal']; 

                            $i++;
                        endforeach; ?>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Total <span>₦ <?php echo number_format($this->cart->total());?></span></li>
                                </ul>
                               <?= form_close(); ?>
                                <p>Order details will be sent to your Provided Email Address and Payment instruction will be added there.</p>
                                <!-- <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                               <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
