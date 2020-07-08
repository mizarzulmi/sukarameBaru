<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_newsletter extends CI_Model 
{
    public function total_subscriber_by_email($email)
    {
        $query = $this->db->query("SELECT * FROM tbl_subscriber WHERE subs_email=?",array($email));
        return $query->num_rows();
    }

    function add($data) {
        $this->db->insert('tbl_subscriber',$data);
        return $this->db->insert_id();
    }

    public function check_url($email,$hash) {
        $sql = 'SELECT * FROM tbl_subscriber WHERE subs_email=? AND subs_hash=?';
        $query = $this->db->query($sql,array($email,$hash));
        return $query->num_rows();
    }

    public function update($email,$hash,$data) {
        $this->db->where('subs_email',$email);
        $this->db->where('subs_hash',$hash);
        $this->db->update('tbl_subscriber',$data);
    }
}