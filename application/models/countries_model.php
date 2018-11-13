<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Countries_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function store($data)
	{
		$fecha = date('Y/m/d');
		$this->db->insert('countries',array(
			'country' => $data['country'],
			)
		);
	}

	public function update($id,$data){

		$datos = array(
			'country' => $data['country'] 
		);
		$this->db->where('country_id',$id);
		$query = $this->db->update('countries',$datos);
	}
	
	public function read(){

		$query = $this->db->get('countries');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function get($id){

		$this->db->where('country_id',$id);
		$query = $this->db->get('countries');
		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function destroy($id){
		$this->db->delete('countries',array('country_id' => $id));	
	}
}
