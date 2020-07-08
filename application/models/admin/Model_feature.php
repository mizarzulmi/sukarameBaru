<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_feature extends CI_Model 
{

    function show() {
        $sql = "SELECT * FROM tbl_feature";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_feature',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_feature',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_feature');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_feature WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function feature_check($id)
    {
        $sql = 'SELECT * FROM tbl_feature WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    
}