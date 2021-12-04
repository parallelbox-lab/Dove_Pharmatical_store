
<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Add New Address</h4>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url();?>">Home</a>
                            <a href="<?php echo base_url();?>dashboard/address">Address</a>
                            <span>Add address</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <?php echo form_open() ?>

                    <div class="row">
                        <div class="col">
                            <?php if(validation_errors() == Null){
                                
                            }else {?>
                       <div class="alert alert-danger" id="error_sub"><?php echo validation_errors(); ?></div> 
<?php } ?>
                            <h6 class="checkout__title">Manage Address</h6>
                         
                            <div class="checkout__input">
                                <p <?php if (form_error('country') !=='') { echo 'id="label-error"'; } ?>>Country<span>*</span></p>
                                <input type="text" <?php if (form_error('country') !=='') { echo 'id="border-danger"'; } ?> placeholder="Enter your Country name"  name="country" value="<?= set_value('country');?>">
                                <span class="text-danger"><?php echo form_error('country'); ?></span>
                            </div>
                            <div class="checkout__input">
                                <p <?php if (form_error('address') !=='') { echo 'id="label-error"'; } ?>>Address<span>*</span></p>
                                <input type="text" <?php if (form_error('address') !=='') { echo 'id="border-danger"'; } ?>  placeholder="Street Address" name="address" placeholder="Enter your Address" <?= set_value('address');?> class="checkout__input__add">
                            <span class="text-danger"><?php echo form_error('address'); ?></span>
                            </div>
                            <div class="checkout__input">
                                <p <?php if (form_error('town/city') !=='') { echo 'id="label-error"'; } ?>>Town/City<span>*</span></p>
                                <input type="text" <?php if (form_error('town/city') !=='') { echo 'id="border-danger"'; } ?> placeholder="town/city" name="town/city" value="<?= set_value('town/city');?>">
                                <span class="text-danger"><?php echo form_error('town/city'); ?></span>
                            </div>
                            <div class="checkout__input">
                                <p <?php if (form_error('state') !=='') { echo 'id="label-error"'; } ?>>State<span>*</span></p>
                                <input type="text" <?php if (form_error('state') !=='') { echo 'id="border-danger"'; } ?> placeholder="Enter State name"  name="state" value="<?= set_value('state');?>" >
                                <span class="text-danger"><?php echo form_error('state'); ?></span>
                            </div>
                            <div class="checkout__input">
                                <p <?php if (form_error('postcode/zip') !=='') { echo 'id="label-error"'; } ?>>Postcode / ZIP<span>*</span></p>
                                <input type="text" placeholder="Postcode/zip" <?php if (form_error('postcode/zip') !=='') { echo 'id="border-danger"'; } ?> name="postcode/zip" value="<?= set_value('postcode/zip');?>">
                                  <span class="text-danger"><?php echo form_error('postcode/zip'); ?></span>
                            </div>
                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('id')?>">
                            
                              
                                    <div class="checkout__input">
                                        <p <?php if (form_error('phone') !=='') { echo 'id="label-error"'; } ?>>Phone<span>*</span></p>
                                        <input type="tel" placeholder="Phone" <?php if (form_error('phone') !=='') { echo 'id="border-danger"'; } ?> name="phone" value="<?= set_value('phone');?>">
                                        <span class="text-danger"><?php echo form_error('phone'); ?></span>
                                    </div>
                                                <button type="submit" class="site-btn">ADD ADDRESS</button>
<?= form_close(); ?>
                        </div>
                       </div>
        </div>
    </section>