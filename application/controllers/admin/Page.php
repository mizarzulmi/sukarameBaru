<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_page');
    }
	public function index()
	{
		$error = '';
		$success = '';

		$data['setting'] = $this->Model_common->get_setting_data();
		$data['page_home'] = $this->Model_page->show_home();
		$data['page_about'] = $this->Model_page->show_about();
		$data['page_faq'] = $this->Model_page->show_faq();
		$data['page_service'] = $this->Model_page->show_service();
		$data['page_testimonial'] = $this->Model_page->show_testimonial();
		$data['page_news'] = $this->Model_page->show_news();
		$data['page_contact'] = $this->Model_page->show_contact();
		$data['page_search'] = $this->Model_page->show_search();
		$data['page_term'] = $this->Model_page->show_term();
		$data['page_privacy'] = $this->Model_page->show_privacy();
		$data['page_team'] = $this->Model_page->show_team();
		$data['page_portfolio'] = $this->Model_page->show_portfolio();
		$data['page_event'] = $this->Model_page->show_event();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_page',$data);
		$this->load->view('admin/view_footer');
		
	}
	public function update()
	{
		$error = '';
		$success = '';

		if(isset($_POST['form_home'])) {
        	$form_data = array(
				'title'                 => $_POST['title'],
				'meta_keyword'          => $_POST['meta_keyword'],
				'meta_description'      => $_POST['meta_description']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page meta information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_home_welcome'])) {
        	$form_data = array(
				'home_welcome_title'       => $_POST['home_welcome_title'],
				'home_welcome_subtitle'    => $_POST['home_welcome_subtitle'],
				'home_welcome_text'        => $_POST['home_welcome_text'],
				'home_welcome_video'       => $_POST['home_welcome_video'],
				'home_welcome_pbar1_text'  => $_POST['home_welcome_pbar1_text'],
				'home_welcome_pbar1_value' => $_POST['home_welcome_pbar1_value'],
				'home_welcome_pbar2_text'  => $_POST['home_welcome_pbar2_text'],
				'home_welcome_pbar2_value' => $_POST['home_welcome_pbar2_value'],
				'home_welcome_pbar3_text'  => $_POST['home_welcome_pbar3_text'],
				'home_welcome_pbar3_value' => $_POST['home_welcome_pbar3_value'],
				'home_welcome_pbar4_text'  => $_POST['home_welcome_pbar4_text'],
				'home_welcome_pbar4_value' => $_POST['home_welcome_pbar4_value'],
				'home_welcome_pbar5_text'  => $_POST['home_welcome_pbar5_text'],
				'home_welcome_pbar5_value' => $_POST['home_welcome_pbar5_value'],
				'home_welcome_status'      => $_POST['home_welcome_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page welcome information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_home_welcome_video_bg'])) {
			$valid = 1;
			$path = $_FILES['home_welcome_video_bg']['name'];
		    $path_tmp = $_FILES['home_welcome_video_bg']['tmp_name'];
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
		    	unlink('./public/uploads/'.$data['page']['home_welcome_video_bg']);

		    	// updating the data
		    	$final_name = 'home_welcome_video_bg'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
		    			        
				$form_data = array(
					'home_welcome_video_bg' => $final_name
	            );
	        	$this->Model_page->update_home($form_data);

	        	$success = 'Home page welcome video background is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/page');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/page');
		    }
		}

		if(isset($_POST['form_home_why_choose'])) {
        	$form_data = array(
				'home_why_choose_title'    => $_POST['home_why_choose_title'],
				'home_why_choose_subtitle' => $_POST['home_why_choose_subtitle'],
				'home_why_choose_status'   => $_POST['home_why_choose_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page why choose us information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_home_feature'])) {
        	$form_data = array(
				'home_feature_title'    => $_POST['home_feature_title'],
				'home_feature_subtitle' => $_POST['home_feature_subtitle'],
				'home_feature_status'   => $_POST['home_feature_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page feature information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_home_service'])) {
        	$form_data = array(
				'home_service_title'    => $_POST['home_service_title'],
				'home_service_subtitle' => $_POST['home_service_subtitle'],
				'home_service_status'   => $_POST['home_service_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page service information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		

		if(isset($_POST['form_home_counter_text'])) {
        	$form_data = array(
				'counter_1_title' => $_POST['counter_1_title'],
				'counter_1_value' => $_POST['counter_1_value'],
				'counter_1_icon'  => $_POST['counter_1_icon'],
				'counter_2_title' => $_POST['counter_2_title'],
				'counter_2_value' => $_POST['counter_2_value'],
				'counter_2_icon'  => $_POST['counter_2_icon'],
				'counter_3_title' => $_POST['counter_3_title'],
				'counter_3_value' => $_POST['counter_3_value'],
				'counter_3_icon'  => $_POST['counter_3_icon'],
				'counter_4_title' => $_POST['counter_4_title'],
				'counter_4_value' => $_POST['counter_4_value'],
				'counter_4_icon'  => $_POST['counter_4_icon'],
				'counter_status'  => $_POST['counter_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page counter information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_home_counter_photo'])) {
			$valid = 1;
			$path = $_FILES['counter_photo']['name'];
		    $path_tmp = $_FILES['counter_photo']['tmp_name'];
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
		    	unlink('./public/uploads/'.$data['page']['counter_photo']);

		    	// updating the data
		    	$final_name = 'counter'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
		    			        
				$form_data = array(
					'counter_photo' => $final_name
	            );
	        	$this->Model_page->update_home($form_data);

	        	$success = 'Home page counter photo is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/page');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/page');
		    }
		}



		if(isset($_POST['form_home_booking_photo'])) {
			$valid = 1;
			$path = $_FILES['home_booking_photo']['name'];
		    $path_tmp = $_FILES['home_booking_photo']['tmp_name'];
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
		    	unlink('./public/uploads/'.$data['page']['home_booking_photo']);

		    	// updating the data
		    	$final_name = 'home_booking_photo'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
		    			        
				$form_data = array(
					'home_booking_photo' => $final_name
	            );
	        	$this->Model_page->update_home($form_data);

	        	$success = 'Home page booking photo is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/page');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/page');
		    }
		}

		if(isset($_POST['form_home_portfolio'])) {
        	$form_data = array(
				'home_portfolio_title'    => $_POST['home_portfolio_title'],
				'home_portfolio_subtitle' => $_POST['home_portfolio_subtitle'],
				'home_portfolio_status'   => $_POST['home_portfolio_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page portfolio information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_home_booking'])) {
        	$form_data = array(
				'home_booking_form_title' => $_POST['home_booking_form_title'],
				'home_booking_faq_title'  => $_POST['home_booking_faq_title'],
				'home_booking_status'     => $_POST['home_booking_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page booking information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_home_team'])) {
        	$form_data = array(
				'home_team_title'    => $_POST['home_team_title'],
				'home_team_subtitle' => $_POST['home_team_subtitle'],
				'home_team_status'   => $_POST['home_team_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page team information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_home_pricing_table'])) {
        	$form_data = array(
				'home_ptable_title'    => $_POST['home_ptable_title'],
				'home_ptable_subtitle' => $_POST['home_ptable_subtitle'],
				'home_ptable_status'   => $_POST['home_ptable_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page pricing table information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_home_testimonial'])) {
        	$form_data = array(
				'home_testimonial_title'    => $_POST['home_testimonial_title'],
				'home_testimonial_subtitle' => $_POST['home_testimonial_subtitle'],
				'home_testimonial_status'   => $_POST['home_testimonial_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page testimonial information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_home_testimonial_photo'])) {
			$valid = 1;
			$path = $_FILES['home_testimonial_photo']['name'];
		    $path_tmp = $_FILES['home_testimonial_photo']['tmp_name'];
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
		    	unlink('./public/uploads/'.$data['page']['home_testimonial_photo']);

		    	// updating the data
		    	$final_name = 'home_testimonial_photo'.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
		    			        
				$form_data = array(
					'home_testimonial_photo' => $final_name
	            );
	        	$this->Model_page->update_home($form_data);

	        	$success = 'Home page testimonial photo is updated successfully!';
		    	$this->session->set_flashdata('success',$success);
		    	redirect(base_url().'admin/page');
		    } else {
		    	$this->session->set_flashdata('error',$error);
		    	redirect(base_url().'admin/page');
		    }
		}

		if(isset($_POST['form_home_blog'])) {
        	$form_data = array(
				'home_blog_title'    => $_POST['home_blog_title'],
				'home_blog_subtitle' => $_POST['home_blog_subtitle'],
				'home_blog_item'     => $_POST['home_blog_item'],
				'home_blog_status'   => $_POST['home_blog_status']
            );
        	$this->Model_page->update_home($form_data);
        	$success = 'Home page blog information is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		
		if(isset($_POST['form_about'])) {
        	$form_data = array(
				'about_heading' => $_POST['about_heading'],
				'about_content' => $_POST['about_content'],
				'mt_about'      => $_POST['mt_about'],
				'mk_about'      => $_POST['mk_about'],
				'md_about'      => $_POST['md_about']
            );
        	$this->Model_page->update_about($form_data);
        	$success = 'About Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_faq'])) {
        	$form_data = array(
				'faq_heading' => $_POST['faq_heading'],
				'mt_faq'      => $_POST['mt_faq'],
				'mk_faq'      => $_POST['mk_faq'],
				'md_faq'      => $_POST['md_faq']
            );
        	$this->Model_page->update_faq($form_data);
        	$success = 'FAQ Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_service'])) {
        	$form_data = array(
				'service_heading' => $_POST['service_heading'],
				'mt_service'      => $_POST['mt_service'],
				'mk_service'      => $_POST['mk_service'],
				'md_service'      => $_POST['md_service']
            );
        	$this->Model_page->update_service($form_data);
        	$success = 'Service Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_testimonial'])) {
        	$form_data = array(
				'testimonial_heading' => $_POST['testimonial_heading'],
				'mt_testimonial'      => $_POST['mt_testimonial'],
				'mk_testimonial'      => $_POST['mk_testimonial'],
				'md_testimonial'      => $_POST['md_testimonial']
            );
        	$this->Model_page->update_testimonial($form_data);
        	$success = 'Testimonial Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_news'])) {
        	$form_data = array(
				'news_heading' => $_POST['news_heading'],
				'mt_news'      => $_POST['mt_news'],
				'mk_news'      => $_POST['mk_news'],
				'md_news'      => $_POST['md_news']
            );
        	$this->Model_page->update_news($form_data);
        	$success = 'News Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_event'])) {
        	$form_data = array(
				'event_heading' => $_POST['event_heading'],
				'mt_event'      => $_POST['mt_event'],
				'mk_event'      => $_POST['mk_event'],
				'md_event'      => $_POST['md_event']
            );
        	$this->Model_page->update_event($form_data);
        	$success = 'Event Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_contact'])) {
        	$form_data = array(
				'contact_heading' => $_POST['contact_heading'],
				'contact_address' => $_POST['contact_address'],
				'contact_email'   => $_POST['contact_email'],
				'contact_phone'   => $_POST['contact_phone'],
				'contact_map'     => $_POST['contact_map'],
				'mt_contact'      => $_POST['mt_contact'],
				'mk_contact'      => $_POST['mk_contact'],
				'md_contact'      => $_POST['md_contact']
            );
        	$this->Model_page->update_contact($form_data);
        	$success = 'Contact Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_search'])) {
        	$form_data = array(
				'search_heading' => $_POST['search_heading'],
				'mt_search'      => $_POST['mt_search'],
				'mk_search'      => $_POST['mk_search'],
				'md_search'      => $_POST['md_search']
            );
        	$this->Model_page->update_search($form_data);
        	$success = 'Search Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_term'])) {
        	$form_data = array(
				'term_heading' => $_POST['term_heading'],
				'term_content' => $_POST['term_content'],
				'mt_term'      => $_POST['mt_term'],
				'mk_term'      => $_POST['mk_term'],
				'md_term'      => $_POST['md_term']
            );
        	$this->Model_page->update_term($form_data);
        	$success = 'Term Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_privacy'])) {
        	$form_data = array(
				'privacy_heading' => $_POST['privacy_heading'],
				'privacy_content' => $_POST['privacy_content'],
				'mt_privacy'      => $_POST['mt_privacy'],
				'mk_privacy'      => $_POST['mk_privacy'],
				'md_privacy'      => $_POST['md_privacy']
            );
        	$this->Model_page->update_privacy($form_data);
        	$success = 'Privacy Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_team'])) {
        	$form_data = array(
				'team_heading' => $_POST['team_heading'],
				'mt_team'      => $_POST['mt_team'],
				'mk_team'      => $_POST['mk_team'],
				'md_team'      => $_POST['md_team']
            );
        	$this->Model_page->update_team($form_data);
        	$success = 'Team Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

		if(isset($_POST['form_portfolio'])) {
        	$form_data = array(
				'portfolio_heading' => $_POST['portfolio_heading'],
				'mt_portfolio'      => $_POST['mt_portfolio'],
				'mk_portfolio'      => $_POST['mk_portfolio'],
				'md_portfolio'      => $_POST['md_portfolio']
            );
        	$this->Model_page->update_portfolio($form_data);
        	$success = 'Portfolio Page Setting is updated successfully!';
        	$this->session->set_flashdata('success',$success);
		    redirect(base_url().'admin/page');
		}

	}
	
}
