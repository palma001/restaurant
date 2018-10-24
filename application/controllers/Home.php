<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customers_model');
        $this->load->model('types_users_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('layouts/headers_granny');
        $this->load->view('layouts/navbar_granny');
        $this->load->view('home/index');
        $this->load->view('layouts/footer_granny');
    }
}
