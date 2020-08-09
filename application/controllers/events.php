<?php 
  class events extends CI_Controller
    {
      function __construct()
      {
        parent::__construct();	
        $this->load->model(array(
        //   'role_model' => 'rm'
        ));
        
        // if(!$this->session->userdata('login')){
        // 	redirect('/');
        // }
      }

      public function index()
      {
        //   $data['role'] = $this->rm->getData();
            $data['result'] = $this->db->get("events")->result();
        //   print_r($data['result']);exit;
            foreach ($data['result'] as $key => $value) 
            {
                $data['data'][$key]['title'] = $value->title;
                $data['data'][$key]['start'] = $value->start_date;
                $data['data'][$key]['end'] = $value->end_date;
                $data['data'][$key]['backgroundColor'] = "#00a65a";
            }
          $this->template->load('template', 'events/index', $data);
      }
      
    //   public function add()
    //   {
    //       $this->template->load('template', 'master/role/form');
    //   }

    //   public function save()
    //   {
    //       $data = array(
    //         array(
    //             'field' => 'role',
    //             'label' => 'Role',
    //             'rules' => 'required|is_unique[role.role]
    //             ',
    //             'errors' => array(
    //               'required' => '%s harus diisi!',
    //               'is_unique' => '%s sudah terdaftar'
    //             )
    //         )
    //     );
        
    //     $this->form_validation->set_rules($data);

    //       if ($this->form_validation->run() == FALSE){
    //           $this->session->set_flashdata('flash');
    //           $this->add();
    //       }else{
    //           $this->session->set_flashdata('flash', 'Disimpan');
    //           $this->db->insert('role', $_POST);
    //           redirect('master/role');
    //       }
    //   }

    //   function edit($id){
    //     $where = array('role.id' => $id);
    //     $data['role'] = $this->rm->edit_data($where,'role')->result_array();
    //     // print_r($data);exit;
    //     $this->template->load('template', 'master/role/formEdit', $data);
    //   }

    //   function update(){
    //     $id = $this->input->post('id');
    //     $role = $this->input->post('role');
       
    //     $where = array(
    //       'id' => $id
    //     );
    //     $data = array(
    //       'role' => $role,
    //     );
    //     // print_r($data); exit;
    //     $this->rm->update_data($where, $data, 'role');
    //     $this->session->set_flashdata('flash', 'Diubah');
    //     redirect('master/role');
    //   }

    //   function delete($id){
    //     $where = array('id' => $id);
    //     $this->rm->hapus_data($where,'role');
    //     $this->session->set_flashdata('flash', 'Dihapus');
    //     redirect('master/role');
    //   }
    }
?>