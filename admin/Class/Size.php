<?php 
class Size
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
	function AddEditSize($data=array())
	{
		// print_r($data);
		// exit;
		$size_name = !empty($data['size_name'])?$data['size_name']:'';
	 	$edit_id = !empty($data['edit_id'])? base64_decode($data['edit_id']):'';

	 	if(empty($size_name))
	 	{
			echo '<script type="text/javascript">';
			echo 'alert("Please Enter size Name");';
			echo 'window.location.href = "add-size.php";';
			echo '</script>';
			exit();
	 	}
	 	else
	 	{
	 		if(!empty($edit_id))
			{
				$WHERE = " AND id!='".$edit_id."'";
			}
	 		$result=mysqli_query($this->conn,"SELECT `size_name` FROM `size` WHERE `size_name`='".$size_name."' $WHERE") or die(mysqli_error($this->conn));
		    $count=mysqli_num_rows($result);
		   
		    if($count>0) { 
			      echo '<script type="text/javascript">';
			      echo 'alert("size Name already Present. Please enter another size Name");';
			      echo 'window.location.href = "view-size.php";';
			      echo '</script>';
			      exit();
		    }
		    $size_array = array(
		       "size_name" => $this->Check_data($size_name),
		    );
		    if(empty($edit_id))
			{
				$size_sql = $this->insertQuery('size',$size_array);
			  	if($size_sql) {
					$_SESSION['msg'] = 'data_uploaded';
				} 
			}
			else
			{
				$condition = " id='".$edit_id."' ";
				$size_sql = $this->updateQuery('size',$size_array,$condition);
				if($size_sql) {
					$_SESSION['msg'] = (empty($edit_id)) ? 'data_uploaded' : 'data_updated';
				}
			}
			echo '<script type="text/javascript">';
	        echo 'window.location.href = "view-size.php";';
	        echo '</script>';
	        exit();
	 	}
	}
	function DeleteSize($data=array())
	{
		$size_id=base64_decode($data['id']);
		$delete_cat = mysqli_query($this->conn,"DELETE FROM `size` WHERE `id` = '".$size_id."' ");
		if($delete_cat) {
			$_SESSION['msg'] = 'delete_data';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-size.php";';
        echo '</script>';
        exit();
	}
	function ActiveDeactiveSize($data = array())
	{
		$size_id=base64_decode($data['id']);
		$condition = " `id`='" . $size_id . "' ";

		$check_cat_statusquery = mysqli_query($this->conn, "SELECT status FROM `size` WHERE $condition");
		$get_cat_status = mysqli_fetch_assoc($check_cat_statusquery);
		$updated_status  = ($get_cat_status['status'] == 1) ? 0 : 1;
		$status_array = array(
			'status' => $updated_status, 
		);
		$update_cat = $this->updateQuery('size',$status_array,$condition);
		if($update_cat) {
			$_SESSION['msg'] = 'status_changed';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-size.php";';
        echo '</script>';
        exit();

	}
	
	
}

?>