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
	}
}
