<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function view_products(){
		$this->db->order_by('product_id','Desc');
		$query = $this->db->get('products');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function view_product($id)
	{
		$this->db->where('product_id',$id);
		$query = $this->db->get('products');
		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function add_products($data)
	{
		$fecha = date('Y/m/d');
		$this->db->insert('products',array('user_id'=>$data['user_id'],'title'=>$data['title'], 'description'=>$data['description'], 'price'=>$data['price'], 'outstanding'=>$data['outstanding'], 'date' => $fecha));
	}

	public function update_products($id,$data){
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

	public function count_views()
	{
		$query = $this->db->query("SELECT SUM(views) as views from products");
		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
}
