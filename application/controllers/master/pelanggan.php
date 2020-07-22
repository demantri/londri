<?php 
  class pelanggan extends CI_Controller
    {
      function __construct(){
        parent::__construct();	
        $this->load->model('pelanggan_model', 'model');
        // if(!$this->session->userdata('login')){
        // 	redirect('');
        // }
      }

      public function index()
      {
        //   $data['list'] = "SELECT * FROM pelanggan";
          $data['pelanggan'] = $this->model->getData();
          // print_r($data['pelanggan']);exit;
          $this->template->load('template', 'master/pelanggan/viewPelanggan', $data);
      }
      
      public function add()
      {
        $this->template->load('template', 'master/pelanggan/form');
      }

      public function save(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
    
        // $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
        // $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
            $this->add();
        }else{
            $this->db->insert('pelanggan', $_POST);
            redirect('master/pelanggan');
        }
      } 
    }
?>