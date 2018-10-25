<?php defined('BASEPATH') or exit('No direct script access allowed');

    class Home extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('sliders_model');
            $this->load->model('types_users_model');
            $this->load->model('settings_model');
            $this->load->model('products_model');
            $this->load->model('blogs_model');
            $this->load->library('session');
        }

        public function index()
        {
            $slider  = $this->sliders_model->read();
            $products  = $this->products_model->read();
            $settings = $this->settings_model->max_id();
            $blogs = $this->blogs_model->read();

            $this->load->view('layouts/headers_granny',array('settings' => $settings));
            $this->load->view('layouts/navbar_granny',
                    array(
                        'settings' => $settings,
                        'blogs'    => $blogs
                    )
                );
            $this->load->view('home/index', 
                    array(
                        'slider'   => $slider, 
                        'products' => $products, 
                        'settings' => $settings , 
                        'blogs'    => $blogs
                    )
                );
            $this->load->view('layouts/footer_granny');
        }

        public function pagination()
        {
            
            $data = array('products' => $this->products_model->pagination());
            echo json_encode($data);
        }
    }
?>