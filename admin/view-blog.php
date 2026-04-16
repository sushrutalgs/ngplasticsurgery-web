<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Blog.php";

if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='delete'){
	$Blog_class = new Blog();
    $response = $Blog_class->DeleteBlog($_REQUEST);
}

if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='status'){
	$Blog_class = new Blog();
    $response = $Blog_class->ActiveDeactiveBlog($_REQUEST);
}


?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="col-12">
        <div class="bg-light rounded h-100 p-4">
        	<div class="row">
        		<div class="col-6">
        			<h3 class="mb-4">Manage Blogs</h3>
        		</div>
        		<div class="col-6">
        			<a href="add-blog.php" type="button" class="btn btn-primary m-2" style="float:right"><i class="fa fa-plus ms-2"></i>&nbsp;Add Blog</a>
        		</div>
        	</div>
            

            <?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='data_uploaded') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-success">
			                    Blog Added successfully!!.
			                   </div>
		                  	</div>
	                  	</div>
	                  	<?php 
	                  	$_SESSION['msg'] = '';
	                  	} ?>
	                 	
						<?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='data_updated') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-success">
			                    Blog Updated successfully!!.
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
			                   Blog	Status changed successfully!!.
			                  	</div>
		                  	</div>
	                  	</div>
	                  	<?php 
	                  	
	                  	$_SESSION['msg'] = '';
	            	} ?>
	            
	            	<?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='delete_data') { ?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-danger">
			                   	Blog Deleted !!.
			                  	</div>
		                  	</div>
	                  	</div>
	                  	<?php 
	                  	
	                  	$_SESSION['msg'] = '';
	            	} ?>
            <div class="table-responsive">
                <table class="table  table-hover" id="employee-role-table">
                    <thead>
                        <tr>
							<th># Sr. No.</th>
							<th>Title</th>
							<th>Date</th>
							<th>Image</th>
							<th>Author</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
                    </thead>
                    <tbody>
                      <?php
							$fetch_blog=mysqli_query($con,"SELECT * FROM `ahq_blog` ORDER BY `blog_id` DESC") or die(mysqli_error($con));
							$i=1;
							if(mysqli_num_rows($fetch_blog)>0) {
							while($data = mysqli_fetch_array($fetch_blog)) {
						?>
						  <tr>
							<td><?php echo $i;?></td>
							
							<td><?php echo $data['title'];?></td>
							<td><?php echo date('d-m-Y',strtotime($data['blog_date']));?></td>
							<?php $blogImg = "BlogImg";?>
							<td><?php $imgfileSource = ".." . DIRECTORY_SEPARATOR . $blogImg . DIRECTORY_SEPARATOR . $data['image'];
			                  //if(file_exists($imgfileSource)){
			                  ?>
							<img src="<?php echo $imgfileSource; ?>" style="width:100px; height:100px;" />
							<?php // } ?>
							</td>
							
							<td><?php echo $data['author'];?></td>
							<td>
							<?php if($data['status']=="1"){?>
							<a title="Click here to Disable Record" class="show-pointer btn btn-success"><span class="statusButton" id="<?php echo base64_encode($data['blog_id']);?>">Active</span></a>	
						<?php	}
						 if($data['status']=="0"){?>
							<a title="Click here to Active This Record" class="show-pointer btn btn-warning"><span class="statusButton" id="<?php echo base64_encode($data['blog_id']);?>">Deactive</span></a>	
						<?php	}?>
						</td>
						
						<td>
							 <a href="edit-blog.php?id=<?php echo base64_encode($data['blog_id']); ?>" class="btn btn-outline-secondary"  title="Edit"><i class="fa fa-pen"> Edit</i></a>

						  <a title="Click here to Delete This Record" class="show-pointer btn btn-danger"><span class="deleteButton" id="<?php echo base64_encode($data['blog_id']);?>"><i class="fa fa-trash"> Delete</i></span></a>
						 </td>

						  </tr>
						<?php
							$i++;
							}    }
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
            window.location = "view-blog.php?action=delete&id="+dataid;
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
            window.location = "view-blog.php?action=status&id="+dataid;
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