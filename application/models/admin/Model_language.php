<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_language extends CI_Model 
{

    function show() {
        $sql = "SELECT * FROM tbl_language ORDER BY name ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_language',$data);
    }
    
}