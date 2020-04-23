<?php
	
	class Calculator extends CI_Controller{
        public function __construct()
        {
            parent::__construct();        
            $this->load->library('form_validation');
        }

        public function index(){
        	$data['title'] = 'Calculator';
            $this->load->view('templetes/header',$data);
            $this->load->view('Calculator/index',$data);
            $this->load->view('templetes/footer');
            $this->load->helper('form');
        }

        public function CalCalculate(){
            $data['title'] = 'CalResult';
            $this->load->helper('form');

            //$this->data['result'] = array(
                $age       = $this->input->post('Usia');//,
                $weight    = $this->input->post('BeratBadan');//,
                $height    = $this->input->post('TinggiBadan');//,
                $sex       = $this->input->post('kelamin');//,
                $aktivitas = $this->input->post('aktivitas');
                
            //);
            
            //$this->input->post($result);
            $age = (float)$age;
            $weight = (float)$weight;
            $height = (float)$height;

            if($sex == 'Pria'){
                $result = 66.5 + (13.8 * $weight) + (5 * $height) - (6.8 * $age);
            }else{
                $result = 655.1 + (9.6 * $weight) + (1.9 * $height) - (4.7 * $age);
            }



            if ($aktivitas == 'Sedentari'){
                $finalresult = $result * 1.2;
            }else if ($aktivitas == 'Ringan'){
                $finalresult = $result * 1.375;
            }else if ($aktivitas == 'Sedang'){
                $finalresult = $result * 1.55;
            }else if ($aktivitas == 'Berat'){
                $finalresult = $result * 1.725;
            }else if ($aktivitas == 'SangatBerat'){
                $finalresult = $result * 1.9;
            }

            $this->load->view('templetes/header',$data);
            $data = array('finalresult' => $finalresult,
                          'result' => $result);
            $this->load->view('Calculator/result', $data);
            $this->load->view('templetes/footer');
        }
    }
?> 