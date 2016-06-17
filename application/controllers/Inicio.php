<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends Ci_Controller {

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('index/index');
        $this->load->view('templates/footer');
    }

}