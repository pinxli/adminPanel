<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_functions
{

	function checkLocale()
	{
	}
	
	function dbLoad($locale){
		$CI =& get_instance();
		// $dbPrefix = $CI->config->items('db_prefix');
		// return $CI->load->database('comp'.$locale, TRUE);
	}

}
?>