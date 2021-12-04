<?php if ($this->session->flashdata('logout')) : ?>
<div class="logout-flash">
    <?php echo $this->session->flashdata('logout'); ?>
</div>
<?php endif; ?>

<?php if ($this->session->flashdata('success')) : ?>
<div class="alert alert-success timeout">
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')) : ?>
    <div class="alert alert-danger timeout">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>