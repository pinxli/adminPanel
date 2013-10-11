<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');




/*API Routing*/
$route['api'] = "standard";

/*Authentication Routing*/
$route['api/authentication/get/(:any)'] = "authentication/get";
$route['api/authentication/status/(:any)'] = "authentication/status/$1";


$route['404_override'] = '';


/* End of file routes.php */
