<?php 
    class kategori_model extends CI_model
    {
        function tambah($table, $data)
        {
            $this->db->insert($table, $data);
        }

        function _getData() 
        {
            $query = $this->db->get('kategori');
            return $query->result_array();
        }

        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
    } 
?>