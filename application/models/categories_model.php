<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

	class categories_model extends CI_Model{

		function  __construct()
		{
	        parent::__construct();
	        $this->load->database();
	        $this->load->library('session');
	    }

	    public function store($data)
		{
			$this->db->insert('categories',array(
				'category' => $data['category'] ,
				)
			);
		}
		

	    public function update($id,$data)
	    {

	    	$datos = array(
				'category' => $data['category'] 
			);
			$this->db->where('category_id',$id);
			$query = $this->db->update('categories',$datos);
		}

		public function read()
		{
			$query= $this->db->get('categories');
			if ($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		public function get($id)
		{
			$this->db->where('category_id',$id);
			$query = $this->db->get('categories');
			if ($query->num_rows() > 0){
				return $query->row();
			}else{
				return false;
			}
		}

		public function destroy($id)
		{
			$this->db->delete('categories',array('category_id' => $id));	
		}
	}
?>