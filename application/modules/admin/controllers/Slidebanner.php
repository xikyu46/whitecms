<?php

Class Slidebanner extends ADMIN_Controller{
	function index(){
		$this->load->view(tpldir('admin/extension/slidebanner/index_view'));
	}
}
