<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'User List';
        $data['user'] = $this->Admin_model->getAllUser();
        $this->load->view('templetes/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templetes/footer');
    }
    public function delete($id){
        $this->Admin_model->deleteUser($id);
        redirect('admin');
    }
}