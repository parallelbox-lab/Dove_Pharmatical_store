<div class="page-wrapper">
<div class="p-5">

<div class="row">

    <div class="col-lg-12">           
        <h2>Add Category        
            <div class="pull-right">
               <a class="btn btn-primary mt-3 mb-3" href="<?php echo base_url('cw12345admin/add-category') ?>"> Create New Category</a>
            </div>
        </h2>
     </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Category name</th>
      <th>Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->category_name; ?></td>
      <td>
        <form method="DELETE" action="<?php echo base_url('category/delete/'.$d->cid);?>">
         <a class="btn btn-info btn-lg text-white" href="<?php echo base_url('cw12345admin/category-edit/'.$d->cid); ?>"><i class="ti-pencil"></i></a>
          <button type="submit" class="btn btn-danger btn-lg text-white"><i class="ti-trash"></i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>
</div>  
</div>