<div class="page-wrapper">
    <div class="p-4">
    <a href="<?= base_url();?>cw12345admin/products" class="btn btn-primary mb-3">Go Back </a>
    <h3>Add New Product </h3>
  <?php  $this->load->view("admin/flash"); ?>
    <?php echo $this->session->flashdata('success'); ?>
               

    <?php echo form_open_multipart() ?>


    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Product name</label>
                <div class="col-md-9">
                    <input type="text" name="pname" class="form-control" placeholder="Product name">
                    <span class="text-red mt-4" style="font-weight:800;color:red"> <?php echo form_error('pname'); ?> </span>
                </div>
            </div>
        </div>
    
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Price</label>
                <div class="col-md-9">
                    <input type="number" name="price" class="form-control" placeholder="Enter Product price">
                    <span class="text-red mt-4" style="font-weight:800;color:red"> <?php echo form_error('price'); ?> </span>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
                                    <label>Select Category</label>
                                    <div class="col-md-9">
                                    <select class="form-control" name="pro_cat">
                                        <option>Select Product One</option>
                                        <?php
                                         foreach ($all_category as $category) {  ?>
                                        <option value="<?php echo $category->category_name;?>"><?php echo $category->category_name?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="text-red mt-4" style="font-weight:800">  <?php echo form_error('pro_cat'); ?> </span>      
                                </div>
                                </div>
                                         </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Product Description</label>
                <div class="col-md-9">
                    <textarea name="desc" class="form-control" placeholder="Enter Product Description" style="resize:none;height:150px;"></textarea>
                   <span class="text-red mt-4" style="font-weight:800;color:red"> <?php echo form_error('desc'); ?> </span>
                </div>
            </div>
        </div>
   
        <div class="form-group mt-2 mb-3">
                <label class="text-dark">Product image upload </label>	
                <br/> 
            <input type="file" name="pro_image" value="<?php echo set_value('pro_image');?>" class=""/>
            <h4 class="error mt-4" style="color:red;font-weight:bold;">
                    <?php $msg = $this->session->userdata('error_image');
                        echo $msg;
                        $this->session->unset_userdata('error_image');
                     ?>                       
                </h4>       
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="save" value="save" class="btn btn-success text-white btn-lg">
        </div>
    </div>
    <?php echo form_close();?>
    
</div>
</div>