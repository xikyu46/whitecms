<?php

Class Mod_banner extends MX_Controller{
	function outclient(){
		$view['banner'] = db_reads('mod_banner',array('status' => 1));
		$this->load->view(tpldir('modules/mod_banner/index_view'),$view);
	}
}
