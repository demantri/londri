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
          $data = array(
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => array(
                'required' => '%s harus diisi'
                )
            ),
            array(
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s harus diisi!'
                )
            ),
            array(
                'field' => 'no_telp',
                'label' => 'No Telp',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s harus diisi!'
                )
            )
        );
        
        $this->form_validation->set_rules($data);

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

      function edit($id){
        $where = array('id' => $id);
        $data['pelanggan'] = $this->model->edit_data($where,'pelanggan')->result();
        // var_dump($data['pelanggan']);exit;
        $this->template->load('template', 'master/pelanggan/formEdit', $data);
      }

      function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
       
        $where = array(
          'id' => $id
        );
        $data = array(
          'nama' => $nama,
          'alamat' => $alamat,
          'no_telp' => $no_telp
        );

        $this->model->update_data($where, $data, 'pelanggan');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('master/pelanggan');
      }

      function delete($id){
        $where = array('id' => $id);
        $this->model->hapus_data($where,'pelanggan');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('master/pelanggan');
      }
    }
?>