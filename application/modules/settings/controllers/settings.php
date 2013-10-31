<?php

class Settings extends CI_Controller {
	
	public $msgClass = '';
	public $msgInfo  = ''; 
	
	
	public function __construct() {
		parent::__construct();
		//check user session
		$this->hero_session->is_active_session();
		
		//template path
		$this->globalTpl = $this->config->item('global_tpl');
		
		//get flash data for error/info message
		$this->msgClass = ( $this->session->flashdata('msgClass') ) ? $this->session->flashdata('msgClass') : '';
		$this->msgInfo  = ( $this->session->flashdata('msgInfo') ) ? $this->session->flashdata('msgInfo') : '';
	}
	
	// display all users
	function user_management()
	{
		$res = $this->settings_model->userlist();
		
		//check if user list is pulled. if not, list is set to empty array
		$userList = ( $res->rc == 0 ) ? $res->data->userlist : array();
		
		$data['mainContent'] = 'users_view.tpl';
		
		$data['data'] = array(
			'baseUrl'	=> base_url(),
			'title'		=> 'Users',
			'msgClass'  => $this->msgClass,
			'msgInfo'   => $this->msgInfo,
			'userList'	=> $userList
		);
		
		$this->load->view($this->globalTpl, $data);		
	}
	
	// add user
	function add_user()
	{	
		
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('fname', 'fname', 'xss_clean|trim|required');
		$this->form_validation->set_rules('lname', 'lname', 'xss_clean|trim|required');
		$this->form_validation->set_rules('email', 'email', 'xss_clean|trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'xss_clean|trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('cpassword', 'cpassword', 'xss_clean|trim|required|matches[password]');
		
		if($this->form_validation->run() == FALSE)
		{
			//set forms open, close and inputs
			$form_open 	= form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
			$fname 		= form_input	(array('name' => 'fname', 		'class' => 'input-xlarge focused' , 'id' => 'focusedInput',  'placeholder' => 'First Name'));
			$lastname 	= form_input	(array('name' => 'lname', 		'class' => 'input-xlarge focused' , 'id' => 'focusedInput',  'placeholder' => 'Last Name'));
			$email 		= form_input	(array('name' => 'email', 		'class' => 'input-xlarge focused' , 'id' => 'focusedInput',  'placeholder' => 'Type here....'));
			$password 	= form_password	(array('name' => 'password', 	'class' => 'input-xlarge focused' , 'id' => 'inputPassword', 'placeholder' => 'Password'));
			$cpassword 	= form_password	(array('name' => 'cpassword', 	'class' => 'input-xlarge focused' , 'id' => 'inputPassword', 'placeholder' => 'Confirm Password'));
			$form_close = form_close();

			$data['mainContent'] = 'user_add_view.tpl';
			
			$data['data'] = array(
				'baseUrl'		=> base_url(),
				'title'			=> 'User Add',
				'msgClass'  	=> $this->msgClass,
				'msgInfo'   	=> $this->msgInfo,
				'form_open'		=> $form_open,
				'fname'   		=> $fname,
				'lastname'		=> $lastname,
				'email'   		=> $email,
				'password'		=> $password,
				'cpassword'		=> $cpassword,
				'form_close'	=> $form_close
			);
			
			$this->load->view($this->globalTpl, $data);		
		}
		else 	
		{
			$insert_data = array(
				'fname' 		=> $this->input->post('fname'),
				'lname' 		=> $this->input->post('lname'),
				'email' 		=> $this->input->post('email'),			
				'password' 		=> $this->input->post('password'),
				'user_level_id' => $this->input->post('user_level_id'),	
				'verified' 		=> 0						
			);
			
			$result = $this->settings_model->add_user($insert_data);
			
		
			if($result->rc == 0)
			{
				$msgClass = 'alert alert-success';
				$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'User has been added.';
			}
			else 
			{	
				$msgClass = 'alert alert-error';
				$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Add user failed.';			
			}
			
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo,
			);
			$this->session->set_flashdata($msginfo_arr);
			
			redirect('settings/user_management/');
		}
	}	
	
	// edit user
	function user_edit()
	{
		
		$user_info = $this->settings_model->user_info($this->uri->segment(3));
		if($user_info->rc == 0)
		{
			if($this->input->post('editnow',TRUE) == 'editnow')
			{
				$data = array(
							'fname' => $this->input->post('fname'),
							'lname' => $this->input->post('lname'),
							'email' => $this->input->post('email'),
							'password' => $this->input->post('password'),
							'user_level_id' => $this->input->post('user_level_id'),
							'userid' => $this->input->post('userid'),
						);
				
				$result = $this->settings_model->edit_user($data);
				
				if($result->rc == 0)
				{
					$msgClass = 'alert alert-success';
					$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'User has been modified.';
				}
				else 
				{	
					$msgClass = 'alert alert-error';
					$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Edit user failed.';			
				}
				
				//set flash data for error/info message
				$msginfo_arr = array(
					'msgClass' => $msgClass,
					'msgInfo'  => $msgInfo
				);
				$this->session->set_flashdata($msginfo_arr);
				
				redirect('settings/user_management/');
				
			}
			else
			{
				$user_info_res = $user_info->data->userinfo[0];
				
				//set forms open, close and inputs
				$form_open 	= form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
				$fname 		= form_input	(array('name' => 'fname', 		'class' => 'input-xlarge focused' , 'id' => 'focusedInput',  'placeholder' => 'First Name',			'value' => $user_info_res->fname));
				$lastname 	= form_input	(array('name' => 'lname', 		'class' => 'input-xlarge focused' , 'id' => 'focusedInput',  'placeholder' => 'Last Name',			'value' => $user_info_res->lname));
				$email 		= form_input	(array('name' => 'email', 		'class' => 'input-xlarge focused' , 'id' => 'focusedInput',  'placeholder' => 'Type here....',		'value' => $user_info_res->email));
				$password 	= form_password	(array('name' => 'password', 	'class' => 'input-xlarge focused' , 'id' => 'inputPassword', 'placeholder' => 'Password',			'value' => ''/* $user_info_res->password */));
				$cpassword 	= form_password	(array('name' => 'cpassword', 	'class' => 'input-xlarge focused' , 'id' => 'inputPassword', 'placeholder' => 'Confirm Password',	'value' => ''/* $user_info_res->password */));
				$form_close = form_close();
				$userid		= $user_info_res->userid;
				
				$data['mainContent'] = 'user_edit_view.tpl';
				
				$data['data'] = array(
					'baseUrl'		=> base_url(),
					'title'			=> 'User Edit',
					'msgClass'  => $this->msgClass,
					'msgInfo'   => $this->msgInfo,
					'userid'		=> $userid,
					'form_open'		=> $form_open,
					'fname'   		=> $fname,
					'lastname'		=> $lastname,
					'email'   		=> $email,
					'password'		=> $password,
					'cpassword'		=> $cpassword,
					'form_close'	=> $form_close
				);
				
				$this->load->view($this->globalTpl, $data);	
			}
		}
		else 
		{
			$msgClass = 'alert alert-error';
			$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Cannot get User Info';	
				
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo
			);
			$this->session->set_flashdata($msginfo_arr);
			
			redirect('settings/user_management/');
		}		
	}
	
	// delete user
	function user_delete()
	{
		$result = $this->settings_model->delete_user($this->uri->segment(3));
		
		if($result->rc == 0)
		{
			$msgClass = 'alert alert-success';
			$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'User has been deleted.';
		}
		else 
		{	
			$msgClass = 'alert alert-error';
			$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Delete user failed.';			
		}
		
		//set flash data for error/info message
		$msginfo_arr = array(
			'msgClass' => $msgClass,
			'msgInfo'  => $msgInfo
		);
		$this->session->set_flashdata($msginfo_arr);
		
		redirect('settings/user_management/');
		
	}
	
	function accesslogs()
	{
		$res = $this->settings_model->logList();
		$data['mainContent'] = 'log_view.tpl';

		$data['data'] = array(
			'baseUrl' => base_url(),
			'title'   => 'Access Logs',
			'logList' => $res->data->loglist
		);

		$this->load->view($this->globalTpl, $data);  
	}
	
	function apilogs()
	{
		$res = $this->settings_model->apilogList();
		$data['mainContent'] = 'api_log_view.tpl';

		$data['data'] = array(
			'baseUrl' => base_url(),
			'title'   => 'API Logs',
			'logList' => $res->data->loglist
		);

		$this->load->view($this->globalTpl, $data);  
	}
	 

	function excelexport()
	{
		
		$uri = $this->uri->segment(3);
		
		$res = ( $uri == 'logList' ) ? $this->settings_model->explogList() : $this->settings_model->expApiLog();
		$res = json_decode($res, $array = TRUE);

		// echo '<pre>'; print_r($res); exit;
		$newLogs = array();
		foreach($res['data']['loglist'] as $key=>$logs){
			if($uri == 'logList'){
				$logs['access_time'] = date('d M, Y H:i', strtotime($logs['access_time']));
				if(!empty($logs['exit_time'])){
					$logs['exit_time'] = date('d M, Y H:i', strtotime($logs['exit_time']));
				}
			}else{
				$logs['log_access_time'] = date('d M, Y H:i', strtotime($logs['log_access_time']));
				// $logs['expiry'] = date('d M, Y H:i:s', strtotime($logs['expiry']));
			}
		array_push($newLogs, $logs);
		}

		$export = $this->export->to_excel($newLogs,$uri. date('Ymdhmi'));
	}
	
	function exporttoexcel()
	{
		$type = $this->uri->segment(3);
		$res = $this->settings_model->$type();

		if ( $res->rc == 0 ){
			$data_arr = $res->data->$type;
			
			$export = $this->export->to_excel($data_arr,$type. date('Ymdhmi'));
		}
		
	}
	
}