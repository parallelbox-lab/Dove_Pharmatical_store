<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Main';
$route['appoinment'] = 'Appoinment_controller/appoinment';
$route['products'] = 'Product_controller/products';
$route['services'] = 'servicesController/services';
$route['contact'] = 'Main/contact';
//Admin routes
$route['cw12345login'] = 'Admin/login';
$route['cw12345admin'] = 'Admin/index';
$route['cw12345admin/products'] = 'Admin/products';
$route['cw12345admin/edit-product'] = 'Admin/edit';
$route['cw12345admin/delete'] = 'Admin/delete';
$route['cw12345admin/add-products'] = 'Admin/add_product';
$route['cw12345admin/add-admin'] = 'Admin/add_admin';
$route['cw12345admin/all-admin'] = 'Admin/all_admin';
$route['cw12345admin/edit/(:any)'] = 'Admin/edit/$1';
$route['cw12345admin/appoinments'] = 'Admin/appoinments';
$route['logout'] = 'Admin/logout';

// Cart Class
$route['add-to-cart'] = 'cart_controller/add_to_cart';
$route['show-cart'] = 'cart_controller/show_cart';
$route['delete-to-cart/(.+)'] = 'cart_controller/delete_to_cart/$1';
$route['update-cart-qty'] = 'cart_controller/update_cart_quantity';
$route['update-cart-qty-payment'] = 'cart_controller/update_cart_quantity_payment';
$route['delete-to-cart-payment/(.+)'] = 'cart_controller/delete_to_cart_payment/$1';

$route['products/(.+)'] = 'Product_controller/product_detail/$1';

// product route
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
?>