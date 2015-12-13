<?php

Class Banner extends ADMIN_Controller{
	function index(){
		$view['banner'] = db_reads('mod_banner',array('type' => 'front'));
		$view['side'] = db_reads('mod_banner',array('type' => 'side'));
		$this->load->view(tpldir('admin/extension/banner/index_view'),$view);
	}
	
	function edit($id=false){
		if(empty($_POST)){
			$view['banner'] = db_read('mod_banner',array('id' => $id));
			$this->load->view(tpldir('admin/extension/banner/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			$updateBanner['url'] = $this->input->post('url');
			$updateBanner['status'] = $this->input->post('status');
			db_update('mod_banner',array('id' => $id),$updateBanner);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Banner Updated";
			$result['resultData']['openUrl'] = base_url('admin/banner');
			echo json_encode($result);
		}
	}
}
