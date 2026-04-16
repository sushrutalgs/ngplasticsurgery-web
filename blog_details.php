<?php include('header-top.php');
$titleSlug = $_GET['title_slug'];
$fetch_blog = mysqli_query($con, " SELECT * FROM `ahq_blog` WHERE title_slug = '$titleSlug' AND status = '1'  ") or die(mysqli_error($con));
$data = mysqli_fetch_array($fetch_blog);
$data_count = mysqli_num_rows($fetch_blog);
$blogImg = "BlogImg";
$imgfileSource = Site_Url . $blogImg . DIRECTORY_SEPARATOR . $data['image'];
if(empty($data_count))
{
     echo '<script type="text/javascript">';
  
    echo 'window.location.href = "/";';
    echo '</script>';
    exit();
}
?>
<title><?php echo stripslashes($data['title_tag']); ?></title>
<meta name="description" content="<?php echo stripslashes($data['meta_description']); ?>" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo stripslashes($data['title_tag']); ?>" />
<meta property="og:description" content="<?php echo stripslashes($data['meta_description']); ?>" />
<meta property="og:url" content="<?php echo Site_Url . "blog/" . $data['title_slug']; ?>" />
<meta property="og:site_name" content="<?php echo Company_Name; ?>" />
<meta property="og:image" content="<?php echo $imgfileSource; ?>" />
<meta name="twitter:title" content="<?php echo $data['title_tag']; ?>" />
<meta name="twitter:url" content="<?php echo Site_Url . "blog/" . $data['title_slug']; ?>" />
<meta name="twitter:description" content="<?php echo $data['meta_description']; ?>" />
<meta name="twitter:image" content="<?php echo $imgfileSource; ?>" />
<meta name="twitter:image:alt" content="<?php echo $data['image_alt']; ?>" />
<link rel="canonical" href="<?php echo Site_Url . "blog/" . $data['title_slug']; ?>" />
<meta name="robots" content="index, follow" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@<?php echo Company_Name; ?>" />
<meta name="twitter:creator" content="@<?php echo Company_Name; ?>" />
<?php
echo "\n" . html_entity_decode($data['schema_content']) . "\n";
include('header.php'); ?>

<section class="bredcram_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <label class="bredcarm-title"><?php echo stripslashes($data['title']); ?></label>
                <ul>
                    <li class="active"><a href="<?php echo Site_Url; ?>">Home</a></li>
                    <li>/</li>
                    <li class="active"><a href="blog">Blogs</a></li>
                    <li>/</li>
                    <li><?php echo stripslashes($data['title']); ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="blog-details_wrapper section-padding">
    <div class="container-fluid ps-4 pe-4">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 mt-4">
                <div class="blog-details-mainimg">
                    <img src="<?php echo $imgfileSource; ?>" alt="blog img">
                </div>
                <h1><?php echo stripslashes($data['title']); ?></h1>

                <div>
                    <?php echo html_entity_decode(stripslashes($data['description'])); ?>
                </div>

                <!-- <p><strong>Call :</strong> <strong> <a href="tel:(+91) 79844 84017"> (+91) 79844 84017</a>
                <a href="tel:(+91) 94080 82575">(+91) 94080 82575</a>  </strong> </p>  -->


                

            </div>
            <div class="col-lg-4 col-ms-12 col-sm-12 mt-4">
                <div class="blog-site-menu-box">
                    <p class="title">Latest Blogs</p>
                    <?php
                    $fetch_blog = mysqli_query($con, "SELECT * FROM `ahq_blog`  WHERE status = '1' ORDER BY `blog_id` DESC LIMIT 5") or die(mysqli_error($con));
                    $i = 1;
                    if (mysqli_num_rows($fetch_blog) > 0) {
                        while ($data = mysqli_fetch_array($fetch_blog)) {
                            $slug = Site_Url . "blog/" . $data['title_slug'];
                            $blogImg = "BlogImg";
                            $imgfileSource = Site_Url . $blogImg . DIRECTORY_SEPARATOR . $data['image'];
                    ?>
                    <div class="main-blog">

                        <div class="blog-sit-pic">
                            <a href="<?php echo $slug; ?>"><img src="<?php echo $imgfileSource; ?>" alt="blog img"></a>
                        </div>
                        <div class="blog-main-text">
                            <p class="blog-text"><a href="<?php echo $slug; ?>"><?php echo stripslashes($data['title']); ?></a></p>
                            <p class="blog-date"><?php echo Date("d M , Y",strtotime(str_replace("/","-",$data['blog_date']))); //15 Sep, 2023?></p>
                        </div>
                    </div>
                    <?php
                            $i++;
                        }
                    }

                    ?>
                    <!-- <div class="main-blog">
                        <div class="blog-sit-pic">
                            <img src="image/blog-img1.png" alt="blog img">
                        </div>
                        <div class="blog-main-text">
                            <p class="blog-text">How Many Grafts Do You Need? Understanding Hair Density for Transplants
                            How Many Grafts Do You Need? Understanding Hair Density for Transplants</p>
                            <p class="blog-date">July 26, 2025</p>
                        </div>
                    </div>

                    <div class="main-blog">
                        <div class="blog-sit-pic">
                            <img src="image/blog-img2.png" alt="blog img">
                        </div>
                        <div class="blog-main-text">
                            <p class="blog-text">Top FAQs About Gynecomastia Surgery Answered by an Ahmedabad Plastic Surgeon
                            Top FAQs About Gynecomastia Surgery Answered by an Ahmedabad Plastic Surgeon</p>
                            <p class="blog-date">July 17, 2025</p>
                        </div>
                    </div>

                    <div class="main-blog">
                        <div class="blog-sit-pic">
                            <img src="image/blog-img3.png" alt="blog img">
                        </div>
                        <div class="blog-main-text">
                            <p class="blog-text">Top 5 Clinics for Laser Hair Removal in Ahmedabad + Cost Comparison
                            Top 5 Clinics for Laser Hair Removal in Ahmedabad + Cost Comparison</p>
                            <p class="blog-date">June 25, 2025</p>
                        </div>
                    </div> -->




                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>