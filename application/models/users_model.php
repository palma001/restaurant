<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Users_model extends CI_Model {

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		//ver lista de type user 
		public function table_users(){
			$query = $this->db->get('users');
			if ($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}
	}
?>