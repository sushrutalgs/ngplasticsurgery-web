<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Blog.php";

if(isset($_POST['Submit']) && $_POST['Submit']=='Add Blog') {
   $Blog_class = new Blog();
   $response = $Blog_class->AddEditBlog($_POST);
}
?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">
    	<div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Add Blog</h3>
                <form name="blogform" id="blogform" method="post" autocomplete="off" enctype="multipart/form-data">
                	<div class="row">

                		<div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Blog Title*</label>
	                        <input type="text" class="form-control" id="blogTitle" name="blogTitle">
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Blog Slug*</label>
	                        <input type="text" class="form-control" id="titleSlug" name="titleSlug">
	                    </div>

	                    <div class="col-xl-6 col-sm-6 mb-6">
	                    	<label class="control-label col-sm-5" for="img">Upload Image</label>
	                        <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                        
                                        <div id="dvPreview" class="fileinput-preview thumbnail"
                                            data-trigger="fileinput" style="width: 200px; height: 150px;">
                                            <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;" />
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
			                        <input type="text" class="form-control" id="imgName" name="imgName">
			                    </div>
			                    <div class="col-xl-12 col-sm-12 mb-3">
			                        <label for="exampleInputEmail1" class="form-label">Image Alt</label>
			                        <input type="text" class="form-control" id="imgAlt" name="imgAlt">
			                    </div>
			                    <div class="col-xl-12 col-sm-12 mb-3">
			                        <label for="exampleInputEmail1" class="form-label">Image Title</label>
			                        <input type="text" class="form-control" id="imgTitle" name="imgTitle">
			                    </div>
	                    	</div>	
	                    </div>

	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Date</label>
	                        <input type="text" class="form-control" id="blogDate" name="blogDate" value="<?php echo date("d-m-Y");?>" >
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Author</label>
	                        <input type="text" class="form-control" id="blogAuthor" name="blogAuthor" value="<?php echo Company_Name;?>">
	                    </div>


	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Blog Description</label>
	                       	<textarea class="form-control discriptiontextarea" id="mainDescription" name="mainDescription" rows="3"></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	<p> <strong>Please note </strong>: Do not copy and paste content from Microsoft Word or Google Docs, the formatting might come out badly. Paste content in a notepad and then paste here and then do formatting in the editor below</p>
	                    </div>


	                    <div class="col-xl-12 col-sm-12 mb-3 mt-3" style="background: gray;padding: 2% 1% 1% 3%;">
					        <h3><strong>SEO Description</strong></h3>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Schema</label>
	                       	<textarea class="form-control" id="scHema" name="scHema" rows="3"></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title Tag</label>
	                       	<textarea class="form-control" id="titleTag" name="titleTag" rows="3"></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Meta Keywords</label>
	                       	<textarea class="form-control" id="metaKeyword" name="metaKeyword" rows="3"></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Meta Description</label>
	                       	<textarea class="form-control" id="metaDescription" name="metaDescription" rows="3"></textarea>
	                    </div>

	                    <div class="col-xl-12 col-sm-12 mb-3">
		                    <button type="submit" class="btn btn-primary col-xl-2 col-sm-2" name="Submit" value="Add Blog">Add Blog</button>
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
			dateFormat:"dd-mm-yy",
			autoclose: true
		});
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