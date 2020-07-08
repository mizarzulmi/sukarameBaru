<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_photo');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['photo'] = $this->Model_photo->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_photo',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for featured photo<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_photo->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'photo-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $form_data = array(
					'photo_name' => $final_name
	            );
	            $this->Model_photo->add($form_data);

		        $success = 'Photo is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/photo');

		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/photo/add');
		    }
            
        } else {            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_photo_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no photo in this id, then redirect
    	$tot = $this->Model_photo->photo_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/photo');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo<br>';
		    }

		    if($valid == 1)
		    {
		    	$data['photo'] = $this->Model_photo->getData($id);

				unlink('./public/uploads/'.$data['photo']['photo_name']);

				$final_name = 'photo-'.$id.'.'.$ext;
	        	move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

	        	$form_data = array(
					'photo_name' => $final_name
	            );
	            $this->Model_photo->update($id,$form_data);

				$success = 'Photo is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/photo');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/photo/edit'.$id);
		    }
           
		} else {
			$data['photo'] = $this->Model_photo->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_photo_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no photo in this id, then redirect
    	$tot = $this->Model_photo->photo_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/photo');
        	exit;
    	}

        $data['photo'] = $this->Model_photo->getData($id);
        if($data['photo']) {
            unlink('./public/uploads/'.$data['photo']['photo_name']);
        }

        $this->Model_photo->delete($id);
        $success = 'Photo is deleted successfully';
		$this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/photo');
    }

}