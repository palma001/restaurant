<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Reservations extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('reservations_model');
			$this->load->library('session');
			$this->load->library('form_validation');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url());
			}
		}

		public function index()
		{
			$data['reservations'] = $this->reservations_model->read();
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('reservations/index',$data);
			$this->load->view('layouts/footer');
		}

		public function create()
		{
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('categories/create');
	    	$this->load->view('layouts/footer');
		}

		public function store()
		{

			$config = array(
		        array(
	                'field' => 'category',
	                'label' => 'Category',
	                'rules' => 'required|is_unique[categories.category]'
		        ),  
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->create();
	        }
	        else{
	        	
				$data = array(
					'category'    => $this->input->post('category'),
				);
				$this->categories_model->store($data);	
				$this->session->set_flashdata('message','Saved successfully');
				redirect(base_url('categories/'));
	        }
		}

		public function edit()
		{
			$id           = $this->uri->segment(3);
			$reservations = $this->reservations_model->get($id);
			
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');

			if (!$id) {
				redirect(base_url('reservations/'));
			}else{
				$this->load->view('reservations/edit', array('reservations' => $reservations));
			}
			$this->load->view('layouts/footer');
		}

		public function update($id)
		{
			$config = array(
		        array(
	                'field' => 'full_name',
	                'label' => 'Full Name',
	                'rules' => 'required'
		        ), 
		        array(
	                'field' => 'phone',
	                'label' => 'Phone',
	                'rules' => 'required'
		        ),
		        array(
	                'field' => 'people',
	                'label' => 'People Quantity',
	                'rules' => 'required'
		        ),
		        array(
	                'field' => 'entrance_date',
	                'label' => 'Entrance Date',
	                'rules' => 'required'
		        ),
		        array(
	                'field' => 'entrance_hour',
	                'label' => 'Entrance Hour',
	                'rules' => 'required'
		        ),
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->edit();
	        }else{
				$data = array(
					'full_name' => $this->input->post('full_name'),
					'phone' => $this->input->post('phone'),
					'people' => $this->input->post('people'),
					'entrance_date' => $this->input->post('entrance_date'),
					'entrance_hour' => $this->input->post('entrance_hour'),
				);

				$this->reservations_model->update($id,$data);
				$this->session->set_flashdata('message','Modification Made Successfully');
				redirect(base_url('reservations/'));	
			}
		}

		public function destroy(){

			$id = $this->uri->segment(3);
			$this->reservations_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
			redirect(base_url('reservations/'));
		}
	}
?>