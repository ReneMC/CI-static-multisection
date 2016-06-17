<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Ci_Controller {

    public function index(){

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('index/contact');
        $this->load->view('templates/footer');
    }
}