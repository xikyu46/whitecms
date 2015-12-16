<?php
Class Microsite extends ADMIN_Controller{
	function index(){
		$view['microsite'] = db_reads('mod_microsite');
		$this->load->view(tpldir('admin/extension/microsite/index_view'),$view);
	}
	
	function config(){
		
	}
	
	
	function edit($id=false){
		if(empty($_POST)){
			$theme = $this->config->item('theme');
			$view['microsite'] = db_read('mod_microsite',array('id' => $id));
			$view['templates'] = db_reads('templates',array('theme' => $theme));
			$this->load->view(tpldir('admin/extension/microsite/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			$updateContent['title'] = $this->input->post('title');
			$updateContent['menu'] = $this->input->post('menu');
			$updateContent['image'] = $this->input->post('image');
			$updateContent['status'] = $this->input->post('status');
			$updateContent['content'] = $this->input->post('content');
			db_update('mod_microsite',array('id' => $id),$updateContent);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Content Updated";
			$result['resultData']['openUrl'] = base_url('admin/microsite');
			echo json_encode($result);
		}
	}
}
