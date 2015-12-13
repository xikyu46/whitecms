<?php

Class Mod_banner extends MX_Controller{
	function outclient(){
		$this->load->view(tpldir('modules/mod_banner/index_view'));
	}
}
