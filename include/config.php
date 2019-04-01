<?php session_start();

date_default_timezone_set('Asia/calcutta');
$path=$_SERVER['DOCUMENT_ROOT'];
$docRootPath =$_SERVER["DOCUMENT_ROOT"];
$DomainName = "https://".$_SERVER['HTTP_HOST'];
 
if($_SERVER['HTTP_HOST']=='localkabadi.com'||$_SERVER['HTTP_HOST']=='www.localkabadi.com')
{include_once("srvdb.php");
define('DEBUG', true);
}
else
{include_once("srvdb.php");
define('DEBUG', false);}



if(DEBUG == true)
{
    ini_set('display_errors', 'On');
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	error_reporting(E_ALL);
}
else
{
    ini_set('display_errors', 'Off');
    error_reporting(0);
}



//tables
define("PICKUP", "pickup");  
define("STATE", "state");  
define("ADMIN", "user");  
define("MAT", "material");  
define("TIME", "time_solt");  
define("MAIN_CMS", $DomainName."/cms/dashboard.php");  

define("MAIL","localkabadi97@gmail.com");
define('PHN',7900209982);
?>