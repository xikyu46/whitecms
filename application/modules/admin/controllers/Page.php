<?php

Class Page extends ADMIN_Controller{
	function __construct(){
		parent::__construct();
		$this->load->module('mod_page');
		$this->load->module('mod_template');
	}
	
	function index(){
		$where = array();
		$where['type'] = 'page';
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
		$view['pages'] = db_reads('page',$where,$order);
		$view['count_pages'] = count_db_reads('page',$where);
		$this->load->view(tpldir('admin/page/index_view'),$view);
	}
	
	function edit($id=false){
		if(empty($_POST)){
			$resultPages = db_reads('page',array('type' => 'page'));
			$resultPage = $this->mod_page->get($id);
			
			if(!$resultPages){
				redirect(base_url('admin/page/add'));
			}
			
			if($resultPage['resultCode'] != 1000){
				redirect(base_url('admin/page/add'));
			}
			$resultTemplate = $this->mod_template->get();
			
			$view['templates'] = $resultTemplate['resultData'];
			$view['pages'] = $resultPages;
			$view['page'] = ($resultPage) ? $resultPage['resultData']['page'] : $resultPages[0];
			$this->load->view(tpldir('admin/page/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			
			$result = $this->mod_page->put($id);
			$result['resultData']['openUrl'] = $this->agent->referrer();
			echo json_encode($result);
		}
	}
	
	function add(){
		if(empty($_POST)){
			$resultTemplate = $this->mod_template->get();
			$view['templates'] = $resultTemplate['resultData'];
			$view['pages'] = db_reads('page');
			$this->load->view(tpldir('admin/page/add_view'),$view);
		}else{
			$result = jsonSrc();
			$result = $this->mod_page->post();
			$result['resultData']['openUrl'] = $this->agent->referrer();
			echo json_encode($result);
		}
	}
	
	function delete($id=false){
		$result = jsonSrc();
		if($id){
			$result = $this->mod_page->delete($id);
			$result['resultData']['openUrl'] = $this->agent->referrer();
		}
		echo json_encode($result);
	}
}
