<?php 
Class Mod_menu extends MX_Controller{
	
	public function get($id=false){
		$result = jsonSrc();
		$parent_id = ($id) ? $id : false;
		$this->load->model('Menu_model');
		$tree = $this->Menu_model->reads();
		$result['resultCode'] = 1000;
		$result['resultMsg'] = "OK";
		$result['resultData'] = ($tree) ? $this->formatTree($tree,$parent_id) : false;
		return $result;
	}
	
	public function put($id=false){
		$result = jsonSrc();
		if($id){
			$updateMenu['title'] = $this->input->post('title');
			$updateMenu['title_en'] = $this->input->post('title_en');
			$updateMenu['post_id'] = $this->input->post('post_id');
			$updateMenu['link'] = $this->input->post('link');
			$updateMenu['parent_id'] = $this->input->post('parent_id');
			$updateMenu['position'] = $this->input->post('position');
			$updateMenu['hide'] = $this->input->post('hide');
			db_update('menu_item',array('id' => $id),$updateMenu);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Success !!";
		}
		return $result;
	}
	
	public function post(){
		$result = jsonSrc();
			$createMenu['title'] = $this->input->post('title');
			$createMenu['title_en'] = $this->input->post('title_en');
			$createMenu['post_id'] = $this->input->post('post_id');
			$createMenu['link'] = $this->input->post('link');
			$createMenu['parent_id'] = $this->input->post('parent_id');
			$createMenu['position'] = $this->input->post('position');
			$createMenu['hide'] = $this->input->post('hide');
			$menu_item_id = db_create('menu_item',$createMenu);
			
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Success !!";
			$result['resultData']['id'] = $menu_item_id;
		return $result;
	}
	
	public function delete($id=false){
		$result = jsonSrc();
		if($id){
			$menu_item_id = db_delete('menu_item',array('id' => $id));
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Success !!";
		}
		return $result;
	}
    
	function outadmin(){
		$menu = $this->get();
		if($menu['resultCode'] == 1000){
			$view['menu'] = $menu['resultData'];
			$this->load->view(tpldir('modules/mod_menu/admin_view'),$view);
		}
	}
    
	function outclient(){
		$this->load->model('Page_model');
		$menu = $this->get();
		$pageResult = $this->Page_model->get_page_list();
		$pages=false;
		if($pageResult){
			foreach($pageResult as  $pageRow){
				$pages[$pageRow->id] = $pageRow->url;
			}
		}
		if($menu['resultCode'] == 1000){
			$view['menu'] = $menu['resultData'];
			$view['pages'] = $pages;
			$this->load->view(tpldir('modules/mod_menu/index_view'),$view);
		}
	}
	
	//private function
	
	private function formatTree($tree=array(), $parent=0){
		$tree2 = array();
		if($tree){
			foreach($tree as $i => $item){
				if($item->parent_id == $parent){
					$tree2[$item->id] = $item;
					$tree2[$item->id]->submenu = $this->formatTree($tree, $item->id);
				}
			}
		}
		return $tree2;
	}
}