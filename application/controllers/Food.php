<?php

    class Food extends CI_Controller{
        public function __construct()
        {
            parent::__construct();        
            $this->load->model('Food_model');
            $this->load->library('form_validation');
        }

        public function index() {
            
            $data['title'] = 'Food';
            $data['food'] = $this->Food_model->getAllFood();
            $this->load->view('templetes/header',$data);
            $this->load->view('food/index',$data);
            $this->load->view('templetes/footer');
        }

        public function add() {
            $data['title'] = 'Add Food';
            $this->form_validation->set_rules('fname','Food Name','required');
            $this->form_validation->set_rules('fserving','Food Serving','required');
            $this->form_validation->set_rules('fcalori','Food Calori','required|numeric');
            if($this->form_validation->run() == FALSE)  {
                $this->load->view('templetes/header',$data);
                $this->load->view('food/add');
                $this->load->view('templetes/footer');
                
                
            } else {
                $this->Food_model->addFood();
                $this->session->set_flashdata('food','Added');
                redirect('food');
            }
        }
        public function delete($id){
            $this->Food_model->deleteFood($id);
            $this->session->set_flashdata('food','deleted');
            redirect('food');
        }
    }