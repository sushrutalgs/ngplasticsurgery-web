<?php 
   include('header-top.php');
//    ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

   if (!isset($_SESSION['csrf_token'])) {
       $str = rand();
       $token = sha1($str);
       $_SESSION['csrf_token'] = $token;
    }
   $title_slug = trim($_REQUEST['title_slug']);
  
   if(!empty($title_slug))
   {
       $fetch_category =mysqli_query($con,"SELECT * FROM `spc_category` WHERE category_slug='".$title_slug."'") or die(mysqli_error($con));
       if(mysqli_num_rows($fetch_category)>0) 
       {
           $category_data = mysqli_fetch_assoc($fetch_category);
       }
       else
       {
           echo'<script> window.location="'.Site_Url.'"; </script> ';
           exit;
       }
      
    
        $explore_our_array = array();
        $get_explore_our_sql = mysqli_query($con, "SELECT * FROM `explore_our` WHERE `category_id`='" . $category_data['category_id'] . "' ");
        $get_explore_our_count = mysqli_num_rows($get_explore_our_sql);
        while($explore_our_data = mysqli_fetch_assoc($get_explore_our_sql))
        {
            $explore_our_array[] = $explore_our_data; 
        }


        $category_faq_array = array();
        $get_category_faq_sql = mysqli_query($con, "SELECT * FROM `category_faq` WHERE `category_id`='" . $category_data['category_id'] . "' ");
        $get_category_faq_count = mysqli_num_rows($get_category_faq_sql);
        while($category_faq_data = mysqli_fetch_assoc($get_category_faq_sql))
        {
            $category_faq_array[] = $category_faq_data; 
        }

       $product_details_array = array();
        $get_product_details_sql = mysqli_query($con, "SELECT * FROM `category_details` WHERE `category_id`='" . $category_data['category_id'] . "' ");
        $get_product_details_count = mysqli_num_rows($get_product_details_sql);
        while($product_details_data = mysqli_fetch_assoc($get_product_details_sql))
        {
            $product_details_array[] = $product_details_data; 
        }
       
                                           
       
   }
   else
   {
       echo'<script> window.location="'.Site_Url.'"; </script> ';
       exit;
   }
   // $imgfileSource = Site_Url."categoryImages". DIRECTORY_SEPARATOR . $category_data['main_image'];  

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
<title> <?php echo trim(stripslashes($category_data['title_tag']));?></title>
<meta name="description" content="<?php echo $category_data['meta_description']; ?>" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $category_data['title_tag']; ?>" />
<meta property="og:description" content="<?php echo $category_data['meta_description']; ?>" />
<meta property="og:url" content="<?php echo Site_Url."category/".$category_data['category_slug']; ?>" />
<meta property="og:site_name" content="<?php echo Company_Name;?>" />
<!--<meta property="og:image" content="<?php echo $imgfileSource; ?>" /> -->
<meta name="twitter:title" content="<?php echo $category_data['title_tag']; ?>" />
<meta name="twitter:url" content="<?php echo Site_Url."category/".$category_data['category_slug']; ?>" />
<meta name="twitter:description" content="<?php echo $category_data['meta_description']; ?>" />
<!-- <meta name="twitter:image" content="<?php echo $imgfileSource; ?>" /> -->
<meta name="twitter:image:alt" content="<?php echo $category_data['image_alt']; ?>" />
<link rel="canonical" href="<?php echo Site_Url."category/".$category_data['category_slug']; ?>" />
<meta name="robots" content="index, follow" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@<?php echo Company_Name;?>" />
<meta name="twitter:creator" content="@<?php echo Company_Name;?>" />
<?php
echo "\n".html_entity_decode($category_data['schema_content'])."\n";
include('header.php'); ?>

<section class="bredcram_wrapper" style="background-image: url('<?php echo Site_Url."CategoryImages/".$category_data['banner_image']; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <label class="bredcarm-title"><?php echo trim(stripslashes($category_data['category_name']));?></label>
                <ul>
                    <li class="active"><a href="<?php echo Site_Url; ?>">Home</a></li>
                    <li>/</li>
                    <li><?php echo trim(stripslashes($category_data['category_name']));?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- <section class="surgical-main_wrapper shadow-none section-padding">
    <div class="container">
        <p class="title text-center"><?php echo trim(stripslashes($category_data['category_name']));?></p>
        <p class="text-center surgical-text"><?php echo trim(stripslashes($category_data['description']));?></p>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <div class="surgical-main-img">
                    <img src="<?php echo Site_Url."CategoryImages/".$category_data['image']; ?>" alt="boddy img ">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <?php echo trim(stripslashes($category_data['otherDescription']));?>
               
            </div>
        </div>
    </div>
</section>
 -->
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
            <div class="row align-items-center" style="<?php echo $style;?>">
                <?php if(!empty($product_details_value['image_path'])){ ?>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="services-main-img">
                        <img src="<?php echo Site_Url."CategoryImages/".$product_details_value['image_path']; ?>" alt="image">
                    </div>
                </div>
                <?php } 
                $class_col = "col-lg-6";
                if(empty($product_details_value['image_path']))
                {
                    $class_col = "col-lg-12 surgical-main_wrapper surgical-main_wrapper1 mb-4";
                }
                ?>
                <div class="<?php echo $class_col; ?> col-md-12 col-sm-12 mt-4">
                    <p class="title"><?php echo stripslashes($product_details_value['section_title']);?></p>

                    <?php echo stripslashes($product_details_value['detailText']);?>
                </div>
               
            </div>

            <?php $i++; } ?>
        
        </div>
    </div>
</section>
<?php } ?>
<!-- <section class=" section-padding-bottom">
    <div class="container">
        <div class="surgical-main_wrapper">
            <p class="title">Advanced Acne Scar Treatments</p>

            <p><strong>Microneedling with PRP (Platelet-Rich Plasma):</strong> Microneedling creates micro-injuries to stimulate collagen production, while PRP enhances healing and accelerates skin rejuvenation. This combination is highly effective for atrophic scars and overall skin health. </p>

            <p><strong>Chemical Peels: </strong> Customized chemical peels exfoliate the top layers of the skin, reducing pigmentation and shallow scars. Peels also improve overall skin texture and clarity. </p>

            <p><strong>Dermal Fillers: </strong> Injectable fillers restore volume to depressed scars, offering an immediate improvement in skin smoothness. They are a quick, minimally invasive option for treating deeper atrophic scars. </p>

            <p><strong> Subcision: </strong> This minimally invasive procedure breaks down fibrous scar tissue beneath the skin, releasing tethered scars and encouraging natural collagen production.</p>

            <p><strong>Excisional Scar Revision:  </strong> For severe scars, surgical scar revision removes damaged tissue, creating a smoother, more even appearance. This method is ideal for icepick or deep boxcar scars.  </p>

        </div>

    </div>
</section> -->

<?php if($get_explore_our_count > 0){ ?>
<section class="explore-our_wrapper section-padding-bottom">
    <div class="container">
        <p class="title text-center">Explore Our Body Services</p>
        <div class="row justify-content-center">

            <?php foreach($explore_our_array as $explore_our_value){ ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="main-explore-box text-center">
                    <div class="explore-img">
                        <img src="<?php echo Site_Url."CategoryImages/".$explore_our_value['image_path']; ?>" alt="icon">
                    </div>
                    <p class="explore-title"><?php echo stripslashes($explore_our_value['label']);?></p>
                    <p class="explore-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eveniet quasi vitae dicta optio doloremque, ullam dolor repellendus ratione obcaecati.</p>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="main-explore-box text-center">
                    <div class="explore-img">
                        <img src="image/icon/tummy-tuck.png" alt="icon">
                    </div>
                    <p class="explore-title">Tummy Tuck</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="main-explore-box text-center">
                    <div class="explore-img">
                        <img src="image/icon/arm-lift.png" alt="icon">
                    </div>
                    <p class="explore-title">Arm Lift</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="main-explore-box text-center">
                    <div class="explore-img">
                        <img src="image/icon/thigh-lift.png" alt="icon">
                    </div>
                    <p class="explore-title">Thigh Lift</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="main-explore-box text-center">
                    <div class="explore-img">
                        <img src="image/icon/buttock-lift.png" alt="icon">
                    </div>
                    <p class="explore-title">Buttock Lift / Augmentation</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="main-explore-box text-center">
                    <div class="explore-img">
                        <img src="image/icon/liposuction-surgery.png" alt="icon">
                    </div>
                    <p class="explore-title">Liposuction Surgery</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="main-explore-box text-center">
                    <div class="explore-img">
                        <img src="image/icon/fat-grafting.png" alt="icon">
                    </div>
                    <p class="explore-title">Fat Grafting / Fat Transfer</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="main-explore-box text-center">
                    <div class="explore-img">
                        <img src="image/icon/bariatric-surgery.png" alt="icon">
                    </div>
                    <p class="explore-title">Post Bariatric/ Weight Loss Surgery</p>
                </div>
            </div> -->

        </div>
    </div>
</section>
<?php } ?>



<section class="subbanner_wrapper section-margin-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="title">Book Your Surgery with Confidence – Seamless, Safe, and Stress-Free.</p>
                <div class="main-btn d-flex justify-content-center">
                    <a href="<?php echo Site_Url; ?>doctors-appoinment">Book An Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reasons-choose_wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <div class="reasons-main-img">
                    <img src="<?php echo Site_Url; ?>image/reasons-img.jpg" alt="reasons-img">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <p class="title">Reasons to Choose Us</p>

                <div class="main-reasons-text d-flex gap-3">
                    <div class="reasons-main-icon">
                        <img src="<?php echo Site_Url; ?>image/icon/positive-icon.svg" alt="icon">
                    </div>
                    <div class="reasons-main-text">
                        <p class="reasons-title">100% Positive Feedback</p>
                        <p class="reasons-text">Cosmetic surgery team is dedicated to providing our patients with safe treatment</p>
                    </div>
                </div>

                <div class="main-reasons-text d-flex gap-3">
                    <div class="reasons-main-icon">
                        <img src="<?php echo Site_Url; ?>image/icon/team-icon.svg" alt="icon">
                    </div>
                    <div class="reasons-main-text">
                        <p class="reasons-title">Team Approach</p>
                        <p class="reasons-text">Top specialist and surgeons only for a guaranteed success and maximum resultnt</p>
                    </div>
                </div>

                <div class="main-reasons-text d-flex gap-3">
                    <div class="reasons-main-icon">
                        <img src="<?php echo Site_Url; ?>image/icon/technology-icon1.svg" alt="icon">
                    </div>
                    <div class="reasons-main-text">
                        <p class="reasons-title">3D Vectra Technology</p>
                        <p class="reasons-text">Modern and highly effective technology for plastic surgeries and cosmetic treats</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php if($get_category_faq_count > 0){ ?>
<section class="faq_wrapper faq-bg  section-margin-bottom">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <p class="title">Frequently Asked Questions</p>
         </div>
         <div class="col-12">
            <div class="accordion" id="accordionExample">
                 <?php 
                 $count_faq = 1;
                 foreach($category_faq_array as $category_faq_value){ ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count_faq; ?>" aria-expanded="true" aria-controls="collapseOne">
                             <?php echo stripslashes($category_faq_value['title']); ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $count_faq; ?>" class="accordion-collapse collapse <?php echo ($count_faq == 1) ? "show" : ""; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> <?php echo stripslashes($category_faq_value['description']); ?></p>
                            </div>
                        </div>
                    </div>
                 <?php $count_faq++; } ?>
               <!-- <div class="accordion-item">
                  <h2 class="accordion-header">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Who is a good candidate for body treatment?
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Individuals who are generally healthy, near their ideal weight, and looking to improve specific areas of their body, such as removing excess fat or tightening loose skin, are good candidates.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     What is the recovery time for body treatment surgeries?
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                       <p>Recovery times vary depending on the type of surgery. Non-surgical treatments usually have little to no downtime, while surgical procedures like tummy tucks or liposuction may require a recovery period of several weeks.</p>
                     </div>
                  </div>
               </div>

               <div class="accordion-item">
                  <h2 class="accordion-header">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Are there any risks associated with body treatments?
                     </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Like any procedure, body treatments carry some risks, including infection, scarring, or complications from anesthesia in surgical cases. Discussing potential risks with your surgeon is essential.</p>
                     </div>
                  </div>
               </div> -->



            </div>
         </div>
      </div>
   </div>
</section>
<?php } ?>
<section class="book_wrapper services-form ">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
            <div class="d-flex align-items-end">
                <div class="main-services-form-img">
                    <img src="<?php echo Site_Url; ?>image/services-form-img.jpeg" alt="image">
                </div>
            </div>
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