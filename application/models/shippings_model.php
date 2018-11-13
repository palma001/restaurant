<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shippings_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function store($data)
	{
		$this->db->insert('shippings',array(
				'state_id'   => $data['state'], 
				'country_id' => $data['country'],
				'zip'        => $data['zip'], 
				'cost'       => $data['cost']
			)
		);
	}

	public function update($id,$data){

		$datos = array(
			'state_id'   => $data['state'], 
			'country_id' => $data['country'],
			'zip'        => $data['zip'], 
			'cost'       => $data['cost']
		);
		$this->db->where('shipping_id',$id);
		$query = $this->db->update('shippings',$datos);
	}
	
	public function read(){

		$this->db->join('countries','countries.country_id = shippings.country_id');
		$this->db->join('states','states.state_id = shippings.state_id');
		$query= $this->db->get('shippings');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function get($id){
		$this->db->join('countries','countries.country_id = shippings.country_id');
		$this->db->join('states','states.state_id = shippings.state_id');
		$this->db->where('shipping_id',$id);
		$query = $this->db->get('shippings');
		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function destroy($id){
		$this->db->delete('shippings',array('shipping_id' => $id));	
	}
}
