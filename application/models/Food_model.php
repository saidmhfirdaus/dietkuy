<?php

class Food_model extends CI_Model {
    public function getAllFood()
    {
        return $this->db->get('food')->result_array();
    }
    public function addFood()
    {
        $data = [
            "name" => $this->input->post('fname',true),
            "serving" => $this->input->post('fserving',true),
            "calori" => $this->input->post('fcalori',true),
        ];
        $this->db->insert('food',$data);
    }
    public function deleteFood($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('food');
    }
    public function updateFood($id)
    {
        $data = [
            "name" => $this->input->post('fname',true),
            "serving" => $this->input->post('fserving',true),
            "calori" => $this->input->post('fcalori',true),
        ];
        $this->db->where('id',$id);
        $this->db->update('food',$data);
    }
}