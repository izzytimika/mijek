<?php

class Service_model extends CI_model
{
    public function getAllservice()
    {
        $this->db->select('voucher.nilai');
        // $this->db->select('driver_job.*');
        $this->db->select('fitur.*');
        $this->db->order_by('id_fitur', 'ASC');
        $this->db->join('voucher', 'fitur.id_fitur = voucher.untuk_fitur', 'left');

        return  $this->db->get('fitur')->result_array();
    }

    public function getAlldriverjob()
    {
        return  $this->db->get('driver_job')->result_array();
    }


    public function getcurrency()
    {
        $this->db->select('app_currency as duit');
        $this->db->where('id', '1');
        return $this->db->get('app_settings')->row_array();
    }

    public function getfiturbyid($id)
    {
        $this->db->select('voucher.nilai');
        $this->db->select('fitur.*');
        $this->db->join('voucher', 'fitur.id_fitur = voucher.untuk_fitur', 'left');
        $this->db->where('id_fitur', $id);
        return $this->db->get('fitur')->row_array();
    }

    public function ubahdatafitur($data)
    {
        $this->db->set('icon', $data['icon']);
        $this->db->set('fitur', $data['fitur']);
        $this->db->set('biaya', $data['biaya']);
        $this->db->set('keterangan_biaya', $data['keterangan_biaya']);
        $this->db->set('komisi', $data['komisi']);
        $this->db->set('driver_job', $data['driver_job']);
        $this->db->set('biaya_minimum', $data['biaya_minimum']);
        $this->db->set('jarak_minimum', $data['jarak_minimum']);
        $this->db->set('wallet_minimum', $data['wallet_minimum']);
        $this->db->set('keterangan', $data['keterangan']);
        $this->db->set('active', $data['active']);

        $this->db->where('id_fitur', $data['id_fitur']);
        $this->db->update('fitur');

        $this->db->set('nilai', $data['nilai']);
        $this->db->where('untuk_fitur', $data['id_fitur']);
        $this->db->update('voucher');
    }
}
