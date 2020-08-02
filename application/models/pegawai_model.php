<?php 
    class pegawai_model extends CI_model
    {
        function tambah($table, $data)
        {
            $this->db->insert($table, $data);
        }

        function getData() 
        {
            $query = $this->db->get('pegawai');
            return $query->result_array();
        }

        // protected function _upload()
        // {
        //     $config['upload_path']          = './upload/foto/';
        //     $config['allowed_types']        = 'gif|jpg|png';
        //     $config['file_name']            = $this->id;
        //     $config['overwrite']			= true;
        //     $config['max_size']             = 1024; // 1MB
        //     // $config['max_width']            = 1024;
        //     // $config['max_height']           = 768;
        
        //     $this->load->library('upload', $config);
        
        //     if ($this->upload->do_upload('foto')) {
        //         return $this->upload->data("file_name");
        //     }
            
        //     return "no_image.jpg";
        // }

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