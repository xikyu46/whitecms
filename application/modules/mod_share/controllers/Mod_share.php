<?php

Class Mod_share extends MX_Controller{
	function twitter(){
		$share = db_read('mod_share',array('status' => 1,'name' => 'twitter'));
		if($share){
			$view['share'] = $share;
			$details=false;
			$details['tweettext']=false;
			$details['username']=false;
			$details['hashtag']=false;
			$sharedetails = ($share) ? db_reads('mod_share_detail',array('relid' => $share->id)) : false;
			if($sharedetails){
				foreach($sharedetails as $detailRow){
					if($detailRow->name == 'tweettext'){
						$details['tweettext'] = $detailRow->value;
					}elseif($detailRow->name == 'username'){
						$details['username'] = $detailRow->value;
					}elseif($detailRow->name == 'hashtag'){
						$details['hashtag'] = $detailRow->value;
					}
					
				}
			}
			$view['details'] = $details;
			$this->load->view(tpldir('modules/mod_share/twitter_view'),$view);
		}
	}
	
	function facebook(){
		$share = db_read('mod_share',array('status' => 1,'name' => 'facebook'));
		if($share){
			$view['share'] = $share;
			$view['sharedetail'] = ($share) ? db_reads('mod_share_detail',array('relid' => $share->id)) : false;
			$this->load->view(tpldir('modules/mod_share/facebook_view'),$view);
		}
	}
	
	function googleplus(){
		$share = db_read('mod_share',array('status' => 1,'name' => 'googleplus'));
		if($share){
			$view['share'] = $share;
			$view['sharedetail'] = ($share) ? db_reads('mod_share_detail',array('relid' => $share->id)) : false;
			$this->load->view(tpldir('modules/mod_share/googleplus_view'),$view);
		}
	}
	
}
