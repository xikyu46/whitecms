<?php

Class Page extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->module('mod_page');
	}
	
	function edit($id=false){
		if(empty($_POST)){
			$resultPages = db_reads('page',array('type' => 'page'));
			$resultPage = $this->mod_page->get($id);
			if(!$resultPages){
				redirect(base_url('admin/page/add'));
			}
			$view['pages'] = $resultPages;
			$view['page'] = ($resultPage) ? $resultPage['resultData']['page'] : $resultPages[0];
			
			
			$this->load->view(tpldir('admin/page/index_view'),$view);
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
