<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Social_media extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_social_media');
    }

	public function index()
	{
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';

		if(isset($_POST['form1']))
		{
			$this->Model_social_media->update('Facebook',array('social_url'    => $_POST['facebook']));
			$this->Model_social_media->update('Twitter',array('social_url'     => $_POST['twitter']));
			$this->Model_social_media->update('LinkedIn',array('social_url'    => $_POST['linkedin']));
			$this->Model_social_media->update('Google Plus',array('social_url' => $_POST['googleplus']));
			$this->Model_social_media->update('Youtube',array('social_url'     => $_POST['youtube']));
			$this->Model_social_media->update('Instagram',array('social_url'   => $_POST['instagram']));
			$this->Model_social_media->update('Tumblr',array('social_url'      => $_POST['tumblr']));
			$this->Model_social_media->update('Flickr',array('social_url'      => $_POST['flickr']));
			$this->Model_social_media->update('Reddit',array('social_url'      => $_POST['reddit']));
			$this->Model_social_media->update('Snapchat',array('social_url'    => $_POST['snapchat']));
			$this->Model_social_media->update('WhatsApp',array('social_url'    => $_POST['whatsapp']));
			$this->Model_social_media->update('Quora',array('social_url'       => $_POST['quora']));
			$this->Model_social_media->update('StumbleUpon',array('social_url' => $_POST['stumbleupon']));
			$this->Model_social_media->update('Delicious',array('social_url'   => $_POST['delicious']));
			$this->Model_social_media->update('Digg',array('social_url'        => $_POST['digg']));

		
			$success = 'Social Media is updated successfully';
		    
			$this->session->set_flashdata('success',$success);
			redirect(base_url().'admin/social_media');
           
		} else {
			$data['social'] = $this->Model_social_media->show();
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_social_media',$data);
			$this->load->view('admin/view_footer');
		}

	}


}