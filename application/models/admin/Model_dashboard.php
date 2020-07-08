<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model 
{
	public function show_total_category()
	{
		$sql = 'SELECT * from tbl_category';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_news()
	{
		$sql = 'SELECT * FROM tbl_news';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_team_member()
    {
        $sql = 'SELECT * from tbl_team_member';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_client()
    {
        $sql = 'SELECT * from tbl_client';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_service()
    {
        $sql = 'SELECT * from tbl_service';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_testimonial()
    {
        $sql = 'SELECT * from tbl_testimonial';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_event()
    {
        $sql = 'SELECT * from tbl_event';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_photo()
    {
        $sql = 'SELECT * from tbl_photo';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_pricing_table()
    {
        $sql = 'SELECT * from tbl_pricing_table';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    
}