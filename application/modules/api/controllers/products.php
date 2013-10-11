<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

##==================================================
## API Controller for Company
## @Author: Pinky Liwanagan
## @Date: 08-OCT-2013 
##==================================================

class Products extends CI_Controller {

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
	 ** @Return: Company List / Company Info
	 ** for getting company list and/or info
	 **/ 
	public function get()
	{
		$auth_key 		= ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$product_id = ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
			$this->load->model('product_model');
			
			if ( $product_id != '' ){
				//get company info
				$response = $this->product_model->productInfo($product_id);
			}
			else{
				//get company list
				$response = $this->product_model->productList();
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
		$auth_key 		= ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$product_name			= $this->security->xss_clean($this->input->post('product_name'));
			$product_description	= $this->security->xss_clean($this->input->post('product_description'));
			$product_type_id		= $this->security->xss_clean($this->input->post('product_type_id'));
			$featured				= $this->security->xss_clean($this->input->post('featured'));
			$country_id				= $this->security->xss_clean($this->input->post('country_id'));
			$company_id				= $this->security->xss_clean($this->input->post('company_id'));
			$area_id				= $this->security->xss_clean($this->input->post('area_id'));
			$product_icon			= $this->security->xss_clean($this->input->post('product_icon'));
			$product_link			= $this->security->xss_clean($this->input->post('product_link'));
			
			$response['success'] = true;
			
			//validation
			foreach ( $this->input->post() as $key => $val ){
				$required_fields = array('product_name','product_description','product_type_id','area_id','product_icon','product_link');
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
					'product_name'			=> $product_name,
					'product_description' 	=> $product_description,
					'product_type_id' 		=> $product_type_id,
					'featured' 				=> $featured,
					'company_id'			=> $company_id,
					'country_id' 			=> $country_id,
					'area_id'				=> $area_id,
					'product_icon' 			=> $product_icon,
					'product_link' 			=> $product_link
				);
				
				$response = $this->product_model->productAdd($arr_data);	 
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
		$auth_key 		= ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$product_id = ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
			
			//check if user id is present
			if ( $product_id != '' ){
				
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
					$response = $this->product_model->productEdit($product_id,$arr_data);						
				}
			}
			else{ //user id is missing
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'Product ID is missing.';
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
