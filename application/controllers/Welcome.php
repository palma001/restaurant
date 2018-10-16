<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 function __construct()
	{
		 parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('orders_model');
		$this->load->model('customer_model');	
	}
	public function index()
	{

		$data=$this->orders_model->count();
		$count_customer=$this->customer_model->count_customer();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/topnav');
		$this->load->view('layouts/body',array('rows'=>$data,'customer'=>$count_customer));
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/footer');

	}

	public function create()
	{
		$this->load->view('layouts/headers');
		$this->load->view('layouts/topnav');
		$this->load->view('customers/usercreate');
		$this->load->view('layouts/navbar');
	    $this->load->view('layouts/footer');
   
	}

	public function edit($data)
	{
		$customer=$this->customer_model->read($data);
		$this->load->view('layouts/headers');
		$this->load->view('layouts/topnav');
		$this->load->view('customers/update',array('full_name'=>$customer->full_name,'email'=>$customer->email,'password'=>$customer->password,'user_id'=>$customer->user_id));
        $this->load->view('layouts/navbar');
	    $this->load->view('layouts/footer');

	}
}
