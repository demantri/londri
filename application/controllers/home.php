<?php 
  class home extends CI_Controller
    {
      public function index()
      {
        $data['total'] = $this->home_model->jumlah_user();
        $data['member'] = $this->home_model->jumlah_member();

        // print_r($data['member']);exit;
  		  $this->template->load('template', 'home', $data);
  	  }
    }
?>