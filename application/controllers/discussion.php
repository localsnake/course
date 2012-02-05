<?php
	class Discussion extends CI_Controller 
	{
		function __constructor() 
		{
			parent::__constructor();
		}
		
		function index($course_id, $page = 1)
		{
			$data['title'] = '课程讨论区';
			$data['course_id'] = $course_id; 
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('discussion/index');
			$this->load->view('inc/footer');
		}
		
		function release($course_id, $release_id, $page_id = 1) 
		{
			$data['title'] = '帖子XXX';
			$data['course_id'] = $course_id;
			$data['release_id'] = $release_id;
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('discussion/release');
			$this->load->view('inc/footer');
		}
		
		function new_release($course_id)
		{
			$data['title'] = '新建帖子';
			$data['course_id'] = $course_id;
			$data['release_id'] = $release_id;
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('discussion/new_release');
			$this->load->view('inc/footer');
		}
		
		
	}
