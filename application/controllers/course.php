<?php
	class Course extends CI_Controller 
	{
		function __constructor() 
		{
			parent::__constructor();
		}
		
		//weekview
		function index() 
		{
			$data['title'] = '我的课程周视图';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/subnav');
			$this->load->view('course/week');
			$this->load->view('inc/footer');
		}
		
		function weekview() 
		{
			$data['title'] = '我的课程周视图';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/subnav');
			$this->load->view('course/week');
			$this->load->view('inc/footer');
		}
		
		function listview() 
		{
			$data['title'] = '我的课程列表视图';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/subnav');
			$this->load->view('course/list');
			$this->load->view('inc/footer');
		}
		
		function total()
		{
			$data['title'] = '全校课程';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/subnav');
			$this->load->view('course/total');
			$this->load->view('inc/footer');
		}	
		
	}
