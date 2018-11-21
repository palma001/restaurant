<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function store($data)
	{
		$fecha = date('Y/m/d');
		$this->db->insert('products',array(
				'user_id'     => $data['user_id'],
				'title'       => $data['title'], 
				'description' => $data['description'], 
				'price'       => $data['price'], 
				'outstanding' => $data['outstanding'], 
				'date'        => $fecha,
				'image'       => $data['image'],
			)
		);
	}

	public function update($id,$data)
	{
		$datos = array(
			'title'       => $data['title'],
			'description' => $data['description'],
			'price'       => $data['price'],
			'outstanding' => $data['outstanding'],
			'views'       => $data['views'],
		);

		$this->db->where('product_id',$id);
		$query = $this->db->update('products',$datos);
	}
	
	public function read()
	{
		$query = $this->db->get('products');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}


	public function get($id)
	{
		$this->db->where('product_id',$id);
		$query = $this->db->get('products');
		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	
	public function destroy($id)
	{
		$this->db->delete('products',array('product_id' => $id));	
	}

	public function count()
	{
		$query = $this->db->query("SELECT SUM(views) as views from products");
		return $query->row();
	}

	public function pagination($inicio = FALSE,$quantity = FALSE)
	{
		if ($inicio !== FALSE && $quantity !== FALSE) {
			$this->db->limit($quantity,$inicio);
		}
		$this->db->where('outstanding',1);
		$query = $this->db->get('products');
		return $query->result();
	}
}
