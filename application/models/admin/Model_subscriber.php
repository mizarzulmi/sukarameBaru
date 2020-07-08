<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_subscriber extends CI_Model 
{
    function show_active_subscriber() {
        $sql = "SELECT * FROM tbl_subscriber WHERE subs_active=1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
   
    function delete_pending_subscriber()
    {
        $this->db->where('subs_active',0);
        $this->db->delete('tbl_subscriber');
    }

    function delete($id)
    {
        $this->db->where('subs_id',$id);
        $this->db->delete('tbl_subscriber');
    }
    
    function subscriber_check($id)
    {
        $sql = 'SELECT * FROM tbl_subscriber WHERE subs_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }    
}