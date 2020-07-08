<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_category');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['category'] = $this->Model_category->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_category',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['banner']['name'];
		    $path_tmp = $_FILES['banner']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for banner<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_category->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'category-banner-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $form_data = array(
					'category_name'    => $_POST['category_name'],
					'category_banner'  => $final_name,
					'meta_title'       => $_POST['meta_title'],
					'meta_keyword'     => $_POST['meta_keyword'],
					'meta_description' => $_POST['meta_description']
	            );
	            $this->Model_category->add($form_data);

		        $success = 'Category is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/category');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/category/add');
		    }
            
        } else {            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_category_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	$tot = $this->Model_category->category_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/category');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['banner']['name'];
		    $path_tmp = $_FILES['banner']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		        }
		    }

		    if($valid == 1) 
		    {
		    	$data['category'] = $this->Model_category->get_category($id);

		    	if($path == '') {
		    		$form_data = array(
						'category_name'    => $_POST['category_name'],
						'meta_title'       => $_POST['meta_title'],
						'meta_keyword'     => $_POST['meta_keyword'],
						'meta_description' => $_POST['meta_description']
		            );
		            $this->Model_category->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/'.$data['category']['category_banner']);

					$final_name = 'category-banner-'.$id.'.'.$ext;
		        	move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        	$form_data = array(
						'category_name'    => $_POST['category_name'],
						'category_banner'  => $final_name,
						'meta_title'       => $_POST['meta_title'],
						'meta_keyword'     => $_POST['meta_keyword'],
						'meta_description' => $_POST['meta_description']
		            );
		            $this->Model_category->update($id,$form_data);
				}
				
				$success = 'Category is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/category');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/category/edit'.$id);
		    }
           
		} else {
			$data['category'] = $this->Model_category->get_category($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_category_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
    	$tot = $this->Model_category->category_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/category');
        	exit;
    	}

    	// Check if there is any news in this category. If found, category can not be deleted.
    	$status = $this->Model_category->check_news($id);
    	if($status) 
    	{
    		$error = 'Category can not be deleted because there is news under this';
    		$this->session->set_flashdata('error',$error);
    		redirect(base_url().'admin/category');
    	}
    	else
    	{
			$category = $this->Model_category->get_category($id);
			unlink('./public/uploads/'.$category['category_banner']);

	        $this->Model_category->delete($id);
	        $success = 'Category is deleted successfully';
	        $this->session->set_flashdata('success',$success);
	        redirect(base_url().'admin/category');
    	}    	
    }

}