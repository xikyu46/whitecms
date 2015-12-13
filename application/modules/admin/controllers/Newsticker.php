<?php

Class Newsticker extends ADMIN_Controller{
	function edit($id=false){
		if(empty($_POST)){
			if($id){
				$newsticker = db_read('mod_newsticker',array('id'=> $id));
				if($newsticker){
					$view['newsticker'] = $newsticker;
					$this->load->view(tpldir('admin/newsticker/edit_view'),$view);
				}
			}
		}else{
			$result = jsonSrc();
			$update['text'] = $this->input->post('text');
			$update['url'] = $this->input->post('url');
			$update['status'] = $this->input->post('status');
			
			$id = $this->input->post('id');
			db_update('mod_newsticker',array('id' => $id),$update);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Newsticker Updated";
			$result['resultData']['openUrl'] = base_url('admin/dashboard');
			echo json_encode($result);
		}
	}
}
