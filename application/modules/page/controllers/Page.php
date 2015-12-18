<?php

Class Page extends MX_Controller{
	function lang(){
		$lang = $this->input->get('lang');
		if($lang == 'en'){
			$this->session->set_userdata('lang',$lang);
		}else{
			$this->session->set_userdata('lang','');
		}
		session_write_close();
		redirect($this->agent->referrer());
	}
	
	function index($url=false){
		$page=false;
		$this->load->module('microsite');
		if(!$this->microsite->index($url)){
			$lang = $this->session->userdata('lang');
			session_write_close();
			$id = $this->input->get('id');
			if($id){
				$page = db_read('page',array('id' => $id));
			}else{
				$page = db_read('page',array('url' => $url));
			}
			if(!$page){
				show_404();exit;
			}
			$view['page'] = $page;
			$view['lang'] = ($lang) ? $lang : '';
			$this->load->view(tpldir('page/'.$page->template),$view);
		}
	}
}
