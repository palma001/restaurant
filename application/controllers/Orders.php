<?php defined('BASEPATH') or exit('No direct script access allowed');

class Orders extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('orders_model');
        $this->load->library('session');
        if (!$this->session->userdata['user_id']) {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['obtener'] = $this->orders_model->read();
        $this->load->view('layouts/header_admin');
        $this->load->view('layouts/navbar_admin');
        $this->load->view('layouts/topnav_admin');
        $this->load->view('orders/index', $data);
        $this->load->view('layouts/footer_admin');
    }

    public function show($data)
    {
        $datos['obtener'] = $this->orders_model->get($data);
        $this->load->view('layouts/header_admin');
        $this->load->view('layouts/navbar_admin');
        $this->load->view('layouts/topnav_admin');
        $this->load->view('orders/show', $datos);
        $this->load->view('layouts/footer_admin');
    }
}
