<?php

Class Search_model extends CI_Model{
	function reads($search=false,$count=false){
		if($search){
			$limit = $this->config->item('limit_page');
			$offset = $this->input->get('offset');
			$this->db->like('title',$search);
			$this->db->or_like('title_en',$search);
			$this->db->or_like('content',$search);
			$this->db->or_like('content_en',$search);
			
			if($count){
				$this->db->from('page');
				return $this->db->count_all_results();
			}else{
				$query = $this->db->get('page',$limit,$offset);
				if($query){
					if($query->num_rows() > 0){
						return $query->result();
					}
				}
			}
		}
		return false;
	}
}
