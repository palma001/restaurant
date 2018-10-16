<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MyAccount extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
		}

		public function index()
		{
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('my_account/index');	
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
			# code...
		}
		public function destroy($id)
		{
			# code...
		}

	}

?>