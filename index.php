<?php 

/*
|---------------------------------------------------------------
| HZ FRAMEWORK
|---------------------------------------------------------------
| 
| -> PACKAGE / HZ FRAMEWORK
| -> AUTHOR / HASSAN AZZI
| -> DATE / 2015-04-01
| -> CODECANYON / http://codecanyon.net/user/hassanazy
| -> VERSION / 1.0.0
|
|---------------------------------------------------------------
| Copyright (c) 2015 , All rights reserved.
|---------------------------------------------------------------
*/

/*
| -------------------------------------------------------------------
| CONFIGURATION
| -------------------------------------------------------------------
*/
define("_sys", "HZ");
define("_version", "4.0");
if(is_readable("config/config.php"))
{
    require_once("config/config.php");
}
else
{
    exit("We cannot Read the <b>configuration</b> !");
}

/*
|---------------------------------------------------------------
| ERROR REPORTING
|---------------------------------------------------------------
|
| Different environments will require different levels of error reporting.
| By default development will show errors but testing and prooduction will hide them.
*/

if (!empty($GLOBALS["_SETTINGS"]["ENVIRONMENT"]))
{
	switch ($GLOBALS["_SETTINGS"]["ENVIRONMENT"])
	{
		case 'DEVELOPMENT':
            ini_set('display_errors', 1);
		break;
	
		case 'TESTING':
            error_reporting(0);
            ini_set('display_errors', 0);
        break;
        
		case 'PRODUCTION': 
			error_reporting(0);
            ini_set('display_errors', 0);
		break;

		default:
			exit("The application <b>Environment</b> is not set correctly !");
        break;
	}
}

/*
|---------------------------------------------------------------
| TIMEZONE
|---------------------------------------------------------------
*/
if(!empty($GLOBALS["_SETTINGS"]["TIMEZONE"]))
{
    date_default_timezone_set($GLOBALS["_SETTINGS"]["TIMEZONE"]);
} 

/*
|---------------------------------------------------------------
| AUTOLOAD
|---------------------------------------------------------------
*/
if(is_readable("system/autoload.php"))
{
    require_once("system/autoload.php"); 
}
else
{
    exit("We cannot Read <b>autoload</b> file !");
}

?>