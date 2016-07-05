<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller{
    public function index($item = null){

        /**
         * ADDING DYNAMIC DATA TO THE VIEW
         */
        if($item != null){
            $data['title'] = "Portfolio item #" . $item;
        } else {
            $data['title'] = "Portfolio";
        }
        $data['heading'] = "Welcome to Dolly site!";
        $data['description'] = "This is the portfolio section for CI Dolly Site";
        $data['keywords'] = "portfolio, dolly";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('index/portfolio-item', $data);
        $this->load->view('templates/footer');
    }
}