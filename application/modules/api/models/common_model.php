<?php
class Common_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$utctimestamp = $this->db->query("SELECT UTC_TIMESTAMP() as utctimestamp");
		$this->utctimestamp = $utctimestamp->row()->utctimestamp;
	}

	public function validate_client($client, $secret) {
         $this->db->where('clientID', $client);
		 $this->db->where('secretKEY', $secret);
		 $query = $this->db->get('api_clients');
		 
		 //client id & key matched
		 if ($query->num_rows() > 0){
			   foreach ($query->result() as $row){
				  $exp = $row->expiry;
				  $auth = $row->auth;
			   }
			  if(date('Y-m-d', time()) > date('Y-m-d',strtotime($exp)) ){
				  return 'Expired API Key, Contact support for renewal';				  
			  }else{
				  return $auth; 	  
			  }
		 //client id & key didn't matched	   			 
		 }else{
			  return FALSE;
		 }
		 
	}



	public function validate_auth($auth) {
		$this->db->where('auth', $auth);
		$query = $this->db->get('api_clients');

		//client id & key matched
		if ($query->num_rows() > 0){
			foreach ($query->result() as $row){
				$issued = $row->issued_at; 
				$exp = $row->expiry;
				$auth = $row->auth;
				$allowed = $row->allowed;
			}
			if(date('Y-m-d', time()) > date('Y-m-d',strtotime($exp)) ){
				return false;				  
			}else{
				$data['issued_at']= $issued;
				$data['valid_till']= $exp;
				$data['allowed_calls']= $allowed;
				return $data; 	  
			}
			//client id & key didn't matched	   			 
		}else{
		  return false;
		}
		 
	}
	
	public function validate_auth_key($auth)
	{
		if ( $auth === FALSE || $auth == '' ){
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Authorization Key is missing.';
		}
		else{
			$this->db->where('auth', $auth);
			$query = $this->db->get('api_clients');

			//client id & key matched
			if ( $query->num_rows() > 0 ){
				foreach ( $query->result() as $row ){
					$issued	 = $row->issued_at; 
					$exp	 = $row->expiry;
					$auth	 = $row->auth;
					$allowed = $row->allowed;
				}
				
				//check if expired
				if ( date('Y-m-d', time()) > date('Y-m-d',strtotime($exp)) ){
					$response['rc']			= 999;
					$response['success']	= false;
					$response['message'][] 	= 'Authorization Key is already expired.';			  
				}
				else{
					$auth_data = array(
						'issued_at' 	=> $issued,
						'valid_till' 	=> $exp,
						'allowed_calls' => $allowed
					);
					
					$response['rc']				= 0;
					$response['success']		= true;
					$response['data']['auth'] 	= $auth_data;  
				}
				//client id & key didn't matched	   			 
			}
			else{
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][] 	= 'Authorization Key is not valid, please try again.';
			}
		}
		
		return $response;
	}
	
	public function access_logs($data,$type)
	{
		//sanitized data
		$data = $this->security->xss_clean($data);
	
		if ( $type == 'login' ){
			//insert data
			$data['access_time'] = $this->utctimestamp;
			$this->db->insert('access_logs', $data);
			return $this->db->insert_id();
		}
		else{
			$this->db->where('log_id', $data['log_id']);
			$this->db->update('access_logs', array('exit_time' => $this->utctimestamp));
			
			if ( $this->db->affected_rows() > 0 ){
				$return['rc'] 			= 0;
				$return['success'] 		= true;
				$return['message'][]	= 'You have been logged out from the system.';
			}
			else{
				$return['rc'] 			= 999;
				$return['success'] 		= false;
				$return['message'][]	= 'Logout Failed.';
				$return['message'][]	= $data['log_id'];
			}
		}
		return $return;
	}


}
?>