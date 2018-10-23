<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('login_model');	
			$this->load->library('session');
			$this->load->library('encryption');
		}

		public function index()
		{
			$this->load->view('layouts/headers');
			$this->load->view('login/index');
			$this->load->view('layouts/footer');
		}

		public function authenticated()
		{

			$email = $this->input->post('email');
	        $pass = $this->input->post('password');

	        $login = $this->login_model->validate($email,$pass);

			$user = array(
				'user_id'      => $login->user_id,
				'user_type_id' => $login->user_type_id,
				'full_name'    => $login->full_name,
				'email'        => $login->email, 
				'password'     => $login->password
	        );

	        if ($login == false)
	        {
	        	$this->session->set_flashdata('message','Invalid email/password combination');
	        	redirect(base_url('login')); 
	        }else {

				if ($login->user_type_id == "1"){
	        	   $this->session->set_userdata($user); 
	               redirect(base_url('home/'));  
	        	}else{
		        	$this->session->set_userdata($user); 
		            redirect(base_url('home/'));  
	        	}
	        }
		}
		public function destroy()
		{
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}
?>