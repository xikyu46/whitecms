<?php

Class Rss extends MX_Controller{
	function index(){
		$this->load->helper('xml');
		$order['date'] = 'desc';
		$news = db_reads('page',array('type' => 'news', 'status' => 1),$order);
		
		toXML($news);
	}
}
