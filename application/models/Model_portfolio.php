<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_portfolio extends CI_Model 
{
    public function get_portfolio_category()
    {
        $query = $this->db->query("SELECT * FROM tbl_portfolio_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    public function get_portfolio_data()
    {
        $query = $this->db->query("SELECT * from tbl_portfolio ORDER BY id DESC");
        return $query->result_array();
    }
    public function get_portfolio_data_order_by_name()
    {
        $query = $this->db->query("SELECT * from tbl_portfolio ORDER BY name ASC");
        return $query->result_array();
    }
    public function get_portfolio_detail($id) {
    	$sql = 'SELECT * FROM tbl_portfolio WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    public function get_portfolio_photo($id)
    {
        $query = $this->db->query("SELECT * from tbl_portfolio_photo WHERE portfolio_id=?",array($id));
        return $query->result_array();
    }
    public function get_portfolio_photo_number($id)
    {
        $query = $this->db->query("SELECT * from tbl_portfolio_photo WHERE portfolio_id=?",array($id));
        return $query->num_rows();
    }
}