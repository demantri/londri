<?php 
    class home_model extends CI_model
    {
        function tambah($table, $data)
        {
            $this->db->insert($table, $data);
        }

        // function jumlah_user() 
        // {
        //     $this->db->select('*');
        //     $this->db->from('pelanggan');
        //     $query = $this->db->get();
        //     return $query->result_array();
        // }

        function jumlah_user() 
        {
            $query= $this->db->query('SELECT COUNT(nama) AS jumlah FROM pelanggan');
            return $query->result_array();
        }
    }
    
?>