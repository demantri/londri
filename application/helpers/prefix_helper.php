<?php
	function get_prefix($table){
		$table = strtolower($table);
		switch ($table) {
		    case 'nota_penjualan':
		    	return 'PNJ';
		        break;
		    case 'nota_pembelian':
		    	return 'PMB';
		        break;
		    case 'item':
		    	return 'ITM';
		        break;
		    case 'mutasi':
		    	return 'MTS';
		        break;
		    case 'pinjaman':
		    	return 'PIN';
		        break;
		    case 'angsuran_pinjaman':
		    	return 'AGP';
		        break;
		    default:
		    	return 'TRX';
		}
	}