<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TypeUser extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('type_user_model');
		$this->load->library('session');
		 if (!$this->session->userdata['user_id']){
            redirect(base_url());
			}else {
             
			}
	}

	function index()
	{

		$data['user_types'] = $this->type_user_model->view_users();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('type_user/index',$data);	
		$this->load->view('layouts/footer');

	}

	public function create()
	{
		$data = array(
			'type_user' => $this->input->post('type_user')
		);
		$this->type_user_model->add_type_user($data);	
		redirect('typeUser');
	}

	public function show()
	{
		$id = $this->uri->segment(3);
		$data['user_types'] = $this->type_user_model->view_user($id);
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');

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
		redirect('typeUser');
	}

	public function destroy(){
		$id = $this->uri->segment(3);
		$this->type_user_model->destroy($id);
		redirect('typeUser');
	}
}
