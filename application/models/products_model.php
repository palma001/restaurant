<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function views_menu(){
		$this->db->order_by('product_id','Desc');
		$query = $this->db->get('products');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function view_menu($id)
	{
		$this->db->where('product_id',$id);
		$query = $this->db->get('products');
		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function add_menu($data)
	{
		$fecha = date('Y/m/d');
		$this->db->insert('products',array('title'=>$data['title'], 'description'=>$data['description'], 'price'=>$data['price'], 'outstanding'=>$data['outstanding'], 'views'=>$data['views'], 'date' => $fecha));
	}

	public function update($id,$data){
		$datos = array(
			'title' => $data['title'],
			'description' => $data['description'],
			'price' => $data['price'],
			'outstanding' => $data['outstanding'],
			'views' => $data['views']
		);

		$this->db->where('product_id',$id);
		$query = $this->db->update('products',$datos);
	}

	public function destroy($id){
		$this->db->delete('products',array('product_id' => $id));	
	}
}
