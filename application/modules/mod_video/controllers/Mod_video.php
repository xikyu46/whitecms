<?php

Class Mod_video extends MX_Controller{
	function outclient(){
		$view['video'] = db_reads('mod_video',array('status' => 1));
		$this->load->view(tpldir('modules/mod_video/index_view'),$view);
	}
	
	function related($id=false){
		$view['video'] = db_reads('mod_video',array('status' => 1,'id !=' => $id));
		$this->load->view(tpldir('modules/mod_video/related_view'),$view);
	}
}
