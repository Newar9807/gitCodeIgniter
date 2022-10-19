<?php
    defined('BASEPATH') or exit('No direct script access are allowed');

    class user extends CI_Controller{
        public function __construct(){
            parent::__construct();
            // $this->load->model('user_model');
        }

        public function view($file){
            // if(!file_exists(APPPATH.'views/user/'.$file.'php')){
            //     show_404();
            // }

            $data['title'] = $file;

            // $data['user'] = $this->user_model->get_user();

            $this->load->view('head', $data);
            $this->load->view('user/'.$file, $data);
            $this->load->view('foot', $data);
        }
    }