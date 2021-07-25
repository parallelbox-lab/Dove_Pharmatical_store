<?php if ($this->session->flashdata('logout')) : ?>
<div class="logout-flash">
    <?php echo $this->session->flashdata('logout'); ?>
</div>
<?php endif; ?>

<?php if ($this->session->flashdata('success')) : ?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>