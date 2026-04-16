<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/NonSurgicalProduct.php";

if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='delete'){
	$Product_class = new NonSurgicalProduct();
    $response = $Product_class->DeleteNonSurgicalProduct($_REQUEST);
}

if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='status'){
	$Product_class = new NonSurgicalProduct();
    $response = $Product_class->ActiveDeactiveNonSurgicalProduct($_REQUEST);
}


?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="col-12">
        <div class="bg-light rounded h-100 p-4">
        	<div class="row">
        		<div class="col-6">
        			<h3 class="mb-4">Manage Non Surgical Procedure</h3>
        		</div>
        		<div class="col-6">
        			<a href="add-non-surgical.php" type="button" class="btn btn-primary m-2" style="float:right"><i class="fa fa-plus ms-2"></i>&nbsp;Add Surgical Procedure</a>
        		</div>
        	</div>
            

            <?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='data_uploaded') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-success">
			                    Non Surgical Procedure Added successfully!!.
			                   </div>
		                  	</div>
	                  	</div>
	                  	<?php 
	                  	$_SESSION['msg'] = '';
	                  	} 
	                ?>
	                
						 <?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='data_updated') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-success">
			                    Non Surgical Procedure Updated successfully!!.
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
			                   	Non Surgical Procedure Deleted !!.
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
						  	<th style="display: none;">id</th>
							<th># Id</th>
							<th>Product Name</th>
							<!-- <th>Category</th> -->
							<!-- <th>Images</th> -->
							<!-- <th>More Images</th> -->
							<th>Edit</th>
							<th>Status</th>
							<th>Delete</th>
						  </tr>
                    </thead>
                    <tbody>
                      <?php
						 $fetch_product=mysqli_query($con,"SELECT product_id,product_name,main_image,status,category_id FROM `non_surgical` ") or die(mysqli_error($con));
							$i=1;
							if(mysqli_num_rows($fetch_product)>0) {
							while($data = mysqli_fetch_array($fetch_product)) {
								
						?>
						  <tr>
						  	  <td style="display: none;"><?php echo $data['product_id'];?></td>
							  <td><?php echo $i;?></td>
							  <td><?php echo $data['product_name'];?></td>
							   <!-- <td><?php echo $category_data['category_name'];?></td> -->
							<!-- <td><?php
								  $productImg = "NonProductImages";
								   $imgfileSource = ".." . DIRECTORY_SEPARATOR . $productImg . DIRECTORY_SEPARATOR . $data['main_image'];
				   				 if(file_exists($imgfileSource)){ ?>
								<img src="<?php echo $imgfileSource; ?>" style="width:150px; height:150px;" /><?php } ?>
							</td> -->
							 <!-- <td><a href="insert-multiple-product-image.php?id=<?php echo base64_encode($data['product_id']); ?>" class="btn btn-primary" style="margin-right:2px;margin-bottom:6px;" title="View Images"><i class="fa fa-image"> Images</i></a></td> -->
							
							  <td><a href="edit-non-surgical.php?action=edit&id=<?php echo base64_encode($data['product_id']);?>" class="btn btn-outline-secondary" style="margin-right:2px;margin-bottom:6px;" title="Edit"><i class="fa fa-pen"> Edit</i></a>
							  
							  <td>
							<?php if($data['status']=="1"){ ?>
							<a title="Click here to Disable Record" class="show-pointer btn btn-success"><span class="statusButton" id="<?php echo base64_encode($data['product_id']);?>">Active</span></a>	
						<?php	}
						 if($data['status']=="0"){?>
							<a title="Click here to Active This Record" class="show-pointer btn btn-warning"><span class="statusButton" id="<?php echo base64_encode($data['product_id']);?>">Deactive</span></a>	
						<?php	} ?>
							</td>
							
							<td><a title="Click here to Delete This Record" class="show-pointer btn btn-danger"><span class="deleteButton" id="<?php echo base64_encode($data['product_id']);?>">Delete</span></a></td>
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
        confirmButtonText: "Yes, Delate it!"
    }).then((result) => {
        if (result.isConfirmed) {
            var dataid = $(this).attr('id');
            window.location = "view-non-surgical.php?action=delete&id="+dataid;
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
        confirmButtonText: "Yes, change it!"
    }).then((result) => {
        if (result.isConfirmed) {
           var dataid = $(this).attr('id');
           window.location = "view-non-surgical.php?action=status&id="+dataid;
        }
    });

});

$(function () {
	$('#employee-role-table').DataTable({
	  "order": [[0, 'desc']],
	  "paging": true,
	  "lengthChange": true,
	  "searching": true,
	  "ordering": true,
	  "info": true,
	  "autoWidth": false
	});
});
</script>