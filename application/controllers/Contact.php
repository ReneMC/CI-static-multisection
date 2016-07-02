<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Ci_Controller {

    public function index(){

        $this->load->helper('form');

        /**
         * ADDING DYNAMIC DATA TO THE VIEW
         */
        $data['title'] = "Contact us";
        $data['heading'] = "About";
        $data['description'] = "My description";
        $data['keywords'] = "This are keywords";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('index/contact');
        $this->load->view('templates/footer');
    }
}