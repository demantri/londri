<?php 
  class pegawai extends CI_Controller
    {
      function __construct()
      {
        parent::__construct();	
        $this->load->model(array(
          'member_model' => 'mm',
          'pelanggan_model' => 'pm',
          'londri_model' => 'lm',
          'pegawai_model' => 'peg_m'
        ));
        
        // if(!$this->session->userdata('login')){
        // 	redirect('');
        // }
      }

      public function index()
      {
          $data['pegawai'] = $this->peg_m->getData();
        //   print_r($data['pegawai']);exit;
          $this->template->load('template', 'master/pegawai/viewpegawai', $data);
      }
      
      public function add()
      {
        //   $data['pelanggan'] = $this->pm->getData();
          $this->template->load('template', 'master/pegawai/form');
      }

      public function save()
      {
          $data = array(
            array(
                'field' => 'nama_pegawai',
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s harus diisi!'
                )
            ),
            array(
                'field' => 'alamat_pegawai',
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s harus diisi!'
                )
            ),
            array(
                'field' => 'telp_pegawai',
                'label' => 'Telp pegawai',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s harus diisi!'
                )
            )
            // array(
            //     'field' => 'foto',
            //     'label' => 'Foto',
            //     'rules' => 'required',
            //     'errors' => array(
            //         'required' => '%s harus diisi!'
            //     )
            // )
            
        );
        
        // print_r($data); exit;
        $this->form_validation->set_rules($data);

        $config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2999;
        // $config['file_name']            = 'foto';
        
		// $config['max_width']            = 1920;
		// $config['max_height']           = 1080;
        $config['encrypt_name']			= TRUE;
        
		$this->load->library('upload', $config);

          if ($this->form_validation->run() == FALSE){
              $this->session->set_flashdata('flash');
              $this->add();
          }else{
              if ($this->upload->do_upload('foto')) {
                  # code...
                //   $data['foto'] = $this->upload->data("file_name");
                $data = array('foto' => $this->upload->data());
                $foto = $data['foto']['file_name'];

                // $name = $this->input->post('name');
                //   print_r($foto);exit;
                //   $this->db->insert('pegawai', $data);
              }
              $_POST['foto'] = $data['foto']['file_name'];

              $this->session->set_flashdata('flash', 'Disimpan');
              $this->db->insert('pegawai', $_POST);
            //   print_r($_POST);exit;
              redirect('master/pegawai');
          }
      }

    //   function edit($id){
    //     $where = array('id' => $id);
    //     $data['londri'] = $this->lm->edit_data($where,'londri')->result_array();
    //     // $data['pelanggan'] = $this->pm->getData();
    //     // $data['a'] = $this->model->joinmember();
    //     // print_r($data['member']);exit;

    //     $this->template->load('template', 'master/londri/formEdit', $data);
    //   }

    //   function update(){
    //     $id = $this->input->post('id');
    //     $jenis_londri = $this->input->post('jenis_londri');
    //     $satuan = $this->input->post('satuan');
    //     $harga = $this->input->post('harga');
       
    //     $where = array(
    //       'id' => $id
    //     );
    //     $data = array(
    //       'jenis_londri' => $jenis_londri,
    //       'satuan' => $satuan,
    //       'harga' => $harga
    //     );

    //     // print_r($data); exit;

    //     $this->model->update_data($where, $data, 'londri');
    //     $this->session->set_flashdata('flash', 'Diubah');
    //     redirect('master/londri');
    //   }

    //   function delete($id){
    //     $where = array('id' => $id);
    //     $this->model->hapus_data($where,'londri');
    //     $this->session->set_flashdata('flash', 'Dihapus');
    //     redirect('master/londri');
    //   }
    }
?>