<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resident extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->library('auth');
        $this->load->model('user_model');
        $this->load->model('zone_model');
        $this->load->model('resident_model');
    }
    public function index()
    {
        $this->auth->is_logged_in();

        $data['users']  = $this->user_model->get_users();
        $data['user']   = $this->auth->get_users();
        $data['puroks'] = $this->zone_model->get_purok();

        $this->load->view('template/header', $data);
        $this->load->view('home/resident', $data);
        $this->load->view('template/footer');
    }
    public function add_resident()
    {
        $id    = $this->input->post('purok');
        $householdNo = 
        $data = array(
            'householdID'   => $this->input->post('householdNo'),
            'purokID'       => $this->input->post('purok'),
            'firstName'     => $this->input->post('firstName'),
            'middleName'    => $this->input->post('middleName'),
            'lastName'      => $this->input->post('lastName'),
            'qualifier'     => $this->input->post('qualifier'),
            'addressNumber' => $this->input->post('addressNumber'),
            'addressStreet' => $this->input->post('street'),
            'addressSubd'   => $this->input->post('addressSubd'),
            'birthPlace'    => $this->input->post('birthPlace'),
            'birthdate'     => $this->input->post('birthdate'),
            'remarks'       => $this->input->post('remarks'),
            'gender'        => $this->input->post('gender'),
            'civilStatus'   => $this->input->post('status'),
            'citizenship'   => $this->input->post('citizen'),
            'job'           => $this->input->post('job'),
        );
        $result = $this->resident_model->set_resident($data);

        if ($result) {
            echo json_encode(array('status'=>true));
        }else {
            echo json_encode(array('status'=>false));
        }
    }
    public function list_resident()
    {
        // Datatables Variables
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $residents = $this->resident_model->get_resident();

        $data = array();

        foreach($residents->result() as $r) {

            $data[] = array(
                $r->firstName,
                $r->purok,
                $r->birthdate,
                $r->gender ,
                $r->job,
                '<span class="more edit_purok" data-id="'.$r->id.'" data-name="'.$r->firstName.'"><i class="zmdi zmdi-edit"></i></span>&nbsp;&nbsp;<span class="more item_delete" data-id="'.$r->id.'"><i class="zmdi zmdi-delete"></i></span>',
            );
        }
        $output = array(
               "draw" => $draw,
                 "recordsTotal" => $residents->num_rows(),
                 "recordsFiltered" => $residents->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
    }
}