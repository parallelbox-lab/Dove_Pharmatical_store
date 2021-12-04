<meta name="viewport" content="width=device-width">
<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>asset/admin/css/login.css" rel="stylesheet">
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery/jquery-2.2.4.min.js"></script>
<div class="wrapper fadeInDown">
<?php 
  $this->load->view('admin/flash'); 
  ?>
  <div id="formContent">
    <!-- Tabs Titles -->
  
    <!-- Icon -->
    <div class="fadeIn first">
    <img src="<?php echo base_url();?>asset/img/dove.jpg" alt="homepage" class="mt-4 mb-5" style="width:100px;" />
    </div>
    <?php
                    if($error)
                    {
                        echo '<div style="color:red" >Invalid Fullname and Password.<br/> Please try again.</div><br/>';
                    }?>
    <!-- Login Form -->
<?= form_open() ?>
<div class="form-group">
      <input type="text"  <?php if (form_error('fullname') !=='') { echo 'id="border-danger"'; } ?> class="fadeIn second" name="fullname" value="<?php echo set_value('fullname'); ?>" placeholder="Enter Username">
      <span class="text-danger"><?php echo form_error('fullname'); ?></span>
      </div>
      <div class="form-group">
      <input type="password"  class="fadeIn third mb-3"  <?php if (form_error('password') !=='') { echo 'id="border-danger"'; } ?>   name="password" placeholder="password">
   <span class="text-danger"><?php echo form_error('password'); ?></span>
   </div>
   <div class="form-group">
   <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
   </div>
  <?= form_close() ?>
  </div>
</div>

<script src="<?php echo base_url();?>asset/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/js/main.js"></script>
