<?php
$url = $_SERVER['REQUEST_URI']; 
if(!isset($_GET[MODULE_URL]))						
	include CURRENT_PAGE_LOC."/"."home.php";
else
	include CURRENT_PAGE_LOC."/".$_GET[MODULE_URL].".php";					
												
				
?>