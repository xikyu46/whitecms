<?php

Class Event extends ADMIN_Controller{
	function __construct(){
		parent::__construct();
		$this->load->module('mod_event');
		$this->load->module('mod_template');
	}
	
	function index(){
		$view['event'] = db_reads('page',array('type' => 'event'));
		$view['count_event'] = count_db_reads('page',array('type' => 'event'));
		$this->load->view(tpldir('admin/event/index_view'),$view);
	}
	
	function edit($id=false){
		if(empty($_POST)){
			$resultPages = db_reads('page',array('type' => 'event'));
			$resultPage = db_read('page',array('id' => $id, 'type' => 'event'));
			if(!$resultPages){
				redirect(base_url('admin/event/add'));
			}
			$resultTemplate = $this->mod_template->get();
			$view['categories'] = db_reads('category',array('type' => 'event'));
			$view['templates'] = $resultTemplate['resultData'];
			$view['blogs'] = $resultPages;
			$view['blog'] = ($resultPage) ? $resultPage : $resultPages[0];
			
			
			$this->load->view(tpldir('admin/event/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			
			$result = $this->mod_event->put($id);
			$result['resultData']['openUrl'] = $this->agent->referrer();
			echo json_encode($result);
		}
	}
	
	function add($category=false){
		if(empty($_POST)){
			$resultTemplate = $this->mod_template->get();
			$view['templates'] = $resultTemplate['resultData'];
			$this->load->view(tpldir('admin/event/add_view'),$view);
		}else{
			$result = jsonSrc();
			$result = $this->mod_event->post();
			$result['resultData']['openUrl'] = base_url('admin/event');
			echo json_encode($result);
		}
	}
	
	function delete($id=false){
		$result = jsonSrc();
		if($id){
			$result = $this->mod_event->delete($id);
			$result['resultData']['openUrl'] = $this->agent->referrer();
		}
		echo json_encode($result);
	}
}
