<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		
	}

	public function index()
	{
		$this->load->view('layouts/headers');

		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('Settings/settings');
	    $this->load->view('layouts/footer');
	}

}
