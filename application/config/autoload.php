<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array('database');

$autoload['libraries'] = array('database','form_validation','session','template','databaseLib', 'pagination', 'tcpdf');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','monthname','formatrp','prefix','formatoption');

$autoload['config'] = array('custom');

$autoload['language'] = array();

$autoload['model'] = array('home_model', 'pelanggan_model');