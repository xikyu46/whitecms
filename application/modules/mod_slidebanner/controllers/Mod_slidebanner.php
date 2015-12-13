<?php

Class Mod_slidebanner extends MX_Controller{
	function outclient(){
		$view['banner'] = db_reads('mod_slidebanner',array('status' => 1));
		$this->load->view(tpldir('modules/mod_slidebanner/index_view'),$view);
	}
}
