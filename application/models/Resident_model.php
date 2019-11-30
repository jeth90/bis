<?php
class Resident_model extends CI_Model
{
    public function set_resident($data)
    {
        $this->db->insert('tbl_resident', $data);
        return $insert_id = $this->db->insert_id();
    }
    public function get_resident()
    {
        $sql = "SELECT 
            a.*,
            b.purok FROM tbl_resident a 
            INNER JOIN tbl_purok b ON a.purokID = b.id
            ORDER BY a.householdID ASC";

        // $query = $this->db->query($sql);
        // return $query->result_array();
        return $this->db->query($sql);
    }
}
