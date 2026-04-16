<?php
include "db_connect.php";

$oldPassword = !empty($_GET['oldPassword'])?$_GET['oldPassword']:'';
$oldPassword=check_input($con,$oldPassword);
$oldPassword =md5($oldPassword);
 	
$stmt = $con->prepare('SELECT `password` FROM `admin` WHERE `password` = ? AND `id` = ? ');
$stmt->bind_param('ss', $oldPassword, $_SESSION['userid']);

  $result = $stmt->execute();
  $stmt->store_result();
  
  if ($stmt->num_rows == 1) {
  	echo "true";exit;
  } else {
	  echo "false";exit;
  }
  
  $stmt->close();
?>