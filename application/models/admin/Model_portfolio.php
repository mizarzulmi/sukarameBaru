<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_portfolio extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_portfolio'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_auto_increment_id1()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_portfolio_photo'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * 
				FROM tbl_portfolio t1
				JOIN tbl_portfolio_category t2
				ON t1.category_id = t2.category_id
                ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_all_photos_by_category_id($id)
    {
        $sql = "SELECT * 
    			FROM tbl_portfolio_photo 
    			WHERE portfolio_id=?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function get_all_photo_category()
    {
        $sql = "SELECT * 
				FROM tbl_portfolio_category
				ORDER BY category_name ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_portfolio',$data);
        return $this->db->insert_id();
    }

    function add_photos($data) {
        $this->db->insert('tbl_portfolio_photo',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_portfolio',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_portfolio');
    }

    function delete_photos($id)
    {
        $this->db->where('portfolio_id',$id);
        $this->db->delete('tbl_portfolio_photo');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_portfolio WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function portfolio_check($id)
    {
        $sql = 'SELECT * FROM tbl_portfolio WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function portfolio_photo_by_id($id)
    {
        $sql = 'SELECT * FROM tbl_portfolio_photo WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    function delete_portfolio_photo($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_portfolio_photo');
    }
    
}