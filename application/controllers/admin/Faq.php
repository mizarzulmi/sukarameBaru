<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_faq');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['faq'] = $this->Model_faq->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_faq',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('faq_title', 'FAQ title', 'trim|required');
			$this->form_validation->set_rules('faq_content', 'FAQ content', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            }

	   		if($valid == 1)
		    {				
		        $form_data = array(
					'faq_title' => $_POST['faq_title'],
					'faq_content' => $_POST['faq_content'],
					'show_on_home' => $_POST['show_on_home']
	            );
	            $this->Model_faq->add($form_data);

		        $success = 'FAQ is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/faq');		        
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/faq/add');
		    }
            
        } else {
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_faq_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no FAQ in this id, then redirect
    	$tot = $this->Model_faq->faq_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/faq');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('faq_title', 'FAQ title', 'trim|required');
			$this->form_validation->set_rules('faq_content', 'FAQ content', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            }
            
		    if($valid == 1) 
		    {
		    	$data['faq'] = $this->Model_faq->getData($id);

	    		$form_data = array(
					'faq_title'  => $_POST['faq_title'],
					'faq_content'=> $_POST['faq_content'],
					'show_on_home' => $_POST['show_on_home']
	            );
	            $this->Model_faq->update($id,$form_data);
				
				$success = 'FAQ is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/faq');
		    }
		    else 
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/faq/add');
		    }

          
		} else {
			$data['faq'] = $this->Model_faq->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_faq_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}

	public function delete($id) 
	{
		// If there is no FAQ in this id, then redirect
    	$tot = $this->Model_faq->faq_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/faq');
        	exit;
    	}

        $this->Model_faq->delete($id);
        $success = 'FAQ is deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/faq');
    }    

}