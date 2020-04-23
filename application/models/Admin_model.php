<?php

class Admin_model extends CI_Model {
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function addUser()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'assets/default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()
        ];
        $this->db->insert('user',$data);
    }
    public function deleteUser($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user');
    }
    
}