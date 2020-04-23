<?php 

class Profile_model extends CI_Model
{
    public function updateUser($id)
    {   
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
        ];
        $this->db->where('id',$id);
        $this->db->update('user',$data);
    }
    public function getData($id){
        $this->db->where('id',$id);
        return $this->db->get('user')->result_array();
    }
}




?>