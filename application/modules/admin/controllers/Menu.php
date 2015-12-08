<?php

Class Menu extends MX_Controller{
	function edit($id=false){
		if(empty($_POST)){
			$menu = db_read('menu_item',array('id' => $id));
			if(!$menu){
				$menu = db_read('menu_item');
			}
			$view['menu'] = $menu;
			$this->load->view(tpldir('admin/menu/index_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			$this->load->module('mod_menu');
			$result = $this->mod_menu->put($id);
			$result['resultData']['openUrl'] = $this->agent->referrer();
			echo json_encode($result);
		}
	}
	
	function add(){
		if(empty($_POST)){
			$this->load->view(tpldir('admin/menu/add_view'));
		}else{
			$result = jsonSrc();
			$this->load->module('mod_menu');
			$result = $this->mod_menu->post();
			$result['resultData']['openUrl'] = $this->agent->referrer();
			echo json_encode($result);
		}
	}
	
	function delete($id=false){
		if(empty($_POST)){
			$result = jsonSrc();
			$this->load->module('mod_menu');
			$result = $this->mod_menu->delete($id);
			$result['resultData']['openUrl'] = $this->agent->referrer();
			echo json_encode($result);
		}
	}
}
