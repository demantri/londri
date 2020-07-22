<?php
	function format_option($arr,$id,$name){
		$option = '';
		foreach($arr as $data){
			$option .= '<option value="'.$data->$id.'">'.$data->$name.'</option>';
		}
		return $option;
	}