<?php

Class Banner extends ADMIN_Controller{
	function index(){
		$this->load->view(tpldir('admin/extension/banner/index_view'));
	}
}
