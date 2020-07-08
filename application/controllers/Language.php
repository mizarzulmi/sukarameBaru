<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_language');
    }

	public function index() {
		redirect(base_url());
	}

	public function change($id)
	{
		$array = array(
            'website_language' => $id
        );
        $this->session->set_userdata($array);

        redirect($this->agent->referrer());
	}
}