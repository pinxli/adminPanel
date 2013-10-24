<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

##==================================================
## API Controller for Company
## @Author: Pinky Liwanagan
## @Date: 08-OCT-2013 
##==================================================

class Producttype extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('common_model');	
		
		$this->locale	 	 = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$this->authKey	 	 = ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
		$this->productTypeId = ( $this->uri->segment(5) ) ? $this->uri->segment(5) : '';
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
	 ** @Return: Company List / Company Info
	 ** for getting company list and/or info
	 **/ 
	public function get()
	{
		$is_valid_auth 	= $this->common_model->validate_auth_key($this->authKey);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$this->load->model('product_model');
			
			if ( $this->productTypeId != '' ){
				//get company info
				$response = $this->product_model->typesInfo($this->productTypeId);
			}
			else{
				//get company list
				$response = $this->product_model->typesList();
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
			'log_method' 	=> 'PRODUCTTYPE - '.$_SERVER['REQUEST_METHOD'],
			'log_url' 		=> $this->uri->uri_string(),
			'log_request' 	=> json_encode($this->input->post()),
			'log_response' 	=> json_encode($response),
		);
		$this->apilog_model->apiLog($log_data); //db logs
		$this->api_functions->apiLog(json_encode($log_data),'GET_PRODUCTTYPE'); //text logs
		
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
	 ** for creating company
	 **/
	public function post()
	{		
		$is_valid_auth 	= $this->common_model->validate_auth_key($this->authKey);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$product_type		= $this->security->xss_clean($this->input->post('product_type'));
			$description		= $this->security->xss_clean($this->input->post('description'));
			$url_slug			= $this->security->xss_clean($this->input->post('url_slug'));
			
			$response['success'] = true;
			
			//validation
			foreach ( $this->input->post() as $key => $val ){
				$required_fields = array('product_type','description');
				if ( in_array($key, $required_fields) ){
					if ( $val == '' || $val == NULL ){
						$rename 				= str_replace("_"," ",$key);
						$response['success'] 	= false;
						$response['message'][] 	= ucwords($rename).' must be provided';	
					}
				}
			}	
			
			if( $response['success'] ){
				$this->load->model('product_model');
				
				$arr_data = array(
					'product_type'		=> $product_type,
					'description' 		=> $description,
					'url_slug' 			=> $url_slug,
	
				);
				
				$response = $this->product_model->typesAdd($arr_data);	 
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
			'log_method' 	=> 'PRODUCTTYPE - '.$_SERVER['REQUEST_METHOD'],
			'log_url' 		=> $this->uri->uri_string(),
			'log_request' 	=> json_encode($this->input->post()),
			'log_response' 	=> json_encode($response),
		);
		$this->apilog_model->apiLog($log_data); //db logs
		$this->api_functions->apiLog(json_encode($log_data),'POST_PRODUCTTYPE'); //text logs
		
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
			if ( $this->productTypeId != '' ){
				
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
					$response = $this->product_model->typesEdit($this->productTypeId,$arr_data);						
				}
			}
			else{ //user id is missing
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'Product Type ID is missing.';
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
			'log_method' 	=> 'PRODUCTTYPE - '.$_SERVER['REQUEST_METHOD'],
			'log_url' 		=> $this->uri->uri_string(),
			'log_request' 	=> json_encode($this->input->post()),
			'log_response' 	=> json_encode($response),
		);
		$this->apilog_model->apiLog($log_data); //db logs
		$this->api_functions->apiLog(json_encode($log_data),'PUT_PRODUCTTYPE'); //text logs
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
}

/* End of file company.php/ Api Company Controller */
