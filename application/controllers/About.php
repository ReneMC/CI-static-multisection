<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Ci_Controller {

    public function index(){

        /**
         * ADDING DYNAMIC DATA TO THE VIEW
         */
        $data['title'] = "About Us";
        $data['heading'] = "About";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('index/about');
        $this->load->view('templates/footer');
    }

}