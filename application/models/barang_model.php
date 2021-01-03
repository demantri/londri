<?php 
    class barang_model extends CI_model
    {
        function tambah($table, $data)
        {
            $this->db->insert($table, $data);
        }

        function _getData() 
        {
            $query = $this->db->get('barang');
            return $query->result_array();
        }

        function _joinData()
        {
            $query = $this->db->select('barang.id, nama_barang, satuan, harga_pokok, harga_jual, harga_grosir, stok, nama_kategori')
            ->from('barang')
            ->join('kategori', 'kategori.id = barang.kategori_id')
            ->get();
            // print_r($query);exit;
            return $query->result_array();

        }

        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
    } 
?>