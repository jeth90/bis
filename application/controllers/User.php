<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->model('user_model');
    }
    public function index()
    {
        $this->auth->is_logged_in();

        $data['users']  = $this->user_model->get_users();
        $data['user']   = $this->auth->get_users();

        $this->load->view('user/login');
    }
    public function login()
	{				
		$this->auth->is_logged_in('login');
		
		$this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		$data['error_msg'] = null;
       
        if ($this->form_validation->run() === FALSE)
        {
			$this->load->view('user/login', $data);			
        }
        else
        {
			$data = $this->user_model->login_user($this->input->post('username'), $this->input->post('password'));

			if ( $data != null) {
				$this->session->set_userdata('login', $data);
					redirect(base_url().'home/');

			}else{
				$data['error_msg'] = "Invalid username and password!";
				$this->load->view('user/login', $data);	
			}
			
		}
    }
    public function logout(){

		$this->session->unset_userdata('login', null);
		redirect(base_url());

	}
    
}
