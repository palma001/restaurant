<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('orders_model');
			$this->load->model('customers_model');
			$this->load->model('products_model');	
			$this->load->library('session'); 
			if (!$this->session->userdata['user_id']){
	            redirect(base_url('login'));
			}
		}

		public function index()
		{
			$data           = $this->orders_model->read();
			$count_customer = $this->customers_model->read();
			$views          = $this->products_model->count();
			$total = $this->orders_model->sumar_total();
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('admin/index',array('rows' => $data,'customer'=>$count_customer,'views' => $views, 'total' => $total));	
			$this->load->view('layouts/footer_admin');
		}
	}

?>
