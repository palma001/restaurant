<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Categories extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('categories_model');
			$this->load->library('session');
			$this->load->library('form_validation');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url());
			}
		}

		public function index()
		{
			$data['categories'] = $this->categories_model->read();
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('categories/index',$data);
			$this->load->view('layouts/footer');
		}

		public function create()
		{
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('categories/create');
	    	$this->load->view('layouts/footer');
		}

		public function store()
		{

			$config = array(
		        array(
	                'field' => 'category',
	                'label' => 'Category',
	                'rules' => 'required|is_unique[categories.category]'
		        ),  
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->create();
	        }
	        else{
	        	
				$data = array(
					'category'    => $this->input->post('category'),
				);
				$this->categories_model->store($data);	
				$this->session->set_flashdata('message','Saved successfully');
				redirect(base_url('categories/'));
	        }
		}

		public function edit()
		{
			$id         = $this->uri->segment(3);
			$categories = $this->categories_model->get($id);
			
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');

			if (!$id) {
				redirect(base_url('categories/'));
			}else{
				$this->load->view('categories/edit', array('categories' => $categories));
			}
			$this->load->view('layouts/footer');
		}

		public function update($id)
		{
			$config = array(
		        array(
	                'field' => 'category',
	                'label' => 'Category',
	                'rules' => 'required'
		        ), 
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->edit();
	        }else{
				$data = array(
					'category' => $this->input->post('category'),
				);

				$this->categories_model->update($id,$data);

				$this->session->set_flashdata('message','Modification Made Successfully');
				redirect(base_url('categories/'));	
			}
		}

		public function destroy(){

			$id = $this->uri->segment(3);
			$this->categories_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
			redirect(base_url('categories/'));
		}
	}
?>