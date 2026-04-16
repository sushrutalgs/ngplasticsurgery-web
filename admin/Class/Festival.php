<?php 
class Festival
{
	public $conn;

	function __construct()
	{
		// Create connection
		$this->conn = mysqli_connect(DBHOST_NAME, DBUSER_NAME, DBPASSWORD, DBDATABASE_NAME);

		// Check connection
		if (!$this->conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
	}
	function Check_data($data)
  	{
  		$data = trim(addslashes($data));
  		return  mysqli_real_escape_string($this->conn, $data);
  	}
  	function insertQuery($table, $data)
	{
	    $key = implode(',', array_keys($data));
	    $value = "'" . implode( "','", array_values($data)) ."'";
	    $sqlQuery = "INSERT INTO $table ($key) VALUES ($value)";
	    $result = mysqli_query($this->conn, $sqlQuery);
	    if($result){
	        return true;
	    }else{
	        return false;
	    }
	}
	function updateQuery($tableName, $data, $condition) 
	{   
	    // Construct the update query
	    $updateQuery = "UPDATE $tableName SET ";
	    foreach ($data as $key => $value) {
	        $updateQuery .= "$key = '$value', ";
	    }
	    $updateQuery = rtrim($updateQuery, ', ');

	    // Add condition to the query
	    $updateQuery .= " WHERE $condition";
	    
	    // Execute the query
	    if (mysqli_query($this->conn, $updateQuery)) {
	    	return true;
	   	} else {
	        return false;
	    }
	}
	function selectQuery($table, $column="*")
	{
		$sql = "SELECT $column FROM $table";
		$result = mysqli_query($this->conn, $sql);
		$response = array();
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$response[] = $row; 
		    }
		} 
		return $response;
	}
	function AddEditFestival($data=array())
	{

	   $edit_id = (!empty($data['id'])) ? base64_decode($data['id']) : "";

	   $festivalName = $this->Check_data($data['festivalName']);
	   $festivalSlug = $this->Check_data($data['festivalSlug']);
	   $mainDescription = $this->Check_data($data['mainDescription']);
	   $festivalproductId = (!empty($data['festivalproductId'])) ? implode(',', $data['festivalproductId']) : "";
	 
	    if(!empty($edit_id))
	    {
			$WHERE = " AND `festival_id`!='".$edit_id."'";
		} 
	   $result2=mysqli_query($this->conn,"SELECT `festival_slug` FROM `spc_festival` WHERE `festival_slug`='".$festivalSlug."' $WHERE ") or die(mysqli_error($con));
	   $count=mysqli_num_rows($result2);
	   
	   if($count>0) { 
	      echo '<script type="text/javascript">';
	      echo 'alert("Festival Slug already Present. Please enter another Festival Slug");';
	      echo 'window.location.href = "view-festival.php";';
	      echo '</script>';
	      exit();
	   }

	   $Product_image = "FestivalBanner";
	   if(!file_exists(".." . DIRECTORY_SEPARATOR . $Product_image) && !is_dir(".." . DIRECTORY_SEPARATOR . $Product_image)) {
	      mkdir(".." . DIRECTORY_SEPARATOR . $Product_image);
	   }
	   
	   $product_array = array(
	       "festival_name" => $festivalName,
	       "festival_slug" => $festivalSlug,
	       "product_id" => $festivalproductId,
	       "description" => $mainDescription,  
	   );
	   if(!empty($_FILES['main_image']['name']))
	   {
	      $extension = strtolower(pathinfo($_FILES['main_image']['name'], PATHINFO_EXTENSION));
	      $mainfilename = (!empty($festivalName)) ?  str_replace(' ', '', $festivalName)."_".time().".".$extension : "product".time().".".$extension;
	      $mainfpath=".." . DIRECTORY_SEPARATOR . $Product_image . DIRECTORY_SEPARATOR . $mainfilename;
	      move_uploaded_file($_FILES["main_image"]["tmp_name"], $mainfpath);
	      $product_array["main_image"] = $mainfilename;
	   }
	
	   if(empty($edit_id))
		{
			$product_sql = $this->insertQuery('spc_festival',$product_array);
		  	if($product_sql) {
				$_SESSION['msg'] = 'data_uploaded';
			} 
		}
		else
		{
			$condition = " festival_id='".$edit_id."' ";
			$product_sql = $this->updateQuery('spc_festival',$product_array,$condition);
			if($product_sql) {
				$_SESSION['msg'] = 'data_updated';
			}
		}
		echo '<script type="text/javascript">';
	    echo 'window.location.href = "view-festival.php";';
	    echo '</script>';
	    exit();
	}

	function DeleteFestival($data=array())
	{
		$festival_id=base64_decode($data['id']);
		$delete_cat = mysqli_query($this->conn,"DELETE FROM `spc_festival` WHERE `festival_id` = '".$festival_id."' ");
		if($delete_cat) {
			$_SESSION['msg'] = 'delete_data';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-festival.php";';
        echo '</script>';
        exit();
	}
	function ActiveDeactiveFestival($data = array())
	{
		$product_id=base64_decode($data['id']);
		$condition = " `product_id`='" . $product_id . "' ";

		$check_cat_statusquery = mysqli_query($this->conn, "SELECT status FROM `spc_product` WHERE $condition");
		$get_cat_status = mysqli_fetch_assoc($check_cat_statusquery);
		$updated_status  = ($get_cat_status['status'] == 1) ? 0 : 1;
		$status_array = array(
			'status' => $updated_status, 
		);
		$update_cat = $this->updateQuery('spc_product',$status_array,$condition);
		if($update_cat) {
			$_SESSION['msg'] = 'status_changed';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-product.php";';
        echo '</script>';
        exit();
	}
}

?>