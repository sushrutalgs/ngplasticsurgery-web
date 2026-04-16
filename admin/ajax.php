<?php 
include_once "db_connect.php";
$action = (!empty($_REQUEST['action'])) ? $_REQUEST['action'] : "";

if($action == "get_cat")
{
	// echo '<pre>';
	// print_r($_REQUEST);
	// exit;
	
	$mane_cat_query = mysqli_query($con, "SELECT `category_id`,`category_name` FROM `med-category` WHERE parent_cat_id = '".$_REQUEST['categoryId']."'");
	$html = "";
    while ($mane_cat_data = mysqli_fetch_assoc($mane_cat_query)) { 
    	$html .= "<option value='".$mane_cat_data['category_id']."'>".$mane_cat_data['category_name']."</option>";
    }
    echo json_encode($html);
    exit;
}

?>