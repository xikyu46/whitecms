<?php

Class Dashboard extends MX_Controller{
	function index(){
		redirect('admin/page/edit');
// 		$this->load->view(tpldir('admin/dashboard_view'));
	}
}
