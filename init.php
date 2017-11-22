<?php
	$pageTitle="Welcome to BD HUT.";
	$copyright="Copyright BD HUT Bangladesh.";
	$loginName="Shibly";
	
	date_default_timezone_set('Asia/Dhaka');
    $dateTime = date('Y-m-d h:i:s', time());
	$date = date('Y-m-d', time());
	
	
	define('TIME'                               ,time());
	define('CURRENT_DATE_TIME'                  ,$dateTime);
	define('CURRENT_DATE'                       ,$date);
    define('SHOW_ERROR_LINE'                    ,'Yes');//when "Yes" then show error line
	define('SITE_NAME'                          ,'BD HUTS');
    define('DEVELOPER_PASSWORD'                 ,'ha#aba@a,la^95');
    define('SUPERADMIN_USER'                    ,1);
    define('MODULE_URL'                         ,'route');
    define('CURRENT_PAGE_LOC'     				,'routePages');
    define('INCLUDE_FOLDER'                     ,'incFiles');
    define('NUMERIC_INPUT'                      ,'onkeypress="return isNumberKey(event)"');
    define('ROOT_PATH'                          ,__DIR__);
	define('GET'                          		,$_GET);
	define('CURRENT_URL'                        ,$_SERVER['REQUEST_URI']);
	define('IMAGE_PATH'                         ,'content/images/');   
    
?>