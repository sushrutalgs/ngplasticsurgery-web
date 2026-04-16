<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Gallery.php";
$id= isset($_REQUEST['id'])?$_REQUEST['id']:'';
$id = check_input($con, base64_decode($id));
$id1 = check_input($con, $id);


if(isset($_POST['Submit']) && $_POST['Submit'] == 'Submit')
{
    $Gallery_class = new Gallery();
    $response = $Gallery_class->AddGallery($_POST);
}


if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'status') {
  	$Gallery_class = new Gallery();
    $response = $Gallery_class->ActiveDeactiveGallery($_REQUEST);
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete') {
	$Gallery_class = new Gallery();
    $response = $Gallery_class->DeleteGallery($_REQUEST);
}

?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="col-12">
        <div class="bg-light rounded h-100 p-4">
        	<div class="row">
        		<div class="col-6">
        			<h3 class="mb-4">Add Gallery</h3>
        		</div>
        	</div>
            

            <?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='data_uploaded') { ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="alert alert-success">
						Gallery Uploaded successfully!!.
						</div>
					</div>
				</div>
			<?php 
			$_SESSION['msg'] = '';
			} 
			?>
			<form class="form-horizontal" name="main_form" id="main_form" enctype="multipart/form-data"  method="post"  autocomplete="off">		
				
				<div class="col-xl-12 col-sm-12 mb-12">
                    <div class="form-group">
                        
                            <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                
                               <!--  <div id="dvPreview" class="fileinput-preview thumbnail"
                                    data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="http://www.placehold.it/200x150/3c8dbc/fff&text=Image" />
                                </div> -->
                                <div><span>Maximum Image Upload Size is <code>2MB</code></span></div>
                                <div>
                                    <div class="mb-3 mt-2">
		                               <input type="file" id="imgUpload" name="image[]" multiple  accept=".jpg, .jpeg, .png, .gif, .webp" />
		                            </div>
		                            <label id="imgUpload-error" class="error" for="imgUpload"></label>
                                </div>

                            </div>
                    </div>
                </div>
				<br />
				<div class="box-footer">
                    <input type="hidden" name="pid" value="<?php echo $id1; ?>">
					<button type="submit" class="btn btn-primary col-xl-2 col-sm-2" name="Submit" value="Submit">Submit</button>
				</div>
			</form>	
			<br />
			<div class="row">
				<div class="col-12">
						<h3 class="mb-4">Gallery Image List</h3>
				</div>
			</div>
			<div class="col-12">
				<?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='data_updated') { ?>
					<div class="row">
						<div class="col-sm-12">
							<div class="alert alert-success">
								Gallery Image Updated successfully!!.
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
									Gallery Image Status changed successfully!!.
								</div>
							</div>
						</div>
					<?php 

					$_SESSION['msg'] = '';
					} ?>

					<?php if(isset($_SESSION['msg']) && $_SESSION['msg']=='image_delete') { ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="alert alert-success">
									Gallery Image Deleted !!.
								</div>
							</div>
						</div>
					<?php 

					$_SESSION['msg'] = '';
					} ?>

				<div class="table-responsive">
	                <table class="table table-striped  table-hover" id="employee-role-table">
	                    <thead>
	                        <tr>
								<th># Sr. No.</th>
								<th>Gallery Image</th>
								<th>Status</th>
								<th>Delete</th>
							</tr>
	                    </thead>
	                    <tbody>
	                    <?php
							$fetch_banner_images=mysqli_query($con,"SELECT * FROM `gallery` ORDER BY `id` DESC")or die(mysqli_error($con));
							$i=1;
							if(mysqli_num_rows($fetch_banner_images)>0) {
							while($data = mysqli_fetch_array($fetch_banner_images)) {
						?>
						<tr>
							
							<td><?php echo $i;?></td>
							<?php $albumImg='Gallery';?>
							<td class="text-center">
								<?php $imgfileSource = ".." . DIRECTORY_SEPARATOR . $albumImg . DIRECTORY_SEPARATOR . $data['image'];
								if(file_exists($imgfileSource)){ ?>
								<img src="<?php echo $imgfileSource; ?>" Height="150" Width="250" /><?php } ?>
							</td>
							
							<td>
								<?php if($data['status']=="1"){?>
								<a title="Click here to Disable Record" class="show-pointer btn btn-success"><span class="statusButton" id="<?php echo base64_encode($data['id']);?>">Active</span></a>	
								<?php	}
								if($data['status']=="0"){?>
								<a title="Click here to Active This Record" class="show-pointer btn btn-warning"><span class="statusButton" id="<?php echo base64_encode($data['id']);?>">Deactive</span></a>	
								<?php	} ?>
							</td>

							<td>
								<a title="Click here to Delete This Record" class="show-pointer btn btn-danger"><span class="deleteButton" id="<?php echo base64_encode($data['id']);?>">Delete</span></a>
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
    </div>

	<?php include_once('footer_text.php'); ?>
</div>
<?php include_once('footer.php'); ?>
<script type="text/javascript">
$(document).ready(function() {
	$("#main_form").validate({
		rules: {
		'image[]': {
				required: true,
		},
		
		},
		messages: {
			'image[]': {
				required: "This field cannot be blank.",
			},
		}
	});
	

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
	            window.location = "upload_gallery.php?action=delete&id="+dataid;
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
	            confirmButtonText: "Yes, change status it!"
	    }).then((result) => {
	         if (result.isConfirmed) {
	            var dataid = $(this).attr('id');
	            window.location = "upload_gallery.php?action=status&id="+dataid;
	        }
	    });

	});
	$(function () {
		$('#employee-role-table').DataTable({
		  "responsive": true,
		  "paging": true,
		  "lengthChange": true,
		  "searching": false,
		  "ordering": false,
		  "info": true,
		  "autoWidth": true
		});
	});
});
</script>
