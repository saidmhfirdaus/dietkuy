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
}
