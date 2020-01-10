<?php defined('BASEPATH') OR exit('No direct script access allowed');

class States_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function store($data)
	{
		$this->db->insert('states',array(
				'state'      => $data['state'], 
				'country_id' => $data['country']
			)
		);
	}

	public function update($id,$data){

		$datos = array(
			'state'      => $data['state'], 
			'country_id' => $data['country']
		);
		$this->db->where('state_id',$id);
		$query = $this->db->update('states',$datos);
	}
	
	public function read(){

		$this->db->join('countries','countries.country_id = states.country_id');
		$query= $this->db->get('states');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function get($id){
		$this->db->join('countries','countries.country_id = states.country_id');
		$this->db->where('state_id',$id);
		$query = $this->db->get('states');
		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function destroy($id){
		$this->db->delete('states',array('state_id' => $id));	
	}

	public function serach_states($country_id)
	{
		$this->db->where('country_id',$country_id);
		$query = $this->db->get('states');
		return $query->result();
	}
}
