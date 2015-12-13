<?php
Class Category extends ADMIN_Controller{
	function add(){
		if(empty($_POST)){
			$view['categories'] = db_reads('category',array('type' => 'blog')); 
			$this->load->view(tpldir('admin/category/add_view'),$view);
		}else{
			$result = jsonSrc();
			$insertcat['type'] = 'blog';
			$insertcat['name'] = $this->input->post('name');
			$id = db_create('category',$insertcat);
			if($id){
				$result['resultCode'] = 1000;
				$result['resultMsg'] = "Success!!";
				$result['resultData']['openUrl'] = base_url('admin/category/edit/'.$id);
			}else{
				$result['resultMsg'] = "Create Category Failed";
			}
			echo json_encode($result);
		}
	}
	
	function edit($id=false){
		if(empty($_POST)){
			$category = db_read('category');
			if(!$category){
				redirect(base_url('admin/category/add'));
			}
			if(!$id){
				$id = $category->id;
			}
			$view['blogs'] = db_reads('page',array('type' => 'blog','catid' => $id));
			$view['categories'] = db_reads('category',array('type' => 'blog'));
			$view['category'] = db_read('category',array('id' => $id, 'type' => 'blog'));
			$this->load->view(tpldir('admin/category/edit_view'),$view);
		}else{
			$result = jsonSrc();
			$id = $this->input->post('id');
			$updatecat['name'] = $this->input->post('name');
			db_update('category',array('id' => $id),$updatecat);
				$result['resultCode'] = 1000;
				$result['resultMsg'] = "Success!!";
				$result['resultData']['openUrl'] = base_url('admin/category/edit/'.$id);
			
			echo json_encode($result);
		}
	}
}
