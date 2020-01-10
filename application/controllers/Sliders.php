<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Sliders extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('download');
			$this->load->model('sliders_model');
			$this->load->library('session');
			if (!$this->session->userdata['user_id']){
		        redirect(base_url('login'));
			}
		}
		public function index()
		{
			$data['obtener'] = $this->sliders_model->read();
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('modals/modal_confirm');
			$this->load->view('sliders/index',$data);
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/footer_admin');
		}

		public function create()
		{
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('sliders/create');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/footer_admin');
		}

		public function store()
		{
			$config['upload_path']   = './uploads/imagenes/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = '2048';
			$config['max_width']     = '2024';
			$config['max_height']    = '2008';

	        $this->load->library('upload',$config);

	        if (!$this->upload->do_upload("fileImagen")) {
	        	$this->session->set_flashdata('message','Unsupported Format');
	            redirect(base_url('sliders/create/')); 
	        }else {
	        	
	            $file_info = $this->upload->data();
				$this->Miniature($file_info['file_name']);
				$imagen         = $file_info['file_name'];
				$subir          = $this->sliders_model->store($imagen);
				$data['titulo'] = $titulo;
				$data['imagen'] = $imagen;
				$this->session->set_flashdata('message','Saved Successfully');
				redirect(base_url('sliders/')); 
	        }   
		}

		public function destroy()
		{
			$id = $this->input->post("id");
		    $this->sliders_model->destroy($id);
		    $this->session->set_flashdata('message','Deleted Successfully');
		}

		public function Miniature($filename)
		{

			$config['image_library']  = 'gd2';
			$config['source_image']   = 'uploads/imagenes/'.$filename;
			$config['create_thumb']   = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['new_image']      = 'uploads/imagenes/thumbs/';
			$config['thumb_marker']   = '';
			$config['width']          = 150;
			$config['height']         = 150;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
		}
	}
?>
