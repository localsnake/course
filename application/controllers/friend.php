<?php
	class Friend extends CI_Controller 
	{
		function __constructor() 
		{
			parent::__constructor();
		}
		
		function index() 
		{
			$data['title'] = '学术社交网';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('friend/subnav');
			$this->load->view('friend/friendlist');
			$this->load->view('inc/footer');
		}
		
		function news($friend_id) 
		{
			$data['title'] = '好友动态';
			$data['friend_id'] = $friend_id;
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('friend/pagenav');
			$this->load->view('friend/news');
			$this->load->view('inc/footer');
		}
		
		function info($friend_id) 
		{
			$data['title'] = '好友资料';
			$data['friend_id'] = $friend_id;
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('friend/pagenav');
			$this->load->view('friend/info');
			$this->load->view('inc/footer');
		}
		
		
	}
