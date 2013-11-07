<?php

class Company_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->locale 		= $this->session->userdata('locale');
		$this->restApiUrl 	= $this->config->item('rest_api_url');
		$this->apiAuthKey 	= $this->config->item('api_auth_key');
	}
	
	// Get all company
	function companyList()
	{
		$url = $this->restApiUrl. 'company/'.$this->locale.'/'.$this->apiAuthKey;
		return json_decode($this->call_rest_get($url,''));
	}
	
	// Get users information
	function companyInfo($companyId)
	{
		$url = $this->restApiUrl. 'company/'.$this->locale.'/'.$this->apiAuthKey.'/' . $companyId;
		return json_decode($this->call_rest_get($url,''));
	}
	
	
	// Edit user into the Admin Panel
	function edit_company($data)
	{
		$url = $this->restApiUrl. 'company/'.$this->locale.'/'.$this->apiAuthKey.'/' . $data['company_id'];
		$json = json_encode($data);
		return json_decode($this->call_rest_put($url,$json));
	}
	
	// Delete user into the Admin Panel
	function delete_user($userid)
	{
		$url = $this->restApiUrl. 'users/'.$this->locale.'/'.$this->apiAuthKey.'/' . $userid;
		return json_decode($this->call_rest_delete($url,''));
	}
	
	// Add user into the Admin Panel
	function companyAdd($data)
	{
		$url = $this->restApiUrl. 'company/'.$this->locale.'/'.$this->apiAuthKey;
		return json_decode($this->call_rest_post($url,$data));
	}
		
	// GET Request REST CALL
	function call_rest_get($url,$data='')
	{
		$result = $this->curl->simple_get($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}
	
	// POST Request REST CALL
	function call_rest_post($url,$data='')
	{
		$result = $this->curl->simple_post($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}
	
	// PUT Request REST CALL
	function call_rest_put($url,$data='')
	{
		$result = $this->curl->simple_put($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}
	
	
	// DELETE Request REST CALL
	function call_rest_delete($url,$data='')
	{
		$result = $this->curl->simple_delete($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}
	
	function companyImg($file_element_name)
	{
		$config['upload_path']   = './assets/uploadimages/companyImg';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] 	 = '100';
		$config['max_width'] 	 = '50';
		$config['max_height'] 	 = '50';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($file_element_name))
		{
			$response = array(
			   'rc' 	 => '999',
			   'msgInfo' => $this->upload->display_errors('', '')
			);
		}
		else
		{  
			$data = $this->upload->data();

			$response = array(
			   'rc' 	=> '0',
			   'data' 	=> $data
			 );
		}

		return $response;

	}

}