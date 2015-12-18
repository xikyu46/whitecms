<?php
Class Sosmed extends ADMIN_Controller{
	function index(){
		$view['sosmed'] = db_reads('mod_sosmed');
		$this->load->view(tpldir('admin/extension/sosmed/index_view'),$view);
	}
	
	
	function edit($id=false){
		if(empty($_POST)){
			$view['sosmed'] = db_read('mod_sosmed',array('id' => $id));
			$this->load->view(tpldir('admin/extension/sosmed/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			$updateContent['url'] = $this->input->post('url');
			$updateContent['status'] = $this->input->post('status');
			db_update('mod_sosmed',array('id' => $id),$updateContent);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Content Updated";
			$result['resultData']['openUrl'] = base_url('admin/sosmed');
			echo json_encode($result);
		}
	}
}
