<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Types_users_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function store($data)
	{
		$fecha = date('Y/m/d');
		$this->db->insert('user_types',array(
			'user_type' => $data['type_user'], 
			'data'      => $fecha
			)
		);
	}

	public function update($id,$data){

		$datos = array(
			'user_type' => $data['type_user'] 
		);
		$this->db->where('user_type_id',$id);
		$query = $this->db->update('user_types',$datos);
	}
	
	public function read(){

		$query = $this->db->get('user_types');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function get($id){

		$this->db->where('user_type_id',$id);
		$query = $this->db->get('user_types');
		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function destroy($id){
		$this->db->delete('user_types',array('user_type_id' => $id));	
	}
}
