<?php

Class Extension extends ADMIN_Controller{
	function index(){
		$this->load->view(tpldir('admin/extension/index_view'));
	}
}
