<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Model {

    public function save_product($product_info)
    {
        $query = "INSERT INTO products (name, price, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
        $data = array($product_info['name'], $product_info['price']);

        $this->db->query($query, $data);
    }
}