<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');



$get_inquiries_sql = mysqli_query($con, "SELECT COUNT(id) as total_inquiries_orders FROM `contact_us`");
$get_inquiries = mysqli_fetch_assoc($get_inquiries_sql);

?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">
	    <div class="row g-4">
	        
	        <div class="col-sm-6 col-xl-3">
	        	<a href="view-inquiry.php">
		            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
		                <i class="fa fa-question-circle fa-3x text-primary"></i>
		                <div class="ms-3">
		                    <p class="mb-2">Total Inquiries</p>
		                    <h6 class="mb-0"><?php echo $get_inquiries['total_inquiries_orders'];?></h6>
		                </div>
		            </div>
		        </a>
	        </div>
	       
	    </div>
	</div>

	<?php include_once('footer_text.php'); ?>
</div>
<?php include_once('footer.php'); ?>