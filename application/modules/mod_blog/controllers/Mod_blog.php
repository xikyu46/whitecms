<?php 
Class Mod_blog extends MX_Controller{
		
	public function get($id=false){
		$result = jsonSrc();
		if($id){
			$blog = db_read('page',array('id' => $id,'type' => 'blog'));
		}else{
			$blog = db_read('page',array('type' => 'blog'));
		}
		if($blog){
			$result['resultCode'] = 1000;
			$result['resultData']['blog'] = $blog;
		}
		return $result;
	}
	
	public function gets(){
		$result = jsonSrc();
			$this->load->model('Page_model');
			$pagesResult = $this->Page_model->get_page_list('blog');
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
			$updatePage['date'] = time();
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
			$updatePage['type'] = 'blog'; 
			db_update('page',array('id' => $id),$updatePage);
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Success !!";
		}
		return $result;
	}
	
	public function post(){
		$result = jsonSrc();
			$createPage['catid'] = $this->input->post('catid');
			$createPage['author'] = false;
			$createPage['date'] = time();
			$createPage['update'] = time();
			$createPage['title'] = $this->input->post('title');
			$createPage['url'] = $this->input->post('url');
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
			$createPage['type'] = 'blog';
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
}