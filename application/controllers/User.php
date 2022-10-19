<?php
    defined('BASEPATH') or exit('No direct script access are allowed');
    class User extends CI_Controller{
        public function index(){
            $this->load->view('head');
            $this->load->view('user/reg');
            $this->load->view('foot');
        }

        public function login(){
            $this->load->view('head');
            $this->load->view('user/login');
            $this->load->view('foot');
        }

        public function product(){
            $this->load->view('head');
            $this->load->view('user/product');
            $this->load->view('foot');
        }

        public function userData(){
            $userData = [
                'name' => $this->input->post('name'),
                'password' => $this->input->post('pass'),
            ];
            
            // var_dump($userData);
            $this->load->model('users');
            if(!isset($_SESSION['userID'])){
                $this->users->getRegUserData($userData);
                $this->login();
            }
            else{
                $this->users->getLoginUserData($userData);
                $this->product();
            }
        }

        public function productData(){
            $productData = [
                'item' => $this->input->post('name'),
                'quantity' => $this->input->post('quantity')
            ];
            $this->load->model('users');
            $this->users->getProductData($productData);
            // $this->load->model('user', 'tmp');
            // $this->tmp->getData($productData);
            // var_dump($productData);
        }
    }