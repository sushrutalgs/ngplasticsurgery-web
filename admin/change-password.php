<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Admin.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Submit']) && $_POST['Submit']=='Change Password') {
	$Admin_class = new Admin();
    $response = $Admin_class->AdminChangePassword($_POST);
}
 
?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">
		<?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='data_updated') { ?>
                  	<div class="row">
		                <div class="col-sm-12">
			                <div class="alert alert-success">
		                    	Password Change successfully!!.
		                  	</div>
	                  	</div>
                  	</div>
                  	<?php 
                  	$_SESSION['msg'] = '';
                  	} 
                  ?>
    	<div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Change Password</h3>
                
                <form name="ChangePassword" id="ChangePassword" method="post" autocomplete="off" enctype="multipart/form-data">
                	<div class="row">

                		<div class="col-xl-10 col-sm-10 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Old Password*</label>
	                        <input type="password" class="form-control" id="oldPassword" name="oldPassword">
	                    </div>
	                    <div class="col-xl-10 col-sm-10 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">New Password*</label>
	                        <input type="password" class="form-control" id="newPassword" name="newPassword">
	                    </div>
	                    <div class="col-xl-10 col-sm-10 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Confirm Password*</label>
	                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
	                    </div>

	                    <div class="col-xl-12 col-sm-12 mb-3">
		                    <button type="submit" class="btn btn-primary col-xl-2 col-sm-2" name="Submit" value="Change Password">Change Password</button>
		                </div>
                	</div>
                    
                </form>
            </div>
        </div>
	</div>

	<?php include_once('footer_text.php'); ?>
</div>
<?php include_once('footer.php'); ?>
<script type="text/javascript">
$(document).ready(function() {
	$("#ChangePassword").validate({
		rules: {
		oldPassword: {
				required: true,
				remote: "checkOldpassword.php",
			},
			newPassword: {
				required: true,
				},
			confirmPassword: {
				required: true,
				equalTo: '#newPassword',
				}
		},
		messages: {
			oldPassword: {
				required: "This field cannot be blank.",
				remote: "Old Password Does Not Match.",
			},
			newPassword: {
				required: "This field cannot be blank.",
				
				
			},
			confirmPassword: {
				required: "This field cannot be blank.",
				equalTo: "Please enter same password again.",
				}	
		}
	});
});
</script>