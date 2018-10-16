<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('products_model');
	}

	public function index()
	{
		$data['products'] = $this->products_model->view_products();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('modals/modal_products');
		$this->load->view('products/index',$data);
		$this->load->view('layouts/footer');
	}

	public function add_products()
	{
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');
		$this->load->view('products/create');
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price'),
			'outstanding' => $this->input->post('out'),
			'views' => $this->input->post('views')
		);
		$this->products_model->add_menu($data);	
		redirect('products');
	}

	public function show()
	{
		$id = $this->input->post("id");
		$data =  $this->products_model->view_product($id);
		echo json_encode($data);

	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['product'] = $this->products_model->view_product($id);
		$this->load->view('layouts/headers');
		$this->load->view('layouts/navbar');

		if (!$id) {
			redirect('products');
		}else{
			$this->load->view('products/edit',$data);
		}
		
		$this->load->view('layouts/footer');
	}

	public function update($id)
	{
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price'),
			'outstanding' => $this->input->post('out'),
			'views' => $this->input->post('views')
		);

		$this->products_model->update_products($id,$data);
		redirect('products');
	}


	public function destroy(){
		$id = $this->uri->segment(3);
		$this->products_model->destroy($id);
		redirect('products');
	}


	
}
