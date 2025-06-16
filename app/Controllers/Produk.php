<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    public function index() {
        $this->load->model('Produk_model');
        $data['produk'] = $this->Produk_model->get_all();
        $this->load->view('produk_list', $data);
    }
}
