<?php include('header-top.php'); ?>
<title>NG Plastic Surgery Blog | Tips & Insights</title>
<meta name="description" content="Explore expert insights on plastic surgery, skin treatments, and cosmetic care at the NG Plastic Surgery Blog. Stay updated with trusted tips, guides, and latest procedures." />
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="NG Plastic Surgery Blog | Tips & Insights" />
      <meta property="og:description" content="Explore expert insights on plastic surgery, skin treatments, and cosmetic care at the NG Plastic Surgery Blog. Stay updated with trusted tips, guides, and latest procedures." />
      <meta property="og:url" content="https://www.ngplasticsurgery.in/blog" />
      <meta property="og:site_name" content="NG Plastic Surgery" />
      <meta property="og:image" content="https://www.ngplasticsurgery.in/image/main-logo.png" />
      <!-- Twitter Card Tags -->
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content="NG Plastic Surgery Blog | Tips & Insights" />
      <meta name="twitter:description" content="Explore expert insights on plastic surgery, skin treatments, and cosmetic care at the NG Plastic Surgery Blog. Stay updated with trusted tips, guides, and latest procedures." />
      <meta name="twitter:url" content="https://www.ngplasticsurgery.in/blog" />
      <meta name="twitter:image" content="https://www.ngplasticsurgery.in/image/main-logo.png" />
      <meta name="twitter:image:alt" content="Non-Surgical Procedures in Ahmedabad" />
      <meta name="twitter:site" content="@ngplasticsurg" />
      <link rel="canonical" href="https://www.ngplasticsurgery.in/blog" />
<?php include('header.php'); ?>

<section class="bredcram_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><label class="bredcarm-title">Blogs</label></h1>
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="blog_wrapper section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p class="title">Read Our Articles</p>
                <p class="blog-text">Explore our insightful articles on various surgical  procedures to empower your health decisions and  <br> enhance your understanding of the transformative possibilities!</p>
            </div>

             <?php
            // echo "SELECT * FROM `ahq_blog` WHERE `status` = '1' ORDER BY `blog_id` DESC";
            // exit;
                $fetch_blog_sql=mysqli_query($con,"SELECT * FROM `ahq_blog` WHERE `status` = '1' ORDER BY `blog_id` DESC") or die(mysqli_error($con));
                $i=1;
                if(mysqli_num_rows($fetch_blog_sql)>0) {
                while($data = mysqli_fetch_array($fetch_blog_sql)) {
                    $blogImg = Site_Url."BlogImg"; 
                    $imgfileSource = $blogImg . DIRECTORY_SEPARATOR . $data['image'];
                    // echo '<pre>';
                    // print_r($data);
                    // exit;
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="blog-card">
                    <a href="<?php echo Site_Url."blog/" . $data['title_slug']; ?>">
                        <div class="blog-img">
                            <img src="<?php echo $imgfileSource; ?>" alt="blog img">
                        </div>
                    </a>
                    <div class="blog-content">
                        <a href="<?php echo Site_Url."blog/" . $data['title_slug']; ?>">
                            <h5 class="subtitle"> <?php echo $data['title']; ?></h5>
                        </a>
                        <!-- <p class="blog-text">A recent study reveals that around 50 percent of Indian...</p> -->
                        <a href="<?php echo Site_Url."blog/" . $data['title_slug']; ?>">Read More <img src="image/icon/right-up.png" alt="icon"></a>
                    </div>
                </div>
            </div>
            <?php
                    $i++;
                    }    
                }else{
                    ?>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h5 class="text-center">No Blog</h5>
                    </div>
                    <?php
                } ?>

           <!--  <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="blog-card">
                    <a href="#">
                        <div class="blog-img">
                            <img src="image/blog-img2.png" alt="blog img">
                        </div>
                    </a>
                    <div class="blog-content">
                        <a href="#">
                            <h5 class="subtitle">Top FAQs About Gynecomastia Surgery Answered by an Ahmedabad Plastic</h5>
                        </a>
                        <p class="blog-text">If you feel embarrassed to discuss your male breast issues,...</p>
                        <a href="#">Read More <img src="image/icon/right-up.png" alt="icon"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="blog-card">
                    <a href="#">
                        <div class="blog-img">
                            <img src="image/blog-img3.png" alt="blog img">
                        </div>
                    </a>
                    <div class="blog-content">
                        <a href="#">
                            <h5 class="subtitle">Top 5 Clinics for Laser Hair Removal in Ahmedabad +</h5>
                        </a>
                        <p class="blog-text">Do you feel discomfort and struggle with hair on your...</p>
                        <a href="#">Read More <img src="image/icon/right-up.png" alt="icon"></a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>


<?php include('footer.php'); ?>
