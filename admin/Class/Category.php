<?php 
class Category
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
	function AddEditCategory($data=array())
	{
		// echo '<pre>';
		// print_r($data['explore_our']);
		// exit;
		$edit_id = (!empty($data['id'])) ? base64_decode($data['id']) : "";
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

		$WHERE = "";
		if(!empty($edit_id))
		{
			$WHERE = " AND `category_id`!='".$edit_id."'";
		}
		$check_cat_query = mysqli_query($this->conn, "SELECT * FROM `spc_category` WHERE `category_name`='" . $categoryName . "' $WHERE ");
		$categorydata = mysqli_fetch_array($check_cat_query);
		if(!empty($categorydata))
		{
		    $_SESSION['status'] = 'error';
		    $_SESSION['message'] = 'Category already exists.';
		    echo '<script type="text/javascript">';
	        echo 'window.location.href = "view-category.php";';
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
			'schema_content' => $Schema,
		);
		
		$NameFile = $_FILES['image']['name'];
		if (isset($NameFile) && !empty($NameFile)) 
		{
		    $extension = strtolower(pathinfo($NameFile, PATHINFO_EXTENSION));
		    if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" && $extension != "webp") {
		        echo '<script type="text/javascript">';
		        echo 'alert("Only jpg, jpeg, png,webp and gif files are allowed");';
		        echo 'window.location.href = "view-category.php";';
		        echo '</script>';
		        exit();
		    }

		    $galleryImg = "CategoryImages";
		    $fileName =  "Category_".time().".".$extension;
		    $fpath = ".." . DIRECTORY_SEPARATOR . $galleryImg . DIRECTORY_SEPARATOR . $fileName;

		    if (!file_exists(".." . DIRECTORY_SEPARATOR . $galleryImg) && !is_dir(".." . DIRECTORY_SEPARATOR . $galleryImg)) {
		        mkdir(".." . DIRECTORY_SEPARATOR . $galleryImg);
		    }
		    
		    move_uploaded_file($_FILES["image"]["tmp_name"], $fpath);
		    $category_data_array['image'] = $fileName;
		}


		$NameFile = $_FILES['banner_image']['name'];
		if (isset($NameFile) && !empty($NameFile)) 
		{
		    $extension = strtolower(pathinfo($NameFile, PATHINFO_EXTENSION));
		    if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" && $extension != "webp") {
		        echo '<script type="text/javascript">';
		        echo 'alert("Only jpg, jpeg, png,webp and gif files are allowed");';
		        echo 'window.location.href = "view-category.php";';
		        echo '</script>';
		        exit();
		    }

		    $galleryImg = "CategoryImages";
		    $fileName =  "Category_banner_".time().".".$extension;
		    $fpath = ".." . DIRECTORY_SEPARATOR . $galleryImg . DIRECTORY_SEPARATOR . $fileName;

		    if (!file_exists(".." . DIRECTORY_SEPARATOR . $galleryImg) && !is_dir(".." . DIRECTORY_SEPARATOR . $galleryImg)) {
		        mkdir(".." . DIRECTORY_SEPARATOR . $galleryImg);
		    }
		    
		    move_uploaded_file($_FILES["banner_image"]["tmp_name"], $fpath);
		    $category_data_array['banner_image'] = $fileName;
		}


		if(empty($edit_id))
		{
			$Service_insert = $this->insertQuery('spc_category',$category_data_array);
		  	if($Service_insert) {
				$_SESSION['msg'] = 'data_uploaded';
			} 
			$Service_id = mysqli_insert_id($this->conn);
		}
		else
		{
			$condition = " category_id='".$edit_id."' ";
			$update_cat = $this->updateQuery('spc_category',$category_data_array,$condition);
			if($update_cat) {
				$_SESSION['msg'] = 'data_updated';
			} 
			$Service_id = $edit_id;
		}	


		$i = 1;
		$explore_our_ids = array();
		foreach($data['explore_our'] as $key=>$section_value)
		{
			// 	echo '<pre>';
			// print_r($data['explore_our']);
			// exit;
			if(!empty($section_value['label']) || !empty($_FILES['explore_our']['name'][$i]['image']))
			{
				$label = trim(addslashes($section_value['label']));
			  
			    $fileName = "";

				if(!empty($_FILES['explore_our']['name'][$i]['image']))
				{
					$extension = strtolower(pathinfo($_FILES['explore_our']['name'][$i]['image'], PATHINFO_EXTENSION)); 

				    // if($extension != "jpg" && $extension != "jpeg" && $extension !="png" && $extension !="gif" && $extension !="webp") {
					//    	echo '<script type="text/javascript">';
					//    	echo 'alert("Only jpg,jpeg,gif,png and webp  files are allowed");';
					//     echo 'window.location.href = "add-category.php";';
					//     echo '</script>';
					//     exit();
					// }
				}
				
				$section_data_array = array(
					'category_id' => $Service_id, 
					'label' => $label,
				);
				$Services_images = "CategoryImages";
			    if(!empty($_FILES['explore_our']['tmp_name'][$i]['image']))
				{
			      	$fileName = "Category_explore_our_".$i."_".time().".".$extension;
			      	$fpath=".." . DIRECTORY_SEPARATOR . $Services_images . DIRECTORY_SEPARATOR . $fileName;
			        move_uploaded_file($_FILES['explore_our']['tmp_name'][$i]['image'], $fpath);
			        $section_data_array['image_path'] = $fileName;
			    }
				$i++;

				if(empty($section_value['id']))
				{
					$key = implode(',', array_keys($section_data_array));
				    $value = "'" . implode( "','", array_values($section_data_array)) ."'";
				    $sqlQuery = "INSERT INTO explore_our ($key) VALUES ($value)";
				}
				else
				{
					unset($section_data_array['category_id']);

					$x = 1;
					$set = "";
					foreach($section_data_array as $name => $value) {
				        $set .= "{$name} = \"{$value}\"";
				        if($x < count($section_data_array)) {
				            $set .= ',';
				        }
				        $x++;
				   	}

			    	$sqlQuery = "UPDATE `explore_our` SET {$set} WHERE id = {$section_value['id']}";
				}
				// echo $sqlQuery;
				// exit;
				mysqli_query($this->conn, $sqlQuery);
				if(empty($section_value['id']))
				{
					$explore_our_ids[] = mysqli_insert_id($this->conn);
				}
				else
				{
					$explore_our_ids[] = $section_value['id'];
				}
			}

		}
		
		if(!empty($explore_our_ids))
		{
			$Service_detail_ids_data = implode(',',$explore_our_ids);
			
			mysqli_query($this->conn,"DELETE FROM `explore_our` WHERE `category_id` = '".$Service_id."' AND id NOT IN(".$Service_detail_ids_data.")");
		}
		else
		{
			mysqli_query($this->conn,"DELETE FROM `explore_our` WHERE `category_id` = '".$Service_id."' ");
		}

		$faq_array = array();
		$i = 1;
		
		foreach ($data['faq_info'] as $key => $value) {
			if(!empty($value['label']) || !empty($value['description']))
			{
				$faq_data_array = array(
					"category_id" => $Service_id,
					"title" => trim($value['label']),
					"description" => trim($value['description']),
				);

				
				if (empty($value['id'])) {
					$this->insertQuery('category_faq', $faq_data_array);
					
				} else {
					$condition = " id='" . $value['id'] . "' ";
					$this->updateQuery('category_faq', $faq_data_array, $condition);
				}
				if (empty($value['id'])) {
					$last_inserted_id = mysqli_insert_id($this->conn);
				} else {
					$last_inserted_id = $value['id'];
				}
				$faq_array[] = $last_inserted_id;
				// echo '<pre>';
				// print_r($_FILES['methods']['name'][$i]['image']);
				$i ++;
			}
			
			
		}

		if(!empty($faq_array))
		{
			$Service_detail_ids_data = implode(',',$faq_array);
			
			mysqli_query($this->conn,"DELETE FROM `category_faq` WHERE `category_id` = '".$Service_id."' AND id NOT IN(".$Service_detail_ids_data.")");
		}
		else
		{
			mysqli_query($this->conn,"DELETE FROM `category_faq` WHERE `category_id` = '".$Service_id."' ");
		}


		$i = 1;
		$industries_detail_ids = array();
		foreach($_REQUEST['section'] as $key=>$section_value)
		{
			
			$section_title = trim(addslashes($section_value['section_title']));
		    $image_name = trim(addslashes($section_value['image_name']));
		    $image_alt = trim(addslashes($section_value['image_alt']));
		    $image_title = trim(addslashes($section_value['image_title']));
		    $detailText = trim(addslashes($section_value['detailText']));
		    $fileName = "";

			if(!empty($_FILES['section']['name'][$i]['servies_image']))
			{
				$extension = strtolower(pathinfo($_FILES['section']['name'][$i]['servies_image'], PATHINFO_EXTENSION)); 

			    if($extension != "jpg" && $extension != "jpeg" && $extension !="png" && $extension !="gif" && $extension !="webp") {
				   	echo '<script type="text/javascript">';
				   	echo 'alert("Only jpg,jpeg,gif,png and webp  files are allowed");';
				    echo 'window.location.href = "view-category.php";';
				    echo '</script>';
				    exit();
				}
			}
			
			$section_data_array = array(
				'category_id' => $Service_id, 
				'section_title' => $section_title,
				// 'image_path' => $fileName,
				'image_name' => $image_name,
				'image_alt' => $image_alt,
				'image_title' => $image_title,
				'detailText' => $detailText,
			);
			$ProductImages = "CategoryImages";
		    if(!empty($_FILES['section']['tmp_name'][$i]['servies_image']))
			{
		      	$fileName = (empty($image_name)) ? $_FILES['section']['name'][$i]['servies_image']."_".time() : $image_name."_".time().".".$extension;
		      	$fpath=".." . DIRECTORY_SEPARATOR . $ProductImages . DIRECTORY_SEPARATOR . $fileName;
		        move_uploaded_file($_FILES['section']['tmp_name'][$i]['servies_image'], $fpath);
		        $section_data_array['image_path'] = $fileName;
		    }
			$i++;

			if(empty($section_value['id']))
			{
				$key = implode(',', array_keys($section_data_array));
			    $value = "'" . implode( "','", array_values($section_data_array)) ."'";
			    $sqlQuery = "INSERT INTO category_details ($key) VALUES ($value)";
			}
			else
			{
				unset($section_data_array['product_id']);

				$x = 1;
				$set = "";
				foreach($section_data_array as $name => $value) {
			        $set .= "{$name} = \"{$value}\"";
			        if($x < count($section_data_array)) {
			            $set .= ',';
			        }
			        $x++;
			   	}

		    	$sqlQuery = "UPDATE `category_details` SET {$set} WHERE id = {$section_value['id']}";
			}
			// echo $sqlQuery;
			// exit;
			mysqli_query($this->conn, $sqlQuery);
			if(empty($section_value['id']))
			{
				$industries_detail_ids[] = mysqli_insert_id($this->conn);
			}
			else
			{
				$industries_detail_ids[] = $section_value['id'];
			}

		}
		
		if(!empty($industries_detail_ids))
		{
			$industries_detail_ids_data = implode(',',$industries_detail_ids);
			mysqli_query($this->conn,"DELETE FROM `category_details` WHERE `category_id` = '".$Service_id."' AND id NOT IN(".$industries_detail_ids_data.")");
		}
		else
		{
			mysqli_query($this->conn,"DELETE FROM `category_details` WHERE `category_id` = '".$Service_id."' ");
		}

		
		// echo '<pre>';
		// print_r($faq_array);
		// exit;


		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-category.php";';
        echo '</script>';
        exit();
	}
	function DeleteCategory($data=array())
	{
		$category_id=base64_decode($data['id']);
		$delete_cat = mysqli_query($this->conn,"DELETE FROM `spc_category` WHERE `category_id` = '".$category_id."' ");
		if($delete_cat) {
			$_SESSION['msg'] = 'delete_data';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-category.php";';
        echo '</script>';
        exit();
	}
	function ActiveDeactiveCategory($data = array())
	{
		$category_id=base64_decode($data['id']);
		$condition = " `category_id`='" . $category_id . "' ";

		$check_cat_statusquery = mysqli_query($this->conn, "SELECT status FROM `spc_category` WHERE $condition");
		$get_cat_status = mysqli_fetch_assoc($check_cat_statusquery);
		$updated_status  = ($get_cat_status['status'] == 1) ? 0 : 1;
		$status_array = array(
			'status' => $updated_status, 
		);
		$update_cat = $this->updateQuery('spc_category',$status_array,$condition);
		if($update_cat) {
			$_SESSION['msg'] = 'status_changed';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-category.php";';
        echo '</script>';
        exit();

	}
}

?>