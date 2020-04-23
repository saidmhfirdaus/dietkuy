<?php

class Forum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Forum_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Forum Diet';
        $data['forum'] = $this->Forum_model->getAllForum();
        $this->load->view('templetes/header', $data);
        $this->load->view('forum/index', $data);
        $this->load->view('templetes/footer');
    }

    public function add()
    {
        $data['title'] = 'Create Discussion';
        $this->form_validation->set_rules('ftitle', 'Discussion Title', 'required');
        $this->form_validation->set_rules('fdesc', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templetes/header', $data);
            $this->load->view('forum/add');
            $this->load->view('templetes/footer');
        } else {
            $this->Forum_model->addForum();
            $this->session->set_flashdata('forum', 'Added');
            redirect('forum');
        }
    }
    public function desc($id)
    {
        $data['title'] = "Description";
        $data['forum'] = $this->Forum_model->getDesc($id);
        $this->load->view('templetes/header', $data);
        $this->load->view('forum/desc');
        $this->load->view('templetes/footer');
    }
    public function delete($id){
        $this->Forum_model->deleteForum($id);
        $this->session->set_flashdata('forum','deleted');
        redirect('forum');
    }
    public function update($id) {
        $data['title'] = 'Edit Forum';
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('desc','Description','required');
        if($this->form_validation->run() == FALSE)  {
            $this->load->view('templetes/header',$data);
            $this->load->view('forum/update');
            $this->load->view('templetes/footer');
        }else{
            $this->Forum_model->updateForum($id);
            $this->session->set_flashdata('forum','Updated');
            redirect('forum');
        }
    }
}
