<?php
	class Req extends CI_Controller 
	{
		function __constructor() 
		{
			parent::__constructor();
		}
		
		
		function friend() 
		{
			$data['title'] = '好友申请';
			$this->load->view('inc/header',$data);
			$this->load->view('req/friend');
		}
		
		function course()
		{
			$data['title'] = '课程申请';
			$this->load->view('inc/header',$data);
			$this->load->view('req/course');
		}
		
	}
