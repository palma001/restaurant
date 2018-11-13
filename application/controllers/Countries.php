<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Countries extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->model('countries_model');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url('login'));
			}
		}
		public function index()
		{

			$data = array(
				'countries' => $this->countries_model->read(), 
			);
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('modals/modal_confirm');
			$this->load->view('countries/index',$data);	
			$this->load->view('layouts/footer_admin');
		}

		public function create()
		{
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('countries/create');	
			$this->load->view('layouts/footer_admin');
		}

		public function store()
		{

			$config = array(
		        array(
	                'field' => 'country',
	                'label' => 'Country',
	                'rules' => 'required|is_unique[countries.country]'
		        ), 
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->create();
	        }else{

	        	$data = array(
					'country' => $this->input->post('country'),
				);
				$this->countries_model->store($data);	
				$this->session->set_flashdata('message','Saved Successfully');
				redirect(base_url('countries/'));
	        }
	    }


	    public function destroy()
		{
			$id = $this->input->post("id");
			$this->countries_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
		}
		public function edit()
		{
			$id        = $this->uri->segment(3);
			$data['countries'] = $this->countries_model->get($id);

			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');

			if (!$id) {
				redirect(base_url('countries'));
			} else {
				$this->load->view('countries/edit', $data);
			}
			$this->load->view('layouts/footer_admin');
		}

		public function update($id)
		{
			$config = array(
		        array(
	                'field' => 'country',
	                'label' => 'Country',
	                'rules' => 'required|is_unique[countries.country]'
		        ), 
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->create();
	        }else{

	        	$data = array(
					'country' => $this->input->post('country'),
				);
				$this->countries_model->update($id,$data);	
				$this->session->set_flashdata('message','Saved Successfully');
				redirect(base_url('countries/'));
	        }			
		}
	}
?>