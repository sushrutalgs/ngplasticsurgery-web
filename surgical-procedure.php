<?php include('header-top.php'); ?>
<title>Surgical Procedure - NG Plastic Surgery</title>
<?php include('header.php'); ?>

<section class="bredcram_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <label class="bredcarm-title">Surgical Procedure</label>
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Surgical Procedure</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="procedure_wrapper section-padding">
    <div class="container">
        <div class="row">
            <?php
            $get_spc_category_sql = mysqli_query($con,"SELECT category_id,category_name,category_slug,image,otherDescription  FROM `spc_category` WHERE `status` = '1' ");
            while($get_spc_category_data = mysqli_fetch_array($get_spc_category_sql))
            {
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="<?php echo Site_Url."CategoryImages/".$get_spc_category_data['image']; ?>" alt="">
                    </div>
                    <p class="title"><?php echo stripslashes($get_spc_category_data['category_name']);?></p>
                    <p class="procedure-text text-justify"><?php echo stripslashes($get_spc_category_data['otherDescription']);?></p>
                    <div class="main-btn">
                        <a href="<?php echo Site_Url."category/".$get_spc_category_data['category_slug']; ?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <!-- <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/surgical-img2.jpg" alt="">
                    </div>
                    <p class="title">Breast Treatment</p>
                    <p class="procedure-text text-justify">Breast treatments enhance the shape, size, and symmetry of your breasts, providing a more balanced and confident appearance.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/surgical-img3.jpeg" alt="">
                    </div>
                    <p class="title">Hair Treatment</p>
                    <p class="procedure-text text-justify">Hair treatments restore hair growth, improve hair density, and enhance overall scalp health for thicker, fuller hair.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/surgical-img4.jpeg" alt="">
                    </div>
                    <p class="title">Skin Treatment</p>
                    <p class="procedure-text text-justify">Skin treatments rejuvenate your complexion, improving texture, tone, and clarity for healthier, more radiant skin.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/surgical-img5.jpeg" alt="">
                    </div>
                    <p class="title">Facial Aesthetics</p>
                    <p class="procedure-text text-justify">Facial aesthetic treatments enhance facial features, smooth wrinkles, and restore youthful contours for a refreshed, balanced appearance.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/surgical-img6.jpeg" alt="">
                    </div>
                    <p class="title">Male Aesthetics</p>
                    <p class="procedure-text text-justify">Male aesthetic treatments enhance masculine features, sculpt the body, and improve facial and body contours for a stronger, more defined appearance.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/surgical-img7.jpeg" alt="">
                    </div>
                    <p class="title">Cosmetic Gynecology</p>
                    <p class="procedure-text text-justify">Cosmetic gynecology treatments enhance both the appearance and function of the vaginal area, improving comfort, confidence, and sexual wellness.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="procedure-box">
                    <div class="procedure-img">
                        <img src="image/surgical-img8.jpeg" alt="">
                    </div>
                    <p class="title">Reconstructive Surgery</p>
                    <p class="procedure-text text-justify">Reconstructive surgery restores form and function by repairing or reshaping areas affected by injury, surgery, or congenital conditions, helping improve both appearance and quality of life.</p>
                    <div class="main-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div> -->



        </div>
    </div>
</section>




<?php include('footer.php'); ?>