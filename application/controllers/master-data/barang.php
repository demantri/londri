<?php 
  class barang extends CI_Controller
    {
      function __construct()
      {
        parent::__construct();	
        $this->load->model(array(
          'barang_model' => 'bm',
          'kategori_model' => 'kM',
          'londri_model' => 'lm'
        ));
        
        // if(!$this->session->userdata('login')){
        // 	redirect('');
        // }
      }

      public function index()
      {
          $data['page'] = 'Barang';
          $data['barang'] = $this->bm->_getData();
          $data['kategori'] = $this->kM->_getData();
          $data['data_v'] = $this->bm->_joinData();
          // print_r($data['barang']);exit;
          $this->template->load('index', 'master-data/barang/index', $data);
      }

      public function save()
      {
          $data = array(
            array(
                'field' => 'nama_barang',
                'label' => 'Nama Barang',
                'rules' => 'required',
                'errors' => array(
                    'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                )
            ),
            array(
                'field' => 'kategori_id',
                'label' => 'Kategori',
                'rules' => 'required',
                'errors' => array(
                    'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                )
            ),
            array(
                'field' => 'satuan',
                'label' => 'Satuan',
                'rules' => 'required',
                'errors' => array(
                    'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                )
            ),
            array(
                'field' => 'harga_pokok',
                'label' => 'Harga Pokok',
                'rules' => 'required',
                'errors' => array(
                    'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                )
            ),
            array(
                'field' => 'harga_jual',
                'label' => 'Harga Jual',
                'rules' => 'required',
                'errors' => array(
                    'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                )
            ),
            array(
                'field' => 'harga_grosir',
                'label' => 'Harga Grosir',
                'rules' => 'required',
                'errors' => array(
                    'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                )
            ),
            array(
                'field' => 'stok',
                'label' => 'Stok',
                'rules' => 'required',
                'errors' => array(
                    'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                )
            ),
            array(
                'field' => 'stok_min',
                'label' => 'Minimal Stok',
                'rules' => 'required',
                'errors' => array(
                    'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                )
            ),
            array(
                'field' => 'tgl_input',
                'label' => 'Tanggal Input',
                'rules' => 'required',
                'errors' => array(
                    'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                )
            ),
            array(
                'field' => 'tgl_update',
                'label' => 'Tanggal Update'
                // 'rules' => 'required',
                // 'errors' => array(
                //     'required'  => '%s harus diisi!'
                    // 'is_unique' => '%s sudah terdaftar.'
                // )
            ),
        );
        
        $this->form_validation->set_rules($data);

          if ($this->form_validation->run() == FALSE){
              $this->session->set_flashdata('flash');
              $this->index();
          }else{
              $this->session->set_flashdata('flash', 'Disimpan');
              $data = array (
                'nama_barang' => $this->input->post('nama_barang'),
                'kategori_id' => $this->input->post('kategori_id'),
                'satuan' => $this->input->post('satuan'),
                'harga_pokok' => str_replace('.', '', $this->input->post('harga_pokok')),
                'harga_jual' => str_replace('.', '', $this->input->post('harga_jual')),
                'harga_grosir' => str_replace('.', '', $this->input->post('harga_grosir')),
                'stok' => $this->input->post('stok'),
                'stok_min' => $this->input->post('stok_min'),
                'tgl_input' => $this->input->post('tgl_input'),
                'tgl_update' => $this->input->post('tgl_update'),
            );
              // print_r($data);exit;
            $this->db->insert('barang', $data);
            redirect('master-data/barang');
          }
      }

      function update(){
        $id = $this->input->post('id');
        $this->db->where('id', $id);

        $data=array(
          'id' => $_POST['id'],
          'nama_barang' => $_POST['nama_barang'],
          'kategori_id' => $_POST['kategori_id'],
          'satuan' => $_POST['satuan'],
          'harga_pokok' => $_POST['harga_pokok'],
          'harga_jual' => $_POST['harga_jual'],
          'harga_grosir' => $_POST['harga_grosir'],
          'stok' => $_POST['stok'],
          'stok_min' => $_POST['stok_min'],
          'tgl_input' => $_POST['tgl_input'],
          'tgl_update' => $_POST['tgl_update'],
        );
        // print_r($data);exit;

        $this->db->update('barang', $data);
        $this->session->set_flashdata('flash', 'Diubah');
        
        redirect('master-data/barang');
      }

      function delete($id){
        $where = array('id' => $id);
        $this->bm->hapus_data($where,'barang');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('master-data/barang');
      }
    }
?>