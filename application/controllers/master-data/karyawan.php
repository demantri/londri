<?php 
  class karyawan extends CI_Controller
    {
        function __construct(){
            parent::__construct();	
            $this->load->model('karyawan_model', 'model');
        }

        public function index()
        {   
            $this->db->select("karyawan.id, id_role, roles, nama_karyawan, email_karyawan, no_telp_karyawan, alamat_karyawan");
            $this->db->join("role", "role.id = karyawan.id_role");
            $this->db->order_by("karyawan.id");
            $data['karyawan'] = $this->db->get("karyawan")->result();

            $data['roles'] = $this->db->get("role")->result();
            $this->template->load('index', 'master-data/karyawan/index', $data);
        }

        public function save()
        {
            $data = array(
                array(
                    'field' => 'nama_karyawan',
                    'label' => 'Nama karyawan',
                    'rules' => 'required',
                    'errors' => array(
                    'required' => '%s harus diisi'
                    )
                ),
                array(
                    'field' => 'id_role',
                    'label' => 'Roles',
                    'rules' => 'required',
                    'errors' => array(
                    'required' => '%s harus diisi'
                    )
                ),
                array(
                    'field' => 'no_telp_karyawan',
                    'label' => 'No telepon',
                    'rules' => 'required',
                    'errors' => array(
                    'required' => '%s harus diisi'
                    )
                ),
                array(
                    'field' => 'alamat_karyawan',
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => array(
                    'required' => '%s harus diisi'
                    )
                ),
                array(
                    'field' => 'email_karyawan',
                    'label' => 'Email',
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
                $this->db->insert('karyawan', $_POST);
                redirect('karyawan');
            }
        }

        function update(){
            $id = $this->input->post('id');
            $nama_karyawan = $this->input->post('nama_karyawan');
            $id_role = $this->input->post('id_role');
            $no_telp_karyawan = $this->input->post('no_telp_karyawan');
            $alamat_karyawan = $this->input->post('alamat_karyawan');
            $email_karyawan = $this->input->post('email_karyawan');
        
            $where = array(
            'id' => $id
            );
            $data = array(
            'nama_karyawan' => $nama_karyawan,
            'id_role' => $id_role,
            'no_telp_karyawan' => $no_telp_karyawan,
            'alamat_karyawan' => $alamat_karyawan,
            'email_karyawan' => $email_karyawan,
            );

            $this->model->update_data($where, $data, 'karyawan');
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('karyawan');
        }

        function delete($id){
            $where = array('id' => $id);
            $this->model->hapus_data($where,'role');
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('roles');
        }
    }
?>