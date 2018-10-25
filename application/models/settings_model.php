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
			$query = $this->db->get('settings');
			if ($query->num_rows() > 0){
				return $query->row();
			}else{
				return false;
			}
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

		public function max_id()
		{
			$query = $this->db->query('SELECT * from settings ORDER BY setting_id  DESC LIMIT 1');
			return $query->row();
		}
	}
?>