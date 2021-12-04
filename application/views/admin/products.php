<div class="page-wrapper">

<div class="p-4">
<div class="row">
    <div class="col-lg-12">           
        <h2>Products           
            <div class="pull-right mt-3 mb-3">
               <a class="btn btn-primary" href="<?php echo base_url('cw12345admin/add-products') ?>"> Create New Product</a>
            </div>
        </h2>
     </div>
</div>
<?php $this->load->view('admin/flash'); ?>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Product Name</th>
          <th>Product image</th>
          <th>Product Description   </th>
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
          <td><?php echo number_format($d->price); ?></td>          
          <td><?php echo $d->slug; ?></td>          

      <td>
        <a  class="btn btn-danger btn-lg text-white mb-2" href="<?php echo base_url();?>cw12345admin/products/delete?id=<?php echo $d->product_id; ?>"><i class="ti-trash"></i></a>
         <a class="btn btn-info btn-lg text-white" href="<?php echo base_url('products/edit/'.$d->product_id) ?>"><i class="ti-pencil"></i></a>
  
        </form>
      </td>     
      </tr>
      <?php }  ?>
      <?php if($data == null){
          echo "<tr><h3 class='text-center' style='width:100%;'>No product available</h3></tr>";
      }
      ?>

  </tbody>
</table>
</div>


</div>
</div><!--End page-wrapper-->