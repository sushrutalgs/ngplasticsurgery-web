<?php
include "db_connect.php";

$categorySlug = !empty($_GET['categorySlug'])?$_GET['categorySlug']:'';
$categorySlug=check_input($con,$categorySlug);
 	
$stmt = $con->prepare('SELECT `category_slug` FROM `spc_category` WHERE `category_slug` = ? ');
$stmt->bind_param('s', $categorySlug);

  $result = $stmt->execute();
  $stmt->store_result();
  
  if ($stmt->num_rows == 0) {
  	echo "true";exit;
  } else {
	  echo "false";exit;
  }
  
  $stmt->close();
?>