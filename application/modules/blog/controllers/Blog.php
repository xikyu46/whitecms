<?php

Class Blog extends MX_Controller{
	
	function index($url=false){
		$page=false;
		$id = $this->input->get('id');
		if($id){
			$page = db_read('page',array('id' => $id,'type' => 'blog'));
		}else{
			$page = db_read('page',array('url' => $url,'type' => 'blog'));
		}
		if(!$page){
			show_404();exit;
		}
		$view['page'] = $page;
		$this->load->view(tpldir('page/'.$page->template),$view);
	}
	
	function cat($type=false){
		if($type){
			$order['date'] = 'desc';
			$blogs = db_reads('page',array('type' => $type, 'status' => 1),$order);
			$count_blogs = count_db_reads('page',array('type' => $type, 'status' => 1),$order);
			$view['blogs'] = $blogs;
			$view['count_blogs'] = $count_blogs;
			$this->load->view(tpldir('page/post-list'),$view);
		}
	}
	
	function video($id=false){
		if($id){
			$video = db_read('mod_video',array('status' => 1,'id' => $id));
			$view['video'] = $video;
			$this->load->view(tpldir('page/video'),$view);
		}else{
			$video = db_reads('mod_video',array('status' => 1));
			$count_video = count_db_reads('mod_video',array('status' => 1));
			$view['video'] = $video;
			$view['count_video'] = $count_video;
			$this->load->view(tpldir('page/video-list'),$view);
		}
	}
}
