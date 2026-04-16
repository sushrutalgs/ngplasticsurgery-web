<?php 
class SubCategory
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
	function AddEditSubCategory($data=array())
	{
		
		$edit_id = (!empty($data['id'])) ? base64_decode($data['id']) : "";
		$parent_cat_id = !empty($data['category_id'])?$data['category_id']:'';
		$categoryName = !empty($data['categoryName'])?$data['categoryName']:'';
		$categorySlug = !empty($data['categorySlug'])?$data['categorySlug']:'';
		$mainDescription = !empty($data['mainDescription'])?$data['mainDescription']:'';
		$otherDescription = !empty($data['otherDescription'])?$data['otherDescription']:'';
		$titleTag = !empty($data['titleTag'])?$data['titleTag']:'';
		$metaKeyword = !empty($data['metaKeyword'])?$data['metaKeyword']:'';
		$metaDescription = !empty($data['metaDescription'])?$data['metaDescription']:'';
		$Schema = !empty($data['Schema'])?$data['Schema']:'';

		$categoryName= $this->Check_data($categoryName);
		$categorySlug= $this->Check_data($categorySlug);
		$mainDescription= $this->Check_data($mainDescription);
		$otherDescription= $this->Check_data($otherDescription);
		$titleTag= $this->Check_data($titleTag);
		$metaKeyword= $this->Check_data($metaKeyword);
		$metaDescription= $this->Check_data($metaDescription);

		$WHERE = " AND parent_cat_id='".$parent_cat_id."'";

		if(!empty($edit_id))
		{
			$WHERE = " AND `category_id`!='".$edit_id."'";
		}
		$check_cat_query = mysqli_query($this->conn, "SELECT * FROM `med-category` WHERE `category_name`='" . $categoryName . "' $WHERE ");
		$data = mysqli_fetch_array($check_cat_query);
		if(!empty($data))
		{
		    $_SESSION['status'] = 'error';
		    $_SESSION['message'] = 'Category already exists.';
		    echo '<script type="text/javascript">';
	        echo 'window.location.href = "view-subcategory.php";';
	        echo '</script>';
	        exit();
		}

		$category_data_array = array(
			'category_name' => $categoryName,
			'category_slug' => $categorySlug,
			'description' => $mainDescription,
			'otherDescription' => $otherDescription,
			'title_tag' => $titleTag,
			'meta_keyword' => $metaKeyword,
			'meta_description' => $metaDescription,
			'parent_cat_id' => $parent_cat_id,
			'schema_content' => $Schema,
		);
		
		$NameFile = $_FILES['image']['name'];
		if (isset($NameFile) && !empty($NameFile)) 
		{
		    $extension = strtolower(pathinfo($NameFile, PATHINFO_EXTENSION));
		    if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif") {
		        echo '<script type="text/javascript">';
		        echo 'alert("Only jpg, jpeg, png and gif files are allowed");';
		        echo 'window.location.href = "view-subcategory.php";';
		        echo '</script>';
		        exit();
		    }

		    $galleryImg = "SubCategoryImages";
		    $fileName =  "Category_".time().".".$extension;
		    $fpath = ".." . DIRECTORY_SEPARATOR . $galleryImg . DIRECTORY_SEPARATOR . $fileName;

		    if (!file_exists(".." . DIRECTORY_SEPARATOR . $galleryImg) && !is_dir(".." . DIRECTORY_SEPARATOR . $galleryImg)) {
		        mkdir(".." . DIRECTORY_SEPARATOR . $galleryImg);
		    }
		    
		    move_uploaded_file($_FILES["image"]["tmp_name"], $fpath);
		    $category_data_array['image'] = $fileName;
		}

		if(empty($edit_id))
		{
			$insert_cat = $this->insertQuery("`med-category`",$category_data_array);
		  	if($insert_cat) {
				$_SESSION['msg'] = 'data_uploaded';
			} 
		}
		else
		{
			$condition = " category_id='".$edit_id."' ";
			$update_cat = $this->updateQuery("`med-category`",$category_data_array,$condition);
			if($update_cat) {
				$_SESSION['msg'] = 'data_updated';
			} 
		}	
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-subcategory.php";';
        echo '</script>';
        exit();
	}
	function DeleteSubCategory($data=array())
	{
		$category_id=base64_decode($data['id']);
		$delete_cat = mysqli_query($this->conn,"DELETE FROM `med-category` WHERE `category_id` = '".$category_id."' ");
		if($delete_cat) {
			$_SESSION['msg'] = 'delete_data';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-subcategory.php";';
        echo '</script>';
        exit();
	}
	function ActiveDeactiveSubCategory($data = array())
	{
		$category_id=base64_decode($data['id']);
		$condition = " category_id='" . $category_id . "' ";

		$check_cat_statusquery = mysqli_query($this->conn, "SELECT status FROM `med-category` WHERE $condition");
		$get_cat_status = mysqli_fetch_assoc($check_cat_statusquery);
		$updated_status  = ($get_cat_status['status'] == 1) ? 0 : 1;
		$status_array = array(
			'status' => $updated_status, 
		);
		$update_cat = $this->updateQuery("`med-category`",$status_array,$condition);
		if($update_cat) {
			$_SESSION['msg'] = 'status_changed';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-subcategory.php";';
        echo '</script>';
        exit();

	}
}

?>