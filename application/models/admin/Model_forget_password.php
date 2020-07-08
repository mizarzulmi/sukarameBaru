<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_forget_password extends CI_Model 
{

    public function get_setting_data()
    {
        $query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
        return $query->first_row('array');
    }

    function check_email($email) {
        $sql = "SELECT * FROM tbl_user WHERE email=?";
        $query = $this->db->query($sql,array($email));
        return $query->first_row('array');
    }

    function update($email,$data) {
        $this->db->where('email',$email);
        $this->db->update('tbl_user',$data);
    }

}