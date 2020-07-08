<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_event extends CI_Model 
{
    public function all_event()
    {
        $query = $this->db->query("SELECT * FROM tbl_event ORDER BY event_id DESC");
        return $query->result_array();
    }

    public function event_check($id)
    {
        $sql = 'SELECT * FROM tbl_event WHERE event_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->num_rows();
    }

    public function event_detail($id)
    {
        $sql = 'SELECT * FROM tbl_event WHERE event_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    public function get_total_event() {
        $sql = 'SELECT * FROM tbl_event';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function fetch_event($limit, $start) {
        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->limit($limit, $start);
        $this->db->order_by('event_id', 'desc');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}