<?php 
  class home extends CI_Controller
    {
      public function index()
      {
        $data['total'] = $this->home_model->jumlah_user();
        // print_r($total);
  		  $this->template->load('template', 'home', $data);
  	  }
    }
?>