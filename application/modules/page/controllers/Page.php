<?php

Class Page extends MX_Controller{
	
	function index($url=false){
		$page=false;
		$id = $this->input->get('id');
		if($id){
			$page = db_read('page',array('id' => $id));
		}else{
			$menu = db_read('menu_item',array('link' => $url));
			if($menu){
				$page = db_read('page',array('id' => $menu->post_id));
			}
		}
		if(!$page){
			show_404();exit;
		}
		
		$this->load->view(tpldir('page/'.$page->template));
	}
}
