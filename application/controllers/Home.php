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
        $this->load->model('deceased_model');
        $this->load->model('zone_model');
        $this->load->model('resident_model');
        $this->load->model('household_model');
    }
    public function index()
    {
        $this->auth->is_logged_in();

        $user = $this->auth->get_users();
        $deceased = $this->deceased_model->get_deceased();
        $purok = $this->zone_model->get_purok();
        $residents = $this->resident_model->get_resident();
        $household = $this->household_model->get_household();

        $data['user'] = $this->user_model->get_users($user['id']);
        $data['total_deceased'] =  $deceased->num_rows();
        $data['total_purok'] = count($purok);
        $data['total_resident'] = $residents->num_rows();
        $data['total_household'] = count($household);

        $this->load->view('template/header', $data);
        $this->load->view('home/dashboard');
        $this->load->view('template/footer');
    }
}
