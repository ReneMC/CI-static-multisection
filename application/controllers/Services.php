<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Ci_Controller {

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('index/services');
        $this->load->view('templates/footer');
    }

}