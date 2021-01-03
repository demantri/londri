<?php 
  class pelanggan extends CI_Controller
    {
        function __construct(){
            parent::__construct();	
            $this->load->model('pelanggan_model', 'model');
        }

        public function index()
        {
            $data['pelanggan'] = $this->db->get("pelanggan")->result();
            $this->template->load('index', 'master-data/pelanggan/index', $data);
        }

        public function save()
        {
            $data = array(
                array(
                    'field' => 'nama_pelanggan',
                    'label' => 'Nama pelanggan',
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
                $this->session->set_flashdata('flash');
                $this->index();
            }else{
                $this->session->set_flashdata('flash', 'Disimpan');
                // $this->session->set_flashdata('success_message', show_alert('<i class="fa fa-check"></i><strong>Berhasil!</strong> Data tersimpan.','success'));
                $this->db->insert('pelanggan', $_POST);
                redirect('pelanggan');
            }
        }

        function edit($id){
            $where = array('id' => $id);
            $data['pelanggan'] = $this->model->edit_data($where,'pelanggan')->result();
            // var_dump($data['pelanggan']);exit;
            $this->template->load('index', 'master/pelanggan/formEdit', $data);
        }

        function update(){
            $id = $this->input->post('id');
            $nama_pelanggan = $this->input->post('nama_pelanggan');
            $no_telp = $this->input->post('no_telp');
            $alamat = $this->input->post('alamat');
        
            $where = array(
            'id' => $id
            );
            $data = array(
            'nama_pelanggan' => $nama_pelanggan,
            'alamat' => $alamat,
            'no_telp' => $no_telp
            );

            $this->model->update_data($where, $data, 'pelanggan');
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pelanggan');
        }

        function delete($id){
            $where = array('id' => $id);
            $this->model->hapus_data($where,'pelanggan');
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('pelanggan');
        }
    }
?>