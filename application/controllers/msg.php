<?php
	class Msg extends CI_Controller 
	{
		function __constructor() 
		{
			parent::__constructor();
		}
		
		
		function compose()
		{
			$data['title'] = '新信件';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('msg/subnav');
			$this->load->view('msg/compose');
			$this->load->view('inc/footer');
		}
		
		function inbox()
		{
			$data['title'] = '收件箱';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('msg/subnav');
			$this->load->view('msg/inbox');
			$this->load->view('inc/footer');
		}
		
		function sentmail()
		{
			$data['title'] = '已发箱';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('msg/subnav');
			$this->load->view('msg/sentmail');
			$this->load->view('inc/footer');
		}
	}
