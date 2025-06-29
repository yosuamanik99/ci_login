<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->User_model->get_user($username);
        $data = ['user' => $user, 'title' => 'Profil Saya'];
        $this->load->view('profile', $data);
    }
}
