<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Users_model extends CI_Model {

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		//ver lista de user 
		public function table_users(){
			$query = $this->db->get('users');
			if ($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		public function user_edit($id){
			$this->db->join('users','users.user_type_id = user_types.user_type_id');
			$this->db->where('user_id',$id);
			$query= $this->db->get('user_types');
			if ($query->num_rows() > 0){
				return $query->row();
			}else{
				return false;
			}
		}
	}
?>