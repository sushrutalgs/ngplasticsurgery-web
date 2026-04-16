<?php include('header-top.php'); ?>
<title>Doctor’s Appoinment - NG Plastic Surgery</title>
<?php include('header.php'); ?>

<section class="banner_wrapper1">
   <div class="swiper mySwiper">
      <div class="swiper-wrapper">

         <div class="swiper-slide">
            <div class="doctor-main-img">
                <div class="container">
                   <div class="row ">
                      <div class="col-lg-6 col-md-12 col-sm-12  mt-4">
                         <h1 class="banner-title">Skin  <br class="d-md-none d-block"> Treatments</h1>
                         <p class="banner-text">Fall in love with your skin</p>
                      </div>

                   </div>
                </div>
            </div>

         </div>

         <div class="swiper-slide">
             <div class="doctor-main-img doctor-img1">
                <div class="container">
                   <div class="row ">
                      <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                         <h1 class="banner-title">Botox</h1>
                         <p class="banner-text">Enhance your facial harmony</p>
                      </div>
    
                   </div>
                </div>
            </div>

         </div>

         <div class="swiper-slide">
            <div class="doctor-main-img doctor-img2">
                <div class="container">
                   <div class="row ">
                      <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                         <h1 class="banner-title">Tummy Tuck</h1>
                         <p class="banner-text">Fall in love with your body</p>
                      </div>
    
                   </div>
                </div>
            </div>

         </div>


      </div>
      <div class="swiper-pagination"></div>
   </div>
</section>

<section class="section-padding">
    <div class="container">
              <div class="main-treatment d-flex justify-content-center gap-3 flex-wrap mt-4">
         <div class="treatment-box">
            <a href="#">
               <div class="treatment-content">
                  <img src="image/cosmetic-gynecology.jpeg" alt="Cosmetic Gynecology">
                  <h4>Cosmetic Gynecology</h4>
               </div>
            </a>
         </div>
         <div class="treatment-box">
            <a href="#">
               <div class="treatment-content">
                  <img src="image/mommy-makeover.png" alt="Cosmetic Gynecology">
                  <h4>Mommy Makeover</h4>
               </div>
            </a>
         </div>
         <div class="treatment-box">
            <a href="#">
               <div class="treatment-content">
                  <img src="image/breast-treatment.png" alt="Cosmetic Gynecology">
                  <h4>Breast Treatment</h4>
               </div>
            </a>
         </div>
         <div class="treatment-box">
            <a href="#">
               <div class="treatment-content">
                  <img src="image/hair-transplant.png" alt="Cosmetic Gynecology">
                  <h4>Hair Transplant</h4>
               </div>
            </a>
         </div>
         <div class="treatment-box">
            <a href="#">
               <div class="treatment-content">
                  <img src="image/liposuction.jpg" alt="Cosmetic Gynecology">
                  <h4>Liposuction</h4>
               </div>
            </a>
         </div>
      </div>
    </div>
</section>


<section class="book_wrapper section-padding-bottom">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
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
            <div class="row">
                <div class="col-md-6 col-sm-12 mt-4">
                    <div class="main-doctor-img">
                        <img src="image/doctor-img1.jpg" alt="img" class="h-100 w-100">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-4">
                    <div class="main-doctor-img">
                        <img src="image/doctor-img2.jpg" alt="img" class="h-100 w-100">
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="why_wrapper ">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <p class="title text-center">Why Choose Us</p>
            <p class="text-center why-text">Dr. Neel Gupta, a board certified plastic surgeon in India, offers advanced, safe, and personalized <br class="d-md-block d-none"> treatments with world-class technology and a highly skilled team.</p>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
            <div class="main-neel-box">
               <div class="neel-box">
                  <img src="image/icon/safe.svg" alt="icon">
               </div>
               <p class="about-subtext text-center">Safe</p>
            </div>
         </div>
         <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
            <div class="main-neel-box">
               <div class="neel-box">
                  <img src="image/icon/professional-1.svg" alt="icon">
               </div>
               <p class="about-subtext text-center">Professional</p>
            </div>
         </div>
         <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
            <div class="main-neel-box">
               <div class="neel-box">
                  <img src="image/icon/private.svg" alt="icon">
               </div>
               <p class="about-subtext text-center">Private</p>
            </div>
         </div>

         <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
            <div class="main-neel-box">
               <div class="neel-box">
                  <img src="image/icon/technology.svg" alt="icon">
               </div>
               <p class="about-subtext text-center">Latest Technology</p>
            </div>
         </div>

         <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
            <div class="main-neel-box">
               <div class="neel-box">
                  <img src="image/icon/state.svg" alt="icon">
               </div>
               <p class="about-subtext text-center">State of the Art Equipment</p>
            </div>
         </div>

         <div class="col-lg-2 col-md-4 col-sm-6 mt-4">
            <div class="main-neel-box">
               <div class="neel-box">
                  <img src="image/icon/best.svg" alt="icon">
               </div>
               <p class="about-subtext text-center">Best Qualified Professional</p>
            </div>
         </div>

      </div>
   </div>
</section>


<section class="about2_wrapper section-padding-bottom">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
            <div class="about2-img doctor-img">
               <img src="image/neel-gupta.webp" alt="Dr. neel gupta img">
            </div>
         </div>
         <div class="col-lg-6 col-md-12 col-sm-12 mt-4 px-4">
            <p class="subtitle">ABOUT Dr. neel gupta</p>
            <p class="about2-text text-justify">Dr. Neel Gupta, MS, DrNB (Plastic and Reconstructive Surgery), is a highly skilled and compassionate plastic surgeon in Ahmedabad. Driven by her passion to help others, she believes that everyone deserves to feel confident in their appearance. Her approach emphasizes precision, thoroughness, and clear communication with her patients.</p>

            <p class="about2-text text-justify">Strong communication and honesty with patients are two of the pillars she bases her work on. Dr. Gupta and her team, work vigorously to help patients achieve their aesthetic goals, improve their confidence, and harmonize their appearances. Additionally, she lends her expertise not only to adults, but also to pediatric patients in need of reconstructive surgery. She excels in microvascular surgery for head, neck and breast reconstruction as well.</p>

         </div>
      </div>
   </div>
</section>


<section class="memberships_wrapper membership2 section-padding-bottom">
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
               <img src="image/logo/cytecare.png" alt="cytecare">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/indian.png" alt="iaapindians">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/as.png" alt="as">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/columbia.png" alt="columbia">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/astercmil.png" alt="astercmil">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/iasps.png" alt="iasps">
            </div>
         </div>
         <div class="swiper-slide">
            <div class="membership-logo">
               <img src="image/logo/cavalier.png" alt="cavalier">
            </div>
         </div>


      </div>

   </div>

   </div>
</section>

<section class="explore_wrapper section-padding-bottom">
    <div class="container">
        <p class="title text-center mb-5">Explore Our Services</p>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="explore-box">
                    <div class="main-explore">
                        <div class="explore-img-box ">
                            <img src="image/icon/body-icon.svg" alt="icon">
                        </div>
                        <div class="explore-main-text">
                            <p class="explore-title">Body Treatment</p>
                            <p class="explore-text text-justify">Body treatments sculpt your shape, tighten skin, and remove excess fat for a toned, refreshed look.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="explore-box">
                    <div class="main-explore">
                        <div class="explore-img-box ">
                            <img src="image/icon/breast-icon.svg" alt="icon">
                        </div>
                        <div class="explore-main-text">
                            <p class="explore-title">Breast Treatment</p>
                            <p class="explore-text text-justify">Breast treatments improve shape, size, and symmetry, giving you a more balanced and confident look.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="explore-box explore-box-right">
                    <div class="main-explore">
                        <div class="explore-img-box ">
                            <img src="image/icon/hair-icon.svg" alt="icon">
                        </div>
                        <div class="explore-main-text">
                            <p class="explore-title">Hair Treatment</p>
                            <p class="explore-text text-justify">Hair treatments boost hair growth, density, and scalp health for thicker, fuller hair.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="explore-box explore-box-bottom">
                    <div class="main-explore">
                        <div class="explore-img-box ">
                            <img src="image/icon/gynecology-icon.svg" alt="icon">
                        </div>
                        <div class="explore-main-text">
                            <p class="explore-title">Cosmetic Gynecology</p>
                            <p class="explore-text text-justify">Cosmetic gynecology enhances vaginal appearance and function, improving comfort and confidence.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="explore-box explore-box-bottom">
                    <div class="main-explore">
                        <div class="explore-img-box ">
                            <img src="image/icon/surgery-icon.svg" alt="icon">
                        </div>
                        <div class="explore-main-text">
                            <p class="explore-title">Reconstructive Surgery</p>
                            <p class="explore-text text-justify">Reconstructive surgery repairs and reshapes areas affected by injury or conditions, improving appearance and quality of life.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="explore-box explore-box-bottom explore-box-right">
                    <div class="main-explore">
                        <div class="explore-img-box ">
                            <img src="image/icon/aesthetics-icon.svg" alt="icon">
                        </div>
                        <div class="explore-main-text">
                            <p class="explore-title">Male Aesthetics</p>
                            <p class="explore-text text-justify">Male aesthetic treatments sculpt the body, enhance masculine features, and refine contours for a more defined look.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="tesimonial_wrapper section-margin-bottom">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 py-4">
            <div class="text-center mt-4">
               <p class="subtitle">Testimonials</p>
               <p class="title">What Clients Say</p>
               <img src="image/icon/testi-icon.png" alt="">
            </div>
            <div class="swiper mySwiper1">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="main-testimonial-box">
                        <div class="star d-flex justify-content-center">
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-justify testimonial-text">I’m so glad I chose to undergo gynecomastia surgery! The results are life-changing. My chest looks natural, and my confidence has skyrocketed. Dr. Neel Gupta and the team were incredibly professional, making the entire process smooth and comfortable. I couldn’t be happier with the outcome!</p>
                        <p class="testimonial-name">Aaradhy J</p>
                        <p class="testimonial-text">Patient</p>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="main-testimonial-box">
                        <div class="star d-flex justify-content-center">
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-justify testimonial-text">Having liposuction with Dr. Neel Gupta was a remarkable experience. Her skilled approach and supportive nature made a big difference. The results were beyond my expectations, providing a sleeker, more confident look. I am deeply appreciative of Dr. Gupta and her team for their superb care and making the entire process smooth and reassuring.</p>
                        <p class="testimonial-name">Divya </p>
                        <p class="testimonial-text">Patient</p>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="main-testimonial-box">
                        <div class="star d-flex justify-content-center">
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-justify testimonial-text">I had a hair transplant with Dr. Neel Gupta, and it was a game-changer. Her professionalism and meticulous care led to fantastic results, revitalizing my hairline and boosting my confidence. I'm deeply thankful for the exceptional care provided by her.</p>
                        <p class="testimonial-name">Ansh Sharma</p>
                        <p class="testimonial-text">Patient</p>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="main-testimonial-box">
                        <div class="star d-flex justify-content-center">
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-justify testimonial-text">Choosing Dr. Neel Gupta for my breast reduction surgery was a life-changing decision. Her expertise and compassionate care made all the difference. From the initial consultation to post-surgery follow-ups, I felt supported and informed. My recovery was smooth, and the results have truly exceeded my expectations. I now enjoy a new level of comfort and confidence. Thank you, Dr. Gupta, for your exceptional skill and dedication!</p>
                        <p class="testimonial-name">Jiya Rawal </p>
                        <p class="testimonial-text">Patient</p>
                     </div>
                  </div>
               </div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="blog_wrapper section-padding-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p class="subtitle">Blogs</p>
                <p class="title">Read Our Articles</p>
                <p class="blog-text">Explore our articles for insights on the latest cosmetic procedures and treatments. <br class="d-lg-block d-none"> Stay informed and make the best choices for your beauty and wellness!</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="blog-card">
                  <a href="blog-details.php">
                    <div class="blog-img">
                        <img src="image/blog-img1.png" alt="blog img">
                    </div>
                  </a>
                    <div class="blog-content">
                     <a href="blog-details.php">
                        <h5 class="subtitle">How Many Grafts Do You Need? Understanding Hair Density for</h5>
                     </a>
                        <p class="blog-text">A recent study reveals that around 50 percent of Indian...</p>
                        <a href="blog-details.php">Read More <img src="image/icon/right-up.png" alt="icon"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="image/blog-img2.png" alt="blog img">
                    </div>
                    <div class="blog-content">
                        <h5 class="subtitle">Top FAQs About Gynecomastia Surgery Answered by an Ahmedabad Plastic</h5>
                        <p class="blog-text">If you feel embarrassed to discuss your male breast issues,...</p>
                        <a href="#">Read More <img src="image/icon/right-up.png" alt="icon"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="image/blog-img3.png" alt="blog img">
                    </div>
                    <div class="blog-content">
                        <h5 class="subtitle">Top 5 Clinics for Laser Hair Removal in Ahmedabad +</h5>
                        <p class="blog-text">Do you feel discomfort and struggle with hair on your...</p>
                        <a href="#">Read More <img src="image/icon/right-up.png" alt="icon"></a>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4 d-flex justify-content-center">
                <div class="main-btn ">
                    <a href="blog.php">View More</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>