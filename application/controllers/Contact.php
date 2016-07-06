<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Ci_Controller {

    public function index(){

        $this->load->helper('form','email');

        /**
         * ADDING DYNAMIC DATA TO THE VIEW
         */
        $data['title'] = "Contact us";
        $data['heading'] = "Contact";
        $data['description'] = "This is the Contact page for CI Dolly Site";
        $data['keywords'] = "contact us, please, carne asada";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('index/contact');
        $this->load->view('templates/footer');
    }

    public function send_mail(){
        $this->load->helper(array('form','email','url'));
        $this->load->library('form_validation');

        /**
         * ADDING DYNAMIC DATA TO THE VIEW
         */
        $data['title'] = "Contact us";
        $data['heading'] = "Contact";
        $data['description'] = "This is the Contact page for CI Dolly Site";
        $data['keywords'] = "contact us, please, carne asada";

        $this->form_validation->set_rules("name", "<strong>Name</strong>", "required|alpha_numeric_spaces");
        $this->form_validation->set_rules("phone", "<strong>Phone Number</strong>", "required|numeric");
        $this->form_validation->set_rules("email", "<strong>Email Address</strong>", "required|valid_email");
        $this->form_validation->set_rules("message", "<strong>Message</strong>", "required|required|alpha_numeric_spaces");

        if($this->form_validation->run() == FALSE){

            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('index/contact');
            $this->load->view('templates/footer');
        } else {
            $data["message"] = "You message has been sent!";

            $this->load->library('email');

            $this->email->from(set_value("email"), set_value("name"));
            $this->email->to('rene.mejiac@gmail.com', "Web Admin");
            $this->email->subject('A new message from your website');

            $this->email->message(
                "Hello,\n\n
            You just received a message from your website with the following data:\n\n
            Name: " . set_value('name') . "\n
            Email: " . set_value('email') . "\n
            Phone: " . set_value('phone') . "\n
            Message: " . set_value('message') . "\n"
            );

            $this->email->send();

            // For debugging email errors
            //echo $this->email->print_debugger();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('index/contact', $data);
            $this->load->view('templates/footer');
        }
    }
}