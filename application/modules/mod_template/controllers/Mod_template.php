<?php

Class Mod_template extends MX_Controller{
	function get(){
		$result = jsonSrc();
		$theme = $this->config->item('theme');
		$templates = db_reads('templates',array('theme' => $theme));
		$result['resultData']=false;
		if($templates){
			foreach($templates as $templateRow){
				$result['resultData'][] = $templateRow->name;
			}
		}
		$result['resultCode'] = 1000;
		$result['resultMsg'] = "OK";
		return $result;
	}
	
	function scan(){
		$templates = scandir(docroot('templates/'.$this->config->item('theme').'/page'));
		$theme = $this->config->item('theme');
		if(is_array($templates)){
			db_delete('templates',array('theme'=>$theme));
			foreach($templates as $templateRow){
				if(!preg_match('#^[\.]|^[_]#',$templateRow)){
					$insert=false;
					$insert['theme'] = $theme;
					$insert['name'] = preg_replace('#\.php$#','',$templateRow);
					db_create('templates',$insert);
				}
				
			}
		}
	}
}