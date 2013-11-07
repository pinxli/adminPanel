<?php
##==================================================
## Model for Leads
## @Author: Pinky Liwanagan
## @Date: 07-NOV-2013 
##==================================================

class Leads_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->locale 		= $this->session->userdata('locale');
		$this->restApiUrl 	= $this->config->item('rest_api_url');
		$this->apiAuthKey 	= $this->config->item('api_auth_key');
	}
	
	//get list of leads
	function leadslist()
	{
		$url = $this->restApiUrl. 'leads/'.$this->locale.'/'.$this->apiAuthKey;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	//get list of leads
	function leaduserlist()
	{
		$url = $this->restApiUrl. 'leaduser/'.$this->locale.'/'.$this->apiAuthKey;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}	
	
	//get list of leads
	function leadsearchlist()
	{
		$url = $this->restApiUrl. 'leadsearch/'.$this->locale.'/'.$this->apiAuthKey;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}	
	
	//add leads
	function leadsAdd($data='')
	{
		$url  = $this->restApiUrl. 'leads/'.$this->locale.'/'.$this->apiAuthKey.'/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	function call_rest($url,$data,$method)
	{
		$function = 'simple_'.$method;
		$result = $this->curl->$function($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}

}