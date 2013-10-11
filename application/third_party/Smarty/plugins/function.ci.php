<?php
/**
 * Smarty {ci} function plugin
 * @package My Custom Blog
 * @subpackage SmartyPlugins
 * @author Kemal Fadillah <fadillzzz [_at_] gmail [_dot_] com>
 * @param array parameters
 * @param Smarty
 * @param object $template template object
 * @return string The returned string from CodeIgniter helper
 */

 /**
 Example usage:
 {ci helper='url' function='base_url'}

 The above example will call the base_url() function from the URL helper of CodeIgniter

 */
function smarty_function_ci( $params, $smarty )
{

    if ( ! function_exists( 'get_instance') ) 
    {
        return 'Can\'t get CI instance';
    }

    if ( ! function_exists( $params['function']) ) 
    {
        $CI = get_instance();
        $CI->load->helper( $params['helper'] );
    }

    $func = $params['function'];
    unset( $params['function'] );
    unset( $params['helper'] );
    return call_user_func_array( $func, array_values( $params ) );
    
}
?>  