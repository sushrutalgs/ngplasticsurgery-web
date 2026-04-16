<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
$id=check_input($con,base64_decode($_GET['id']));
$id1=check_input($con,$_GET['id']);
$fetch_user = mysqli_query($con,"SELECT * FROM user  WHERE id = ".$id."")or die(mysqli_error($con));
$user_data = mysqli_fetch_array($fetch_user)
?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">
    	<div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">View User</h3>
                <table class="table table-bordered">
					  <tbody>
					    <tr>
					      <th style="width:20%">First Name</th>
					      <td><?php echo trim(stripslashes($user_data['first_name']));?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Last Name</th>
					      <td><?php echo trim(stripslashes($user_data['first_name']));?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Email</th>
					      <td><?php echo trim(stripslashes($user_data['email']));?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Phone</th>
					      <td><?php echo trim(stripslashes($user_data['phone']));?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Company Name</th>
					      <td><?php echo trim(stripslashes($user_data['company_name']));?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Country / Region</th>
					      <td><?php echo trim(stripslashes($user_data['country']));?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Town / City</th>
					      <td><?php echo trim(stripslashes($user_data['city']));?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">State</th>
					      <td><?php echo trim(stripslashes($user_data['state']));?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Zip Code</th>
					      <td><?php echo trim(stripslashes($user_data['zip_code']));?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Address Line 1</th>
					      <td><?php echo trim(stripslashes($user_data['address_line_1']));?></td>
					    </tr>
					    <tr>
					      <th style="width:20%">Address Line 2</th>
					      <td><?php echo trim(stripslashes($user_data['address_line_2']));?></td>
					    </tr>
					    <tr>
							<td colspan="2">
								<a title="Back" class="show-pointer btn btn-outline-secondary" href="users.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>	
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
