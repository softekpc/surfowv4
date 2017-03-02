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

define("_sys", "HZ");
define("_version", "4.0.1");

error_reporting(0);
ini_set('display_errors', 0);

require_once("config/config.php");
require_once("system/required/install.functions.php");
date_default_timezone_set($GLOBALS["_SETTINGS"]["TIMEZONE"]);

if(get_version() == _version)
{
    header("location: surfow.php");
    exit();
}

if(phpversion() < 5.4)
{
    header("location: surfow.php?error=phpversion");
    exit();
}

if(!Db::check())
{
    header("location: surfow.php?error=connect");
}

@chmod("system/storage/logs/database/", 0777);
@chmod("system/storage/logs/db/", 0777);
@chmod("system/storage/sessions/", 0777);
@chmod("system/storage/usersonline/admins/", 0777);
@chmod("system/storage/usersonline/users/", 0777);
@chmod("system/storage/usersonline/robots/", 0777);
@chmod("system/storage/usersonline/guests/", 0777);
@chmod("system/storage/usersonline/apis/", 0777);

if(!empty($_GET["process"]))
{
    $version = get_version();
    switch($version)
    {
        case '1.0':
            Db::import(file_get_contents("system/storage/db/v1.sql"));
            require_once("system/models/BaseModel.php");
            require_once("system/models/Update.model.php");
            Update::fix_payments_after_update();
            Db::query("DELETE * FROM exchange");
            header("location: ".$GLOBALS["_SETTINGS"]["ADMINPATH"]."/update?v="._version);
        break;
        case '2.0':
            Db::import(file_get_contents("system/storage/db/v2.sql"));
            Db::query("DELETE * FROM exchange");
            header("location: ".$GLOBALS["_SETTINGS"]["ADMINPATH"]."/update?v="._version);
        break;
        case '3.0':
            Db::import(file_get_contents("system/storage/db/v3.sql"));
            Db::query("DELETE * FROM exchange");
            header("location: ".$GLOBALS["_SETTINGS"]["ADMINPATH"]."/update?v="._version);
        break;
        case '4.0':
            header("location: surfow.php");
        break;
        default:
            header("location: surfow.php");
        break;
    }
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Surfow - Update</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="uploads/docs/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="uploads/docs/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="uploads/docs/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="uploads/docs/assets/css/ie9.css" /><![endif]-->
	</head>
	<body style="background: url(uploads/docs/images/banner.jpg);background-color: #282A27; background-repeat: no-repeat;  background-size: 100% 300%; background-attachment: fixed;" >
    <div class="top">
        <div id="logo">
		<h1 id="title">SURFOW</h1>
		<p>Traffic Exchange System</p>               
		</div>
    </div>
    <h1 style="color: #fff; text-align: center; font-size: 4em;" >Updating</h1>
    <center>
    <a href="Javascript::void(0);" onclick="window.location = '<?php echo $_SERVER["PHP_SELF"]; ?>?process=update';" class="button scrolly">Update</a>
    </center>
    <ul class="copyright">
		<li> <center> -- Version V4.0 -- </center></li>
	</ul>
    </body>
</html>