<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

	class Settings_model extends CI_Model{

		function  __construct()
		{
	        parent::__construct();
	        $this->load->database();
	        $this->load->library('session');
	    }

		public function read()
		{
			$this->db->limit(1);
			$query = $this->db->get('settings');
			if ($query->num_rows() > 0){
				return $query->row();
			}else{
				return false;
			}
		}

		public function update($data)
		{
			$datos = array(
				'title'               =>  $data['title'],
				'address'             =>  'address',
				'mission'             =>  'mission',
				'vision'              =>  'vision',
				'facebook'            =>  $data['facebook'],
				'twitter'             =>  $data['twitter'],
				'instagram'           =>  $data['instagram'],
				'pinterest'           =>  $data['pinterest'],
				'phone'               =>  $data['phone'],
				'tax'                 =>  $data['tax'],
				'tax_name'            =>  $data['taxname'],
				'currency'            =>  $data['currency'],
				'language'            =>  $data['lenguage'],
				'active_reservations' =>  $data['reservations'], 
			);

			$this->db->update('settings',$datos);
			redirect(base_url('settings'));
		}

		public function get($id)
		{
			$this->db->where('settings_id',$id);
			$query = $this->db->get('settings');
			if ($query->num_rows() > 0){
				return $query->row();
			}else{
				return false;
			}
		}

		public function destroy($id)
		{
			$this->db->delete('settings',array('settings_id' => $id));	
		}
	}
?>