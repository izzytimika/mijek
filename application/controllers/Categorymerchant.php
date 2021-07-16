<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categorymerchant extends CI_Controller
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
        $this->load->model('categorymerchant_model', 'cm');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['catmer'] = $this->cm->getallcm();
        $data['fitur'] = $this->cm->getfiturmerchant();



        $this->load->view('includes/header');
        $this->load->view('categorymerchant/index', $data);
        $this->load->view('includes/footer');
    }

    public function tambahcm()
    {


        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'trim|prep_for_form');

        if ($this->form_validation->run() == TRUE) {

            $data = [
                  'foto_kategori'     => html_escape($this->input->post('icon', TRUE)),
                'nama_kategori'     => html_escape($this->input->post('nama_kategori', TRUE)),
                'id_fitur'          => html_escape($this->input->post('id_fitur', TRUE)),
                'status_kategori'   => html_escape($this->input->post('status_kategori', TRUE)),
            ];
            $this->cm->tambahcm($data);
            $this->session->set_flashdata('tambah', 'Category Merchant Has Been Added');
            redirect('categorymerchant');
        }
    }

    public function hapus($id)
    {
        $this->cm->hapuscm($id);
        $this->session->set_flashdata('hapus', 'Category Merchant Has Been Deleted');
        redirect('categorymerchant');
    }


    public function ubahcm()
    {


        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'trim|prep_for_form');

        if ($this->form_validation->run() == TRUE) {
            
                $config['upload_path']     = './images/fitur/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']         = '10000';
            $config['file_name']     = 'name';
            $config['encrypt_name']     = true;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('icon')) {
                $gambar = html_escape($this->upload->data('file_name'));
            } else {
                $gambar = 'noimage.jpg';
            }

            $id = $this->input->post('id_kategori_merchant');
            $data = [
                'icon'     => $gambar,
                'nama_kategori'     => html_escape($this->input->post('nama_kategori', TRUE)),
                'id_fitur'          => html_escape($this->input->post('id_fitur', TRUE)),
                'status_kategori'   => html_escape($this->input->post('status_kategori', TRUE)),
            ];

            $this->cm->ubahcm($data, $id);
            $this->session->set_flashdata('ubah', 'Category Merchant Has Been Updated');
            redirect('categorymerchant');
        }
    }
}
