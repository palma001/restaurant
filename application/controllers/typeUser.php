<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TypeUser extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('type_user_model');
	}

	function index()
	{

		$data['user_types'] = $this->type_user_model->view_users();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('type_user/index',$data);	
		$this->load->view('layouts/footer');

	}

	public function add_types()
	{
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('type_user/create');	
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data = array(
			'type_user' => $this->input->post('type_user')
		);
		$this->type_user_model->add_type_user($data);
		$this->session->set_flashdata('message','Add made successfully');	
		redirect('typeUser');
	}

	public function show()
	{
		$id = $this->uri->segment(3);
		$data['user_types'] = $this->type_user_model->view_user($id);
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');

		if (!$id) {
			redirect('typeUser');
		}else{
			$this->load->view('type_user/show',$data);
		}
		
		$this->load->view('layouts/footer');
	}
	public function edit($id)
	{
		$data = array(
			'type_user' => $this->input->post('type_user'),
		);
		$this->type_user_model->update($id,$data);
		$this->session->set_flashdata('message','Modification made successfully');
		redirect('typeUser');
	}

	public function destroy(){
		$id = $this->uri->segment(3);
		$this->type_user_model->destroy($id);
		$this->session->set_flashdata('message','Delete made successfully');
		redirect('typeUser');
	}
}
