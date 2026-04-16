<?php 
class Blog
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
	    // echo "<pre>";
	    // echo $sqlQuery;
	    // exit;
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
	function AddEditBlog($data=array())
	{

		$edit_id = (!empty($data['id'])) ? base64_decode($data['id']) : "";

		$blogTitle = $this->Check_data($data['blogTitle']);
		$titleSlug = $this->Check_data($data['titleSlug']);
		$blogDate = !empty($_POST['blogDate'])?$_POST['blogDate']:'';
		$blogAuthor = $this->Check_data($data['blogAuthor']);
		$mainDescription = $this->Check_data($data['mainDescription']);
		$Schema = !empty($data['scHema'])?$data['scHema']:'';
		$titleTag = !empty($data['titleTag'])?$data['titleTag']:'';
		$metaKeyword = !empty($_POST['metaKeyword'])?$_POST['metaKeyword']:'';
		$metaDescription = !empty($_POST['metaDescription'])?$_POST['metaDescription']:'';
		
		$imgName = !empty($_POST['imgName'])?$_POST['imgName']:'';
        $imgAlt = !empty($_POST['imgAlt'])?$_POST['imgAlt']:'';
        $imgTitle = !empty($_POST['imgTitle'])?$_POST['imgTitle']:'';
		

		if(!empty($edit_id))
		{
			$WHERE = " AND `blog_id`!='".$edit_id."'";
		}   
	    $result2=mysqli_query($this->conn,"SELECT `title_slug` FROM `ahq_blog` WHERE `title_slug`='".$titleSlug."' $WHERE") or die(mysqli_error($this->conn));
	    $count=mysqli_num_rows($result2);
	   
	    if($count>0) { 
		      echo '<script type="text/javascript">';
		      echo 'alert("Blog Slug already Present. Please enter another Product Slug");';
		      echo 'window.location.href = "view-blog.php";';
		      echo '</script>';
		      exit();
	    }

	    $blog_array = array(
	       "title" => $blogTitle,
	       "title_slug" => $titleSlug,
	       "image_alt" => $imgAlt,
	       "image_title" => $imgTitle,
	       "blog_date" => date("Y-m-d",strtotime($blogDate)),
	       "author" => $blogAuthor,
	       "description" => $mainDescription,
	       "schema_content" => $Schema,  
	       'title_tag' => $titleTag,
	       'meta_keyword' => $metaKeyword, 
	       'meta_description' => $metaDescription,
		);

	    $BlogImg = "BlogImg";
	    if(!file_exists(".." . DIRECTORY_SEPARATOR . $BlogImg) && !is_dir(".." . DIRECTORY_SEPARATOR . $BlogImg)) {
	      mkdir(".." . DIRECTORY_SEPARATOR . $BlogImg);
	    }
	    if(!empty($_FILES['imgUpload']['name']))
	    {
	      	$extension = strtolower(pathinfo($_FILES['imgUpload']['name'], PATHINFO_EXTENSION));
		    if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" && $extension != "webp") {
		        echo '<script type="text/javascript">';
				echo 'alert("Only jpg, jpeg, png,webp and gif files are allowed");';
		        echo 'window.location.href = "add-blog.php";';
		        echo '</script>';
		        exit();
		    }
			$mainfilename = "blog_".time().".".$extension;
			$mainfpath=".." . DIRECTORY_SEPARATOR . $BlogImg . DIRECTORY_SEPARATOR . $mainfilename;
			move_uploaded_file($_FILES["imgUpload"]["tmp_name"], $mainfpath);
			$blog_array['image']  = $mainfilename;
	    }
	    // echo '<pre>';
		// print_r($blog_array);
		// exit;

	    if(empty($edit_id))
		{
			$blog_sql = $this->insertQuery('ahq_blog',$blog_array);
			$last_id = mysqli_insert_id($this->conn);
		  	if($blog_sql) {
				$_SESSION['msg'] = 'data_uploaded';
			} 
		}
		else
		{
			$condition = " blog_id='".$edit_id."' ";
			$blog_sql = $this->updateQuery('ahq_blog',$blog_array,$condition);
			if($blog_sql) {
				$_SESSION['msg'] = (empty($edit_id)) ? 'data_uploaded' : 'data_updated';
			}
		}
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-blog.php";';
        echo '</script>';
        exit();
	}

	function DeleteBlog($data=array())
	{
		$blog_id=base64_decode($data['id']);
		$delete_cat = mysqli_query($this->conn,"DELETE FROM `ahq_blog` WHERE `blog_id` = '".$blog_id."' ");
		if($delete_cat) {
			$_SESSION['msg'] = 'delete_data';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-blog.php";';
        echo '</script>';
        exit();
	}
	function ActiveDeactiveBlog($data = array())
	{
		$blog_id=base64_decode($data['id']);
		$condition = " `blog_id`='" . $blog_id . "' ";

		$check_cat_statusquery = mysqli_query($this->conn, "SELECT status FROM `ahq_blog` WHERE $condition");
		$get_cat_status = mysqli_fetch_assoc($check_cat_statusquery);
		$updated_status  = ($get_cat_status['status'] == 1) ? 0 : 1;
		$status_array = array(
			'status' => $updated_status, 
		);
		$update_cat = $this->updateQuery('ahq_blog',$status_array,$condition);
		if($update_cat) {
			$_SESSION['msg'] = 'status_changed';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-blog.php";';
        echo '</script>';
        exit();
	}
	
}

?>