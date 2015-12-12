<?php

Class Page_model extends CI_Model{
	function get_page_list($type='page'){
		$this->db->select('id,title,url');
		$this->db->where('type',$type);
		$query = $this->db->get('page');
		if($query){
			if($query->num_rows() > 0){
				return $query->result();
			}
		}
		return false;
	}
}
