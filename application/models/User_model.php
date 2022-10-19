<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class User_model extends CI_Model{
        public function get_user(){
            $query = $this->db->get('user');
            if($query->num_rows()>0){
                return $query->result();
            }
        }
    }