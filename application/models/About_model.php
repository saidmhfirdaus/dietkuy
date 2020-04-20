<?php

	class About_model extends CI_Model {
	    public function getAllUser()
	    {
	        return $this->db->get('user')->result_array();
	    }

	}
?>
