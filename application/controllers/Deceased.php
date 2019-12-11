<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deceased extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->library('auth');
        $this->load->model('user_model');
        $this->load->model('zone_model');
        $this->load->model('resident_model');
        $this->load->model('deceased_model');
    }
    public function index()
    {
        $this->auth->is_logged_in();

        $data['users']  = $this->user_model->get_users();
        $data['user']   = $this->auth->get_users();
        $data['puroks'] = $this->zone_model->get_purok();
        
        $this->load->view('template/header', $data);
        $this->load->view('home/deceased', $data);
        $this->load->view('template/footer');
    }
    public function list_deceased()
    {
        // Datatables Variables
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $residents = $this->deceased_model->get_deceased();

        $data = array();

        foreach($residents->result() as $r) {

            $data[] = array(
                $r->firstName." ".$r->middleName." ".$r->lastName." ".$r->qualifier,
                $r->purok,
                $r->birthdate,
                $r->gender ,
                $r->died_on,
                '<div class="table-data-feature"><button class="item view_resident" data-id="'.$r->id.'"><i class="zmdi zmdi-eye" data-toggle="tooltip" title="View"></i></button>&nbsp;&nbsp;'.
                '<button class="item edit_resident" data-id="'.$r->id.'" data-name="'.$r->firstName.'"><i class="zmdi zmdi-edit" data-toggle="tooltip" title="Edit"></i></button>&nbsp;&nbsp;'.
                '<button class="item delete_resident" data-id="'.$r->id.'"><i class="zmdi zmdi-delete" data-toggle="tooltip" title="Delete"></i></button></div>',
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