<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Blogs_model extends CI_Model {

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function table_blogs()
		{
			$this->db->join('blogs','blogs.user_id = users.user_id');
			$query= $this->db->get('users');
			if ($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		public function add_blogs($data)
		{
			$fecha = date('Y/m/d');
			$this->db->insert('blogs',array('user_id'=>$data['user_id'],'title'=>$data['title'] ,'description'=>$data['description'],'image'=>$data['image'] ,'date' => $fecha));
		}

		public function blogs_edit($id)
		{
			$this->db->join('blogs','blogs.user_id = users.user_id');
			$this->db->where('blog_id',$id);
			$query= $this->db->get('users');
			if ($query->num_rows() > 0){
				return $query->row();
			}else{
				return false;
			}
		}
		
		public function update_blogs($id,$data)
		{
			$fecha = date('Y/m/d');
			$datos = array(
				'user_id'     => $data['user_id'],
				'title'       => $data['title'] ,
				'description' => $data['description'],
				'image'       => $data['image'] ,
				'date'        => $fecha
			);

			$this->db->where('blog_id',$id);
			$query = $this->db->update('blogs',$datos);
		}

		public function destroy_blogs($id)
		{
			$this->db->delete('blogs',array('blog_id' => $id));	
		}
	}
?>