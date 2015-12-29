<?php
Class Video extends ADMIN_Controller{
	function index(){
		$view['video'] = db_reads('mod_video');
		$view['count_video'] = count_db_reads('mod_video');
		$this->load->view(tpldir('admin/extension/video/index_view'),$view);
	}
	
	function add(){
		if(empty($_POST)){
			$this->load->view(tpldir('admin/extension/video/add_view'));
		}else{
			$result = jsonSrc();
			$insertVid['url'] = $this->input->post('url');
			$insertVid['status'] = $this->input->post('status');
			$insertVid['text'] = $this->input->post('text');
			$insertVid['content'] = $this->input->post('content');
			$id = db_create('mod_video',$insertVid);
			if($id){
				$result['resultCode'] = 1000;
				$result['resultMsg'] = "Success !!";
				$result['resultData']['openUrl'] = base_url('admin/video');
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
			$updateBanner['content'] = $this->input->post('content');
			db_update('mod_video',array('id' => $id),$updateBanner);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Video Updated";
			$result['resultData']['openUrl'] = base_url('admin/video');
			echo json_encode($result);
		}
	}
	
	function delete($id=false){
		$result = jsonSrc();
		if($id){
			$menu_item_id = db_delete('mod_video',array('id' => $id));
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Success !!";
			$result['resultData']['openUrl'] = base_url('admin/video');
		}
		echo json_encode($result);
	}
}
