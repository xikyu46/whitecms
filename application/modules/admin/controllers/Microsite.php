<?php
Class Microsite extends ADMIN_Controller{
	function index(){
		$view['microsite'] = db_reads('mod_microsite');
		$this->load->view(tpldir('admin/extension/microsite/index_view'),$view);
	}
	
	function config(){
		
	}
	
	function add(){
		if(empty($_POST)){
			$this->load->view(tpldir('admin/extension/microsite/add_view'));
		}else{
			$result = jsonSrc();
			$insert['menu'] = $this->input->post('template_title');
			$insert['menu'] = $this->input->post('template_title');
			$insert['anchor'] = preg_replace('/[^a-zA-Z0-9]/','',$this->input->post('template_title'));
			$insert['status'] = $this->input->post('status');
			$mid = db_create('mod_microsite',$insert);
			if(!$mid){
				$result['resultMsg'] = "create section failed";
				echo json_encode($result);
			}
			
			$insertTemplate['mid'] = $mid;
			$insertTemplate['title'] = $this->input->post('template_title');
			$insertTemplate['logo'] = $this->input->post('template_logo');
			$insertTemplate['judul'] = $this->input->post('template_judul');
			$insertTemplate['slogan'] = $this->input->post('template_slogan');
			$insertTemplate['navbar'] = $this->input->post('template_navbar');
			$insertTemplate['header'] = $this->input->post('template_header');
			$insertTemplate['footer'] = $this->input->post('template_footer');
			db_create('mod_microsite_template',$insertTemplate);
			
			$insertContact['mid'] = $mid;
			$insertContact['facebook'] = $this->input->post('contact_facebook');
			$insertContact['twitter'] = $this->input->post('contact_twitter');
			$insertContact['instagram'] = $this->input->post('contact_instagram');
			$insertContact['googleplus'] = $this->input->post('contact_googleplus');
			$insertContact['contact'] = $this->input->post('contact_image');
			$insertContact['phone'] = $this->input->post('contact_phone');
			$insertContact['email'] = $this->input->post('contact_email');
			$insertContact['address'] = $this->input->post('contact_address');
			db_create('mod_microsite_contact',$insertContact);
			
			$insertContent['mid'] = $mid;
			$insertContent['menu'] = $this->input->post('template_title');
			$insertContent['anchor'] = preg_replace('/[^a-zA-Z0-9]/','',$this->input->post('template_title'));
			db_create('mod_microsite_content',$insertContent);
			
			
			$result['resultCode'] =  1000;
			$result['resultMsg'] =  "Section Added";
			$result['resultData']['openUrl'] =  base_url('admin/microsite/edit/'.$mid);
			
			echo json_encode($result);
		}
	}
	
	
	function edit($id=false){
		if(empty($_POST)){
			$view['microsite'] = db_read('mod_microsite',array('id' => $id));
			$view['template'] = db_read('mod_microsite_template',array('mid' => $id));
			$view['contact'] = db_read('mod_microsite_contact',array('mid' => $id));
			$view['content'] = db_reads('mod_microsite_content',array('mid' => $id));
			
			$this->load->view(tpldir('admin/extension/microsite/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$insert['menu'] = $this->input->post('template_title');
			$insert['title'] = $this->input->post('template_title');
			$insert['anchor'] = preg_replace('/[^a-zA-Z0-9]/','',$this->input->post('template_title'));
			$insert['status'] = $this->input->post('status');
			$mid = db_update('mod_microsite',array('id' => $id),$insert);
			if(!$mid){
				$result['resultMsg'] = "create section failed";
				echo json_encode($result);
			}
			
			$insertTemplate['mid'] = $mid;
			$insertTemplate['title'] = $this->input->post('template_title');
			$insertTemplate['logo'] = $this->input->post('template_logo');
			$insertTemplate['judul'] = $this->input->post('template_judul');
			$insertTemplate['slogan'] = $this->input->post('template_slogan');
			$insertTemplate['navbar'] = $this->input->post('template_navbar');
			$insertTemplate['header'] = $this->input->post('template_header');
			$insertTemplate['footer'] = $this->input->post('template_footer');
			db_update('mod_microsite_template',array('mid' => $id),$insertTemplate);
			
			$insertContact['mid'] = $mid;
			$insertContact['facebook'] = $this->input->post('contact_facebook');
			$insertContact['twitter'] = $this->input->post('contact_twitter');
			$insertContact['instagram'] = $this->input->post('contact_instagram');
			$insertContact['googleplus'] = $this->input->post('contact_googleplus');
			$insertContact['contact'] = $this->input->post('contact_image');
			$insertContact['phone'] = $this->input->post('contact_phone');
			$insertContact['email'] = $this->input->post('contact_email');
			$insertContact['address'] = $this->input->post('contact_address');
			db_update('mod_microsite_contact',array('mid' => $id),$insertContact);
			
			$result['resultCode'] =  1000;
			$result['resultMsg'] =  "Section Updated";
			$result['resultData']['openUrl'] =  base_url('admin/microsite/edit/'.$mid);
			
			echo json_encode($result);
		}
	}
	
	function contentadd($mid=false){
		if(empty($_POST)){
			if($mid){
				$view['mid'] = $mid;
				$this->load->view(tpldir('admin/extension/microsite/content/add_view'),$view);
			}
		}else{
			$result = jsonSrc();
			$insertContent['mid'] = $this->input->post('mid');
			$insertContent['background'] = $this->input->post('background');
			$insertContent['menu'] = $this->input->post('menu');
			$insertContent['content'] = $this->input->post('content');
			db_create('mod_microsite_content',$insertContent);
			
			$result['resultCode'] =  1000;
			$result['resultMsg'] =  "Content Created";
			$result['resultData']['openUrl'] =  base_url('admin/microsite/edit/'.$mid);
			
			echo json_encode($result);
		}
	}
	
	function contentedit($id=false){
		if(empty($_POST)){
			if($id){
				$view['content'] = db_read('mod_microsite_content',array('id' => $id));
				$this->load->view(tpldir('admin/extension/microsite/content/edit_view'),$view);
			}
		}else{
			$result = jsonSrc();
			$mid = $this->input->post('mid');
			$id = $this->input->post('id');
			$insertContent['background'] = $this->input->post('background');
			$insertContent['menu'] = $this->input->post('menu');
			$insertContent['content'] = $this->input->post('content');
			
			db_update('mod_microsite_content',array('id' => $id),$insertContent);
			
			$result['resultCode'] =  1000;
			$result['resultMsg'] =  "Content Updated";
			$result['resultData']['openUrl'] =  base_url('admin/microsite/edit/'.$mid);
			
			echo json_encode($result);
		}
	}
	
	function contentdelete($id=false){
		$result = jsonSrc();
		if($id){
			$menu_item_id = db_delete('mod_microsite_content',array('id' => $id));
			$result['resultCode'] = 1000;
			$result['resultMsg'] = "Success !!";
		}
		return $result;
	}
}
