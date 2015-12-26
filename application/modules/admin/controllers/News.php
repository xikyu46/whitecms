<?php

Class News extends ADMIN_Controller{
	function __construct(){
		parent::__construct();
		$this->load->module('mod_news');
		$this->load->module('mod_template');
	}
	
	function index(){
		$where = array();
		$where['type'] = 'news';
		if($this->input->get('title')){
			$where['title'] = '%'.$this->input->get('title');
		}
		$order=false;
		if($this->input->get('filter')){
			if($this->input->get('filter') == 'oldest'){
				$order['date'] = 'asc';
			}elseif($this->input->get('filter') == 'latest'){
				$order['date'] = 'desc';
			}
		}
		$view['news'] = db_reads('page',$where,$order);
		$view['count_news'] = count_db_reads('page',$where);
		$this->load->view(tpldir('admin/news/index_view'),$view);
	}
	
	function edit($id=false){
		if(empty($_POST)){
			$resultPages = db_reads('page',array('type' => 'news'));
			$resultPage = db_read('page',array('id' => $id, 'type' => 'news'));
			if(!$resultPages){
				redirect(base_url('admin/news/add'));
			}
			$resultTemplate = $this->mod_template->get();
			$view['categories'] = db_reads('category',array('type' => 'news'));
			$view['templates'] = $resultTemplate['resultData'];
			$view['blogs'] = $resultPages;
			$view['blog'] = ($resultPage) ? $resultPage : $resultPages[0];
			
			
			$this->load->view(tpldir('admin/news/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			
			$result = $this->mod_news->put($id);
			$result['resultData']['openUrl'] = $this->agent->referrer();
			echo json_encode($result);
		}
	}
	
	function add($category=false){
		if(empty($_POST)){
			$resultTemplate = $this->mod_template->get();
			$view['templates'] = $resultTemplate['resultData'];
			$this->load->view(tpldir('admin/news/add_view'),$view);
		}else{
			$result = jsonSrc();
			$result = $this->mod_news->post();
			$result['resultData']['openUrl'] = $this->agent->referrer();
			echo json_encode($result);
		}
	}
	
	function delete($id=false){
		$result = jsonSrc();
		if($id){
			$result = $this->mod_news->delete($id);
			$result['resultData']['openUrl'] = $this->agent->referrer();
		}
		echo json_encode($result);
	}
}
