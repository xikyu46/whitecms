<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Custom secure Controller
*
* @package default
* @author Christopher Imrie
*/
class ADMIN_Controller extends MX_Controller {

	/**
	* Secure Constructor
	*
	* 
	*/
	
	function __construct()
	{ 
		parent::__construct();
		if(!$this->session->userdata('admin_auth')){
			redirect(base_url('admin/login'));
		}		
	}
}