<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logs extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('common_model');	
		
		$this->locale 	= ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$this->authKey	= ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
		$this->log_id 	= ( $this->uri->segment(5) ) ? $this->uri->segment(5) : '';
	}

	public function rest()
	{
		$method = $_SERVER['REQUEST_METHOD'];	
		$this->$method();
	}
	
	public function index()
	{		
		$this->output->set_status_header(404, 'Not Found');
		show_404('ai', false);
		$data['abc']= 'Testing API';
		$this -> load -> library('parser');
		$this -> parser -> parse("index.tpl", $data);
	}
	
	/**
	 ** @Param: Auth Key / User ID
	 ** for getting user list or user info 
	 **/
	public function get()
	{
		$is_valid_auth 	= $this->common_model->validate_auth_key($this->authKey);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$this->load->model('log_model');
			
			if ( $this->log_id != '' ){
				//get user info
				$response = $this->log_model->getLog($this->log_id);
			}
			else{
				//get user list
				$response = $this->log_model->getAllLogs();
			}
		}
		else{
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	// end of get users
	
	
	/**
	 ** @Param: Auth Key
	 ** for creating user
	 **/
	public function post()
	{	
		$is_valid_auth 	= $this->common_model->validate_auth_key($this->authKey);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$log_client_id				= $this->security->xss_clean($this->input->post('log_client_id'));	
			$log_access_time			= $this->security->xss_clean($this->input->post('log_access_time'));
			$log_method					= $this->security->xss_clean($this->input->post('log_method'));	
			$log_url					= $this->security->xss_clean($this->input->post('log_url'));
			$log_request				= $this->security->xss_clean($this->input->post('log_request'));
			$log_response				= $this->security->xss_clean($this->input->post('log_response'));
				
			$response['success'] = true;
			
			//validation
			foreach ( $this->input->post() as $key => $val ){
				if ( $val == '' || $val == NULL ){
					$response['success'] = false;
					$response['message'][] = $key.' must be provided';	
				}
			}	
			
			if( $response['success'] ){
				$this->load->model('log_model');
				
				$arr_data = array(
					'log_client_id' 		=> $log_client_id,
					'log_access_time' 		=> $log_access_time,
					'log_method' 			=> $log_method,
					'log_url' 				=> $log_url,
					'log_request'			=> $log_request,
					'log_response' 			=> $log_response
				);
				
				$response = $this->log_model->addLog($arr_data);	 
			}
			else{
				$response['rc']			= $is_valid_auth['rc'];
				$response['success']	= $is_valid_auth['success'];
				$response['message'][]	= $is_valid_auth['message'];
			}
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	//end post
	
	/**
	 ** @Param: Auth Key / User ID
	 ** for modifying user info
	 **/
	public function put()
	{
		$is_valid_auth 	= $this->common_model->validate_auth_key($this->authKey);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
		
			//check if user id is present
			if ( $this->log_id != '' ){
				
				$data = json_decode(file_get_contents("php://input"), true);
				
				//get fields to edit
				$arr_data = array();
				foreach ( $data as $key => $val ){
					if ( $val != '' || $val != NULL ){
						$arr_data[$key] = $val;	
					}
				}
				
				//check if params are not empty
				if( !empty($arr_data) ){
					$this->load->model('log_model');
					//edit user info
					$response = $this->log_model->editLog($this->log_id,$arr_data);						
				}
			}
			else{ //user id is missing
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'Log ID is missing.';
			}
		}
		else{ //authentication failed
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	
	/**
	 ** @Param: Auth Key / User ID
	 ** for deleting user
	 **/
	public function delete()
	{
		$is_valid_auth 	= $this->common_model->validate_auth_key($this->authKey);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
		
			//check if user id is present
			if ( $this->log_id != '' ){
				//if authorized delete call made with all segments			
				$this->load->model('log_model');
				$return = $this->log_model->delLog($this->log_id);					
			}
			else{ //user id is missing
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'A Log ID must be supplied, to carry out this operation';
			}
		}
		else{ //authentication failed
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
		
	}
	//end of delete user
	
	
	
	/**
	 ** @Param: None
	 ** for user login. includes user access logs
	 **/
	
	
	
	public function test()
	{
		$return['message'] = $_SERVER['REQUEST_METHOD'];
	
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($return));
		
		$this->load->library('parser');
		$this->parser->parse("index.tpl");
	}
}

/* End of file users.php/ Api Users Controller */
