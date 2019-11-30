<?php

class Zone_model extends CI_Model
{
    public function set_purok($data)
    {
        $this->db->insert('tbl_purok', $data);
        return $inser_id = $this->db->insert_id();
    }
    public function get_purok()
    {
        $sql = "SELECT * FROM tbl_purok ORDER BY purok ASC
            ";

        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function fetch_purok($postData = null)
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
            $searchQuery = " (purok like '%".$searchValue."%' or 
                    purok_leader like '%".$searchValue."%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('tbl_purok')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if($searchQuery != '')
        $this->db->where($searchQuery);
        $records = $this->db->get('tbl_purok')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        if($searchQuery != '')
        $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('tbl_purok')->result();

        $data = array();

        foreach($records as $r ){
         
            $data[] = array(
                $r->purok,
                $r->purok_leader,
                $r->totalhousehold,
                '<div class="table-data-feature"><button class="item item_edit" data-toggle="tooltip" title="Edit" data-id="'.$r->id.'" data-purok="'.$r->purok.'" data-purok_leader="'.$r->purok_leader.'"><i class="zmdi zmdi-edit"></i></button>&nbsp;&nbsp;<button class="item item_delete" data-toggle="tooltip" title="Delete" data-id="'.$r->id.'"><i class="zmdi zmdi-delete"></i></button></div>',
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
    
    public function get_total_purok()
    {
        $query = $this->db->select("COUNT(*) as num")->get("tbl_purok");
        $result = $query->row();
        if (isset($result)) return $result->num;
        return 0;
    }
    public function search_purok($search)
    {
        $this->db->where('purok', $search);
        $query = $this->db->get('tbl_purok');

        if ($query->num_rows() > 0) {
            return true;
        }
        else{
            return false;
        }
       
    }
    public function get_totalHousehold($id)
    {
        $sql = "SELECT totalhousehold FROM tbl_purok WHERE id=$id";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function totalhousehold_increment($id)
    {
        
        $sql = "UPDATE tbl_purok SET totalhousehold=totalhousehold+1 WHERE id=$id";
        $this->db->query($sql);
    }
    public function edit_purok($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_purok', $data);

        return true;
    }
    public function drop_zone($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_purok');

        return 1;
    }
}
