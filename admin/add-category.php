<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Category.php";

if(isset($_POST['Submit']) && $_POST['Submit']=='Submit') 
{
    $Category_class = new Category();
    $response = $Category_class->AddEditCategory($_POST);
}
?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">
    	<div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Add Category</h3>
                <form name="categoryInfo" id="categoryInfo" method="post" autocomplete="off" enctype="multipart/form-data">
                	<div class="row">
                		<div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Category Name*</label>
	                        <input type="text" class="form-control" id="categoryName" name="categoryName" aria-describedby="emailHelp">
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Category Slug*</label>
	                        <input type="text" class="form-control" id="categorySlug" name="categorySlug" aria-describedby="emailHelp">
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <div class="form-group row">
                                    <label class="control-label col-sm-4" for="img">Banner Image</label>
                                    <div class="col-md-8">

                                        <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                            <!-- <div><span>Maximum Image Upload Size is <code>2MB</code></span></div> -->
                                            <div id="dvPreview1" class="fileinput-preview thumbnail"
                                                data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;"/>
                                            </div>
                                            <div>
	                                            <div class="mb-3 mt-2">
					                                <input class="form-control form-control-sm" name="banner_image" id="Bannerimage" type="file" accept=".jpg, .jpeg, .png, .gif, .mp4, .webp">
					                            </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
	                    </div>

	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description</label>
	                       	<textarea class="form-control" id="mainDescription" name="mainDescription" rows="3"></textarea>
	                    </div>
	                   
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <div class="form-group row">
                                    <label class="control-label col-sm-4" for="img">Upload Main Image</label>
                                    <div class="col-md-8">

                                        <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                            
                                            <div id="dvPreview" class="fileinput-preview thumbnail"
                                                data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;"/>
                                            </div>
                                            <div>
	                                            <div class="mb-3 mt-2">
					                                <input class="form-control form-control-sm" name="image" id="imgUpload" type="file" accept=".jpg, .jpeg, .png, .gif, .mp4, .webp">
					                            </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Short Description</label>
	                       	<textarea class="form-control" id="otherDescription" name="otherDescription" rows="3"></textarea>
	                    </div>

	                    <!-- <div class="col-xl-6 col-sm-6 mb-3">
	                        <div class="form-group row">
                                    <label class="control-label col-sm-4" for="img">Upload Image</label>
                                    <div class="col-md-8">

                                        <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                            
                                            <div id="dvPreview" class="fileinput-preview thumbnail"
                                                data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;"/>
                                            </div>
                                            <div>
	                                            <div class="mb-3 mt-2">
					                                <input class="form-control form-control-sm" name="image" id="imgUpload" type="file" accept=".jpg, .jpeg, .png, .gif, .mp4, .webp">
					                            </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Detailed Description</label>
	                       	<textarea class="form-control" id="otherDescription" name="otherDescription" rows="3"></textarea>
	                    </div> -->
	                    <!-- <div class="col-xl-12 col-sm-12 mb-3">
	                    	<p> <strong>Please note </strong>: Do not copy and paste content from Microsoft Word or Google Docs, the formatting might come out badly. Paste content in a notepad and then paste here and then do formatting in the editor below</p>
	                    </div> -->

	                     <div class="col-xl-12 col-sm-12 mb-3 mt-3" style="background: gray;padding: 2% 1% 1% 3%;">
					        <h3><strong>Page Section</strong></h3>
	                    </div>
	                    <div class="row" id="section_main_div">
		                    <div class="col-xl-6 col-sm-6 mb-3">
		                        <div class="form-group row">
	                                <label class="control-label col-sm-4" for="img">Section Image</label>
	                                <div class="col-md-8">

	                                    <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
	                                        <div><span>Maximum Image Upload Size is <code>2MB</code></span></div>
	                                        <div id="dvPreview1" class="fileinput-preview thumbnail"
	                                            data-trigger="fileinput" style="width: 200px; height: 150px;">
	                                            <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;" />
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
		                       	<textarea class="form-control" id="detailText1" name="section[1][detailText]" rows="3"></textarea>
		                    </div>
		                    
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	<input type="hidden" id="section_count" value="1">
	                    	<a href="javascript:void(0);" class="btn btn-primary rounded-pill" id="add_more_pricing" onclick="AddMoreSection();"><i class="fa fa-plus"></i> Add More</a>
	                    </div>




	                    <div class="col-xl-12 col-sm-12 mb-3 mt-3" style="background: gray;padding: 2% 1% 1% 3%;">
					        <h3><strong>Explore Our</strong></h3>
	                    </div>
						<div class="col-md-12" style="padding: 0% 5%;">
						  <table class="table table-bordered">
						    <thead>
						      <tr>
						        <th scope="col">#</th>
						        <th scope="col">Icon</th>
						        <th scope="col">Title</th>
						        <th scope="col">Action</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="explore_our_1">
						          <td>1</td>
						          <td>
						          	<input type="file" class="form-control" id="main_pr-icing_discount" name="explore_our[1][image]" placeholder="" title="" value=""/>
						          </td>
						          <td><input type="text" class="form-control" id="main_pricing_discount" name="explore_our[1][label]" placeholder="" title="" value=""/></td>
						          <td></td>
						      </tr>
						      <tr class="last_explore_our_tr">
						          <input type="hidden" name="explore_our_tr_count" id="explore_our_tr_count" value="1">
						          <td colspan="5"><a href="javascript:void(0);" class="btn btn-primary rounded-pill" id="add_more_explore_our">Add More</a></td>
						      </tr>
						    </tbody>
						  </table>
						</div>


	                    <div class="col-xl-12 col-sm-12 mb-3 mt-3" style="background: gray;padding: 2% 1% 1% 3%;">
					        <h3><strong>FAQ</strong></h3>
	                    </div>
						<div class="col-md-12" style="padding: 0% 5%;">
						  <table class="table table-bordered">
						    <thead>
						      <tr>
						        <th scope="col">#</th>
						        <th scope="col">Questions</th>
						        <th scope="col">Answers</th>
						        <th scope="col">Action</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="faq_info_1">
						          <td>1</td>
						          <td>
						          	<input type="text" class="form-control" id="main_pricing_discount" name="faq_info[1][label]" placeholder="" title="" value=""/>
						          </td>
						          <td><textarea rows="5"  class="form-control" name="faq_info[1][description]"></textarea></td>
						          <td></td>
						      </tr>
						      <tr class="last_faq_info_tr">
						          <input type="hidden" name="faq_info_tr_count" id="faq_info_tr_count" value="1">
						          <td colspan="5"><a href="javascript:void(0);" class="btn btn-primary rounded-pill" id="add_more_faq_info">Add More</a></td>
						      </tr>
						    </tbody>
						  </table>
						</div>



	                    <div class="col-xl-12 col-sm-12 mb-3 mt-3" style="background: gray;padding: 2% 1% 1% 3%;">
					        <h3><strong>SEO Description</strong></h3>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Schema</label>
	                       	<textarea class="form-control" id="Schema" name="Schema" rows="3"></textarea>
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
		                    <button type="submit" class="btn btn-primary col-xl-2 col-sm-2" name="Submit" value="Submit">Save</button>
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
$(document).ready(function() {
	$("#categoryName").stringToSlug({
        getPut: "#categorySlug"
    });
	$("#categoryInfo").validate({
		rules: {		   	
		categoryName: {
				required: true,
			},
			categorySlug: {
				required: true,
				// remote: "checkDuplicateCategory.php",
			},
		},
		messages: {		   
		    categoryName: {
				required: "This field cannot be blank.",
			},
			categorySlug: {
				required: "This field cannot be blank.",
				remote: "Product already exist.",
			},
			
		}
	});
	$(function () {
        // CKEDITOR.replace('otherDescription');
        CKEDITOR.replace('detailText1');
        // $(".textarea").wysihtml5();
    });

    $("#add_more_faq_info").click(function(){
       new_faq_info_tr_count = parseInt($("#faq_info_tr_count").val())+1;
       var faq_info_html = '<tr class="faq_info_'+new_faq_info_tr_count+'"><td>'+new_faq_info_tr_count+'</td><td><input type="text" class="form-control" id="main_pricing_discount" name="faq_info['+new_faq_info_tr_count+'][label]" placeholder="" title="" value=""/></td><td><textarea rows="5" class="form-control" name="faq_info['+new_faq_info_tr_count+'][description]"></textarea></td><td><button type="button" class="btn btn-danger btn-sm rounded-pill" onClick="Removeproductinfo('+new_faq_info_tr_count+')">Delate</button></td></tr>';

       $(".last_faq_info_tr").before(faq_info_html);
       $("#faq_info_tr_count").val(new_faq_info_tr_count);
    });


    $("#add_more_explore_our").click(function(){
       new_explore_our_tr_count = parseInt($("#explore_our_tr_count").val())+1;
       var explore_our_html = '<tr class="explore_our_'+new_explore_our_tr_count+'"><td>'+new_explore_our_tr_count+'</td><td><input type="file" class="form-control" id="main_prici-ng_discount" name="explore_our['+new_explore_our_tr_count+'][image]" placeholder="" title="" value=""/></td><td><input type="text" class="form-control" id="main_prici-ng_discount" name="explore_our['+new_explore_our_tr_count+'][label]" placeholder="" title="" value=""/></td><td><button type="button" class="btn btn-danger btn-sm rounded-pill" onClick="RemoveFAQ('+new_explore_our_tr_count+')">Delate</button></td></tr>';

       $(".last_explore_our_tr").before(explore_our_html);
       $("#explore_our_tr_count").val(new_explore_our_tr_count);
    });
});

function Removeproductinfo(section_id)
{
	var section_count = $("#explore_our_tr_count").val();
	var section_count_new = parseInt(section_count)-1;
	$("#explore_our_tr_count").val(section_count_new);
	$(".explore_our_"+section_id).remove();
}

function RemoveFAQ(section_id)
{
	var section_count = $("#faq_info_tr_count").val();
	var section_count_new = parseInt(section_count)-1;
	$("#faq_info_tr_count").val(section_count_new);
	$(".faq_info_"+section_id).remove();
} 

function AddMoreSection()
{
	var section_count = $("#section_count").val();
	var section_count_new = parseInt(section_count)+1;

	var section_html = '<div class="row mt-3" id="section_'+section_count_new+'"><div class="col-xl-12 col-sm-12 mb-3"><hr><div style="float: right;"><button type="button" class="btn btn-danger rounded-pill" onclick="RemoveSection('+section_count_new+')">Delate</button></div></div><div class="col-xl-6 col-sm-6 mb-3"><div class="form-group row"><label class="control-label col-sm-4" for="img">Section Image</label><div class="col-md-8"><div class="fileinput fileinput-new fileinputCat" data-provides="fileinput"><div><span>Maximum Image Upload Size is <code>2MB</code></span></div><div id="dvPreview'+section_count_new+'" class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"><img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;" /></div><div><div class="mb-3 mt-2"><input class="form-control form-control-sm" name="section['+section_count_new+'][servies_image]" id="servies_image_'+section_count_new+'" type="file" accept=".jpg, .jpeg, .png, .gif, .webp"></div></div></div></div></div></div>';

		section_html += '<div class="col-xl-6 col-sm-6 mb-3"><div class="row"><div class="col-xl-12 col-sm-12 mb-3"><label for="exampleInputEmail1" class="form-label">Section Title</label><input type="text" class="form-control" id="categorySlug" name="section['+section_count_new+'][section_title]"></div><div class="col-xl-12 col-sm-12 mb-3"><label for="exampleInputEmail1" class="form-label">Image Name</label><input type="text" class="form-control" id="categorySlug" name="section['+section_count_new+'][image_name]"></div><div class="col-xl-12 col-sm-12 mb-3"><label for="exampleInputEmail1" class="form-label">Image Alt Name</label><input type="text" class="form-control" id="categorySlug" name="section['+section_count_new+'][image_alt]"></div><div class="col-xl-12 col-sm-12 mb-3"><label for="exampleInputEmail1" class="form-label">Image Title</label><input type="text" class="form-control" id="categorySlug" name="section['+section_count_new+'][image_title]"></div></div></div>';

		section_html += '<div class="col-xl-12 col-sm-12 mb-3"><label for="exampleInputEmail1" class="form-label">Section Content</label><textarea class="form-control" id="detailText'+section_count_new+'" name="section['+section_count_new+'][detailText]" rows="3"></textarea></div></div>';

		$("#section_main_div").append(section_html);
		$("#section_count").val(section_count_new);
		CKEDITOR.replace('detailText'+section_count_new);
		ImgSectionUpload(section_count_new);
} 
function RemoveSection(section_id)
{
	var section_count = $("#section_count").val();
	var section_count_new = parseInt(section_count)-1;
	$("#section_count").val(section_count_new);
	console.log(section_id);
	$("#section_"+section_id).remove();

}    
function ImgSectionUpload(section_id)
{
	var imgUpload = document.getElementById("servies_image_"+section_id);

	imgUpload.onchange = function () {
	    if (typeof (FileReader) != "undefined") {
	        var dvPreview = document.getElementById("dvPreview"+section_id);
	        dvPreview.innerHTML = "";
	        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp|.mp4|.webp)$/;
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
	                    img.width = "200";
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

window.onload = function () {
            var imgUpload = document.getElementById("imgUpload");
            
           imgUpload.onchange = function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("dvPreview");
                    dvPreview.innerHTML = "";
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp|.mp4|.webp)$/;
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

window.onload = function () {
    var imgUpload = document.getElementById("Bannerimage");
    
   imgUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("dvPreview1");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp|.mp4|.webp)$/;
            for (var i = 0; i < imgUpload.files.length; i++) {
                var file = imgUpload.files[i];
                var size=imgUpload.files[i].size;
                if(size > 50048000)
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