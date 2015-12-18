<?php

Class Mod_sosmed extends MX_Controller{
	function outclient(){
		$view['sosmed'] = db_reads('mod_sosmed',array('status' => 1));
		$this->load->view(tpldir('modules/mod_sosmed/index_view'),$view);
	}
}
