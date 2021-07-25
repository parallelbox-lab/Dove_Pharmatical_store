<div class="page-wrapper">
    <div class="p-5">
<form method="post" action="<?php echo base_url('products/update/'.$admin_users->id);?>">
    <div class="row">
        <h2>Edit Admin users</h2>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Fullname</label>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" value="<?php echo $admin_users->fullname; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-9">
                    <input type="email" name="description" value="<?php echo $admin_users->email; ?>" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-primary text-white">
        </div>
    </div>
    
</form>
</div>
</div>