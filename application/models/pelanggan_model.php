<?php 
    class pelanggan_model extends CI_model
    {

        // private $_table = 'pelanggan';
        // public $id;
        // public $nama;
        // public $alamat;
        // // public $image = "default.jpg";
        // public $no_telp;


        function tambah($table, $data)
        {
            $this->db->insert($table, $data);
        }

        function getData() 
        {
            $query = $this->db->get('pelanggan');
            return $query->result_array();
        }

        // public function getAll()
        // {
        //    return $this->db->get($this->_table)->result();
        // }

        // public function getById($id)
        // {
        //     return $this->db->get_where($this->_table, ["id" => $id])->row();
        // }

        // public function update()
        // {
        //     $post = $this->input->post();
        //     $this->id = $post["id"];
        //     $this->nama = $post["nama"];
        //     $this->alamat = $post["alamat"];
        //     $this->no_telp = $post["no_telp"];
        //     return $this->db->update($this->_table, $this, array('id' => $post['id']));
        // }

        function edit_data($where,$table){		
            return $this->db->get_where($table,$where);
        }
     
        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }	
    }    
?>