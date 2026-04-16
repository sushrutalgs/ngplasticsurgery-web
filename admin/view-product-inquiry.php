<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/CommonFunction.php";

if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['action']) && $_GET['action']=='delete'){
	$CommonFunction_class = new CommonFunction();
	$response = $CommonFunction_class->DeleteProductInquiry($_GET);
}
?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="col-12">
        <div class="bg-light rounded h-100 p-4">
        	<div class="row">
        		<div class="col-6">
        			<h3 class="mb-4">Treatment Inquiries</h3>
        		</div>
        		
        	</div>
            

            <?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='delete_data') { ?>
                  	<div class="row">
		                <div class="col-sm-12">
			                <div class="alert alert-success alert-dismissible">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                   	Treatment Inquiry Deleted !!
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
							<th>Sr. No.</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Subject</th> 
							<th>Date</th>
							<th style="width: 20%;" >Action</th>
						</tr>
                    </thead>
                    <tbody>
                      <?php
							$inqury_blog=mysqli_query($con,"SELECT id,first_name,last_name,phone,email,created_datetime FROM `product_contact` ORDER BY `id` DESC") or die(mysqli_error($con));
							$i=1;
							if(mysqli_num_rows($inqury_blog)>0) {
							while($data = mysqli_fetch_array($inqury_blog)) {
								$name = $data['first_name']." ".$data['last_name'];
								$phone = $data['phone'];
								$email = $data['email'];
								$date = date("d-m-Y",strtotime($data['created_datetime']));

						?>
						  <tr>
						  <td><?php echo $i; ?></td>
							<td><?php echo $name; ?></td>
							<td><?php echo $phone; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $date;?></td>
					
						<td style="display: flex; justify-content: space-evenly;">
							 <a href="view-product-inquiry-details.php?id=<?php echo base64_encode($data['id']); ?>" class="btn btn-outline-secondary"  title="View"><i class="fa fa-eye"> View</i></a>

						  <a title="Click here to Delete This Record" class="show-pointer btn btn-danger"><span class="deleteButton" id="<?php echo base64_encode($data['id']);?>"><i class="fa fa-trash"> Delete</i></span></a>
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
	var dataid = $(this).attr('id');
	if(confirm("Do you really want to delete this record?")) {
		window.location = "view-inquiry.php?action=delete&id="+dataid;
	}
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