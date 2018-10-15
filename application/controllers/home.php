<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		 parent::__construct();
		 $this->load->helper('form');
		 $this->load->helper('url');
		 $this->load->model('orders_model');
		 $this->load->model('customer_model');
		 $this->load->model('products_model');	
	}

	public function index()
	{
		$data=$this->orders_model->count();
		$count_customer= $this->Customer_model->count_customer();
		$views = $this->products_model->count_views();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('home/index',array('rows'=>$data,'customer'=>$count_customer,'views' => $views));	
		$this->load->view('layouts/footer');
	}
}
