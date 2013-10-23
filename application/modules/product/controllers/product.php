<?php
##==================================================
## Controller for Product
## @Author: Pinky Liwanagan
## @Date: 09-OCT-2013 
##==================================================

class Product extends CI_Controller {
	
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
	
	// display product list
	function productmanagement()
	{
		$res = $this->product_model->productList();
		
		//check if product list is pulled. if not, list is set to empty array
		$productList = ( $res->rc == 0 ) ? $res->data->productlist : array();
		
		$data['mainContent'] = 'productlist.tpl';
		
		$data['data'] = array(
			'baseUrl'		=> base_url(),
			'title'			=> 'Product',
			'msgClass'		=> $this->msgClass,
			'msgInfo'		=> $this->msgInfo,
			'productList'	=> $productList
		);
		
		$this->load->view($this->globalTpl, $data);	
	}
	
	// display product list
	function producttype()
	{
		$res = $this->product_model->productTypeList();
		
		//check if product type list is pulled. if not, list is set to empty array
		$productTypeList = ( $res->rc == 0 ) ? $res->data->producttypelist : array();
		
		$data['mainContent'] = 'producttype_list_view.tpl';
		
		$data['data'] = array(
			'baseUrl'			=> base_url(),
			'title'				=> 'Product Type',
			'msgClass'			=> $this->msgClass,
			'msgInfo'			=> $this->msgInfo,
			'productTypeList'	=> $productTypeList
		);
		
		$this->load->view($this->globalTpl, $data);	
	}
	
	// display product list
	function productarea()
	{
		$res = $this->product_model->productAreasList();
		
		//check if product type list is pulled. if not, list is set to empty array
		$productAreaList = ( $res->rc == 0 ) ? $res->data->productarealist : array();
		
		$data['mainContent'] = 'productarea_list_view.tpl';
		
		$data['data'] = array(
			'baseUrl'			=> base_url(),
			'title'				=> 'Product Area',
			'msgClass'			=> $this->msgClass,
			'msgInfo'			=> $this->msgInfo,
			'productAreaList'	=> $productAreaList
		);
		
		$this->load->view($this->globalTpl, $data);	
	}
	
	// display product option list
	function productoption()
	{
		$res = $this->product_model->productOptionList();
		echo "<pre />";
		print_r($res);
		exit;
		
		//check if product type list is pulled. if not, list is set to empty array
		// $productTypeList = ( $res->rc == 0 ) ? $res->data->producttypelist : array();
		
		// $data['mainContent'] = 'producttype_list_view.tpl';
		
		// $data['data'] = array(
			// 'baseUrl'			=> base_url(),
			// 'title'				=> 'Product Type',
			// 'msgClass'			=> $this->msgClass,
			// 'msgInfo'			=> $this->msgInfo,
			// 'productTypeList'	=> $productTypeList
		// );
		
		// $this->load->view($this->globalTpl, $data);	
	}
	
	// add product
	function addproduct()
	{	
		$this->load->library('form_validation');				
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('product_type_id', 'product_type_id', 'xss_clean|trim|required');
		$this->form_validation->set_rules('company_id', 'company_id', 'xss_clean|trim|required|required');
		$this->form_validation->set_rules('product_name', 'product_name', 'xss_clean|trim|required');
		$this->form_validation->set_rules('product_description', 'product_description', 'xss_clean|trim|required');
		$this->form_validation->set_rules('featured', 'featured', 'xss_clean|trim|required');
		$this->form_validation->set_rules('country_id', 'country_id', 'xss_clean|trim|required');
		$this->form_validation->set_rules('product_icon', 'product_icon', 'xss_clean|trim|required');
		$this->form_validation->set_rules('product_link', 'product_link', 'xss_clean|trim|required');
		$this->form_validation->set_rules('status', 'status', 'xss_clean|trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			
			$clist			 = $this->product_model->companyList();
			$type_list		 = $this->product_model->productTypeList();
			$area_list 		 = $this->product_model->productAreasList();
			$country_list	 = $this->product_model->countryList();
			
			foreach ($area_list->data->productarealist as $area):
			$arealist[$area->area_id] = $area->area_name;
			endforeach;
			
			foreach ($country_list->data->countrylist as $country):
			$countrylist[$country->country_id] = $country->short_name;
			endforeach;
			
			foreach ($type_list->data->producttypelist as $product):
			$product_type_list[$product->product_type_id] = $product->product_type;
			endforeach;
			
			foreach ($clist->data->companylist as $company):
			$company_list[$company->company_id] = $company->company_name;
			endforeach;

			$form_open 			 	= form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
			$product_name 		 	= form_input(array('name' => 'product_name', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Product Name'));
			$product_description 	= form_input(array('name' => 'product_description', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Product Description'));
			$product_icon 		 	= form_input(array('name' => 'product_icon', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Product Icon'));
			$product_link 		 	= form_input(array('name' => 'product_link', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Product Link'));
			$areaList			 	= form_dropdown('area_id', $arealist, '');
			$countryList			= form_dropdown('country_id', $countrylist, '');
			$productTypeList		= form_dropdown('product_type_id', $product_type_list, '');
			$companyList			= form_dropdown('company_id', $company_list, '');
			$form_close = form_close();

			$data['mainContent'] = 'product_add_view.tpl';

			$data['data'] = array(
			'baseUrl'				=> base_url(),
			'title'					=> 'Product',
			'msgClass'				=> $this->msgClass,
			'msgInfo'				=> $this->msgInfo,
			'product_name'  		=> $product_name,
			'product_description'	=> $product_description,
			'product_icon'			=> $product_icon,
			'product_link'			=> $product_link,
			'areaList'				=> $areaList,
			'countryList'			=> $countryList,
			'productTypeList'		=> $productTypeList,
			'companyList'			=> $companyList,
			'form_open'				=> $form_open,
			'form_close'			=> $form_close
			);
		
			$this->load->view('includes/template', $data);
		}
		else 	
		{
			$insert_data = array(
				'product_type_id' 		=> $this->input->post('product_type_id'),
				'company_id' 			=> $this->input->post('company_id'),
				'product_name' 			=> $this->input->post('product_name'),
				'product_description' 	=> $this->input->post('product_description'),
				'featured' 				=> $this->input->post('featured'),
				'country_id' 			=> $this->input->post('country_id'),
				'area_id' 				=> $this->input->post('area_id'),
				'product_icon' 			=> $this->input->post('product_icon'),
				'product_link' 			=> $this->input->post('product_link'),
				'status' 				=> $this->input->post('status')
			);
			
			$result = $this->product_model->productAdd($insert_data);
			
			if($result->rc == 0)
			{
				$msgClass = 'alert alert-success';
				$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Product has been added.';
			}
			else 
			{	
				$msgClass = 'alert alert-error';
				$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Add product failed.';			
			}
			
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo,
			);
			$this->session->set_flashdata($msginfo_arr);
			
			redirect('product/productmanagement/');
		}
		
	}
	
	// add product type
	function addproducttype()
	{	
		$this->load->library('form_validation');				
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('product_type', 'product_type', 'xss_clean|trim|required');
		$this->form_validation->set_rules('description', 'description', 'xss_clean|trim|required|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$product_type = form_input(array('name' => 'product_type','class' => 'input-xlarge focused','id' => 'focusedInput','placeholder' => 'Product Type'));
			$description  = form_input(array('name' => 'description','class' => 'input-xlarge focused','id' => 'focusedInput','placeholder' => 'Description'));
			$form_open 	  = form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
			$form_close   = form_close();
			
			$data['mainContent'] = 'producttype_add_view.tpl';

			$data['data'] = array(
			'baseUrl'				=> base_url(),
			'title'					=> 'Product',
			'msgClass'				=> $this->msgClass,
			'msgInfo'				=> $this->msgInfo,
			'product_type'			=> $product_type,
			'description'			=> $description,
			'form_open'				=> $form_open,
			'form_close'			=> $form_close,
			);
		
			$this->load->view('includes/template', $data);
		}
		else 	
		{
			$insert_data = array(
				'product_type' => $this->input->post('product_type'),
				'description'  => $this->input->post('description')
			);
			
			$result = $this->product_model->productTypeAdd($insert_data);
			
			if($result->rc == 0)
			{
				$msgClass = 'alert alert-success';
				$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Product Type has been added.';
			}
			else 
			{	
				$msgClass = 'alert alert-error';
				$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Add product type failed.';			
			}
			
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo,
			);
			$this->session->set_flashdata($msginfo_arr);
			
			redirect('product/producttype/');
		}
		
	}	
	
	// add product area
	function addproductarea()
	{	
		$this->load->library('form_validation');				
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('area_name', 'area_name', 'xss_clean|trim|required');
		$this->form_validation->set_rules('area_description', 'area_description', 'xss_clean|trim|required|required');
		$this->form_validation->set_rules('area_active', 'area_active', 'xss_clean|trim|required|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$area_name 		  	= form_input(array('name' => 'area_name','class' => 'input-xlarge focused','id' => 'focusedInput','placeholder' => 'Product Area'));
			$area_description  	= form_input(array('name' => 'area_description','class' => 'input-xlarge focused','id' => 'focusedInput','placeholder' => 'Description'));
			$form_open 	  		= form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
			$form_close   		= form_close();
			
			$data['mainContent'] = 'productarea_add_view.tpl';

			$data['data'] = array(
			'baseUrl'				=> base_url(),
			'title'					=> 'Product',
			'msgClass'				=> $this->msgClass,
			'msgInfo'				=> $this->msgInfo,
			'area_name'				=> $area_name,
			'area_description'		=> $area_description,
			'form_open'				=> $form_open,
			'form_close'			=> $form_close,
			);
		
			$this->load->view($this->globalTpl, $data);	
		}
		else 	
		{
			$insert_data = array(
				'area_name' 		=> $this->input->post('area_name'),
				'area_description'  => $this->input->post('area_description'),
				'area_active'  		=> $this->input->post('area_active')
			);
			
			$result = $this->product_model->productAreasAdd($insert_data);
			
			if($result->rc == 0)
			{
				$msgClass = 'alert alert-success';
				$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Product Area has been added.';
			}
			else 
			{	
				$msgClass = 'alert alert-error';
				$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Add product area failed.';			
			}
			
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo,
			);
			$this->session->set_flashdata($msginfo_arr);
			
			redirect('product/productarea/');
		}
		
	}	
	
	// edit product
	function editproduct()
	{		
		$product_info = $this->product_model->productInfo($this->uri->segment(3));
		
		if($product_info->rc == 0)
		{
			if($this->input->post('editnow',TRUE) == 'editnow')
			{
				$edit_data = array(
					'product_id'			=> $this->input->post('product_id'),
					'product_type_id' 		=> $this->input->post('product_type_id'),
					'company_id' 			=> $this->input->post('company_id'),
					'product_name' 			=> $this->input->post('product_name'),
					'product_description' 	=> $this->input->post('product_description'),
					'featured' 				=> $this->input->post('featured'),
					'country_id' 			=> $this->input->post('country_id'),
					'area_id' 				=> $this->input->post('area_id'),
					'product_icon' 			=> $this->input->post('product_icon'),
					'product_link' 			=> $this->input->post('product_link'),
					'status' 				=> $this->input->post('status')
				);
					
				$result = $this->product_model->productEdit($edit_data);
			
				if($result->rc == 0)
				{
					$msgClass = 'alert alert-success';
					$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Product Area has been added.';
				}
				else 
				{	
					$msgClass = 'alert alert-error';
					$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Add product area failed.';			
				}
				
				//set flash data for error/info message
				$msginfo_arr = array(
					'msgClass' => $msgClass,
					'msgInfo'  => $msgInfo,
				);
				$this->session->set_flashdata($msginfo_arr);
				
				redirect('product/productmanagement/');
				
			}
			else
			{
				
				$productInfo = $product_info->data->productinfo;
				
				$clist			 = $this->product_model->companyList();
				$type_list		 = $this->product_model->productTypeList();
				$area_list 		 = $this->product_model->productAreasList();
				$country_list	 = $this->product_model->countryList();
			
				foreach ($area_list->data->productarealist as $area):
				$arealist[$area->area_id] = $area->area_name;
				endforeach;
					
				foreach ($country_list->data->countrylist as $country):
				$countrylist[$country->country_id] = $country->short_name;
				endforeach;
					
				foreach ($type_list->data->producttypelist as $product):
				$product_type_list[$product->product_type_id] = $product->product_type;
				endforeach;
					
				foreach ($clist->data->companylist as $company):
				$company_list[$company->company_id] = $company->company_name;
				endforeach;
				
				$form_open 			 	= form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
				$product_name 		 	= form_input(array('name' => 'product_name', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Product Name', 'value' => $productInfo[0]->product_name));
				$product_description 	= form_input(array('name' => 'product_description', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Product Description' , 'value' => $productInfo[0]->product_description));
				$product_icon 		 	= form_input(array('name' => 'product_icon', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Product Icon' , 'value' => $productInfo[0]->product_icon));
				$product_link 		 	= form_input(array('name' => 'product_link', 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Product Link' , 'value' => $productInfo[0]->product_link));
				$areaList			 	= form_dropdown('area_id', $arealist, $productInfo[0]->area_id);
				$countryList			= form_dropdown('country_id', $countrylist, $productInfo[0]->country_id);
				$productTypeList		= form_dropdown('product_type_id', $product_type_list, $productInfo[0]->product_type_id);
				$companyList			= form_dropdown('company_id', $company_list, $productInfo[0]->company_id);
				$form_close = form_close();
								
				$data['mainContent'] = 'product_edit_view.tpl';

				$data['data'] = array(
					'baseUrl'				=> base_url(),
					'title'					=> 'Product',
					'msgClass'				=> $this->msgClass,
					'msgInfo'				=> $this->msgInfo,
					'product_name'  		=> $product_name,
					'product_description'	=> $product_description,
					'product_icon'			=> $product_icon,
					'product_link'			=> $product_link,
					'areaList'				=> $areaList,
					'countryList'			=> $countryList,
					'productTypeList'		=> $productTypeList,
					'companyList'			=> $companyList,
					'form_open'				=> $form_open,
					'form_close'			=> $form_close,
					'product_id'			=> $productInfo[0]->product_id
				);
				
				$this->load->view('includes/template', $data);
			}
		}
		else 
		{
			$msgClass = 'alert alert-error';
			$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Cannot get product info';
			
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo,
			);
			$this->session->set_flashdata($msginfo_arr);
			redirect('product/productmanagement/');
		}
	}
	
	// edit product
	function editproducttype()
	{		
		$product_info = $this->product_model->productTypeInfo($this->uri->segment(3));
	
		if($product_info->rc == 0)
		{
			if($this->input->post('editnow',TRUE) == 'editnow')
			{
				$edit_data = array(
					'product_type_id'	=> $this->input->post('product_type_id'),
					'product_type' 		=> $this->input->post('product_type'),
					'description'  		=> $this->input->post('description')
				);
					
				$result = $this->product_model->productTypeEdit($edit_data);
			
				if($result->rc == 0)
				{
					$msgClass = 'alert alert-success';
					$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Product Type has been added.';
				}
				else 
				{	
					$msgClass = 'alert alert-error';
					$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Add product type failed.';			
				}
				
				//set flash data for error/info message
				$msginfo_arr = array(
					'msgClass' => $msgClass,
					'msgInfo'  => $msgInfo,
				);
				$this->session->set_flashdata($msginfo_arr);
				
				redirect('product/producttype/');
				
			}
			else
			{
				$productType = $product_info->data->producttypeinfo[0];
				
				$product_type 		= form_input(array('name' => 'product_type','class' => 'input-xlarge focused','id' => 'focusedInput','placeholder' => 'Product Type' , 'value' => $productType->product_type));
				$description  		= form_input(array('name' => 'description','class' => 'input-xlarge focused','id' => 'focusedInput','placeholder' => 'Description', 'value' => $productType->description));
				$product_type_id	= $productType->product_type_id;
				$form_open 	  		= form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
				$form_close   		= form_close();
			
				$data['mainContent'] = 'producttype_edit_view.tpl';

				$data['data'] = array(
					'baseUrl'				=> base_url(),
					'title'					=> 'Product',
					'msgClass'				=> $this->msgClass,
					'msgInfo'				=> $this->msgInfo,
					'product_type'			=> $product_type,
					'description'			=> $description,
					'product_type_id'		=> $product_type_id,
					'form_open'				=> $form_open,
					'form_close'			=> $form_close,
					);
		
					$this->load->view($this->globalTpl, $data);	
			}
		}
		else 
		{
			$msgClass = 'alert alert-error';
			$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Cannot get product type info';
			
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo,
			);
			$this->session->set_flashdata($msginfo_arr);
			
			redirect('product/producttype/');
		}
	}
	
	// edit product area
	function editproductarea()
	{		
		$product_info = $this->product_model->productAreasInfo($this->uri->segment(3));
		
		if($product_info->rc == 0)
		{
			if($this->input->post('editnow',TRUE) == 'editnow')
			{
				$edit_data = array(
					'area_id'			=> $this->input->post('area_id'),	
					'area_name' 		=> $this->input->post('area_name'),
					'area_description'  => $this->input->post('area_description'),
					'area_active'  		=> $this->input->post('area_active')
				);
					
				$result = $this->product_model->productAreasEdit($edit_data);
			
				if($result->rc == 0)
				{
					$msgClass = 'alert alert-success';
					$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Product Area has been modified.';
				}
				else 
				{	
					$msgClass = 'alert alert-error';
					$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Edit product area failed.';			
				}
				
				//set flash data for error/info message
				$msginfo_arr = array(
					'msgClass' => $msgClass,
					'msgInfo'  => $msgInfo,
				);
				$this->session->set_flashdata($msginfo_arr);
				redirect('product/productarea/');
				
			}
			else
			{

				$productAreasInfo   = $product_info->data->productareainfo[0];
				
				$area_id			= $productAreasInfo->area_id;
				$area_name 		  	= form_input(array('name' => 'area_name','class' => 'input-xlarge focused','id' => 'focusedInput','placeholder' => 'Product Area', 'value' => $productAreasInfo->area_name));
				$area_description  	= form_input(array('name' => 'area_description','class' => 'input-xlarge focused','id' => 'focusedInput','placeholder' => 'Description' , 'value' => $productAreasInfo->area_description));
				$form_open 	  		= form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
				$form_close   		= form_close();
					
				$data['mainContent'] = 'productarea_edit_view.tpl';

				$data['data'] = array(
					'baseUrl'				=> base_url(),
					'title'					=> 'Edit Product Area',
					'messageInfo'			=> '',
					'area_id'				=> $area_id,
					'area_name'				=> $area_name,
					'area_description'		=> $area_description,
					'form_open'				=> $form_open,
					'form_close'			=> $form_close,
				);
		
				$this->load->view($this->globalTpl, $data);	
	
			}
		}
		else 
		{
			$msgClass = 'alert alert-error';
			$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'Cannot get product area info';
			
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo,
			);
			$this->session->set_flashdata($msginfo_arr);
			
			redirect('product/productarea/');
		}
	}
	
	function csvupload()
	{
		$this->load->library('form_validation');				
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('product_type_id', 'product_type_id', 'xss_clean|trim|required');
		$this->form_validation->set_rules('company_id', 'company_id', 'xss_clean|trim|required|required');
		$this->form_validation->set_rules('country_id', 'country_id', 'xss_clean|trim|required');
		$this->form_validation->set_rules('area_id', 'area_id', 'xss_clean|trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			
			$clist			 = $this->product_model->companyList();
			$type_list		 = $this->product_model->productTypeList();
			$area_list 		 = $this->product_model->productAreasList();
			$country_list	 = $this->product_model->countryList();
			
			foreach ($area_list->data->productarealist as $area):
			$arealist[$area->area_id] = $area->area_name;
			endforeach;
			
			foreach ($country_list->data->countrylist as $country):
			$countrylist[$country->country_id] = $country->short_name;
			endforeach;
			
			foreach ($type_list->data->producttypelist as $product):
			$product_type_list[$product->product_type_id] = $product->product_type;
			endforeach;
			
			foreach ($clist->data->companylist as $company):
			$company_list[$company->company_id] = $company->company_name;
			endforeach;

			$form_open 			 	= form_open_multipart('',array('class' => 'form-horizontal', 'method' => 'post'));
			$areaList			 	= form_dropdown('area_id', $arealist, '');
			$countryList			= form_dropdown('country_id', $countrylist, '');
			$productTypeList		= form_dropdown('product_type_id', $product_type_list, '');
			$companyList			= form_dropdown('company_id', $company_list, '');
			$form_close = form_close();

			$data['mainContent'] = 'csv_upload_view.tpl';

			$data['data'] = array(
			'baseUrl'				=> base_url(),
			'title'					=> 'CSV Upload',
			'msgClass'				=> $this->msgClass,
			'msgInfo'				=> $this->msgInfo,
			'areaList'				=> $areaList,
			'countryList'			=> $countryList,
			'productTypeList'		=> $productTypeList,
			'companyList'			=> $companyList,
			'form_open'				=> $form_open,
			'form_close'			=> $form_close
			);
		
			$this->load->view('includes/template', $data);
		}
		else
		{
			$file_element_name = 'productcsv';
			
			$config['upload_path'] 		= './assets/data';
			$config['allowed_types'] 	= 'csv|txt';
			$config['max_size'] 		= 1024 * 8;
			// $config['remove_spaces']	= TRUE;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload($file_element_name))
			{	
				$msgClass = 'alert alert-error';
				$msgInfo  = $this->upload->display_errors('', '');

			}
			else 
			{
				$data = $this->upload->data();
				$file_handle = fopen($data["full_path"], "rb");
				$ctr = 0;
		
				$insert_sql = " INSERT INTO products (product_type_id, company_id, product_name,product_description,featured,country_id,area_id,product_icon,product_link,`status`) VALUES ";
				
				while (!feof($file_handle) ) {
					$line_of_text = fgets($file_handle);
					$parts = explode(';', $line_of_text);

										
					if (count($parts) > 1 && $ctr > 0)
					{
						
							$product_type_id		= $this->input->post('product_type_id');
							$company_id      		= $this->input->post('company_id');
							$product_name	 		= trim($parts[0]);
							$product_description	= $parts[1];
							$featured				= $parts[2];
							$country_id				= $this->input->post('country_id');
							$area_id				= $this->input->post('area_id');
							$product_icon 			= $parts[3];
							$product_link 			= $parts[4];
							$status					= $parts[5];

						$insert_sql .= ' ('.$product_type_id.','.$company_id.',"'.$product_name.'","'.$product_description.'",'.$featured.','.$country_id.','.$area_id.',"'.$product_icon.'","'.$product_link.'",'.$status.'),';									
						// $insert_sql .= "($product_type_id,$company_id,'$product_name','$product_description',$featured,$country_id,$area_id,'$product_icon','$product_link',$status),";
					}
					
					$ctr++;
				}

				
				$query_string = substr($insert_sql, 0, -1);
				
				$sql_array = array('insert_sql' => $query_string);
				
				$result = $this->product_model->productAdd($sql_array);
						
				fclose($file_handle);
				unlink($data["full_path"]);
				
				if($result->rc == 0)
				{
					$msgClass = 'alert alert-success';
					$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'CSV upload success.';
				}
				else
				{
					$msgClass = 'alert alert-error';
					$msgInfo  = ( $result->message[0] ) ? $result->message[0] : 'CSV upload failed.';
				}

			}
			
			//set flash data for error/info message
			$msginfo_arr = array(
				'msgClass' => $msgClass,
				'msgInfo'  => $msgInfo,
			);
			$this->session->set_flashdata($msginfo_arr);
			
			redirect('product/csvupload/');
			
		}
	}
	
}