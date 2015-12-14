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

function view_mod($modulename=false,$function=false,$param=false){
	$CI =& get_instance();
	$module = 'mod_'.$modulename;
	$CI->load->module($module);
	$CI->$module->$function($param);
}

function jsonSrc(){
	$result['resultCode'] = 2400;
	$result['resultMsg'] = 'Internal Error';
	return $result;
}

function getlang(){
	$CI =& get_instance();
	$lang = ($CI->session->userdata('lang')) ? $CI->session->userdata('lang') : '';
	return $lang;
}

function content_trim($message=false,$count=false){
	$message = strip_tags($message);
	if(strlen($message) > $count){
		$message = substr( $message, 0 ,$count );
	}
	
	$messageArr = explode('.',$message);
	if(count($messageArr) > 1){
		
		$message =false;
		for($i = 0;$i< count($messageArr)-1 ; $i++){
			$message .= $messageArr[$i].".";
		}
		return extraspace($message,$count);
	}else{
		
		$messageArr = explode(' ',$message);
		$message =false;
		for($i = 0;$i< count($messageArr)-1 ; $i++){
			$message .= $messageArr[$i]." ";
		}
		return extraspace($message,$count);
	}
}

function extraspace($message=false,$count=false){
	if($message && $count){
		$message = strip_tags($message);
		if(strlen($message) > $count){
			$message = substr( $message, 0 ,$count );
			
			return $message;
		}else{
			$rest = $count - strlen($message);
			for($i=0 ; $i< $rest/2; $i++){
				$message .= '&nbsp ';
			}
			return $message;
		}
	}
	return $message;
} 



