<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pricing extends CI_Model 
{
    public function all_pricing()
    {
        $query = $this->db->query("SELECT * FROM tbl_pricing_table ORDER BY id ASC");
        return $query->result_array();
    }
}