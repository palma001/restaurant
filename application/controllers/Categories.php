<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Categories extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('categories_model');
			$this->load->library('session');
			$this->load->library('form_validation');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url('login'));
			}
		}

		public function index()
		{
			$data['categories'] = $this->categories_model->read();
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('modals/modal_confirm');
			$this->load->view('categories/index',$data);
			$this->load->view('layouts/footer_admin');
		}

		public function create()
		{
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('categories/create');
	    	$this->load->view('layouts/footer_admin');
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
			
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');

			if (!$id) {
				redirect(base_url('categories/'));
			}else{
				$this->load->view('categories/edit', array('categories' => $categories));
			}
			$this->load->view('layouts/footer_admin');
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

			$id = $this->input->post("id");
			$this->categories_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
		}
	}
?>