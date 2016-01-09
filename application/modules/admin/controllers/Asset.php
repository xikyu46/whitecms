<?php
Class Asset extends ADMIN_Controller{
	function index(){
		$view['asset'] = db_reads('mod_asset_dir');
		$view['count_asset'] = count_db_reads('mod_asset_dir');
		$this->load->view(tpldir('admin/extension/asset/index_view'),$view);
	}
	
	function newfolder(){
		$result = jsonSrc();
		if(!empty($_POST)){
			$folder = $this->input->post('folder');
			$dir = db_read('mod_asset_dir',array('name',$folder));
			if($dir){
				$result['resultMsg'] = "Directory exists";
				echo json_encode($result);exit;
			}else{
				$insertFolder['name'] = $folder;
				db_create('mod_asset_dir',$insertFolder);
				$result['resultCode'] = 1000;
				$result['resultMsg'] = "Command Complete Successfully";
				$result['resultData']['openUrl'] = base_url('admin/asset');
			}
			
		}
		echo json_encode($result);
	}
	
	function modal($inputid=false){
		$_GET['nopage'] = true;
		$view['asset'] = db_reads('mod_asset_dir');
		$_GET['nopage'] = false;
		$view['count_asset'] = count_db_reads('mod_asset_dir');
		$view['inputid'] = $inputid;
		$this->load->view(tpldir('admin/extension/asset/modal/index_view'),$view);
	}
	
	function modaldetail($id=false,$inputid=false){
		if($id){
			$_GET['nooffset'] = true;
			$view['asset_dir'] = db_read('mod_asset_dir',array('id' => $id));
			$_GET['nooffset'] = false;
			
			if(!$view['asset_dir']){
				redirect(base_url('admin/asset'));
			}
			$_GET['nopage'] = true;
			$view['asset'] = db_reads('mod_asset',array('dirid' => $id));
			$_GET['nopage'] = false;
			$view['inputid'] = $inputid;
			$this->load->view(tpldir('admin/extension/asset/modal/detail_view'),$view);
		}
	}
	
	function detail($id=false){
		if($id){
			$_GET['nooffset'] = true;
			$view['asset_dir'] = db_read('mod_asset_dir',array('id' => $id));
			$_GET['nooffset'] = false;
			if(!$view['asset_dir']){
				redirect(base_url('admin/asset'));
			}
			$view['asset'] = db_reads('mod_asset',array('dirid' => $id));
			$view['count_asset'] = count_db_reads('mod_asset',array('dirid' => $id));
			$this->load->view(tpldir('admin/extension/asset/detail_view'),$view);
		}
	}
	
	function addfolder(){
		if(empty($_POST)){
			$this->load->view(tpldir('admin/extension/asset/detail_view'));
		}
	}
	
	function add(){
		$result = jsonSrc();
		if(isset($_FILES["assetfile"]["name"]) && $this->input->post('dirid')){
			$target_dir = $this->config->item('document_root').'assets/';
			$arrname = explode('.',$_FILES["assetfile"]["name"]);
			$ext = ".".$arrname[count($arrname)-1];
			$origname = $arrname[0];
			$filename = preg_replace('/[^0-9a-zA-Z]/','',$origname).'-'.time().$ext;
			$target_file = $target_dir . basename($filename);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			if(in_array($imageFileType,array('jpg','png'))){
					if (move_uploaded_file($_FILES["assetfile"]["tmp_name"], $target_file)) {
						$insertAsset['file'] = $filename;
						$insertAsset['dirid'] = $this->input->post('dirid');
						$id = db_create('mod_asset',$insertAsset);
						if($id){
							$result['resultCode'] = 1000;
							$result['resultMsg'] = "File succesfully uploaded";
							$result['resultData']['openUrl'] = base_url('admin/asset/detail/'.$this->input->post('dirid'));
						}
					}else{
						$result['resultMsg'] = "Fail to update the image";
					}
			}else{
				$result = "The file ". basename( $_FILES["assetfile"]["name"]). " Is not supported for upload";
			}
		}else{
			$result = "Invalid parameter";
		}
		echo json_encode($result);
	}
	
	function delete($id=false){
		$result = jsonSrc();
		if($id){
			$asset = db_read('mod_asset',array('id' => $id));
			if($asset){
				db_delete('mod_asset',array('id' => $id));
				unlink($this->config->item('document_root').'assets/'.$asset->file);
				$result['resultCode'] = 1000;
				$result['resultMsg'] = "File deleted succesfully";
				$result['resultData']['openUrl'] = $this->agent->referrer();
			}else{
				$result['resultData'] = "Invalid file";
			}
		}
		echo json_encode($result);
	}
}
