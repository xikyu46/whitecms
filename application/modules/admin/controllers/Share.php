<?php
Class Share extends ADMIN_Controller{
	function index(){
		$view['share'] = db_reads('mod_share');
		$this->load->view(tpldir('admin/extension/share/index_view'),$view);
	}
	
	
	function edit($id=false){
		if(empty($_POST)){
			$shareRow = db_read('mod_share',array('id' => $id));
			if($shareRow->name == 'twitter'){
				$shareDetails = db_reads('mod_share_detail',array('relid' => $id));
				$view['share_details'] = $shareDetails;
				$view['share'] = $shareRow;
				$this->load->view(tpldir('admin/extension/share/edit/twitter_view'),$view);
			}elseif($shareRow->name == 'facebook'){
				$shareDetails = db_reads('mod_share_detail',array('relid' => $id));
				$view['share_details'] = $shareDetails;
				$view['share'] = $shareRow;
				$this->load->view(tpldir('admin/extension/share/edit/facebook_view'),$view);
			}
		}else{
			$result = jsonSrc();
			$relid = $this->input->post('relid');
			$sosmed = $this->input->post('sosmed');
			if($sosmed == 'twitter'){
				$updateContent = false;
				$updateContent['name'] = 'tweettext';
				$updateContent['value'] = $this->input->post('tweettext');
				db_update('mod_share_detail',array('relid' => $relid,'name' => 'tweettext'),$updateContent);
				
				$updateContent = false;
				$updateContent['name'] = 'username';
				$updateContent['value'] = $this->input->post('username');
				db_update('mod_share_detail',array('relid' => $relid,'name' => 'username'),$updateContent);
				
				$updateContent = false;
				$updateContent['name'] = 'hashtag';
				$updateContent['value'] = $this->input->post('hashtag');
				db_update('mod_share_detail',array('relid' => $relid,'name' => 'hashtag'),$updateContent);
				
				$updateContent = false;
				$updateContent['status'] = $this->input->post('status');
				db_update('mod_share',array('id' => $relid),$updateContent);
			}elseif($sosmed == 'facebook'){
				$updateContent = false;
				$updateContent['status'] = $this->input->post('status');
				db_update('mod_share',array('id' => $relid),$updateContent);
			}
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Content Updated";
			$result['resultData']['openUrl'] = base_url('admin/share');
			echo json_encode($result);
		}
	}
}
