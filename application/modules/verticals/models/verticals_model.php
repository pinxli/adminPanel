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
		$this->locale 		= $this->session->userdata('locale');
		$this->restApiUrl 	= $this->config->item('rest_api_url');
		$this->apiAuthKey 	= $this->config->item('api_auth_key');
	}
	
	function productSearch($data)
	{
		$url = $this->restApiUrl. 'products/advanceSearch/'.$this->locale.'/'.$this->apiAuthKey;
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// get product list
	function productList()
	{
		$url = $this->restApiUrl. 'products/'.$this->locale.'/'.$this->apiAuthKey;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function countryList()
	{
		$url = $this->restApiUrl. 'country/'.$this->locale.'/'.$this->apiAuthKey;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function companyList()
	{
		$url = $this->restApiUrl. 'company/'.$this->locale.'/'.$this->apiAuthKey;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	
	// get product information
	function productInfo($productId)
	{
		$url = $this->restApiUrl. 'products/'.$this->locale.'/'.$this->apiAuthKey.'/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product
	function productAdd($data)
	{
		$url  = $this->restApiUrl. 'products/'.$this->locale.'/'.$this->apiAuthKey.'/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// edit product
	function productEdit($data)
	{
		$url  = $this->restApiUrl. 'products/'.$this->locale.'/'.$this->apiAuthKey.'/' . $data['product_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product type list
	function productTypeList()
	{
		$url = $this->restApiUrl. 'producttype/'.$this->locale.'/'.$this->apiAuthKey.'/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// get product type information
	function productTypeInfo($productId)
	{
		$url = $this->restApiUrl. 'producttype/'.$this->locale.'/'.$this->apiAuthKey.'/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product type
	function productTypeAdd($data)
	{
		$url  = $this->restApiUrl. 'producttype/'.$this->locale.'/'.$this->apiAuthKey.'/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// edit product type
	function productTypeEdit($data)
	{
		$url  = $this->restApiUrl. 'producttype/'.$this->locale.'/'.$this->apiAuthKey.'/' . $data['product_type_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product option list
	function productOptionList()
	{
		$url = $this->restApiUrl. 'productoption/'.$this->locale.'/'.$this->apiAuthKey.'/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// get product option information
	function productOptionInfo($productId)
	{
		$url = $this->restApiUrl. 'productoption/'.$this->locale.'/'.$this->apiAuthKey.'/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product type
	function productOptionAdd($data)
	{
		$url  = $this->restApiUrl. 'productoption/'.$this->locale.'/'.$this->apiAuthKey.'/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// edit product option
	function productOptionEdit($data)
	{
		$url  = $this->restApiUrl. 'productoption/'.$this->locale.'/'.$this->apiAuthKey.'/' . $data['product_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product option list
	function productAreasList()
	{
		$url = $this->restApiUrl. 'productarea/'.$this->locale.'/'.$this->apiAuthKey.'/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// get product option information
	function productAreasInfo($productId)
	{
		$url = $this->restApiUrl. 'productarea/'.$this->locale.'/'.$this->apiAuthKey.'/' . $productId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	// add product type
	function productAreasAdd($data)
	{
		$url  = $this->restApiUrl. 'productarea/'.$this->locale.'/'.$this->apiAuthKey.'/';
		$res  = $this->call_rest($url,$data,'post');
		return json_decode($res);
	}
	
	// edit product option
	function productAreasEdit($data)
	{
		$url  = $this->restApiUrl. 'productarea/'.$this->locale.'/'.$this->apiAuthKey.'/' . $data['area_id'];
		$json = json_encode($data);
		$res  = $this->call_rest($url,$json,'put');
		return json_decode($res);
	}
	
	// get product list
	function verticaloptionList()
	{
		$url = $this->restApiUrl. 'verticaloption/'.$this->locale.'/'.$this->apiAuthKey;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function verticaloptionInfo($product_type_id)
	{
		$url = $this->restApiUrl. 'verticaloption/'.$this->locale.'/'.$this->apiAuthKey.'/' . $product_type_id;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	
	// add vertical options
	function verticalOptionAdd($data)
	{
		$url  = $this->restApiUrl. 'verticaloption/'.$this->locale.'/'.$this->apiAuthKey.'/';
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
	
	function checkProductType($productType)
	{
		$url = $this->restApiUrl. 'producttype/checkProductType/'.$this->locale.'/'.$this->apiAuthKey.'/' . rawurlencode($productType);
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function checkCountry($isoname)
	{
		$url = $this->restApiUrl. 'country/checkCountry/'.$this->locale.'/'.$this->apiAuthKey.'/' . rawurlencode($isoname);
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function checkCompany($company_name)
	{
		$url = $this->restApiUrl. 'company/checkCompany/'.$this->locale.'/'.$this->apiAuthKey.'/' . rawurlencode($company_name);
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function checkArea($area_name,$countryId)
	{
		$url = $this->restApiUrl. 'productarea/checkArea/'.$this->locale.'/'.$this->apiAuthKey.'/' . rawurlencode($area_name) . '/' . $countryId;
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function checkOptions($option_key,$producttypeId)
	{
		$url = $this->restApiUrl. 'productoption/checkOptions/'.$this->locale.'/'.$this->apiAuthKey.'/' . rawurlencode($option_key) . '/' . $producttypeId;
		$res = $this->call_rest($url,'','get');
		echo $url;
		return json_decode($res);
	}
	
	function call_rest($url,$data,$method)
	{
		$function = 'simple_'.$method;
		$result = $this->curl->$function($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}

}