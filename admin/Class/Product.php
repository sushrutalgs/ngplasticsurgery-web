<?php 
class Product
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
	function AddEditProduct($data=array())
	{
		// echo '<prE>';
		// print_r($data['t_info']);
		// exit;
		$edit_id = (!empty($data['id'])) ? base64_decode($data['id']) : "";
		$productName = $this->Check_data($data['productName']);
		$productSlug = $this->Check_data($data['productSlug']);
		$categoryId = !empty($data['categoryId'])?$data['categoryId']:'';
		$description = $this->Check_data($data['description']);

		$youtube_link = $data['youtube_link'];
		
		
		$mainDescription = $this->Check_data($data['mainDescription']);
		$otherDescription = $this->Check_data($data['otherDescription']);
		$titleTag = !empty($data['titleTag'])?$data['titleTag']:'';
		$metaKeyword = !empty($data['metaKeyword'])?$data['metaKeyword']:'';
		$metaDescription = !empty($data['metaDescription'])?$data['metaDescription']:'';
		
		$Schema = !empty($data['Schema'])?$data['Schema']:'';
		

		if(!empty($edit_id))
		{
			$WHERE = " AND `product_id`!='".$edit_id."'";
		}   
	    $result2=mysqli_query($this->conn,"SELECT `product_slug` FROM `spc_product` WHERE `product_slug`='".$productSlug."' $WHERE") or die(mysqli_error($con));
	    $count=mysqli_num_rows($result2);
	   
	    if($count>0) { 
		      echo '<script type="text/javascript">';
		      echo 'alert("Product Slug already Present. Please enter another Product Slug");';
		      echo 'window.location.href = "view-product.php";';
		      echo '</script>';
		      exit();
	    }

	    $product_array = array(
	       "product_name" => $productName,
	       "product_slug" => $productSlug,
	       "description" => $description,
	       "youtube_link" => $youtube_link,
	       "other_description" => $otherDescription,
	       "category_id" => $categoryId,
	       "title_tag" => $titleTag,
	       "meta_keyword" => $metaKeyword,
	       "meta_description" => $metaDescription,  
	       'schema_content' => $Schema,
		);

	    $Product_image = "ProductImages";
	    if(!file_exists(".." . DIRECTORY_SEPARATOR . $Product_image) && !is_dir(".." . DIRECTORY_SEPARATOR . $Product_image)) {
	      mkdir(".." . DIRECTORY_SEPARATOR . $Product_image);
	    }
	    if(!empty($_FILES['main_image']['name']))
	    {
	      	$extension = strtolower(pathinfo($_FILES['main_image']['name'], PATHINFO_EXTENSION));
		    if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" && $extension != "webp") {
		        echo '<script type="text/javascript">';
				echo 'alert("Only jpg, jpeg, png,webp and gif files are allowed");';
		        echo 'window.location.href = "add-product.php";';
		        echo '</script>';
		        exit();
		    }
		    // $product_name = str_replace(' ', '', $productName);
		    // $product_name = str_replace('-', '_', $productName);
			$mainfilename = "product".time().".".$extension;
			$mainfpath=".." . DIRECTORY_SEPARATOR . $Product_image . DIRECTORY_SEPARATOR . $mainfilename;
			move_uploaded_file($_FILES["main_image"]["tmp_name"], $mainfpath);
			$product_array['main_image']  = $mainfilename;
	    }

	    if(empty($edit_id))
		{
			$product_sql = $this->insertQuery('spc_product',$product_array);
			$last_id = mysqli_insert_id($this->conn);
		  	if($product_sql) {
				$_SESSION['msg'] = 'data_uploaded';
			} 

		}
		else
		{
			$condition = " product_id='".$edit_id."' ";
			$product_sql = $this->updateQuery('spc_product',$product_array,$condition);
			$last_id = $edit_id;
		}


		$countfiles = (!empty($_FILES['image']['name'])) ? count($_FILES['image']['name']) : 0;
		$image_name = "Product";
	    for($i=0;$i<$countfiles;$i++){
	        if(!empty($_FILES['image']['name'][$i]))
	        {
	            $image_data_name=$_FILES['image']['name'][$i];
	            $extension1 = strtolower(pathinfo($image_data_name, PATHINFO_EXTENSION));
	            if ($extension1 != "jpg" && $extension1 != "jpeg" && $extension1 != "png" && $extension1 != "gif" && $extension1 != "webp" && $extension1 != "avif" ) {
	              echo '<script type="text/javascript">';
	              echo 'alert("Only jpg, jpeg, png and gif files are allowed");';
	              echo 'window.location.href = "add-product.php";';
	              echo '</script>';
	              exit();
	            }
	            $filename = (!empty($productName)) ?  str_replace(' ', '', $productName).$i."_".time().".".$extension1 : "productdetail".time().".".$extension1;
	            $fpath=".." . DIRECTORY_SEPARATOR . $Product_image . DIRECTORY_SEPARATOR . $filename;
	            move_uploaded_file($_FILES["image"]["tmp_name"][$i], $fpath);
	            mysqli_query($this->conn, "INSERT INTO `product_image`( `image`, `product_id`) VALUES ('".$filename."','".$last_id."')");
	        }
	         
	    }

	    

		
	    $product_info_product_id_array = array();
	    foreach ($data['product_info'] as $key => $value) {
	    	if(!empty($value['label']) || !empty($value['description']))
	    	{
		        $product_info_data_array = array(
		            "product_id" => $last_id,
		            "l_name" => trim($value['label']),
		            "l_description" => trim($value['description']),
		        );

		        if(empty($value['pricing_id']))
				{
				     $this->insertQuery('product_technical_info',$product_info_data_array);
				}
				else
				{
				    $condition = " id='".$value['pricing_id']."' ";
					$this->updateQuery('product_technical_info',$product_info_data_array,$condition);
				}
				if(empty($value['pricing_id']))
				{
				   $last_inserted_id = mysqli_insert_id($this->conn);
				}
				else
				{
				   $last_inserted_id = $value['pricing_id'];
				}
				$product_info_product_id_array[] = $last_inserted_id;
			}
	    }
	    
	    if(!empty($product_info_product_id_array))
	   	{
		      $pricing_ids = implode(',', $product_info_product_id_array);
		      mysqli_query($this->conn, "DELETE FROM `product_technical_info` WHERE `product_id` ='".$edit_id."' AND id NOT IN(".$pricing_ids.")");
	   	}
	   	else
	   	{
	   		mysqli_query($this->conn, "DELETE FROM `product_technical_info` WHERE `product_id` ='".$edit_id."' ");
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
				    echo 'window.location.href = "view-industries.php";';
				    echo '</script>';
				    exit();
				}
			}
			
			$section_data_array = array(
				'product_id' => $last_id, 
				'section_title' => $section_title,
				// 'image_path' => $fileName,
				'image_name' => $image_name,
				'image_alt' => $image_alt,
				'image_title' => $image_title,
				'detailText' => $detailText,
			);
			$ProductImages = "ProductImages";
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
			    $sqlQuery = "INSERT INTO product_details ($key) VALUES ($value)";
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

		    	$sqlQuery = "UPDATE `product_details` SET {$set} WHERE id = {$section_value['id']}";
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

			 mysqli_query($this->conn,"DELETE FROM `product_details` WHERE `product_id` = '".$last_id."' AND id NOT IN(".$industries_detail_ids_data.")");
			
		}


	    if($product_sql) {
			$_SESSION['msg'] = (empty($edit_id)) ? 'data_uploaded' : 'data_updated';
		}
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-product.php";';
        echo '</script>';
        exit();
	}

	function DeleteProduct($data=array())
	{
		$product_id=base64_decode($data['id']);
		$delete_cat = mysqli_query($this->conn,"DELETE FROM `spc_product` WHERE `product_id` = '".$product_id."' ");
		if($delete_cat) {
			$_SESSION['msg'] = 'delete_data';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "view-product.php";';
        echo '</script>';
        exit();
	}
	function ActiveDeactiveProduct($data = array())
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
	function UploadProductImages($data=array())
	{
		$pid = base64_encode($data['pid']);
	    $pid1 = $data['pid'];
	    $NameFile = $_FILES['image']['name'];
	    $ImgFolder = "ProductImages";
	    foreach ($_FILES['image']['name'] as $key => $val) {
	        $NameFile = $pid1 . '-' . $val;
	        $fpath = ".." . DIRECTORY_SEPARATOR . $ImgFolder . DIRECTORY_SEPARATOR . $NameFile;
	        if (!file_exists(".." . DIRECTORY_SEPARATOR . $ImgFolder) && !is_dir(".." . DIRECTORY_SEPARATOR . $ImgFolder)) {
	            mkdir(".." . DIRECTORY_SEPARATOR . $ImgFolder);
	        }
	        if (move_uploaded_file($_FILES["image"]["tmp_name"][$key], $fpath)) {
	        	$product_image_array = array(
	        		'product_id' => $pid1,
	        		'image' => $NameFile,
	        		'created_on' => date("Y-m-d H:i:s"),
	        	);
	        	$product_sql = $this->insertQuery('product_image',$product_image_array);
	        }
	    }
	    if ($product_sql) {
	        $_SESSION['msg'] = 'data_uploaded';
	    } 
	    echo '<script type="text/javascript">';
        echo 'window.location.href = "insert-multiple-product-image.php?id='.$pid.'";';
        echo '</script>';
	    exit;
	}
	function DeleteProductImage($data=array())
	{
		$id = base64_decode($data['id']);
	    $pid = base64_encode($data['pid']);

	   	$get_p_images = mysqli_query($this->conn, "SELECT image FROM `product_image` WHERE id ='".$id."'");
		$get_images_data = mysqli_fetch_assoc($get_p_images);
		

	   	$delete_cat = mysqli_query($this->conn,"DELETE FROM `product_image` WHERE `id` = '".$id."' ");
	    if ($delete_cat) {
	        $_SESSION['msg'] = 'image_delete';
	        if(!empty($get_images_data['image']) && file_exists('../ProductImages/'.$get_images_data['image'].''))
	        {
	        	unlink('../ProductImages/'.$get_images_data['image'].'');
	        }
	    }
	    echo '<script type="text/javascript">';
        echo 'window.location.href = "insert-multiple-product-image.php?id='.$pid.'";';
        echo '</script>';
	    exit;
	}
	function ActiveDeactiveProductImage($data = array())
	{
		$id=base64_decode($data['id']);
		$pid =  base64_encode($_REQUEST['pid']);
	    
		$condition = " `id`='" . $id . "' ";
		
		$check_cat_statusquery = mysqli_query($this->conn, "SELECT status FROM `product_image` WHERE $condition");
		$get_cat_status = mysqli_fetch_assoc($check_cat_statusquery);
		$updated_status  = ($get_cat_status['status'] == 1) ? 0 : 1;
		$status_array = array(
			'status' => $updated_status, 
		);
		$update_cat = $this->updateQuery('product_image',$status_array,$condition);
		if($update_cat) {
			$_SESSION['msg'] = 'status_changed';
		} 
		echo '<script type="text/javascript">';
        echo 'window.location.href = "insert-multiple-product-image.php?id='.$pid.'";';
        echo '</script>';
        exit();
	}
}

?>