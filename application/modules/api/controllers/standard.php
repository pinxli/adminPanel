<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Standard extends CI_Controller {
/**
  * API Controller
  * What: It's controles all General API Functions
  * When: created  12-SEP-2013 
  * 	  modified 19-SEP-2013 
  * Who : created by Kamrul Hassan 
  *		: modified by K.H
 **/
 
	public function index()
	{
		$this->output->set_status_header(404, 'Not Found');
		show_404('ai', false);
		$data['abc']= 'Testing API';
		$this -> load -> library('parser');
		$this -> parser -> parse("index.tpl", $data);
	}
	

	
		
}

/* End of file pages.php/ Pages Controller */
