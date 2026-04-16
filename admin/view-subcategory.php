<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/SubCategory.php";

if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='delete'){
	$SubCategory_class = new SubCategory();
    $response = $SubCategory_class->DeleteSubCategory($_REQUEST);
}

if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='status'){
	$SubCategory_class = new SubCategory();
    $response = $SubCategory_class->ActiveDeactiveSubCategory($_REQUEST);
}


?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="col-12">
        <div class="bg-light rounded h-100 p-4">
        	<div class="row">
        		<div class="col-6">
        			<h3 class="mb-4">Manage Sub Category</h3>
        		</div>
        		<div class="col-6">
        			<a href="add-subcategory.php" type="button" class="btn btn-primary m-2" style="float:right"><i class="fa fa-plus ms-2"></i>&nbsp;Add Sub Category</a>
        		</div>
        	</div>
            

            <?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='data_uploaded') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-success">
			                    Sub Category Added successfully!!.
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
			                    Sub Category Updated successfully!!.
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
			                   	Sub Category Deleted !!.
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
							<th>Sub Category Name</th>						
							<th>Category</th>
							<th>Image</th>
							<th>Edit</th>
							<th>Status</th>
							<th>Delete</th>
						  </tr>
                    </thead>
                    <tbody>
                     <?php
						 $fetch_product=mysqli_query($con,"SELECT mc.category_name as sub_cat_name,c.category_name as main_cat_name,mc.image,mc.category_id,mc.status FROM `med-category` AS mc LEFT JOIN spc_category AS c ON mc.parent_cat_id=c.category_id") or die(mysqli_error($con));
							$i=1;
							if(mysqli_num_rows($fetch_product)>0) {
							while($data = mysqli_fetch_array($fetch_product)) {
						?>
						  <tr>
							  <td><?php echo $i;?></td>
							  <td><?php echo $data['sub_cat_name'];?></td>				  							  							  
							  <td><?php echo $data['main_cat_name'];?></td>
							  <td><?php
							  $productImg = "SubCategoryImages";
							   $imgfileSource = ".." . DIRECTORY_SEPARATOR . $productImg . DIRECTORY_SEPARATOR . $data['image'];
			    if(file_exists($imgfileSource)){ ?>
							<img src="<?php echo $imgfileSource; ?>" style="width:150px; height:150px;" /><?php } ?>
							</td>
							  <td><a href="edit-subcategory.php?action=edit&id=<?php echo base64_encode($data['category_id']);?>" class="btn btn-outline-secondary" style="margin-right:2px;margin-bottom:6px;" title="Edit"><i class="fa fa-pen"> Edit</i></a>
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
            window.location = "view-subcategory.php?action=delete&id="+dataid;
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
            window.location = "view-subcategory.php?action=status&id="+dataid;
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