<?php 
  class list_cukur extends CI_Controller
    {
        function __construct(){
            parent::__construct();	
            $this->load->model('list_cukur_model', 'model');
        }

        public function index()
        {
            $data['list'] = $this->db->get("list_cukur")->result();
            $this->template->load('index', 'master-data/list_cukur/index', $data);
        }

        // testing

        public function save()
        {
            $data = array(
                array(
                    'field' => 'nama_list',
                    'label' => 'List',
                    'rules' => 'required|is_unique[list_cukur.nama_list]',
                    'errors' => array(
                    'required' => '%s harus diisi',
                    'is_unique' => '%s sudah terdaftar.'
                    )
                ),
                array(
                    'field' => 'harga',
                    'label' => 'Harga',
                    'rules' => 'required',
                    'errors' => array(
                    'required' => '%s harus diisi'
                    )
                ),
            );
            
            $this->form_validation->set_rules($data);

            if ($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('flash');
                $this->index();
            }else{
                $this->session->set_flashdata('flash', 'Disimpan');
                $this->db->insert('list_cukur', $_POST);
                redirect('list_cukur');
            }
        }

        function update(){
            $id = $this->input->post('id');
            $nama_list = $this->input->post('nama_list');
            $harga = $this->input->post('harga');
        
            $where = array(
            'id' => $id
            );
            $data = array(
            'nama_list' => $nama_list,
            'harga' => $harga,
            );

            $this->model->update_data($where, $data, 'list_cukur');
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('list_cukur');
        }

        function delete($id){
            $where = array('id' => $id);
            $this->model->hapus_data($where,'role');
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('roles');
        }
    }
?>