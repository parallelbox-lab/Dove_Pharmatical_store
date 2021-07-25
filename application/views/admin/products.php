<div class="page-wrapper">

<div class="p-4">
<div class="row">
    <div class="col-lg-12">           
        <h2>Products CRUD           
            <div class="pull-right mt-3 mb-3">
               <a class="btn btn-primary" href="<?php echo base_url('cw12345admin/add-products') ?>"> Create New Product</a>
            </div>
        </h2>
     </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Product Name</th>
          <th>Product image</th>
          <th>Product Description   </th>
          <th>Old Price</th>
          <th>Price</th>
          <th>Slug</th>
      <th>Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->product_name; ?></td>
          <td><img src="<?= base_url();?>asset/img/<?php echo $d->product_image; ?>" width="100px;"></td>
          <td><?php echo $d->product_description; ?></td>          
          <td><?php echo number_format($d->old_price); ?></td>          
          <td><?php echo number_format($d->price); ?></td>          
          <td><?php echo $d->slug; ?></td>          

      <td>
        <form method="DELETE" action="<?php echo base_url('products/delete/'.$d->product_id);?>">
         <a class="btn btn-info btn-sm text-white" href="<?php echo base_url('products/edit/'.$d->product_id) ?>"><i class="ti-pencil"></i></a>
          <button type="submit" class="btn btn-danger btn-sm text-white"><i class="ti-trash"></i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>


</div>
</div><!--End page-wrapper-->