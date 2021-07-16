<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Callback extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
			$this->load->model('login_model', 'login');
		
	}

	function index()
	{
	 $res = file_get_contents('php://input');
    //if (!empty($res)) {
        
        $data = json_decode($res, TRUE);
        $paymentCode        = $data['amount'];
        
       
        $ownerid        = $data['external_id'];
        
        $this->db->select('*');
       
        $this->db->where('external_id', $ownerid );
        $statusnya = $this->db->get('wallet')->row_array();

       if($statusnya['type']=='topup'){

        $this->db->set('status', 1);
        $this->db->where('external_id', $statusnya['external_id']);
        $this->db->update('wallet');
        
       $this->db->select('mitra.nama_mitra');
        $this->db->select('driver.nama_driver');
        $this->db->select('pelanggan.fullnama');
        $this->db->select('saldo.saldo as saldolama');
        $this->db->join('mitra', 'saldo.id_user = mitra.id_mitra', 'left');
        $this->db->join('driver', 'saldo.id_user = driver.id', 'left');
        $this->db->join('pelanggan', 'saldo.id_user = pelanggan.id', 'left');
        $this->db->where('id_user', $statusnya['id_user']);
        $saldolama = $this->db->get('saldo')->row_array();

        $saldobaru = $saldolama['saldolama'] + $statusnya['jumlah'];

        $this->db->set('saldo', $saldobaru);
        $this->db->where('id_user', $statusnya['id_user']);
        $this->db->update('saldo');
       }else if($statusnya['type']=='withdraw'){
             $this->db->set('status', 1);
        $this->db->where('external_id', $statusnya['external_id']);
        $this->db->update('wallet');
        
       $this->db->select('mitra.nama_mitra');
        $this->db->select('driver.nama_driver');
        $this->db->select('pelanggan.fullnama');
        $this->db->select('saldo.saldo as saldolama');
        $this->db->join('mitra', 'saldo.id_user = mitra.id_mitra', 'left');
        $this->db->join('driver', 'saldo.id_user = driver.id', 'left');
        $this->db->join('pelanggan', 'saldo.id_user = pelanggan.id', 'left');
        $this->db->where('id_user', $statusnya['id_user']);
        $saldolama = $this->db->get('saldo')->row_array();

        $saldobaru = $saldolama['saldolama'] - $statusnya['jumlah'];

        $this->db->set('saldo', $saldobaru);
        $this->db->where('id_user', $statusnya['id_user']);
        $this->db->update('saldo');
       }
        
        return $res;
	}

	
}
