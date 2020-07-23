<?php 
    class member_model extends CI_model
    {
        function tambah($table, $data)
        {
            $this->db->insert($table, $data);
        }

        function getData() 
        {
            $query = $this->db->get('member');
            return $query->result_array();
        }

        function joinmember() 
        {
            $this->db->select('*');
            $this->db->from('pelanggan a');
            $this->db->join('member b', 'a.id = b.id_pelanggan');
            $query = $this->db->get();
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