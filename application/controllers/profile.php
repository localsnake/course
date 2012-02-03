<?php
	class Profile extends CI_Controller {
		function __constructor() 
		{
			parent::__constructor();
		}
		
		function index() {
			$data['title'] = '我的动态';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('profile/subnav');
			$this->load->view('profile/news');
			$this->load->view('inc/footer');
		}
		
		function info() {
			$data['title'] = '个人资料';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('profile/subnav');
			$this->load->view('profile/info');
			$this->load->view('inc/footer');
		}
	}
