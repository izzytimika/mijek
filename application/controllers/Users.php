<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ci_ext_model', 'ci_ext');
        $ci_ext = $this->ci_ext->ciext();
        if (!$ci_ext) {
            redirect(gagal);
        }
        if ($this->session->userdata('user_name') == NULL && $this->session->userdata('password') == NULL) {
            redirect(base_url() . "login");
        }
        // $this->load->model('Appsettings_model', 'app');
        $this->load->model('Users_model', 'user');
        $this->load->model('Pelanggan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->user->getallusers();
        // $data['transaksi']= $this->dashboard->getAlltransaksi();
        // $data['fitur']= $this->dashboard->getAllfitur();
        $this->load->view('includes/header');
        $this->load->view('users/index', $data);
        $this->load->view('includes/footer');
    }
	
	public function resetp($id)
	{
		print_r($id);
		return;
		$user = $this->user->getusersbyid($id);
		print_r($user);
		return;
		$condition = array(
            'email' => $user['email'],
            'status' => '1'
        );
        $cek_login = $this->Pelanggan_model->get_data_pelanggan($condition);
        $app_settings = $this->Pelanggan_model->get_settings();
        $token = sha1(rand(0, 999999) . time());


        if ($cek_login->num_rows() > 0) {
            $cheker = array('msg' => $cek_login->result());
            foreach ($app_settings as $item) {
                foreach ($cheker['msg'] as $item2 => $val) {
                    $dataforgot = array(
                        'userid' => $val->id,
                        'token' => $token,
                        'idKey' => '1'
                    );
                }


                $forgot = $this->Pelanggan_model->dataforgot($dataforgot);

                $linkbtn = base_url() . 'resetpass/rest/' . $token . '/1';
                $template = $this->Pelanggan_model->template1($item['email_subject'], $item['email_text1'], $item['email_text2'], $item['app_website'], $item['app_name'], $linkbtn, $item['app_linkgoogle'], $item['app_address']);
                $sendmail = $this->Pelanggan_model->emailsend($item['email_subject'] . " [ticket-" . rand(0, 999999) . "]", $decoded_data->email, $template, $item['smtp_host'], $item['smtp_port'], $item['smtp_username'], $item['smtp_password'], $item['smtp_from'], $item['app_name'], $item['smtp_secure']);
            }
            if ($forgot && $sendmail) {
                $message = array(
                    'code' => '200',
                    'message' => 'found',
                    'data' => []
                );
            } else {
                $message = array(
                    'code' => '401',
                    'message' => 'email not registered',
                    'data' => []
                );
            }
        } else {
            $message = array(
                'code' => '404',
                'message' => 'email not registered',
                'data' => []
            );
        }
		
		print_r($message);
	}

    public function detail($id)
    {
        $data = $this->user->getcurrency();
        $data['user'] = $this->user->getusersbyid($id);
        $data['countorder'] = $this->user->countorder($id);
        $data['wallet'] = $this->user->wallet($id);
        // $data['fitur']= $this->dashboard->getAllfitur();
        $this->load->view('includes/header');
        $this->load->view('users/detailusers', $data);
        $this->load->view('includes/footer');
    }

    public function block($id)
    {
        $this->user->blockusersById($id);
        $this->session->set_flashdata('block', 'blocked');
        redirect('users');
    }

    public function unblock($id)
    {
        $this->user->unblockusersById($id);
        $this->session->set_flashdata('block', 'unblock');
        redirect('users');
    }

    public function ubahid()
    {

        $this->form_validation->set_rules('fullnama', 'fullnama', 'trim|prep_for_form');
        $this->form_validation->set_rules('no_telepon', 'no_telepon', 'trim|prep_for_form');
        $this->form_validation->set_rules('email', 'email', 'trim|prep_for_form');
        $id = html_escape($this->input->post('id', TRUE));

        $countrycode = html_escape($this->input->post('countrycode', TRUE));
        $phone = html_escape($this->input->post('phone', TRUE));

        if ($this->form_validation->run() == TRUE) {
            $data             = [
                'phone'                     => html_escape($this->input->post('phone', TRUE)),
                'countrycode'               => html_escape($this->input->post('countrycode', TRUE)),
                'id'                        => html_escape($this->input->post('id', TRUE)),
                'fullnama'                    => html_escape($this->input->post('fullnama', TRUE)),
                'no_telepon'                => str_replace("+", "", $countrycode) . $phone,
                'email'                        => html_escape($this->input->post('email', TRUE)),
                'tgl_lahir'                        => html_escape($this->input->post('tgl_lahir', TRUE))
            ];


            if (demo == TRUE) {
                $this->session->set_flashdata('demo', 'NOT ALLOWED FOR DEMO');
                redirect('users/detail/' . $id);
            } else {
                $this->user->ubahdataid($data);
                $this->session->set_flashdata('ubah', 'User Has Been Change');
                redirect('users/detail/' . $id);
            }
        } else {

            $data = $this->user->getcurrency();
            $data['user'] = $this->user->getusersbyid($id);
            $data['countorder'] = $this->user->countorder($id);
            // $data['transaksi']= $this->dashboard->getAlltransaksi();
            // $data['fitur']= $this->dashboard->getAllfitur();
            $this->load->view('includes/header');
            $this->load->view('users/detailusers', $data);
            $this->load->view('includes/footer');
        }
    }

    public function ubahfoto()
    {

        $config['upload_path']     = './images/pelanggan/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']         = '10000';
        $config['file_name']     = 'name';
        $config['encrypt_name']     = true;
        $this->load->library('upload', $config);
        $id = $id = html_escape($this->input->post('id', TRUE));
        $data = $this->user->getusersbyid($id);

        if ($this->upload->do_upload('fotopelanggan')) {
            if ($data['fotopelanggan'] != 'noimage.jpg') {
                $gambar = $data['fotopelanggan'];
                unlink('images/pelanggan/' . $gambar);
            }

            $foto = html_escape($this->upload->data('file_name'));

            $data = [
                'fotopelanggan'       => $foto,
                'id'        => html_escape($this->input->post('id', TRUE))
            ];

            if (demo == TRUE) {
                $this->session->set_flashdata('demo', 'NOT ALLOWED FOR DEMO');
                redirect('users/detail/' . $id);
            } else {
                $this->user->ubahdatafoto($data);
                $this->session->set_flashdata('ubah', 'User Has Been Change');
                redirect('users/detail/' . $id);
            }
        } else {

            $data = $this->user->getcurrency();
            $data['user'] = $this->user->getusersbyid($id);
            $data['countorder'] = $this->user->countorder($id);
            // $data['transaksi']= $this->dashboard->getAlltransaksi();
            // $data['fitur']= $this->dashboard->getAllfitur();
            $this->load->view('includes/header');
            $this->load->view('users/detailusers', $data);
            $this->load->view('includes/footer');
        }
    }

    public function ubahpass()
    {

        $this->form_validation->set_rules('password', 'password', 'trim|prep_for_form');

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $data = $this->input->post('password');
            $dataencrypt = sha1($data);

            $data             = [
                'id'            => html_escape($this->input->post('id', TRUE)),
                'password'      => $dataencrypt
            ];

            if (demo == TRUE) {
                $this->session->set_flashdata('demo', 'NOT ALLOWED FOR DEMO');
                redirect('users/detail/' . $id);
            } else {
                $this->user->ubahdatapassword($data);
                $this->session->set_flashdata('ubah', 'User Has Been Change');
                redirect('users/detail/' . $id);
            }
        } else {
            $data = $this->user->getcurrency();
            $data['user'] = $this->user->getusersbyid($id);
            $data['countorder'] = $this->user->countorder($id);
            // $data['transaksi']= $this->dashboard->getAlltransaksi();
            // $data['fitur']= $this->dashboard->getAllfitur();
            $this->load->view('includes/header');
            $this->load->view('users/detailusers', $data);
            $this->load->view('includes/footer');
        }
    }

    public function userblock($id)
    {
        $this->user->blockuserbyid($id);
        redirect('users');
    }

    public function userunblock($id)
    {
        $this->user->unblockuserbyid($id);
        redirect('users');
    }

    public function tambah()
    {


        $password = html_escape($this->input->post('password', TRUE));
        $countrycode = html_escape($this->input->post('countrycode', TRUE));
        $phone = html_escape($this->input->post('phone', TRUE));
        $email = html_escape($this->input->post('email', TRUE));

        $this->form_validation->set_rules('fullnama', 'NAME', 'trim|prep_for_form');
        $this->form_validation->set_rules('phone', 'PHONE', 'trim|prep_for_form|is_unique[pelanggan.phone]');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|prep_for_form|is_unique[pelanggan.email]');
        $this->form_validation->set_rules('password', 'PASSWORD', 'trim|prep_for_form');

        if ($this->form_validation->run() == TRUE) {

            $config['upload_path']     = './images/pelanggan/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']         = '10000';
            $config['file_name']     = 'name';
            $config['encrypt_name']     = true;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('fotopelanggan')) {

                $foto = html_escape($this->upload->data('file_name'));
            } else {
                $foto = 'noimage.jpg';
            }





            $data             = [

                'id'                        => 'P' . time(),
                'phone'                     => html_escape($this->input->post('phone', TRUE)),
                'countrycode'               => html_escape($this->input->post('countrycode', TRUE)),
                'tgl_lahir'                 => html_escape($this->input->post('tgl_lahir', TRUE)),
                'token'                     => 'T' . time(),
                'fotopelanggan'             => $foto,
                'fullnama'                  => html_escape($this->input->post('fullnama', TRUE)),
                'no_telepon'                => str_replace("+", "", $countrycode) . $phone,
                'email'                     => html_escape($this->input->post('email', TRUE)),
                'password'                  => sha1($password),

            ];
            if (demo == TRUE) {
                $this->session->set_flashdata('demo', 'NOT ALLOWED FOR DEMO');
                redirect('users/index');
            } else {

                $this->user->tambahdatausers($data);
                $this->session->set_flashdata('tambah', 'User Has Been Added');
                redirect('users/index');
            }
        } else {
            $this->load->view('includes/header');
            $this->load->view('users/tambahuser');
            $this->load->view('includes/footer');
            // }
        }
    }

    public function hapususers($id)
    {
        if (demo == TRUE) {
            $this->session->set_flashdata('demo', 'NOT ALLOWED FOR DEMO');
            redirect('users/index');
        } else {
            $data = $this->user->getusersbyid($id);
            $gambar = $data['fotopelanggan'];
            unlink('images/pelanggan/' . $gambar);

            $this->user->hapusdatauserbyid($id);

            $this->session->set_flashdata('hapus', 'User Has Been Deleted');
            redirect('users/index');
        }
    }
}
