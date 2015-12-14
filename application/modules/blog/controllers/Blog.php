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
			$blogs = db_reads('page',array('type' => $type, 'status' => 1));
			$view['blogs'] = $blogs;
			$this->load->view(tpldir('page/post-list'),$view);
		}
	}
	
	function video($id=false){
		if($id){
			$video = db_read('mod_video',array('status' => 1));
			$view['video'] = $video;
			$this->load->view(tpldir('page/video'),$view);
		}
	}
}
