<?php
	class Course extends CI_Controller 
	{
		function __constructor() 
		{
			parent::__constructor();
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
		
		function news($course_id) 
		{
			$data['title'] = '课程动态';
			$data['course_id'] = $course_id; 
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('course/news');
			$this->load->view('inc/footer');
		}
		
		
		function intro($course_id) 
		{
			$data['title'] = '课程简介';
			$data['course_id'] = $course_id; 
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('course/intro');
			$this->load->view('inc/footer');
		}
		
		function student($course_id) 
		{
			$data['title'] = '课程简介';
			$data['course_id'] = $course_id; 
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('course/student');
			$this->load->view('inc/footer');
		}
		
		function assignment($course_id) 
		{
			$data['title'] = '课程作业';
			$data['course_id'] = $course_id; 
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('course/assignment');
			$this->load->view('inc/footer');
		}
		
		function new_assignment($course_id) 
		{
			$data['title'] = '新建作业';
			$data['course_id'] = $course_id; 
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('course/new_assignment');
			$this->load->view('inc/footer');
		}
		
		
		function lecture($course_id) 
		{
			$data['title'] = '课程课件';
			$data['course_id'] = $course_id; 
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('course/lecture');
			$this->load->view('inc/footer');
		}
		
		function new_lecture($course_id) 
		{
			$data['title'] = '课程课件';
			$data['course_id'] = $course_id; 
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('course/new_lecture');
			$this->load->view('inc/footer');
		}
		
		function resource($course_id) 
		{
			$data['title'] = '课程资源';
			$data['course_id'] = $course_id; 
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('course/resource');
			$this->load->view('inc/footer');
		}
		
		function new_resource($course_id) 
		{
			$data['title'] = '课程资源';
			$data['course_id'] = $course_id; 
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('course/pagenav');
			$this->load->view('course/new_resource');
			$this->load->view('inc/footer');
		}
		
	}
