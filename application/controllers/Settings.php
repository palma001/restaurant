<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Settings extends CI_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->library('session');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url());
			}
		}

		public function index()
		{
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('Settings/index');
		    $this->load->view('layouts/footer');
		}
	}
?>
