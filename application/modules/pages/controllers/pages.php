<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
/**
  * Pages Controller
  * What: It's controles all frontend static pages
  * When: created  12-SEP-2013 
  * 	  modified 12-SEP-2013 
  * Who : created by Kamrul Hassan 
 **/
 
	public function index()
	{
		$data['abc']= 'Testing Smarty';
		$this -> load -> library('parser');
		$this -> parser -> parse("welcome.tpl", $data);
	}
	
	
	public function contact()
	{
		$data['abc']= 'Testing Contact';
		$this -> load -> library('parser');
		$this -> parser -> parse("welcome.tpl", $data);
	}
	
	
		
}

/* End of file pages.php/ Pages Controller */
