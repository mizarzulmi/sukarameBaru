<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_page extends CI_Model 
{

    public function show_home()
    {
        $query = $this->db->query("SELECT * from tbl_page_home WHERE id=1");
        return $query->first_row('array');
    }

    public function update_home($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_home',$data);
    }

    public function show_about()
    {
        $query = $this->db->query("SELECT * from tbl_page_about WHERE id=1");
        return $query->first_row('array');
    }

    public function update_about($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_about',$data);
    }

    public function show_faq()
    {
        $query = $this->db->query("SELECT * from tbl_page_faq WHERE id=1");
        return $query->first_row('array');
    }

    public function update_faq($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_faq',$data);
    }

    public function show_service()
    {
        $query = $this->db->query("SELECT * from tbl_page_service WHERE id=1");
        return $query->first_row('array');
    }

    public function update_service($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_service',$data);
    }

    public function show_testimonial()
    {
        $query = $this->db->query("SELECT * from tbl_page_testimonial WHERE id=1");
        return $query->first_row('array');
    }

    public function update_testimonial($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_testimonial',$data);
    }

    public function show_news()
    {
        $query = $this->db->query("SELECT * from tbl_page_news WHERE id=1");
        return $query->first_row('array');
    }

    public function update_news($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_news',$data);
    }

    public function show_event()
    {
        $query = $this->db->query("SELECT * from tbl_page_event WHERE id=1");
        return $query->first_row('array');
    }

    public function update_event($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_event',$data);
    }

    public function show_contact()
    {
        $query = $this->db->query("SELECT * from tbl_page_contact WHERE id=1");
        return $query->first_row('array');
    }

    public function update_contact($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_contact',$data);
    }

    public function show_search()
    {
        $query = $this->db->query("SELECT * from tbl_page_search WHERE id=1");
        return $query->first_row('array');
    }

    public function update_search($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_search',$data);
    }

    public function show_term()
    {
        $query = $this->db->query("SELECT * from tbl_page_term WHERE id=1");
        return $query->first_row('array');
    }

    public function update_term($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_term',$data);
    }

    public function show_privacy()
    {
        $query = $this->db->query("SELECT * from tbl_page_privacy WHERE id=1");
        return $query->first_row('array');
    }

    public function update_privacy($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_privacy',$data);
    }

    public function show_team()
    {
        $query = $this->db->query("SELECT * from tbl_page_team WHERE id=1");
        return $query->first_row('array');
    }

    public function update_team($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_team',$data);
    }

    public function show_portfolio()
    {
        $query = $this->db->query("SELECT * from tbl_page_portfolio WHERE id=1");
        return $query->first_row('array');
    }

    public function update_portfolio($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_page_portfolio',$data);
    }
}