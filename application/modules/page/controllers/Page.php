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
				if($url){
					$page = db_read('page',array('url' => $url));
				}else{
					$page = db_read('page',array('main' => 1));
				}
				
			}
			if(!$page){
				show_404();exit;
			}
			$view['page'] = $page;
			$view['lang'] = ($lang) ? $lang : '';
			$this->load->view(tpldir('page/'.$page->template),$view);
		}
	}
	
	function search($key=false){
		$this->load->model('Search_model');
		$this->load->model('Encryption_model');
		if($this->input->get('key')){
			$key = $this->Encryption_model->encrypt($this->input->get('key'));
			redirect(base_url('page/search/'.$key));
		}
		
		$search = $this->Encryption_model->decrypt($key);
		$view['search'] = $this->Search_model->reads($search);
		$view['search_count'] = $this->Search_model->reads($search,true);
		$this->load->view(tpldir('page/search'),$view);
	}
}
