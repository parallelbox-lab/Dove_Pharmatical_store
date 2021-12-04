<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Change Password</h4>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="col">

<div class="spad">
<div class="container">
<?php $this->load->view('admin/flash'); ?>
<?php echo @$error; ?>
    <?php echo form_open()?>
            <div class="form-group">
                <label for="oldpass" <?php if (form_error('oldpass') !=='') { echo 'id="label-error"'; } ?>>Old Password *</label>
                <input type="password" <?php if (form_error('oldpass') !=='') { echo 'id="border-danger"'; } ?> name="oldpass" id="oldpass" class="custom-select" value="<?= set_value('oldpass');?>" placeholder="Old Password" />
                <?php echo form_error('oldpass', '<div class="error mt-1" style="color:red">', '</div>')?>
            </div>
            <div class="form-group">
                <label for="newpass" <?php if (form_error('newpass') !=='') { echo 'id="label-error"'; } ?>>New Password *</label>
                <input type="password" <?php if (form_error('newpass') !=='') { echo 'id="border-danger"'; } ?> name="newpass" id="newpass" class="custom-select" value="<?= set_value('newpass');?>" placeholder="New Password" />
                <?php echo form_error('newpass', '<div class="error mt-1" style="color:red">', '</div>')?>
            </div>
            <div class="form-group">
                <label for="passconf" <?php if (form_error('passconf') !=='') { echo 'id="label-error"'; } ?>>Confirm Password *</label>
                <input type="password" <?php if (form_error('passconf') !=='') { echo 'id="border-danger"'; } ?> name="passconf" id="passconf"  value="<?= set_value('passconf');?>" class="custom-select" placeholder="Confirm Password" />
                <?php echo form_error('passconf', '<div class="text mt-1" style="color:red">', '</div>')?>
            </div>
            <div class="form-group">
                <button type="submit" class="site-btn" name="change_pass">Change Password</button>
            </div>
        <?php echo form_close(); ?>
</div>
</div>
</div>