<?php
##==================================================
## Controller for Leads
## @Author: Pinky Liwanagan
## @Date: 07-NOV-2013 
##==================================================

class Leads extends CI_Controller {
	
	public $msgClass = '';
	public $msgInfo  = ''; 
	
	public function __construct() {
		parent::__construct();
		
		//check user session
		$this->hero_session->is_active_session();
		
		//template path
		$this->globalTpl = $this->config->item('global_tpl');
		
		//get flash data for error/info message
		$this->msgClass = ( $this->session->flashdata('msgClass') ) ? $this->session->flashdata('msgClass') : '';
		$this->msgInfo  = ( $this->session->flashdata('msgInfo') ) ? $this->session->flashdata('msgInfo') : '';
	}
	
	// display list of leads
	function leadslist()
	{
		$res = $this->leads_model->leadslist();
		
		//check if list is pulled. if not, list is set to empty array
		$leadsList = ( $res->rc == 0 ) ? $res->data->leadslist : array();
		
		$data['mainContent'] = 'leadslist_view.tpl';
		
		$data['data'] = array(
			'baseUrl'	=> base_url(),
			'title'		=> 'Leads',
			'msgClass'	=> $this->msgClass,
			'msgInfo'	=> $this->msgInfo,
			'leadsList'	=> $leadsList
		);
		
		$this->load->view($this->globalTpl, $data);
	}
	
	// display list of lead user
	function leaduser()
	{
		$res = $this->leads_model->leaduserlist();
		
		//check if list is pulled. if not, list is set to empty array
		$leadUserList = ( $res->rc == 0 ) ? $res->data->leaduserlist : array();
		
		$data['mainContent'] = 'leaduserlist_view.tpl';
		
		$data['data'] = array(
			'baseUrl'		=> base_url(),
			'title'			=> 'Leads',
			'msgClass'		=> $this->msgClass,
			'msgInfo'		=> $this->msgInfo,
			'leadUserList'	=> $leadUserList
		);
		
		$this->load->view($this->globalTpl, $data);
	}
	
	// display list of lead search
	function leadsearch()
	{
		$res = $this->leads_model->leadsearchlist();
		
		//check if list is pulled. if not, list is set to empty array
		$leadSearchList = ( $res->rc == 0 ) ? $res->data->leadsearchlist : array();
		
		$data['mainContent'] = 'leadsearchlist_view.tpl';
		
		$data['data'] = array(
			'baseUrl'		=> base_url(),
			'title'			=> 'Leads',
			'msgClass'		=> $this->msgClass,
			'msgInfo'		=> $this->msgInfo,
			'leadSearchList'	=> $leadSearchList
		);
		
		$this->load->view($this->globalTpl, $data);
	}
	
	// display list of leads
	function leadsadd()
	{
		$res = $this->leads_model->leadsAdd();
		echo "<pre />";
		print_r($res);
	}
	
	function exporttoexcel()
	{
		$type = $this->uri->segment(3);
		$res = $this->leads_model->$type();

		if ( $res->rc == 0 ){
			$data_arr = $res->data->$type;
			
			$export = $this->export->to_excel($data_arr,$type. date('Ymdhmi'));
		}
		
	}
	
}