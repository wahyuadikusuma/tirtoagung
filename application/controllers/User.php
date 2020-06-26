<?php
class User extends CI_Controller{

    public function index(){
        $data["title"] = "Ta-45";
        $this->load->view("header", $data);
        $this->load->view("home");
        $this->load->view("footer");
    }

    public function produk(){
        $data["title"] = "Ta-45 - Produk";
        $this->load->view("header", $data);
        $this->load->view("produk");
        $this->load->view("footer");
    }

    public function detail($id = NULL){
        $data["title"] = "Ta-45 - Detail";
        $this->load->view("header", $data);
        $this->load->view("detail");
        $this->load->view("footer");
    }

    public function tentang_kami(){
        $data["title"] = "Ta-45 - Tentang kami";
        $this->load->view("header", $data);
        $this->load->view("tentang_kami");
        $this->load->view("footer");
    }
}