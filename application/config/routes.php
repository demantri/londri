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

// londri
$route['londri'] = 'master/londri';
$route['londri/add'] = 'master/londri/add';
$route['londri/save'] = 'master/londri/save';
$route['londri/edit/(:any)'] = 'master/londri/edit/$1';
$route['londri/update'] = 'master/londri/update';
$route['londri/delete/(:any)'] = 'master/londri/delete/$1';

// pegawai
$route['pegawai'] = 'master/pegawai';
$route['pegawai/add'] = 'master/pegawai/add';
$route['pegawai/save'] = 'master/pegawai/save';
$route['pegawai/edit/(:any)'] = 'master/pegawai/edit/$1';
$route['pegawai/update'] = 'master/pegawai/update';
$route['pegawai/delete/(:any)'] = 'master/pegawai/delete/$1';



// role
$route['role'] = 'master/role';
$route['role/add'] = 'master/role/add';
$route['role/save'] = 'master/role/save';
$route['role/edit/(:any)'] = 'master/role/edit/$1';
$route['role/update'] = 'master/role/update';
$route['role/delete/(:any)'] = 'master/role/delete/$1';



// events 
$route['event'] = 'calendar/events';
