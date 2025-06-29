<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Cek login
        $this->load->library(['session', 'form_validation']);
        $this->load->helper(['form', 'url']);
        $this->load->model('Product_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $data['products'] = $this->Product_model->get_all();
        $this->load->view('dashboard', $data);
    }

    public function insert()
    {
        // Validasi input produk
        $this->form_validation->set_rules('name', 'Nama Produk', 'required');
        $this->form_validation->set_rules('price', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            $name = $this->input->post('name');
            $price = $this->input->post('price');

            $this->Product_model->insert([
                'name' => $name,
                'price' => $price
            ]);

            $this->session->set_flashdata('success', 'Produk berhasil ditambahkan!');
        }

        redirect('dashboard');
    }
}
