<?php

class Household_model extends CI_Model
{
    public function get_household()
    {
        $sql = "SELECT 
            a.id,
            a.householdNum,
            a.purok_id,
            a.totalhouseholdmember,
            b.purok FROM tbl_household a 
            INNER JOIN tbl_purok b ON a.purok_id = b.id
            ORDER BY a.householdNum ASC";

        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function set_household($data)
    {
        $this->db->insert('tbl_household', $data);
        return $inser_id = $this->db->insert_id();
    }
    public function filter_household($search)
    {
        $this->db->like('householdNum', $search);
        $query = $this->db->get('tbl_household');

        return $query->result_array();
    }
    public function drop_household_by_purok($id)
    {
        $this->db->where('purokID', $id);
        $this->db->delete('tbl_household');
    }
    // --------------
    public function fetch_household($postData = null)
    {
        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value
        
        ## Search 
        $searchQuery = "";
        if($searchValue != ''){
            $searchQuery = " (householdNum like '%".$searchValue."%' or 
                    purok like '%".$searchValue."%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('tbl_household');
        $this->db->join('tbl_purok','tbl_purok.id=tbl_household.purok_id','inner');
        $records = $this->db->get()->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if($searchQuery != '')
        $this->db->where($searchQuery);
        $this->db->from('tbl_household');
        $this->db->join('tbl_purok','tbl_purok.id=tbl_household.purok_id','inner');
        $records = $this->db->get()->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        if($searchQuery != '')
        $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->from('tbl_household');
        $this->db->join('tbl_purok','tbl_purok.id=tbl_household.purok_id','inner');
        $records = $this->db->get()->result();

        $data = array();

        foreach($records as $r ){
         
            $data[] = array(
                $r->householdNum,
                $r->purok,
                $r->totalhouseholdmember,
                '<div class="table-data-feature"><button class="item item_edit" data-toggle="tooltip" title="Edit" data-id="'.$r->id.'" data-householdNum="'.$r->householdNum.'"><i class="zmdi zmdi-edit"></i></button>&nbsp;&nbsp;<button class="item item_delete" data-toggle="tooltip" title="Delete" data-id="'.$r->id.'"><i class="zmdi zmdi-delete"></i></button></div>',
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        // var_dump(json_encode($response));
        return $response; 
   }
}
