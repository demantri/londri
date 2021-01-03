<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'core/Error_404';
$route['translate_uri_dashes'] = FALSE;

$route['/'] = 'home';

// masterdata

// pelanggan
$route['pelanggan'] = 'master-data/pelanggan';
$route['pelanggan/add'] = 'master-data/pelanggan/add';
$route['pelanggan/save'] = 'master-data/pelanggan/save';
$route['pelanggan/edit/(:any)'] = 'master-data/pelanggan/edit/$1';
$route['pelanggan/update'] = 'master-data/pelanggan/update';
$route['pelanggan/delete/(:any)'] = 'master-data/pelanggan/delete/$1';

// list_cukur
$route['list_cukur'] = 'master-data/list_cukur';
$route['list_cukur/add'] = 'master-data/list_cukur/add';
$route['list_cukur/save'] = 'master-data/list_cukur/save';
$route['list_cukur/edit/(:any)'] = 'master-data/list_cukur/edit/$1';
$route['list_cukur/update'] = 'master-data/list_cukur/update';
$route['list_cukur/delete/(:any)'] = 'master-data/list_cukur/delete/$1';

// karyawan
$route['karyawan'] = 'master-data/karyawan';
$route['karyawan/add'] = 'master-data/karyawan/add';
$route['karyawan/save'] = 'master-data/karyawan/save';
$route['karyawan/edit/(:any)'] = 'master-data/karyawan/edit/$1';
$route['karyawan/update'] = 'master-data/karyawan/update';
$route['karyawan/delete/(:any)'] = 'master-data/karyawan/delete/$1';

// roles
$route['roles'] = 'master-data/roles';
$route['roles/add'] = 'master-data/roles/add';
$route['roles/save'] = 'master-data/roles/save';
$route['roles/edit/(:any)'] = 'master-data/roles/edit/$1';
$route['roles/update'] = 'master-data/roles/update';
$route['roles/delete/(:any)'] = 'master-data/roles/delete/$1';

// list_cukur
$route['list_cukur'] = 'master-data/list_cukur';
$route['list_cukur/add'] = 'master-data/list_cukur/add';
$route['list_cukur/save'] = 'master-data/list_cukur/save';
$route['list_cukur/edit/(:any)'] = 'master-data/list_cukur/edit/$1';
$route['list_cukur/update'] = 'master-data/list_cukur/update';
$route['list_cukur/delete/(:any)'] = 'master-data/list_cukur/delete/$1';

// barang
$route['barang'] = 'master-data/barang';
$route['barang/add'] = 'master-data/barang/add';
$route['barang/save'] = 'master-data/barang/save';
$route['barang/edit/(:any)'] = 'master-data/barang/edit/$1';
$route['barang/update'] = 'master-data/barang/update';
$route['barang/delete/(:any)'] = 'master-data/barang/delete/$1';

// kateogri
$route['kategori'] = 'master-data/kategori';
$route['kategori/add'] = 'master-data/kategori/add';
$route['kategori/save'] = 'master-data/kategori/save';
$route['kategori/edit/(:any)'] = 'master-data/kategori/edit/$1';
$route['kategori/update'] = 'master-data/kategori/update';
$route['kategori/delete/(:any)'] = 'master-data/kategori/delete/$1';




// events 
$route['event'] = 'calendar/events';
