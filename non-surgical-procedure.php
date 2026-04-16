<?php include('header-top.php'); ?>
<title>Non-Surgical Procedures | NG Plastic Surgery</title>
<meta name="description" content="Explore safe and effective non-surgical treatments at NG Plastic Surgery, including acne scar care, Botox, and dermal fillers for natural, youthful enhancement." />
 <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Non-Surgical Procedures | NG Plastic Surgery" />
      <meta property="og:description" content="Explore safe and effective non-surgical treatments at NG Plastic Surgery, including acne scar care, Botox, and dermal fillers for natural, youthful enhancement." />
      <meta property="og:url" content="https://www.ngplasticsurgery.in/non-surgical-procedure" />
      <meta property="og:site_name" content="NG Plastic Surgery" />
      <meta property="og:image" content="https://www.ngplasticsurgery.in/NonProductImages/non-surgical1758012678.png" />
      <!-- Twitter Card Tags -->
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content="Non-Surgical Procedures | NG Plastic Surgery" />
      <meta name="twitter:description" content="Explore safe and effective non-surgical treatments at NG Plastic Surgery, including acne scar care, Botox, and dermal fillers for natural, youthful enhancement." />
      <meta name="twitter:url" content="https://www.ngplasticsurgery.in/non-surgical-procedure" />
      <meta name="twitter:image" content="https://www.ngplasticsurgery.in/NonProductImages/non-surgical1758012678.png" />
      <meta name="twitter:image:alt" content="Non-Surgical Procedures in Ahmedabad" />
      <meta name="twitter:site" content="@ngplasticsurg" />
      
      
<?php include('header.php'); ?>

<section class="bredcram_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <label class="bredcarm-title">Non-Surgical Procedure</label>
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Non-Surgical Procedure</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="procedure_wrapper section-padding">
    <div class="container">
        <div class="row">
              <?php
            $get_spc_category_sql = mysqli_query($con,"SELECT product_id,product_name,product_slug,image,other_description  FROM `non_surgical` WHERE `status` = '1' ");
            while($get_spc_category_data = mysqli_fetch_array($get_spc_category_sql))
            {
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <?php if(!empty($get_spc_category_data['image'])){ ?>
                        <img src="<?php echo Site_Url."NonProductImages/".$get_spc_category_data['image']; ?>" alt="">
                        <?php } ?>
                    </div>
                    <p class="title"><?php echo stripslashes($get_spc_category_data['product_name']);?></p>
                    <p class="procedure-text text-justify"><?php echo stripslashes($get_spc_category_data['other_description']);?></p>
                    <div class="main-btn">
                        <a href="<?php echo Site_Url."non-surgical-procedure/".$get_spc_category_data['product_slug']; ?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
           <!--  <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/procedure-img2.png" alt="">
                    </div>
                    <p class="title">Botox</p>
                    <p class="procedure-text text-justify">Botox is a safe, FDA-approved, non-surgical solution to reduce wrinkles and fine lines. It relaxes facial muscles for smoother skin, offering a refreshed, youthful look tailored to enhance your natural beauty.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/procedure-img3.png" alt="">
                    </div>
                    <p class="title">Dermal Filler</p>
                    <p class="procedure-text text-justify">Dermal fillers are non-surgical injectables that restore volume, smooth wrinkles, and enhance facial features using hyaluronic acid for a youthful, rejuvenated look.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/procedure-img4.png" alt="">
                    </div>
                    <p class="title">Skin Booster</p>
                    <p class="procedure-text text-justify">Skin Booster Injections are lightweight hyaluronic acid treatments that deeply hydrate and enhance skin texture, elasticity, and radiance, offering a refreshed, youthful look without adding volume.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/procedure-img5.png" alt="">
                    </div>
                    <p class="title">Laser Hair Removal</p>
                    <p class="procedure-text text-justify">Laser hair removal offers a safe, effective, and lasting solution to unwanted hair. Using advanced diode laser technology, we target hair follicles with precision, achieving smooth, hair-free skin with confidence.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/procedure-img6.png" alt="">
                    </div>
                    <p class="title">Melasma / Pigmentation</p>
                    <p class="procedure-text text-justify">Melasma causes symmetrical dark patches, often due to hormones, sun exposure, or genetics. Hyperpigmentation, caused by excess melanin, can result from sun damage, acne scars, or skin conditions like eczema.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/procedure-img7.png" alt="">
                    </div>
                    <p class="title">Hydrafacial</p>
                    <p class="procedure-text text-justify">HydraFacial cleanses, hydrates, and rejuvenates your skin, delivering instant glow and hydration in just 30–60 minutes. Perfect for all skin types!</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/procedure-img8.png" alt="">
                    </div>
                    <p class="title">Chemical Peel</p>
                    <p class="procedure-text text-justify">A chemical peel exfoliates damaged skin, promoting renewal for smoother, brighter, and youthful-looking skin.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/procedure-img9.png" alt="">
                    </div>
                    <p class="title">Thread-Lift</p>
                    <p class="procedure-text text-justify">A thread lift is a minimally invasive treatment that lifts and tightens sagging skin while stimulating collagen for instant and long-lasting rejuvenation.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div> -->


        </div>
    </div>
</section>




<?php include('footer.php'); ?>