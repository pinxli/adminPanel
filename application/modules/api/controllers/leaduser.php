<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

##==================================================
## API Controller for Lead User
## @Author: Pinky Liwanagan
## @Date: 07-NOV-2013 
##==================================================

class Leaduser extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('common_model');	
		
		$this->locale	= ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$this->authKey	= ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
		$this->leadsId	= ( $this->uri->segment(5) ) ? $this->uri->segment(5) : '';
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
		$this->load->library('parser');
		$this->parser->parse("index.tpl", $data);
	}
	
	/**
	 ** @Param: Auth ID / Country ID
	 ** @Return: Leads List / Leads Info
	 ** for getting list of leads and/or info
	 **/ 
	public function get()
	{
		$is_valid_auth 	= $this->common_model->validate_auth_key($this->authKey);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$this->load->model('leads_model');
			
			if ( $this->leadsId != '' ){
				//get leads info
				$response = $this->leads_model->leadsInfo($this->leadsId);
			}
			else{
				//get list of leads
				$response = $this->leads_model->leadUserList();
			}
		}
		else{
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}

		//api logs
		$log_data = array(
			'log_client_id' => $this->authKey,
			'log_method' 	=> 'LEAD USER - '.$_SERVER['REQUEST_METHOD'],
			'log_url' 		=> $this->uri->uri_string(),
			'log_request' 	=> json_encode($this->input->post()),
			'log_response' 	=> json_encode($response),
			'log_query' 	=> $response['log_query'],
		);
		$this->apilog_model->apiLog($log_data); //db logs
		$this->api_functions->apiLog(json_encode($log_data),'GET_LEADUSER'); //text logs
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	// end of get lead user list
}

/* End of file company.php/ Api Company Controller */
