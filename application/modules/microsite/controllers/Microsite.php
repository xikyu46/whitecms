<?php

Class Microsite extends MX_Controller{

	function index(){
// 		$microsite = db_reads('mod_microsite');
		
		$this->load->view(tpldir('page/microsite'));
	}
}
