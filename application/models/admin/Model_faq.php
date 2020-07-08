<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_faq extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_faq'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * FROM tbl_faq ORDER BY faq_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_faq',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('faq_id',$id);
        $this->db->update('tbl_faq',$data);
    }

    function delete($id)
    {
        $this->db->where('faq_id',$id);
        $this->db->delete('tbl_faq');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_faq WHERE faq_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function faq_check($id)
    {
        $sql = 'SELECT * FROM tbl_faq WHERE faq_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function get_photo()
    {
        $sql = 'SELECT * FROM tbl_faq_photo WHERE id=?';
        $query = $this->db->query($sql,array(1));
        return $query->first_row('array');
    }
    function update_faq_photo($data) {
        $this->db->where('id',1);
        $this->db->update('tbl_faq_photo',$data);
    }
    
}