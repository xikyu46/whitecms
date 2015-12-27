<?php

Class Crud_model extends CI_Model{
	function read($table=false,$where=false,$order=false){
		$_GET['model_multi'] = false;
		return $this->where($table,$where,false,$order);
	}
	
	function count_db_read($table=false, $where=false){
		$_GET['model_multi'] = false;
		return $this->where($table,$where,true);
	}
	
	function reads($table=false,$where=false,$order=false){
		$_GET['model_multi'] = true;
		return $this->where($table,$where,false,$order);
	}
	
	function count_db_reads($table=false, $where=false){
		$_GET['model_multi'] = true;
		return $this->where($table,$where,true);
	}
	
	
	function where($table=false,$where=false,$count=false,$order=false){
		if($table){
			$limit = $this->config->item('limit_page');
			if(!$this->input->get('nooffset')){
				$offset = $this->input->get('offset');
			}else{
				$offset = false;
			}
			$offset = ($offset > 0) ? $offset : 0;
			if(is_array($where)){
				foreach($where as $key => $row){
					if(preg_match('/\%/',$row)){
						$this->db->like($key,preg_replace('/%/','',$row));
					}else{
						$this->db->where($key,$row);
					}
				}
			}
			if(is_array($order)){
				foreach($order as $key => $row){
					$this->db->order_by($key,$row);
				}
			}
			if($count){
				$this->db->from($table);
				return $this->db->count_all_results();
			}else{
				$query = $this->db->get($table,$limit,$offset);
				if($query){
					if($query->num_rows() > 0){
						if($this->input->get('model_multi')){
							return $query->result();
						}else{
							return $query->row();
						}
					}
				}
			}
		}
		return false;
		
	}
	
	function create($table=false,$data=false){
		if($table && $data){
			$this->db->insert($table,$data);
			return $this->db->insert_id();
		}
		return false;
	}
	
	function update($table=false,$where=false,$update=false){
		if($table && $where && $update){
			if(is_array($where)){
				foreach($where as $key => $row){
					$this->db->where($key,$row);
				}
			}
			$this->db->update($table,$update);
			return true;
		}
		return false;
	}
	
	function delete($table=false,$where=false){
		if($table && $where){
			if(is_array($where)){
				foreach($where as $key => $row){
					$this->db->where($key,$row);
				}
			}
			$this->db->delete($table);
			return true;
		}
		return false;
	}
}
