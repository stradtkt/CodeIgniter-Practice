<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function index()
    {
        $all_products = $this->product->get_products();
        $this->load->view('products', array('all_products' => $all_products));
    }
    public function new_product()
    {
        $this->load->view('new_product');
    }
    public function create_product()
    {
//        $name = $this->input->post('name');
//        $price = $this->input->post('price');
//        $product_info = array(
//            'name' => $name,
//            'price' => $price
//        );
        if(strlen($this->input->post('name')) < 2) {
            $this->session->set_flashdata('name', 'Name is too short');
            redirect('/products/new');
            exit();
        }
        if($this->product->save_product($this->input->post())) {

        }
        redirect('/products/finished');
    }
    public function finished_product()
    {
        $product_information = array(
            'name' => $this->session->userdata('name'),
            'price' => $this->session->userdata('price')
        );
        $this->load->view("finished_product", $product_information);
    }

    public function edit_product($id)
    {
        $the_product = $this->product->get_product($id);
        $this->load->view('edit_product', array('product' => $the_product));
    }
}