<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function docroot($location=false){
	$location = preg_replace('#^[/]+#','',$location);
	$CI =& get_instance();
	return $CI->config->item('document_root').$location;
}

function tpldir($location=false){
	$location = preg_replace('#^[/]+#','',$location);
	return '../../templates/'.$location;
}

function tplurl($location=false){
	$location = preg_replace('#^[/]+#','',$location);
	return base_url('templates/'.$location);
}

function view_mod($modulename=false,$function=false){
	$CI =& get_instance();
	$module = 'mod_'.$modulename;
	$CI->load->module($module);
	$CI->$module->$function();
}

function jsonSrc(){
	$result['resultCode'] = 2400;
	$result['resultMsg'] = 'Internal Error';
	return $result;
}




