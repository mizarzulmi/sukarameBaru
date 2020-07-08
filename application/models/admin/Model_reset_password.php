<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_reset_password extends CI_Model 
{

    public function get_setting_data()
    {
        $query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
        return $query->first_row('array');
    }

    function check_url($email,$token) {
        $query = $this->db->query("SELECT * from tbl_user WHERE email=? AND token=?",array($email,$token));
        return $query->first_row('array');
    }

    function update($email,$data) {
        $this->db->where('email',$email);
        $this->db->update('tbl_user',$data);
    }
}