<?php



Class Login extends MX_Controller{
	function __construct(){
		parent::__construct();
	}
	
	
	function index(){
		$this->load->view(tpldir('admin/header_view'));
		$this->load->view(tpldir('admin/login/index_view'));
		$this->load->view(tpldir('admin/footer_view'));
		if($_SERVER['REQUEST_METHOD'] == "POST"){
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
}
