<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Service.php";

$id = check_input($con, base64_decode($_REQUEST['id']));
$id1 = check_input($con, $_REQUEST['id']);
$industries_details_array = array();

$query = mysqli_query($con, "SELECT * FROM `service` WHERE `id`='" . $id . "' ");
$data = mysqli_fetch_array($query);
if (!$data) {
  die("" . mysqli_error());
}

$service_details_query = mysqli_query($con,"SELECT * FROM `service_details` WHERE `service_id`='".$id."'");

while($service_details_data = mysqli_fetch_assoc($service_details_query))
{
    $industries_details_array[] = $service_details_data;
}


if(isset($_POST['Submit']) && $_POST['Submit']=='Save Changes') 
{
    $Category_class = new Service();
    $response = $Category_class->AddEditService($_POST);
}

$product_methods_array = array();
$get_methods = mysqli_query($con, "SELECT * FROM `service_methods` WHERE service_id = '".$id."'");
$methods_num_row = mysqli_num_rows($get_methods);

while ($methods_data = mysqli_fetch_assoc($get_methods)) {
    $product_methods_array[]  = $methods_data;
}
?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">
    	<div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Edit Service</h3>
                <form name="serviceInfo" id="serviceInfo" method="post" autocomplete="off" enctype="multipart/form-data">
                	<div class="row">
                		<div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Service Name*</label>
	                        <input type="text" class="form-control" id="serviceName" name="serviceName" value="<?php echo trim($data['service_name']);?>">
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Service Slug*</label>
	                        <input type="text" class="form-control" id="serviceSlug" name="serviceSlug" value="<?php echo trim($data['service_slug']);?>">
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <div class="form-group row">
                                    <label class="control-label col-sm-4" for="img">Icon Image</label>
                                    <div class="col-md-8">

                                        <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                            <div><span>Maximum Image Upload Size is <code>2MB</code></span></div>
                                            <div id="dvPreview" class="fileinput-preview thumbnail"
                                                data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                <?php
	                                                if (isset($data['image']) && $data['image'] != '') {
	                                                    ?>
	                                                   <img src="../ServiceImages/<?php echo $data['image']; ?>" height="150" width="150"/>
	                                                <?php } else {
	                                                    ?>
	                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Select Image">
	                                                    <?php
	                                                }
                                                ?>
                                            </div>
                                            <div>
	                                            <div class="mb-3 mt-2">
					                                <input class="form-control form-control-sm" name="image" id="imgUpload" type="file" accept=".jpg, .jpeg, .png, .gif, .webp">
					                            </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Short Description</label>
	                       	<textarea class="form-control" id="shortDescription" name="shortDescription" rows="3"><?php echo trim($data['shortDescription']);?></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	<p> <strong>Please note </strong>: Do not copy and paste content from Microsoft Word or Google Docs, the formatting might come out badly. Paste content in a notepad and then paste here and then do formatting in the editor below</p>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3 mt-3" style="background: gray;padding: 2% 1% 1% 3%;">
					        <h3><strong>Page Section</strong></h3>
	                    </div>
	                    <div class="row" id="section_main_div">
	                    	<?php if(empty($industries_details_array)) { ?>
		                    <div class="col-xl-6 col-sm-6 mb-3">
		                        <div class="form-group row">
	                                <label class="control-label col-sm-4" for="img">Section Image</label>
	                                <div class="col-md-8">

	                                    <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
	                                        <div><span>Maximum Image Upload Size is <code>2MB</code></span></div>
	                                        <div id="dvPreview1" class="fileinput-preview thumbnail"
	                                            data-trigger="fileinput" style="width: 200px; height: 150px;">
	                                            <img src="http://www.placehold.it/200x150/3c8dbc/fff&text=Image" />
	                                        </div>
	                                        <div>
	                                            <div class="mb-3 mt-2">
					                                <input class="form-control form-control-sm" name="section[1][servies_image]" id="servies_image_1" type="file" accept=".jpg, .jpeg, .png, .gif, .webp">
					                            </div>
	                                        </div>

	                                    </div>
	                                </div>
	                           	</div>
		                    </div>
	                   
                    		<div class="col-xl-6 col-sm-6 mb-3">
		                    	<div class="row">
		                    		<div class="col-xl-12 col-sm-12 mb-3">
			                            <label for="exampleInputEmail1" class="form-label">Section Title</label>
				                       	<input type="text" class="form-control" id="categorySlug" name="section[1][section_title]">
				                    </div>
				                    <div class="col-xl-12 col-sm-12 mb-3">
			                            <label for="exampleInputEmail1" class="form-label">Image Name</label>
				                       	<input type="text" class="form-control" id="categorySlug" name="section[1][image_name]">
				                    </div>
				                    <div class="col-xl-12 col-sm-12 mb-3">
			                            <label for="exampleInputEmail1" class="form-label">Image Alt Name</label>
				                       	<input type="text" class="form-control" id="categorySlug" name="section[1][image_alt]">
				                    </div>
				                    <div class="col-xl-12 col-sm-12 mb-3">
			                            <label for="exampleInputEmail1" class="form-label">Image Title</label>
				                       	<input type="text" class="form-control" id="categorySlug" name="section[1][image_title]">
				                    </div>
		                    	</div>
		                    </div>
		                    <div class="col-xl-12 col-sm-12 mb-3">
		                    	<label for="exampleInputEmail1" class="form-label">Section Content</label>
		                       	<textarea class="form-control" id="detailText0" name="section[1][detailText]" rows="3"></textarea>
		                    </div>
		                    <?php } else { 
			                    $i=1;
			                    foreach($industries_details_array as $industries_details_key => $industries_details_value)
			                    {
			                ?>
			                <div class="row mt-3" id="section_<?php echo $i;?>">
			                	<div class="col-xl-12 col-sm-12 mb-3"><hr>
			                		<div style="float: right;"><button type="button" class="btn btn-danger rounded-pill" onclick="RemoveSection('<?php echo $i;?>')">Delate</button>
			                		</div>
			                	</div>
			                <input type="hidden" name="section[<?php echo $i;?>][id]" value="<?php echo $industries_details_value['id'];?>">
				                <div class="col-xl-6 col-sm-6 mb-3">
			                        <div class="form-group row">
		                                <label class="control-label col-sm-4" for="img">Section Image</label>
		                                <div class="col-md-8">

		                                    <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
		                                        <div><span>Maximum Image Upload Size is <code>2MB</code></span></div>
		                                        <div id="dvPreview<?php echo $i;?>" class="fileinput-preview thumbnail"
		                                            data-trigger="fileinput" style="width: 200px; height: 150px;">
		                                            <?php

                                                    if (isset($industries_details_value['image_path']) && $industries_details_value['image_path'] != '') {
                                                        $extension = strtolower(pathinfo($industries_details_value['image_path'], PATHINFO_EXTENSION));
                                                        ?>
                                                     <input type="hidden" name="section[<?php echo $i;?>][servies_image_old_file_name]" value="<?php echo $industries_details_value['image_path']; ?>">
                                                    <?php if($extension == 'mp4') { ?>
                                                        <video controls width="210" height="150"><source src="../ServiceImages/<?php echo $industries_details_value['image_path']; ?>">Your browser does not support the video tag.</video>
                                                       
                                                    <?php } else{ ?>
                                                        <img src="../ServiceImages/<?php echo $industries_details_value['image_path']; ?>" width="210" height="150"/>
                                                    <?php } ?>
                                                    <?php } else {
                                                        ?>

                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Select Image">
                                                        <?php
                                                    }
                                                    ?>
		                                        </div>
		                                        <div>
		                                            <div class="mb-3 mt-2">
						                                <input class="form-control form-control-sm" name="section[<?php echo $i;?>][servies_image]" id="servies_image_1" type="file" accept=".jpg, .jpeg, .png, .gif, .webp">
						                            </div>
		                                        </div>

		                                    </div>
		                                </div>
		                           	</div>
			                    </div>
		                   
	                    		<div class="col-xl-6 col-sm-6 mb-3">
			                    	<div class="row">
			                    		<div class="col-xl-12 col-sm-12 mb-3">
				                            <label for="exampleInputEmail1" class="form-label">Section Title</label>
					                       	<input type="text" class="form-control" id="categorySlug" name="section[<?php echo $i;?>][section_title]" value="<?php echo trim(stripslashes($industries_details_value['section_title']))?>">
					                    </div>
					                    <div class="col-xl-12 col-sm-12 mb-3">
				                            <label for="exampleInputEmail1" class="form-label">Image Name</label>
					                       	<input type="text" class="form-control" id="categorySlug" name="section[<?php echo $i;?>][image_name]" value="<?php echo trim(stripslashes($industries_details_value['image_name']))?>">
					                    </div>
					                    <div class="col-xl-12 col-sm-12 mb-3">
				                            <label for="exampleInputEmail1" class="form-label">Image Alt Name</label>
					                       	<input type="text" class="form-control" id="categorySlug" name="section[<?php echo $i;?>][image_alt]" value="<?php echo trim(stripslashes($industries_details_value['image_alt']))?>">
					                    </div>
					                    <div class="col-xl-12 col-sm-12 mb-3">
				                            <label for="exampleInputEmail1" class="form-label">Image Title</label>
					                       	<input type="text" class="form-control" id="categorySlug" name="section[<?php echo $i;?>][image_title]" value="<?php echo trim(stripslashes($industries_details_value['image_title']))?>">
					                    </div>
			                    	</div>
			                    </div>
			                    <div class="col-xl-12 col-sm-12 mb-3">
			                    	<label for="exampleInputEmail1" class="form-label">Section Content</label>
			                       	<textarea class="form-control" id="detailText<?php echo $i;?>" name="section[<?php echo $i;?>][detailText]" rows="3"><?php echo trim(stripslashes($industries_details_value['detailText']))?></textarea>
			                    </div>
			                </div>
			               	<?php $i++; } ?> 

                			<?php  } ?>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	<input type="hidden" id="section_count" value="<?php echo (count($industries_details_array) > 0) ? count($industries_details_array) : 1; ?>">
	                    	<a href="javascript:void(0);" class="btn btn-primary rounded-pill" id="add_more_pricing" onclick="AddMoreSection();"><i class="fa fa-plus"></i> Add More</a>
	                    </div>

	                    <div class="col-xl-12 col-sm-12 mb-3 mt-3" style="background: gray;padding: 2% 1% 1% 3%;">
					        <h3><strong>Methods</strong></h3>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	
							<table class="table table-bordered">
		                        <thead>
		                          <tr>
		                          	<th>image</th>
		                            <th>Title</th>
		                            <!-- <th>Description</th> -->
		                            <th>Action</th>
		                          </tr>
		                        </thead>
		                        <tbody>

		                        <?php 

				                        if(!empty($product_methods_array))
				                        {
				                            $i = 1;
				                            foreach ($product_methods_array as $key => $value) {
				                                ?>
				                                   
				                                     <tr class="method_main_div methods_<?php echo $i;?>">
						                            	<th>
						                            		<?php 
						                            		if (isset($value['image']))
						                            		{
						                            		?>
						                            		<img src="../ServiceImages/<?php echo $value['image']; ?>" width="100" height="100"/>
						                            	<?php }else{ ?>
						                            		<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Select Image" width="100" height="100">
						                            	<?php } ?>
						                            		<br>
						                            		<input type="file" name="methods[<?php echo $i;?>][image]" class="mt-3"></th>
					                                    <td><input type="text" class="form-control" name="methods[<?php echo $i;?>][title]" value="<?php echo $value['title'];?>"></td>
					                                    <input type="hidden" name="methods[<?php echo $i;?>][methods_id]" value="<?php echo $value['id'];?>">
					                                    
					                                    <td><button type="button" class="btn btn-danger btn-sm" onclick="removeMethods('<?php echo $i;?>');">Remove</button></td>
					                                </tr>
				                                <?php
				                                $i ++;
				                            }
				                            ?>
				                           
				                            <?php

				                        }
				                        else
				                        {
				                            ?>
				                            <tr class="method_main_div">
				                            	<th><input type="file" name="methods[0][image]"></th>
			                                    <td><input type="text" class="form-control" name="methods[0][title]"></td>
			                                    <!-- <td><textarea type="text" class="form-control" name="methods[0][description]" rows="5" cols="50"></textarea></td> -->
			                                    <td></td>
			                                </tr>
				                            <?php






				                        }
				                       ?>
	                            
		                        <tr>
		                            <input type="hidden" id="methods_count" value="<?php echo (!empty($product_methods_array)) ? count($product_methods_array) : 1; ?>">
		                            <td colspan="4"><button class="btn btn-primary rounded-pill" id="add_more_methods" type="button"><i class="fa fa-plus"></i> Add More</button></td>
		                          </tr>
		                          
		                        </tbody>
		                      </table>
							
	                    </div>
	                    


	                    <div class="col-xl-12 col-sm-12 mb-3 mt-3" style="background: gray;padding: 2% 1% 1% 3%;">
					        <h3><strong>SEO Description</strong></h3>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Schema</label>
	                       	<textarea class="form-control" id="Schema" name="Schema" rows="3"><?php echo trim($data['schema_content']);?></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title Tag</label>
	                       	<textarea class="form-control" id="titleTag" name="titleTag" rows="3"><?php echo trim($data['title_tag']);?></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Meta Keywords</label>
	                       	<textarea class="form-control" id="metaKeyword" name="metaKeyword" rows="3"><?php echo trim($data['meta_keyword']);?></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Meta Description</label>
	                       	<textarea class="form-control" id="metaDescription" name="metaDescription" rows="3"><?php echo trim($data['meta_description']);?></textarea>
	                    </div>

	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	<input type="hidden" name="id"  id="id" value="<?php echo $id1;?>">
		                    <button type="submit" class="btn btn-primary col-xl-2 col-sm-2" name="Submit" value="Save Changes">Save Changes</button>
		                     <!-- <input type="submit" name="submit" class="btn btn-info" value="Submit">
                        <input type="reset" name="reset" class="btn bg-primary" value="Reset"> -->
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
var num_row = '<?php echo (count($industries_details_array) > 0) ? count($industries_details_array) : '0';?>';
$(document).ready(function() {
	if(num_row > 0)
	{
		
		for (var i =1; i <= num_row; i++) { 
			CKEDITOR.replace('detailText'+i);
			ImgUpload(i);
		}

	}
	else
	{
		ImgUpload(1);
	}
	
	$("#serviceName").stringToSlug({
        getPut: "#serviceSlug"
    });
	$("#serviceInfo").validate({
		rules: {		   	
		serviceName: {
				required: true,
			},
			serviceSlug: {
				required: true,
				// remote: "checkDuplicateservice.php",
			},
		},
		messages: {		   
		    serviceName: {
				required: "This field cannot be blank.",
			},
			serviceSlug: {
				required: "This field cannot be blank.",
				remote: "Product already exist.",
			},
			
		}
	});
	$(function () {
        CKEDITOR.replace('shortDescription');
        CKEDITOR.replace('detailText0');
        // $(".textarea").wysihtml5();
    });

    $("#add_more_methods").click(function(){
        var methods_count = $("#methods_count").val();
        var new_methods_count = parseInt(methods_count)+1;

        var methods_html = '<tr class="method_main_div methods_'+new_methods_count+'"><th><input type="file" name="methods['+new_methods_count+'][image]"></th><td><input type="text" class="form-control" name="methods['+new_methods_count+'][title]"></td><td><button type="button" class="btn btn-danger btn-sm" onclick="removeMethods('+new_methods_count+');">Remove</button></td></tr>';

        $(".method_main_div:last").after(methods_html);
        $("#methods_count").val(new_methods_count);
    });
});
window.onload = function () {
    var imgUpload = document.getElementById("imgUpload");
   	imgUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("dvPreview");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp|.webp)$/;
            for (var i = 0; i < imgUpload.files.length; i++) {
                var file = imgUpload.files[i];
                var size=imgUpload.files[i].size;
                if(size > 2048000)
                {
					alert("Exceed the Maximum Image Size");
					$(imgUpload).val("");
					dvPreview.innerHTML = "";
					return false;
        		}
                
                if (regex.test(file.name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        img.height = "150";
                        img.width = "150";
                        img.src = e.target.result;
                        dvPreview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert(file.name + " is not a valid image file.");
                    dvPreview.innerHTML = "";
                    return false;
                }
            }
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    }
} 
function AddMoreSection()
{
	var section_count = $("#section_count").val();
	var section_count_new = parseInt(section_count)+1;

	var section_html = '<div class="row mt-3" id="section_'+section_count_new+'"><div class="col-xl-12 col-sm-12 mb-3"><hr><div style="float: right;"><button type="button" class="btn btn-danger rounded-pill" onclick="RemoveSection('+section_count+')">Delate</button></div></div><div class="col-xl-6 col-sm-6 mb-3"><div class="form-group row"><label class="control-label col-sm-4" for="img">Section Image</label><div class="col-md-8"><div class="fileinput fileinput-new fileinputCat" data-provides="fileinput"><div><span>Maximum Image Upload Size is <code>2MB</code></span></div><div id="dvPreview'+section_count_new+'" class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/3c8dbc/fff&text=Image" /></div><div><div class="mb-3 mt-2"><input class="form-control form-control-sm" name="section['+section_count_new+'][servies_image]" id="servies_image_'+section_count_new+'" type="file" accept=".jpg, .jpeg, .png, .gif, .webp"></div></div></div></div></div></div>';

		section_html += '<div class="col-xl-6 col-sm-6 mb-3"><div class="row"><div class="col-xl-12 col-sm-12 mb-3"><label for="exampleInputEmail1" class="form-label">Section Title</label><input type="text" class="form-control" id="categorySlug" name="section['+section_count_new+'][section_title]"></div><div class="col-xl-12 col-sm-12 mb-3"><label for="exampleInputEmail1" class="form-label">Image Name</label><input type="text" class="form-control" id="categorySlug" name="section['+section_count_new+'][image_name]"></div><div class="col-xl-12 col-sm-12 mb-3"><label for="exampleInputEmail1" class="form-label">Image Alt Name</label><input type="text" class="form-control" id="categorySlug" name="section['+section_count_new+'][image_alt]"></div><div class="col-xl-12 col-sm-12 mb-3"><label for="exampleInputEmail1" class="form-label">Image Title</label><input type="text" class="form-control" id="categorySlug" name="section['+section_count_new+'][image_title]"></div></div></div>';

		section_html += '<div class="col-xl-12 col-sm-12 mb-3"><label for="exampleInputEmail1" class="form-label">Section Content</label><textarea class="form-control" id="detailText'+section_count_new+'" name="section['+section_count_new+'][detailText]" rows="3"></textarea></div></div>';

		$("#section_main_div").append(section_html);
		$("#section_count").val(section_count_new);
		CKEDITOR.replace('detailText'+section_count_new);
		ImgUpload(section_count_new);
} 
function ImgUpload(section_id)
{
	// var imgUpload = ;
	console.log(section_id)
	$("#servies_image_"+section_id).change(function () {
		console.log("change")
	    if (typeof (FileReader) !== "undefined") {
	        var dvPreview = $("#dvPreview"+section_id);
	        dvPreview.html("");
	        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp|.webp)$/;

	        $.each(this.files, function (index, file) {
	            var size = file.size;
	            if (size > 2048000) {
	                alert("Exceed the Maximum Image Size");
	                imgUpload.val("");
	                dvPreview.html("");
	                return false;
	            }

	            if (regex.test(file.name.toLowerCase())) {
	                var reader = new FileReader();
	                reader.onload = function (e) {
	                    var img = $("<img />", {
	                        height: 150,
	                        width: 150,
	                        src: e.target.result
	                    });
	                    dvPreview.append(img);
	                };
	                reader.readAsDataURL(file);
	            } else {
	                alert(file.name + " is not a valid image file.");
	                dvPreview.html("");
	                return false;
	            }
	        });
	    } else {
	        alert("This browser does not support HTML5 FileReader.");
	    }
	});
} 
function RemoveSection(section_id)
{
	var section_count = $("#section_count").val();
	var section_count_new = parseInt(section_count)-1;
	$("#section_count").val(section_count_new);
	$("#section_"+section_id).remove();
}
function removeMethods(id)
{
    $(".methods_"+id).remove();
    var methods_count = $("#methods_count").val();
    var new_methods_count = parseInt(methods_count)-1;
    $("#methods_count").val(new_methods_count);
} 
</script>