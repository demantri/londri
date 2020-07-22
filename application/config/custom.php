<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// laba rugi
$config['laba_rugi'] = array(
	array(
		'name' => 'Pendapatan Penjualan',
		'component' => array('112','111','113'),
		'sifat' => '+'),

	array(
		'name' => 'Harga Pokok Penjualan',
		'component' => array('112','111','113'),
		'sifat' => '-'),
	array(
		'name' => 'Beban Operasi',
		'component' => array('112','111','113'),
		'sifat' => '+'),
	array(
		'name' => 'Pendapatan dan Keuntungan Lain Lain',
		'component' => array('112','111','113'),
		'sifat' => '+'),
	array(
		'name' => 'Beban dan kerugian lain lain',
		'component' => array('112','111','113'),
		'sifat' => '-'),
	// test komponen beranak
	array(
		'name' => 'Komponen Beranak',
		'component' => array(
			array(
				'parent' => '112',
				'child' => array('113','114')),
			'113','114'),
		'sifat' => '-'),
);