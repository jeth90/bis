<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Household extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->library('auth');
        $this->load->model('user_model');
        $this->load->model('zone_model');
        $this->load->model('household_model');
        $this->load->model('resident_model');
    }
    public function index()
    {
        $this->auth->is_logged_in();

        $data['users']  = $this->user_model->get_users();
        $data['user']   = $this->auth->get_users();
        $data['puroks']  = $this->zone_model->get_purok();

        $this->load->view('template/header', $data);
        $this->load->view('home/household',$data);
        $this->load->view('template/footer');
    }
    public function list_household()
    {
        $data = $this->household_model->get_household();
        echo json_encode($data);
    }
    public function add_household()
    {
        $id    = $this->input->post('purok');
        $household = $this->input->post('household');
        // $total = $this->zone_model->get_totalHousehold($id);
        $data = array(
            'purok_id'    =>$id,
            'householdNum'  => $household
        );
       
        $result = $this->household_model->set_household($data);
        $this->zone_model->totalhousehold_increment($id);

        if ($result) {
            echo json_encode(array('status'=>true));
        }else {
            echo json_encode(array('status'=>false));
        }
    }
    public function search_household()
    {
        $purok = $this->input->post('purok');
        $household = $this->input->post('household');
        $result = $this->household_model->search_household($purok,$household);
        if ($result) {
            echo json_encode(array('status'=>true));
        }else {
            echo json_encode(array('status'=>false));
        }
    }
    public function show()
    {
        // POST data
        $postData = $this->input->post();

        // Get data
        $data = $this->household_model->fetch_household($postData);

        echo json_encode($data);
    }
    public function update_household()
    {
        $id = $this->input->post('id');

        $data = array(
            'purok_id'         => $this->input->post('purok'),
            'householdNum'  => $this->input->post('householdNum')
        ); 
        $result = $this->household_model->update_household($data, $id);

        if ($result) {
			echo json_encode(array('status'=>true));
		}
		else{
			echo json_encode(array('status'=>false));
		}
    }
    public function delete_household()
    {
        $data = $this->input->post('id');
        
        $result = $this->household_model->drop_household($data);
        $this->resident_model->drop_resident_by_household($this->input->post('householdNum'),$this->input->post('purok_id'));
        $this->zone_model->totalhousehold_decrease($this->input->post('purok_id'));

        if ($result) {
			echo json_encode(array('status'=>true));
		}
		else{
			echo json_encode(array('status'=>false));
		}
    }
}
