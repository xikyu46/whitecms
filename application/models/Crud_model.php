<?php

Class Crud_model extends CI_Model{
	function read($table=false,$where=false){
		$_GET['model_multi'] = false;
		return $this->where($table,$where);
	}
	
	function reads($table=false,$where=false){
		$_GET['model_multi'] = true;
		return $this->where($table,$where);
	}
	
	function where($table=false,$where=false){
		if($table){
			if(is_array($where)){
				foreach($where as $key => $row){
					$this->db->where($key,$row);
				}
			}
			$query = $this->db->get($table);
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
