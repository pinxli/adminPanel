<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_functions extends Curl
{

	public $CI = '';
	public $curl = '';
	
	public function __construct() {
		$this->curl = new Curl();	
	}
	
	function dbLoad($locale){
		$CI =& get_instance();
		// $dbPrefix = $CI->config->items('db_prefix');
		// return $CI->load->database('comp'.$locale, TRUE);
	}
	
	function verticalTypes()
	{
		$CI =& get_instance();
		$locale = $CI->session->userdata('locale');
		$url = $CI->config->item('rest_api_url') . 'producttype/'.$locale.'/98740/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);

	}
	
	function call_rest($url,$data,$method)
	{
		$function = 'simple_'.$method;
		$result = $this->curl->$function($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}
	
	

}
?>