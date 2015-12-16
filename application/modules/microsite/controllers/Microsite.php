<?php

Class Microsite extends MX_Controller{

	function index(){
		$this->load->view(tpldir('page/microsite'));
	}
}
