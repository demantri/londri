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

      public function save()
      {
          $this->form_validation->set_rules('nama', 'Nama', 'required');
          $this->form_validation->set_rules('alamat', 'Jenis Barang', 'required|min_length[3]',
          array(
                  'required'      => '* %s tidak boleh kosong.',
                  'min_length'    => '* min 3 karakter.'
              ));

          if ($this->form_validation->run() == FALSE){
              // $this->session->set_flashdata('error_message', show_alert('<i class="fa fa-close"></i><strong>Data gagal tersimpan!</strong>','danger'));
              $this->session->set_flashdata('flash');
              // echo "<script>alert('Gagal tersimpan!');</script>";
              $this->add();
          }else{
              $this->session->set_flashdata('flash', 'Disimpan');

              // $this->session->set_flashdata('success_message', show_alert('<i class="fa fa-check"></i><strong>Berhasil!</strong> Data tersimpan.','success'));
              $this->db->insert('pelanggan', $_POST);
              redirect('master/pelanggan');
          }
      }
    }
?>