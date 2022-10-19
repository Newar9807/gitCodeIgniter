<?php
    defined('BASEPATH') or exit('No scripts are allowed');
    class users extends CI_Model{
        public function getRegUserData($data){
            $this->db->insert('users', $data);
        }
        public function getLoginUserData(){
            // $this->db->insert('user', $data);
            $data = $this->db->get('users');
            // return $data->result();

            var_dump($data);

            // $check = false;
            // foreach($data['user'] as $key=>$value){
            //     if($data[$key][1] == $nam && $data[$key][2] == $pass){
            //         session_start();
            //         $_SESSION['userId'] = $data[$key][0];
            //         mysqli_close($conn);
            //         $check = true;
            //         break;
            //     }
            // }
            // if($check){
            //     header('location:addItem.php');
            // }

        }
        public function getProductData($data){
            $this->db->insert('product', $data);
        }
    }