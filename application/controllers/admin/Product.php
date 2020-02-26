<?php

    // halaman beranda
    class Product extends CI_Controller{

        public function index(){
            if(!isset($_SESSION['isAdminLogin']) && $_SESSION['isAdminLogin'] !== true){
                redirect(base_url('admin')); exit;
            }elseif ($_SESSION['isAdminLogin'] && !isset($_SESSION['alertOnce'])) {
                $_SESSION['alertOnce'] = true;
            } 
            $this->load->view('templates/header_admin');
            $this->load->view('product');
            $this->load->view('templates/footer_admin');
        }


    }



?>