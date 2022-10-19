<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class News extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->lang->load('news', 'nepali');
        }
        public function index(){
            $data['first']=$this->lang->line('news_title');
            $data['second']='Second Data';
            $this->load->view('news/index', $data);
        }
        public function details($p1){
            echo 'Details News: '.$p1;
        }
    }