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
            $this->users->getRegUserData($userData);
            $this->login();
            // if(!isset($_SESSION['userID'])){
            //     $this->users->getRegUserData($userData);
            //     $this->login();
            // }
            // else{
            //     $this->users->getLoginUserData($userData);
            //     $this->product();
            // }
        }

        public function userLoginData(){
            $insertedName = $this->input->post('name');
            $insertedPassword = $this->input->post('pass');
            
            $this->load->model('users');
            $data = $this->users->getLoginUserData();

            $check = false;
            foreach($data as $value):
                // var_dump($value->name);
                if($value->name == $insertedName && $value->password == $insertedPassword){
                    $this->session->set_userdata('userId', $value->id);
                    $check = true;
                    break;
                }
            endforeach;
            
            if($check){
                $this->product();
            }else{
                echo "Please Check Username and Password !!!";
            }
        }

        public function productData(){
            $productData = [
                'item' => $this->input->post('name'),
                'quantity' => $this->input->post('quantity'),
                'userid' => $this->session->userdata('userId')
            ];
            $this->load->model('users');
            $this->users->getProductData($productData);
            $this->product();
            echo $this->input->post('name')." added successfully.";
            // $this->load->model('user', 'tmp');
            // $this->tmp->getData($productData);
            // var_dump($productData);
        }
    }