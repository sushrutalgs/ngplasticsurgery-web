<?php 
class Homepagebanner
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
	function AddHomepagebanner($data=array())
	{

	  	$NameFile = $_FILES['image']['name'];
	    $ImgFolder = "BannerImages";
	    
        if (!file_exists(".." . DIRECTORY_SEPARATOR . $ImgFolder) && !is_dir(".." . DIRECTORY_SEPARATOR . $ImgFolder)) {
            mkdir(".." . DIRECTORY_SEPARATOR . $ImgFolder);
        }
	    $i = 0; 
	    
	    foreach ($_FILES['image']['name'] as $key => $val) {
	        $NameFile = time().$i. '-' . $val;
	        $fpath = ".." . DIRECTORY_SEPARATOR . $ImgFolder . DIRECTORY_SEPARATOR . $NameFile;	
	        move_uploaded_file($_FILES["image"]["tmp_name"][$key], $fpath);
        	$banner_array = array(
        		'image' => $NameFile,
        		'status' => 1
        	);
            $product_sql = $this->insertQuery('banner_images',$banner_array);	
	        
	        $i ++;
	    }
	    if ($product_sql) {
	        $_SESSION['msg'] = 'data_uploaded';
	    } 
		echo '<script type="text/javascript">';
	    echo 'window.location.href = "upload_banners.php";';
	    echo '</script>';
	    exit();
	}

	function DeleteHomepagebanner($data=array())
	{
		$banner_id=base64_decode($data['id']);
		$delete_cat = mysqli_query($this->conn,"DELETE FROM `banner_images` WHERE `id` = '".$banner_id."' ");
		if($delete_cat) {
			$_SESSION['msg'] = 'image_delete';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "upload_banners.php";';
        echo '</script>';
        exit();
	}
	function ActiveDeactiveHomepagebanner($data = array())
	{
		$banner_id=base64_decode($data['id']);
		$condition = " `id`='" . $banner_id . "' ";

		$check_cat_statusquery = mysqli_query($this->conn, "SELECT status FROM `banner_images` WHERE $condition");
		$get_cat_status = mysqli_fetch_assoc($check_cat_statusquery);
		$updated_status  = ($get_cat_status['status'] == 1) ? 0 : 1;
		$status_array = array(
			'status' => $updated_status, 
		);
		$update_cat = $this->updateQuery('banner_images',$status_array,$condition);
		if($update_cat) {
			$_SESSION['msg'] = 'status_changed';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "upload_banners.php";';
        echo '</script>';
        exit();
	}
}

?>