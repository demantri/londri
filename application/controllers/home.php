<?php 
  class home extends CI_Controller
    {
      public function index()
      {
  		  $this->template->load('index', 'home');
  	  }
    }
?>