<?php

class Food_model extends CI_Model {
    public function getAllFood()
    {
        return $this->db->get('food')->result_array();
    }
}