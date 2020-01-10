<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Settings extends CI_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('settings_model');
			$this->load->library('session');
			if (!$this->session->userdata['user_id']){
	            redirect(base_url('login'));
			}
		}

		public function index()
		{
			$settings = $this->settings_model->read();
			$this->load->view('layouts/header_admin');
			$this->load->view('layouts/navbar_admin');
			$this->load->view('layouts/topnav_admin');
			$this->load->view('settings/index',array('settings' =>$settings));
		    $this->load->view('layouts/footer_admin');
		}

		public function update()
		{
			$config['upload_path']   = './uploads/logo/';
			$config['allowed_types'] = 'jpg|jpeg|gif|png|svg';
			$this->load->library('upload',$config);

			$this->upload->do_upload('logo');
			$this->upload->do_upload('favicon');      

			$logo = $_FILES['logo']['name'];
			$favicon = $_FILES['favicon']['name'];
                 
			$data = array(
				'title'        =>  $this->input->post('title'),
				'address'      =>  $this->input->post('address'),
				'mission'      =>  $this->input->post('mission'),
				'vision'       =>  $this->input->post('vision'),
				'facebook'     =>  $this->input->post('facebook'),
				'twitter'      =>  $this->input->post('twitter'),
				'instagram'    =>  $this->input->post('instagram'),
				'pinterest'    =>  $this->input->post('pinterest'),
				'phone'        =>  $this->input->post('phone'),
				'tax'          =>  $this->input->post('tax'),
				'taxname'      =>  $this->input->post('taxname'),
				'currency'     =>  $this->input->post('currency'),
				'lenguage'     =>  $this->input->post('lenguage'),
				'reservations' =>  $this->input->post('reservations'),
				'logo'         => $logo,
				'favicon'      => $favicon
			);
			$this->settings_model->update($data);
		}
	}
?>
             