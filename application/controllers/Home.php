<?php defined('BASEPATH') or exit('No direct script access allowed');

    class Home extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('sliders_model');
            $this->load->model('types_users_model');
            $this->load->model('settings_model');
            $this->load->library('session');
        }

        public function index()
        {
            $slider  = $this->sliders_model->read();
            $settings = $this->settings_model->max_id();
            $this->load->view('layouts/headers_granny',array('settings' => $settings));
            $this->load->view('layouts/navbar_granny',array('settings' => $settings));
            $this->load->view('home/index', array('slider' => $slider));
            $this->load->view('layouts/footer_granny');
        }
    }
?>