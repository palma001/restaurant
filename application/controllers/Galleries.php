<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Galleries extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('download');
			$this->load->model('galleries_model');
			$this->load->library('session');
			if (!$this->session->userdata['user_id']){
		        redirect(base_url('login'));
			}
		}
		public function index()
		{
			$data['galleries'] = $this->galleries_model->read();
			$this->load->view('layouts/headers');
			$this->load->view('layouts/topnav');
			$this->load->view('galleries/index',$data);
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/footer');
		}

		public function create()
		{
			$this->load->view('layouts/headers');
			$this->load->view('layouts/topnav');
			$this->load->view('galleries/create');
			$this->load->view('layouts/navbar');
			$this->load->view('layouts/footer');
		}

		public function store()
		{
			$config['upload_path']   = './uploads/galleries/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = '2048';
			$config['max_width']     = '2024';
			$config['max_height']    = '2008';

	        $this->load->library('upload',$config);

	        if (!$this->upload->do_upload("fileImagen")) {
	        	$this->session->set_flashdata('message','Unsupported Format');
	            redirect(base_url('galleries/create/')); 
	        }else {
	        	
	            $file_info = $this->upload->data();
				$this->Miniature($file_info['file_name']);
				$imagen         = $file_info['file_name'];
				$subir          = $this->galleries_model->store($imagen);
				$data['titulo'] = $titulo;
				$data['imagen'] = $imagen;
				$this->session->set_flashdata('message','Saved Successfully');
				redirect(base_url('galleries/')); 
	        }   
		}

		public function destroy($id)
		{
		    $this->galleries_model->destroy($id);
		}

		public function Miniature($filename)
		{

			$config['image_library']  = 'gd2';
			$config['source_image']   = 'uploads/galleries/'.$filename;
			$config['create_thumb']   = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['new_image']      = 'uploads/galleries/thumbs/';
			$config['thumb_marker']   = '';
			$config['width']          = 150;
			$config['height']         = 150;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
		}
	}
?>
