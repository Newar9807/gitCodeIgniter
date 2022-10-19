<?php
    defined('BASEPATH') or exit('No scripts are allowed');
    class users extends CI_Model{
        public function getRegUserData($data){
            $this->db->insert('users', $data);
        }
        public function getLoginUserData(){
            // $this->db->insert('user', $data);
            $data = $this->db->get('users');
            return $data->result();
        }
        public function getProductData($data){
            $this->db->insert('product', $data);
        }
    }