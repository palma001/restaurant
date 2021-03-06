<?php defined('BASEPATH') or exit('No direct script access allowed');

class States extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('states_model');
        $this->load->model('countries_model');
        if (!$this->session->userdata['user_id']) {
            redirect(base_url('login'));
        }
    }
    public function index()
    {

        $data = array(
            'states' => $this->states_model->read(),
        );
        $this->load->view('layouts/header_admin');
        $this->load->view('layouts/navbar_admin');
        $this->load->view('layouts/topnav_admin');
        $this->load->view('modals/modal_confirm');
        $this->load->view('states/index', $data);
        $this->load->view('layouts/footer_admin');
    }

    public function create()
    {
        $data = array(
            'countries' => $this->countries_model->read(),
        );
        $this->load->view('layouts/header_admin');
        $this->load->view('layouts/navbar_admin');
        $this->load->view('layouts/topnav_admin');
        $this->load->view('states/create', $data);
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
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == false) {
            $this->create();
        } else {

            $data = array(
                'state'   => $this->input->post('state'),
                'country' => $this->input->post('country'),
            );
            $this->states_model->store($data);
            $this->session->set_flashdata('message', 'Saved Successfully');
            redirect(base_url('states/'));
        }
    }

    public function edit()
    {
        $id   = $this->uri->segment(3);
        $data = array(
			'states'    => $this->states_model->get($id), 
			'countries' => $this->countries_model->read($id)
        );
        $this->load->view('layouts/header_admin');
        $this->load->view('layouts/navbar_admin');
        $this->load->view('layouts/topnav_admin');

        if (!$id) {
            redirect(base_url('states'));
        } else {
            $this->load->view('states/edit', $data);
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
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == false) {
            $this->create();
        } else {

            $data = array(
                'state'   => $this->input->post('state'),
                'country' => $this->input->post('country'),
            );
            $this->states_model->update($id,$data);
            $this->session->set_flashdata('message', 'Saved Successfully');
            redirect(base_url('states/'));
        }
    }

    public function destroy()
    {
        $id = $this->input->post("id");
        $this->states_model->destroy($id);
        $this->session->set_flashdata('message', 'Deleted Successfully');
    }

    public function serach_states()
    {
       $country = $this->input->post('country_id');
        $data = array(
            'states' => $this->states_model->serach_states($country)
        );
        echo json_encode($data);
    }

}
