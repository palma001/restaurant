<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Pages extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('pages_model');
			$this->load->library('session');
			$this->load->library('form_validation');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url('login'));
			}
		}

		public function index()
		{
			$data = array('pages' => $this->pages_model->read());
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_pages',$data);
			$this->load->view('layouts/topnav_admin');
			$this->load->view('pages/index',$data);
			$this->load->view('layouts/footer_admin');
		}

		public function create()
		{
		}

		public function store()
		{

			$config = array(
		        array(
	                'field' => 'full_name',
	                'label' => 'Full_name',
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
	        	$this->load->view('layouts/header_admin');
				$this->load->view('layouts/navbar_admin');
				$this->load->view('layouts/topnav_admin');
	            $this->load->view('pages/create');
	            $this->load->view('layouts/footer');
	        }
	        else{
	        	
				$data = array(
					'full_name'    => $this->input->post('full_name'),
					'email'        => $this->input->post('email'),
					'user_type_id' => $this->input->post('user_type_id'),
					'password'     => md5($this->input->post('password')),
				);
				$this->users_model->store($data);	
				$this->session->set_flashdata('message','Saved successfully');
				redirect(base_url('pages/'));
	        }
		}

		public function edit()
		{
			$page = $this->input->post('page');
			$html = file_get_contents(base_url(strtolower($page)));
			echo json_encode(htmlentities($html));
		}

		public function update($id)
		{

		}
		public function destroy()
		{
		}
	}
?>