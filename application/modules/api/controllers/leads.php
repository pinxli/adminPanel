<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

##==================================================
## API Controller for Company
## @Author: Pinky Liwanagan
## @Date: 08-OCT-2013 
##==================================================

class Leads extends CI_Controller {

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
				$response = $this->leads_model->leadsList();
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
			'log_method' 	=> 'LEADS - '.$_SERVER['REQUEST_METHOD'],
			'log_url' 		=> $this->uri->uri_string(),
			'log_request' 	=> json_encode($this->input->post()),
			'log_response' 	=> json_encode($response),
			'log_query' 	=> $response['log_query'],
		);
		$this->apilog_model->apiLog($log_data); //db logs
		$this->api_functions->apiLog(json_encode($log_data),'GET_LEADS'); //text logs
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	// end of get company
	
	/**
	 ** @Param: Auth Key
	 ** for creating leads
	 **/
	public function post()
	{		
		$is_valid_auth 	= $this->common_model->validate_auth_key($this->authKey);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$first_name			= $this->security->xss_clean($this->input->post('first_name'));
			$last_name			= $this->security->xss_clean($this->input->post('last_name'));
			$email				= $this->security->xss_clean($this->input->post('email'));
			$phone_no			= $this->security->xss_clean($this->input->post('phone_no'));
			
			$vertical_type_id	= $this->security->xss_clean($this->input->post('vertical_type_id'));
			$company_id			= $this->security->xss_clean($this->input->post('company_id'));
			
			$search_key			= $this->security->xss_clean($this->input->post('search_key'));
			$search_value		= $this->security->xss_clean($this->input->post('search_value'));
			
			// $first_name			= 'Pinx';
			// $last_name			= 'Li';
			// $email				= 'mail2@mail.com';
			// $phone_no			= '1234567';
			
			// $vertical_type_id	= '2';
			// $company_id			= '2';
			
			// $search_key			= 'credit card key';
			// $search_value		= 'credit card value';
			
			$response['success'] = true;
			
			//validation
			/* foreach ( $this->input->post() as $key => $val ){
				$required_fields = array('area_country_id','area_name','area_description');
				if ( in_array($key, $required_fields) ){
					if ( $val == '' || $val == NULL ){
						$rename 				= str_replace("_"," ",$key);
						$response['success'] 	= false;
						$response['message'][] 	= ucwords($rename).' must be provided';	
					}
				}
			}	 */
			
			if( $response['success'] ){
				$this->load->model('leads_model');
				
				$lead_user_data = array(
					'first_name'		=> $first_name,
					'last_name' 		=> $last_name,
					'email'				=> $email,
					'phone_no'			=> $phone_no
				);
				
				$lead_search_data = array(
					'search_key'		=> $search_key,
					'search_value'		=> $search_value
				);
				
				$leads_data = array(
					'vertical_type_id'	=> $vertical_type_id,
					'company_id'		=> $company_id
				);
				
				$response = $this->leads_model->leadsAdd($lead_user_data,$lead_search_data,$leads_data);	 
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
			'log_method' 	=> 'PRODUCTAREA - '.$_SERVER['REQUEST_METHOD'],
			'log_url' 		=> $this->uri->uri_string(),
			'log_request' 	=> json_encode($this->input->post()),
			'log_response' 	=> json_encode($response),
			'log_query' 	=> ( isset($response['log_query']) ) ? $response['log_query'] : '',
		);
		$this->apilog_model->apiLog($log_data); //db logs
		$this->api_functions->apiLog(json_encode($log_data),'POST_PRODUCTAREA'); //text logs
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	
	/**
	 ** @Param: Auth Key / User ID
	 ** for modifying company info
	 **/
	public function put()
	{
		$is_valid_auth 	= $this->common_model->validate_auth_key($this->authKey);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
		
			//check if user id is present
			if ( $this->areaId != '' ){
				
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
					$this->load->model('product_model');
					//edit user info
					$response = $this->product_model->areaEdit($this->areaId,$arr_data);						
				}
			}
			else{ //user id is missing
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'Area ID is missing.';
			}
		}
		else{ //authentication failed
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}

		//api logs
		$log_data = array(
			'log_client_id' => $this->authKey,
			'log_method' 	=> 'PRODUCTAREA - '.$_SERVER['REQUEST_METHOD'],
			'log_url' 		=> $this->uri->uri_string(),
			'log_request' 	=> json_encode($this->input->post()),
			'log_response' 	=> json_encode($response),
			'log_query' 	=> $response['log_query'],
		);
		$this->apilog_model->apiLog($log_data); //db logs
		$this->api_functions->apiLog(json_encode($log_data),'PUT_PRODUCTAREA'); //text logs
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
}

/* End of file company.php/ Api Company Controller */
