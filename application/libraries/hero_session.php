<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hero_session
{
	
	public $CI = '';
	
	function __construct()
	{
		$CI =& get_instance();
	}
	
	function is_active_session()
	{
		$CI =& get_instance();
			
		$is_logged_in  = $CI->session->userdata('userid');
		
		if ($is_logged_in == '' && empty($is_logged_in)){
			echo '<title>Access Denied</title>';
			echo 'You don\'t have permission to access this page. <a href="'.base_url().'">Login</a>';	
			die();
		}
		
	}
	


	
}
?>