<?php

class Company extends CI_Controller {
	
	
	public function __construct() {
		parent::__construct();
		
		//template path
		$this->globalTpl = $this->config->item('global_tpl');
		
		//get flash data for error/info message
		$this->msgClass = ( $this->session->flashdata('msgClass') ) ? $this->session->flashdata('msgClass') : '';
		$this->msgInfo  = ( $this->session->flashdata('msgInfo') ) ? $this->session->flashdata('msgInfo') : '';
	}
	
	// display all users
	function companymanagement()
	{
		$res = $this->company_model->companyList();
		
		//check if company list is pulled. if not, list is set to empty array
		$companyList = ( $res->rc == 0 ) ? $res->data->companylist : array();
		
		$data['mainContent'] = 'companylist.tpl';
		
		$data['data'] = array(
			'baseUrl'		=> base_url(),
			'title'   		=> 'Company List',
			'companyList'	=> $companyList
		);
		
		$this->load->view($this->globalTpl, $data);	
	}
	
	// add company
	function addcompany()
	{	
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('company_name', 'company_name', 'xss_clean|trim|required');
		$this->form_validation->set_rules('company_email', 'company_email', 'xss_clean|trim|required|valid_email');
		$this->form_validation->set_rules('company_phone', 'company_phone', 'xss_clean|trim|required');
		$this->form_validation->set_rules('company_fax', 'company_fax', 'xss_clean|trim|required');
		$this->form_validation->set_rules('company_address', 'company_address', 'xss_clean|trim|required');
		$this->form_validation->set_rules('company_contact', 'company_contact', 'xss_clean|trim|required');
		$this->form_validation->set_rules('company_logo', 'company_logo', 'xss_clean|trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			//set forms open, close and inputs
			$form_open 			= form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
			$company_name 		= form_input(array('name' => 'company_name', 	'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Company Name'));
			$company_email 		= form_input(array('name' => 'company_email', 	'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Company Email'));
			$company_phone 		= form_input(array('name' => 'company_phone', 	'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Phone'));
			$company_fax 		= form_input(array('name' => 'company_fax', 	'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Fax'));
			$company_address 	= form_input(array('name' => 'company_address', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Address'));
			$company_contact 	= form_input(array('name' => 'company_contact', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Contact Person'));
			$company_logo 		= form_input(array('name' => 'company_logo', 	'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Logo'));
			$form_close 		= form_close();

			$data['mainContent'] = 'company_add_view.tpl';
			
			$data['data'] = array(
				'baseUrl'			=> base_url(),
				'title'   			=> 'Company Add',
				'msgClass'  		=> $this->msgClass,
				'msgInfo'   		=> $this->msgInfo,
				'form_open'   		=> $form_open,
				'company_name'   	=> $company_name,
				'company_email'   	=> $company_email,
				'company_phone'   	=> $company_phone,
				'company_fax'   	=> $company_fax,
				'company_address'	=> $company_address,
				'company_contact'	=> $company_contact,
				'company_logo'   	=> $company_logo,
				'form_close'   		=> $form_close
			);
		
			$this->load->view($this->globalTpl, $data);	
		}
		else 	
		{
			$insert_data = array(
				'company_name' 			=> $this->input->post('company_name'),
				'company_email' 		=> $this->input->post('company_email'),
				'company_phone' 		=> $this->input->post('company_phone'),			
				'company_fax' 			=> $this->input->post('company_fax'),
				'company_address' 		=> $this->input->post('company_address'),	
				'company_contact' 		=> $this->input->post('company_contact'),
				'company_logo' 			=> $this->input->post('company_logo'),
				'company_country_id' 	=> 1
			);
			
			$result = $this->company_model->companyAdd($insert_data);
			
			if($result->rc == 0)
			{
				$msgClass = 'alert alert-success';
				$msgInfo  = ( $result->message ) ? $result->message : 'Company has been added.';
			}
			else 
			{	
				$msgClass = 'alert alert-error';
				$msgInfo  = ( $result->message ) ? $result->message : 'Add company failed.';			
			}
			
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo,
			);
			$this->session->set_flashdata($msginfo_arr);
			
			redirect('company/companymanagement/');
		}
					
	}	
	
	// edit user
	function editcompany()
	{		
		$company_info = $this->company_model->companyInfo($this->uri->segment(3));
		
		if($company_info->rc == 0)
		{
			if($this->input->post('editnow',TRUE) == 'editnow')
			{
				$edit_data = array(
					'company_id' => $this->input->post('company_id'),
					'company_name' => $this->input->post('company_name'),
					'company_email' => $this->input->post('company_email'),
					'company_phone' => $this->input->post('company_phone'),			
					'company_fax' => $this->input->post('company_fax'),
					'company_address' => $this->input->post('company_address'),	
					'company_contact' => $this->input->post('company_contact'),
					'company_logo' => $this->input->post('company_logo'),
					'company_country_id' => 1);
						
				$result = $this->company_model->edit_company($edit_data);
			
				if($result->rc == 0)
				{
					$msgClass = 'alert alert-success';
					$msgInfo  = ( $result->message ) ? $result->message : 'Company has been modified.';
				}
				else 
				{	
					$msgClass = 'alert alert-error';
					$msgInfo  = ( $result->message ) ? $result->message : 'Add company failed.';			
				}
				
				//set flash data for error/info message
				$msginfo_arr = array(
					'msgClass' => $msgClass,
					'msgInfo'  => $msgInfo,
				);
				$this->session->set_flashdata($msginfo_arr);
				
				redirect('company/companymanagement/');
				
			}
			else
			{
				$company_info_res = $company_info->data->companyinfo[0];
				
				//set forms open, close and inputs
				$form_open 			= form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
				$company_name 		= form_input(array('name' => 'company_name',	'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Company Name' ,	'value' => $company_info_res->company_name));
				$company_email 		= form_input(array('name' => 'company_email',	'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Company Email' ,	'value' => $company_info_res->company_email));
				$company_phone 		= form_input(array('name' => 'company_phone',	'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Phone' , 		 	'value' => $company_info_res->company_phone));
				$company_fax 		= form_input(array('name' => 'company_fax',		'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Fax' ,			'value' => $company_info_res->company_fax));
				$company_address 	= form_input(array('name' => 'company_address', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Address' ,		'value' => $company_info_res->company_address));
				$company_contact 	= form_input(array('name' => 'company_contact', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Contact Person' ,	'value' => $company_info_res->company_contact));
				$company_logo		= form_input(array('name' => 'company_logo',	'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Logo' ,			'value' => $company_info_res->company_logo));
				$form_close 		= form_close();
				
				$data['mainContent'] = 'company_edit_view.tpl';
				
				$data['data'] = array(
					'baseUrl'			=> base_url(),
					'title'   			=> 'Company Edit',
					'msgClass'  		=> $this->msgClass,
					'msgInfo'   		=> $this->msgInfo,
					'form_open'   		=> $form_open,
					'company_name'   	=> $company_name,
					'company_email'   	=> $company_email,
					'company_phone'   	=> $company_phone,
					'company_fax'   	=> $company_fax,
					'company_address'	=> $company_address,
					'company_contact'	=> $company_contact,
					'company_logo'   	=> $company_logo,
					'form_close'   		=> $form_close
				);
		
				$this->load->view($this->globalTpl, $data);	
			}
		}
		else 
		{
			$msgClass = 'alert alert-error';
			$msgInfo  = ( $result->message ) ? $result->message : 'Cannot get Company Info';	
				
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo,
			);
			$this->session->set_flashdata($msginfo_arr);
			
			redirect('company/companymanagement/');
		}
	}
	
}