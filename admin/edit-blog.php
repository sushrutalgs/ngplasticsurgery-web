<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Blog.php";

if(isset($_POST['Submit']) && $_POST['Submit']=='Save Changes') {
   $Blog_class = new Blog();
   $response = $Blog_class->AddEditBlog($_POST);
}

$id = check_input($con,base64_decode($_REQUEST['id']));
$id1 = check_input($con,$_REQUEST['id']);
$query = mysqli_query($con, "SELECT * FROM `ahq_blog` WHERE `blog_id`='".$id."' ");
$data =mysqli_fetch_array($query);
if(!$data) {  die("".mysqli_error()); }
	
$ext = pathinfo($data['image'], PATHINFO_EXTENSION);
$imgName = basename($data['image'], ".".$ext);
?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">
    	<div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Edit Blog</h3>
                <form name="blogform" id="blogform" method="post" autocomplete="off" enctype="multipart/form-data">
                	<div class="row">

                		<div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Blog Title*</label>
	                        <input type="text" class="form-control" id="blogTitle" name="blogTitle" value="<?php echo $data['title']; ?>" >
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Blog Slug*</label>
	                        <input type="text" class="form-control" id="titleSlug" name="titleSlug" value="<?php echo $data['title_slug']; ?>">
	                    </div>

	                    <div class="col-xl-6 col-sm-6 mb-6">
	                    	<label class="control-label col-sm-5" for="img">Upload Image</label>
	                        <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                        
                                        <div id="dvPreview" class="fileinput-preview thumbnail"
                                            data-trigger="fileinput" style="width: 200px; height: 150px;">
                                           <?php if (isset($data['image']) && $data['image'] != '') { ?>
                                                <img src="../<?php echo "BlogImg"."/".$data['image']; ?>" height="150" width="200">
                                            <?php } else { ?>
                                                <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;"/>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <div><span>Maximum Image Upload Size is <code>2MB</code></span></div>
                                        <div>
                                            <div class="mb-3 mt-2">
				                                <input class="form-control form-control-sm" name="imgUpload" id="imgUpload" type="file" accept=".jpg, .jpeg, .png, .gif, .mp4">
				                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-6">
	                    	<div class="row">
	                    		<div class="col-xl-12 col-sm-12 mb-3">
			                        <label for="exampleInputEmail1" class="form-label">Image Name</label>
			                        <input type="text" class="form-control" id="imgName" name="imgName" value="<?php echo $imgName; ?>">
			                    </div>
			                    <div class="col-xl-12 col-sm-12 mb-3">
			                        <label for="exampleInputEmail1" class="form-label">Image Alt</label>
			                        <input type="text" class="form-control" id="imgAlt" name="imgAlt"  value="<?php echo $data['image_alt']; ?>">
			                    </div>
			                    <div class="col-xl-12 col-sm-12 mb-3">
			                        <label for="exampleInputEmail1" class="form-label">Image Title</label>
			                        <input type="text" class="form-control" id="imgTitle" name="imgTitle" value="<?php echo $data['image_title']; ?>">
			                    </div>
	                    	</div>	
	                    </div>

	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Date</label>
	                        <input type="text" class="form-control" id="blogDate" name="blogDate" value="" >
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Author</label>
	                        <input type="text" class="form-control" id="blogAuthor" name="blogAuthor"  value="<?php echo $data['author']; ?>">
	                    </div>


	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Blog Description</label>
	                       	<textarea class="form-control discriptiontextarea" id="mainDescription" name="mainDescription" rows="3"><?php echo $data['description']; ?></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	<p> <strong>Please note </strong>: Do not copy and paste content from Microsoft Word or Google Docs, the formatting might come out badly. Paste content in a notepad and then paste here and then do formatting in the editor below</p>
	                    </div>


	                    <div class="col-xl-12 col-sm-12 mb-3 mt-3" style="background: gray;padding: 2% 1% 1% 3%;">
					        <h3><strong>SEO Description</strong></h3>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Schema</label>
	                       	<textarea class="form-control" id="scHema" name="scHema" rows="3"><?php echo $data['schema_content']; ?></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title Tag</label>
	                       	<textarea class="form-control" id="titleTag" name="titleTag" rows="3"><?php echo $data['title_tag']; ?></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Meta Keywords</label>
	                       	<textarea class="form-control" id="metaKeyword" name="metaKeyword" rows="3"><?php echo $data['meta_keyword']; ?></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Meta Description</label>
	                       	<textarea class="form-control" id="metaDescription" name="metaDescription" rows="3"><?php echo $data['meta_description']; ?></textarea>
	                    </div>

	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	<input type="hidden" name="id" id="id" value="<?php echo $id1; ?>" />
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
<script type="text/javascript">
   	$(document).ready(function() {
   		$("#blogTitle").stringToSlug({
            getPut: "#titleSlug,#imgName"
        });
		$("#blogform").validate({
			rules: {
			blogTitle: {
					required: true,
				},
			titleSlug: {
					required: true,
					// remote: "checkDuplicateblogTitle.php",
				},
			},
			
			messages: {
				blogTitle: {
					required: "This field cannot be blank.",
				},
				titleSlug: {
					required: "This field cannot be blank.",
					remote: "Title already exist.",
				},
			}
		});

		CKEDITOR.replace('mainDescription');
		$("#blogDate").datepicker( {
			dateFormat:"mm/dd/yy",
			autoclose: true,
			// setDate : "24-12-2024"
		}).datepicker('setDate', '<?php echo date('m/d/Y',strtotime($data['blog_date'])); ?>');
		// $("#blogDate").datepicker("setDate", "24-12-2024");
		// $("#blogDate").datepicker("setDate", "<?php echo date('d-m-Y',strtotime($data['blog_date'])); ?>");
	});
	window.onload = function () {
            var imgUpload = document.getElementById("imgUpload");
            
            imgUpload.onchange = function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("dvPreview");
                    dvPreview.innerHTML = "";
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    for (var i = 0; i < imgUpload.files.length; i++) {
                        var file = imgUpload.files[i];
                        var size=imgUpload.files[i].size;
                        if(size > 1024000)
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
                                img.height = "100";
                                img.width = "100";
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
</script>