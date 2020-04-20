<?php
	
	class About extends CI_Controller{
        public function __construct()
        {
            parent::__construct();        
            $this->load->library('form_validation');
        }

        public function index(){
        	$data['title'] = 'About us';
            $this->load->view('templetes/header',$data);
            $this->load->view('about/index',$data);
            $this->load->view('templetes/footer');
        }
    }
?>        