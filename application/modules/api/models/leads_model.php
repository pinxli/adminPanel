<?php
##==================================================
## API Model for Leads
## @Author: Pinky Liwanagan
## @Date: 07-NOV-2013 
##==================================================

class Leads_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$utctimestamp = $this->db->query("SELECT UTC_TIMESTAMP() as utctimestamp");
		$this->utctimestamp = $utctimestamp->row()->utctimestamp;
		
		$locale		= ( strlen($this->uri->segment(3)) > 2 ) ? $this->uri->segment(4) : $this->uri->segment(3);
		$dbPrefix	= $this->config->item('db_prefix');
		
		//load database based on locale
		$this->db	= $this->load->database($dbPrefix.$locale,TRUE);
	}

	public function leadsList() {
		$this->db->select('
			lu.lead_user_id,
			lu.first_name,
			lu.last_name,
			lu.email,
			lu.phone_no,
			pt.product_type,
			c.company_name,
			ls.search_key,
			ls.search_value
			')
			 ->from('lead_user lu')
			 ->join('leads l','l.lead_user_id = lu.lead_user_id','left')
			 ->join('lead_search ls','ls.lead_user_id = lu.lead_user_id','left')
			 ->join('companies c','c.company_id = l.company_id','left')
			 ->join('products_types pt','pt.product_type_id = l.vertical_type_id','left')
			 ->order_by('lu.lead_user_id', 'asc');
		$query = $this->db->get();
	
		// $this->db->from('lead_user')
			 // ->join('leads','leads.lead_user_id = lead_user.lead_user_id','left')
			 // ->join('lead_search','lead_search.lead_user_id = lead_user.lead_user_id','left')
			 // ->join('companies','companies.company_id = leads.company_id','left')
			 // ->join('products_types','products_types.product_type_id = leads.vertical_type_id','left')
			 // ->order_by('lead_id', 'asc');
		// $query = $this->db->get();
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					 = 0;
			$response['success']			 = true;
			$response['data']['leadslist'] = $query->result();
			$response['log_query']			 = str_replace('\n',' ',$this->db->last_query());	
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Leads List: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
			$response['log_query']	= str_replace('\n',' ',$this->db->last_query());	
		}
		return $response;
	}
	
	public function leadsAdd($lead_user_data,$lead_search_data,$leads_data)
	{
		//sanitized data
		$lead_user_data 	= $this->security->xss_clean($lead_user_data);
		$lead_search_data 	= $this->security->xss_clean($lead_search_data);
		$leads_data 		= $this->security->xss_clean($leads_data);
		
		$lead_user_data['timestamp'] = $this->utctimestamp;
		//insert lead user
		$res = $this->db->insert('lead_user', $lead_user_data);
		
	
		if ( $this->db->affected_rows() > 0 ){
			$lead_user_id = $this->db->insert_id();
	
			$lead_search_data['timestamp'] 		= $this->utctimestamp;
			$lead_search_data['lead_user_id']	= $lead_user_id;
			$leads_data['timestamp'] 			= $this->utctimestamp;
			$leads_data['lead_user_id'] 		= $lead_user_id;
			
			//insert lead user
			$res1 = $this->db->insert('lead_search', $lead_search_data);
			$res2 = $this->db->insert('leads', $leads_data);
			
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'Lead User has been successfully added.';
			$response['log_query']	= str_replace('\n',' ',$this->db->last_query());	
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to add Lead User.';
			$response['log_query']	= str_replace('\n',' ',$this->db->last_query());	
		}
		return $response;
	}

	public function leadUserList() {	
		$this->db->from('lead_user')->order_by('lead_user_id', 'asc');
		$query = $this->db->get();
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					  = 0;
			$response['success']			  = true;
			$response['data']['leaduserlist'] = $query->result();
			$response['log_query']			  = str_replace('\n',' ',$this->db->last_query());	
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Lead User List: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
			$response['log_query']	= str_replace('\n',' ',$this->db->last_query());	
		}
		return $response;
	}

	public function leadSearchList() {	
		$this->db->select('
			lu.first_name,
			lu.last_name,
			ls.lead_search_id,
			ls.search_key,
			ls.search_value,
			ls.timestamp
			')
			 ->from('lead_search ls')
			 ->join('lead_user lu', 'lu.lead_user_id = ls.lead_user_id')
			 ->order_by('ls.lead_search_id', 'asc');
		$query = $this->db->get();
		
		// $this->db->from('lead_search ls')
			 // ->join('lead_user lu', 'lu.lead_user_id = ls.lead_user_id')
			 // ->order_by('ls.lead_search_id', 'asc');
		// $query = $this->db->get();
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					    = 0;
			$response['success']			    = true;
			$response['data']['leadsearchlist'] = $query->result();
			$response['log_query']			    = str_replace('\n',' ',$this->db->last_query());	
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Lead Search List: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
			$response['log_query']	= str_replace('\n',' ',$this->db->last_query());	
		}
		return $response;
	}
	
// end of the company model

}
?>