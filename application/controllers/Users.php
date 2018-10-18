<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->library('session');
		if (!$this->session->userdata['user_id']){
            redirect(base_url());
		}
	}
	public function index()
	{
		$data['users'] = $this->users_model->table_users();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('users/index',$data);
		$this->load->view('layouts/footer');
	}
}