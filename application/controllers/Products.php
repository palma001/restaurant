<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Products extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('products_model');
			$this->load->library('form_validation');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url());
			}
		}

		public function index()
		{
			$data['products'] = $this->products_model->read();
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('modals/modal_products');
			$this->load->view('products/index',$data);
			$this->load->view('layouts/footer');
		}

		public function create()
		{
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			$this->load->view('products/create');
			$this->load->view('layouts/footer');
		}

		public function store()
		{

			$config = array(
		        array(
	                'field' => 'title',
	                'label' => 'Title',
	                'rules' => 'required|min_length[5]'
		        ),
		        array(
	                'field' => 'description',
	                'label' => 'Description',
	                'rules' => 'required|min_length[10]'
		        ),
		        array(
	                'field' => 'price',
	                'label' => 'Price',
	                'rules' => 'required|numeric'
		        ),
		        array(
	                'field' => 'out',
	                'label' => 'Outstanding',
	                'rules' => 'required',
		        )  
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->create();
	        }else{

				$data = array(
					'user_id'     => $this->session->userdata['user_id'],
					'title'       => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'price'       => $this->input->post('price'),
					'outstanding' => $this->input->post('out'),
				);
				$this->products_model->store($data);	
				$this->session->set_flashdata('message','Saved Successfully');
				redirect(base_url('products/'));
	        }
		}

		public function show()
		{
			$id = $this->input->post("id");
			$data =  $this->products_model->get($id);
			echo json_encode($data);
		}

		public function edit()
		{
			$id              = $this->uri->segment(3);
			$data['product'] = $this->products_model->get($id);
			$this->load->view('layouts/headers');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/topnav');
			if (!$id) {
				redirect(base_url('products/'));
			}else{
				$this->load->view('products/edit',$data);
			}
			
			$this->load->view('layouts/footer');
		}

		public function update($id)
		{
			$config = array(
		        array(
	                'field' => 'title',
	                'label' => 'Title',
	                'rules' => 'required|min_length[5]'
		        ),
		        array(
	                'field' => 'description',
	                'label' => 'Description',
	                'rules' => 'required|min_length[10]'
		        ),
		        array(
	                'field' => 'price',
	                'label' => 'Price',
	                'rules' => 'required|numeric'
		        ),
		        array(
	                'field' => 'out',
	                'label' => 'Outstanding',
	                'rules' => 'required',
		        )  
			);

			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE){
	        	$this->edit();
	        }else{

				$data = array(
					'user_id'     => $this->session->userdata['user_id'],
					'title'       => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'price'       => $this->input->post('price'),
					'outstanding' => $this->input->post('out'),
				);
				$this->products_model->update($id,$data);	
				$this->session->set_flashdata('message','Modification Made Successfully');
				redirect(base_url('products/'));
	        }
		}

		public function destroy()
		{
			$id = $this->uri->segment(3);
			$this->products_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
			redirect(base_url('products/'));
		}	
	}
?>
