<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('home/index');	
		$this->load->view('layouts/footer');
	}
}
