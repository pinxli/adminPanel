<?php
##==================================================
## API Model for Vertical Option Model
## @Author: Raphael Torres
## @Date: 23-OCT-2013 
##==================================================

class Verticaloption_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$utctimestamp = $this->db->query("SELECT UTC_TIMESTAMP() as utctimestamp");
		$this->utctimestamp = $utctimestamp->row()->utctimestamp;
		
		$locale		= ( strlen($this->uri->segment(3)) > 2 ) ? $this->uri->segment(4) : $this->uri->segment(3);
		$dbPrefix	= $this->config->item('db_prefix');
		
		//load database based on locale
		$this->db	= $this->load->database($dbPrefix.$locale,TRUE);
	}

	public function verticaloptionList() {
		$this->db->from('vertical_options');
		$this->db->order_by('product_type_id', 'asc');
		$query = $this->db->get();
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']							 = 0;
			$response['success']					 = true;
			$response['data']['verticaloptionlist']  = $query->result();
			$response['log_query']					 = str_replace('\n',' ',$this->db->last_query());
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Vertical Option: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
			$response['log_query']	= str_replace('\n',' ',$this->db->last_query());
		}
		return $response;
	}

	public function verticaloptionInfo($id) {
		
		$options = array(
					'product_type_id' => $id);
		
		$this->db->where($options);
		$query = $this->db->get('vertical_options');
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					 = 0;
			$response['success']			 = true;
			$response['data']['verticaloptioninfo'] = $query->result();
			$response['log_query']			= str_replace('\n',' ',$this->db->last_query());
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Vertical Option Info: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
			$response['log_query']			= str_replace('\n',' ',$this->db->last_query());
		}
		return $response;
	}	
	
	public function verticaloptionAdd($data)
	{
		//sanitized data
		$data = $this->security->xss_clean($data);
	
		//insert data
		$query = $this->db->insert('vertical_options', $data);
		if ( $this->db->affected_rows() > 0 ){
			$savetextfile  			= $this->savetextfile($data);
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'Vertical Option has been successfully added.';
			$response['log_query']			= str_replace('\n',' ',$this->db->last_query());
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to add vertical option.';
			$response['log_query']			= str_replace('\n',' ',$this->db->last_query());
		}
		return $response;
	}
	
	public function verticaloptionEdit($id,$data)
	{	
		//sanitized data
		$data = $this->security->xss_clean($data);
		
		$this->db->where('id', $id);
		$this->db->update('vertical_options', $data); 
		
		if ( $this->db->affected_rows() > 0 ){
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'Vertical Option has been successfully modified.';
			$response['message'][]	= $data;
			$response['log_query']			= str_replace('\n',' ',$this->db->last_query());
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to edit vertical option.';
			$response['message'][]	= $data;
			$response['log_query']			= str_replace('\n',' ',$this->db->last_query());
		}
		return $response;
	}
	
	
	public function savetextfile($data)
	{
		$date_now  = date('Ymd');
		$file_path = 'assets/data/vertical_options_'.$date_now.'.txt';
		$file_exist = file_exists($file_path);

		$type = ( $file_exist ) ? 'a' : 'w';

		$data = json_encode($data);

		$file = fopen($file_path, $type) or die("can't open file");
		fwrite($file,$data.PHP_EOL);
		fclose($file);
	}
	
// end of the product model

}
?>