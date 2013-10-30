<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

##==================================================
## API Controller for Country
## @Author: Pinky Liwanagan
## @Date: 08-OCT-2013 
##==================================================

class Country extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('common_model');	
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
	 ** @Return: Country List / Country Info 
	 ** for getting country list and/or info
	 **/ 
	public function get()
	{
		
		$auth_key 		= ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		 
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$country_id = ( $this->uri->segment(5) ) ? $this->uri->segment(5) : '';
			$this->load->model('country_model');
			
			if ( $country_id != '' ){
				//get country info
				$response = $this->country_model->countryInfo($country_id);
			}
			else{
				//get country list
				$response = $this->country_model->countryList();
			}
		}
		else{
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}

		//api logs
		$log_data = array(
			'log_client_id' => $auth_key,
			'log_method' 	=> 'COUNTRY - '.$_SERVER['REQUEST_METHOD'],
			'log_url' 		=> $this->uri->uri_string(),
			'log_request' 	=> json_encode($this->input->post()),
			'log_response' 	=> json_encode($response),
		);
		$this->apilog_model->apiLog($log_data); //db logs
		$this->api_functions->apiLog(json_encode($log_data),'GET_COUNTRY'); //text logs
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	// end of get contry
	
	function checkCountry()
	{
		
		$this->authKey	 	 = ( $this->uri->segment(5) ) ? $this->uri->segment(5) : '';
		$this->isoname   = ( $this->uri->segment(6) ) ? $this->uri->segment(6) : '';
		
		$is_valid_auth 	= $this->common_model->validate_auth_key($this->authKey);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$this->load->model('country_model');
			
			if ( $this->isoname != '' ){
				
				$response = $this->country_model->checkCountry(urldecode($this->isoname));
			}
			else 
			{	
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message']	= 'required: iso2';
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
			'log_method' 	=> 'checkCountry',
			'log_url' 		=> $this->uri->uri_string(),
			'log_request' 	=> json_encode($this->input->get()),
			'log_response' 	=> json_encode($response),
		);
		$this->apilog_model->apiLog($log_data); //db logs
		$this->api_functions->apiLog(json_encode($log_data),'checkCountry'); //text logs
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
}

/* End of file country.php/ Api Country Controller */
