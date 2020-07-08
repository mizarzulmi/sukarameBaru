<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_category extends CI_Model 
{
    public function all_news_by_category_id($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_news WHERE category_id=? ORDER BY news_id DESC", array($id));
        return $query->result_array();
    }

    public function category_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_category WHERE category_id=?", array($id));
        return $query->first_row('array');
    }

    public function category_check($id) {
        $sql = 'SELECT * FROM tbl_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->num_rows();
    }
}