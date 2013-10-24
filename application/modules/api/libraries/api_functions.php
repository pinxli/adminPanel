<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

##==================================================
## API Library
## @Author: Pinky Liwanagan
## @Date: 24-OCT-2013 
##==================================================

class Api_functions
{
	function apiLog($data,$method)
	{
		$CI = get_instance();
		
		$now = gmDate("Ymd");
		$logfile = 'apilogs/APILog_'.strtoupper($method).'_'.$now.'.log';
		
		if(file_exists($logfile)){ $fp = fopen($logfile, 'a+'); }
		else{ $fp = fopen($logfile, 'w'); }
		
		$pr_rsp = gmDate("Y-m-d\TH:i:s\Z")."\n";		
		$pr_rsp .= print_r($data,true);		
		
		fwrite($fp, "$pr_rsp\n\n");
		fclose($fp);
	}
}