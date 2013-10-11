<?php
##==================================================
## Model for Product
## @Author: Pinky Liwanagan
## @Date: 09-OCT-2013 
##==================================================

class Product_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	// get product list
	function productList()
	{
		$url = $this->config->item('rest_api_url') . 'products/98740';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function countryList()
	{
		$url = $this->config->item('rest_api_url') . 'country/98740';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function companyList()
	{
		$url = $this->config->item('rest_api_url') . 'company/98740';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	
	// get product information
	function productInfo($productId)
	{
		$url = $this->config->item('rest_api_url') . 'products/98740/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product
	function productAdd($data)
	{
		$url  = $this->config->item('rest_api_url') . 'products/98740/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// edit product
	function productEdit($data)
	{
		$url  = $this->config->item('rest_api_url') . 'products/98740/' . $data['product_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product type list
	function productTypeList()
	{
		$url = $this->config->item('rest_api_url') . 'producttype/98740/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// get product type information
	function productTypeInfo($productId)
	{
		$url = $this->config->item('rest_api_url') . 'producttype/98740/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product type
	function productTypeAdd($data)
	{
		$url  = $this->config->item('rest_api_url') . 'producttype/98740/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// edit product type
	function productTypeEdit($data)
	{
		$url  = $this->config->item('rest_api_url') . 'producttype/98740/' . $data['product_type_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product option list
	function productOptionList()
	{
		$url = $this->config->item('rest_api_url') . 'productoption/98740/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// get product option information
	function productOptionInfo($productId)
	{
		$url = $this->config->item('rest_api_url') . 'productoption/98740/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product type
	function productOptionAdd($data)
	{
		$url  = $this->config->item('rest_api_url') . 'productoption/98740/';
		$res  = $this->call_rest($url,$json,'post');
		return json_decode($res);
	}
	
	// edit product option
	function productOptionEdit($data)
	{
		$url  = $this->config->item('rest_api_url') . 'productoption/98740/' . $data['product_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product option list
	function productAreasList()
	{
		$url = $this->config->item('rest_api_url') . 'productarea/98740/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// get product option information
	function productAreasInfo($productId)
	{
		$url = $this->config->item('rest_api_url') . 'productarea/98740/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product type
	function productAreasAdd($data)
	{
		$url  = $this->config->item('rest_api_url') . 'productarea/98740/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// edit product option
	function productAreasEdit($data)
	{
		$url  = $this->config->item('rest_api_url') . 'productarea/98740/' . $data['area_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	function call_rest($url,$data,$method)
	{
		$function = 'simple_'.$method;
		$result = $this->curl->$function($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}

}