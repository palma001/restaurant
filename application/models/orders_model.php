<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class orders_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $var = "0";
    }
    public function read()
    {
        $this->db->join('users', 'users.user_id=orders.user_id');
        $query = $this->db->get('orders');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
    public function get($data)
    {
        $this->db->join('products', 'products.product_id=orders_products.products_id');
        $this->db->join('users', 'users.user_id=products.user_id');
        $this->db->join('orders', 'orders.order_id=orders_products.orders_id');
        $this->db->where('orders_id', $data);
        $query = $this->db->get('orders_products');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
    public function sumar_total()
    {
        $query = $this->db->query("SELECT SUM(total) as total from orders_products");
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
}
