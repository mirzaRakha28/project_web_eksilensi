<?php

    class More_product extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('more_again');
            $this->load->view('templates/footer');
        }


    }



?>