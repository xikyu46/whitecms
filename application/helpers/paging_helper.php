<?php
	function showpage($baseurl=false, $totalrows=false){
		$CI =& get_instance();
		$perpage = $CI->config->item('limit_page');
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
// 		$config['uri_segment'] = 6;
		$config['base_url'] = current_url(); 
		$config['total_rows'] = $totalrows;
		$config['per_page'] = $perpage;
		$config['prefix'] = '?offset=';
		$config['enable_query_strings'] = false;
// 		$config['page_query_string'] = true;
		$config['query_string_segment'] = 'offset';
		$config['reuse_query_string'] = FALSE;
		$config['first_url'] = $config['base_url'];
		$CI->load->library('pagination');
		$CI->pagination->initialize($config);
		return $CI->pagination->create_links();
	} 
