<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Customers extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('customers_model');
			$this->load->model('types_users_model');
			$this->load->library('form_validation');
	        $this->load->library('session');
	        if (!$this->session->userdata['user_id']){
	            redirect(base_url('login'));
			}
		}

		public function index()
		{
			$data['customers'] = $this->customers_model->read();
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('modals/modal_confirm');
			$this->load->view('customers/index',$data);
			$this->load->view('layouts/footer_admin');
		}

		public function create()
		{
			$data['users_types'] = $this->types_users_model->read();
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('customers/create',$data);
	    	$this->load->view('layouts/footer_admin');
		}
		public function store()
		{
			

			$config = array(
		        array(
	                'field' => 'full_name',
	                'label' => 'Full_Name',
	                'rules' => 'required|min_length[5]'
		        ),
		        array(
	                'field' => 'email',
	                'label' => 'Email',
	                'rules' => 'required|valid_email|is_unique[users.email]'
		        ),
		        array(
	                'field' => 'user_type_id',
	                'label' => 'Type Users',
	                'rules' => 'required'
		        ),
		        array(
	                'field' => 'password',
	                'label' => 'Password',
	                'rules' => 'required|min_length[5]',
		        ),
		        array(
	                'field' => 'passconf',
	                'label' => 'Password Confirmation',
	                'rules' => 'required|matches[password]'
		        ),   
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->create();
	        }
	        else{
	        	$data = array(
					'full_name'    => $this->input->post('full_name'),
					'email'        => $this->input->post('email'),
					'user_type_id' => $this->input->post('user_type_id'),
					'password'     => md5($this->input->post('password')),
				);
				$this->customers_model->store($data);	
				$this->session->set_flashdata('message','Saved Successfully');
				redirect(base_url('customers/'));
	        }
		}
		public function edit()
		{
			$id          = $this->uri->segment(3);
			$customers   = $this->customers_model->get($id);
			$users_types = $this->types_users_model->read();
			
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');

			if (!$id) {
				redirect(base_url('customers'));
			}else{
				$this->load->view('customers/edit',array('customers'=>$customers,'users_types'=>$users_types));
			}
			$this->load->view('layouts/footer_admin');
		}

		public function update($id)
		{
			if (empty($this->input->post('password'))) {
				$data = array(
					'full_name'    => $this->input->post('full_name'),
					'email'        => $this->input->post('email'),
					'user_type_id' => $this->input->post('user_type_id'),
					'password'     => false,
				);
			}else{
				$data = array(
					'full_name'    => $this->input->post('full_name'),
					'email'        => $this->input->post('email'),
					'user_type_id' => $this->input->post('user_type_id'),
					'password'     => md5($this->input->post('password')),
				);
			}

			$config = array(
		        array(
	                'field' => 'full_name',
	                'label' => 'Full_Name',
	                'rules' => 'required|min_length[5]'
		        ),
		        array(
	                'field' => 'email',
	                'label' => 'Email',
	                'rules' => 'required|valid_email'
		        ),
		        array(
		        	
	                'field' => 'user_type_id',
	                'label' => 'Type Users',
	                'rules' => 'required'
		        ),
		        array(
	                'field' => 'password',
	                'label' => 'Password',
	                'rules' => 'min_length[5]',
		        ),
		        array(
	                'field' => 'passconf',
	                'label' => 'Password Confirmation',
	                'rules' => 'matches[password]'
		        ),   
			);

			$this->form_validation->set_rules($config);
			$users_types = $this->types_users_model->read();

			if ($this->form_validation->run() == FALSE){
	        	$this->edit();
	        }else{

				$this->customers_model->update($id,$data);
				$this->session->set_flashdata('message','Modification Made Successfully');
				redirect(base_url('customers/'));
	        }	
		}

		public function destroy($id)
		{
			$id = $this->input->post("id");
			$this->customers_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
		}
	}
?>


                                   
