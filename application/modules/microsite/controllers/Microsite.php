<?php

Class Microsite extends MX_Controller{

	function index($url=false){
		$microsite = db_read('mod_microsite',array('url' => $url));
		if($microsite){
			$view['microsite'] = $microsite;
			$view['template'] = db_read('mod_microsite_template',array('mid',$microsite->id));
			$view['contact'] = db_read('mod_microsite_contact',array('mid',$microsite->id));
			$view['content'] = db_reads('mod_microsite_content',array('mid',$microsite->id));
			$this->load->view(tpldir('page/microsite'),$view);
			return true;
		}
		return false;
	}
}
