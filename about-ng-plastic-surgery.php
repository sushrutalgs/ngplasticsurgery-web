<?php include('header-top.php');

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

      <title>Plastic Surgery Cost in Ahmedabad | NG Plastic Surgery</title>
      <meta name="description" content="Discover affordable plastic surgery costs in Ahmedabad with NG Plastic Surgery. Transparent pricing, expert surgeons, and exceptional patient care" />
      <!-- Open Graph Tags -->
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Plastic Surgery Cost in Ahmedabad | NG Plastic Surgery" />
      <meta property="og:description" content="Discover affordable plastic surgery costs in Ahmedabad with NG Plastic Surgery. Transparent pricing, expert surgeons, and exceptional patient care" />
      <meta property="og:url" content="https://www.ngplasticsurgery.in/about-ng-plastic-surgery" />
      <meta property="og:site_name" content="NG Plastic Surgery" />
      <meta property="og:image" content="https://www.ngplasticsurgery.in/image/ab-main-img.webp" />
      <!-- Twitter Card Tags -->
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content="Plastic Surgery Cost in Ahmedabad | NG Plastic Surgery" />
      <meta name="twitter:description" content="Discover affordable plastic surgery costs in Ahmedabad with NG Plastic Surgery. Transparent pricing, expert surgeons, and exceptional patient care" />
      <meta name="twitter:url" content="https://www.ngplasticsurgery.in/about-ng-plastic-surgery" />
      <meta name="twitter:image" content="https://www.ngplasticsurgery.in/image/ab-main-img.webp" />
      <meta name="twitter:image:alt" content="Plastic Surgery Cost in Ahmedabad" />
      <meta name="twitter:site" content="@ngplasticsurg" />
      <meta name="twitter:creator" content="@ngplasticsurg" />

<link rel="canonical" href="https://www.ngplasticsurgery.in/about-ng-plastic-surgery" />
<?php include('header.php'); ?>

<section class="bredcram_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><label class="bredcarm-title">About NG Plastic Surgery</label></h1>
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li>/</li>
                    <li>About NG Plastic Surgery</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="about_wrapper aboutmain_wrapper  section-margin">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
            <div class="about-img">
               <img src="image/ab-main-img.webp" alt="about img ">
            </div>
         </div>
         <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
            <h2><p class="subtitle">Welcome to NG Plastic Surgery!</p></h2>
            <p class="about-text text-justify">NG Plastic Surgery is a leading reconstructive and cosmetic plastic surgery clinic specializing in advanced procedures to enhance beauty and boost confidence. As a trusted cosmetic plastic surgery clinic, we offer personalized treatments, including breast augmentation, liposuction, rhinoplasty, and gynecomastia surgery.</p>

            <p class="about-text text-justify">Led by Dr. Neel Gupta-<a href="/">Best plastic surgeon in Ahmedabad,</a>our team ensures patient safety, comfort, and satisfaction with each procedure. Equipped with state-of-the-art technology, we deliver exceptional results tailored to individual needs. Whether seeking subtle enhancements or significant transformations, NG Plastic Surgery Clinic is dedicated to helping you achieve your aesthetic goals in a caring and professional environment.</p>
         </div>
      </div>

   </div>
</section>

<section class="book_wrapper section-padding-bottom">
   <div class="container">
      <div class="row">
         <!-- <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
            <p class="title text-center">Book An Appoinment</p>
            <form action="#">
               <div class="row">
                  <div class="col-md-6 col-sm-12 mt-4">
                     <label for="#" class="book-label">First Name <span class="book-com">*</span></label>
                     <input type="text" name="firstname">
                  </div>
                  <div class="col-md-6 col-sm-12 mt-4">
                     <label for="#" class="book-label">Last Name <span class="book-com">*</span></label>
                     <input type="text" name="lastname">
                  </div>
                  <div class="col-md-6 col-sm-12 mt-4">
                     <label for="#" class="book-label">Mobile Number <span class="book-com">*</span></label>
                     <input type="tel" name="mobilenumber">
                  </div>
                  <div class="col-md-6 col-sm-12 mt-4">
                     <label for="#" class="book-label">Email Address <span class="book-com">*</span></label>
                     <input type="email" name="email">
                  </div>
                  <div class="col-md-6 col-sm-12 mt-4">
                     <label for="#" class="book-label">Surgical Service</label>
                     <select name="Surgical" id="Surgical">
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
                     <select name="Non-Surgical" id="Non-Surgical">
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
                     <input type="date" name="date">
                  </div>
                  <div class="col-md-12 col-sm-12 mt-4">
                     <label for="#" class="book-label">Write your comment here <span class="book-com">*</span>  </label>
                     <textarea class="" placeholder=" " required></textarea>

                     <div class="main-btn mt-4">
                        <a href="#">Submit Now</a>
                     </div>
                  </div>

               </div>
            </form>
         </div> -->
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
         <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
            <div class="working-hours">
               <div class="box-title">
                  <p class="title">Working Hours</p>
               </div>
               <div class="schedule">
                  <div class="schedule-row">
                     <span class="day">Monday – Saturday</span>
                     <span class="time">10:00 AM – 01:00 PM<br>05:00 PM – 08:00 PM</span>
                  </div>
                  <div class="schedule-row closed">
                     <span class="day">Sunday</span>
                     <span class="time">Closed</span>
                  </div>
               </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d98015.06569034292!2d72.593433!3d23.103287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e835e631d5603%3A0xafdcbca461636809!2sNG%20Plastic%20Surgery%20%7C%20Plastic%20Surgeon%20In%20Ahmedabad%20%7C%20Hair%20Transplant%20%7C%20Gynecomastia%20%7C%20Breast%20Reduction%20%26%20Implants!5e1!3m2!1sen!2sus!4v1755496161760!5m2!1sen!2sus" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
</section>


<section class="memberships_wrapper section-padding-bottom">
   <div class="container-fluid">
      <p class="title text-center">Memberships & Associates</p>

      <div class="swiper logoswiper">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/apollo.png" alt="apollo">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/iaaps.png" alt="iaaps">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/sal.png" alt="sal">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/steraling-hospitals.png" alt="steraling-hospitals">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/surgeons-in-india.png" alt="surgeons-in-india">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/vims.png" alt="vims">
            </div>
         </div>

      </div>

   </div>

   </div>
</section>

<section class="memberships_wrapper ">
   <div class="container-fluid">
      <p class="title text-center">Gallery</p>

      <div class="swiper gallery mb-5">
      <div class="swiper-wrapper gallery-grid">
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="Dr. Ajmera, Dr. Rekha Bhatia"  href="image/gallery/g-1.jpg">
                  <img src="image/gallery/g-1.jpg" alt="dr. ajmera, dr. rekha bhatia">
                  <p class="gallery-title">dr. ajmera, dr. rekha bhatia</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. alap bavishi and dr. ishan bhavsar" href="image/gallery/g-2.jpg">
                  <img src="image/gallery/g-2.jpg" alt="dr. alap bavishi and dr. ishan bhavsar">
                  <p class="gallery-title">dr. alap bavishi and dr. ishan bhavsar</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. archana and dr. nayan shah" href="image/gallery/g-3.jpg">
                  <img src="image/gallery/g-3.jpg" alt="dr. archana and dr. nayan shah">
                  <p class="gallery-title">dr. archana and dr. nayan shah</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. ashay shah" href="image/gallery/g-4.jpg">
                  <img src="image/gallery/g-4.jpg" alt="dr. ashay shah">
                  <p class="gallery-title">dr. ashay shah</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. bharat patel, om imaging" href="image/gallery/g-5.jpg">
               <img src="image/gallery/g-5.jpg" alt="dr. bharat patel, om imaging">
               <p class="gallery-title">dr. bharat patel, om imaging</p>
                </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. BS shah, dr. bhavesh shah" href="image/gallery/g-6.jpg">
               <img src="image/gallery/g-6.jpg" alt="dr. BS shah, dr. bhavesh shah">
               <p class="gallery-title">dr. BS shah, dr. bhavesh shah</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. chirag desia, apollo" href="image/gallery/g-7.jpg">
               <img src="image/gallery/g-7.jpg" alt="dr. chirag desia, apollo">
               <p class="gallery-title">dr. chirag desia, apollo</p>
            </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. himanshu vora" href="image/gallery/g-8.jpg">
               <img src="image/gallery/g-8.jpg" alt="dr. himanshu vora">
               <p class="gallery-title">dr. himanshu vora</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. karn maheshwari and dr. dhwani maheshwari" href="image/gallery/g-9.jpg">
               <img src="image/gallery/g-9.jpg" alt="dr. karn maheshwari and dr. dhwani maheshwari">
               <p class="gallery-title">dr. karn maheshwari and dr. dhwani maheshwari</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. kaustubh patel, dr. sanjay rajput, dr. rupande patel" href="image/gallery/g-10.jpg">
               <img src="image/gallery/g-10.jpg" alt="dr. kaustubh patel, dr. sanjay rajput, dr. rupande patel">
               <p class="gallery-title">dr. kaustubh patel, dr. sanjay rajput, dr. rupande patel</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. kedarnath pandya" href="image/gallery/g-11.jpg">
               <img src="image/gallery/g-11.jpg" alt="dr. kedarnath pandya">
               <p class="gallery-title">dr. kedarnath pandya</p>
            </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. kunal aterkar and dr. shruti khare aterkar" href="image/gallery/g-12.jpg">
               <img src="image/gallery/g-12.jpg" alt="dr. kunal aterkar and dr. shruti khare aterkar">
               <p class="gallery-title">dr. kunal aterkar and dr. shruti khare aterkar</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. kush shah and dr. niket" href="image/gallery/g-13.jpg">
               <img src="image/gallery/g-13.jpg" alt="dr. kush shah and dr. niket shah">
               <p class="gallery-title">dr. kush shah and dr. niket shah</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. lakshman khiria, apollo" href="image/gallery/g-14.jpg">
               <img src="image/gallery/g-14.jpg" alt="dr. lakshman khiria, apollo">
               <p class="gallery-title">dr. lakshman khiria, apollo</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. piyush and dr. dipal shashtri" href="image/gallery/g-15.jpg">
               <img src="image/gallery/g-15.jpg" alt="dr. piyush and dr. dipal shashtri">
               <p class="gallery-title">dr. piyush and dr. dipal shashtri</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. rajendra toprani, hcg aastha" href="image/gallery/g-16.jpg">
               <img src="image/gallery/g-16.jpg" alt="dr. rajendra toprani, hcg aastha">
               <p class="gallery-title">dr. rajendra toprani, hcg aastha</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. rohit jain" href="image/gallery/g-17.jpg">
               <img src="image/gallery/g-17.jpg" alt="dr. rohit jain">
               <p class="gallery-title">dr. rohit jain</p>
               </a>

            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. sanjay shah, apollo" href="image/gallery/g-18.jpg">
               <img src="image/gallery/g-18.jpg" alt="dr. sanjay shah, apollo">
               <p class="gallery-title">dr. sanjay shah, apollo</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. shakuntala shah and dr. viren shah" href="image/gallery/g-19.jpg">
               <img src="image/gallery/g-19.jpg" alt="dr. shakuntala shah and dr. viren shah">
               <p class="gallery-title">dr. shakuntala shah and dr. viren shah</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. swati shah, apollo" href="image/gallery/g-20.jpg">
               <img src="image/gallery/g-20.jpg" alt="dr. swati shah, apollo">
               <p class="gallery-title">dr. swati shah, apollo</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. yash patel" href="image/gallery/g-21.jpg">
               <img src="image/gallery/g-21.jpg" alt="dr. yash patel">
               <p class="gallery-title">dr. yash patel</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="viral bhatt" href="image/gallery/g-22.jpg">
               <img src="image/gallery/g-22.jpg" alt="viral bhatt">
               <p class="gallery-title">viral bhatt</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="dr. DG Vijay, hcg aastha, dr.jatin bhojani, zydus, dr. rajesh trivedi" href="image/gallery/g-23.jpg">
               <img src="image/gallery/g-23.jpg" alt="dr. DG Vijay, hcg aastha, dr.jatin bhojani, zydus, dr. rajesh trivedi">
               <p class="gallery-title">dr. DG Vijay, hcg aastha, dr.jatin bhojani, zydus, dr. rajesh trivedi</p>
               </a>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="gallery-img">
               <a data-fancybox="gallery" data-caption="morari bapu" href="image/gallery/g-24.png">
               <img src="image/gallery/g-24.png" alt="morari bapu">
               <p class="gallery-title">morari bapu</p>
               </a>
            </div>
         </div>


      </div>

   </div>

   </div>



<?php include('footer.php'); ?>
<script type="text/javascript">
   $(document).ready(function() {
         setTimeout(function() {
           $(".alert").remove();
         }, 2500);
   });
</script>