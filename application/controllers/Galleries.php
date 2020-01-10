<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Galleries extends CI_Controller {

		function __construct()
		{
			parent::__construct();
            $this->load->model('types_users_model');
            $this->load->model('settings_model');
            $this->load->model('blogs_model');
			$this->load->model('galleries_model');
			$this->load->library('session');
			if (!$this->session->userdata['user_id']){
		        redirect(base_url('login'));
			}
		}
		public function index()
		{
			$data['galleries'] = $this->galleries_model->read();
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('modals/modal_confirm');
			$this->load->view('galleries/index',$data);
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/footer_admin');
		}

		public function create()
		{
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('galleries/create');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/footer_admin');
		}

		public function store()
		{
			$config['upload_path']   = './uploads/galleries/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = '2048';
			$config['max_width']     = '2024';
			$config['max_height']    = '2008';

	        $this->load->library('upload',$config);

	        if (!$this->upload->do_upload('fileImagen')) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', $this->upload->display_errors());
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

		public function destroy()
		{
			$id = $this->input->post("id");
		    $this->galleries_model->destroy($id);
		    $this->session->set_flashdata('message','Deleted Successfully');
		}

		public function Miniature($filename)
		{

			$config['image_library']  = 'gd2';
			$config['source_image']   = './uploads/galleries/'.$filename;
			$config['create_thumb']   = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['new_image']      = './uploads/galleries/thumbs/';
			$config['thumb_marker']   = '';
			$config['width']          = 150;
			$config['height']         = 150;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
		}

		public function gallery()
		{
            $settings = $this->settings_model->read();
            $blogs = $this->blogs_model->read();

			$data['galleries'] = $this->galleries_model->read();
			$this->load->view('layouts/header_front',array('settings' => $settings));
			$this->load->view('galleries/gallery',$data);
			
			$this->load->view('layouts/navbar_front',
                array(
                    'settings' => $settings,
                    'blogs' => $blogs,
                )
            );
			$this->load->view('layouts/footer_front',array('settings' => $settings));
		}
	}
?>
