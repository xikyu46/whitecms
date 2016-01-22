<?php

Class Mod_footer extends MX_Controller{
	function middle(){
		$view['footer'] = db_reads('mod_footer',array('type' => 'middle'));
		$this->load->view(tpldir('modules/mod_footer/index_view'),$view);
	}
	
	function right(){
		$view['footer'] = db_reads('mod_footer',array('type' => 'right'));
		$this->load->view(tpldir('modules/mod_footer/index_view'),$view);
	}
	
}
