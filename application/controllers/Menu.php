<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Menu extends CI_Controller {

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
		}

		public function index()
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
