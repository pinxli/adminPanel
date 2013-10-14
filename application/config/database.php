<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = '127.0.0.1';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'compph';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

// $active_group = 'comphk';
// $active_record = TRUE;

$db['compph']['hostname'] = '127.0.0.1';
$db['compph']['username'] = 'root';
$db['compph']['password'] = '';
$db['compph']['database'] = 'compph';
$db['compph']['dbdriver'] = 'mysqli';
$db['compph']['dbprefix'] = '';
$db['compph']['pconnect'] = FALSE;
$db['compph']['db_debug'] = TRUE;
$db['compph']['cache_on'] = FALSE;
$db['compph']['cachedir'] = '';
$db['compph']['char_set'] = 'utf8';
$db['compph']['dbcollat'] = 'utf8_general_ci';
$db['compph']['swap_pre'] = '';
$db['compph']['autoinit'] = TRUE;
$db['compph']['stricton'] = FALSE;

// $active_group = 'comphk';
// $active_record = TRUE;

$db['comphk']['hostname'] = 'localhost';
$db['comphk']['username'] = 'root';
$db['comphk']['password'] = '';
$db['comphk']['database'] = 'comphk';
$db['comphk']['dbdriver'] = 'mysql';
$db['comphk']['dbprefix'] = '';
$db['comphk']['pconnect'] = TRUE;
$db['comphk']['db_debug'] = TRUE;
$db['comphk']['cache_on'] = FALSE;
$db['comphk']['cachedir'] = '';
$db['comphk']['char_set'] = 'utf8';
$db['comphk']['dbcollat'] = 'utf8_general_ci';
$db['comphk']['swap_pre'] = '';
$db['comphk']['autoinit'] = TRUE;
$db['comphk']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */