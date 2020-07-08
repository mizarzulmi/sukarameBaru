<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_comment');
    }

	public function index()
	{
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';

		if(isset($_POST['form1'])) 
		{
			$valid = 1;

			$this->form_validation->set_rules('code_body', 'Comment Body Code', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            }
            
		    if($valid == 1) 
		    {
		    	$data['comment'] = $this->Model_comment->show();

	    		$form_data = array(
					'code_body'  => $_POST['code_body']
	            );
	            $this->Model_comment->update($form_data);
				
				$success = 'Comment Body Code is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/comment');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/comment');
		    }
           
		} else {
			$data['comment'] = $this->Model_comment->show();
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_comment',$data);
			$this->load->view('admin/view_footer');
		}

	}


}