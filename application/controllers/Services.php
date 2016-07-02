<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Ci_Controller {

    public function index(){

        /**
         * ADDING DYNAMIC DATA TO THE VIEW
         */
        $data['title'] = "Services";
        $data['heading'] = "About";
        $data['description'] = "My description";
        $data['keywords'] = "This are keywords";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('index/services');
        $this->load->view('templates/footer');
    }

}