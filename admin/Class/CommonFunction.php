<?php 
class CommonFunction
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
	function DeleteInquiry($data=array())
	{
		$id=base64_decode($data['id']);
		$delete_data = mysqli_query($this->conn,"DELETE FROM `contact_us` WHERE `id` = '".$id."' ");
		if($delete_data) {
			$_SESSION['msg'] = 'delete_data';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-inquiry.php";';
        echo '</script>';
        exit();
	}
	function DeleteProductInquiry($data=array())
	{
		$id=base64_decode($data['id']);
		$delete_data = mysqli_query($this->conn,"DELETE FROM `product_contact` WHERE `id` = '".$id."' ");
		if($delete_data) {
			$_SESSION['msg'] = 'delete_data';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-product-inquiry.php";';
        echo '</script>';
        exit();
	}
	
}

?>