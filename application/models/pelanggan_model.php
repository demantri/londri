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

        function edit_data($where,$table){		
            return $this->db->get_where($table,$where);
        }
     
        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
    }    
?>