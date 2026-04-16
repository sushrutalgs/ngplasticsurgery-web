<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/NonSurgicalProduct.php";

if(isset($_POST['Submit']) && $_POST['Submit']=='Add Product') {
   $Product_class = new NonSurgicalProduct();
   $response = $Product_class->AddEditNonSurgicalProduct($_POST);
}

?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">
    	<div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Add Non Surgical Procedure</h3>
                <form name="addProductInformation" id="addProductInformation" method="post" autocomplete="off" enctype="multipart/form-data">
                	<div class="row">

                		<div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Service Name*</label>
	                        <input type="text" class="form-control" id="productName" name="productName">
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Service Slug*</label>
	                        <input type="text" class="form-control" id="productSlug" name="productSlug">
	                    </div>

	                    
                		
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                    	<label class="control-label col-sm-4" for="img">Service Banner Image</label>
	                        <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                        
                                        <div id="dvPreview" class="fileinput-preview thumbnail"
                                            data-trigger="fileinput" style="width: 200px; height: 150px;">
                                            <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;" />
                                        </div>
                                        <!-- <div><span>Maximum Image Upload Size is <code>2MB</code></span></div> -->
                                        <div>
                                            <div class="mb-3 mt-2">
				                                <input class="form-control form-control-sm" name="main_image" id="main_image" type="file" accept=".jpg, .jpeg, .png, .gif, .webp">
				                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
	                    </div> 

	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <div class="form-group row">
                                    <label class="control-label col-sm-4" for="img">Upload Main Image</label>
                                    <div class="col-md-8">

                                        <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                            
                                            <div id="dvPreviewmain" class="fileinput-preview thumbnail"
                                                data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;"/>
                                            </div>
                                            <div>
	                                            <div class="mb-3 mt-2">
					                                <input class="form-control form-control-sm" name="mainimage" id="imgUpload" type="file" accept=".jpg, .jpeg, .png, .gif, .mp4, .webp">
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

	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	<label for="exampleInputEmail1" class="form-label">The Procedure</label>
	                       	<textarea class="form-control" id="the_procedure" name="description" rows="3"><?php echo stripslashes($data['description']);?></textarea>
	                    </div>
	                    <!-- <div class="col-xl-6 col-sm-6 mb-3">
	                    	<label class="control-label col-sm-4" for="img">Service Other Upload Images</label>
	                        <div class="form-group row">
                                
                                <div class="col-md-6">

                                    <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                        
                                        <div id="dvPreview_multiple" class="fileinput-preview thumbnail"
                                            data-trigger="fileinput" style="width: 200px; height: 150px;">
                                            <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;"/>
                                        </div>
                                        <div><span>Maximum Image Upload Size is <code>2MB</code></span></div>
                                        <div>
                                            <div class="mb-3 mt-2">
				                                <input class="form-control form-control-sm" name="image[]" id="imgUpload" type="file" accept=".jpg, .jpeg, .png,.avif" multiple>
				                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>
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
					        <h3><strong>FAQ</strong></h3>
	                    </div>
						<div class="col-md-12" style="padding: 0% 5%;">
						  <table class="table table-bordered">
						    <thead>
						      <tr>
						        <th scope="col">#</th>
						        <th scope="col">Question</th>
						        <th scope="col">Answers</th>
						        <th scope="col">Action</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="product_info_1">
						          <td>1</td>
						          <td>
						          	<input type="text" class="form-control" id="main_pricing_discount" name="product_info[1][label]" placeholder="" title="" value=""/>
						          </td>
						          <td><textarea rows="5"  class="form-control" name="product_info[1][description]"></textarea></td>
						          <td></td>
						      </tr>
						      <tr class="last_product_info_tr">
						          <input type="hidden" name="product_info_tr_count" id="product_info_tr_count" value="1">
						          <td colspan="5"><a href="javascript:void(0);" class="btn btn-primary rounded-pill" id="add_more_product_info">Add More</a></td>
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
		                    <button type="submit" class="btn btn-primary col-xl-2 col-sm-2" name="Submit" value="Add Product">Add Product</button>
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

   	CKEDITOR.replace('detailText1');
   	CKEDITOR.replace('the_procedure');
   	
	ImgSectionUpload(1);
   	$("#addProductInformation").validate({
		rules: {		   	
			productName: {
				required: true,
			},
			productSlug: {
				required: true,
			},
			categoryId: {
				required: true,
			},
			productPrice: {
				required: true,
			},
			discount: {
				required: true,
			},
			quantity: {
				required: true,
			},
			quantity: {
				required: true,
				min:0
			}
		},
		messages: {		   
		    categoryName: {
				required: "This field cannot be blank.",
			},
			productName: {
				required: "This field cannot be blank.",
			},
			productSlug: {
				required: "This field cannot be blank.",
			},
			categoryId: {
				required: "This field cannot be blank.",
			},
			productPrice: {
				required: "This field cannot be blank.",
			},
			discount: {
				required: "This field cannot be blank.",
			},
			quantity: {
				required: "This field cannot be blank.",
			},
			quantity: {
				required: "This field cannot be blank.",
			}
			
		}
	});
      $("#productName").stringToSlug({
         getPut: "#productSlug"
      });

      $('#mySwitch').bootstrapSwitch({
         onColor: 'success',
         offColor: 'danger',
         size: 'small'
      });
    $("#add_more_product_info").click(function(){
           new_product_info_tr_count = parseInt($("#product_info_tr_count").val())+1;
           var product_info_html = '<tr class="product_info_'+new_product_info_tr_count+'"><td>'+new_product_info_tr_count+'</td><td><input type="text" class="form-control" id="main_pricing_discount" name="product_info['+new_product_info_tr_count+'][label]" placeholder="" title="" value=""/></td><td><textarea rows="5" class="form-control" name="product_info['+new_product_info_tr_count+'][description]"></textarea></td><td><button type="button" class="btn btn-danger btn-sm rounded-pill" onClick="Removeproductinfo('+new_product_info_tr_count+')">Delate</button></td></tr>';

           $(".last_product_info_tr").before(product_info_html);
           $("#product_info_tr_count").val(new_product_info_tr_count);
    });
  

   });

 
window.onload = function () {
            var imgUpload = document.getElementById("imgUpload");
            
           imgUpload.onchange = function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("dvPreviewmain");
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
		var imgUpload = document.getElementById("main_image");

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
	$("#section_"+section_id).remove();

}   
function Removeproductinfo(section_id)
{
	var section_count = $("#product_info_tr_count").val();
	var section_count_new = parseInt(section_count)-1;
	$("#product_info_tr_count").val(section_count_new);
	$(".product_info_"+section_id).remove();

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
	

  
</script>