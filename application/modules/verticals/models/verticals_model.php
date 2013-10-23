<?php
##==================================================
## Model for Verticals
## @Author: Raphael Torres
## @Date: 22-OCT-2013 
##==================================================

class Verticals_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->locale = $this->session->userdata('locale');
	}
	
	// get product list
	function productList()
	{
		$url = $this->config->item('rest_api_url') . 'products/'.$this->locale.'/98740';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function countryList()
	{
		$url = $this->config->item('rest_api_url') . 'country/'.$this->locale.'/98740';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function companyList()
	{
		$url = $this->config->item('rest_api_url') . 'company/'.$this->locale.'/98740';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	
	// get product information
	function productInfo($productId)
	{
		$url = $this->config->item('rest_api_url') . 'products/'.$this->locale.'/98740/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product
	function productAdd($data)
	{
		$url  = $this->config->item('rest_api_url') . 'products/'.$this->locale.'/98740/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// edit product
	function productEdit($data)
	{
		$url  = $this->config->item('rest_api_url') . 'products/'.$this->locale.'/98740/' . $data['product_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product type list
	function productTypeList()
	{
		$url = $this->config->item('rest_api_url') . 'producttype/'.$this->locale.'/98740/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// get product type information
	function productTypeInfo($productId)
	{
		$url = $this->config->item('rest_api_url') . 'producttype/'.$this->locale.'/98740/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product type
	function productTypeAdd($data)
	{
		$url  = $this->config->item('rest_api_url') . 'producttype/'.$this->locale.'/98740/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// edit product type
	function productTypeEdit($data)
	{
		$url  = $this->config->item('rest_api_url') . 'producttype/'.$this->locale.'/98740/' . $data['product_type_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product option list
	function productOptionList()
	{
		$url = $this->config->item('rest_api_url') . 'productoption/'.$this->locale.'/98740/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// get product option information
	function productOptionInfo($productId)
	{
		$url = $this->config->item('rest_api_url') . 'productoption/'.$this->locale.'/98740/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product type
	function productOptionAdd($data)
	{
		$url  = $this->config->item('rest_api_url') . 'productoption/'.$this->locale.'/98740/';
		$res  = $this->call_rest($url,$json,'post');
		return json_decode($res);
	}
	
	// edit product option
	function productOptionEdit($data)
	{
		$url  = $this->config->item('rest_api_url') . 'productoption/'.$this->locale.'/98740/' . $data['product_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product option list
	function productAreasList()
	{
		$url = $this->config->item('rest_api_url') . 'productarea/'.$this->locale.'/98740/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// get product option information
	function productAreasInfo($productId)
	{
		$url = $this->config->item('rest_api_url') . 'productarea/'.$this->locale.'/98740/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product type
	function productAreasAdd($data)
	{
		$url  = $this->config->item('rest_api_url') . 'productarea/'.$this->locale.'/98740/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// edit product option
	function productAreasEdit($data)
	{
		$url  = $this->config->item('rest_api_url') . 'productarea/'.$this->locale.'/98740/' . $data['area_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product list
	function verticaloptionList()
	{
		$url = $this->config->item('rest_api_url') . 'verticaloption/'.$this->locale.'/98740';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function verticaloptionInfo($product_type_id)
	{
		$url = $this->config->item('rest_api_url') . 'verticaloption/'.$this->locale.'/98740/' . $product_type_id;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	
	// add vertical options
	function verticalOptionAdd($data)
	{
		$url  = $this->config->item('rest_api_url') . 'verticaloption/'.$this->locale.'/98740/';
		$res  = $this->call_rest($url,$data,'post');
		
		return json_decode($res);
	}
	
	
	
	function productImg($file_element_name)
	{
		$config['upload_path'] 		= './assets/uploadimages/productImg';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']	= '100';
		$config['max_width'] = '50';
		$config['max_height'] = '50';
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload($file_element_name))
		{
			$response = array(
							'rc' => '999',
							'msgInfo' => $this->upload->display_errors('', ''));
			

		}
		else
		{		
			$data = $this->upload->data();
			
			$response = array(
							'rc' => '0',
							'data' => $data);
		}
		
		return $response;
		
	}
	
	function call_rest($url,$data,$method)
	{
		$function = 'simple_'.$method;
		$result = $this->curl->$function($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}

}