<?php
	class Account extends CI_Controller 
	{
		function __constructor() 
		{
			parent::__constructor();
		}
		
		function login()
		{
			$data['title'] = '用户登录';
			$this->load->view('inc/header',$data);
			$this->load->view('account/login');
			$this->load->view('inc/footer');
		}
		
		function register() 
		{
			$data['title'] = '用户注册';
			$data['css'] = 'register.css';
			$this->load->view('inc/header',$data);
			$this->load->view('account/register');
		}
		
		function logout()
		{
			//destory the session and goto login page
			$this->session->unset_userdata('user_id');
			$this->session->sess_destroy();
			redirect('/account/login/', 'refresh');	 // go to login page
		}
		

		function password()
		{
			$data['title'] = '修改密码';
			$this->load->view('inc/header',$data);
			$this->load->view('account/password');
			$this->load->view('inc/footer');
		}
		
		function forgot_password()
		{
			$data['title'] = '取回密码';
			$this->load->view('inc/header',$data);
			$this->load->view('account/forgot_password');
			$this->load->view('inc/footer');
		}
		
		function confirm() 
		{
			$data['title'] = '重发确认信';
			$this->load->view('inc/header',$data);
			$this->load->view('account/confirm');
			$this->load->view('inc/footer');
		}
		
		function process_login() 
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('loginEmail', 'Login Email', 'required|xss_clean');
			$this->form_validation->set_rules('loginPwd', 'Login Password', 'required|xss_clean');
			
			if ($this->form_validation->run() == FALSE) 
			{
				echo validation_errors();
			}
			else
			{
				// @todo check whether is a valid user
				$user_id = 1;
				if($user_id > 0) 
				{
					$this->session->set_userdata('user_id',$user_id);
					echo 1;
				}
				else
				{
					echo '用户名或密码错误';
				}
			}
		}
	}
