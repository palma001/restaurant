<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Products extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('products_model');
			$this->load->model('settings_model');
			$this->load->model('types_users_model');
			$this->load->model('blogs_model');
			$this->load->library('form_validation');
			$this->load->helper('file');
			if (!$this->session->userdata['user_id']){
			redirect(base_url('login'));
			}
		}

		public function index()
		{
			$data['products'] = $this->products_model->read();
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('modals/modal_products');
			$this->load->view('modals/modal_confirm');
			$this->load->view('products/index',$data);
			$this->load->view('layouts/footer_admin');
		}

		public function create()
		{
			$settings = $this->settings_model->read();
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('products/create',array("settings" => $settings));
			$this->load->view('layouts/footer_admin');
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

	        	$config['upload_path']   = './uploads/products/';
				$config['allowed_types'] = 'jpg|jpeg|gif|png';
				$this->load->library('upload',$config);


				if (!$this->upload->do_upload('image')) {

					$error = array('error' => $this->upload->display_errors());
		            $this->session->set_flashdata('message', $this->upload->display_errors());
		            redirect(base_url('products/create'));

				}else{

					$image_info = $this->upload->data();
					$images = $image_info['file_name'];
					$data = array(
						'user_id'     => $this->session->userdata['user_id'],
						'title'       => $this->input->post('title'),
						'description' => $this->input->post('description'),
						'price'       => $this->input->post('price'),
						'outstanding' => $this->input->post('out'),
						'image'       => $images
					);
					$this->products_model->store($data);	
					$this->session->set_flashdata('message','Saved Successfully');
					redirect(base_url('products/'));
				}
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
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			if (!$id) {
				redirect(base_url('products/'));
			}else{
				$this->load->view('products/edit',$data);
			}
			
			$this->load->view('layouts/footer_admin');
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
			$id = $this->input->post("id");
			$this->products_model->destroy($id);
			$this->session->set_flashdata('message','Deleted Successfully');
		}	

		public function pagination()
		{
			$data = array(
				'total' => count($this->products_model->read()), 
				'quantity' => $quantity,
			);
			echo json_encode($data);
		}

		public function menu()
		{
			
			$products = $this->products_model->read();
			$settings = $this->settings_model->read();
			$blogs    = $this->blogs_model->read();

            $this->load->view('layouts/header_front',array('settings' => $settings));
            $this->load->view('layouts/navbar_front',
                array(
                    'settings' => $settings,
                    'blogs'    => $blogs
                )
            );
            $this->load->view('menu/index', 
                array(
                    'products' => $products, 
                    'settings' => $settings , 
                    'blogs'    => $blogs
                )
            );
            $this->load->view('layouts/footer_front',array('settings' => $settings));
		}
	}
?>
