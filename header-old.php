<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- ====== css link ===== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<!-- ==== Font link === -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<!-- === Bootstrap link === -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<!-- === Favicon link === -->
<link rel="shortcut icon" href="image/fav-icon/fav-icon.png" type="image/x-icon">
<!-- === icon link === -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- === swiper js === -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- === Fancybox CSS & JS === -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />


</head>
<body>
   <nav class="navbar_wrapper">
      <div class="container">
         <div class="row">
            <div class="col-md-4 d-flex align-items-center">
               <p class="nav-text m-0">We understand that each patient is unique</p>
            </div>
            <div class="col-md-8 d-flex justify-content-end">
               <div class="d-flex gap-4">
                  <div class="nav-call d-flex gap-2">
                     <div class="call-icon">
                        <i class="fa-solid fa-phone-volume"></i>
                     </div>
                     <div class="nav-call-text">
                        <a href="tel:+917984484017">(+91) 79844 84017</a>
                        <a href="tel:+919408082575">(+91) 94080 82575</a>
                     </div>
                  </div>
                  <div class="nav-call d-flex gap-2">
                     <div class="call-icon">
                        <i class="fa-solid fa-location-dot"></i>
                     </div>
                     <div class="nav-call-text">
                        <a href="https://maps.app.goo.gl/MmKzheiyaLasFZpc9">308-311, Palladium, Above Pantaloons, Opp. PVR - 4D Square, <br>
                        Visat Gandhinagar Highway, Motera Ahmedabad - 382424</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>
   <!-- === Header start === -->
<header class="header_wrapper">
  <!-- Desktop Navbar -->
  <nav class="navbar navbar-expand-lg desktop-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="image/main-logo.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

          <li class="nav-item dropdown megamenu">
            <a class="nav-link dropdown-toggle" href="#" >About Us</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about-ng-plastic-surgery.php">About NG Plastic Surgery</a></li>
              <li><a class="dropdown-item" href="about-dr-neel-gupta.php">About Dr. Neel Gupta</a></li>
              <li><a class="dropdown-item" href="gallery.php">Gallery</a></li>
              <li><a class="dropdown-item" href="faq.php">FAQs</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown megamenu">
            <a class="nav-link dropdown-toggle" href="surgical-procedure.php">Surgical Procedure</a>
            <div class="dropdown-menu megamenu-box p-4">
              <div class="row">
                <div class="col-md-6">
                  <div class="submenu-trigger">
                    <a href="body-treatment.php" class="dropdown-item">Body Treatment </a>
                    <div class="submenu">
                      <a class="dropdown-item" href="tummy-tuck.php">Tummy Tuck Surgery</a>
                    </div>
                    <a class="dropdown-item" href="#">Breast Treatment</a>
                    <a class="dropdown-item" href="#">Facial Aesthetics</a>
                    <a class="dropdown-item" href="#">Hair Treatment</a>
                </div>
            </div>
            <div class="col-md-6">
                <a class="dropdown-item" href="#">Male Aesthetics</a>
                <a class="dropdown-item" href="#">Cosmetic Gynecology</a>
                <a class="dropdown-item" href="#">Skin Treatment</a>
                <a class="dropdown-item" href="#">Reconstructive Surgery</a>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown megamenu">
            <a class="nav-link dropdown-toggle" href="non-surgical-procedure.php">Non-Surgical Procedure</a>
            <div class="dropdown-menu megamenu-box p-4">
              <div class="row">
                <div class="col-md-6">
                  <a class="dropdown-item" href="acne-scar-treatment.php">Acne Scar Treatment</a>
                  <a class="dropdown-item" href="#">Botox</a>
                  <a class="dropdown-item" href="#">Dermal Filler</a>
                  <a class="dropdown-item" href="#">Skin Booster</a>
                  <a class="dropdown-item" href="#">Laser Hair Removal</a>
                  <a class="dropdown-item" href="#">Melasma / Pigmentation</a>
                  <a class="dropdown-item" href="#">Hydrafacial</a>
                </div>
                <div class="col-md-6">
                  <a class="dropdown-item" href="#">Chemical Peel</a>
                  <a class="dropdown-item" href="#">Thread Lift</a>
                  <a class="dropdown-item" href="#">Gynecomastia Surgery</a>
                  <a class="dropdown-item" href="#">Hair Transplant</a>
                  <a class="dropdown-item" href="#">Breast Implant</a>
                  <a class="dropdown-item" href="#">Breast Reduction</a>
                  <a class="dropdown-item" href="#">Mommy Makeover</a>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>
          <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
        </ul>
        <div class="main-btn ms-auto">
          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Book An Appointment</a>
        </div>
      </div>
    </div>
  </nav>


  <!-- Mobile Offcanvas Navbar -->
  <nav class="navbar bg-light fixed-top mobile-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="image/main-logo.png" alt="logo">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" id="offcanvasNavbar">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title navbar-brand">
        <img src="image/main-logo.png" alt="logo">
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <!-- Mobile Dropdown Item -->
              <li class="nav-item mobile-dropdown mobile-main-drop">
                <a class="nav-link" href="#">About Us <span class="toggle-icon">+</span></a>
                <ul class="mobile-submenu">
                  <li><a href="about-ng-plastic-surgery.php" class="nav-link">About NG Plastic Surgery</a></li>
                  <li><a href="about-dr-neel-gupta.php" class="nav-link">About Dr. Neel Gupta</a></li>
                  <li><a href="gallery.php" class="nav-link">Gallery</a></li>
                  <li><a href="faq.php" class="nav-link">FAQs</a></li>
                </ul>
              </li>
              <li class="nav-item mobile-dropdown mobile-main-drop">
                <a class="nav-link" href="surgical-procedure.php">Surgical Procedure <span class="toggle-icon">+</span></a>
                <ul class="mobile-submenu">
                  <li class="nav-item mobile-dropdown">
                    <a href="body-treatment.php" class="dropdown-item point">Body Treatment  <span class="toggle-box">+</span> </a>
                    <ul class="mobile-submenu">
                      <li><a href="tummy-tuck.php" class="nav-link">Tummy Tuck Surgery</a></li>
                      <li><a href="#" class="nav-link">Arm Lift Surgery</a></li>
                      <li><a href="#" class="nav-link">Thigh Lift Surgery</a></li>
                      <li><a href="#" class="nav-link">Buttock Lift Surgery</a></li>
                    </ul>
                  </li>
                  <li class="nav-item mobile-dropdown">
                    <a class="dropdown-item point" href="#">Breast Treatment <span class="toggle-box">+</span></a>
                    <ul class="mobile-submenu">
                      <li><a href="#" class="nav-link">Tummy Tuck Surgery</a></li>
                      <li><a href="#" class="nav-link">Arm Lift Surgery</a></li>
                      <li><a href="#" class="nav-link">Thigh Lift Surgery</a></li>
                      <li><a href="#" class="nav-link">Buttock Lift Surgery</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="#">Facial Aesthetics</a></li>
                  <li><a class="dropdown-item" href="#">Hair Treatment</a></li>
                </ul>
              </li>
            <li class="nav-item mobile-dropdown mobile-main-drop">
              <a class="nav-link" href="non-surgical-procedure.php">Non-Surgical Procedure <span class="toggle-icon">+</span></a>
                <ul class="mobile-submenu">
                  <a class="nav-link" href="acne-scar-treatment.php">Acne Scar Treatment</a>
                  <a class="nav-link" href="#">Botox</a>
                  <a class="nav-link" href="#">Dermal Filler</a>
                  <a class="nav-link" href="#">Skin Booster</a>
                  <a class="nav-link" href="#">Laser Hair Removal</a>
                  <a class="nav-link" href="#">Melasma / Pigmentation</a>
                  <a class="nav-link" href="#">Hydrafacial</a>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>
            <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
          </ul>
          <div class="main-btn mt-3">
            <a href="#" class="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Book An Appointment</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>