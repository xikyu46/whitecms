<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//CREATE
function db_create($table=false,$data=false){
	$CI =& get_instance();
	return $CI->Crud_model->create($table,$data);
}

//READ
function db_read($table=false,$where=false){
	$CI =& get_instance();
	return $CI->Crud_model->read($table,$where);
}

//READS
function db_reads($table=false,$where=false){
	$CI =& get_instance();
	return $CI->Crud_model->reads($table,$where);
}

//UPDATE
function db_update($table=false,$where=false,$update=false){
	$CI =& get_instance();
	return $CI->Crud_model->update($table,$where,$update);
}

//DELETE
function db_delete($table=false,$where=false){
	$CI =& get_instance();
	return $CI->Crud_model->delete($table,$where);
}


