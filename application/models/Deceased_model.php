<?php
class Deceased_model extends CI_Model
{
    
    public function get_deceased()
    {
        $sql = "SELECT 
            a.*,
            b.id as purokID,
            b.purok FROM tbl_resident a 
            INNER JOIN tbl_purok b ON a.purokID = b.id
            WHERE a.remarks = 'deceased'
            ORDER BY a.householdID ASC";

        // $query = $this->db->query($sql);
        // return $query->result_array();
        return $this->db->query($sql);
    }
}