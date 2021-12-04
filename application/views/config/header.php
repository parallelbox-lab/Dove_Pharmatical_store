<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= $desc; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1462f3">
    <link rel="icon" type="image/png"  href="<?php echo base_url();?>asset/img/dove.jpg">
<meta name="google-site-verification" content="jFNH2u4fDzQGrJZf3oyozruTsM-hyRT9DyYeCfpLaXc" />
<meta name="robots" content="index">
    <link rel="canonical" href="<?php echo base_url();?>">
    
    <title><?= $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/iconic/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
    
</head>
<body class="body">
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="<?php echo base_url();?>asset/img/dove.jpg" alt="Dove pharmaticals logo">
            </div>
        </div>
    </div>
</div>

<!-- start header area -->
<header>
    <div class="header-container">

        <div class="logo-holder">
            <a href="<?php echo base_url();?>" class="logo"><img src="<?php echo base_url();?>asset/img/dove.jpg" alt="Dove pharmaticals logo"></a>
        </div>
        <div class="nav-container">
            <ul class="ul" id="nav">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li class="dropdown"><a href="<?= base_url();?>products" class="dropbtn">Products <i class="zmdi zmdi-chevron-down"></i></a>
               <ul id="Dropdown" class="dropdown-content" style="display:none">
               <li><a href="#" class="a">Link 1</a></li>
             <li><a href="#" class="a">Link 2</a></li>
              <li><a href="#" class="a">Link 3</a></li>
         </ul>
                </li>
                <li><a href="<?php echo base_url();?>services">Services</a></li>
                <li><a href="<?php echo base_url();?>about-us">About us</a></li>
                <li><a href="<?php echo base_url();?>contact">Contact us</a></li>
                


            </ul>
        </div>
        <!-- Desktop nav  -->
        
        <div class="nav-icons">
            <ul class="ul">
            <?php if($this->session->userdata('id'))
                    {?>  
                            <li class="dropdown"><a  data-toggle="dropdown" class="mr-1" style="color:orange">  
        <i class="zmdi zmdi-account-circle"></i> <span style="font-weight:800">My Account</span></a>
        <div  class="dropdown-menu shadow-lg p-1 mb-5 bg-white rounded">
            <a href="#" class="dropdown-item">Welcome <?= $account['fullname'];?> </a>
            <a href="<?= base_url();?>dashboard/my-orders" class="dropdown-item">My orders</a>
            <a href="<?= base_url();?>dashboard/address" class="dropdown-item">My Address</a>
            <a href="<?= base_url();?>dashboard/change-password" class="dropdown-item">Change Password</a>
            <a href="<?= base_url();?>dashboard/edit-profile" class="dropdown-item">Edit Profile</a>
            <a href="<?= base_url();?>dashboard/logout" class="dropdown-item"><i class="zmdi zmdi-power"></i> Logout</a>
        </div>
        </li>
        <?php    } else{ ?>
            <li><a href="<?= base_url();?>login" class=" mr-1">  
        <i class="zmdi zmdi-account-circle"></i> <span style="font-weight:800">login</span></a></li>
        <?php }?>
              <!--  <li><a class="header__search-btn"><i class="zmdi zmdi-search"></i></a></li>-->
                <li><a href="<?php echo base_url('show-cart');?>"><span style="font-weight:800">Cart</span> <i class="zmdi zmdi-shopping-cart"><sup><?php $cart_items =  $this->cart->total_items();
													if($cart_items>0){
												?> 
				 <?php echo $cart_items;?>
				 <?php }else{?>
				 0
				<?php } ?></sup></i></a></li>
            </ul>
        </div>
<!-- Mobile display  -->
        <div class="right-tag">
              <div>
                     <a class="header__search-btn"><i class="zmdi zmdi-search"></i></a>
                 </div>      
        <?php if($this->session->userdata('id'))
                    {?>  
                                            <div class="dropdown">

                           <a data-toggle="dropdown" class=" mr-1" style="color:orange">  
        <i class="zmdi zmdi-account-circle"></i></a>
        <div class="dropdown-menu shadow-lg p-3 mb-5 bg-white rounded">
            <a href="#"  class="dropdown-item text-dark" style="font-size:16px;">Welcome <?= $account['fullname'];?> </a>
            <hr>
            <a href="<?= base_url();?>dashboard/my-orders"  class="dropdown-item text-dark" style="font-size:16px;">My orders</a>
                        <hr>
             <a href="<?= base_url();?>dashboard/address"  class="dropdown-item text-dark" style="font-size:16px;">My Address</a>
                         <hr>
            <a href="<?= base_url();?>dashboard/change-password"  class="dropdown-item text-dark" style="font-size:16px;">Change Password</a>
                        <hr>
            <a href="<?= base_url();?>dashboard/edit-profile"  class="dropdown-item text-dark" style="font-size:16px;">Edit Profile</a>
                        <hr>
            <a href="<?= base_url();?>dashboard/logout" style="font-size:16px;"><i class="zmdi zmdi-power"></i> Logout</a>
            </div>
            </div>
        <?php    } else{ ?>
        <div>
            <a href="<?= base_url();?>login" class=" mr-1">  
        <i class="zmdi zmdi-account-circle"></i> </a>
                </div>
                 
        <?php }?>
               
          <div>
            <a href="<?php echo base_url('show-cart');?>" class="mr-2 ">
                <i class="zmdi zmdi-shopping-cart"><sup class="">	<?php $cart_items =  $this->cart->total_items();
													if($cart_items>0){
												?> 
												 <?php echo $cart_items;?>
												 <?php }else{?>
												  0
												 <?php } ?></sup>
                </i>
            </a>
            </div>
<div>
            <button class="mobile-btn hamburger mr-2" id="toggle">
        <i class="zmdi zmdi-menu icons"></i>
        </button>
        </div>
        </div>


    </div>

		
		<!-- end header search -->

</header>
	<!-- end header -->
