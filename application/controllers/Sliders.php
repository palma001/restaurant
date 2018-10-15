<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sliders extends CI_Controller {

 function __construct()
	{
		 parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->model('mupload');
	}
	public function index()
	{
		$this->load->view('layouts/headers');
		$this->load->view('layouts/topnav');
		$this->load->view('Sliders/Sliders');
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

	public function edit()
	{


		$config['upload_path'] = './uploads/imagenes/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload("fileImagen")) {
           // $data['error'] = $this->upload->display_errors();
			//$this->load->view('layout/header');
			//$this->load->view('layout/menu');
			//$this->load->view('vupload',$data);
			//$this->load->view('layout/footer');
        } else {

            $file_info = $this->upload->data();

           /// $this->crearMiniatura($file_info['file_name']);
            $titulo = $this->input->post('Slidername');
            $imagen = $file_info['file_name'];
            $subir = $this->mupload->upload($titulo,$imagen);      
            $data['titulo'] = $titulo;
            $data['imagen'] = $imagen;
        }

	}
}
