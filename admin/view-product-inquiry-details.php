<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
$id = check_input($con, base64_decode($_REQUEST['id']));
$query = mysqli_query($con, "SELECT * FROM `product_contact` WHERE `id`='" . $id . "' ");
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
                <h3 class="mb-4">View Treatment Inquiries</h3>
                <table class="table table-bordered">
					  <tbody>
					    <tr>
					      <th style="width:20%">Name</th>
					      <td><?php echo stripslashes(trim($data['first_name']))." ".stripslashes(trim($data['last_name'])); ?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Mobile Number </th>
					      <td><?php echo stripslashes(trim($data['phone'])); ?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Email Address </th>
					      <td><?php echo stripslashes(trim($data['email'])); ?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Surgical Service</th>
					      <td><?php echo stripslashes(trim($data['surgical'])); ?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Non Surgical Service</th>
					      <td><?php echo stripslashes(trim($data['non_surgical'])); ?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Select Date</th>
					      <td><?php echo stripslashes(trim($data['start_date'])); ?></td>
					    </tr> 
					    <tr>
					      <th style="width:20%">Message</th>
					      <td><?php echo stripslashes(trim($data['message'])); ?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Date</th>
					      <td><?php echo date("d-m-Y", strtotime($data['created_datetime'])); ?></td>
					    </tr>
					    
					    <tr>
							<td colspan="2">
								<a title="Back" class="show-pointer btn btn-outline-secondary" href="view-product-inquiry.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>	
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
