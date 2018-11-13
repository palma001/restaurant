<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class States extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->model('states_model');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url('login'));
			}
		}
		public function index()
		{

			$data = array(
				'state' => $this->states_model->read(), 
			);
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('modals/modal_confirm');
			$this->load->view('states/index',$data);	
			$this->load->view('layouts/footer_admin');
		}

		public function create()
		{
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('state/create',$data);	
			$this->load->view('layouts/footer_admin');
		}
	}
?>