<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

	class Reservations_model extends CI_Model{

		function  __construct()
		{
	        parent::__construct();
	        $this->load->database();
	        $this->load->library('session');
	    }

	    public function store($data)
		{
			//insert
		}
		

	    public function update($id,$data)
	    {

	    	$datos = array(
				'full_name'       => $data['full_name'],
				'phone'           => $data['phone'],
				'people_quantity' => $data['people'],
				'entrance_date'   => $data['entrance_date'],
				'entrance_hour'   => $data['entrance_hour'],
			);
			
			$this->db->where('reservation_id',$id);
			$query = $this->db->update('reservations',$datos);
		}

		public function read()
		{
			$query= $this->db->get('reservations');
			if ($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		public function get($id)
		{
			$this->db->where('reservation_id',$id);
			$query = $this->db->get('reservations');
			if ($query->num_rows() > 0){
				return $query->row();
			}else{
				return false;
			}
		}

		public function destroy($id)
		{
			$this->db->delete('reservations',array('reservation_id' => $id));	
		}
	}
?>