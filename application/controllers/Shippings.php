<?php defined('BASEPATH') or exit('No direct script access allowed');

class Shippings extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('shippings_model');
        $this->load->model('countries_model');
        $this->load->model('states_model');
        if (!$this->session->userdata['user_id']) {
            redirect(base_url('login'));
        }
    }
    public function index()
    {
        $data = array(
            'shippings' => $this->shippings_model->read(),
        );
        $this->load->view('layouts/header_admin');
        $this->load->view('layouts/navbar_admin');
        $this->load->view('layouts/topnav_admin');
        $this->load->view('modals/modal_confirm');
        $this->load->view('shippings/index', $data);
        $this->load->view('layouts/footer_admin');
    }

    public function create()
    {
        $data = array(
            'countries' => $this->countries_model->read(),
            'states'    => $this->states_model->read(),
        );
        $this->load->view('layouts/header_admin');
        $this->load->view('layouts/navbar_admin');
        $this->load->view('layouts/topnav_admin');
        $this->load->view('shippings/create', $data);
        $this->load->view('layouts/footer_admin');
    }

    public function store()
    {

        $config = array(
            array(
                'field' => 'state',
                'label' => 'State',
                'rules' => 'required',
            ),
            array(
                'field' => 'country',
                'label' => 'Country',
                'rules' => 'required',
            ),
            array(
                'field' => 'zip',
                'label' => 'Zip',
                'rules' => 'required',
            ),
            array(
                'field' => 'price',
                'label' => 'price',
                'rules' => 'required',
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == false) {
            $this->create();
        } else {

            $data = array(
                'state'   => $this->input->post('state'),
                'country' => $this->input->post('country'),
                'zip'     => $this->input->post('zip'),
                'cost'    => $this->input->post('price'),
            );
            $this->shippings_model->store($data);
            $this->session->set_flashdata('message', 'Saved Successfully');
            redirect(base_url('shippings/'));
        }
    }

    public function edit()
    {
        $id   = $this->uri->segment(3);
        $data = array(
            'shippings' => $this->shippings_model->get($id),
			'states'    => $this->states_model->read(), 
			'countries' => $this->countries_model->read()
        );
        $this->load->view('layouts/header_admin');
        $this->load->view('layouts/navbar_admin');
        $this->load->view('layouts/topnav_admin');

        if (!$id) {
            redirect(base_url('shippings'));
        } else {
            $this->load->view('shippings/edit', $data);
        }
        $this->load->view('layouts/footer_admin');
    }

    public function update($id)
    {
    	$config = array(
            array(
                'field' => 'state',
                'label' => 'State',
                'rules' => 'required',
            ),
            array(
                'field' => 'country',
                'label' => 'Country',
                'rules' => 'required',
            ),
            array(
                'field' => 'zip',
                'label' => 'Zip',
                'rules' => 'required',
            ),
            array(
                'field' => 'price',
                'label' => 'price',
                'rules' => 'required',
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == false) {
            $this->create();
        } else {

            $data = array(
                'state'   => $this->input->post('state'),
                'country' => $this->input->post('country'),
                'zip'     => $this->input->post('zip'),
                'cost'    => $this->input->post('price'),
            );
            $this->shippings_model->update($id,$data);
            $this->session->set_flashdata('message', 'Saved Successfully');
            redirect(base_url('shippings/'));
        }
    }

    public function destroy()
    {
        $id = $this->input->post("id");
        $this->shippings_model->destroy($id);
        $this->session->set_flashdata('message', 'Deleted Successfully');
    }

    public function shippings_price()
    {
        $country = $this->input->post('country');
        $states  = $this->input->post('states');
        $data = array(
            'price' => $this->shippings_model->shippings_price($country,$states),
        );
        if ($data['price'] == false) {
            echo 1;
        }else{
            echo json_encode($data);
        }
    }
}
