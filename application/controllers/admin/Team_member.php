<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_member extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_team_member');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['team_member'] = $this->Model_team_member->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_team_member',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('designation', 'Designation', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

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
				$next_id = $this->Model_team_member->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'team-member-'.$ai_id.'.'.$ext;
				$source_image = $path_tmp;
				$destination = './public/uploads/'.$final_name;
				$new_width = 400;
			  	$new_height = 400;
			 	$quality = 100;
				$this->Model_common->image_handler($source_image,$destination,$new_width,$new_height,$quality);

		        $form_data = array(
					'name'             => $_POST['name'],
					'designation'      => $_POST['designation'],
					'photo'            => $final_name,
					'detail'           => $_POST['detail'],
					'facebook'         => $_POST['facebook'],
					'twitter'          => $_POST['twitter'],
					'linkedin'         => $_POST['linkedin'],
					'youtube'          => $_POST['youtube'],
					'google_plus'      => $_POST['google_plus'],
					'instagram'        => $_POST['instagram'],
					'flickr'           => $_POST['flickr'],
					'phone'            => $_POST['phone'],
					'email'            => $_POST['email'],
					'website'          => $_POST['website'],
					'meta_title'       => $_POST['meta_title'],
					'meta_keyword'     => $_POST['meta_keyword'],
					'meta_description' => $_POST['meta_description']
	            );
	            $this->Model_team_member->add($form_data);

		        $success = 'Team Member is added successfully!';
				$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/team_member');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/team_member/add');
		    }
            
        } else {
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_team_member_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	$tot = $this->Model_team_member->team_member_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/team_member');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('designation', 'Designation', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

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
		    }

		    if($valid == 1) 
		    {
		    	$data['team_member'] = $this->Model_team_member->get_team_member($id);

		    	if($path == '') {
		    		$form_data = array(
						'name'             => $_POST['name'],
						'designation'      => $_POST['designation'],
						'detail'           => $_POST['detail'],
						'facebook'         => $_POST['facebook'],
						'twitter'          => $_POST['twitter'],
						'linkedin'         => $_POST['linkedin'],
						'youtube'          => $_POST['youtube'],
						'google_plus'      => $_POST['google_plus'],
						'instagram'        => $_POST['instagram'],
						'flickr'           => $_POST['flickr'],
						'phone'            => $_POST['phone'],
						'email'            => $_POST['email'],
						'website'          => $_POST['website'],
						'meta_title'       => $_POST['meta_title'],
						'meta_keyword'     => $_POST['meta_keyword'],
						'meta_description' => $_POST['meta_description']
		            );
		            $this->Model_team_member->update($id,$form_data);
		    	}
		    	else 
		    	{
		    		unlink('./public/uploads/'.$_POST['current_photo']);

					$final_name = 'team-member-'.$id.'.'.$ext;

					$source_image = $path_tmp;
					$destination = './public/uploads/'.$final_name;
					$new_width = 400;
				  	$new_height = 400;
				 	$quality = 100;
					$this->Model_common->image_handler($source_image,$destination,$new_width,$new_height,$quality);

		    		$form_data = array(
						'name'             => $_POST['name'],
						'designation'      => $_POST['designation'],
						'photo'            => $final_name,
						'detail'           => $_POST['detail'],
						'facebook'         => $_POST['facebook'],
						'twitter'          => $_POST['twitter'],
						'linkedin'         => $_POST['linkedin'],
						'youtube'          => $_POST['youtube'],
						'google_plus'      => $_POST['google_plus'],
						'instagram'        => $_POST['instagram'],
						'flickr'           => $_POST['flickr'],
						'phone'            => $_POST['phone'],
						'email'            => $_POST['email'],
						'website'          => $_POST['website'],
						'meta_title'       => $_POST['meta_title'],
						'meta_keyword'     => $_POST['meta_keyword'],
						'meta_description' => $_POST['meta_description']
		            );
		            $this->Model_team_member->update($id,$form_data);
		    	}

				$success = 'Team Member is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/team_member');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/team_member/edit/'.$id);
		    }           
		} else {
			$data['team_member'] = $this->Model_team_member->get_team_member($id);
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_team_member_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
    	$tot = $this->Model_team_member->team_member_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/team_member');
        	exit;
    	}

        $data['team_member'] = $this->Model_team_member->get_team_member($id);
        if($data['team_member']) {
            unlink('./public/uploads/'.$data['team_member']['photo']);
        }

        $this->Model_team_member->delete($id);
        $success = 'Team Member is deleted successfully';
        $this->session->set_flashdata('success',$success);
    	redirect(base_url().'admin/team_member');
    }

 
}