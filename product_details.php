<?php 
   include('header-top.php');
//    ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
   $title_slug = trim($_REQUEST['title_slug']);
  
   if(!empty($title_slug))
   {
       $fetch_product =mysqli_query($con,"SELECT * FROM `spc_product` WHERE product_slug='".$title_slug."'") or die(mysqli_error($con));
       if(mysqli_num_rows($fetch_product)>0) 
       {
           $product_data = mysqli_fetch_assoc($fetch_product);
       }
       else
       {
           echo'<script> window.location="'.Site_Url.'"; </script> ';
           exit;
       }
      
       $get_main_cat =mysqli_query($con,"SELECT category_name,category_slug FROM `spc_category` WHERE category_id='".$product_data['category_id']."'") or die(mysqli_error($con));
       $main_cat_data = mysqli_fetch_assoc($get_main_cat); 
       

       // $product_price = ProductDiscountCalculate($product_data['discount'],trim($product_data['distributor_price']));

       // if(!empty($product_data['discount']))
       // {
       //     $discount_price_html_main = '<del>₹'.trim($product_data['distributor_price']).'</del>';
       // }
        // $product_technical_info_query = mysqli_query($con, "SELECT * FROM `product_technical_info` WHERE `product_id`='" . $product_data['product_id'] . "' ");
        // $product_technical_info_count = mysqli_num_rows($product_technical_info_query);

        // $is_wishlist = $wishlist_id = 0;
        // if(!empty($_SESSION['user_id']))
        // {
            // $check_wishlist_sql = "SELECT id FROM user_wishlist  WHERE `user_id` = '".$_SESSION['user_id']."' AND product_id='".$product_data['product_id']."'";
            // $check_wishlist_product = mysqli_query($con, $check_wishlist_sql);
          
            // if ($check_wishlist_product) {
            //     $is_wishlist = 1;
            //     $wishlist_data = mysqli_fetch_assoc($check_wishlist_product);
            //     $wishlist_id = $wishlist_data['id'];
            // }else{
            //     $is_wishlist = 0;
            // }
        // }
    
       // echo  "<pre>";
       // print_r($product_data);
       // exit;

       

        $product_details_array = array();
        $get_product_details_sql = mysqli_query($con, "SELECT * FROM `product_details` WHERE `product_id`='" . $product_data['product_id'] . "' ");
        $get_product_details_count = mysqli_num_rows($get_product_details_sql);
        while($product_details_data = mysqli_fetch_assoc($get_product_details_sql))
        {
            $product_details_array[] = $product_details_data; 
        }

        // echo "<pre>";
        // print_r($product_details_array);
        // exit;
           

        $product_technical_info_array = array();
        $get_product_technical_info_sql = mysqli_query($con, "SELECT * FROM `product_technical_info` WHERE `product_id`='" . $product_data['product_id'] . "' ");
        $get_product_technical_info_count = mysqli_num_rows($get_product_technical_info_sql);
        while($product_technical_info_data = mysqli_fetch_assoc($get_product_technical_info_sql))
        {
            $product_technical_info_array[] = $product_technical_info_data; 
        }


        /*echo '<pre>';
        print_r($product_info_array);
        exit;*/

                                           
       
   }
   else
   {
       echo'<script> window.location="'.Site_Url.'"; </script> ';
       exit;
   }
   $imgfileSource = Site_Url."ProductImages". DIRECTORY_SEPARATOR . $product_data['main_image'];   

   if(!empty($_REQUEST['submit']))
    {

        if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
           unset($_SESSION['csrf_token']);
           $first_name = $_REQUEST['firstname']; 
           $last_name = $_REQUEST['lastname']; 
           $phone = $_REQUEST['phone']; 
           $email = $_REQUEST['email']; 
           $surgical = $_REQUEST['surgical']; 
           $non_surgical = $_REQUEST['non_surgical']; 
           $start_date = $_REQUEST['start_date']; 
           $message = $_REQUEST['message']; 

           $insertSlider = "INSERT INTO `product_contact` (first_name,last_name,phone,email,surgical,non_surgical,start_date,message)VALUES('$first_name','$last_name','$phone','$email','$surgical','$non_surgical','$start_date','$message')";
           $queryResultSlider = mysqli_query($con, $insertSlider);
           if ($queryResultSlider) {

                //echo '<script>alert("Inquiry Successfully Placed !!")</script>';
                //  echo '<script>document.location="contact.php"</script>';

                $response["Status"] = "success";
                $response["msg"] = "Inquiry Successfully Placed !!";
                $str = rand();
                $token = sha1($str);
                $_SESSION['csrf_token'] = $token;
            } else {
                $response["Status"] = "error";
                $response["msg"] = "Something went wrong !!";
           }
        } else {
          $response["Status"] = "error";
          $response["msg"] = "CSRF token mismatch, please refresh page and try again later.";
        }
    }      
   ?>
<title><?php echo trim(stripslashes($product_data['title_tag']));?></title>
<meta name="description" content="<?php echo $product_data['meta_description']; ?>" />
<meta name="keywords" content="<?php echo $product_data['meta_keyword']; ?>" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $product_data['title_tag']; ?>" />
<meta property="og:description" content="<?php echo $product_data['meta_description']; ?>" />
<meta property="og:url" content="<?php echo Site_Url."product/".$product_data['product_slug']; ?>" />
<meta property="og:site_name" content="<?php echo Company_Name;?>" />
<!-- <meta property="og:image" content="<?php echo $imgfileSource; ?>" /> -->
<meta name="twitter:title" content="<?php echo $product_data['title_tag']; ?>" />
<meta name="twitter:url" content="<?php echo Site_Url."product/".$product_data['product_slug']; ?>" />
<meta name="twitter:description" content="<?php echo $product_data['meta_description']; ?>" />
<!-- <meta name="twitter:image" content="<?php echo $imgfileSource; ?>" /> -->
<meta name="twitter:image:alt" content="<?php echo $product_data['image_alt']; ?>" />
<link rel="canonical" href="<?php echo Site_Url."product/".$product_data['product_slug']; ?>" />
<meta name="robots" content="index, follow" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@<?php echo Company_Name;?>" />
<meta name="twitter:creator" content="@<?php echo Company_Name;?>" />
<?php
echo "\n".html_entity_decode($product_data['schema_content'])."\n";
include('header.php'); ?>
<section class="bredcram_wrapper" style="background-image: url('<?php echo $imgfileSource; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bredcarm-title"><?php echo trim(stripslashes($product_data['product_name']));?></h1>
                <ul>
                    <li class="active"><a href="<?php echo Site_Url; ?>">Home</a></li>
                    <li>/</li>
                    <li><?php echo trim(stripslashes($product_data['product_name']));?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php if(!empty($product_data['description'])){ ?>
<section class=" section-padding">
    <div class="container">
        <div class="surgical-main_wrapper">
            <p class="title">The Procedure</p>
            <?php echo trim(stripslashes($product_data['description'])); ?>
           <!--  <p class="title">The Procedure</p>
            <p class="">Tummy tuck, also known as abdominoplasty, is a surgical procedure aimed at creating a firmer and smoother abdominal profile by removing excess fat and skin. It may include:</p>
            <p><strong>Excess Fat and Skin Removal:</strong> The surgeon makes an incision from hip to hip, typically below the bikini line, and removes excess fat and skin to achieve a flat, toned abdomen. </p>
            <p><strong>Muscle Tightening : </strong>In cases where the abdominal muscles are separated (diastasis recti), the muscles are stitched together to restore firmness and strengthen the core. </p>
            <p><strong>Final Sculpting: </strong> The remaining skin is repositioned for a smooth contour, and the incision is closed, providing a natural, rejuvenated abdominal shape. </p> -->
        </div>

    </div>
</section>
<?php } ?>
<?php if($get_product_details_count > 0){ ?>

<section class="service-section">
    <div class="container">
        <div class="row">
            <?php 
            $i = 1;
            foreach($product_details_array as $product_details_value)
            {
                $style = "";
                if ($i % 2 != 0) { // If the number is odd
                    $style = "flex-direction: row-reverse;";
                }
            ?>
            <div class="row" style="<?php echo $style;?>">
                
                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="services-main-img">
                        <img src="<?php echo Site_Url."ProductImages/".$product_details_value['image_path']; ?>" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <?php echo stripslashes($product_details_value['detailText']);?>
                   <!--  <h1>Ideal Candidate for Tummy Tuck</h1>
                    <ul>
                        <li><strong> Good Overall Health: </strong> Individuals in good physical health, without medical conditions that could impair healing.</li>
                        <li><strong> Stable Weight: </strong> Candidates should be at or near their ideal weight, as significant weight changes can affect the results.</li>
                        <li><strong>Loose Skin or Separated Muscles: </strong> People with excess skin, sagging, or separated abdominal muscles after pregnancy, weight loss, or aging.</li>
                        <li><strong>Non-Smokers:  </strong> Smoking can interfere with the healing process, so non-smokers or those willing to quit are ideal candidates.</li>
                        <li><strong>Realistic Expectations:</strong> Individuals with a clear understanding of the procedure and expected outcomes.</li>
                    </ul> -->
                </div>
            </div>

            <?php $i++; } ?>
            <!-- <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <div class="services-main-img">
                    <img src="image/service-img.jpeg" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <h1>Ideal Candidate for Tummy Tuck</h1>
                <ul>
                    <li><strong> Good Overall Health: </strong> Individuals in good physical health, without medical conditions that could impair healing.</li>
                    <li><strong> Stable Weight: </strong> Candidates should be at or near their ideal weight, as significant weight changes can affect the results.</li>
                    <li><strong>Loose Skin or Separated Muscles: </strong> People with excess skin, sagging, or separated abdominal muscles after pregnancy, weight loss, or aging.</li>
                    <li><strong>Non-Smokers:  </strong> Smoking can interfere with the healing process, so non-smokers or those willing to quit are ideal candidates.</li>
                    <li><strong>Realistic Expectations:</strong> Individuals with a clear understanding of the procedure and expected outcomes.</li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <h1>Postoperative Recovery</h1>
                <p>Tummy Tuck recovery involves several stages:</p>
                <ul>
                    <li><strong> Immediate Recovery (First Week):  </strong> Patients need to rest and avoid strenuous activities. Compression garments are recommended to minimize swelling and support healing. Pain and discomfort are common but manageable with prescribed medications. </li>
                    <li><strong> Weeks 2-4:  </strong> Gradual improvement in mobility, with most people returning to light daily activities. Strenuous activities and exercise should still be avoided. </li>
                    <li><strong>Weeks 4-6: </strong> Swelling continues to decrease, and patients can slowly resume more intense activities and light exercise as per their surgeon's advice. </li>
                    <li><strong>Full Recovery (After 6-8 Weeks): </strong> Most patients are fully healed, and final results, including a flatter, toned abdomen, are more noticeable. It’s essential to follow all postoperative care instructions to ensure the best outcome and minimize complications.</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <div class="services-main-img">
                    <img src="image/service-img2.png" alt="image">
                </div>
            </div>


            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <div class="services-main-img">
                    <img src="image/service-img3.png" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <h1>Benefits of Tummy Tuck</h1>
                <p>Benefits of a tummy tuck include:</p>
                <ul>
                    <li><strong> Flatter, Firmer Abdomen: </strong> Removes excess fat and skin, creating a smooth and toned abdominal profile.</li>
                    <li><strong> Improved Posture: </strong> Tightening weakened abdominal muscles can help improve posture and alleviate lower back pain.</li>
                    <li><strong>Reduced Stretch Marks: </strong> Stretch marks in the lower abdomen are often removed or reduced during the procedure. </li>
                    <li><strong>Boosted Confidence: </strong> Enhances body contour, helping individuals feel more confident in their appearance and clothing.</li>
                    <li><strong>Repair of Separated Muscles: </strong> Corrects muscle separation (diastasis recti) that often occurs after pregnancy, restoring core strength.</li>
                </ul>
            </div> -->

        </div>
    </div>
</section>
<?php } ?>
<?php if(!empty($product_data['youtube_link'])){ ?>
    <section>
        <div class="container">
            <iframe 
                width="100%" 
                height="400"
                src="https://www.youtube.com/embed/<?php echo $product_data['youtube_link']; ?>"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
            </iframe>
        </div>
    </section>
<?php } ?>

    


<?php if($get_product_technical_info_count > 0){ ?>
<section class="faq_wrapper faq-bg  section-margin">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <p class="title">Frequently Asked Questions</p>
         </div>
         <div class="col-12">
            <div class="accordion" id="accordionExample">
               <?php 
                 $count_faq = 1;
                 foreach($product_technical_info_array as $category_faq_value){ ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count_faq; ?>" aria-expanded="true" aria-controls="collapseOne">
                             <?php echo stripslashes($category_faq_value['l_name']); ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $count_faq; ?>" class="accordion-collapse collapse <?php echo ($count_faq == 1) ? "show" : ""; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> <?php echo stripslashes($category_faq_value['l_description']); ?></p>
                            </div>
                        </div>
                    </div>
                 <?php $count_faq++; } ?>



            </div>
         </div>
      </div>
   </div>
</section>
<?php } ?>




<section class="book_wrapper services-form ">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <p class="title">Write Your Questions</p>
                    <p class="text-justify book-text">
                        If you’re considering a tummy tuck in India, a consultation with Dr. Neel Gupta can help identify if you’re a suitable candidate and discuss the best approach tailored to your needs. Reach out to us today to schedule your appointment and take the first step toward achieving a flatter, more confident abdomen.
                    </p>
         </div>

         <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
            <?php if(!empty($response["Status"]) && $response["Status"] == "success") { ?>
             <div class="alert alert-success">
               <strong>Success!</strong> <?php echo $response["msg"];?>
             </div>
             <?php } ?>
             <?php if(!empty($response["Status"]) && $response["Status"] == "error") { ?>
             <div class="alert alert-danger">
               <strong>Error!</strong> <?php echo $response["msg"];?>
             </div>
             <?php } ?>
            <div class="services-main-box-form">

                <p class="title text-center">Request A Consultation</p>
                <form  method="post">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">
                   <div class="row">
                      <div class="col-md-6 col-sm-12 mt-4">
                         <label for="#" class="book-label">First Name <span class="book-com">*</span></label>
                         <input type="text" name="firstname" required>
                      </div>
                      <div class="col-md-6 col-sm-12 mt-4">
                         <label for="#" class="book-label">Last Name <span class="book-com">*</span></label>
                         <input type="text" name="lastname" required>
                      </div>
                      <div class="col-md-6 col-sm-12 mt-4">
                         <label for="#" class="book-label">Mobile Number <span class="book-com">*</span></label>
                         <input type="tel" name="phone" required>
                      </div>
                      <div class="col-md-6 col-sm-12 mt-4">
                         <label for="#" class="book-label">Email Address <span class="book-com">*</span></label>
                         <input type="email" name="email" required>
                      </div>
                      <div class="col-md-6 col-sm-12 mt-4">
                         <label for="#" class="book-label">Surgical Service</label>
                         <select name="surgical" id="Surgical">
                            <option value="" disabled selected hidden></option>
                            <option>None</option>
                            <option>Body Treatment</option>
                            <option>Breast Treatment</option>
                            <option>Facial Aesthetics</option>
                            <option>Hair Treatment</option>
                            <option>Male Aesthetics</option>
                            <option>Cosmetic Gynecology</option>
                            <option>Skin Treatment</option>
                            <option>Reconstructive Surgery</option>
                         </select>
                      </div>
                      <div class="col-md-6 col-sm-12 mt-4">
                         <label for="#" class="book-label">Non-Surgical Service </label>
                         <select name="non_surgical" id="Non-Surgical">
                            <option value="" disabled selected hidden></option>
                            <option>None</option>
                            <option>Acne Scar Treatment</option>
                            <option>Botox</option>
                            <option>Dermal Filler</option>
                            <option>Skin Booster</option>
                            <option>Laser Hair Removal</option>
                            <option>Melasma / Pigmentation</option> 
                            <option>Hydrafacial</option>
                            <option>Chemical Peel</option>
                            <option>Thread Lift</option>
                         </select>
                      </div>
                      <div class="col-md-12 col-sm-12 mt-4">
                         <label for="#" class="book-label">Select Date <span class="book-com">*</span>  </label>
                         <input type="date" name="start_date" required>
                      </div>
                      <div class="col-md-12 col-sm-12 mt-4">
                         <label for="#" class="book-label">Write your comment here <span class="book-com">*</span>  </label>
                         <textarea name="message" class="" placeholder=" " required></textarea>
                         <div class="main-btn mt-4">
                            <button type="submit" name="submit" value="submit">Submit Now</a>
                         </div>
                      </div>
                   </div>
                </form>
            </div>
         </div>
      </div>
   </div>
</section>

<?php include('footer.php'); ?>

<script type="text/javascript">
   $(document).ready(function() {
         setTimeout(function() {
           $(".alert").remove();
         }, 2500);
   });
</script>