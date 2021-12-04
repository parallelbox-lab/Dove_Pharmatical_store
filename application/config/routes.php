<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//===== Client side url ======
$route['default_controller'] = 'Main';
$route['appoinment'] = 'Appoinment_controller/appoinment';
$route['products'] = 'Product_controller/products';
$route['about-us'] = 'Main/about_us';
$route['products/category/(:any)'] = 'Product_controller/products/$1';// $1 is category

$route['services'] = 'ServicesController/services';
$route['contact'] = 'Main/contact';
//Admin routes
$route['cw12345login'] = 'Admin/login';
$route['cw12345admin'] = 'Admin/index';
$route['cw12345admin/products'] = 'Admin/products';
$route['cw12345admin/edit-product'] = 'Admin/edit';
$route['cw12345admin/products/delete'] = 'Admin/delete_product';
$route['cw12345admin/add-products'] = 'Admin/add_product';
$route['cw12345admin/add-admin'] = 'Admin/add_admin';
$route['cw12345admin/add-category'] = 'Admin/add_category';
$route['cw12345admin/all-admin'] = 'Admin/all_admin';
$route['cw12345admin/edit/(:any)'] = 'Admin/edit/$1';
$route['cw12345admin/appoinments'] = 'Admin/appoinments';
$route['cw12345admin/categories'] = 'Admin/category';
$route['cw12345admin/save-product'] = 'Admin/insert_product';
$route['logout'] = 'Admin/logout';
//Checkout route
$route['checkout'] = 'Checkout_controller/checkout';
$route['place-order'] = 'Checkout_controller/place_order';
$route['order/thank-you'] = 'Checkout_controller/order_con';

//===================== Auth ============
$route['login'] = 'User_controller/login';
$route['Create-account'] = 'User_controller/register';
$route['reset-link'] = 'User_controller/reset_link';

$route['verify'] ="User_controller/verify";
$route['dashboard'] = "Dashboard_controller/index";
$route['dashboard/order'] = "Dashboard_controller/order";
$route['dashboard/edit-profile'] = "Dashboard_controller/editprofile";
$route['dashboard/address'] = "Dashboard_controller/address";
$route['dashboard/address/create'] = "Dashboard_controller/address_create";
$route['dashboard/address/edit'] = "Dashboard_controller/address_edit";
$route['dashboard/change-password'] = "Dashboard_controller/change_pass";
$route['dashboard/my-orders'] = "Dashboard_controller/order";


$route['dashboard/logout']  = 'User_controller/logout';

//Checkout
$route['checkout'] = 'Checkout_controller/checkout';
// Cart Class
$route['add-to-cart'] = 'Cart_controller/add_to_cart';
$route['show-cart'] = 'Cart_controller/show_cart';
$route['delete-to-cart/(.+)'] = 'Cart_controller/delete_to_cart/$1';
$route['update-cart-qty'] = 'Cart_controller/update_cart_quantity';
$route['update-cart-qty-payment'] = 'Cart_controller/update_cart_quantity_payment';
$route['delete-to-cart-payment/(.+)'] = 'Cart_controller/delete_to_cart_payment/$1';
$route['sitemap\.xml'] = "Sitemap_controller/index";

$route['products/(.+)'] = 'Product_controller/product_detail/$1';

// product route
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>