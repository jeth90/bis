<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zone extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->library('auth');
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->model('zone_model');
        $this->load->model('household_model');
    }

    public function index()
    {
        $this->auth->is_logged_in();

        $data['users']  = $this->user_model->get_users();
        $data['user']   = $this->auth->get_users();

        $this->load->view('template/header', $data);
        $this->load->view('home/zone');
        $this->load->view('template/footer');
    }
    public function purok_list()
    {
        // POST data
        $postData = $this->input->post();

        // Get data
        $data = $this->zone_model->fetch_purok($postData);

        echo json_encode($data);
    }
    public function add_purok()
    {
        $data = array(
            'purok'    => $this->input->post('purok'),
            'purok_leader'  => $this->input->post('purok_leader')
        );

        $result = $this->zone_model->set_purok($data);

        if ($result) {
            echo json_encode(array('status'=>true));
        }else {
            echo json_encode(array('status'=>false));
        }
    }
    public function search_purok($search)
    {
        $result = $this->zone_model->search_purok($search);
        if ($result) {
            echo json_encode(array('status'=>true));
        }else {
            echo json_encode(array('status'=>false));
        }
    }
    /*public function get_purok()
    {
        
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        
        $order = $this->input->get("order");

        $col = 0;
        $dir = "";
        if (!empty($order)) {
            foreach ($order as $o) {
                $col = $o['column'];
                $dir = $o['dir'];
            }
        }

        if($dir != "asc" && $dir != "desc"){
            $dir = "asc";
        }

        $columns_valid = array(
            0=>"purok",
            1=>"purok_leader",
            3=>"totalhousehold",
        );

        if (!isset($columns_valid[$col])) {
            $order = null;
        } else{
            $order = $columns_valid[$col];
        }
        


        $purok = $this->zone_model->get_purok($start, $length, $order, $dir);

        $data = array();

        foreach($purok->result() as $r) {

            $data[] = array(
                $r->purok,
                $r->purok_leader,
                $r->totalhousehold,
                '<div class="table-data-feature"><button class="item item_edit" data-toggle="tooltip" title="Edit" data-id="'.$r->id.'" data-purok="'.$r->purok.'" data-purok_leader="'.$r->purok_leader.'"><i class="zmdi zmdi-edit"></i></button>&nbsp;&nbsp;<button class="item item_delete" data-toggle="tooltip" title="Delete" data-id="'.$r->id.'"><i class="zmdi zmdi-delete"></i></button></div>',
            );
        }
        $total_purok = $this->zone_model->get_total_purok();

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $total_purok,
            "recordsFiltered" => $total_purok,
            "data" => $data
        );
        echo json_encode($output);
        exit();

    }*/
    public function edit_zone()
    {
        $id = $this->input->post('id');

        $data = array(
            'purok'         => $this->input->post('purok'),
            'purok_leader'  => $this->input->post('purok_leader')
        ); 
        $result = $this->zone_model->edit_purok($data, $id);

        if ($result) {
			echo json_encode(array('status'=>true));
		}
		else{
			echo json_encode(array('status'=>false));
		}
    }
    public function delete_purok()
    {
        $data = $this->input->post('id');
        
        $result = $this->zone_model->drop_zone($data);
        $this->household_model->drop_household_by_purok($data);

        if ($result) {
			echo json_encode(array('status'=>true));
		}
		else{
			echo json_encode(array('status'=>false));
		}
    }
}
