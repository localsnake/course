<?php
	class Agenda extends CI_Controller {
		function __constructor() 
		{
			parent::__constructor();
		}
		
		function index() {
			$data['title'] = '我的日程';
			$this->load->view('inc/header',$data);
			$this->load->view('menu');
			$this->load->view('agenda/subnav');
			$this->load->view('agenda/agenda');
			$this->load->view('inc/footer');
		}
	}
