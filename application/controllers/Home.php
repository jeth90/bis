<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->helper('text');
        $this->load->helper('url');

        $this->load->model('user_model');
    }
    public function index()
    {
        $this->auth->is_logged_in();

        $user = $this->auth->get_users();
        $data['user'] = $this->user_model->get_users($user['id']);

        $this->load->view('template/header', $data);
        $this->load->view('home/dashboard');
        $this->load->view('template/footer');
    }
}
