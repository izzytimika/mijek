<?php

class categorymerchant_model extends CI_model
{
    public function getAllcm()
    {
        $this->db->where('category_merchant.id_fitur != 0');
        $this->db->join('fitur', 'category_merchant.id_fitur = fitur.id_fitur', 'left');
        return  $this->db->get('category_merchant')->result_array();
    }

    public function getfiturmerchant()
    {
        $this->db->where('id_fitur != 14');
        $this->db->where('id_fitur != 4');
        $this->db->where('id_fitur != 3');
        $this->db->where('id_fitur != 6');
        $this->db->where('id_fitur != 5');
        $this->db->where('id_fitur != 2');
        $this->db->where('id_fitur != 1');
        return  $this->db->get('fitur')->result_array();
    }

    public function tambahcm($data)
    {
        $this->db->insert('category_merchant', $data);
    }

    public function hapuscm($id)
    {
        $this->db->where('id_kategori_merchant', $id);
        $this->db->delete('category_merchant');
    }

    public function ubahcm($data, $id)
    {
         $this->db->set('foto_kategori', $data['icon']);
        $this->db->set('nama_kategori', $data['nama_kategori']);
        $this->db->set('id_fitur', $data['id_fitur']);
        $this->db->set('status_kategori', $data['status_kategori']);
        $this->db->where('id_kategori_merchant', $id);
        $this->db->update('category_merchant');
    }
}
