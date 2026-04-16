<?php
include_once('header.php');
include_once('security.php');
include_once('sidebar.php');
include "Class/Category.php";

$id = check_input($con, base64_decode($_REQUEST['id']));
$id1 = check_input($con, $_REQUEST['id']);

$query = mysqli_query($con, "SELECT * FROM `spc_category` WHERE `category_id`='" . $id . "' ");
$data = mysqli_fetch_array($query);
if (!$data) {
  die("" . mysqli_error());
}

if(isset($_POST['Submit']) && $_POST['Submit']=='Save Changes') 
{
    $Category_class = new Category();
    $response = $Category_class->AddEditCategory($_POST);
}

$explore_our_array = array();
// echo "SELECT * FROM `explore_our` WHERE category_id = '".$id."'";
// exit;
$get_explore_our = mysqli_query($con, "SELECT * FROM `explore_our` WHERE category_id = '".$id."'");
$methods_num_row = mysqli_num_rows($get_explore_our);

while ($explore_our_data = mysqli_fetch_assoc($get_explore_our)) {
    $explore_our_array[]  = $explore_our_data;
}

$category_faq_array = array();
// echo "SELECT * FROM `explore_our` WHERE category_id = '".$id."'";
// exit;
$get_category_faq = mysqli_query($con, "SELECT * FROM `category_faq` WHERE category_id = '".$id."'");
$methods_num_row = mysqli_num_rows($get_category_faq);

while ($explore_our_data = mysqli_fetch_assoc($get_category_faq)) {
    $category_faq_array[]  = $explore_our_data;
}
 $get_product_details_sql = mysqli_query($con,"SELECT * FROM `category_details` WHERE `category_id` = '".$id."' ");
 $get_product_details_num_rows = mysqli_num_rows($get_product_details_sql);
?>
<div class="content">
<?php include_once('navbar.php'); ?>

	<div class="container-fluid pt-4 px-4">
    	<div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Edit Category</h3>
                <form name="categoryInfo" id="categoryInfo" method="post" autocomplete="off" enctype="multipart/form-data">
                	<div class="row">
                		<div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Category Name*</label>
	                        <input type="text" class="form-control" id="categoryName" name="categoryName" value="<?php echo $data['category_name']; ?>">
	                    </div>
	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <label for="exampleInputEmail1" class="form-label">Category Slug*</label>
	                        <input type="text" class="form-control" id="categorySlug" name="categorySlug" value="<?php echo $data['category_slug']; ?>">
	                    </div>

	                    <div class="col-xl-6 col-sm-6 mb-3">
	                        <div class="form-group row">
                                <label class="control-label col-sm-4" for="img">Banner Image</label>
                                <div class="col-md-8">

                                    <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
                                        <!-- <div><span>Maximum Image Upload Size is <code>2MB</code></span></div> -->
                                        <div id="dvPreview1" class="fileinput-preview thumbnail"
                                            data-trigger="fileinput" style="width: 200px; height: 150px;">
                                            <?php if (isset($data['banner_image']) && $data['banner_image'] != '') { ?>
                                                 <img src="<?php
							                           $productImg = "CategoryImages";
							                            echo "../" . $productImg . "/" . $data['banner_image']; ?>"  height="150" width="200"/>
							                   <?php } else { ?>
							                          <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;"/>
							                    <?php } ?>
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
	                       	<textarea class="form-control" id="mainDescription" name="mainDescription" rows="3"><?php echo stripslashes($data['description']); ?></textarea>
	                    </div>

	                   <div class="col-xl-6 col-sm-6 mb-3">
	                        <div class="form-group row">
                                    <label class="control-label col-sm-4" for="img">Upload Main Image</label>
                                    <div class="col-md-8">

                                        <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput" >
                                            <div><span>Maximum Image Upload Size is <code>2MB</code></span></div>
                                            <div id="dvPreview" class="fileinput-preview thumbnail"
                                                data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                <?php if (isset($data['image']) && $data['image'] != '') { ?>
                                                 <img src="<?php
							                           $productImg = "CategoryImages";
							                            echo "../" . $productImg . "/" . $data['image']; ?>"  height="150" width="200"/>
							                   <?php } else { ?>
							                          <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;"/>
							                    <?php } ?>
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
	                       	<textarea class="form-control" id="otherDescription" name="otherDescription" rows="3"><?php echo stripslashes($data['otherDescription']); ?></textarea>
	                    </div>


	                    <!-- <div class="col-xl-6 col-sm-6 mb-3">
	                        <div class="form-group row">
                                    <label class="control-label col-sm-4" for="img">Upload Image</label>
                                    <div class="col-md-8">

                                        <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput" >
                                            <div><span>Maximum Image Upload Size is <code>2MB</code></span></div>
                                            <div id="dvPreview" class="fileinput-preview thumbnail"
                                                data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                <?php if (isset($data['image']) && $data['image'] != '') { ?>
                                                 <img src="<?php
							                           $productImg = "CategoryImages";
							                            echo "../" . $productImg . "/" . $data['image']; ?>"  height="150" width="200"/>
							                   <?php } else { ?>
							                          <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;"/>
							                    <?php } ?>
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
	                       	<textarea class="form-control" id="otherDescription" name="otherDescription" rows="3"><?php echo stripslashes($data['otherDescription']); ?></textarea>
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	<p> <strong>Please note </strong>: Do not copy and paste content from Microsoft Word or Google Docs, the formatting might come out badly. Paste content in a notepad and then paste here and then do formatting in the editor below</p>
	                    </div> -->

	                    <div class="col-xl-12 col-sm-12 mb-3 mt-3" style="background: gray;padding: 2% 1% 1% 3%;">
					        <h3><strong>Page Section</strong></h3>
	                    </div>
	                    <div class="row" id="section_main_div">
	                    	<?php if($get_product_details_num_rows > 0) { 
	                    		$count_of_product_details = 1;
	                    		while($get_product_details_data = mysqli_fetch_assoc($get_product_details_sql))
	                    		{
	                    			// echo '<pre>';
	                    			// print_r($get_product_details_data);
	                    			// exit;
	                    	?>

	                    		<div class="row mt-3" id="section_<?php echo $count_of_product_details;?>">
	                    			<div class="col-xl-12 col-sm-12 mb-3"><hr>
	                    				<div style="float: right;"><button type="button" class="btn btn-danger rounded-pill" onclick="RemoveSection('<?php echo $count_of_product_details;?>')">Delate</button></div>
	                    			</div>
		                    		<div class="col-xl-6 col-sm-6 mb-3">
				                        <div class="form-group row">
			                                <label class="control-label col-sm-4" for="img">Section Image</label>
			                                <div class="col-md-8">

			                                    <div class="fileinput fileinput-new fileinputCat" data-provides="fileinput">
			                                        <div><span>Maximum Image Upload Size is <code>2MB</code></span></div>
			                                        <div id="dvPreview<?php echo $count_of_product_details;?>" class="fileinput-preview thumbnail"
			                                            data-trigger="fileinput" style="width: 200px; height: 150px;">
			                                            <?php if(!empty($get_product_details_data['image_path'])) { ?>
			                                            <img src="<?php echo Site_Url."CategoryImages/".$get_product_details_data['image_path'];?>" height="150" width="200" />
			                                            <?php }else{ ?>
			                                            <img src="img/placeholder-image.jpg" style="width: 200px; height: 150px;" />
			                                        	<?php } ?>
			                                        </div>
			                                        <div>
			                                            <div class="mb-3 mt-2">
							                                <input class="form-control form-control-sm" name="section[<?php echo $count_of_product_details;?>][servies_image]" id="servies_image_<?php echo $count_of_product_details;?>" type="file" accept=".jpg, .jpeg, .png, .gif, .webp">
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
						                       	<input type="text" class="form-control" id="categorySlug" name="section[<?php echo $count_of_product_details;?>][section_title]" value="<?php echo $get_product_details_data['section_title'];?>">
						                    </div>
						                    <div class="col-xl-12 col-sm-12 mb-3">
					                            <label for="exampleInputEmail1" class="form-label">Image Name</label>
						                       	<input type="text" class="form-control" id="categorySlug" name="section[<?php echo $count_of_product_details;?>][image_name]" value="<?php echo $get_product_details_data['image_name'];?>">
						                    </div>
						                    <div class="col-xl-12 col-sm-12 mb-3">
					                            <label for="exampleInputEmail1" class="form-label">Image Alt Name</label>
						                       	<input type="text" class="form-control" id="categorySlug" name="section[<?php echo $count_of_product_details;?>][image_alt]" value="<?php echo $get_product_details_data['image_alt'];?>">
						                    </div>
						                    <div class="col-xl-12 col-sm-12 mb-3">
					                            <label for="exampleInputEmail1" class="form-label">Image Title</label>
						                       	<input type="text" class="form-control" id="categorySlug" name="section[<?php echo $count_of_product_details;?>][image_title]" value="<?php echo $get_product_details_data['image_title'];?>">
						                    </div>
				                    	</div>
				                    </div>
				                    <div class="col-xl-12 col-sm-12 mb-3">
				                    	<label for="exampleInputEmail1" class="form-label">Section Content</label>
				                       	<textarea class="form-control" id="detailText<?php echo $count_of_product_details;?>" name="section[<?php echo $count_of_product_details;?>][detailText]" rows="3"><?php echo $get_product_details_data['detailText'];?></textarea>
				                       	<input type="hidden" name="section[<?php echo $count_of_product_details;?>][id]" value="<?php echo $get_product_details_data['id'];?>">
				                    </div>
	                    		</div>
	                    	<?php $count_of_product_details++; } }else{ ?>
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
		                	<?php } ?>
		                    
	                    </div>
	                    <div class="col-xl-12 col-sm-12 mb-3">
	                    	<input type="hidden" id="section_count" value="<?php echo ($get_product_details_num_rows>0) ? $get_product_details_num_rows : 1; ?>">
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
						    	<?php 

		                        if(!empty($explore_our_array))
		                        {
		                            $i = 1;
		                            foreach ($explore_our_array as $key => $value) {
		                                ?>
		                                   
		                                     <tr class="explore_our_div explore_our_<?php echo $i;?>">
		                                     	<td><?php echo $i;?></td>
				                            	<th>
				                            		<?php 
				                            		if (isset($value['image_path']))
				                            		{
				                            		?>
				                            		<img src="../CategoryImages/<?php echo $value['image_path']; ?>" width="100" height="100"/>
				                            	<?php }else{ ?>
				                            		<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Select Image" width="100" height="100">
				                            	<?php } ?>
				                            		<br>
				                            		<input type="file" name="explore_our[<?php echo $i;?>][image]" class="mt-3"></th>
			                                    <td><input type="text" class="form-control" name="explore_our[<?php echo $i;?>][label]" value="<?php echo $value['label'];?>"></td>
			                                    <input type="hidden" name="explore_our[<?php echo $i;?>][id]" value="<?php echo $value['id'];?>">
			                                    
			                                    <td><button type="button" class="btn btn-danger btn-sm" onclick="Removeproductinfo('<?php echo $i;?>');">Remove</button></td>
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
							      <tr class="explore_our_1">
							          <td>1</td>
							          <td>
							          	<input type="file" class="form-control" id="main_pr-icing_discount" name="explore_our[1][image]" placeholder="" title="" value=""/>
							          </td>
							          <td><input type="text" class="form-control" id="main_pricing_discount" name="explore_our[1][label]" placeholder="" title="" value=""/></td>
							          <td></td>
							      </tr>
							    <?php } ?>
						      <tr class="last_explore_our_tr">
						          <input type="hidden" name="explore_our_tr_count" id="explore_our_tr_count" value="<?php echo (!empty($explore_our_array)) ? count($explore_our_array) : 1; ?>">
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
						    	<?php 

			                    if(!empty($category_faq_array))
			                    {
			                        $i = 1;
			                        foreach ($category_faq_array as $key => $value) {
			                            ?>

						      <tr class="faq_info_<?php echo $i;?>">
						          <td><?php echo $i;?></td>
						          <td>
						          	<input type="text" class="form-control" id="main_pricing_discount" name="faq_info[<?php echo $i;?>][label]" placeholder="" title="" value="<?php echo stripslashes($value['title']); ?>"/>
						          </td>
						          <td><textarea rows="5"  class="form-control" name="faq_info[<?php echo $i;?>][description]"><?php echo stripslashes($value['description']); ?></textarea></td>
						          <input type="hidden" name="faq_info[<?php echo $i;?>][id]" value="<?php echo $value['id'];?>">
						          <td><button type="button" class="btn btn-danger btn-sm" onclick="RemoveFAQ('<?php echo $i;?>');">Remove</button></td>
						      </tr>
						      <?php
		                                $i ++;
		                            }
		                            
		                        }
		                        else
		                        {
		                            ?>
		                        <tr class="faq_info_1">
						          <td>1</td>
						          <td>
						          	<input type="text" class="form-control" id="main_pricing_discount" name="faq_info[1][label]" placeholder="" title="" value=""/>
						          </td>
						          <td><textarea rows="5"  class="form-control" name="faq_info[1][description]"></textarea></td>
						          <td></td>
						       </tr>
						        <?php } ?>
						      <tr class="last_faq_info_tr">
						          <input type="hidden" name="faq_info_tr_count" id="faq_info_tr_count" value="<?php echo (!empty($category_faq_array)) ? count($category_faq_array) : 1; ?>">
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
	                       	<textarea class="form-control" id="Schema" name="Schema" rows="3"><?php echo $data['schema_content']; ?></textarea>
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
	var get_product_details_num_rows = '<?php echo $get_product_details_num_rows; ?>'; 



   	if(get_product_details_num_rows > 0)
   	{
   		for(var i = 1;i <= get_product_details_num_rows;i++)
	   	{
	   		CKEDITOR.replace('detailText'+i);
			ImgSectionUpload(i);
	   	}
   	}
   	else
   	{
   		CKEDITOR.replace('detailText1');
		ImgSectionUpload(1);
   	}
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
				//remote: "checkDuplicateCategory.php",
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
        // $(".textarea").wysihtml5();
    });
    $("#add_more_faq_info").click(function(){
       new_faq_info_tr_count = parseInt($("#faq_info_tr_count").val())+1;
       var faq_info_html = '<tr class="faq_info_'+new_faq_info_tr_count+'"><td>'+new_faq_info_tr_count+'</td><td><input type="text" class="form-control" id="main_pricing_discount" name="faq_info['+new_faq_info_tr_count+'][label]" placeholder="" title="" value=""/></td><td><textarea rows="5" class="form-control" name="faq_info['+new_faq_info_tr_count+'][description]"></textarea></td><td><button type="button" class="btn btn-danger btn-sm rounded-pill" onClick="RemoveFAQ('+new_faq_info_tr_count+')">Delate</button></td></tr>';

       $(".last_faq_info_tr").before(faq_info_html);
       $("#faq_info_tr_count").val(new_faq_info_tr_count);
    });


    $("#add_more_explore_our").click(function(){
       new_explore_our_tr_count = parseInt($("#explore_our_tr_count").val())+1;
       var explore_our_html = '<tr class="explore_our_'+new_explore_our_tr_count+'"><td>'+new_explore_our_tr_count+'</td><td><input type="file" class="form-control" id="main_prici-ng_discount" name="explore_our['+new_explore_our_tr_count+'][image]" placeholder="" title="" value=""/></td><td><input type="text" class="form-control" id="main_prici-ng_discount" name="explore_our['+new_explore_our_tr_count+'][label]" placeholder="" title="" value=""/></td><td><button type="button" class="btn btn-danger btn-sm rounded-pill" onClick="Removeproductinfo('+new_explore_our_tr_count+')">Delate</button></td></tr>';

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