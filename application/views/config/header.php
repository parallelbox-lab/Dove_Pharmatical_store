<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dove Pharmaticals & Equipments</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/iconic/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
</head>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="<?php echo base_url();?>asset/img/dove.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<!-- start header area -->
<header>
    <div class="header-container">

        <div class="logo-holder">
            <a href="<?php echo base_url();?>" class="logo"><img src="<?php echo base_url();?>asset/img/dove.jpg" alt=""></a>
        </div>
        <div class="nav-container">
            <ul class="ul" id="Menulist">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li class="dropdown-li"><a onclick="dropDown()" class="dropbtn">Products <i class="zmdi zmdi-chevron-down"></i></a>
                <div id="myDropdown" class="dropdown-content">
                <a href="#" class="a">Link 1</a>
                <a href="#" class="a">Link 2</a>
                <a href="#" class="a">Link 3</a>
          </div>
                </li>
                <li><a href="<?php echo base_url();?>services">Services</a></li>
                <li><a href="#about-us">About us</a></li>
                <li><a href="<?php echo base_url();?>contact">Contact us</a></li>


            </ul>
        </div>
        <div class="nav-icons">
            <ul class="ul">
                <li><a class="js-show-modal-search"><i class="zmdi zmdi-search"></i></a></li>
                <li><a href="<?php echo base_url('show-cart');?>"><i class="zmdi zmdi-shopping-cart"><sup><?php $cart_items =  $this->cart->total_items();
													if($cart_items>0){
												?> 
				 <?php echo $cart_items;?>
				 <?php }else{?>
				 0
				<?php } ?></sup></i></a></li>
            </ul>
        </div>

        <div class="right-tag">
      <a class="js-show-modal-search mr-1"><i class="zmdi zmdi-search"></i></a>

          
            <a href="<?php echo base_url('show-cart');?>" class="mr-2 ">
                <i class="zmdi zmdi-shopping-cart"><sup class="ml-1">	<?php $cart_items =  $this->cart->total_items();
													if($cart_items>0){
												?> 
												 <?php echo $cart_items;?>
												 <?php }else{?>
												  0
												 <?php } ?></sup>
                </i>
            </a>

            <button class="mobile-btn hamburger mr-2 " id="toggle">
        <i class="zmdi zmdi-menu"></i>
        </button>
        </div>


    </div>

			<!-- Modal Search -->
            <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
<i class="zmdi zmdi-close"></i>
            </button>

				<form class="wrap-search-header flex-w p-l-15">
					<input class="plh3" type="text" name="search" placeholder="Search...">
                    <button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
				</form>
			</div>
		</div>

</header>