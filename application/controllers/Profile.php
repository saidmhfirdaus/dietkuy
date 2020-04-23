<?php
	
	class Profile extends CI_Controller{
        public function __construct()
        {
            parent::__construct();        
            $this->load->library('form_validation');
            $this->load->model('Profile_Model');
        }

        public function index(){
            $data['title'] = 'Profile';
            $data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
            $this->load->view('templetes/header',$data);
            $this->load->view('profile/index',$data);
            $this->load->view('templetes/footer');
        }
        public function update($id) {
            $data['title'] = 'Update Profile';
            $data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            if($this->form_validation->run() == FALSE)  {
                $this->load->view('templetes/header',$data);
                $this->load->view('profile/update',$data);
                $this->load->view('templetes/footer');
            }else{
                $this->Profile_Model->updateUser($id);
                $this->session->set_flashdata('profile','Updated');
                redirect('profile');
            }
        }

    }
?>        