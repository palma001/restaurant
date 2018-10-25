<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Reservations extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('reservations_model');
			$this->load->library('session');
			$this->load->library('form_validation');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url('login'));
			}
		}

		public function index()
		{
			$data['reservations'] = $this->reservations_model->read();
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('modals/modal_reservations');
			$this->load->view('reservations/index',$data);
			$this->load->view('layouts/footer');
		}

		public function show()
		{
			$id = $this->input->post("id");
			$data =  $this->reservations_model->get($id);
			echo json_encode($data);
		}

		public function destroy(){

			$id = $this->uri->segment(3);
			$this->reservations_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
			redirect(base_url('reservations/'));
		}
	}
?>