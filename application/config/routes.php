<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'core/Error_404';
$route['translate_uri_dashes'] = FALSE;

$route['/'] = 'home';

// masterdata

// pelanggan
$route['pelanggan'] = 'master/pelanggan';
$route['pelanggan/add'] = 'master/pelanggan/add';
$route['pelanggan/save'] = 'master/pelanggan/save';
$route['pelanggan/edit/(:any)'] = 'master/pelanggan/edit/$1';
$route['pelanggan/update'] = 'master/pelanggan/update';
$route['pelanggan/delete/(:any)'] = 'master/pelanggan/delete/$1';

// member
$route['member'] = 'master/member';
$route['member/add'] = 'master/member/add';
$route['member/save'] = 'master/member/save';
$route['member/edit/(:any)'] = 'master/member/edit/$1';
$route['member/update'] = 'master/member/update';
$route['member/delete/(:any)'] = 'master/member/delete/$1';




// role
$route['role'] = 'master/role';
