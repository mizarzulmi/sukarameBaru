<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing_table extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_pricing_table');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['pricing_table'] = $this->Model_pricing_table->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_pricing_table',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('icon', 'Icon', 'trim|required');
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('price', 'Price', 'trim|required');
			$this->form_validation->set_rules('subtitle', 'Subtitle', 'trim|required');
			$this->form_validation->set_rules('text', 'Text', 'trim|required');
			$this->form_validation->set_rules('button_text', 'Button Text', 'trim|required');
			$this->form_validation->set_rules('button_url', 'Button URL', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }
		    
		    if($valid == 1) 
		    {
		        $form_data = array(
					'icon'        => $_POST['icon'],
					'title'       => $_POST['title'],
					'price'       => $_POST['price'],
					'subtitle'    => $_POST['subtitle'],
					'text'        => $_POST['text'],
					'button_text' => $_POST['button_text'],
					'button_url'  => $_POST['button_url']
	            );
	            $this->Model_pricing_table->add($form_data);

		        $success = 'Price table item is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/pricing_table');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/pricing_table/add');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_pricing_table_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no pricing table in this id, then redirect
    	$tot = $this->Model_pricing_table->pricing_table_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/pricing_table');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('icon', 'Icon', 'trim|required');
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('price', 'Price', 'trim|required');
			$this->form_validation->set_rules('subtitle', 'Subtitle', 'trim|required');
			$this->form_validation->set_rules('text', 'Text', 'trim|required');
			$this->form_validation->set_rules('button_text', 'Button Text', 'trim|required');
			$this->form_validation->set_rules('button_url', 'Button URL', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }
		    
		    if($valid == 1) 
		    {
		    	$data['pricing_table'] = $this->Model_pricing_table->getData($id);
		    	
	    		$form_data = array(
					'icon'        => $_POST['icon'],
					'title'       => $_POST['title'],
					'price'       => $_POST['price'],
					'subtitle'    => $_POST['subtitle'],
					'text'        => $_POST['text'],
					'button_text' => $_POST['button_text'],
					'button_url'  => $_POST['button_url']
	            );
	            $this->Model_pricing_table->update($id,$form_data);
				
				$success = 'Pricing table is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/pricing_table');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/pricing_table/edit/'.$id);
		    }
           
		} else {
			$data['pricing_table'] = $this->Model_pricing_table->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_pricing_table_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no pricing table in this id, then redirect
    	$tot = $this->Model_pricing_table->pricing_table_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/pricing_table');
        	exit;
    	}

        $this->Model_pricing_table->delete($id);
        $success = 'Pricing table is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/pricing_table');
    }

}