<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_comment extends CI_Model 
{

    function show() {
        $sql = "SELECT * FROM tbl_comment WHERE id=?";
        $query = $this->db->query($sql,array(1));
        return $query->first_row('array');
    }

    function update($data) {
        $this->db->where('id',1);
        $this->db->update('tbl_comment',$data);
    }
    
}