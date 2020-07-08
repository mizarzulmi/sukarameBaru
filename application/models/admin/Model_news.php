<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_news extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_news'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show() {
        $sql = "SELECT
                t1.news_id,
                t1.news_title,
                t1.news_content,
                t1.photo,
                t1.banner,
                t1.category_id,
                t2.category_id,
                t2.category_name
                FROM tbl_news t1
                JOIN tbl_category t2
                ON t1.category_id = t2.category_id
                ORDER BY t1.news_id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function add($data) {
        $this->db->insert('tbl_news',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('news_id',$id);
        $this->db->update('tbl_news',$data);
    }

    function delete($id)
    {
        $this->db->where('news_id',$id);
        $this->db->delete('tbl_news');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_news WHERE news_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function get_category()
    {
        $sql = 'SELECT * FROM tbl_category ORDER BY category_name ASC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function news_check($id)
    {
        $sql = 'SELECT * FROM tbl_news WHERE news_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
   
}