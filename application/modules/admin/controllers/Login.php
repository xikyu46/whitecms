<?php
Class Login extends MX_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		if($_SERVER['REQUEST_METHOD'] == "GET"){
			$admin_auth = $this->session->userdata('admin_auth');
			session_write_close();
			if($admin_auth){
				redirect('admin/dashboard');
			}
			$this->load->view(tpldir('admin/login/index_view'));
		}else{
			$username = $this->input->post('username');
			$password = hash('sha256',$this->input->post('password'));
			
			$adminRow = db_read('admin',array('username' => $username, 'password' => $password));
			if(!$adminRow){
				
			}
			$this->session->set_userdata('admin_auth',true);
			$this->session->set_userdata('adminid',$adminRow->id);
			redirect(base_url('admin/dashboard'));
		}
	}
	
	function out(){
		$this->session->sess_destroy();
		redirect(base_url('admin/login'));
	}
}
