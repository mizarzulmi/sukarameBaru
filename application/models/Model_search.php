<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_search extends CI_Model 
{
    public function search($search_string)
    {
        $search_string = '%' . $search_string . '%';
        $sql = "SELECT * 
                FROM tbl_news t1
                JOIN tbl_category t2
                ON t1.category_id = t2.category_id
                WHERE t1.news_title like ? OR t1.news_content like ?
                ORDER BY t1.news_id DESC";
        $query = $this->db->query($sql,array($search_string,$search_string));
        return $query->result_array();
    }
    public function search_total($search_string)
    {
        $search_string = '%' . $search_string . '%';
        $sql = "SELECT * 
                FROM tbl_news t1
                JOIN tbl_category t2
                ON t1.category_id = t2.category_id
                WHERE t1.news_title like ? OR t1.news_content like ?
                ORDER BY t1.news_id DESC";
        $query = $this->db->query($sql,array($search_string,$search_string));
        return $query->num_rows();
    }
}