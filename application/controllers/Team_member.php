<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_member extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_team_member');
        $this->load->model('Model_portfolio');
    }

    public function index()
	{
		redirect(base_url());
	}

	public function view($id=0)
	{
		if( !isset($id) || !is_numeric($id) ) {
			redirect(base_url());
		}

		$tot = $this->Model_team_member->team_member_check($id);
		if(!$tot) {
			redirect(base_url());
		}

		$data['setting'] = $this->Model_common->all_setting();
		$data['page_team'] = $this->Model_common->all_page_team();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['team_members'] = $this->Model_team_member->all_team_member();
		$data['member'] = $this->Model_team_member->team_member_detail($id);

		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$data['id'] = $id;

		$this->load->view('view_header',$data);
		$this->load->view('view_team_member',$data);
		$this->load->view('view_footer');
	}
}