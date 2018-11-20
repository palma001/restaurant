<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Newsletters extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('newsletters_model');
			$this->load->library('session');
			$this->load->library('form_validation');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url('login'));
			}
		}

		public function index()
		{
			
		}

		public function store()
		{
			$data = array(
				'email'        => $this->input->post('email'),
			);
			$this->newsletters_model->store($data);
			echo 1;
		}
	}
?>