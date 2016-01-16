<?php

Class Mod_sosmed extends MX_Controller{
	function outclient(){
		$view['sosmed'] = db_reads('mod_sosmed',array('status' => 1,'name !=' => 'custom'));
		$this->load->view(tpldir('modules/mod_sosmed/index_view'),$view);
	}
	
	function custom(){
		$sosmed = db_read('mod_sosmed',array('status' => 1,'name ' => 'custom'));
		if($sosmed){
			echo $sosmed->url;
		}
	}
}
