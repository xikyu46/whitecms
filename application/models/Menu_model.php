<?php

Class Menu_model extends CI_Model{
	function reads(){
		$this->db->order_by('parent_id, position');
		$query = $this->db->get('menu_item');
		if($query){
			if($query->num_rows() > 0){
				return $query->result();
			}
		}
		return false;
	}
}
