<?php

Class Rss extends MX_Controller{
	function index(){
		$this->load->helper('xml');
		$order['date'] = 'desc';
		$configurationsResult = db_reads('configurations');
		$config = false;
		if($configurationsResult){
			foreach($configurationsResult as  $row){
				$config[$row->name] = $row->value;
			}
		}
		
		$news = db_reads('page',array('type' => 'news', 'status' => 1),$order);
		
		$xml['channel'] = false;
		$xml['title'] = (isset($config['websitename'])) ? $config['websitename'] : false;
		$xml['link'] = base_url();
		$xml['item'] = false;
		if($news){
			foreach($news as $newsrow){
				$temp=false;
				$temp['title'] = $newsrow->title;
				$temp['link'] = base_url($newsrow->url);
				$temp['description'] = $newsrow->content;
				$xml['item'][] = $temp;
			}
		}
		header("Content-Type: text/xml");
		echo toXML($xml, 'rss version="2.0"');
	}
}
