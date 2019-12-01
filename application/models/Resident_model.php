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
            b.id as purokID,
            b.purok FROM tbl_resident a 
            INNER JOIN tbl_purok b ON a.purokID = b.id
            ORDER BY a.householdID ASC";

        // $query = $this->db->query($sql);
        // return $query->result_array();
        return $this->db->query($sql);
    }
    public function drop_resident_by_household($household, $purokID)
    {
        $cond = array('householdID'=> $household, 'purokID'=>$purokID);
        $this->db->where($cond);
        $this->db->delete('tbl_resident');
    }

    function fetch_data($query)
    {
        $this->db->like('householdNum', $query);
        $query = $this->db->get('tbl_household');
        if($query->num_rows() > 0)
        {
            foreach($query->result_array() as $row)
            {
                $output[] = array(
                    'name'  => $row["householdNum"]
                );
           }
           echo json_encode($output);
        }
        else{
            $output[] = array(
                'name'  => 'NO HOUSEHOLD FOUND'
        );
        echo json_encode($output);
        }
    }
    public function delete_resident($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_resident');

        return 1;
    }
}
