<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
$id = check_input($con, base64_decode($_REQUEST['id']));
$query = mysqli_query($con, "SELECT * FROM `contact_us` WHERE `id`='" . $id . "' ");
$data = mysqli_fetch_array($query);
if (!$data) {
    die("" . mysqli_error($con));
}

?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">
    	<div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">View Inquiries</h3>
                <table class="table table-bordered">
					  <tbody>
					    <tr>
					      <th style="width:20%">Name</th>
					      <td><?php echo stripslashes(trim($data['name'])); ?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Date</th>
					      <td><?php echo date("d-m-Y", strtotime($data['created_data'])); ?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Email</th>
					      <td><?php echo stripslashes(trim($data['email'])); ?></td>
					    </tr>
					     <tr>
					      <th style="width:20%">Subject</th>
					      <td><?php echo stripslashes(trim($data['subject'])); ?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Phone</th>
					      <td><?php echo stripslashes(trim($data['phone'])); ?></td>
					    </tr> 
					    <tr>
					      <th style="width:20%">Message</th>
					      <td><?php echo stripslashes(trim($data['message'])); ?></td>
					    </tr>
					    
					    <tr>
							<td colspan="2">
								<a title="Back" class="show-pointer btn btn-outline-secondary" href="view-inquiry.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>	
							</td>
						</tr>
					  </tbody>
					</table>
            </div>

        </div>
	</div>

	<?php include_once('footer_text.php'); ?>
</div>
<?php include_once('footer.php'); ?>
