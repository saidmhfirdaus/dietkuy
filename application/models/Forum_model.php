<?php

class Forum_model extends CI_Model
{
    public function getAllForum()
    {
        return $this->db->get('forum')->result_array();
    }
    public function addForum()
    {
        $data = [
            "title" => $this->input->post('ftitle', true),
            "desc" => $this->input->post('fdesc', true),
        ];
        $this->db->insert('forum', $data);
    }
    public function getDesc($id)
    {
        $this->db->where('id', $id);
        $this->db->get('forum')->result_array();
    }
    public function deleteForum($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('forum');
    }
    public function updateForum($id)
    {   
        $data = [
            "title" => $this->input->post('title',true),
            "desc" => $this->input->post('desc',true)
        ];
        $this->db->where('id',$id);
        $this->db->update('forum',$data);
    }
    
}
