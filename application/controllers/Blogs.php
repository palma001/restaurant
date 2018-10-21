<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Blogs extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('users_model');
			$this->load->model('types_users_model');
			$this->load->model('blogs_model');
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->helper('file');

			if (!$this->session->userdata['user_id']){
	            redirect(base_url());
			}
		}

		public function index()
		{
			$data['blogs'] = $this->blogs_model->read();
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('blogs/index',$data);
			$this->load->view('layouts/footer');
		}

		public function create()
		{
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('blogs/create');
	    	$this->load->view('layouts/footer');
		}


		public function store()
		{
			$config['upload_path']   = './uploads/blogs/';
			$config['allowed_types'] = 'jpg|jpeg|gif|png';
			
			$this->load->library('upload',$config);

			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->create();
	            $this->session->set_flashdata('message','Unable to Upload the File');
			}else{

				$image_info = $this->upload->data();

				$images = $image_info['file_name'];

				$data = array(
					'user_id'     => $this->session->userdata['user_id'],
					'title'       => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'image'       => $images,
				);

				$config = array(
			        array(
		                'field' => 'title',
		                'label' => 'Title',
		                'rules' => 'required|min_length[10]'
			        ), 
			        array(
		                'field' => 'description',
		                'label' => 'Description',
		                'rules' => 'required|min_length[10]'
			        ),
			    );

				$this->form_validation->set_rules($config);

		        if ($this->form_validation->run() == FALSE){
		        	$this->create();
		        }
		        else{
					$this->blogs_model->store($data);	
					$this->session->set_flashdata('message','Saved Successfully');
					redirect(base_url('index.php/blogs/'));
		        }
			}		
		}
		public function edit()
		{
	       	$id = $this->uri->segment(3);
			$blogs = $this->blogs_model->get($id);
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');

			if (!$id) {
				redirect(base_url('index.php/blogs'));
			}else{
				$this->load->view('blogs/edit',array('blogs'=>$blogs));
			}
			$this->load->view('layouts/footer');
		}

		public function update($id)
		{
			
			$config = array(
		        array(
	                'field' => 'title',
	                'label' => 'Title',
	                'rules' => 'required|min_length[10]'
		        ), 
		        array(
	                'field' => 'description',
	                'label' => 'Description',
	                'rules' => 'required|min_length[10]'
		        ),
		    );

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->edit();
	        }else{

				$config['upload_path']   = './uploads/blogs/';
				$config['allowed_types'] = 'jpg|jpeg|gif|png';
				$this->load->library('upload',$config);

				$image_info = $this->upload->data();
				$images = $image_info['file_name'];

				if (!$this->upload->do_upload('img')) {

					$error = array('error' => $this->upload->display_errors());
					$this->edit();
		            $this->session->set_flashdata('message','Unable to Upload the File');
					redirect(base_url('index.php/blogs/edit/'.$id));

				}else{

					$data = array(
						'user_id'     => $this->session->userdata['user_id'],
						'title'       => $this->input->post('title'),
						'description' => $this->input->post('description'),
						'image'       => $images,
					);

					$this->blogs_model->update($id,$data);	
					$this->session->set_flashdata('message','Modification Made Successfully');
					redirect(base_url('index.php/blogs/'));
				}
	        }
		}

		public function destroy(){

			$id = $this->uri->segment(3);
			$this->blogs_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
			redirect(base_url('index.php/blogs/'));
		}
	}
?>
