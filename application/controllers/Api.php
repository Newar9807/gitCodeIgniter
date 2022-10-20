<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Api extends CI_Controller{
        public function index(){
            $this->load->view('api/apihead');
            $this->load->view('api/test.php');
            $this->load->view('foot');
        }
        
        public function Data($methodname, $post = true){
            echo anchor('api', 'Back').'<br /><br /><br />';
            $cURL = curl_init();

            $options = array(
                CURLOPT_URL => 'https://lunivacare.ddns.net/CarelabDataMetricService_qc/Api/'.$methodname,
                CURLOPT_RETURNTRANSFER => 1,
            );

            if($post == 'true'){
                $data = json_encode($_POST);
                echo '<strong>Before: </strong><pre>';
                print_r($data);
                echo '</pre>';

                $options[CURLOPT_POST] = 1;
                $options[CURLOPT_POSTFIELDS] = $data;
                $options[CURLOPT_HTTPHEADER] = array('Content-Type: application/json');
            }
            
            curl_setopt_array($cURL, $options);
            curl_close($cURL);

            $result = curl_exec($cURL);
            $result = json_decode($result);

            echo '<br /><strong>After: </strong><pre>';
            print_r($result);
            echo '</pre>';
        }
    }
