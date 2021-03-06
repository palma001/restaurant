<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Typesusers extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('types_users_model');
			$this->load->model('permissions_model');
			$this->load->library('session');
			$this->load->library('form_validation');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url('login'));
			}
		}

		public function index()
		{

			$data = array(
				'user_types' => $this->types_users_model->read(), 
			);
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('modals/modal_confirm');
			$this->load->view('types_users/index',$data);	
			$this->load->view('layouts/footer_admin');
		}

		public function create()
		{
			$data = array( 
				'permissions' => $this->permissions_model->read()
			);
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('types_users/create',$data);	
			$this->load->view('layouts/footer_admin');
		}

		public function store()
		{

			$config = array(
		        array(
	                'field' => 'type_user',
	                'label' => 'Type User',
	                'rules' => 'required|is_unique[user_types.user_type]'
		        ), 
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->create();
	        }else{

	        	//SELECIONA EL ID MAXIMO DE CADA TIPO DE USUARIO
	        	$type_user_id = $this->types_users_model->max_id();
	        	//END
	        	//FOR QUE RECORREO LOS CHECKBOX SELECIONADO
				foreach ($this->input->post('permissions') as $key => $permissions) {
					//FUNCION PARA AGREGAR LOS PERMISSIONS
					$this->permissions_model->store($permissions,$type_user_id);
					//END
				}
				//END
				//DATOS PARA AGREGAR EL TIPO DE USUARIO
				$data = array(
					'type_user' => $this->input->post('type_user'),
				);
				//END
			
				//FUNCION PARA AGREGAR EL TIPO DE USUARIO
				$this->types_users_model->store($data);	
				$this->session->set_flashdata('message','Saved Successfully');
				redirect(base_url('typesusers/'));
				//END FUNCION
	        }
		}

		public function edit()
		{
			$id                  = $this->uri->segment(3);
			$data['users_types'] = $this->types_users_model->get($id);
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');

			if (!$id) {
				redirect(base_url('typesusers/'));
			}else{
				$this->load->view('types_users/edit',$data);
			}
			
			$this->load->view('layouts/footer_admin');
		}

		public function update($id)
		{
			$config = array(
		        array(
	                'field' => 'type_user',
	                'label' => 'Type User',
	                'rules' => 'required'
		        ), 
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->edit();
	        }else{
				$data = array(
					'type_user' => $this->input->post('type_user'),
				);
				$this->types_users_model->update($id,$data);

				$this->session->set_flashdata('message','Modification Made Successfully');
				redirect(base_url('typesusers/'));
	        }			
		}

		public function destroy()
		{
			$id = $this->input->post("id");
			$this->types_users_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
		}
	}
?>