<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Cart extends CI_Controller {

		function __construct()
		{
			parent::__construct();
            $this->load->model('sliders_model');
            $this->load->model('types_users_model');
            $this->load->model('settings_model');
            $this->load->model('products_model');
            $this->load->model('blogs_model');
            $this->load->model('countries_model');
            $this->load->library('session');
			$this->load->library('cart');
		}

		public function index()
		{
			$slider    = $this->sliders_model->read();
			$products  = $this->products_model->read();
			$settings  = $this->settings_model->read();
			$blogs     = $this->blogs_model->read();
			$countries = $this->countries_model->read();
            $this->load->view('layouts/header_front',array('settings' => $settings));
            $this->load->view('layouts/navbar_front',
                array(
                    'settings' => $settings,
                    'blogs'    => $blogs
                )
            );
            $this->load->view('cart/index', 
                array(
					'slider'    => $slider, 
					'products'  => $products, 
					'settings'  => $settings , 
					'blogs'     => $blogs,
					'countries' => $countries,
                )
            );
            $this->load->view('layouts/footer_front',array('settings' => $settings));
		}

		public function store()
		{
			$data = array(
				'id'    => $this->input->post('id'),
				'qty'   => 1,
				'price' => $this->input->post('price'),
				'name'  => $this->input->post('title'),
				'img'   => $this->input->post('img'),
			);
			$this->cart->insert($data);
			redirect('cart');
		}

		public function update()
		{
			$data = $this->input->post();
			$this->cart->update($data);
			redirect('cart');
		}
		public function destroy(){
			$rowid = $this->uri->segment(3);
			$this->cart->remove($rowid);
			redirect('cart');
		}
	}
?>