<?php

class Settings_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	// Get all users
	function userlist()
	{
		$url = $this->config->item('rest_api_url') . 'users/98740';
		return json_decode($this->call_rest_get($url,''));
	}
	
	// Get users information
	function user_info($userid)
	{
		$url = $this->config->item('rest_api_url') . 'users/98740/' . $userid;
		return json_decode($this->call_rest_get($url,''));
	}
	
	
	// Edit user into the Admin Panel
	function edit_user($data)
	{
		$url = $this->config->item('rest_api_url') . 'users/98740/' . $data['userid'];
		$json = json_encode($data);
		return json_decode($this->call_rest_put($url,$json));
	}
	
	// Delete user into the Admin Panel
	function delete_user($userid)
	{
		$url = $this->config->item('rest_api_url') . 'users/98740/' . $userid;
		return json_decode($this->call_rest_delete($url,''));
	}
	
	// Add user into the Admin Panel
	function add_user($data)
	{
		$url = $this->config->item('rest_api_url') . 'users/98740';
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
	
	function logList()
	{
		$url = $this->config->item('rest_api_url') . 'users/accesslogs/98740';
		return json_decode($this->call_rest_get($url,''));
	}

	function explogList()
	{
		$url = $this->config->item('rest_api_url') . 'users/accesslogs/98740';
		return $this->call_rest_get($url,'');
	}

}