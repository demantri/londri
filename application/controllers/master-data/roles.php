<?php 
  class roles extends CI_Controller
    {
        function __construct(){
            parent::__construct();	
            $this->load->model('roles_model', 'model');
        }

        public function index()
        {
            $data['roles'] = $this->db->get("role")->result();
            $this->template->load('index', 'master-data/roles/index', $data);
        }

        public function save()
        {
            $data = array(
                array(
                    'field' => 'roles',
                    'label' => 'Roles',
                    'rules' => 'required|is_unique[role.roles]',
                    'errors' => array(
                    'required' => '%s harus diisi',
                    'is_unique' => '%s sudah terdaftar.'
                    )
                ),
            );
            
            $this->form_validation->set_rules($data);

            if ($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('flash');
                $this->index();
            }else{
                $this->session->set_flashdata('flash', 'Disimpan');
                $this->db->insert('role', $_POST);
                redirect('roles');
            }
        }

        // function edit($id){
        //     $where = array('id' => $id);
        //     $data['pelanggan'] = $this->model->edit_data($where,'pelanggan')->result();
        //     // var_dump($data['pelanggan']);exit;
        //     $this->template->load('index', 'master/pelanggan/formEdit', $data);
        // }

        function update(){
            $id = $this->input->post('id');
            $roles = $this->input->post('roles');
        
            $where = array(
            'id' => $id
            );
            $data = array(
            'roles' => $roles,
            );

            $this->model->update_data($where, $data, 'role');
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('roles');
        }

        function delete($id){
            $where = array('id' => $id);
            $this->model->hapus_data($where,'role');
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('roles');
        }
    }
?>