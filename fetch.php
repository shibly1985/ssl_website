<?php
include "db/db_config.php";
if(isset($_POST['product_id']))
{
	$product_id=$_POST['product_id'];
	$query=("SELECT * FROM product_information WHERE product_id='$product_id'");
	$query_exc=mysqli_query($conn,$query);
	$data_fetch=mysqli_fetch_array($query_exc);
	echo json_encode($data_fetch);
}
?>