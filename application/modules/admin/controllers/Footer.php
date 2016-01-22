<?php

Class Footer extends ADMIN_Controller{
	function index(){
		$view['middle'] = db_reads('mod_footer',array('type' => 'middle'));
		$view['right'] = db_reads('mod_footer',array('type' => 'right'));
		$this->load->view(tpldir('admin/extension/footer/index_view'),$view);
	}
	
	function edit($id=false){
		if(empty($_POST)){
			$view['footer'] = db_read('mod_footer',array('id' => $id));
			$this->load->view(tpldir('admin/extension/footer/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			$updateFooter['url'] = $this->input->post('url');
			$updateFooter['name'] = $this->input->post('name');
			db_update('mod_footer',array('id' => $id),$updateFooter);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Footer Updated";
			$result['resultData']['openUrl'] = base_url('admin/footer');
			echo json_encode($result);
		}
	}
	
	function add($type=false){
		if(empty($_POST)){
			$view['type'] = $type;
			$this->load->view(tpldir('admin/extension/footer/add_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			$createFooter['url'] = $this->input->post('url');
			$createFooter['name'] = $this->input->post('name');
			$createFooter['type'] = $this->input->post('type');
			db_create('mod_footer',$createFooter);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Footer Created";
			$result['resultData']['openUrl'] = base_url('admin/footer');
			echo json_encode($result);
		}
	}
	
	function delete($id=false){
		$result = jsonSrc();
		if($id){
			$menu_item_id = db_delete('mod_footer',array('id' => $id));
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Success !!";
			$result['resultData']['openUrl'] = base_url('admin/footer');
		}
		echo json_encode($result);
	}
}
