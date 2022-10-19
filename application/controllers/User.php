<?php
    defined('BASEPATH') or exit('No direct script access are allowed');
    class User extends CI_Controller{
        public function index(){
            $this->load->view('head');
            $this->load->view('user/reg');
            $this->load->view('foot');
        }
        public function userData(){
            $userData = [
                'name' => $this->input->post('name'),
                'pass' => $this->input->post('pass'),
            ];
        }
        public function productData(){
            $productData = [
                ''
            ];
        }
    }