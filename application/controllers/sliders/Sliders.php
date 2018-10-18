<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sliders extends CI_Controller {

 function __construct()
	{
		 parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->model('multipleuploads_model');
		$this->load->library('session');
		 if (!$this->session->userdata['user_id']){
            redirect(base_url());
			}else {
             
			}
	}
	public function index()
	{
		 $data['obtener'] = $this->multipleuploads_model->get();
		$this->load->view('layouts/headers');
		$this->load->view('layouts/topnav');
		$this->load->view('Sliders/index',$data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$this->load->view('layouts/headers');
		$this->load->view('layouts/topnav');
		$this->load->view('Sliders/create');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/footer');
	}

	public function uploadd()
	{
		$config['upload_path'] = './uploads/imagenes/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload("fileImagen")) {
        	$this->session->set_flashdata('message','unsupported format');
            redirect(base_url('/index.php/sliders/sliders/create/')); 
        } else {
            $file_info = $this->upload->data();

            $this->Miniature($file_info['file_name']);
            $titulo = $this->input->post('Slidername');
            $imagen = $file_info['file_name'];
            $subir = $this->multipleuploads_model->upload($titulo,$imagen);      
            $data['titulo'] = $titulo;
            $data['imagen'] = $imagen;
            $this->session->set_flashdata('message','Registration Done With Exist');
            redirect(base_url('/index.php/sliders/sliders/index/')); 
        }
       
	}

	public function Miniature($filename)
	{

        $config['image_library'] = 'gd2';
        $config['source_image'] = 'uploads/imagenes/'.$filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['new_image']='uploads/imagenes/thumbs/';
        $config['thumb_marker']='';
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config); 
        $this->image_lib->resize();

	}
	 public function destroy($data)
        {
             $this->multipleuploads_model->delete($data);
        }
}
