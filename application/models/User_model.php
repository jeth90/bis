<?php
class User_model extends CI_Model{

    public function get_users($id = FALSE)
    {       
        if ($id === FALSE)
        {
                $query = $this->db->get('tbl_users');
                return $query->result_array();
        }

        $query = $this->db->get_where('tbl_users', array('id' => $id));
        return $query->row_array();
    }
    public function login_user($email,$pass)
    {
        $this->db->select('id');
        $this->db->select('username');
        $this->db->select('img');
        
        $this->db->from('tbl_users');
        $this->db->where('username',$email);
        $this->db->where('password', $pass);

        if($query=$this->db->get())   {
            return $query->row_array();
        }
        else{
            return false;
        }
    }
}