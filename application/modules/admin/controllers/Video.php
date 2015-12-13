<?php
Class Video extends ADMIN_Controller{
	function index(){
		$view['video'] = db_reads('mod_video');
		$this->load->view(tpldir('admin/extension/video/index_view'),$view);
	}
	
	function add(){
		if(empty($_POST)){
			$this->load->view(tpldir('admin/extension/video/add_view'));
		}else{
			$result = jsonSrc();
			$insertVid['date'] = time();
			$insertVid['name'] = $this->input->post('name');
			$insertVid['description'] = $this->input->post('description');
			$insertVid['link'] = $this->input->post('link');
			$id = db_create('mod_video',$insertVid);
			if($id){
				$result['resultCode'] = 1000;
				$result['resultMsg'] = "Success !!";
				$result['resultData']['openUrl'] = $this->agent->referrer();
			}
			echo json_encode($result);
		}
	}
	
	function edit($id=false){
		if(empty($_POST)){
			$view['video'] = db_read('mod_video',array('id' => $id));
			$this->load->view(tpldir('admin/extension/video/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			$updateBanner['url'] = $this->input->post('url');
			$updateBanner['status'] = $this->input->post('status');
			$updateBanner['text'] = $this->input->post('text');
			db_update('mod_video',array('id' => $id),$updateBanner);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Video Updated";
			$result['resultData']['openUrl'] = base_url('admin/video');
			echo json_encode($result);
		}
	}
}
