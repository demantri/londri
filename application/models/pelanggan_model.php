<?php 
    class pelanggan_model extends CI_model
    {
        function tambah($table, $data)
        {
            $this->db->insert($table, $data);
        }

        function getData() 
        {
            $query = $this->db->get('pelanggan');
            return $query->result_array();
        }

        // function getData() 
        // {
        //     $query= $this->db->query('SELECT COUNT(nama) AS jumlah FROM pelanggan');
        //     return $query->result_array();
        // }
    }
    
?>