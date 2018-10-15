<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('customer_model');
    	$this->load->library('session');
    	$Type="0";
		
	}


	public function index()
	{
	    $data['obtener'] = $this->customer_model->all_customer();
	    $this->load->view('layouts/headers');
	    $this->load->view('layouts/topnav');
	    $this->load->view('customers/Clients',$data);
	    $this->load->view('layouts/navbar');
	    $this->load->view('customers/viewmodal');
	    $this->load->view('layouts/footer');  
	}

	public function create()
	{
       $data=array('fullname'=>$this->input->post('fullname'),'usertype'=>'2',
      'email'=>$this->input->post('email'),'password'=>$this->input->post('password')); 
       $this->customer_model->inserte($data);
	}

	public function edit()
	{
        $data=array('Email'=>$this->input->post('Email'));
		$datos=$this->customer_model->read($data);
		if($datos) {
		  	
		}
	}

	public function update()
	{
       $data=array('fullname'=>$this->input->post('fullname'),
      'email'=>$this->input->post('email'),'password'=>$this->input->post('password')
       ,$this->input->post('user_id')); 
       $this->customer_model->update_customer($data);
       $this->session->set_flashdata('message','modification made successfully');
       redirect(base_url('/index.php/Customers/index/'));
	}

	public function show()
	{
	  
	}

	public function destroy($data)
	{ 
	    $this->customer_model->delete($data);
	}



}



                                   
