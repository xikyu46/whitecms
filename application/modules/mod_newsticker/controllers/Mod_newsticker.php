<?php

Class Mod_newsticker extends MX_Controller{
	function outclient(){
		$view['newsticker'] = db_reads('mod_newsticker',array('status' => 1));
		$this->load->view(tpldir('modules/mod_newsticker/index_view'),$view);
	}
}
