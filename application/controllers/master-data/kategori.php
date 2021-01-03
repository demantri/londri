<?php 
  class kategori extends CI_Controller
    {
      function __construct()
      {
        parent::__construct();	
        $this->load->model(array(
          'kategori_model' => 'model',
          'pelanggan_model' => 'pm',
          'londri_model' => 'lm'
        ));
        
        // if(!$this->session->userdata('login')){
        // 	redirect('');
        // }
      }

      public function index()
      {
        $data['page'] = 'Kategori';
        $data['kategori'] = $this->model->_getData();
          // print_r($data['kategori']);exit;
        $this->template->load('index', 'master-data/kategori/index', $data);
      }

      public function save()
      {
          $data = array(
            array(
                'field' => 'nama_kategori',
                'label' => 'Kategori',
                'rules' => 'required',
                'errors' => array(
                    'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                )
            )
        );
        
        $this->form_validation->set_rules($data);

          if ($this->form_validation->run() == FALSE){
              $this->session->set_flashdata('flash');
              $this->index();
          }else{
              $this->session->set_flashdata('flash', 'Disimpan');
              $this->db->insert('kategori', $_POST);
              redirect('master-data/kategori');
          }
          // print_r($_POST);exit;
      }

      function update(){
        $id = $this->input->post('id');
        $this->db->where('id', $id);

        $data=array(
          'id' => $_POST['id'],
          'nama_kategori' => $_POST['nama_kategori'],
        );
        // print_r($data);exit;

        $this->db->update('kategori', $data);
        $this->session->set_flashdata('flash', 'Diubah');
        
        redirect('master-data/kategori');
      }

      function delete($id){
        $where = array('id' => $id);
        $this->model->hapus_data($where,'kategori');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('master-data/kategori');
      }
    }
?>