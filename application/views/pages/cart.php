<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Cart -->
	
						
		<div class="cart_section mat-card media">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="text-dark" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">My cart(<?php $cart_items =  $this->cart->total_items();
													if($cart_items>0){
												?> 
												 <?php echo $cart_items;?>
												 <?php }else{?>
												  0
												 <?php } ?>items) </p>
						<div class="cart_container" style="background:#fff;padding:10px;border:1px solid #ddd;box-shadow:1px 1px 2px #ddd;margin-top:12px;">
							
							<!-- Cart Bar -->
							<?php $this->load->view('config/flash'); ?>


					

							<!-- Cart Items -->
							<div class="cart_items">
							
								<ul class="cart_items_list">
								<?php $cart_content = $this->cart->contents();
						
						?>
								<?php if($this->cart->total_items() > 0) {  foreach ($cart_content as $items){ ?>
								
										<div class="">
						
										<figure class="itemside">
	<div class="aside">
	
		<div class="img-wrap img-sm"><img src="<?php echo $items['options']['pro_image']?>" class="img-thumbnail"></div>
	</div>
	<figcaption class="text-wrap">
		<h6 class="title"><a href="#" class="text-dark" style="font-size:18px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> <?php echo $items['name']?> </a></h6>
		<span class="text-muted text-dark" style="font-size:14px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Size:XL .</span>
		<span class="text-muted text-dark" style="font-size:14px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Price:₦ <?php echo $items['price']?></span>						
	</figcaption>
	
</figure> 
<hr/>
	<a href="#" style="font-size:19px;color:#333;"><i class="zmdi zmdi-heart" style="font-size:17px;"></i> </a>	
	
	<a  href="<?php echo base_url()?>delete-to-cart/<?php echo $items['rowid']?>" style="margin-left:15px;font-size:19px;color:#333;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" ><i class="fa fa-trash" style=""> 	</i>  </a>				
	
	<form action="<?php echo base_url()?>update-cart-qty" method="post">
										
										<input class="cart_quantity_input" type="text" name="qty" value="<?php echo $items['qty']?>" autocomplete="off" size="2">
										
										<input  type="hidden" name="rowid" value="<?php echo $items['rowid']?>">

										<input  type="submit"  value="Update"/>

									<form>
								
							</div>
							<td class="cart_total">
								<p class="cart_total_price">$<?php echo $items['subtotal']?></p>
							</td>
						   <?php } }else{ ?>
							<tr><td colspan="6"><p>Your cart is empty.....</p></td>
							<?php } ?>
</ul>
							
</div>


						</div>
					
					</div>
				</div>
		</div></div>
			</div>
		</div>
<?php echo form_close(); ?>
		<!-- Footer -->



