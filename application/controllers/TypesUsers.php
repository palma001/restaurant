<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TypesUsers extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('types_users_model');
	}

	function index()
	{

		$data['user_types'] = $this->types_users_model->view_users();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('types_users/index',$data);	
		$this->load->view('layouts/footer');

	}

	public function create()
	{
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('types_users/create');	
		$this->load->view('layouts/footer');
	}

	public function add_types()
	{
		$data = array(
			'type_user' => $this->input->post('type_user')
		);
		$this->types_users_model->add_type_user($data);
		$this->session->set_flashdata('message','Add made successfully');	
		redirect('TypesUsers');
	}

	public function show()
	{
		$id = $this->uri->segment(3);
		$data['user_types'] = $this->types_users_model->view_user($id);
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');

		if (!$id) {
			redirect('TypesUsers');
		}else{
			$this->load->view('types_users/show',$data);
		}
		
		$this->load->view('layouts/footer');
	}
	public function edit($id)
	{
		$data = array(
			'type_user' => $this->input->post('type_user'),
		);
		$this->types_users_model->update($id,$data);
		$this->session->set_flashdata('message','Modification made successfully');
		redirect('TypesUsers');
	}

	public function destroy(){
		$id = $this->uri->segment(3);
		$this->types_users_model->destroy($id);
		$this->session->set_flashdata('message','Delete made successfully');
		redirect('TypesUsers');
	}
}
