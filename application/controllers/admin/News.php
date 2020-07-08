<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_news');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['news'] = $this->Model_news->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_news',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('news_title', 'News Title', 'trim|required');
			$this->form_validation->set_rules('news_content_short', 'News Short Content', 'trim|required');
			$this->form_validation->set_rules('news_content', 'News Content', 'trim|required');
			$this->form_validation->set_rules('category_id', 'Category', 'trim|required');

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

		    $path1 = $_FILES['banner']['name'];
		    $path_tmp1 = $_FILES['banner']['tmp_name'];

		    if($path1!='') {
		        $ext1 = pathinfo( $path1, PATHINFO_EXTENSION );
		        $file_name = basename( $path1, '.' . $ext1 );
		        $ext_check1 = $this->Model_common->extension_check_photo($ext1);
		        if($ext_check1 == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for banner<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_news->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'news-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $final_name1 = 'news-banner-'.$ai_id.'.'.$ext1;
		        move_uploaded_file( $path_tmp1, './public/uploads/'.$final_name1 );

		        $form_data = array(
					'news_title'         => $_POST['news_title'],
					'news_content'       => $_POST['news_content'],
					'news_content_short' => $_POST['news_content_short'],
					'news_date'          => $_POST['news_date'],
					'photo'              => $final_name,
					'banner'             => $final_name1,
					'category_id'        => $_POST['category_id'],
					'comment'            => $_POST['comment'],
					'meta_title'         => $_POST['meta_title'],
					'meta_keyword'       => $_POST['meta_keyword'],
					'meta_description'   => $_POST['meta_description']
	            );
	            $this->Model_news->add($form_data);

		        $success = 'News is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/news');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/news/add');
		    }
            
        } else {
            $data['all_category'] = $this->Model_news->get_category();
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_news_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no news in this id, then redirect
    	$tot = $this->Model_news->news_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/news');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';

		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('news_title', 'News Title', 'trim|required');
			$this->form_validation->set_rules('news_content_short', 'News Short Content', 'trim|required');
			$this->form_validation->set_rules('news_content', 'News Content', 'trim|required');

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

		    $path1 = $_FILES['banner']['name'];
		    $path_tmp1 = $_FILES['banner']['tmp_name'];

		    if($path1!='') {
		        $ext1 = pathinfo( $path1, PATHINFO_EXTENSION );
		        $file_name1 = basename( $path1, '.' . $ext1 );
		        $ext_check1 = $this->Model_common->extension_check_photo($ext1);
		        if($ext_check1 == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		        }
		    }

		    if($valid == 1) 
		    {
		    	$data['news'] = $this->Model_news->getData($id);

		    	if($path == '' && $path1 == '') {
		    		$form_data = array(
						'news_title'         => $_POST['news_title'],
						'news_content'       => $_POST['news_content'],
						'news_content_short' => $_POST['news_content_short'],
						'news_date'          => $_POST['news_date'],
						'category_id'        => $_POST['category_id'],
						'comment'            => $_POST['comment'],
						'meta_title'         => $_POST['meta_title'],
						'meta_keyword'       => $_POST['meta_keyword'],
						'meta_description'   => $_POST['meta_description']
		            );
		            $this->Model_news->update($id,$form_data);
				}
				if($path != '' && $path1 == '') {
					unlink('./public/uploads/'.$data['news']['photo']);

					$final_name = 'news-'.$id.'.'.$ext;
		        	move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        	$form_data = array(
						'news_title'         => $_POST['news_title'],
						'news_content'       => $_POST['news_content'],
						'news_content_short' => $_POST['news_content_short'],
						'news_date'          => $_POST['news_date'],
						'photo'              => $final_name,
						'category_id'        => $_POST['category_id'],
						'comment'            => $_POST['comment'],
						'meta_title'         => $_POST['meta_title'],
						'meta_keyword'       => $_POST['meta_keyword'],
						'meta_description'   => $_POST['meta_description']
		            );
		            $this->Model_news->update($id,$form_data);
				}
				if($path == '' && $path1 != '') {
					unlink('./public/uploads/'.$data['news']['banner']);

					$final_name1 = 'news-banner-'.$id.'.'.$ext1;
		        	move_uploaded_file( $path_tmp1, './public/uploads/'.$final_name1 );

		        	$form_data = array(
						'news_title'         => $_POST['news_title'],
						'news_content'       => $_POST['news_content'],
						'news_content_short' => $_POST['news_content_short'],
						'news_date'          => $_POST['news_date'],
						'banner'             => $final_name1,
						'category_id'        => $_POST['category_id'],
						'comment'            => $_POST['comment'],
						'meta_title'         => $_POST['meta_title'],
						'meta_keyword'       => $_POST['meta_keyword'],
						'meta_description'   => $_POST['meta_description']
		            );
		            $this->Model_news->update($id,$form_data);
				}
				if($path != '' && $path1 != '') {

					unlink('./public/uploads/'.$data['news']['photo']);
					unlink('./public/uploads/'.$data['news']['banner']);

					$final_name = 'news-'.$id.'.'.$ext;
		        	move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$final_name1 = 'news-banner-'.$id.'.'.$ext1;
		        	move_uploaded_file( $path_tmp1, './public/uploads/'.$final_name1 );

		        	$form_data = array(
						'news_title'         => $_POST['news_title'],
						'news_content'       => $_POST['news_content'],
						'news_content_short' => $_POST['news_content_short'],
						'news_date'          => $_POST['news_date'],
						'photo'              => $final_name,
						'banner'             => $final_name1,
						'category_id'        => $_POST['category_id'],
						'comment'            => $_POST['comment'],
						'meta_title'         => $_POST['meta_title'],
						'meta_keyword'       => $_POST['meta_keyword'],
						'meta_description'   => $_POST['meta_description']
		            );
		            $this->Model_news->update($id,$form_data);
				}

				$success = 'News is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/news');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/news/add');
		    }
           
		} else {
			$data['news'] = $this->Model_news->getData($id);
			$data['all_category'] = $this->Model_news->get_category();
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_news_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
    	$tot = $this->Model_news->news_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/news');
        	exit;
    	}

        $data['news'] = $this->Model_news->getData($id);
        if($data['news']) {
            unlink('./public/uploads/'.$data['news']['photo']);
            unlink('./public/uploads/'.$data['news']['banner']);
        }

        $this->Model_news->delete($id);
        $success = 'News is deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/news');
    }

 
}