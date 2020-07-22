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

// role
$route['role'] = 'master/role';
