
	
</head>
<body>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		
        <?php if(!isset($post))
            {?>
            <h3 class="mat-card media bg-white  ">You seems to have accessed this page  incorrectly </h3>
            
            
     <?php   } 
            else //display the post
            {?>
		<!-- Product -->

		<div class="product mat-cards media" style="background:#fff;">
			<div class="container-fluid">
				<div class="row product_row">
				<?php $this->load->view('partials/flash'); ?>
					<!-- Product Image -->
					<div class="col-lg-6">
					
					<div class="bod" style="color: #282828;direction: ltr;
box-sizing: border-box;
overflow-x: scroll;
overflow-y: hidden;
display: flex;
flex-wrap: nowrap;
width: 100%;
scroll-snap-type: x mandatory;
scroll-behavior: smooth;
padding-top: 8px;
padding-bottom: 8px;
font-size: 0rem;">

				<div class="itms" style="	color: #282828;

direction: ltr;
font-size: 0rem;
box-sizing: border-box;
flex-shrink: 0;
padding-left: 8px;
scroll-snap-align: center;
scroll-snap-stop: always;"><a href="#" class="mat-card fw" style="direction: ltr;
box-sizing: border-box;
color: inherit;
outline: 0;
display: inline-block;
text-decoration: none;
-webkit-tap-highlight-color: transparent;
border-radius: 4px;
background-color: #fff;
box-shadow: 0 2px 5px 0 rgba(0,0,0,0.05);
overflow: hidden;
width: 100%;
text-align: center;
font-size: 0rem;"><img class="im" alt="<?=$post['productname']?>" src="<?php echo base_url($post['mainimage']);?>" style="direction: ltr;
color: inherit;
-webkit-tap-highlight-color: transparent;
text-align: center;
font-size: 0rem;
box-sizing: border-box;
border-style: none;
max-width: 260px;
width: 70vw;"></a></div>
	<div class="itms" style="	color: #282828;

direction: ltr;
font-size: 0rem;
box-sizing: border-box;
flex-shrink: 0;
padding-left: 8px;
scroll-snap-align: center;
scroll-snap-stop: always;"><a href="#" class="mat-card fw" style="direction: ltr;
box-sizing: border-box;
color: inherit;
outline: 0;
display: inline-block;
text-decoration: none;
-webkit-tap-highlight-color: transparent;
border-radius: 4px;
background-color: #fff;
box-shadow: 0 2px 5px 0 rgba(0,0,0,0.05);
overflow: hidden;
width: 100%;
text-align: center;
font-size: 0rem;"><img class="im" alt="<?=$post['productname']?>" src="<?php echo base_url($post['mainimage']);?>" style="direction: ltr;
color: inherit;
-webkit-tap-highlight-color: transparent;
text-align: center;
font-size: 0rem;
box-sizing: border-box;
border-style: none;
max-width: 260px;
width: 70vw;"></a></div>
	<div class="itms" style="	color: #282828;

direction: ltr;
font-size: 0rem;
box-sizing: border-box;
flex-shrink: 0;
padding-left: 8px;
scroll-snap-align: center;
scroll-snap-stop: always;"><a href="#" class="mat-card fw" style="direction: ltr;
box-sizing: border-box;
color: inherit;
outline: 0;
display: inline-block;
text-decoration: none;
-webkit-tap-highlight-color: transparent;
border-radius: 4px;
background-color: #fff;
box-shadow: 0 2px 5px 0 rgba(0,0,0,0.05);
overflow: hidden;
width: 100%;
text-align: center;
font-size: 0rem;"><img class="im" alt="<?=$post['productname']?>" src="<?php echo base_url($post['mainimage']);?>" style="direction: ltr;
color: inherit;
-webkit-tap-highlight-color: transparent;
text-align: center;
font-size: 0rem;
box-sizing: border-box;
border-style: none;
max-width: 260px;
width: 70vw;"></a></div>

</div>

				</div>
			<!-- Product Info -->
			
					<div class="col-lg-6 " style="border:1px solid #ddd;box-shadow:5px 2px 2px #ddd;">
						<br/>
		
					<article class="cards _fw col8 -pvs -phn -mbs" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
">
<?php echo form_open(base_url('add-to-cart')) ?>
						<h1 class="-fs16 -phm" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
padding: 0;
margin: 0;
font-weight: 400;
padding-right: 16px;
font-size:19px;
padding-left: 16px;
"><?=$post['productname']?></h1>
						<div class="-fs12 -phm -pvxs -db" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
display: block;
padding-top: 4px;
padding-right: 16px;
padding-bottom: 4px;
padding-left: 16px;
font-size: .75rem;">Brand:<a class="_more -paxs -di" href="https://www.jumia.com.ng/samsung/" style="font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
font-size: .75rem;
box-sizing: border-box;
outline: 0;
background-color: rgba(0,0,0,0);
text-decoration: none;
-webkit-tap-highlight-color: transparent;
color: #264996;
display: inline;
padding: 4px;">Samsung</a>|
						<a class="_more -paxs -di" href="https://www.jumia.com.ng/led-lcd-tvs/samsung/" style="font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
font-size: .75rem;
box-sizing: border-box;
outline: 0;
background-color: rgba(0,0,0,0);
text-decoration: none;
-webkit-tap-highlight-color: transparent;
color: #264996;
display: inline;
padding: 4px;">Similar products from Samsung</a>
					</div>
				
					
					<div class="-phm -pvxs" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
padding-top: 4px;
padding-right: 16px;
padding-bottom: 4px;
padding-left: 16px;"><span dir="ltr" class="-fs20 -b -tal" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
unicode-bidi: isolate;
box-sizing: border-box;
font-weight: 700;
text-align: left;
font-size: 1.25rem;">₦ <?=$post['price']?>.00</span>
					</div>
					<div class="-df -j-bet -pts -plm -prs" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: flex;
justify-content: space-between;
padding-top: 8px;
padding-right: 8px;
padding-left: 16px;"><div class="-ptxs">
					</div>
					<div class="-df -i-ctr -fsh0"><a href="https://www.jumia.com.ng/customer/account/login/?tkPdpWl=SA948EL0R2U3BNAFAMZ-46830003" class="btn _def _rnd -dif -mls -pas -dif">
					
					</a></div></div>	<div class="product_quantity_container" style="margin-top:-30px;padding-top: 4px;
padding-right: 16px;
padding-bottom: 4px;
padding-left: 16px;">
							<span>Quantity</span>
							<div class="product_quantity clearfix">
								<input id="quantity_input"  type="text" value="1" name="qty" pattern="[0-9]*"/>
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
								</div>
								

							</div>
							<input type="hidden" value="<?=$post['product_code']?>" name="product_code"/>
							<section class="-mbxs -pts" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: block;
padding-top: 8px;
margin-bottom: 4px;">
<br/><?php if($size==NUll){?>
										<?php } else { ?>
<div class="product_size">
								<div class="product_size_title text-dark	" style="margin-top:-59px;">Select Size</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
								<?php foreach($size as $row) { ?>
									<li>
										<input type="radio" id="radio_<?php echo $row->Size; ?>"  name="product_radio" class="regular_radio radio_<?php echo $row->Size; ?>">
										<label  for="radio_<?php echo $row->Size; ?>"><?php echo $row->Size; ?></label>
									</li>
								<?php }?>

								</ul>
							</div>

								<?php } ?>
</section>


						</article>
						
						
						
						
						
						
								
                            
							


						</div>
					</div>
				</div>
			</div>
	<section class="card-w col8 -phn -pvs" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: block;
flex-basis: 100%;
max-width: 100%;
min-width: 100%;
width: 100%;
padding-top: 8px;
padding-right: 0;
padding-bottom: 8px;
padding-left: 0;">

			<h2 class="ttl -phm" style="font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
padding: 0;
margin: 0;
color: #75757a;
padding-bottom: 8px;
font-weight: 500;
text-transform: uppercase;
font-size: .75rem;
padding-right: 16px;
padding-left: 16px;">Product Description</h2>

<div class="card _fw -phs" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
background-color: #fff;
box-shadow: 0 2px 5px 0 rgba(0,0,0,0.05);
border-radius: 0;
width: 100%;
padding-right: 8px;
padding-left: 8px;">
			<article class="-df -pas" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: flex;
padding: 8px;">
			<div class="-df -fw-w -c-bet -mlm" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: flex;
align-content: space-between;
flex-wrap: wrap;
margin-left: 16px;">

<p style="font-size: 1.2rem;font-weight: 500;padding: 0;color:#333;color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
padding: 0;
margin: 0;
font-size: 1rem;">	<?=$post['description']?> </p>
	
									</div>
		</div>
			</article>			
			</section>
			<br/>
			<div class="container-fliud">
				<div class="row">
			<div class="col-lg-6">
		<section class="card-w col8 -phn -pvs" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: block;
flex-basis: 100%;
max-width: 100%;
min-width: 100%;
width: 100%;
padding-top: 8px;
padding-right: 0;
padding-bottom: 8px;
padding-left: 0;border-radius:10px;">
			<h2 class="ttl -phm" style="font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
padding: 0;
margin: 0;
color: #75757a;
padding-bottom: 8px;
font-weight: 500;
text-transform: uppercase;
font-size: .75rem;
padding-right: 16px;
padding-left: 16px;">Delivery &amp; Returns</h2>
<div class="card _fw -phs" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
background-color: #fff;
box-shadow: 0 2px 5px 0 rgba(0,0,0,0.05);
border-radius: 0;
width: 100%;
padding-right: 8px;
padding-left: 8px;">
			<article class="-df -pas" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: flex;
padding: 8px;"><svg class="ic -fsh0 -ba-gy1 -rad4 -fs0 -me-base" width="32" height="32" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
width: 32;
height: 32;
box-sizing: border-box;
fill: #282828;
border-radius: 4px;
border: 1px solid #ededed;
flex-shrink: 0;
align-self: baseline;
font-size: 0rem;"><use href="https://www.jumia.com.ng/assets_hy/images/i-icons.a78e5436.svg#truck"></use></svg>
			<div class="-df -fw-w -c-bet -mlm" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: flex;
align-content: space-between;
flex-wrap: wrap;
margin-left: 16px;"><h3 class="-fw -fs14 -m" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
padding: 0;
margin: 0;
width: 100%;
font-weight: 500;
font-size: 1rem;" >Delivery Information</h3><p class="-fs12" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
padding: 0;
margin: 0;
font-size: 1rem;">Normally delivered by Thursday 23 Jan. Please check exact dates in the Checkout page.
				<a class="_more -mlxs -di" target="_blank" href="https://www.jumia.com.ng/delivery-timelines/">See more</a></p></div>
			</article>			<article class="-df -pas" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: flex;
padding: 8px;"><svg class="ic -fsh0 -ba-gy1 -rad4 -fs0 -me-base" width="32" height="32" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
width: 32;
height: 32;
box-sizing: border-box;
fill: #282828;
border-radius: 4px;
border: 1px solid #ededed;
flex-shrink: 0;
align-self: baseline;
font-size: 0rem;"><use href="https://www.jumia.com.ng/assets_hy/images/i-icons.a78e5436.svg#truck"></use></svg>
			<div class="-df -fw-w -c-bet -mlm" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: flex;
align-content: space-between;
flex-wrap: wrap;
margin-left: 16px;"><h3 class="-fw -fs14 -m" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
padding: 0;
margin: 0;
width: 100%;
font-weight: 500;
font-size: 1rem;" >Return Policy</h3><p class="-fs12" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
padding: 0;
margin: 0;
font-size: 1rem;">Free return within 15 days for Jumia Mall items and 7 days for other eligible items
				<a class="_more -mlxs -di" target="_blank" href="https://www.jumia.com.ng/delivery-timelines/">See more</a></p></div>
			</article>
			</div></section></div>
<br/>
<div class="col-lg-6">
<section class="card-w col8 -phn -pvs" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: block;
flex-basis: 100%;
max-width: 100%;
min-width: 100%;
width: 100%;
padding-top: 8px;
padding-right: 0;
padding-bottom: 8px;
padding-left: 0;border-radius:10px;">
			<h2 class="ttl -phm" style="font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
padding: 0;
margin: 0;
color: #75757a;
padding-bottom: 8px;
font-weight: 500;
text-transform: uppercase;
font-size: .75rem;
padding-right: 16px;
padding-left: 16px;">Seller Info</h2>
<div class="card _fw -phs" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
background-color: #fff;
box-shadow: 0 2px 5px 0 rgba(0,0,0,0.05);
border-radius: 0;
width: 100%;
padding-right: 8px;
padding-left: 8px;">
			<article class="-df -pas" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: flex;
padding: 8px;">
			<div class="-df -fw-w -c-bet -mlm" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
display: flex;
align-content: space-between;
flex-wrap: wrap;
margin-left: 16px;"><h3 class="-fw -fs14 -m" style="color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
direction: ltr;
box-sizing: border-box;
padding: 0;
margin: 0;
width: 100%;
font-weight: 500;
font-size: 1rem;" >Seller name:<b>Balmain Designer </b></h3>
<hr/>
		<ul class="">
			<li>seller contact:</li>
			<li>seller contact:</li>
			<li>seller contact:</li>
												</ul>
		</div>
			</article>			
			</div></section></div></div>
<br/>
	
		<div class="bottom mat-card" style="padding:16px;color: #282828;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-size: .875rem;
direction: ltr;
box-sizing: border-box;
background-color: #fff;
box-shadow: 0 2px 7px 2px rgba(0,0,0,0.05);
height:70px;
padding-top: 8px;
padding-right: 16px;
padding-bottom: 8px;
padding-left: 16px;
margin-top: 8px;">

		<a class="mg pull-left mat-card" style="background: #2fce98;border-radius: .1875rem;color: #fff;cursor: pointer;font-size: 25px;font-weight: 600;padding: .5rem;text-align: center;box-shadow:1px 1px 2px #ddd;box-sizing: border-box;
-webkit-appearance: button;
margin: 0;
border-radius: 4px;
border: 0;
outline: 0;
padding: 16px;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-weight: 500;
text-transform: uppercase;
text-align: center;
line-height: 1rem;
font-size: .875rem;
-webkit-tap-highlight-color: transparent;
background: #2fce98;
color: #fff;
overflow: hidden;
display: flex;
align-items: center;
position: relative;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
padding-top: 12px;
padding-bottom: 12px;
transform: translate3d(0, 0, 0);
flex-grow: 1;height:50px;" href="/checkout/complete-order"><i class="fa fa-heart-o"></i> </a>
				<button type="submit"  class="mg pull-right mat-card  add-to-cart" style="background: #2fce98;border-radius:.1875rem;color: #fff;cursor: pointer;font-size: 25px;font-weight:0;margin:0;padding: .5rem;text-align: center width:100%;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;direction: ltr;
box-sizing: border-box;
-webkit-appearance: button;
margin: 0;
border-radius: 4px;
border: 0;
outline: 0;
padding: 16px;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Arial,sans-serif;
font-weight: 500;
text-transform: uppercase;
text-align: center;
line-height: 1rem;
font-size: .875rem;
-webkit-tap-highlight-color: transparent;
background: #2fce98;
color: #fff;
overflow: hidden;
display: flex;
align-items: center;
position: relative;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
padding-top: 12px;
padding-bottom: 12px;
transform: translate3d(0, 0, 0);
flex-grow: 1;height:50px;"> <i class="fa fa-shopping-cart"></i> Add to cart</button>
					
		</div>
		<?php echo form_close(); ?>
	

            <?php }?>

            