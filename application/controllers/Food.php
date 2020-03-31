<?php

    class Food extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('Food_model');
        }

        public function index() {
            
            $data['title'] = 'Food';
            $data['food'] = $this->Food_model->getAllFood();
            $this->load->view('templetes/header',$data);
            $this->load->view('food/index',$data);
            $this->load->view('templetes/footer');
        }
    }