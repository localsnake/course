<?php
	class Siteinfo extends CI_Controller 
	{
		function __constructor() 
		{
			parent::__constructor();
		}
		
		
		function about() 
		{
			$data['title'] = '关于';
			$this->load->view('inc/header',$data);
			$this->load->view('siteinfo/about');
		}
		
		function suggest() 
		{
			$data['title'] = '建议';
			$this->load->view('inc/header',$data);
			$this->load->view('siteinfo/suggest');
		}
		
	}
