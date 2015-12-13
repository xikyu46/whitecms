<?php

Class Dashboard extends ADMIN_Controller{
	function index(){
		$view['newsticker'] = db_reads('mod_newsticker');
		$this->load->view(tpldir('admin/dashboard_view'),$view);
	}
}
