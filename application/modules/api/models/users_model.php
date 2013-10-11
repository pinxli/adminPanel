<?php
class Users_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$utctimestamp = $this->db->query("SELECT UTC_TIMESTAMP() as utctimestamp");
		$this->utctimestamp = $utctimestamp->row()->utctimestamp;
	}

	public function getAllUsers() {
		$this->db->from('user');
		$this->db->order_by('userid', 'asc');
		$query = $this->db->get();
		 
		//user data exist
		if ($query->num_rows() > 0){
			$response['rc']					= 0;
			$response['success']			= true;
			$response['data']['userlist']	= $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}

	public function getUser($id) {
		$this->db->where('userid', $id);
		$query = $this->db->get('user');
		 
		//user data exist
		if ($query->num_rows() > 0){
			$response['rc']					= 0;
			$response['success']			= true;
			$response['data']['userinfo']	= $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}
	
	
	public function delUser($id) {
		$this->db->where('userid', $id);
		$query = $this->db->get('user');

		//user data exist
		if ($query->num_rows() > 0){
			$this->db->where('userid', $id);
			$querys = $this->db->delete('user');

			$return['rc'] 			= 0;
			$return['success'] 		= true;
			$return['message'][]	= 'User '.$id.' Successfully Removed';
				 
		}
		else{ //userdata don't exist	 

			$return['rc'] 			= 0;
			$return['success'] 		= true;
			$return['message'][]	= 'User '.$id.' does not exist.';
		}		

		return $return;
	}	



	public function addUser($data) {
		
		//check if email already exist.
		$this->db->where('email',$data['email']);
		$query = $this->db->get('user');
		
		if ($query->num_rows() > 0){
			$response['rc']			= 999;
			$response['message'][]	= 'Add user failed. Email already exist.';
		}
		else{
			//sanitized data
			$data = $this->security->xss_clean($data);
		
			//insert data
			$query = $this->db->insert('user', $data);
			if ( $this->db->affected_rows() > 0 ){
				$response['rc']			= 0;
				$response['message'][]	= 'User has been successfully added.';
			}
			else{
				$response['rc']			= 999;
				$response['message'][]	= 'Failed to add user.';
			}
		}
		return $response;
	}
	
	public function validateUser($email,$pw) {
		$arr_data = array(
			'email' 	=> $email,
			'password' 	=> $pw
		);
		
		$this->db->where($arr_data);
		$query = $this->db->get('user');
		 
		//user data exist
		if ($query->num_rows() > 0){
			//Arrange data for Jason
			$response['rc']				= 0;
			$response['success'] 		= true;
			$response['data']['user'] 	= $query->result()[0];
		//userdata don't exist	   			 
		}
		else{
			//Arrange data for Jason
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'User does not exist.';
		}
		return $response;
	
	}
	
	public function editUser($id,$data)
	{	
		//sanitized data
		$data = $this->security->xss_clean($data);
		
		$this->db->where('userid', $id);
		$this->db->update('user', $data); 
		
		if ( $this->db->affected_rows() > 0 ){
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'User has been successfully modified.';
			$response['message'][]	= $data;
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to edit user.';
			$response['message'][]	= $data;
		}
		return $response;
	}
	
	public function getaccessLogs() {
		$this->db->from('access_logs');
		$this->db->order_by('log_id', 'asc');
		$query = $this->db->get();
		 
		//user data exist
		if ($query->num_rows() > 0){
			$response['rc']					= 0;
			$response['success']			= true;
			$response['data']['loglist']	= $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}

	public function getaLog($id) {
		$this->db->where('log_id', $id);
		$query = $this->db->get('access_logs');
		 
		//user data exist
		if ($query->num_rows() > 0){
			$response['rc']					= 0;
			$response['success']			= true;
			$response['data']['loginfo']	= $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}
	
	
	
// end of the users model

}
?>