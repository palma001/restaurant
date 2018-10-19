<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('orders_model');
		$this->load->library('session');
		 if (!$this->session->userdata['user_id']){
            redirect(base_url());
			}else {      
		}
	}

	public function index()
	{
		$data['obtener'] = $this->orders_model->all_orders();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('orders/index',$data);
	  	$this->load->view('layouts/footer');
	}

	public function show($data)
	{
        $datos['obtener']=$this->orders_model->orderss($data);
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('orders/show',$datos);
	  	$this->load->view('layouts/footer');  
	}
}
