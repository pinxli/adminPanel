<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Controller {
/**
  * API Authentication Controller 
  * What: It's controles all Autherization API Functions
  * When: created  12-SEP-2013 
  * 	  modified 19-SEP-2013 
  * Who : created by Kamrul Hassan 
  *		: modified by K.H
 **/

	public function __construct() {
		parent::__construct();
		$this -> load -> model('common_model');
	}

	public function index()
	{
		
		$this->output->set_status_header(404, 'Not Found');
		show_404('ai', false);
		$data['abc']= 'Testing API';
		$this -> load -> library('parser');
		$this -> parser -> parse("index.tpl", $data);
	}
		 
	public function get(){
		$clientID = TRUE;
		$secretKEY = TRUE;
		/*check if the client id is present*/
		if($this->uri->segment(4)=== FALSE){
			$return['success'] =false;
			$return['data']['message'][]='Client ID is missing';

			$this->output
				 ->set_content_type('application/json')
				 ->set_output(json_encode($return));
			$clientID = FALSE;	
		}
		
		/*check if the secret is present*/
		if($this->uri->segment(5)=== FALSE){
			$return['success'] =false;
			$return['data']['message'][]='Client Secret Key is missing';

			$this->output
				 ->set_content_type('application/json')
				 ->set_output(json_encode($return));	
			$secretKEY = FALSE;			
		}
		
		if(($clientID==TRUE)&&($secretKEY==TRUE)){
			/*verify Client*/	
			$validate = $this->common_model->validate_client($this->uri->segment(4), $this->uri->segment(5));
			if($validate==FALSE){
				$return['success'] =false;
				$return['data']['message'][]='Client ID & Secret Key combination not found';				
			}else{
				$return['success'] =true;
				$return['data']['Authorization_Key'][]=$validate;
			}

			$this->output
				 ->set_content_type('application/json')
				 ->set_output(json_encode($return));	
				 						
		}
		
		$this -> load -> library('parser');
		$this -> parser -> parse("index.tpl");
	}
	

	public function status(){
		$authKEY = TRUE;
		if($this->uri->segment(4)===FALSE){
			$return['success'] =false;
			$return['data']['message'][]='Authorization Key Missing.';

			$this->output
				 ->set_content_type('application/json')
				 ->set_output(json_encode($return));
			$authKEY = FALSE;				
		}
		
		//validate auth key
		if($authKEY==TRUE){
			$auth = $this->common_model->validate_auth($this->uri->segment(4));	
			if($auth==FALSE){
				$return['success'] =false;
				$return['data']['message'][]='Authorization Key is not valid, please try again';
	
				$this->output
					 ->set_content_type('application/json')
					 ->set_output(json_encode($return));				
			}else{
				$return['success'] =true;
				$return['data']['Authorization_Key']=$this->uri->segment(4);
				$return['data']['issued_at']=$auth['issued_at'];
				$return['data']['valid_till']=$auth['valid_till'];
				$return['data']['allowed_calls']=$auth['allowed_calls'];
					
				$this->output
					 ->set_content_type('application/json')
					 ->set_output(json_encode($return));						
				
			}
		}
		
		$this -> load -> library('parser');
		$this -> parser -> parse("index.tpl");		
	}
	
		
}

/* End of file authentication.php/ Authentication Controller */
