<style>
    .page-container{
    display:flex;justify-content:space-around;align-items:center;padding-top:50px;padding-bottom:30px;
    
    }
    @media(max-width:800px){
        .page-container{
            flex-direction:column;
        }
    }
    label{
        font-size:17px;
        font-weight:600
    }
    #border-danger {
    border: 1px solid red;
}

    </style>
<div class="page-wrapper">
    <div class="page-container" >
<form method="post">
    <?php $this->load->view('admin/flash'); ?>
    <div class="form-group">
        <label for="fullname">Enter Fullname</label>
        <input type="text" <?php if (form_error('fullname') !=='') { echo 'id="border-danger"'; } ?> name="fullname" value="<?= set_value('fullname');?>" class="form-control" placeholder="Enter Fullname">
        <span class="text-danger mt-3"><?php echo form_error('fullname'); ?></span>

    </div>
    <div class="form-group">
        <label for="fullname">Enter Email</label>
        <input type="email" <?php if (form_error('email') !=='') { echo 'id="border-danger"'; } ?> name="email" value="<?= set_value('email');?>" class="form-control" placeholder="Enter Email" >
        <span class="text-danger mt-3"><?php echo form_error('email'); ?></span>

    </div>
    <div class="form-group">
        <label for="fullname">Enter Password</label>
        <input type="password" <?php if (form_error('email') !=='') { echo 'id="border-danger"'; } ?> name="password" class="form-control"  placeholder="Enter Password">
        <span class="text-danger mt-3"><?php echo form_error('password'); ?></span>

    </div>

    <div class="form-group">
        <button class="btn btn-primary" name="add">Add Admin </button>
    </div>
</form> 
<div class="text-left">
    <a href="<?= base_url('cw12345admin/all-admin');?>" class="btn btn-success mb-5 text-white"> View All Admin</a>

</div>  
</div>

</div><!--End Page-wrapper-->