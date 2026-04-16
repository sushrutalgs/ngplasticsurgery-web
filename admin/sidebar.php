<?php   
$current_page_name_h = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
 ?>
<div class="sidebar pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="dashboard.php" class="navbar-brand mx-3 mb-3">
                    <img class="rounded-circle" src="<?php echo LOGO_URL; ?>" alt="<?php echo Company_Name ?>" >
                    <h3 class="text-primary" style="font-size: 14px;"><?php echo Company_Name ?></h3>
                </a>
              <!--   <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/company_logo.jpg" alt="" style="width: 40px; height: 40px;">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php // echo ucwords($_SESSION['username']); ?></h6>
                        <span>Admin</span>
                    </div>
                </div> -->
                <div class="navbar-nav w-100">
                    <?php $active = AdminMenuSelected("dashboard"); ?>
                    <a href="dashboard.php" class="nav-item nav-link <?php echo $active;?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                <div class="nav-item dropdown">
                        <?php 
                           
                            $manu_class = "";
                            $add_cat_class = "";
                            $view_cat_class = "";
                            $cat_page_name = array("add-category","view-category","edit-category");
                            if(in_array($current_page_name_h,$cat_page_name))
                            {
                                $manu_class = "active show";
                                if($current_page_name_h == "add-category")
                                {
                                    $add_cat_class = "active";
                                }
                                else
                                {
                                    $view_cat_class = "active"; 
                                }
                            }

                        ?>
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle <?php echo $manu_class; ?>" data-bs-toggle="dropdown"><i class="fa fa-list me-2"></i>Category</a>
                        <div class="dropdown-menu bg-transparent border-0 <?php echo $manu_class; ?>">
                            <a href="add-category.php" class="dropdown-item <?php echo $add_cat_class; ?>">Add Category</a>
                            <a href="view-category.php" class="dropdown-item <?php echo $view_cat_class; ?>">View Category</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <?php 
                           
                            $manu_class = "";
                            $add_product_class = "";
                            $view_product_class = "";
                            $product_page_name = array("add-product","view-product","edit-product","insert-multiple-product-image");
                            if(in_array($current_page_name_h,$product_page_name))
                            {
                                $manu_class = "active show";
                                if($current_page_name_h == "add-product")
                                {
                                    $add_product_class = "active";
                                }
                                else
                                {
                                    $view_product_class = "active"; 
                                }
                            }

                        ?>

                        <a href="javascript:void(0)" class="nav-link dropdown-toggle <?php echo $manu_class; ?>" data-bs-toggle="dropdown"><i class="fa fa-cubes me-2"></i>Surgical Procedure</a>
                        <div class="dropdown-menu bg-transparent border-0 <?php echo $manu_class; ?>">
                            <a href="add-product.php" class="dropdown-item <?php echo $add_product_class; ?>">Add Surgical Procedure</a>
                            <a href="view-product.php" class="dropdown-item <?php echo $view_product_class; ?>">View Surgical Procedure</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <?php 
                           
                            $manu_class = "";
                            $add_product_class = "";
                            $view_product_class = "";
                            $product_page_name = array("add-non-surgical","view-non-surgical","edit-non-surgical");
                            if(in_array($current_page_name_h,$product_page_name))
                            {
                                $manu_class = "active show";
                                if($current_page_name_h == "add-non-surgical")
                                {
                                    $add_product_class = "active";
                                }
                                else
                                {
                                    $view_product_class = "active"; 
                                }
                            }

                        ?>

                        <a href="javascript:void(0)" class="nav-link dropdown-toggle <?php echo $manu_class; ?>" data-bs-toggle="dropdown"><i class="fa fa-cubes me-2"></i>Non Surgical Procedure</a>
                        <div class="dropdown-menu bg-transparent border-0 <?php echo $manu_class; ?>">
                            <a href="add-non-surgical.php" class="dropdown-item <?php echo $add_product_class; ?>">Add Non Surgical </a>
                            <a href="view-non-surgical.php" class="dropdown-item <?php echo $view_product_class; ?>">View Non Surgical </a>
                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <?php 
                           
                            $manu_class = "";
                            $add_blog_class = "";
                            $view_blog_class = "";
                            $blog_page_name = array("add-blog","view-blog","edit-blog");
                            if(in_array($current_page_name_h,$blog_page_name))
                            {
                                $manu_class = "active show";
                                if($current_page_name_h == "add-blog")
                                {
                                    $add_blog_class = "active";
                                }
                                else
                                {
                                    $view_blog_class = "active"; 
                                }
                            }

                        ?>

                        <a href="javascript:void(0)" class="nav-link dropdown-toggle <?php echo $manu_class; ?>" data-bs-toggle="dropdown"><i class="fa fa-list me-2"></i>Blog</a>
                        <div class="dropdown-menu bg-transparent border-0 <?php echo $manu_class; ?>">
                            <a href="add-blog.php" class="dropdown-item <?php echo $add_blog_class; ?>">Add Blog</a>
                            <a href="view-blog.php" class="dropdown-item <?php echo $view_blog_class; ?>">View Blog</a>
                        </div>
                    </div>
                    <?php $upload_banner_active = AdminMenuSelected("upload_banners"); ?>
                    <!-- <a href="upload_banners.php" class="nav-item nav-link <?php echo $upload_banner_active;?>"><i class="fa fa-image me-2"></i>Manage Banner</a> -->


                    <?php $our_client_active = AdminMenuSelected("our-client"); ?>
                    <!-- <a href="our-client.php" class="nav-item nav-link <?php echo $our_client_active;?>"><i class="fa fa-users me-2"></i>Manage Our Client</a> -->

                    <?php 
                     
                        $inquiryactive = "";
                        $inquiry_page_name = array("view-inquiry","view-inquiry-details");
                        if(in_array($current_page_name_h,$inquiry_page_name))
                        {
                            $inquiryactive = "active";
                        }
                    ?>
                    <a href="view-inquiry.php" class="nav-item nav-link <?php echo $inquiryactive;?>"><i class="fa fa-question-circle me-2"></i>Inquiries</a>

                     <?php 
                     
                        $inquiryactive = "";
                        $inquiry_page_name = array("view-product-inquiry","view-product-inquiry-details");
                        if(in_array($current_page_name_h,$inquiry_page_name))
                        {
                            $inquiryactive = "active";
                        }
                    ?>
                    <a href="view-product-inquiry.php" class="nav-item nav-link <?php echo $inquiryactive;?>"><i class="fa fa-question-circle me-2"></i>Treatment Inquiries</a>

                    <?php $active = AdminMenuSelected("site_settings"); ?>
                    <a href="site_settings.php" class="nav-item nav-link <?php echo $active;?>"><i class="fa fa-cog me-2"></i> Configuration</a>

                    <?php /*$changepassworddactive = AdminMenuSelected("change-password"); ?>
                    <a href="change-password.php" class="nav-item nav-link <?php echo $changepassworddactive;?>"><i class="fa fa-lock me-2"></i>Change Password</a> */?>
                    
                </div>
            </nav>
        </div>