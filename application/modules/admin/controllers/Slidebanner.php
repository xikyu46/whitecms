<?php

Class Slidebanner extends ADMIN_Controller{
	function index(){
		$view['slidebanner'] = db_reads('mod_slidebanner');
		$this->load->view(tpldir('admin/extension/slidebanner/index_view'),$view);
	}
	
	function edit($id=false){
		if(empty($_POST)){
			$view['slidebanner'] = db_read('mod_slidebanner',array('id' => $id));
			$this->load->view(tpldir('admin/extension/slidebanner/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			$updateBanner['url'] = $this->input->post('url');
			$updateBanner['imgurl'] = $this->input->post('imgurl');
			$updateBanner['status'] = $this->input->post('status');
			$updateBanner['text'] = $this->input->post('text');
			$updateBanner['date'] = strtotime($this->input->post('date'));
			$updateBanner['title'] = $this->input->post('title');
			db_update('mod_slidebanner',array('id' => $id),$updateBanner);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "SlideBanner Updated";
			$result['resultData']['openUrl'] = base_url('admin/slidebanner');
			echo json_encode($result);
		}
	}
}
