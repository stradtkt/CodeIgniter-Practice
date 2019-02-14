<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('products');
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
        $this->Product->save_product($this->input->post());
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
}