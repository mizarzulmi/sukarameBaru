<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_setting');
    }
	public function index()
	{
		$error = '';
		$success = '';

		$data['setting'] = $this->Model_common->get_setting_data();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_setting',$data);
		$this->load->view('admin/view_footer');
		
	}
	public function update()
	{
		$error = '';
		$success = '';

		$data['setting'] = $this->Model_common->get_setting_data();

		if(isset($_POST['form_logo'])) {
			$valid = 1;
			$path = $_FILES['photo_logo']['name'];
		    $path_tmp = $_FILES['photo_logo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	// removing the existing photo
		    	unlink('./public/uploads/'.$data['setting']['logo']);

		    	// updating the data
		    	$final_name = 'logo'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
		    			        
				$form_data = array(
					'logo' => $final_name
	            );
	        	$this->Model_setting->update($form_data);

	        	$success = 'Logo is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_favicon'])) {
			$valid = 1;
			$path = $_FILES['photo_favicon']['name'];
		    $path_tmp = $_FILES['photo_favicon']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	// removing the existing photo
		    	unlink('./public/uploads/'.$data['setting']['favicon']);

		    	// updating the data
		    	$final_name = 'favicon'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
		    			        
				$form_data = array(
					'favicon' => $final_name
	            );
	        	$this->Model_setting->update($form_data);

	        	$success = 'Favicon is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_top_bar'])) {
        	$form_data = array(
				'top_bar_email'    => $_POST['top_bar_email'],
				'top_bar_phone'    => $_POST['top_bar_phone']
            );
        	$this->Model_setting->update($form_data);   	
        	$success = 'Top Bar Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/setting');
		}


		if(isset($_POST['form_footer_general'])) {
        	$form_data = array(
				'footer_col1_title'            => $_POST['footer_col1_title'],
				'footer_col2_title'            => $_POST['footer_col2_title'],
				'footer_col3_title'            => $_POST['footer_col3_title'],
				'footer_col4_title'            => $_POST['footer_col4_title'],
				'footer_copyright'             => $_POST['footer_copyright'],
				'footer_address'               => $_POST['footer_address'],
				'footer_email'                 => $_POST['footer_email'],
				'footer_phone'                 => $_POST['footer_phone'],
				'footer_recent_news_item'      => $_POST['footer_recent_news_item'],
				'footer_recent_portfolio_item' => $_POST['footer_recent_portfolio_item']				
            );
        	$this->Model_setting->update($form_data);   	
        	$success = 'Footer General Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/setting');
		}

		if(isset($_POST['form_footer_newsletter'])) {
        	$form_data = array(
				'newsletter_text'  => $_POST['newsletter_text']
            );
        	$this->Model_setting->update($form_data);   	
        	$success = 'Footer Newsletter Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/setting');
		}

		if(isset($_POST['form_footer_cta'])) {
        	$form_data = array(
				'cta_text'        => $_POST['cta_text'],
				'cta_button_text' => $_POST['cta_button_text'],
				'cta_button_url'  => $_POST['cta_button_url']
            );
        	$this->Model_setting->update($form_data);   	
        	$success = 'Footer Call to Action Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/setting');
		}

		if(isset($_POST['form_footer_cta_background'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	// removing the existing photo
		    	unlink('./public/uploads/'.$data['page']['cta_background']);

		    	// updating the data
		    	$final_name = 'cta_background'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
		    			        
				$form_data = array(
					'cta_background' => $final_name
	            );
	        	$this->Model_setting->update($form_data);

	        	$success = 'Call to Action Background photo is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_email'])) {
        	$form_data = array(
				'send_email_from'  => $_POST['send_email_from'],
				'receive_email_to' => $_POST['receive_email_to']
            );
        	$this->Model_setting->update($form_data);   	
        	$success = 'Email Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/setting');
		}

		if(isset($_POST['form_sidebar'])) {
        	$form_data = array(
				'sidebar_total_recent_post'                => $_POST['sidebar_total_recent_post'],
				'sidebar_news_heading_category'            => $_POST['sidebar_news_heading_category'],
				'sidebar_news_heading_recent_post'         => $_POST['sidebar_news_heading_recent_post'],
				'sidebar_total_upcoming_event'             => $_POST['sidebar_total_upcoming_event'],
				'sidebar_total_past_event'                 => $_POST['sidebar_total_past_event'],
				'sidebar_event_heading_upcoming'           => $_POST['sidebar_event_heading_upcoming'],
				'sidebar_event_heading_past'               => $_POST['sidebar_event_heading_past'],				
				'sidebar_service_heading_service'          => $_POST['sidebar_service_heading_service'],
				'sidebar_service_heading_quick_contact'    => $_POST['sidebar_service_heading_quick_contact'],
				'sidebar_portfolio_heading_project_detail' => $_POST['sidebar_portfolio_heading_project_detail'],
				'sidebar_portfolio_heading_quick_contact'  => $_POST['sidebar_portfolio_heading_quick_contact']
            );
        	$this->Model_setting->update($form_data);   	
        	$success = 'Sidebar Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/setting');
		}

		if(isset($_POST['form_color'])) {
        	$form_data = array(
				'front_end_color' => $_POST['front_end_color']
            );
        	$this->Model_setting->update($form_data);   	
        	$success = 'Front End Color Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/setting');
		}

		if(isset($_POST['form_banner_about'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_about']);
		    	$final_name = 'banner_about'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_about' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'About Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}

		if(isset($_POST['form_banner_faq'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_faq']);
		    	$final_name = 'banner_faq'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_faq' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'FAQ Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_banner_service'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_service']);
		    	$final_name = 'banner_service'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_service' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Service Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_banner_testimonial'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_testimonial']);
		    	$final_name = 'banner_testimonial'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_testimonial' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Testimonial Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_banner_news'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_news']);
		    	$final_name = 'banner_news'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_news' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'News Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_banner_event'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_event']);
		    	$final_name = 'banner_event'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_event' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Event Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_banner_contact'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_contact']);
		    	$final_name = 'banner_contact'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_contact' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Contact Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_banner_search'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_search']);
		    	$final_name = 'banner_search'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_search' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Search Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}



		if(isset($_POST['form_banner_terms'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_terms']);
		    	$final_name = 'banner_terms'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_terms' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Terms and Conditions Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}

		if(isset($_POST['form_banner_privacy'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_privacy']);
		    	$final_name = 'banner_privacy'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_privacy' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Privacy Policy Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}

		

		if(isset($_POST['form_banner_team'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_team']);
		    	$final_name = 'banner_team'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_team' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Team Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_banner_portfolio'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_portfolio']);
		    	$final_name = 'banner_portfolio'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_portfolio' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Portfolio Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}
		

		if(isset($_POST['form_banner_verify_subscriber'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_verify_subscriber']);
		    	$final_name = 'banner_verify_subscriber'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_verify_subscriber' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Verify Subscriber Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_banner_pricing'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_pricing']);
		    	$final_name = 'banner_pricing'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_pricing' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Pricing Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_banner_photo_gallery'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo<br>';
		    }
		    if($valid == 1) {
		    	unlink('./public/uploads/'.$data['setting']['banner_photo_gallery']);
		    	$final_name = 'banner_photo_gallery'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );		    			        
				$form_data = array(
					'banner_photo_gallery' => $final_name
	            );
	        	$this->Model_setting->update($form_data);
	        	$success = 'Photo Gallery Page Banner is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/setting');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/setting');
		    }
		}


		if(isset($_POST['form_payment'])) {
        	$form_data = array(
				'paypal_email'      => $_POST['paypal_email'],
				'stripe_public_key' => $_POST['stripe_public_key'],
				'stripe_secret_key' => $_POST['stripe_secret_key'],
				'bank_detail'       => $_POST['bank_detail']
            );
        	$this->Model_setting->update($form_data);   	
        	$success = 'Payment Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/setting');
		}


		$data['setting'] = $this->Model_common->get_setting_data();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_setting',$data);
		$this->load->view('admin/view_footer');
	}
	
}
