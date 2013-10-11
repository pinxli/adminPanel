<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] 				= "admin";
$route['dashboard/members_area'] 			= "admin/dashboard";

/*Custom Routing*/
$route['contact'] 							= "pages/contact";
$route['api/users/([0-9]+)'] 				= "api/users/rest/$1"; 		//auth key
$route['api/users/([0-9]+)/([0-9]+)'] 		= "api/users/rest/$1/$2"; 	//auth key, id
$route['api/users'] 						= "api/users/rest";

$route['api/country/([0-9]+)']				= "api/country/rest/$1";
$route['api/country/([0-9]+)/([0-9]+)']		= "api/country/rest/$1/$2";	//auth key, id
$route['api/country']						= "api/country/rest";

$route['api/company/([0-9]+)']				= "api/company/rest/$1";
$route['api/company/([0-9]+)/([0-9]+)']		= "api/company/rest/$1/$2";	//auth key, id
$route['api/company']						= "api/company/rest";

$route['api/products/([0-9]+)']    			= "api/products/rest/$1";
$route['api/products/([0-9]+)/([0-9]+)']	= "api/products/rest/$1/$2"; //auth key, id
$route['api/products']      				= "api/products/rest";

$route['api/productarea/([0-9]+)']    		= "api/productarea/rest/$1";
$route['api/productarea/([0-9]+)/([0-9]+)'] = "api/productarea/rest/$1/$2"; //auth key, id
$route['api/productarea']      				= "api/productarea/rest";

$route['api/producttype/([0-9]+)']   		= "api/producttype/rest/$1";
$route['api/producttype/([0-9]+)/([0-9]+)']	= "api/producttype/rest/$1/$2"; //auth key, id
$route['api/producttype']      				= "api/producttype/rest";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */