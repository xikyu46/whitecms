<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function docroot($location=false){
	$location = preg_replace('#^[/]+#','',$location);
	$CI =& get_instance();
	return $CI->config->item('document_root').$location;
}

function tpldir($location=false){
	$CI =& get_instance();
	$theme = $CI->config->item('theme');
	$location = preg_replace('#^[/]+#','',$location);
	return '../../templates/'.$theme.'/'.$location;
}

function tplurl($location=false){
	$CI =& get_instance();
	$theme = $CI->config->item('theme');
	$location = preg_replace('#^[/]+#','',$location);
	return base_url('templates/'.$theme.'/'.$location);
}

function pageurl($location=false){
	$CI =& get_instance();
	$theme = $CI->config->item('theme');
	$location = preg_replace('#^[/]+#','',$location);
	return base_url('templates/'.$theme.'/page/'.$location);
}

function incurl($location=false){
	$CI =& get_instance();
	$theme = $CI->config->item('theme');
	$location = preg_replace('#^[/]+#','',$location);
	return base_url('templates/'.$theme.'/page/_includes/'.$location);
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




