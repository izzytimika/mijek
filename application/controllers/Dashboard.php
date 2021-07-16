<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ci_ext_model', 'ci_ext');
        /*
        $ci_ext = $this->ci_ext->ciext();
        if (!$ci_ext) {
            redirect(gagal);
        }
        */
     
        if ($this->session->userdata('user_name') == NULL && $this->session->userdata('password') == NULL) {
            redirect(base_url() . "login");
        }
        $this->load->model('Appsettings_model', 'app');
        $this->load->model('Dashboard_model', 'dashboard');
        $this->load->model('users_model', 'user');
        $this->load->model('driver_model', 'driver');
        $this->load->model('notification_model', 'notif');
        // $this->load->library('form_validation');
    }

    public function index()
    {

        $data['jan1'] = $this->dashboard->getTotalTransaksiBulanan(1, date('Y'), 1);
        $data['feb1'] = $this->dashboard->getTotalTransaksiBulanan(2, date('Y'), 1);
        $data['mar1'] = $this->dashboard->getTotalTransaksiBulanan(3, date('Y'), 1);
        $data['apr1'] = $this->dashboard->getTotalTransaksiBulanan(4, date('Y'), 1);
        $data['mei1'] = $this->dashboard->getTotalTransaksiBulanan(5, date('Y'), 1);
        $data['jun1'] = $this->dashboard->getTotalTransaksiBulanan(6, date('Y'), 1);
        $data['jul1'] = $this->dashboard->getTotalTransaksiBulanan(7, date('Y'), 1);
        $data['aug1'] = $this->dashboard->getTotalTransaksiBulanan(8, date('Y'), 1);
        $data['sep1'] = $this->dashboard->getTotalTransaksiBulanan(9, date('Y'), 1);
        $data['okt1'] = $this->dashboard->getTotalTransaksiBulanan(10, date('Y'), 1);
        $data['nov1'] = $this->dashboard->getTotalTransaksiBulanan(11, date('Y'), 1);
        $data['des1'] = $this->dashboard->getTotalTransaksiBulanan(12, date('Y'), 1);

        $data['jan2'] = $this->dashboard->getTotalTransaksiBulanan(1, date('Y'), 2);
        $data['feb2'] = $this->dashboard->getTotalTransaksiBulanan(2, date('Y'), 2);
        $data['mar2'] = $this->dashboard->getTotalTransaksiBulanan(3, date('Y'), 2);
        $data['apr2'] = $this->dashboard->getTotalTransaksiBulanan(4, date('Y'), 2);
        $data['mei2'] = $this->dashboard->getTotalTransaksiBulanan(5, date('Y'), 2);
        $data['jun2'] = $this->dashboard->getTotalTransaksiBulanan(6, date('Y'), 2);
        $data['jul2'] = $this->dashboard->getTotalTransaksiBulanan(7, date('Y'), 2);
        $data['aug2'] = $this->dashboard->getTotalTransaksiBulanan(8, date('Y'), 2);
        $data['sep2'] = $this->dashboard->getTotalTransaksiBulanan(9, date('Y'), 2);
        $data['okt2'] = $this->dashboard->getTotalTransaksiBulanan(10, date('Y'), 2);
        $data['nov2'] = $this->dashboard->getTotalTransaksiBulanan(11, date('Y'), 2);
        $data['des2'] = $this->dashboard->getTotalTransaksiBulanan(12, date('Y'), 2);

        $data['jan14'] = $this->dashboard->getTotalTransaksiBulanan(1, date('Y'), 14);
        $data['feb14'] = $this->dashboard->getTotalTransaksiBulanan(2, date('Y'), 14);
        $data['mar14'] = $this->dashboard->getTotalTransaksiBulanan(3, date('Y'), 14);
        $data['apr14'] = $this->dashboard->getTotalTransaksiBulanan(4, date('Y'), 14);
        $data['mei14'] = $this->dashboard->getTotalTransaksiBulanan(5, date('Y'), 14);
        $data['jun14'] = $this->dashboard->getTotalTransaksiBulanan(6, date('Y'), 14);
        $data['jul14'] = $this->dashboard->getTotalTransaksiBulanan(7, date('Y'), 14);
        $data['aug14'] = $this->dashboard->getTotalTransaksiBulanan(8, date('Y'), 14);
        $data['sep14'] = $this->dashboard->getTotalTransaksiBulanan(9, date('Y'), 14);
        $data['okt14'] = $this->dashboard->getTotalTransaksiBulanan(10, date('Y'), 14);
        $data['nov14'] = $this->dashboard->getTotalTransaksiBulanan(11, date('Y'), 14);
        $data['des14'] = $this->dashboard->getTotalTransaksiBulanan(12, date('Y'), 14);

        $data['jan5'] = $this->dashboard->getTotalTransaksiBulanan(1, date('Y'), 5);
        $data['feb5'] = $this->dashboard->getTotalTransaksiBulanan(2, date('Y'), 5);
        $data['mar5'] = $this->dashboard->getTotalTransaksiBulanan(3, date('Y'), 5);
        $data['apr5'] = $this->dashboard->getTotalTransaksiBulanan(4, date('Y'), 5);
        $data['mei5'] = $this->dashboard->getTotalTransaksiBulanan(5, date('Y'), 5);
        $data['jun5'] = $this->dashboard->getTotalTransaksiBulanan(6, date('Y'), 5);
        $data['jul5'] = $this->dashboard->getTotalTransaksiBulanan(7, date('Y'), 5);
        $data['aug5'] = $this->dashboard->getTotalTransaksiBulanan(8, date('Y'), 5);
        $data['sep5'] = $this->dashboard->getTotalTransaksiBulanan(9, date('Y'), 5);
        $data['okt5'] = $this->dashboard->getTotalTransaksiBulanan(10, date('Y'), 5);
        $data['nov5'] = $this->dashboard->getTotalTransaksiBulanan(11, date('Y'), 5);
        $data['des5'] = $this->dashboard->getTotalTransaksiBulanan(12, date('Y'), 5);

        $data['jan6'] = $this->dashboard->getTotalTransaksiBulanan(1, date('Y'), 6);
        $data['feb6'] = $this->dashboard->getTotalTransaksiBulanan(2, date('Y'), 6);
        $data['mar6'] = $this->dashboard->getTotalTransaksiBulanan(3, date('Y'), 6);
        $data['apr6'] = $this->dashboard->getTotalTransaksiBulanan(4, date('Y'), 6);
        $data['mei6'] = $this->dashboard->getTotalTransaksiBulanan(5, date('Y'), 6);
        $data['jun6'] = $this->dashboard->getTotalTransaksiBulanan(6, date('Y'), 6);
        $data['jul6'] = $this->dashboard->getTotalTransaksiBulanan(7, date('Y'), 6);
        $data['aug6'] = $this->dashboard->getTotalTransaksiBulanan(8, date('Y'), 6);
        $data['sep6'] = $this->dashboard->getTotalTransaksiBulanan(9, date('Y'), 6);
        $data['okt6'] = $this->dashboard->getTotalTransaksiBulanan(10, date('Y'), 6);
        $data['nov6'] = $this->dashboard->getTotalTransaksiBulanan(11, date('Y'), 6);
        $data['des6'] = $this->dashboard->getTotalTransaksiBulanan(12, date('Y'), 6);

        $data['jan10'] = $this->dashboard->getTotalTransaksiBulanan(1, date('Y'), 10);
        $data['feb10'] = $this->dashboard->getTotalTransaksiBulanan(2, date('Y'), 10);
        $data['mar10'] = $this->dashboard->getTotalTransaksiBulanan(3, date('Y'), 10);
        $data['apr10'] = $this->dashboard->getTotalTransaksiBulanan(4, date('Y'), 10);
        $data['mei10'] = $this->dashboard->getTotalTransaksiBulanan(5, date('Y'), 10);
        $data['jun10'] = $this->dashboard->getTotalTransaksiBulanan(6, date('Y'), 10);
        $data['jul10'] = $this->dashboard->getTotalTransaksiBulanan(7, date('Y'), 10);
        $data['aug10'] = $this->dashboard->getTotalTransaksiBulanan(8, date('Y'), 10);
        $data['sep10'] = $this->dashboard->getTotalTransaksiBulanan(9, date('Y'), 10);
        $data['okt10'] = $this->dashboard->getTotalTransaksiBulanan(10, date('Y'), 10);
        $data['nov10'] = $this->dashboard->getTotalTransaksiBulanan(11, date('Y'), 10);
        $data['des10'] = $this->dashboard->getTotalTransaksiBulanan(12, date('Y'), 10);

        $data['jan11'] = $this->dashboard->getTotalTransaksiBulanan(1, date('Y'), 11);
        $data['feb11'] = $this->dashboard->getTotalTransaksiBulanan(2, date('Y'), 11);
        $data['mar11'] = $this->dashboard->getTotalTransaksiBulanan(3, date('Y'), 11);
        $data['apr11'] = $this->dashboard->getTotalTransaksiBulanan(4, date('Y'), 11);
        $data['mei11'] = $this->dashboard->getTotalTransaksiBulanan(5, date('Y'), 11);
        $data['jun11'] = $this->dashboard->getTotalTransaksiBulanan(6, date('Y'), 11);
        $data['jul11'] = $this->dashboard->getTotalTransaksiBulanan(7, date('Y'), 11);
        $data['aug11'] = $this->dashboard->getTotalTransaksiBulanan(8, date('Y'), 11);
        $data['sep11'] = $this->dashboard->getTotalTransaksiBulanan(9, date('Y'), 11);
        $data['okt11'] = $this->dashboard->getTotalTransaksiBulanan(10, date('Y'), 11);
        $data['nov11'] = $this->dashboard->getTotalTransaksiBulanan(11, date('Y'), 11);
        $data['des11'] = $this->dashboard->getTotalTransaksiBulanan(12, date('Y'), 11);

        $data['jan12'] = $this->dashboard->getTotalTransaksiBulanan(1, date('Y'), 12);
        $data['feb12'] = $this->dashboard->getTotalTransaksiBulanan(2, date('Y'), 12);
        $data['mar12'] = $this->dashboard->getTotalTransaksiBulanan(3, date('Y'), 12);
        $data['apr12'] = $this->dashboard->getTotalTransaksiBulanan(4, date('Y'), 12);
        $data['mei12'] = $this->dashboard->getTotalTransaksiBulanan(5, date('Y'), 12);
        $data['jun12'] = $this->dashboard->getTotalTransaksiBulanan(6, date('Y'), 12);
        $data['jul12'] = $this->dashboard->getTotalTransaksiBulanan(7, date('Y'), 12);
        $data['aug12'] = $this->dashboard->getTotalTransaksiBulanan(8, date('Y'), 12);
        $data['sep12'] = $this->dashboard->getTotalTransaksiBulanan(9, date('Y'), 12);
        $data['okt12'] = $this->dashboard->getTotalTransaksiBulanan(10, date('Y'), 12);
        $data['nov12'] = $this->dashboard->getTotalTransaksiBulanan(11, date('Y'), 12);
        $data['des12'] = $this->dashboard->getTotalTransaksiBulanan(12, date('Y'), 12);

        $data['jan13'] = $this->dashboard->getTotalTransaksiBulanan(1, date('Y'), 13);
        $data['feb13'] = $this->dashboard->getTotalTransaksiBulanan(2, date('Y'), 13);
        $data['mar13'] = $this->dashboard->getTotalTransaksiBulanan(3, date('Y'), 13);
        $data['apr13'] = $this->dashboard->getTotalTransaksiBulanan(4, date('Y'), 13);
        $data['mei13'] = $this->dashboard->getTotalTransaksiBulanan(5, date('Y'), 13);
        $data['jun13'] = $this->dashboard->getTotalTransaksiBulanan(6, date('Y'), 13);
        $data['jul13'] = $this->dashboard->getTotalTransaksiBulanan(7, date('Y'), 13);
        $data['aug13'] = $this->dashboard->getTotalTransaksiBulanan(8, date('Y'), 13);
        $data['sep13'] = $this->dashboard->getTotalTransaksiBulanan(9, date('Y'), 13);
        $data['okt13'] = $this->dashboard->getTotalTransaksiBulanan(10, date('Y'), 13);
        $data['nov13'] = $this->dashboard->getTotalTransaksiBulanan(11, date('Y'), 13);
        $data['des13'] = $this->dashboard->getTotalTransaksiBulanan(12, date('Y'), 13);




        $data['currency'] = $this->app->getappbyid();
        $data['transaksi'] = $this->dashboard->getAlltransaksi();
        $data['fitur'] = $this->dashboard->getAllfitur();
        $data['saldo'] = $this->dashboard->getallsaldo();
        $data['user'] = $this->user->getallusers();
        $data['driver'] = $this->driver->getalldriver();
        $data['mitra'] = $this->dashboard->countmitra();
        $data['hitungdriver'] = $this->dashboard->countdriver();



        $this->load->view('includes/header');
        $this->load->view('dashboard/index', $data);
    }

    public function detail($id)
    {
        $data['transaksi'] = $this->dashboard->gettransaksiById($id);
        $data['currency'] = $this->app->getappbyid();
        $data['transitem'] = $this->dashboard->getitem($id);

        $this->load->view('includes/header');
        $this->load->view('dashboard/detailtransaction', $data);
        $this->load->view('includes/footer');
    }

    public function cancletransaction($id)
    {
        $dataget = $this->dashboard->gettransaksiById($id);

        $id_driver      = $dataget['id_driver'];
        $id_transaksi   = $dataget['id'];
        $token_user     = $dataget['token'];
        $token_driver     = $dataget['reg_id'];
        $this->notif->notif_cancel_user($id_driver, $id_transaksi, $token_user);
        $this->notif->notif_cancel_driver($id_transaksi, $token_driver);
        $this->dashboard->ubahstatustransaksibyid($id);
        $this->dashboard->ubahstatusdriverbyid($id_driver);
        $this->session->set_flashdata('cancel', 'Transaction Has Been Cancel');
        redirect('dashboard/index');
    }

    public function delete($id)
    {
        if (demo == TRUE) {
            $this->session->set_flashdata('demo', 'NOT ALLOWED FOR DEMO');
            redirect('transaction/index');
        } else {
            $this->dashboard->deletetransaksi($id);
            $this->session->set_flashdata('hapus', 'Transaction Has Been Delete ');
            redirect('transaction/index');
        }
    }
}
