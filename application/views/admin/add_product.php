<div class="page-wrapper">
    <div class="p-4">
    <a href="<?= base_url();?>cw12345admin/products" class="btn btn-primary mb-3">Go Back </a>
    <h3>Add New Product </h3>
<form method="post" action="<?php echo base_url('productsCreate');?>">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Product name</label>
                <div class="col-md-9">
                    <input type="text" name="pname" class="form-control" placeholder="Product name">
                </div>
            </div>
        </div>
    
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Price</label>
                <div class="col-md-9">
                    <input type="text" name="price" class="form-control" placeholder="Enter Product price">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Product Description</label>
                <div class="col-md-9">
                    <textarea name="desc" class="form-control" placeholder="Enter Product Description"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
                <label class="text-dark">Product image upload </label>	
                <br/> 
            <input type="file" name="userfile" class=""/>
                 </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-success text-white btn-lg">
        </div>
    </div>
    
</form>
</div>
</div>