<?php 
  class member extends CI_Controller
    {
      function __construct()
      {
        parent::__construct();	
        $this->load->model(array(
          'member_model' => 'model',
          'pelanggan_model' => 'pm'
          
        ));
        
        // if(!$this->session->userdata('login')){
        // 	redirect('');
        // }
      }

      public function index()
      {
          $data['member'] = $this->model->getData();
          $data['a'] = $this->model->joinmember();
          // print_r($data['member']);exit;
          $this->template->load('template', 'master/member/viewmember', $data);
      }
      
      public function add()
      {
          $data['pelanggan'] = $this->pm->getData();
          $this->template->load('template', 'master/member/form', $data);
      }

      public function save()
      {
          $data = array(
            array(
                'field' => 'id_pelanggan',
                'label' => 'Nama pelanggan',
                'rules' => 'required|is_unique[member.id_pelanggan]
                ',
                'errors' => array(
                  'required' => '%s harus dipilih!',
                  'is_unique' => '%s sudah terdaftar'
                )
            ),
            array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s harus pilih!'
                )
            ),
            array(
                'field' => 'diskon',
                'label' => 'Diskon',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s harus diisi!'
                )
            ),
            array(
              'field' => 'tgl_daftar',
              'label' => 'Tanggal daftar',
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
              $this->db->insert('member', $_POST);
              redirect('master/member');
          }
      }

      function edit($id){
        $where = array('member.id' => $id);
        $data['member'] = $this->model->edit_data($where,'member')->result_array();
        // $data['pelanggan'] = $this->pm->getData();
        // $data['a'] = $this->model->joinmember();
        // print_r($data['member']);exit;

        $this->template->load('template', 'master/member/formEdit', $data);
      }

      function update(){
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $diskon = $this->input->post('diskon');
        $id_pelanggan = $this->input->post('id_pelanggan');
        $tgl_daftar = $this->input->post('tgl_daftar');
       
        $where = array(
          'id' => $id
        );
        $data = array(
          'status' => $status,
          'diskon' => $diskon,
          'id_pelanggan' => $id_pelanggan,
          'tgl_daftar' => $tgl_daftar
        );

        // print_r($data); exit;

        $this->model->update_data($where, $data, 'member');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('master/member');
      }

      function delete($id){
        $where = array('id' => $id);
        $this->model->hapus_data($where,'member');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('master/member');
      }
    }
?>