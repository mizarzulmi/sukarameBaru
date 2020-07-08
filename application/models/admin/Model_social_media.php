<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_social_media extends CI_Model 
{

    function show() {
        $sql = "SELECT * FROM tbl_social";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function update($social_name,$data) {
        $this->db->where('social_name',$social_name);
        $this->db->update('tbl_social',$data);
    }
    
}