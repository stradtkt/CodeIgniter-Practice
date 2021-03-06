<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'products';
$route['products/new'] = 'products/new_product';
$route['products/create'] = 'products/create_product';
$route['products/finished'] = 'products/finished_product';
$route['products/edit/(:num)'] = 'products/edit_product/$1';
$route['users/new'] = 'users/new_user';
$route['products'] = 'products';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
