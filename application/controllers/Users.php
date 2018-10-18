<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->model('types_users_model');
		$this->load->library('session');
		 $this->load->library('form_validation');
		if (!$this->session->userdata['user_id']){
            redirect(base_url());
		}
	}

	public function index()
	{
		$data['users'] = $this->users_model->table_users();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('users/index',$data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$users_types = $this->types_users_model->view_users();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');
		$this->load->view('users/create',array('users_types'=>$users_types));
    	$this->load->view('layouts/footer');
	}

	public function store()
	{
		$data = array(
			'full_name' => $this->input->post('full_name'),
			'email' => $this->input->post('email'),
			'user_type_id' => $this->input->post('user_type_id'),
			'password' => $this->input->post('password'),
		);

		$config = array(
	        array(
                'field' => 'full_name',
                'label' => 'Full_name',
                'rules' => 'required|min_length[5]'
	        ),
	        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]'
	        ),
	        array(
                'field' => 'user_type_id',
                'label' => 'Type Users',
                'rules' => 'required'
	        ),
	        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
	        ),
	        array(
                'field' => 'passconf',
                'label' => 'Password Confirmation',
                'rules' => 'required|matches[password]'
	        ),   
		);

		$this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
        	$users_types = $this->types_users_model->view_users();
        	$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
            $this->load->view('users/create',array('users_types'=>$users_types));
            $this->load->view('layouts/footer');
        }
        else{
			$this->users_model->add_users($data);	
			$this->session->set_flashdata('message','Add made successfully');
			redirect(base_url('index.php/users/'));
        }
	}

	public function edit()
	{
       	$id = $this->uri->segment(3);
		$users = $this->users_model->user_edit($id);
		$users_types = $this->types_users_model->view_users();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/topnav');

		if (!$id) {
			redirect(base_url('index.php/users'));
		}else{
			$this->load->view('users/edit',array('users'=>$users,'users_types'=>$users_types));
		}
		$this->load->view('layouts/footer');
	}

	public function update($id)
	{
		$data = array(
			'full_name' => $this->input->post('full_name'),
			'email' => $this->input->post('email'),
			'user_type_id' => $this->input->post('user_type_id'),
			'password' => $this->input->post('password'),
		);

		$config = array(
	        array(
                'field' => 'full_name',
                'label' => 'Full_name',
                'rules' => 'required|min_length[5]'
	        ),
	        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
	        ),
	        array(
                'field' => 'user_type_id',
                'label' => 'Type Users',
                'rules' => 'required'
	        ),
	        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
	        ),
	        array(
                'field' => 'passconf',
                'label' => 'Password Confirmation',
                'rules' => 'required|matches[password]'
	        ),   
		);

		$this->form_validation->set_rules($config);
		$seg = $this->uri->segment(3);
		$users = $this->users_model->user_edit($seg);
		$users_types = $this->types_users_model->view_users();

		if ($this->form_validation->run() == FALSE){

        	$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
            $this->load->view('users/edit',array('users'=>$users,'users_types'=>$users_types));
            $this->load->view('layouts/footer');
        }
        else{

			$this->users_model->update_user($id,$data);
			$this->session->set_flashdata('message','Modification made successfully');
			redirect(base_url('index.php/users/'));
        }
		
	}

	public function show()
	{
		
	}
	public function destroy(){

		$id = $this->uri->segment(3);
		$this->users_model->destroy($id);
		$this->session->set_flashdata('message','Delete made successfully');
		redirect(base_url('index.php/Users/'));
	}
}