<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Category.php";

if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='delete'){
	$Category_class = new Category();
    $response = $Category_class->DeleteCategory($_REQUEST);
}

if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='status'){
	$Category_class = new Category();
    $response = $Category_class->ActiveDeactiveCategory($_REQUEST);
}


?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="col-12">
        <div class="bg-light rounded h-100 p-4">
        	<div class="row">
        		<div class="col-6">
        			<h3 class="mb-4">Manage Category</h3>
        		</div>
        		<div class="col-6">
        			<a href="add-category.php" type="button" class="btn btn-primary m-2" style="float:right"><i class="fa fa-plus ms-2"></i>&nbsp;Add Category</a>
        		</div>
        	</div>
            

            <?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='data_uploaded') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-success">

			                    Category Added successfully!!.
			                   </div>
		                  	</div>
	                  	</div>
	                  	<?php 
	                  	$_SESSION['msg'] = '';
	                  	} 
	                ?>
	                <?php if(isset($_SESSION['status']) && $_SESSION['status']=='error') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-danger">
			                    <?php echo $_SESSION['message'];?>
			                   </div>
		                  	</div>
	                  	</div>
	                  	<?php 
	                  	$_SESSION['status'] = $_SESSION['message'] = '';
	                  	} 
	                ?>
	                
						 <?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='data_updated') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-success">
			                    Category Updated successfully!!.
			                   </div>
		                  	</div>
	                  	</div>
	                  	<?php 
	                  	$_SESSION['msg'] = '';
	                  	} 
	                ?>
	                
					<?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='status_changed') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                  <div class="alert alert-success">
			                   	Status changed successfully!!.
			                  	</div>
		                  	</div>
	                  	</div>
	                  	<?php 
	                  	
	                  	$_SESSION['msg'] = '';
	                  	} ?>
	                  	
	                  	<?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='delete_data') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-success">
			                   	Category Deleted !!.
			                  	</div>
		                  	</div>
	                  	</div>
	                  	<?php 
	                  	
	                  	$_SESSION['msg'] = '';
	            	} ?>
            <div class="table-responsive">
                <table class="table table  table-hover" id="employee-role-table">
                    <thead>
                        <tr>
							<th># Id</th>
							<th>Category Name</th>							
							<th>Image</th>
							<th>Edit</th>
							<th>Status</th>
							<th>Delete</th>
						</tr>
                    </thead>
                    <tbody>
                      <?php
						 //$fetch_product=mysqli_query($con,"SELECT `pr`.*,`cat`.`category_name`,`bnd`.`brand` FROM `spc_product` AS `pr` LEFT JOIN `spc_category` AS `cat` ON `pr`.`category_id`=`cat`.`category_id` LEFT JOIN `spc_brand` AS `bnd` ON `pr`.`brand_id`=`bnd`.`brand_id` ORDER BY `pr`.`category_id` DESC") or die(mysqli_error($con));
						 $fetch_product=mysqli_query($con,"SELECT * FROM `spc_category` ") or die(mysqli_error($con));
							$i=1;
							if(mysqli_num_rows($fetch_product)>0) {
							while($data = mysqli_fetch_array($fetch_product)) {
								//print_r($data); exit;
						?>
						  <tr>
							  <td><?php echo $i;?></td>
							  <!--<td><?php //echo $data['category_name'];?></td>-->
							  <!-- <td><?php //echo $data['brand'];?></td> -->
							  <td><?php echo $data['category_name'];?></td>
							  <!--<td><?php //echo $data['product_code'];?></td>-->							  							  							  

							  <td><?php
							  $productImg = "CategoryImages";
							   $imgfileSource = ".." . DIRECTORY_SEPARATOR . $productImg . DIRECTORY_SEPARATOR . $data['image'];
			   				 if(file_exists($imgfileSource)){ ?>
							<img src="<?php echo $imgfileSource; ?>" style="width:150px; height:150px;" /><?php } ?>
							</td>
							
							  <td>
							  	<a href="edit-category.php?action=edit&id=<?php echo base64_encode($data['category_id']);?>" class="btn btn-outline-secondary" style="margin-right:2px;margin-bottom:6px;" title="Edit"><i class="fa fa-pen me-2"></i>Edit</a>
							  <td>
							<?php if($data['status']=="1"){?>
	
							<a title="Click here to Disable Record" class="show-pointer btn btn-success"><span class="statusButton" id="<?php echo base64_encode($data['category_id']);?>">Active</span></a>	
						<?php	}
						 if($data['status']=="0"){?>
							<a title="Click here to Active This Record" class="show-pointer btn btn-warning"><span class="statusButton" id="<?php echo base64_encode($data['category_id']);?>">Deactive</span></a>	
						<?php	}?>
							</td>
							
							<td><a title="Click here to Delete This Record" class="show-pointer btn btn-danger"><span class="deleteButton" id="<?php echo base64_encode($data['category_id']);?>">Delete</span></a></td>
							 </tr>
						<?php
							$i++;
							} 
						}
						?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

	<?php include_once('footer_text.php'); ?>
</div>
<?php include_once('footer.php'); ?>
<script>
$(".deleteButton").click(function() {
    Swal.fire({
            title: "Are you sure !",
            text: "Do you want to Delate this record?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Add it!"
    }).then((result) => {
         if (result.isConfirmed) {
            var dataid = $(this).attr('id');
            window.location = "view-category.php?action=delete&id="+dataid;
        }
    });
});
$(".statusButton").click(function() {
	Swal.fire({
            title: "Are you sure !",
            text: "Do you really want to change the status of this record?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Add it!"
    }).then((result) => {
         if (result.isConfirmed) {
            var dataid = $(this).attr('id');
            window.location = "view-category.php?action=status&id="+dataid;
        }
    });

});

$(function () {
	$('#employee-role-table').DataTable({
	  "paging": true,
	  "lengthChange": true,
	  "searching": true,
	  "ordering": true,
	  "info": true,
	  "autoWidth": false
	});
});
</script>