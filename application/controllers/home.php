<?php
	class Home extends CI_Controller {
		function __constructor() 
		{
			parent::__constructor();
		}
		
		function index() 
		{
			$user_id = $this->session->userdata('user_id');
			if ( !$user_id || $user_id < 0 )	{	// Need to login
				redirect('/account/login/', 'refresh');
			}
			
			$limit = 10;
			$offset = 0;
			/*$data['query'] = $this->db->get_where('sns_freshmilk', 
									array('to_id' => $id,'freshmilk_type' => 'C'), 
									$limit, $offset);*/
			$data['title'] = '课程动态';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('home/subnav');
			$this->load->view('home/coursefeed');
			$this->load->view('inc/footer');
		}
		
		function newsfeed() 
		{
			$data['title'] = '社交动态';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('home/subnav');
			$this->load->view('home/newsfeed');
			$this->load->view('inc/footer');
		}
		
		function announce() 
		{
			$data['title'] = '通知';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('home/subnav');
			$this->load->view('home/announce');
			$this->load->view('inc/footer');
		}
		
		
		function about() 
		{
			$data['title'] = '关于我们';
			$data['css'] = array('about.css');
			$this->load->view('inc/header',$data);
			$this->load->view('about');
		}
		
		function suggest() 
		{
			$data['title'] = '建议';
			$this->load->view('inc/header',$data);
			$this->load->view('suggest');
		}
	}
