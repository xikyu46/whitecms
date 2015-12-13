<?php

Class Blog extends ADMIN_Controller{
	function __construct(){
		parent::__construct();
		$this->load->module('mod_blog');
		$this->load->module('mod_template');
	}
	
	function edit($id=false){
		if(empty($_POST)){
			$resultPages = db_reads('page',array('type' => 'blog'));
			$resultPage = $this->mod_blog->get($id);
			if(!$resultPages){
				redirect(base_url('admin/blog/add'));
			}
			$resultTemplate = $this->mod_template->get();
			$view['categories'] = db_reads('category',array('type' => 'blog'));
			$view['templates'] = $resultTemplate['resultData'];
			$view['blogs'] = $resultPages;
			$view['blog'] = ($resultPage) ? $resultPage['resultData']['blog'] : $resultPages[0];
			
			
			$this->load->view(tpldir('admin/blog/index_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			
			$result = $this->mod_blog->put($id);
			$result['resultData']['openUrl'] = $this->agent->referrer();
			echo json_encode($result);
		}
	}
	
	function add($category=false){
		if(empty($_POST)){
			$category = db_read('category',array('id' => $category,'type' => 'blog'));
			if(!$category){
				redirect('admin/category/add');
			}
			$resultTemplate = $this->mod_template->get();
			$view['category'] = $category;
			$view['categories'] = db_reads('category',array('type' => 'blog'));
			$view['templates'] = $resultTemplate['resultData'];
			$view['blogs'] = db_reads('page');
			$this->load->view(tpldir('admin/blog/add_view'),$view);
		}else{
			$result = jsonSrc();
			$result = $this->mod_blog->post();
			$result['resultData']['openUrl'] = $this->agent->referrer();
			echo json_encode($result);
		}
	}
	
	function delete($id=false){
		$result = jsonSrc();
		if($id){
			$result = $this->mod_blog->delete($id);
			$result['resultData']['openUrl'] = $this->agent->referrer();
		}
		echo json_encode($result);
	}
}
