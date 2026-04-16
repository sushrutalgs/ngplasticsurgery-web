<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Users.php";
$response = array();
if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='delete'){
	$Users_class = new Users();
	$response = $Users_class->DeleteUser($_GET);
}
if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='change_status'){
	$Users_class = new Users();
	$response = $Users_class->ActiveDeactiveUser($_GET);
}

$fetch_user =mysqli_query($con,"SELECT * FROM user")or die(mysqli_error($con));

?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="col-12">
        <div class="bg-light rounded h-100 p-4">
        	<div class="row">
        		<div class="col-6">
        			<h3 class="mb-4">User</h3>
        		</div>
        		
        	</div>
            

            <?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='status_changed') { ?>
	                  	<div class="row">
			                <div class="col-sm-6">
				                <div class="alert alert-success">
			                    Status changed successfully!!.
			                  	</div>
		                  	</div>
	                  	</div>
	                  	<?php 
	                  	
	                  	$_SESSION['msg'] = '';
	                  	} ?>
	                  	<?php 

	                  	if(isset($_SESSION['status']) && $_SESSION['status'] == "success")
	                  	{
	                  	?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-success">
			                    <?php echo $_SESSION['message'];?>
			                  	</div>
		                  	</div>
	                  	</div>
	                  	<?php
	                  	unset($_SESSION['status']);
	                  	unset($_SESSION['message']);
	                  	}
	                  	?>
	                  	<?php 

	                  	if(isset($_SESSION['status']) && $_SESSION['status'] == "error")
	                  	{
	                  	?>
	                  	<div class="row">
			                <div class="col-sm-12">
				                <div class="alert alert-danger">
			                    <?php echo $_SESSION['message'];?>
			                  	</div>
		                  	</div>
	                  	</div>
	                  	<?php
	                  	unset($_SESSION['status']);
	                  	unset($_SESSION['message']);

	                  	}
	                  	?>
            <div class="table-responsive">
                <table class="table table  table-hover" id="employee-role-table">
                    <thead>
                        <tr>
							<th># Sr No.</th>
						    <th>Name</th>
						    <th>Email</th>
						    <th>Phone</th>
						    <th>Status</th>
							<th>Action</th>
						</tr>
                    </thead>
                    <tbody>
                      <?php
							$i=1;
							if(mysqli_num_rows($fetch_user)>0) {
							while($data = mysqli_fetch_array($fetch_user)) {
						?>
						  <tr>
						   <td><?php echo $i;?></td>
							<td><?php echo $data['first_name']." ".$data['last_name'];?></td>
							<td><?php echo $data['email'];?></td>
							<td><?php echo $data['phone'];?></td>
							<td>
								<?php if($data['status']=="1"){?>
								<a title="Click here to Disable User" class="btn btn-success" onclick="ChangeStatus(1,'<?php echo base64_encode($data['id']);?>')"><span>Active</span></a>	
								<?php	}
								 if($data['status']=="0"){?>
									<a title="Click here to Active This User" class="btn btn-warning"><span class="" id="<?php echo base64_encode($data['id']);?>" onclick="ChangeStatus(0,'<?php echo base64_encode($data['id']);?>')">Deactive</span></a>	
								<?php	}?>
							</td>
							<td>
								<a href="view_user_detail.php?id=<?php echo base64_encode($data['id']);?>" target="_blank" class="btn btn-outline-secondary" style="margin-right: 2px;" title="View">
									<i class="fa fa-eye"> View</i>
								</a>
								<a href="javascript:void(0)" id="<?php echo base64_encode($data['id']);?>" class="btn btn-danger deleteButton" style="margin-right: 2px;" title="Delete">
									<i class="fa fa-trash"> Delete</i>
								</a>
								
							</td>
							
						  </tr>
						<?php $i++;
							} }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

	<?php include_once('footer_text.php'); ?>
</div>
<?php include_once('footer.php'); ?>
<script>
function ChangeStatus(status,id)
{
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
           var dataid = id;
           window.location = "users.php?action=change_status&status="+status+"&id="+dataid;
        }
    });
}

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
            window.location = "users.php?action=delete&id="+dataid;
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
