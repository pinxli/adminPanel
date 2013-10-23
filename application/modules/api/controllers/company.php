<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

##==================================================
## API Controller for Company
## @Author: Pinky Liwanagan
## @Date: 08-OCT-2013 
##==================================================

class Company extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('common_model');	
		
		$this->locale 		= ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$this->authKey		= ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
		$this->companyId	= ( $this->uri->segment(5) ) ? $this->uri->segment(5) : '';
		
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
			$this->load->model('company_model');
			
			if ( $this->companyId != '' ){
				//get company info
				$response = $this->company_model->companyInfo($this->companyId);
			}
			else{
				//get company list
				$response = $this->company_model->companyList();
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
			$company_name		 = $this->security->xss_clean($this->input->post('company_name'));
			$company_weblink	 = $this->security->xss_clean($this->input->post('company_weblink'));
			$company_email		 = $this->security->xss_clean($this->input->post('company_email'));
			$company_phone		 = $this->security->xss_clean($this->input->post('company_phone'));
			$company_fax		 = $this->security->xss_clean($this->input->post('company_fax'));
			$company_address	 = $this->security->xss_clean($this->input->post('company_address'));
			$company_country_id	 = $this->security->xss_clean($this->input->post('company_country_id'));
			$company_contact	 = $this->security->xss_clean($this->input->post('company_contact'));
			$company_description = $this->security->xss_clean($this->input->post('company_description'));
			$company_logo		 = $this->security->xss_clean($this->input->post('company_logo'));
				
			$response['success'] = true;
			
			//validation
			foreach ( $this->input->post() as $key => $val ){
				$required_fields = array('company_name','company_email','company_country_id');
				if ( in_array($key, $required_fields) ){
					if ( $val == '' || $val == NULL ){
						$rename 				= str_replace("_"," ",$key);
						$response['success'] 	= false;
						$response['message'][] 	= ucwords($rename).' must be provided';	
					}
				}
			}	
			
			if( $response['success'] ){
				$this->load->model('company_model');
				
				$arr_data = array(
					'company_name'			=> $company_name,
					'company_weblink'		=> $company_weblink,
					'company_email' 		=> $company_email,
					'company_phone' 		=> $company_phone,
					'company_fax' 			=> $company_fax,
					'company_address' 		=> $company_address,
					'company_country_id'	=> $company_country_id,
					'company_contact' 		=> $company_contact,
					'company_description'	=> $company_description,
					'company_logo' 			=> $company_logo,
				);
				
				$response = $this->company_model->companyAdd($arr_data);	 
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
			if ( $this->companyId != '' ){
				
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
					$this->load->model('company_model');
					//edit user info
					$response = $this->company_model->companyEdit($this->companyId,$arr_data);						
				}
			}
			else{ //user id is missing
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'Company ID is missing.';
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
}

/* End of file company.php/ Api Company Controller */
