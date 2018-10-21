<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Products extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('products_model');
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
			$data = array(
				'user_id'     => $this->session->userdata['user_id'],
				'title'       => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'price'       => $this->input->post('price'),
				'outstanding' => $this->input->post('out'),
			);
			$this->products_model->store($data);	
			$this->session->set_flashdata('message','Saved Successfully');
			redirect(base_url('index.php/products/'));
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
				redirect(base_url('index.php/products/'));
			}else{
				$this->load->view('products/edit',$data);
			}
			
			$this->load->view('layouts/footer');
		}

		public function update($id)
		{
			$data = array(
				'title'       => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'price'       => $this->input->post('price'),
				'outstanding' => $this->input->post('out'),
				'views'       => $this->input->post('views')
			);

			$this->products_model->update($id,$data);
			$this->session->set_flashdata('message','Modification Made Successfully');
			redirect(base_url('index.php/products/'));
		}


		public function destroy()
		{
			$id = $this->uri->segment(3);
			$this->products_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
			redirect(base_url('index.php/products/'));
		}	
	}
?>
