<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends Ci_Controller {

    public function index(){

        /**
         * ADDING DYNAMIC DATA TO THE VIEW
         */
        $data['title'] = "Homepage";
        $data['heading'] = "Welcome to Dolly site!";
        $data['description'] = "This is the homepage for CI Dolly Site";
        $data['keywords'] = "homepage, dolly";
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('index/index', $data);
        $this->load->view('templates/footer');
    }

}