<div class="page-wrapper">
<div class="p-5">

<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>FullName</th>
          <th>Email</th>
      <th>Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->fullname; ?></td>
          <td><?php echo $d->email; ?></td>          
      <td>
        <form method="DELETE" action="<?php echo base_url('products/delete/'.$d->id);?>">
         <a class="btn btn-info btn-lg text-white" href="<?php echo base_url('cw12345admin/edit/'.$d->id); ?>"><i class="ti-pencil"></i></a>
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