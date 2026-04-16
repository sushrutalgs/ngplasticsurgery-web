<?php 
class Admin
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
	function AdminLogin($data=array())
	{
		$userName = !empty($data['userName'])?$data['userName']:'';
	 	$passWord = !empty($data['passWord'])?$data['passWord']:'';
	 	
	 	$userName = $this->Check_data($userName);
	 	$passWord = $this->Check_data($passWord);
	 	$passWord = md5($passWord);

	 	$check_admin_login = mysqli_query($this->conn, "SELECT id,username FROM `admin` WHERE `username` = '".$userName."' AND `password` = '".$passWord."'");
	 	if(mysqli_num_rows($check_admin_login) > 0)
	 	{
	 		$admin_data = mysqli_fetch_assoc($check_admin_login);

	 		$_SESSION['userid']=$admin_data['id'];
			$_SESSION['username']=$admin_data['username'];
			echo '<script type="text/javascript">';
			echo 'window.location.href = "dashboard.php";';
			echo '</script>';
	 	}
	 	else {
		   echo '<script type="text/javascript">';
		   echo 'alert("You have Entered Wrong Combination!!");';
		   echo 'window.location.href = "index.php";';
		   echo '</script>';
		}

	}
	function AdminChangePassword($data=array())
	{
		$newPassword = !empty($data['newPassword'])?$data['newPassword']:'';
		$newPassword = $this->Check_data($newPassword);
		$newPassword = md5($newPassword);

		$update_password = $this->updateQuery('admin',array('password'=>$newPassword),"id = '".$_SESSION['userid']."'");
		// if($update_password) {
			$_SESSION['msg'] = 'data_updated';
		// }
		echo '<script type="text/javascript">';
		echo 'window.location.href = "change-password.php";';
		echo '</script>';
	}
	function UpdateSettings($data=array())
	{
		$setting_data = array(
	        'company_name' => $this->Check_data($_POST['company_name']),
	        'company_email' => $this->Check_data($_POST['company_email']),
	        'company_phone' => $this->Check_data($_POST['company_phone']),
	        'company_address' => $this->Check_data($_POST['company_address']),
	        'company_phone1' => $this->Check_data($_POST['company_phone1']),
	        'company_phone2' => $this->Check_data($_POST['company_phone2']),
	    );
	    
	    $update_Settings = $this->updateQuery('site_config',$setting_data,"id = '1'");
	    if($update_Settings){
	        $responce['status'] = "success";
	        $responce['message'] = "Settings Updated successfully";
	    }else{
	        $responce['status'] = "error";
	        $responce['message'] = "something went wrong";
	    }
	    return $responce;
	}
	
}

?>