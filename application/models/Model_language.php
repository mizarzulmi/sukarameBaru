<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_language extends CI_Model 
{
    public function get_default_language_id()
    {
        $query = $this->db->query("SELECT * FROM tbl_language WHERE lang_default=?", array('Default'));
        return $query->first_row('array');
    }

    public function get_detail_by_language_id($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_language_detail WHERE lang_id=?", array($id));
        return $query->result_array();
    }

    public function show_all_language() {
        $query = $this->db->query("SELECT * FROM tbl_language");
        return $query->result_array();
    }

}