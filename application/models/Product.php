<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Model {

    public function save_product($product_info)
    {
        $query = "INSERT INTO products (name, price, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
        $data = array($product_info['name'], $product_info['price']);

        $results = $this->db->query($query, $data);
        return $results;
    }
    public function get_products()
    {
        $products = $this->db->query("SELECT * FROM products")->result_array();
        return $products;
    }
    public function get_product($id)
    {
        $product = $this->db->query("SELECT * FROM products WHERE id = {$id}")->row_array();
        return $product;
    }
}