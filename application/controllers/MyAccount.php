<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MyAccount extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation'); 
			$this->load->library('session');
			if (!$this->session->userdata['user_id']){
            redirect(base_url());
			}
		}

		public function index()
		{
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('my_account/index');	
			$this->load->view('layouts/footer');
		}
		public function store()
		{
			# code...
		}
		public function edit($id)
		{
			# code...
		}
		public function update()
		{

            $data = array(
				'full_name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
			);
			$this->products_model->update_products($id,$data);
			$this->session->set_flashdata('message','Modification made successfully');
			redirect('MyAccount');
           
		}
		public function destroy($id)
		{
			# code...
		}

	}

?>