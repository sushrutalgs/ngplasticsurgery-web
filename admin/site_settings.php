<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Admin.php";
$fetch_settings =mysqli_query($con,"SELECT * FROM `site_config` WHERE  `id`='1' ")or die(mysqli_error($con));
$setting_data =mysqli_fetch_array($fetch_settings);
$response = array();
if(isset($_POST['Submit']))
{
    $Admin_class = new Admin();
    $response = $Admin_class->UpdateSettings($_POST);
    $_SESSION['status'] = $response['status'];
    $_SESSION['message'] = $response['message'];
    echo '<script type="text/javascript">';
    echo 'window.location.href = "site_settings.php";';
    echo '</script>';
    exit;
}
 
?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">

    	<div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Site Configuration</h3>
                <?php if(isset($_SESSION['status']) && $_SESSION['status']=='success') { ?>
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="alert alert-success">
		                        <?php echo $_SESSION['message'];?>
		                    </div>
		                </div>
		            </div>
		            <?php 
		            	$_SESSION['status'] = $_SESSION['message'] ="";
		            } 
		            ?>
		            <?php if(isset($response['status']) && $response['status']=='error') { ?>
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="alert alert-error alert-dismissible">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                        <?php echo $response['message'];?>
		                    </div>
		                </div>
		            </div>
		            <?php 
		             $_SESSION['status'] = $_SESSION['message'] ="";
		            } 
		            ?>
                
                <form name="settings" id="settings" method="post" autocomplete="off" enctype="multipart/form-data">
                	<div class="row">

                		<div class="col-xl-10 col-sm-10 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Company Name*</label>
	                        <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo trim(stripslashes($setting_data['company_name']))?>" >
	                    </div>
	                    <div class="col-xl-10 col-sm-10 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Company Email*</label>
	                        <input type="text" class="form-control" id="company_email" name="company_email" value="<?php echo trim(stripslashes($setting_data['company_email']))?>" >
	                    </div>
	                    <div class="col-xl-10 col-sm-10 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Company Phone*</label>
	                        <input type="text" class="form-control" id="company_phone" name="company_phone" value="<?php echo trim(stripslashes($setting_data['company_phone']))?>" >
	                    </div>
	                    <!-- <div class="col-xl-10 col-sm-10 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Secondary Phone (1)</label>
	                        <input type="text" class="form-control" id="company_phone1" name="company_phone1" value="<?php echo trim(stripslashes($setting_data['company_phone1']))?>" >
	                    </div>
	                    <div class="col-xl-10 col-sm-10 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Secondary Phone (2)</label>
	                        <input type="text" class="form-control" id="company_phone2" name="company_phone2" value="<?php echo trim(stripslashes($setting_data['company_phone2']))?>" >
	                    </div> -->
	                    <div class="col-xl-10 col-sm-10 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Company Address*</label>
	                        <input type="text" class="form-control" id="company_address" name="company_address" value="<?php echo trim(stripslashes($setting_data['company_address']))?>" >
	                    </div>
	                    
	                    

	                    <div class="col-xl-12 col-sm-12 mb-3">
		                    <button type="submit" class="btn btn-primary col-xl-2 col-sm-2" name="Submit" value="Save Changes">Save Changes</button>
		                </div>
                	</div>
                    
                </form>
            </div>
        </div>
	</div>

	<?php include_once('footer_text.php'); ?>
</div>
<?php include_once('footer.php'); ?>
<script>
$(document).ready(function() {
    $("#settings").validate({
        rules: {
            company_name: {
                required: true,
            },
            company_email: {
                required: true,
            },
            company_phone: {
                required: true,
            },
            company_address: {
                required: true,
            },
           
        },
        
        messages: {
            company_name: {
                required: "Please Enter Company Name",
            },
            company_email: {
                required: "Please Enter Company Email",
            },
            company_phone: {
                required: "Please Enter Company Phone",
            },
            company_address: {
                required: "Please Enter Company Address",
            },
            
        }
    });
});
</script>