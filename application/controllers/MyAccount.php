<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MyAccount extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation'); 
			$this->load->model('users_model');
			$this->load->model('types_users_model');
			$this->load->model('my_account_model');
			$this->load->library('session');
			if (!$this->session->userdata['user_id']){
            redirect(base_url());
			}
		}

		public function index()
		{
			$id = $this->session->userdata['user_id'];
			$users = $this->users_model->user_edit($id);
			$users_types = $this->types_users_model->view_users();

			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('my_account/index',array('users'=>$users,'users_types'=>$users_types));	
			$this->load->view('layouts/footer');
		}
		public function store()
		{
			# code...
		}
		public function edit($id)
		{
			# code...
		}
		public function update($id)
		{

			if (empty($this->input->post('password'))) {

				$data = array(
					'full_name' => $this->input->post('full_name'),
					'email' => $this->input->post('email'),
					'user_type_id' => $this->input->post('user_type_id'),
					'password' => false,
				);

			}else{

				$data = array(
					'full_name' => $this->input->post('full_name'),
					'email' => $this->input->post('email'),
					'user_type_id' => $this->input->post('user_type_id'),
					'password' => md5($this->input->post('password')),
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
	                'field' => 'password',
	                'label' => 'Password',
	                'rules' => 'min_length[8]',
		        ),
		        array(
	                'field' => 'passconf',
	                'label' => 'Password Confirmation',
	                'rules' => 'matches[password]'
		        ),   
			);
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == FALSE){
			 	$this->index();
			}else{
			 	$this->my_account_model->update_myAccount($id,$data);
				$this->session->set_userdata($data); 
				$this->session->set_flashdata('message','Modification made successfully');
				redirect('MyAccount');
			}
		}
		public function destroy($id)
		{
			# code...
		}

	}

?>