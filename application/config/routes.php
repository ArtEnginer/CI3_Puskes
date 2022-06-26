<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['administrator'] = 'superadmin/login';
$route['artikel'] = 'blog';
$route['artikel'] = 'blog/index';
$route['artikel/(:any)'] = 'blog/detail/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8
