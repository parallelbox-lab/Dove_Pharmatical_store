<style>
    #border-danger {
                 border-color: #bc0723!important;
             }
             
             #label-error {
                 color: #bc0723!important;
             }
</style>
    <!-- Checkout Section Begin -->
    <div class="page-wrapper">
    <section style="display:flex;align-items:center;flex-direction:column;text-align:center">
        <div class="account__content" style="padding-top:110px;padding-bottom:50px">
					<div class="account__panel">
						<div class="account__panel__heading">
						    <?php $this->load->view("admin/flash"); ?>
						<?php if($address !== null) {?>

							<h1 class="mb-3" style="font-size:25px;">Manage Addresses</h1>
<div class="card p-4">
    <h3>Your Default Shipping Address</h3>
    <p><b>Name</b> :<?= $account['fullname'];?></p>
    <p><b>Address </b> : <?= $address['address'];?></p>
    <p><b>Town/city </b>: <?= $address['town/city'];?></p>
    <p><b>State </b>: <?= $address['state'];?></p>
    <p><b>Phone number </b>: <?= $address['phone'];?></p>
    <a href="<?= base_url();?>dashboard/address/edit" class="btn" style="background-color: #006bae;
    border: none;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #fff;
    display: inline-block;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: .125px;
    line-height: 24px;
    padding: 15px 60px;
    position: relative;
    text-transform: uppercase;
    height: 55px;
    border-radius: 30px;
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
}">Edit address</a>
</div>
<?php } ?>
						</div>
						<?php if($address == null) {?>
						<div class="account__panel__content card p-4">
															<div class="account__empty">
									<h2 class="empty__headline">No saved addresses.</h2>
									<p>Let us know where to ship all your orders.</p>

									<div class="empty__cta">
										<a href="<?= base_url();?>dashboard/address/create" class="btn" style="background-color: #006bae;
    border: none;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #fff;
    display: inline-block;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: .125px;
    line-height: 24px;
    padding: 15px 60px;
    position: relative;
    text-transform: uppercase;
    height: 55px;
    border-radius: 30px;
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
}">Add an address</a>
<?php } ?>
									</div>
								</div>
													</div>
					</div>
				</div>
    </section>
    </div>
    