<?php 
class Users
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
	
	function DeleteUser($data=array())
	{
		$user_id =base64_decode($data['id']);
		$delete_cat = mysqli_query($this->conn,"DELETE FROM `user` WHERE `id` = '".$user_id."' ");
		if($delete_cat) {
			$_SESSION['status'] = "success";
			$_SESSION['message'] = "User Delete successfuly.";
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "users.php";';
        echo '</script>';
        exit();
	}
	function ActiveDeactiveUser($data = array())
	{
		$user_id=base64_decode($data['id']);
		$condition = " `id`='" . $user_id . "' ";

		$check_cat_statusquery = mysqli_query($this->conn, "SELECT status FROM `user` WHERE $condition");
		$get_cat_status = mysqli_fetch_assoc($check_cat_statusquery);
		$updated_status  = ($get_cat_status['status'] == 1) ? 0 : 1;
		$status_array = array(
			'status' => $updated_status, 
		);
		$update_cat = $this->updateQuery('user',$status_array,$condition);
		if($update_cat) {
			$_SESSION['status'] = "success";
			$_SESSION['message'] = "User Status Change successfuly.";
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "users.php";';
        echo '</script>';
        exit();
	}
}

?>