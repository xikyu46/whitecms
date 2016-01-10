<?php 
Class Mod_news extends MX_Controller{
		
	public function get($id=false){
		$result = jsonSrc();
		$order['date'] = 'desc';
		if($id){
			$news = db_read('page',array('id' => $id,'type' => 'news'),$order);
		}else{
			$news = db_read('page',array('type' => 'news'),$order);
		}
		if($news){
			$result['resultCode'] = 1000;
			$result['resultData']['news'] = $news;
		}
		return $result;
	}
	
	public function gets(){
		$result = jsonSrc();
			$this->load->model('Page_model');
			$pagesResult = $this->Page_model->get_page_list('news');
			$page=false;
			if($pagesResult){
				foreach($pagesResult as $pageRow){
					$page[] = $pageRow;
				}
			}
			$result['resultCode'] = 1000;
			$result['resultData']['page'] = $page;
		return $result;
	}
	
	public function put($id=false){
		$result = jsonSrc();
		if($id){
			$updatePage['author'] = false;
			$updatePage['update'] = time();
			$updatePage['url'] = $this->input->post('url');
			$updatePage['title'] = $this->input->post('title');
			$updatePage['title_en'] = $this->input->post('title_en');
			$updatePage['excerpt'] = $this->input->post('excerpt');
			$updatePage['excerpt_en'] = $this->input->post('excerpt_en');
			$updatePage['content'] = $this->input->post('content');
			$updatePage['content_en'] = $this->input->post('content_en');
			$updatePage['meta_key'] = $this->input->post('meta_key');
			$updatePage['meta_key_en'] = $this->input->post('meta_key_en');
			$updatePage['meta_desc'] = $this->input->post('meta_desc');
			$updatePage['meta_desc_en'] = $this->input->post('meta_desc_en');
			$updatePage['template'] = $this->input->post('template');
			$updatePage['image'] = $this->input->post('image');
			$updatePage['image2'] = $this->input->post('image2');
			$updatePage['status'] = $this->input->post('status');
			$updatePage['tag'] = $this->input->post('tag');
			if($this->input->post('pengumuman')){
				$updatePage['catid'] = 9; 
			}else{
				$updatePage['catid'] = 0; 
			}
			
			$updatePage['type'] = 'news'; 
			db_update('page',array('id' => $id),$updatePage);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Success !!";
		}
		return $result;
	}
	
	public function post(){
		$sess_admin_user = $this->session->userdata('admin_user');
		session_write_close();
		$result = jsonSrc();
			$createPage['catid'] = $this->input->post('catid');
			$createPage['author'] = $sess_admin_user;
			$createPage['date'] = time();
			$createPage['update'] = time();
			$createPage['title'] = $this->input->post('title');
			if($this->input->post('url')){
				$createPage['url'] = $this->input->post('url');
			}else{
				$createPage['url'] = preg_replace('[\ ]','-',preg_replace('[^a-z0-9\ ]','',strtolower($this->input->post('title'))));
			}
			$createPage['title_en'] = $this->input->post('title_en');
			$createPage['excerpt'] = $this->input->post('excerpt');
			$createPage['excerpt_en'] = $this->input->post('excerpt_en');
			$createPage['content'] = $this->input->post('content');
			$createPage['content_en'] = $this->input->post('content_en');
			$createPage['meta_key'] = $this->input->post('meta_key');
			$createPage['meta_key_en'] = $this->input->post('meta_key_en');
			$createPage['meta_desc'] = $this->input->post('meta_desc');
			$createPage['meta_desc_en'] = $this->input->post('meta_desc_en');
			$createPage['template'] = $this->input->post('template');
			$createPage['image'] = $this->input->post('image');
			$createPage['image2'] = $this->input->post('image2');
			$createPage['status'] = $this->input->post('status');
			$createPage['tag'] = $this->input->post('tag');
			if($this->input->post('pengumuman')){
				$createPage['catid'] = 9; 
			}
			$createPage['type'] = 'news';
			$page_id = db_create('page',$createPage);
			
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Success !!";
			$result['resultData']['id'] = $page_id;
		return $result;
	}
	
	public function delete($id=false){
		$result = jsonSrc();
		if($id){
			$menu_item_id = db_delete('page',array('id' => $id));
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Success !!";
		}
		return $result;
	}
	
	function outclient(){
		$order['date'] = 'desc';
		$view['news'] = db_reads('page',array('type' => 'news','status' => 1),$order);
		$this->load->view(tpldir('modules/mod_news/index_view'),$view);
	}
	
	function related($id=false){
		$news = db_read('page',array('id' => $id));
		if($news){
			$view['news'] = db_reads('page',array('type' => 'news','status' => 1,'tag' => $news->tag, 'id !=' => $news->id));
			$this->load->view(tpldir('modules/mod_news/related_view'),$view);
		}
	}
	
	function other($id=false){
		$news = db_read('page',array('id' => $id));
		if($news){
			$view['news'] = db_reads('page',array('type' => 'news','status' => 1,'tag !=' => $news->tag, 'id !=' => $news->id));
			$this->load->view(tpldir('modules/mod_news/other_view'),$view);
		}
	}
	
	function announce($id=false){
		$order['date'] = 'desc';
		$_GET['nopage'] = true;
		$view['news'] = db_reads('page',array('type' => 'news','status' => 1,'catid' => 9),$order);
		$_GET['nopage'] = false;
		$this->load->view(tpldir('modules/mod_news/index_view'),$view);
	}
}