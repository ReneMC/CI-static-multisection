<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller{
    public function index(){

        /**
         * ADDING DYNAMIC DATA TO THE VIEW
         */
        $data['title'] = "Pricing";
        $data['heading'] = "Welcome to Dolly site!";
        $data['description'] = "This is the pricing section for CI Dolly Site";
        $data['keywords'] = "pricing table, dolly";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('index/pricing', $data);
        $this->load->view('templates/footer');
    }
}