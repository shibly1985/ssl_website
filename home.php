<?php
session_start();

define('USER_NAME'                 ,$_SESSION['user_name']);
define('PASSWORD'                  ,$_SESSION['password']);
define('USER_TYPE'                 ,$_SESSION['user_type']);  

include "init.php";
include "db/db_config.php";
include "db/dbconfig.php";


include INCLUDE_FOLDER."/header.php";
include INCLUDE_FOLDER."/top_nav.php";
include INCLUDE_FOLDER."/content.php";
include INCLUDE_FOLDER."/footer.php";

?>