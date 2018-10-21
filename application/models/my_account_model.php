<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

	class My_account_model extends CI_Model{

		function  __construct()
		{
	        parent::__construct();
	        $this->load->database();
	        $this->load->library('session');
	    }

	    public function update($id,$data)
	    {

	    	if ($data['password']) {

	    		$datos = array(
					'user_type_id' => $data['user_type_id'],
					'full_name'    => $data['full_name'],
					'email'        => $data['email'],
					'password'     => $data['password']
				);
				$this->db->where('user_id',$id);
				$query = $this->db->update('users',$datos);
				
	    	}else{
	    		
	    		$datos = array(
					'user_type_id' => $data['user_type_id'],
					'full_name'    => $data['full_name'],
					'email'        => $data['email'],
				);
				$this->db->where('user_id',$id);
				$query = $this->db->update('users',$datos);
	    	}
		}
	}
?>