<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class TypesUsers extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('types_users_model');
			$this->load->library('session');
			$this->load->library('form_validation');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url());
			}
		}

		function index()
		{

			$data['user_types'] = $this->types_users_model->read();
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('types_users/index',$data);	
			$this->load->view('layouts/footer');
		}

		public function create()
		{
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('types_users/create');	
			$this->load->view('layouts/footer');
		}

		public function store()
		{

			$config = array(
		        array(
	                'field' => 'type_user',
	                'label' => 'Type User',
	                'rules' => 'required|is_unique[user_types.user_type]'
		        ), 
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->create();
	        }else{
				$data = array(
					'type_user' => $this->input->post('type_user')
				);
				$this->types_users_model->store($data);	
				$this->session->set_flashdata('message','Saved Successfully');
				redirect(base_url('index.php/typesusers/'));
	        }
		}

		public function edit()
		{
			$id                  = $this->uri->segment(3);
			$data['users_types'] = $this->types_users_model->get($id);
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');

			if (!$id) {
				redirect(base_url('index.php/typesusers/'));
			}else{
				$this->load->view('types_users/edit',$data);
			}
			
			$this->load->view('layouts/footer');
		}

		public function update($id)
		{
			$config = array(
		        array(
	                'field' => 'type_user',
	                'label' => 'Type User',
	                'rules' => 'required'
		        ), 
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->edit();
	        }else{
				$data = array(
					'type_user' => $this->input->post('type_user'),
				);
				$this->types_users_model->update($id,$data);

				$this->session->set_flashdata('message','Modification Made Successfully');
				redirect(base_url('index.php/typesusers/'));
	        }			
		}

		public function destroy()
		{
			$id = $this->uri->segment(3);
			$this->types_users_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
			redirect(base_url('index.php/typesusers/'));
		}
	}
?>