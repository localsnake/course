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
		
		
	}
