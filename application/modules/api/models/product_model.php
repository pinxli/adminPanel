<?php
##==================================================
## API Model for Company
## @Author: Pinky Liwanagan
## @Date: 09-OCT-2013 
##==================================================

class Product_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$utctimestamp = $this->db->query("SELECT UTC_TIMESTAMP() as utctimestamp");
		$this->utctimestamp = $utctimestamp->row()->utctimestamp;
		
		$locale		= ( strlen($this->uri->segment(3)) > 2 ) ? $this->uri->segment(4) : $this->uri->segment(3);
		$dbPrefix	= $this->config->item('db_prefix');
		
		//load database based on locale
		$this->db	= $this->load->database($dbPrefix.$locale,TRUE);
	}

	public function productList() {
		$this->db->from('products');
		$this->db->order_by('product_id', 'asc');
		$query = $this->db->get();
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					 = 0;
			$response['success']			 = true;
			$response['data']['productlist'] = $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Product List: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}

	public function productInfo($id) {
		
		$product = array(
					'product_id' 		=> $id
		);
		
		$this->db->where($product);
		$query = $this->db->get('products');
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					 = 0;
			$response['success']			 = true;
			$response['data']['productinfo'] = $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Product Info: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}	
	
	public function productAdd($data)
	{
		//sanitized data
		$data = $this->security->xss_clean($data);
	
		//insert data
		$query = $this->db->insert('products', $data);
		if ( $this->db->affected_rows() > 0 ){
			$savetextfile  			= $this->savetextfile($data);
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'Product has been successfully added.';
			$response['productId']  = $this->db->insert_id();
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to add product.';
		}
		return $response;
	}
	
	public function productEdit($id,$data)
	{	
		//sanitized data
		$data = $this->security->xss_clean($data);
		
		$this->db->where('product_id', $id);
		$this->db->update('products', $data); 
		
		if ( $this->db->affected_rows() > 0 ){
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'Product has been successfully modified.';
			$response['message'][]	= $data;
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to edit product.';
			$response['message'][]	= $data;
		}
		return $response;
	}
	
	
	public function savetextfile($data)
	{
		$date_now  = date('Ymd');
		$file_path = 'assets/data/data_'.$date_now.'.txt';
		$file_exist = file_exists($file_path);

		$type = ( $file_exist ) ? 'a' : 'w';

		$data = json_encode($data);

		$file = fopen($file_path, $type) or die("can't open file");
		fwrite($file,$data.PHP_EOL);
		fclose($file);
	}
	
	public function areaList() {
		$this->db->from('products_areas');
		$this->db->order_by('area_id', 'asc');
		$query = $this->db->get();
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					 = 0;
			$response['success']			 = true;
			$response['data']['productarealist'] = $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Product Area List: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}
	
	public function areaInfo($id) {
		$this->db->where('area_id', $id);
		$query = $this->db->get('products_areas');
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					 = 0;
			$response['success']			 = true;
			$response['data']['productareainfo'] = $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Product Area Info: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}	
	
	public function areaAdd($data)
	{
		//sanitized data
		$data = $this->security->xss_clean($data);
	
		//insert data
		$query = $this->db->insert('products_areas', $data);
		if ( $this->db->affected_rows() > 0 ){
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'Product Area has been successfully added.';
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to add product area.';
		}
		return $response;
	}
	
	public function areaEdit($id,$data)
	{	
		//sanitized data
		$data = $this->security->xss_clean($data);
		
		$this->db->where('area_id', $id);
		$this->db->update('products_areas', $data); 
		
		if ( $this->db->affected_rows() > 0 ){
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'Product Area has been successfully modified.';
			$response['message'][]	= $data;
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to edit product area.';
			$response['message'][]	= $data;
		}
		return $response;
	}
	
	public function typesList() {
		$this->db->from('products_types');
		$this->db->order_by('product_type_id', 'asc');
		$query = $this->db->get();
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					 = 0;
			$response['success']			 = true;
			$response['data']['producttypelist'] = $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Product Type List: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}
	
	public function typesInfo($id) {
		$this->db->where('product_type_id', $id);
		$query = $this->db->get('products_types');
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					 = 0;
			$response['success']			 = true;
			$response['data']['producttypeinfo'] = $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Product Type Info: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}	
	
	public function typesAdd($data)
	{
		//sanitized data
		$data = $this->security->xss_clean($data);
	
		//insert data
		$query = $this->db->insert('products_types', $data);
		if ( $this->db->affected_rows() > 0 ){
			$response['rc']				= 0;
			$response['success']		= true;
			$response['message'][]		= 'Product Type has been successfully added.';
			$response['producttypeId']  = $this->db->insert_id();
			#$response['data']		= $data;
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to add product type.';
		}
		return $response;
	}
	
	public function typesEdit($id,$data)
	{	
		//sanitized data
		$data = $this->security->xss_clean($data);
		
		$this->db->where('product_type_id', $id);
		$this->db->update('products_types', $data); 
		
		if ( $this->db->affected_rows() > 0 ){
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'Product Type has been successfully modified.';
			$response['message'][]	= $data;
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to edit product type.';
			$response['message'][]	= $data;
		}
		return $response;
	}
	
	
	public function productcsvUpload($data)
	{
		//sanitized data
		$sql = $this->security->xss_clean($data['sql']);
		
		$query = $this->db->query($sql);
		
		if ( $this->db->affected_rows() > 0 ){
			#$savetextfile  			= $this->savetextfile($data);
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'csv upload was successful.';
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to Upload.';
		}
		return $response;
	}
	
	
	

// end of the product model

}
?>