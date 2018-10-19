<?php 

if (! defined('BASEPATH')) exit ('No direct script access allowed');
class login_model extends CI_Model{

	function  __construct()
	{
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function  validate($email,$pass){
        $this->db->where('email', $email);
        $this->db->where('password',md5($pass));
        $query = $this->db->get('users');
        if ($query->num_rows() == 1) {
            return $query->row();
        }
    }
}

