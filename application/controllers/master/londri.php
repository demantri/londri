<?php 
  class londri extends CI_Controller
    {
      function __construct()
      {
        parent::__construct();	
        $this->load->model(array(
          'member_model' => 'model',
          'pelanggan_model' => 'pm',
          'londri_model' => 'lm'
        ));
        
        // if(!$this->session->userdata('login')){
        // 	redirect('');
        // }
      }

      public function index()
      {
          $data['londri'] = $this->lm->getData();
          $this->template->load('template', 'master/londri/viewlondri', $data);
      }
      
      public function add()
      {
        //   $data['pelanggan'] = $this->pm->getData();
          $this->template->load('template', 'master/londri/form');
      }

      public function save()
      {
          $data = array(
            array(
                'field' => 'jenis_londri',
                'label' => 'Jenis londri',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s harus diisi!'
                )
            ),
            array(
                'field' => 'satuan',
                'label' => 'Satuan',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s harus dipilih!'
                )
            ),
            array(
              'field' => 'harga',
              'label' => 'Harga',
              'rules' => 'required',
              'errors' => array(
                  'required' => '%s harus diisi!'
              )
          )

        );
        
        $this->form_validation->set_rules($data);

          if ($this->form_validation->run() == FALSE){
              $this->session->set_flashdata('flash');
              $this->add();
          }else{
              $this->session->set_flashdata('flash', 'Disimpan');
              $this->db->insert('londri', $_POST);
              redirect('master/londri');
          }
      }

      function edit($id){
        $where = array('id' => $id);
        $data['londri'] = $this->lm->edit_data($where,'londri')->result_array();
        // $data['pelanggan'] = $this->pm->getData();
        // $data['a'] = $this->model->joinmember();
        // print_r($data['member']);exit;

        $this->template->load('template', 'master/londri/formEdit', $data);
      }

      function update(){
        $id = $this->input->post('id');
        $jenis_londri = $this->input->post('jenis_londri');
        $satuan = $this->input->post('satuan');
        $harga = $this->input->post('harga');
       
        $where = array(
          'id' => $id
        );
        $data = array(
          'jenis_londri' => $jenis_londri,
          'satuan' => $satuan,
          'harga' => $harga
        );

        // print_r($data); exit;

        $this->model->update_data($where, $data, 'londri');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('master/londri');
      }

      function delete($id){
        $where = array('id' => $id);
        $this->model->hapus_data($where,'londri');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('master/londri');
      }
    }
?>