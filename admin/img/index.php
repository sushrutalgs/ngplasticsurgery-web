<?php
include_once("admin/db_connect.php");

$get_banner_images_sql = mysqli_query($con, "SELECT image FROM `banner_images` WHERE `status` = 1 ORDER BY `id` DESC");
$banner_image_array = array();
while ($get_banner_data = mysqli_fetch_assoc($get_banner_images_sql)) {
    $banner_image_array[] = $get_banner_data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->

    <title>Best Budget Friendly Website Design & Development in Ahmedabad | <?php echo Company_Name; ?></title>

    <meta name="title" content="Best Budget Friendly Website Design & Development in Ahmedabad | <?php echo Company_Name; ?>">
    <meta name="description" content="Looking for the best website developer in Ahmedabad? We provide SEO-friendly,budget-friendly website for small businesses. 🚀">
    <meta name="keywords" content="Best Budget Friendly Website Design & Development in Ahmedabad,Best Budget Friendly Website Design & Development Company in Ahmedabad,Best Website Developer in Ahmedabad, Website Designing Company in Ahmedabad, Budget-Friendly Web Development India,SEO-Friendly Website Development,E-Commerce Website Development Ahmedabad,Custom Websites for Small Business,Affordable Web Design Services,Best Web Development Company in Gujarat,Professional Website Designers in India,<?php echo Company_Name; ?> Ahmedabad">

    <meta name="author" content="Vaibhav Shah">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="distribution" content="global">
    <meta name="contact" content="+91 9157185288" />



    <!-- Standard Meta Tags -->

    <meta name="google-site-verification" content="E7Td5-tTIzhhfyBZ1LBwVFJhnXVTTmNtDN5LG4Dnx9w" />

    <!-- <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">  -->
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="rating" content="General">

    <meta name="revisit-after" content="1 days">


    <!-- Open Graph Meta Tags (for Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="Best Budget Friendly Website Design & Development in Ahmedabad | <?php echo Company_Name; ?>">
    <meta property="og:description" content="Looking for the best website developer in Ahmedabad? <?php echo Company_Name; ?> offers budget-friendly website design & development with SEO-friendly solutions,Contact us today. 🚀">

    <meta property="og:image" content="<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:secure_url" content="<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>">


    <meta property="og:url" content="<?php echo Site_Url; ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo Company_Name; ?>">

    <!-- Twitter Card Meta Tags (for Twitter) -->
    <meta name="twitter:card" content="summary_large_image"> <!-- Use "summary" for smaller images -->
    <meta name="twitter:title" content="Best Budget Friendly Website Design & Development in Ahmedabad | <?php echo Company_Name; ?>">
    <meta name="twitter:description" content="Looking for the best website developer in Ahmedabad? <?php echo Company_Name; ?> offers budget-friendly website design & development with SEO-friendly solutions,Contact us today. 🚀">


    <meta name="theme-color" content="#ae0045">
    <meta name="application-name" content="<?php echo Company_Name; ?>">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">


    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="<?php echo Company_Name; ?>">

    <link rel="canonical" href="https://www.vsdeveloper.kesug.com">


    <!-- Optional Favicon (for browser tabs and sharing icons) -->
    <link rel="icon" href="<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>">
    <link rel="apple-touch-icon" href="<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>">




    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->



    <!-- CSS Libraries -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://demo.voidcoders.com/htmldemo/fitgear/main-files/assets/css/animate.css">
    <!-- Google Font -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MP6L7LQP');
    </script>
    <!-- End Google Tag Manager -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php /*
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Corporation",
            "name": "<?php echo Company_Name; ?>",
            "url": "<?php echo Site_Url; ?>",
            "logo": "<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>",
            "sameAs": "https://www.instagram.com/the_vs_devloper/"
        }
    </script>
    
    <script type='application/ld+json'>
        {
            "@context": "http://www.schema.org",
            "@type": "LocalBusiness",
            "name": "best budget friendly website design & development company in ahmedabad | <?php echo Company_Name; ?>",
            "url": "<?php echo Site_Url; ?>/",
            "logo": "<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>",
            "image": "<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>",
            "description": "Looking for the best website developer in Ahmedabad? <?php echo Company_Name; ?> offers budget-friendly website design & development with SEO-friendly solutions. 🚀",
            "priceRange": "INR",
            // "aggregateRating": {
            //     "@type": "AggregateRating",
            //     "ratingValue": "5.0/4",
            //     "reviewCount": "4"
            // },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "",
                "addressLocality": "Ahmedabad",
                "addressRegion": "Gujarat",
                "postalCode": "380009",
                "addressCountry": "India"
            },
            "telephone": "+91 9157185288",

            "openingHours": "Mo, Tu, We, Th, Fr, Sa 10.00:00-20:00",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+91 9157185288",
                "contactType": "customer support",
                "areaServed": ["IN"],
                "availableLanguage": ["Hindi", "Gujarati", "English"]
            }],
            "sameAs": [
                "https://www.instagram.com/the_vs_devloper?igsh=Z3M4MHp4YWJzYmRx"
            ],
            "founder": {
                "@type": "Person",
                "name": "Vaibhav Shah",
                "jobTitle": "Founder & CEO"
            },
            "foundingDate": "2024",
            "currenciesAccepted": "INR",
            "paymentAccepted": "Cash, Credit Card, UPI",
            "areaServed": ["Ahmedabad", "Gujarat", "India"],
            "keywords": [
                "Best Website Developer in Ahmedabad",
                "Designing Company in Ahmedabad",
                "Best Website Design and Development in Ahmedabad",
                "best budget friendly website design & development company in ahmedabad",
                "Custom Websites Ahmedabad",
                "Low Budget Web Development India",
                "Affordable Web Development India",
                "E-Commerce Development Ahmedabad",
                "Website Development in ahmedabad",
                "Web Development company",
                "web Site design",
                "<?php echo Company_Name; ?> Ahmedabad"

            ],
            "services": [{
                    "@type": "Service",
                    "name": "Custom Website Development company in Ahmedabad",
                    "description": "Tailored website solutions for businesses of all sizes.",
                    "provider": {
                        "@type": "LocalBusiness",
                        "name": "<?php echo Company_Name; ?>"
                    }
                },
                {
                    "@type": "Service",
                    "name": "E-Commerce Development company in Ahmedabad",
                    "description": "Create feature-rich online stores for seamless shopping experiences.",
                    "provider": {
                        "@type": "LocalBusiness",
                        "name": "<?php echo Company_Name; ?>"
                    }
                },
                {
                    "@type": "Service",
                    "name": "Website Redesign Services company in Ahmedabad",
                    "description": "Modernize and enhance your outdated websites.",
                    "provider": {
                        "@type": "LocalBusiness",
                        "name": "<?php echo Company_Name; ?>"
                    }
                }
            ]

        }
    </script>
    

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebDevelopmentCompany",
      "name": "Best Budget Friendly Website Design & Development in Ahmedabad | <?php echo Company_Name; ?>",
      "url": "<?php echo Site_Url; ?>",
      "logo": "<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>",
      "description": "Looking for the best website developer in Ahmedabad? <?php echo Company_Name; ?> offers budget-friendly website design & development with SEO-friendly solutions. 🚀",
      "foundingDate": "2024",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Status Elysium,gota",
        "addressLocality": "Ahmedabad",
        "addressRegion": "Gujarat",
        "postalCode": "380009",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91 9157185288",
        "contactType": "customer service",
        "areaServed": "IN",
        "availableLanguage": ["Hindi", "Gujarati", "English"]
      },
      "sameAs": [
        "https://www.instagram.com/the_vs_devloper/"
      ]
    }
    </script>
    */ ?>
    <script type="application/ld+json">
        {
            "@context": "http://www.schema.org",
            "@type": "LocalBusiness",
            "name": "<?php echo Company_Name; ?>",
            "url": "<?php echo Site_Url; ?>",
            "logo": "<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>",
            "image": "<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>",
            "description": "Looking for the best website developer in Ahmedabad? <?php echo Company_Name; ?> offers budget-friendly website design & development with SEO-friendly solutions,Contact us today. 🚀",
            "priceRange": "INR",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "4"
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Status Elysium,gota",
                "addressLocality": "Ahmedabad",
                "addressRegion": "Gujarat",
                "postalCode": "380009",
                "addressCountry": "India"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "23.11103447713434",
                "longitude": "72.54579662181699"
            },
            "telephone": "+91 9157185288",
            "openingHours": "Mo-Sa 10:00-20:00",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+91 9157185288",
                "contactType": "customer support",
                "areaServed": ["IN"],
                "availableLanguage": ["Hindi", "Gujarati", "English"]
            }],
            "sameAs": [
                "https://www.instagram.com/the_vs_devloper?igsh=Z3M4MHp4YWJzYmRx"
            ],
            "founder": {
                "@type": "Person",
                "name": "Vaibhav Shah",
                "jobTitle": "Founder & CEO"
            },
            "foundingDate": "2024",
            "currenciesAccepted": "INR",
            "paymentAccepted": "Cash, Credit Card, UPI",
            "areaServed": ["Ahmedabad", "Gujarat", "India"],
            "keywords": [
                "Best Budget Friendly Website Design & Development Company in Ahmedabad",
                "Best Budget Friendly Website Design & Development in Ahmedabad",
                "Best Website Developer in Ahmedabad",
                "Website Designing Company in Ahmedabad",
                "Best Website Design and Development in Ahmedabad",
                "Budget-Friendly Web Development Ahmedabad",
                "SEO-Friendly Website Development",
                "Custom Websites for Small Business",
                "Low Budget Web Development Ahmedabad",
                "Affordable Web Design Services in Ahmedabad",
                "E-Commerce Website Development in Ahmedabad",
                "Website Development in Ahmedabad",
                "Web Development Company",
                "Best Web Development Company in Gujarat",
                "Professional Website Designers in India",
                "<?php echo Company_Name; ?> Ahmedabad"
            ],
            "services": [{
                    "@type": "Service",
                    "name": "Custom Website Development Company in Ahmedabad",
                    "description": "Tailored website solutions for businesses of all sizes.",
                    "provider": {
                        "@type": "LocalBusiness",
                        "name": "<?php echo Company_Name; ?>",
                        "address": {
                            "@type": "PostalAddress",
                            "streetAddress": "Status Elysium,gota",
                            "addressLocality": "Ahmedabad",
                            "addressRegion": "Gujarat",
                            "postalCode": "380009",
                            "addressCountry": "IN"
                        },
                        "telephone": "+91 9157185288"
                    }

                },
                {
                    "@type": "Service",
                    "name": "E-Commerce Development Company in Ahmedabad",
                    "description": "Create feature-rich online stores for seamless shopping experiences.",
                    "provider": {
                        "@type": "LocalBusiness",
                        "name": "<?php echo Company_Name; ?>",
                        "address": {
                            "@type": "PostalAddress",
                            "streetAddress": "Status Elysium,gota",
                            "addressLocality": "Ahmedabad",
                            "addressRegion": "Gujarat",
                            "postalCode": "380009",
                            "addressCountry": "IN"
                        },
                        "telephone": "+91 9157185288"
                    }

                },
                {
                    "@type": "Service",
                    "name": "Website Redesign Services Company in Ahmedabad",
                    "description": "Modernize and enhance your outdated websites.",
                    "provider": {
                        "@type": "LocalBusiness",
                        "name": "<?php echo Company_Name; ?>",
                        "address": {
                            "@type": "PostalAddress",
                            "streetAddress": "Status Elysium,gota",
                            "addressLocality": "Ahmedabad",
                            "addressRegion": "Gujarat",
                            "postalCode": "380009",
                            "addressCountry": "IN"
                        },
                        "telephone": "+91 9157185288"
                    }

                }
            ]
        }
    </script>


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "Why choose VS Developer Ahmedabad for budget-friendly website design?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<?php echo Company_Name; ?> provides cost-effective website design & development in Ahmedabad with SEO optimization and Best Budget Friendly Website Design & Development in Ahmedabad."
                }
            }, {
                "@type": "Question",
                "name": "How much does a website cost?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide affordable website development starting at INR 5,000."
                }
            }, {
                "@type": "Question",
                "name": "Do you offer SEO-friendly websites?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes! We ensure all websites are optimized for Google rankings."
                }
            },{
                "@type": "Question",
                "name": "How much does a website cost?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide affordable website development starting at INR 5,000."
                }
            },{
                "@type": "Question",
                "name": "Why choose <?php echo Company_Name;?> for budget-friendly website design?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<?php echo Company_Name;?> Ahmedabad is the best budget-friendly website design & development company in Ahmedabad, offering cost-effective solutions for startups and small businesses. We ensure a professional online presence with high-quality, responsive designs at an affordable price."
                }
            },{
                "@type": "Question",
                "name": "Do you offer SEO-friendly websites?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes! We specialize in SEO-friendly, mobile-optimized websites that help improve Google rankings and online visibility. Every website we develop includes basic SEO, fast loading speeds, and a user-friendly experience."
                }
            },{
                "@type": "Question",
                "name": "Do you provide e-commerce website development?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes! We offer affordable e-commerce website development in Ahmedabad, creating feature-rich, easy-to-use online stores. Our e-commerce solutions ensure smooth navigation, secure payments, and seamless user experience to help businesses grow online."
                }
            }
            ]
        }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LP8D5K3BD4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-LP8D5K3BD4');
    </script>
    <style type="text/css">
        .team-text p {
            font-size: 12px;
        }

        .team .team-img {
            width: 40%;
        }

        .team .team-text {
            width: 60%;
        }

        #counter {
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            /*      background: #e6e6e7;*/
            padding: 40px 0px;
            width: 100%;
            flex-wrap: wrap;

        }

        #counter .item {
            background: #fff;
            width: 273px;
            padding: 35px 40px;
            margin: 10px;
            text-align: center;
            border-radius: 6px;
            -webkit-box-shadow: 0px 0px 38px -8px rgba(0, 0, 0, 0.34);
            -moz-box-shadow: 0px 0px 38px -8px rgba(0, 0, 0, 0.34);
            box-shadow: 0px 0px 38px -8px rgba(0, 0, 0, 0.34);
        }

        #counter .item .count {
            color: #e8b12d;
            margin-bottom: 5px;
            font-size: 40px;
        }

        #counter .item h3 {
            color: #4f4e28;
            text-transform: capitalize;
        }
    </style>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MP6L7LQP"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  

    <div class="remove_scroll">


        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <img src="<?php echo BASE_URL . COMPANY_LOGO_DIR . company_logo; ?>" alt="<?php echo Company_Name; ?> ahmedabad" loading="lazy">
                </a>
                <div id="google_translate_element"></div>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <!-- <div id="google_translate_element"></div> -->

                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#price" class="nav-item nav-link">Price</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#faq" class="nav-item nav-link">FAQ'S</a>
                        <a href="#experience" class="nav-item nav-link">Project Work Flow</a>
                        <a href="#team" class="nav-item nav-link">Team</a>

                        <!-- <a href="#portfolio" class="nav-item nav-link">Portfolio</a> -->
                        <a href="#contact" class="nav-item nav-link contact_atag">Get A Quote</a>

                    </div>
                </div>
                <!-- <div id="google_translate_element"></div> -->

            </div>
        </div>

        <!-- Hero End -->
        <div class="" id="home">
            <div class="slider-container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php

                                for ($i = 0; $i < count($banner_image_array); $i++) {
                                    $slider_active_class = ($i == 0) ? "active" :  "";

                                ?>
                                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php echo $slider_active_class; ?>"></li>
                                <?php

                                }
                                ?>

                            </ol>
                            <div class="carousel-inner">
                                <?php
                                $banner_count = 0;
                                foreach ($banner_image_array as $bannerkey => $bannervalue) {
                                    $banner_Active_class = ($banner_count == 0) ? "active" : "";
                                ?>
                                    <div class="carousel-item <?php echo $banner_Active_class; ?> ">
                                        <img src="<?php echo "BannerImages/" . $bannervalue['image']; ?>" class="d-block w-100" alt="Best Budget-Friendly Website Design & Development in Ahmedabad" loading="lazy">
                                    </div>
                                <?php
                                    $banner_count++;
                                }
                                ?>
                            </div>



                            <div class="caro"></div>

                            <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Price Start -->
    <div class="price" id="price">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Pricing Plan</p>
                <!-- <h1 class="best_price_h1">Best Budget Friendly Website Design & Development Company in Ahmedabad</h1> -->
                <h1 class="best_price_h1">Best Budget Friendly Website Design & Development in Ahmedabad</h1>
                <h2>Affordable Web Design Pricing Plans</h2>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>Static Website</h2>
                            </div>
                            <div class="price-prices mt-3">
                                <span>Just</span>
                                <h2>₹6,000<span>INR</span></h2>
                            </div>
                            <div class="price-prices">
                                <h2>$71.02</h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <li>Bootstrap 5</li>
                                    <li>Font Awesome 5</li>
                                    <li>Responsive Design</li>

                                    <li>AI Live Chatbot</li>
                                    <li>Browser Compatibility</li>
                                    <li>Easy To Use</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-dgtl-mrkt text-center mt-5 pt-5">
                            <div class="price-dgtl">
                                <button class="btninqry price-btn"><a href="#contact" class="sm_atag">Inquiry Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="price-item featured-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>Dynamic Website </h2>
                            </div>
                            <div class="price-prices mt-3">
                                <span>Just</span>
                                <h2>₹10,000<span>INR</span></h2>
                            </div>
                            <div class="price-prices">
                                <h2>$118.37</h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <li>Bootstrap 5</li>
                                    <li>Font Awesome 5</li>
                                    <li>Responsive Design</li>
                                    <li>AI Live Chatbot</li>
                                    <li>Browser Compatibility</li>
                                    <li>Contact Us</li>
                                    <li>Blog Dynamic</li>
                                    <li>Product Admin Panel</li>
                                    <li>Easy To Use</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-dgtl-mrkt text-center">
                            <div class="price-dgtl">
                                <button class="btninqry price-btn"><a href="#contact" class="sm_atag">Inquiry Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>E-Commerce </h2>
                            </div>
                            <div class="price-prices mt-3">
                                <span>Just</span>
                                <h2>₹20,000<span>INR</span></h2>
                            </div>
                            <div class="price-prices">
                                <h2>$236.75</h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <li>Bootstrap 5</li>
                                    <li>Font Awesome 5</li>
                                    <li>Responsive Design</li>
                                    <li>AI Live Chatbot</li>
                                    <li>Browser Compatibility</li>
                                    <li>Full Customize Admin Panel</li>
                                    <li>200 Product Listening</li>
                                    <li>Payment Gateway Integration</li>
                                    <li>Easy To Use</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-dgtl-mrkt text-center">
                            <div class="price-dgtl">
                                <button class="btninqry price-btn"><a href="#contact" class="sm_atag">Inquiry Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="we-offer-area text-center bg-gray service_section" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center wow zoomIn">
                        <h2>What we <span>Offer</span></h2>
                        <h4>Website Development Services in Ahmedabad</h4>
                    </div>
                </div>
            </div>
            <div class="row our-offer-items less-carousel">
                <div class="col-md-4 wow fadeInUp">
                    <div class="single_indutry_block">
                        <a href="javascript:void(0)">
                            <div class="inner_box">
                                <div class="box_icon mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <path fill="#2d4d83" d="M54 45.683A12 12 0 0 1 62 57v5H2v-5a12 12 0 0 1 8-11.317" opacity="1" data-original="#2d4d83" class=""></path>
                                            <path fill="#fadfb2" d="M24.15 37A27.244 27.244 0 0 1 20 22.546V19l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028v4.518A27.236 27.236 0 0 1 39.849 37" opacity="1" data-original="#fadfb2" class=""></path>
                                            <path fill="#f5cf88" d="M21.048 30.028A27.221 27.221 0 0 1 20 22.546V22h-1.3a2.7 2.7 0 0 0-2.7 2.7 2.7 2.7 0 0 0 1.014 2.109l4.034 3.217zM43 30l3.986-3.189A2.7 2.7 0 0 0 48 24.7a2.7 2.7 0 0 0-2.7-2.7H44v.546a27.219 27.219 0 0 1-1.037 7.444z" opacity="1" data-original="#f5cf88" class=""></path>
                                            <path fill="#976947" d="m44 22 2.711-7.455a9.348 9.348 0 0 0-.243-6.992A9.35 9.35 0 0 0 37.924 2h-8.49A32.9 32.9 0 0 0 12 7l2.411.8a3.567 3.567 0 0 1 2.189 4.713 3.571 3.571 0 0 0 .121 2.92L20 22v-3l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028z" opacity="1" data-original="#976947"></path>
                                            <path fill="#f2f0eb" d="M24 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4zM34 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4z" opacity="1" data-original="#f2f0eb"></path>
                                            <path fill="#a8b0bc" d="M30 23h4v2h-4z" opacity="1" data-original="#a8b0bc"></path>
                                            <path fill="#d5cec2" d="M10 62V41a4 4 0 0 1 4-4h36a4 4 0 0 1 4 4v21" opacity="1" data-original="#d5cec2" class=""></path>
                                            <circle cx="32" cy="54" r="3" fill="#e7e4dd" opacity="1" data-original="#e7e4dd"></circle>
                                            <g fill="#c66b60">
                                                <path d="m25.292 48.707-4-4a1 1 0 0 1 0-1.415l4-4 1.415 1.415L23.414 44l3.293 3.292zM38.707 48.707l-1.415-1.415L40.585 44l-3.293-3.293 1.415-1.415 4 4a1 1 0 0 1 0 1.415zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#c66b60" opacity="1" data-original="#c66b60"></path>
                                            </g>
                                            <path d="M63 57a13.019 13.019 0 0 0-8-11.994V41a5.005 5.005 0 0 0-5-5h-8.418a28.18 28.18 0 0 0 2.226-5.367l3.8-3.042a3.694 3.694 0 0 0-2.188-6.579l2.228-6.126A10.349 10.349 0 0 0 37.923 1h-8.489a33.87 33.87 0 0 0-17.965 5.151 1 1 0 0 0 .214 1.8l2.411.8a2.569 2.569 0 0 1 1.572 3.39 4.569 4.569 0 0 0 .156 3.738L18.4 21.03a3.689 3.689 0 0 0-2.008 6.562l3.8 3.041A28.187 28.187 0 0 0 22.418 36H14a5.005 5.005 0 0 0-5 5v4.005A13.019 13.019 0 0 0 1 57v5a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1zM40 21h-6a1 1 0 0 0-1 1v1h-2v-1a1 1 0 0 0-1-1h-9v-1.465l6.242-4.162A8.154 8.154 0 0 1 31.779 14a10.217 10.217 0 0 0 6.36-2.231l1.633-1.308 1.716 2.574A8.968 8.968 0 0 1 43 18.027V21zm-1 2v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm-10 0v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm18 1.7a1.693 1.693 0 0 1-.638 1.329l-1.813 1.45A28.152 28.152 0 0 0 44.983 23h.317a1.7 1.7 0 0 1 1.7 1.7zM17.523 12.883a4.568 4.568 0 0 0-2.8-6.029l-.3-.1A31.863 31.863 0 0 1 29.434 3h8.489a8.349 8.349 0 0 1 7.848 11.2l-.87 2.391a10.969 10.969 0 0 0-1.749-4.669l-2.321-3.478a1 1 0 0 0-.678-.433 1.008 1.008 0 0 0-.778.207l-2.485 1.989A8.215 8.215 0 0 1 31.779 12a10.149 10.149 0 0 0-5.647 1.709l-6.687 4.458a.961.961 0 0 0-.17.147l-1.665-3.329a2.573 2.573 0 0 1-.087-2.102zm.115 13.147A1.7 1.7 0 0 1 18.7 23h.314a28.386 28.386 0 0 0 .435 4.48zM21.015 23H23v3a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-1h2v1a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-3h1.984a26.2 26.2 0 0 1-3.71 13H24.726a26.2 26.2 0 0 1-3.711-13zM14 38h36a3 3 0 0 1 3 3v20H11V41a3 3 0 0 1 3-3zM3 57a11.019 11.019 0 0 1 6-9.793V61H3zm58 4h-6V47.206A11.02 11.02 0 0 1 61 57z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                            <path d="M32 58a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm0-6a2 2 0 1 1-2 2 2 2 0 0 1 2-2zM25.292 48.707l1.415-1.415L23.414 44l3.293-3.293-1.415-1.415-4 4a1 1 0 0 0 0 1.415zM38.707 48.707l4-4a1 1 0 0 0 0-1.415l-4-4-1.415 1.415L40.585 44l-3.293 3.292zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>

                                </div>
                                <h4>Web Design</h4>
                                <p>We design visually stunning, responsive websites that provide an exceptional user experience across all devices. Our focus is on engaging visitors, improving usability, and ensuring seamless navigation. We create websites that captivate audiences and help your business succeed online.</p>
                            </div>
                            <div class="big_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path fill="#2d4d83" d="M54 45.683A12 12 0 0 1 62 57v5H2v-5a12 12 0 0 1 8-11.317" opacity="1" data-original="#2d4d83" class=""></path>
                                        <path fill="#fadfb2" d="M24.15 37A27.244 27.244 0 0 1 20 22.546V19l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028v4.518A27.236 27.236 0 0 1 39.849 37" opacity="1" data-original="#fadfb2" class=""></path>
                                        <path fill="#f5cf88" d="M21.048 30.028A27.221 27.221 0 0 1 20 22.546V22h-1.3a2.7 2.7 0 0 0-2.7 2.7 2.7 2.7 0 0 0 1.014 2.109l4.034 3.217zM43 30l3.986-3.189A2.7 2.7 0 0 0 48 24.7a2.7 2.7 0 0 0-2.7-2.7H44v.546a27.219 27.219 0 0 1-1.037 7.444z" opacity="1" data-original="#f5cf88" class=""></path>
                                        <path fill="#976947" d="m44 22 2.711-7.455a9.348 9.348 0 0 0-.243-6.992A9.35 9.35 0 0 0 37.924 2h-8.49A32.9 32.9 0 0 0 12 7l2.411.8a3.567 3.567 0 0 1 2.189 4.713 3.571 3.571 0 0 0 .121 2.92L20 22v-3l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028z" opacity="1" data-original="#976947"></path>
                                        <path fill="#f2f0eb" d="M24 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4zM34 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4z" opacity="1" data-original="#f2f0eb"></path>
                                        <path fill="#a8b0bc" d="M30 23h4v2h-4z" opacity="1" data-original="#a8b0bc"></path>
                                        <path fill="#d5cec2" d="M10 62V41a4 4 0 0 1 4-4h36a4 4 0 0 1 4 4v21" opacity="1" data-original="#d5cec2" class=""></path>
                                        <circle cx="32" cy="54" r="3" fill="#e7e4dd" opacity="1" data-original="#e7e4dd"></circle>
                                        <g fill="#c66b60">
                                            <path d="m25.292 48.707-4-4a1 1 0 0 1 0-1.415l4-4 1.415 1.415L23.414 44l3.293 3.292zM38.707 48.707l-1.415-1.415L40.585 44l-3.293-3.293 1.415-1.415 4 4a1 1 0 0 1 0 1.415zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#c66b60" opacity="1" data-original="#c66b60"></path>
                                        </g>
                                        <path d="M63 57a13.019 13.019 0 0 0-8-11.994V41a5.005 5.005 0 0 0-5-5h-8.418a28.18 28.18 0 0 0 2.226-5.367l3.8-3.042a3.694 3.694 0 0 0-2.188-6.579l2.228-6.126A10.349 10.349 0 0 0 37.923 1h-8.489a33.87 33.87 0 0 0-17.965 5.151 1 1 0 0 0 .214 1.8l2.411.8a2.569 2.569 0 0 1 1.572 3.39 4.569 4.569 0 0 0 .156 3.738L18.4 21.03a3.689 3.689 0 0 0-2.008 6.562l3.8 3.041A28.187 28.187 0 0 0 22.418 36H14a5.005 5.005 0 0 0-5 5v4.005A13.019 13.019 0 0 0 1 57v5a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1zM40 21h-6a1 1 0 0 0-1 1v1h-2v-1a1 1 0 0 0-1-1h-9v-1.465l6.242-4.162A8.154 8.154 0 0 1 31.779 14a10.217 10.217 0 0 0 6.36-2.231l1.633-1.308 1.716 2.574A8.968 8.968 0 0 1 43 18.027V21zm-1 2v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm-10 0v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm18 1.7a1.693 1.693 0 0 1-.638 1.329l-1.813 1.45A28.152 28.152 0 0 0 44.983 23h.317a1.7 1.7 0 0 1 1.7 1.7zM17.523 12.883a4.568 4.568 0 0 0-2.8-6.029l-.3-.1A31.863 31.863 0 0 1 29.434 3h8.489a8.349 8.349 0 0 1 7.848 11.2l-.87 2.391a10.969 10.969 0 0 0-1.749-4.669l-2.321-3.478a1 1 0 0 0-.678-.433 1.008 1.008 0 0 0-.778.207l-2.485 1.989A8.215 8.215 0 0 1 31.779 12a10.149 10.149 0 0 0-5.647 1.709l-6.687 4.458a.961.961 0 0 0-.17.147l-1.665-3.329a2.573 2.573 0 0 1-.087-2.102zm.115 13.147A1.7 1.7 0 0 1 18.7 23h.314a28.386 28.386 0 0 0 .435 4.48zM21.015 23H23v3a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-1h2v1a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-3h1.984a26.2 26.2 0 0 1-3.71 13H24.726a26.2 26.2 0 0 1-3.711-13zM14 38h36a3 3 0 0 1 3 3v20H11V41a3 3 0 0 1 3-3zM3 57a11.019 11.019 0 0 1 6-9.793V61H3zm58 4h-6V47.206A11.02 11.02 0 0 1 61 57z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M32 58a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm0-6a2 2 0 1 1-2 2 2 2 0 0 1 2-2zM25.292 48.707l1.415-1.415L23.414 44l3.293-3.293-1.415-1.415-4 4a1 1 0 0 0 0 1.415zM38.707 48.707l4-4a1 1 0 0 0 0-1.415l-4-4-1.415 1.415L40.585 44l-3.293 3.292zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="single_indutry_block">
                        <a href="javascript:void(0)">
                            <div class="inner_box">
                                <div class="box_icon mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 256 256" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <circle cx="214.653" cy="59.167" r="34.801" fill="#f98fa6" transform="rotate(-45 214.658 59.21)" opacity="1" data-original="#f98fa6"></circle>
                                            <circle cx="214.116" cy="138.933" r="34.801" fill="#70d6f9" opacity="1" data-original="#70d6f9"></circle>
                                            <circle cx="214.116" cy="218.699" r="34.801" fill="#b598f9" opacity="1" data-original="#b598f9"></circle>
                                            <path fill="#70d6f9" d="M231.115 41.147h-31.956c-.841 0-1.522.682-1.522 1.522v6.956c0 .841.682 1.522 1.522 1.522h31.956c.841 0 1.522-.682 1.522-1.522v-6.956c0-.841-.681-1.522-1.522-1.522z" opacity="1" data-original="#70d6f9"></path>
                                            <path fill="#f5c84c" d="M206.115 60.147h-6.956c-.841 0-1.522.682-1.522 1.522v13.956c0 .841.682 1.522 1.522 1.522h6.956c.841 0 1.522-.682 1.522-1.522V61.669c0-.841-.681-1.522-1.522-1.522z" opacity="1" data-original="#f5c84c"></path>
                                            <path fill="#5290db" d="M228.788 198.199h-29.344a2.328 2.328 0 0 0-2.328 2.328v36.344a2.328 2.328 0 0 0 2.328 2.328h29.344a2.328 2.328 0 0 0 2.328-2.328v-36.344a2.328 2.328 0 0 0-2.328-2.328z" opacity="1" data-original="#5290db"></path>
                                            <path fill="#3a70bf" d="M197.116 211.699h34v14h-34z" opacity="1" data-original="#3a70bf"></path>
                                            <path d="M214.653 21.866c-20.568 0-37.301 16.733-37.301 37.301s16.733 37.301 37.301 37.301 37.301-16.733 37.301-37.301-16.733-37.301-37.301-37.301zm0 69.602c-17.811 0-32.301-14.49-32.301-32.301s14.49-32.301 32.301-32.301 32.301 14.49 32.301 32.301-14.49 32.301-32.301 32.301zM214.116 101.632c-20.568 0-37.301 16.733-37.301 37.301s16.733 37.301 37.301 37.301 37.301-16.733 37.301-37.301-16.733-37.301-37.301-37.301zm0 69.602c-17.811 0-32.301-14.49-32.301-32.301s14.49-32.301 32.301-32.301 32.301 14.49 32.301 32.301-14.49 32.301-32.301 32.301z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="M231.115 66.146H217.16a2.5 2.5 0 1 0 0 5h13.956a2.5 2.5 0 1 0-.001-5zM231.115 57.646H217.16a2.5 2.5 0 1 0 0 5h13.956a2.5 2.5 0 1 0-.001-5zM231.115 74.646H217.16a2.5 2.5 0 1 0 0 5h13.956a2.5 2.5 0 1 0-.001-5zM235.021 137.046l-8.306-8.307a2.498 2.498 0 0 0-3.535 0 2.498 2.498 0 0 0 0 3.535l6.538 6.539-6.538 6.539a2.498 2.498 0 0 0 1.768 4.267c.64 0 1.28-.244 1.768-.732l8.306-8.306a2.499 2.499 0 0 0-.001-3.535zM198.556 138.813l6.539-6.539a2.498 2.498 0 0 0 0-3.535 2.498 2.498 0 0 0-3.535 0l-8.307 8.307a2.498 2.498 0 0 0 0 3.536l8.307 8.306c.488.488 1.128.732 1.768.732s1.28-.244 1.768-.732a2.5 2.5 0 0 0 0-3.536zM217.774 126.344a2.497 2.497 0 0 0-3.1 1.7l-5.874 20.138a2.5 2.5 0 0 0 4.8 1.401l5.874-20.138a2.5 2.5 0 0 0-1.7-3.101zM214.116 181.398c-20.568 0-37.301 16.733-37.301 37.301S193.548 256 214.116 256s37.301-16.733 37.301-37.301-16.733-37.301-37.301-37.301zm0 69.602c-17.811 0-32.301-14.49-32.301-32.301s14.49-32.301 32.301-32.301 32.301 14.49 32.301 32.301S231.927 251 214.116 251z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path fill="#87d147" d="M176.298 111.21c-3.157-.561-5.613-3.017-6.245-6.104 0-.14-.281-.14-.281 0-.632 3.087-3.087 5.543-6.245 6.104-.14 0-.14.211 0 .281 3.157.561 5.613 3.017 6.245 6.104 0 .14.281.14.281 0 .631-3.087 3.087-5.543 6.245-6.104.141-.071.141-.281 0-.281z" opacity="1" data-original="#87d147"></path>
                                            <path fill="#fc657e" d="M128.488 0a3.4 3.4 0 1 0 0 6.8 3.4 3.4 0 0 0 0-6.8z" opacity="1" data-original="#fc657e"></path>
                                            <path fill="#f5c84c" d="M157.488 24.397c-4.5-.8-8-4.3-8.9-8.7 0-.2-.4-.2-.4 0-.9 4.4-4.4 7.9-8.9 8.7-.2 0-.2.3 0 .4 4.5.8 8 4.3 8.9 8.7 0 .2.4.2.4 0 .9-4.4 4.4-7.9 8.9-8.7.2-.1.2-.4 0-.4z" opacity="1" data-original="#f5c84c"></path>
                                            <path d="M230.125 209.199H198.25a2.5 2.5 0 1 0 0 5h31.875a2.5 2.5 0 1 0 0-5zM230.125 223.199h-31.937a2.5 2.5 0 1 0 0 5h31.937a2.5 2.5 0 1 0 0-5zM231.115 38.646H199.16a4.027 4.027 0 0 0-4.022 4.022v6.956a4.027 4.027 0 0 0 4.022 4.022h31.956a4.026 4.026 0 0 0 4.022-4.022v-6.956a4.028 4.028 0 0 0-4.023-4.022zm-.978 10h-30v-5h30zM206.115 57.646h-6.956a4.027 4.027 0 0 0-4.022 4.022v13.956a4.027 4.027 0 0 0 4.022 4.022h6.956a4.026 4.026 0 0 0 4.022-4.022V61.669a4.027 4.027 0 0 0-4.022-4.023zm-.978 17h-5v-12h5z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="M228.788 195.699h-29.344a4.834 4.834 0 0 0-4.828 4.828v36.344a4.834 4.834 0 0 0 4.828 4.828h29.344a4.834 4.834 0 0 0 4.828-4.828v-36.344a4.834 4.834 0 0 0-4.828-4.828zm-.172 41h-29v-36h29z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path fill="#3a70bf" d="M159.544 173.902a14.243 14.243 0 0 0-10.743-13.019l-6.903-1.743a4.383 4.383 0 0 1 1.091 2.879v74.363a4.423 4.423 0 0 1-4.423 4.423h6.616a3.122 3.122 0 0 1 3.122 3.122c0 5.286-4.286 9.572-9.572 9.572h19.604a3.96 3.96 0 0 0 3.953-4.179zM26.629 243.928a3.122 3.122 0 0 1 3.122-3.122h6.616a4.423 4.423 0 0 1-4.423-4.423V162.02c0-1.106.42-2.104 1.091-2.879l-6.903 1.743a14.242 14.242 0 0 0-10.743 13.019l-2.744 75.418a3.959 3.959 0 0 0 3.953 4.179h19.604c-5.288 0-9.573-4.286-9.573-9.572z" opacity="1" data-original="#3a70bf"></path>
                                            <path fill="#edf4fc" d="M138.565 157.598H36.367a4.423 4.423 0 0 0-4.423 4.423v74.363a4.423 4.423 0 0 0 4.423 4.423h102.198a4.423 4.423 0 0 0 4.423-4.423v-74.363a4.423 4.423 0 0 0-4.423-4.423z" opacity="1" data-original="#edf4fc"></path>
                                            <path fill="#c7d7e5" d="M145.181 240.807H29.75a3.122 3.122 0 0 0-3.122 3.122c0 5.286 4.286 9.572 9.572 9.572h102.53c5.286 0 9.572-4.286 9.572-9.572a3.12 3.12 0 0 0-3.121-3.122z" opacity="1" data-original="#c7d7e5"></path>
                                            <path fill="#f9d0b4" d="M124.426 71.985c-.759 0-1.502.064-2.229.177v26.294c0 .783-.036 1.558-.088 2.329.756.122 1.526.202 2.316.202 8.009 0 14.501-6.492 14.501-14.501.001-8.009-6.491-14.501-14.5-14.501z" opacity="1" data-original="#f9d0b4"></path>
                                            <path fill="#f9d0b4" d="M120.061 67.75c-3.514-.814-7.782-2.85-12.673-7.294-.967-.879-2.459-.807-3.31.186-5.29 6.174-24.047 24.906-51.344 17.13v20.684c0 19.102 15.629 34.732 34.732 34.732 19.102 0 34.732-15.629 34.732-34.732v-28.06c-.001-1.276-.894-2.358-2.137-2.646z" opacity="1" data-original="#f9d0b4"></path>
                                            <path fill="#f9d0b4" d="M52.734 98.455V77.771a56.46 56.46 0 0 1-7.346-2.668 4.418 4.418 0 0 0-4.803.825 14.426 14.426 0 0 0-4.581 10.557c0 8.008 6.492 14.501 14.501 14.501.79 0 1.56-.08 2.316-.202a35.175 35.175 0 0 1-.087-2.329z" opacity="1" data-original="#f9d0b4"></path>
                                            <path fill="#5b5d60" d="M87.466 20.526c-25.976 0-47.229 21.253-47.229 47.229v8.535c.118-.119.226-.246.348-.361a4.418 4.418 0 0 1 4.803-.825 56.608 56.608 0 0 0 7.346 2.668c27.297 7.776 46.055-10.956 51.344-17.13.85-.992 2.342-1.065 3.309-.186 4.892 4.445 9.159 6.48 12.673 7.294 1.243.288 2.136 1.37 2.136 2.646v1.766a14.454 14.454 0 0 1 12.497 4.086v-8.494c.002-25.975-21.251-47.228-47.227-47.228zM136.114 120.456c6.634-10.404 3.501-20.533.574-26.254-2.568 4.072-7.093 6.786-12.263 6.786-.79 0-1.56-.08-2.316-.202-.816 12.152-7.945 22.647-18.124 28.194v10.533a9.64 9.64 0 0 0 4.604 8.204c1.136.7-.306-.122 9.369 4.691a33.414 33.414 0 0 0 4.346 1.737c.263.082.529.154.794.229 5.111-1.87 9.621-4.841 12.542-9.466 5.356-8.48 2.23-16.696.259-20.374-.692-1.293-.573-2.842.215-4.078zM52.822 100.785c-.756.122-1.526.202-2.316.202-5.17 0-9.695-2.714-12.262-6.786-2.926 5.721-6.06 15.851.574 26.254.788 1.236.908 2.785.215 4.077-1.971 3.678-5.097 11.894.259 20.374 2.921 4.625 7.43 7.595 12.542 9.466.265-.075.531-.147.794-.229a33.33 33.33 0 0 0 4.346-1.737c10.303-5.125 8.318-4.043 9.369-4.691a9.642 9.642 0 0 0 4.604-8.204v-10.533c-10.18-5.547-17.31-16.041-18.125-28.193z" opacity="1" data-original="#5b5d60" class=""></path>
                                            <path fill="#f9d0b4" d="M26.629 243.928a3.122 3.122 0 0 1 3.122-3.122h6.616a4.423 4.423 0 0 1-4.423-4.423v-29.14l-17.612-4.309-1.688 46.386a3.959 3.959 0 0 0 3.953 4.179h19.604c-5.287.001-9.572-4.285-9.572-9.571zM160.6 202.935l-17.612 4.309v29.14a4.423 4.423 0 0 1-4.423 4.423h6.616a3.122 3.122 0 0 1 3.122 3.122c0 5.286-4.286 9.572-9.572 9.572h19.604a3.96 3.96 0 0 0 3.953-4.179z" opacity="1" data-original="#f9d0b4"></path>
                                            <path fill="#5290db" d="M68.153 146.273a9.599 9.599 0 0 1-2.593 1.899l-8.587 4.234a30.307 30.307 0 0 1-5.377 2.032l-9.371 3.159h34.13zM123.336 154.438a30.355 30.355 0 0 1-5.377-2.032l-8.587-4.234a9.599 9.599 0 0 1-2.593-1.899l-8.201 11.325h34.13z" opacity="1" data-original="#5290db"></path>
                                            <path fill="#f9d0b4" d="M103.986 139.512v-10.533a34.424 34.424 0 0 1-16.52 4.208 34.42 34.42 0 0 1-16.52-4.208v10.533a9.635 9.635 0 0 1-2.793 6.761l8.201 11.325h22.224l8.201-11.325a9.636 9.636 0 0 1-2.793-6.761z" opacity="1" data-original="#f9d0b4"></path>
                                            <path d="m164.787 249.23-2.747-75.467a16.668 16.668 0 0 0-12.627-15.303l-6.517-1.645a2.5 2.5 0 1 0-1.224 4.848l6.519 1.646c5.011 1.261 8.57 5.575 8.855 10.685l2.747 75.467c.03.545-.236.913-.397 1.083s-.514.457-1.06.457h-19.604a2.5 2.5 0 1 0 0 5h19.604a6.487 6.487 0 0 0 4.693-2.021c1.213-1.285 1.853-3.034 1.758-4.75zM36.201 251H16.597c-.547 0-.899-.286-1.06-.457-.162-.17-.427-.538-.395-1.132l2.742-75.37a11.692 11.692 0 0 1 8.859-10.734l6.63-1.674a2.5 2.5 0 1 0-1.224-4.848l-6.629 1.673c-7.144 1.798-12.219 7.949-12.631 15.352l-2.742 75.37a6.483 6.483 0 0 0 1.756 4.797 6.483 6.483 0 0 0 4.693 2.021H36.2a2.5 2.5 0 0 0 .001-4.998zM99.155 109.021a2.5 2.5 0 0 0-3.522.31c-1.799 2.146-4.852 3.427-8.167 3.427s-6.369-1.281-8.167-3.427a2.501 2.501 0 0 0-3.832 3.212c2.737 3.265 7.223 5.215 11.999 5.215s9.261-1.949 11.999-5.215a2.5 2.5 0 0 0-.31-3.522z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <circle cx="102.576" cy="90.5" r="4.5" fill="#000000" opacity="1" data-original="#000000"></circle>
                                            <circle cx="72.355" cy="90.5" r="4.5" fill="#000000" opacity="1" data-original="#000000"></circle>
                                            <path d="M94.312 200H80.356a2.5 2.5 0 1 0 0 5h13.956a2.5 2.5 0 1 0 0-5z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="M138.565 155.098H36.367a6.931 6.931 0 0 0-6.923 6.923v74.362a6.931 6.931 0 0 0 6.923 6.923h102.198a6.931 6.931 0 0 0 6.923-6.923v-74.362a6.931 6.931 0 0 0-6.923-6.923zm1.923 81.285a1.925 1.925 0 0 1-1.923 1.923H36.367a1.925 1.925 0 0 1-1.923-1.923v-74.362c0-1.061.863-1.923 1.923-1.923h102.198c1.061 0 1.923.863 1.923 1.923z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="M145.181 238.307H29.75a5.628 5.628 0 0 0-5.622 5.622c0 6.656 5.416 12.072 12.072 12.072h102.53c6.656 0 12.072-5.416 12.072-12.072a5.627 5.627 0 0 0-5.621-5.622zM138.731 251H36.201a7.08 7.08 0 0 1-7.072-7.072c0-.343.279-.622.622-.622h115.431c.343 0 .622.279.622.622-.001 3.9-3.174 7.072-7.073 7.072z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path fill="#70d6f9" d="M18.246 117.453h-2.3v-2.3c0-1.7-1.4-3.2-3.2-3.2s-3.2 1.4-3.2 3.2v2.3h-2.3c-1.7 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2h2.3v2.3c0 1.7 1.4 3.2 3.2 3.2s3.2-1.4 3.2-3.2v-2.3h2.3c1.7 0 3.2-1.4 3.2-3.2s-1.4-3.2-3.2-3.2z" opacity="1" data-original="#70d6f9"></path>
                                            <path fill="#f5c84c" d="M22.488 140.353a3.4 3.4 0 1 0 0 6.8 3.4 3.4 0 0 0 0-6.8z" opacity="1" data-original="#f5c84c"></path>
                                            <path d="M124.426 69.485c-.518 0-1.048.025-1.574.076a2.499 2.499 0 0 0-2.251 2.726 2.496 2.496 0 0 0 2.726 2.251c.362-.035.729-.053 1.1-.053 6.617 0 12 5.383 12 12s-5.383 12.001-12 12.001c-.361 0-.731-.021-1.132-.064a2.492 2.492 0 0 0-2.752 2.219 2.5 2.5 0 0 0 2.219 2.752c.58.062 1.125.092 1.666.092 9.374 0 17-7.626 17-17.001-.001-9.372-7.628-16.999-17.002-16.999z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="M120.625 65.314c-3.717-.861-7.605-3.119-11.557-6.709a4.875 4.875 0 0 0-3.556-1.253 4.744 4.744 0 0 0-3.333 1.663c-4.886 5.703-22.844 23.736-48.761 16.352a2.5 2.5 0 0 0-3.185 2.404v20.684c0 20.53 16.702 37.232 37.232 37.232 20.529 0 37.231-16.702 37.231-37.232v-28.06c.001-2.436-1.673-4.525-4.071-5.081zm-.928 33.141c0 17.773-14.459 32.232-32.231 32.232-17.773 0-32.232-14.459-32.232-32.232V80.979c26.819 5.88 45.249-12.354 50.606-18.552 4.547 4.103 9.142 6.712 13.656 7.759.1.023.201.097.201.21z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="M53.418 75.367a54.323 54.323 0 0 1-7.02-2.55 6.907 6.907 0 0 0-7.523 1.288 17.034 17.034 0 0 0-5.371 12.381c0 9.375 7.626 17.001 17.001 17.001.473 0 .939-.023 1.401-.066a2.5 2.5 0 1 0-.46-4.978c-.31.028-.624.045-.941.045-6.617 0-12.001-5.384-12.001-12.001 0-3.34 1.346-6.441 3.791-8.733a1.908 1.908 0 0 1 2.083-.361 59.377 59.377 0 0 0 7.671 2.785 2.5 2.5 0 1 0 1.369-4.811z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="M87.466 18.026c-27.421 0-49.729 22.308-49.729 49.729v8.327a2.5 2.5 0 1 0 5 0v-8.327c0-24.664 20.065-44.729 44.729-44.729s44.729 20.065 44.729 44.729v7.995a2.5 2.5 0 1 0 5 0v-7.995c-.001-27.421-22.309-49.729-49.729-49.729zM138.222 121.8c7.314-11.471 3.702-22.673.897-28.33a2.5 2.5 0 1 0-4.479 2.221c2.854 5.756 5.06 14.491-.634 23.42-1.29 2.023-1.409 4.553-.311 6.603 1.905 3.553 4.416 10.598-.169 17.857-2.301 3.643-5.978 6.442-10.927 8.319a2.5 2.5 0 1 0 1.773 4.675c5.987-2.27 10.489-5.743 13.382-10.324 6.16-9.754 2.296-19.257.349-22.889-.249-.464-.205-1.044.119-1.552zM51.968 151.75c-4.765-1.874-8.319-4.625-10.563-8.178-4.585-7.259-2.074-14.304-.169-17.858 1.098-2.049.979-4.579-.311-6.602-5.683-8.912-3.493-17.633-.654-23.379a2.5 2.5 0 1 0-4.483-2.215c-2.79 5.648-6.38 16.833.921 28.282.324.508.369 1.088.12 1.552-1.947 3.633-5.812 13.136.349 22.89 2.824 4.472 7.185 7.891 12.961 10.162a2.5 2.5 0 0 0 3.241-1.412 2.5 2.5 0 0 0-1.412-3.242zM31.891 204.657l-16.391-4.01a2.5 2.5 0 1 0-1.188 4.856l16.391 4.01a2.497 2.497 0 0 0 3.022-1.834 2.5 2.5 0 0 0-1.834-3.022zM162.236 202.535a2.498 2.498 0 0 0-3.022-1.834l-16.205 3.964a2.5 2.5 0 1 0 1.188 4.856l16.205-3.964a2.5 2.5 0 0 0 1.834-3.022z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="m77.896 155.465-7.719-10.659a2.498 2.498 0 0 0-3.806-.287 7.125 7.125 0 0 1-1.917 1.411l-8.587 4.234a28.01 28.01 0 0 1-4.935 1.864c-.045.013-.091.026-.136.042l-9.087 3.063a2.5 2.5 0 0 0 1.598 4.739l9.021-3.042a32.962 32.962 0 0 0 5.75-2.181l8.586-4.234c.34-.167.672-.353.998-.556l6.184 8.54a2.5 2.5 0 1 0 4.05-2.934zM133.304 155.161l-9.169-3.091a3.062 3.062 0 0 0-.136-.042 28.01 28.01 0 0 1-4.935-1.864l-8.587-4.235a7.12 7.12 0 0 1-1.917-1.41 2.5 2.5 0 0 0-3.806.287l-8.013 11.066a2.5 2.5 0 1 0 4.05 2.932l6.479-8.947c.325.203.658.388.998.556l8.587 4.234a32.833 32.833 0 0 0 5.75 2.181l9.103 3.069a2.501 2.501 0 0 0 3.168-1.571 2.5 2.5 0 0 0-1.572-3.165z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="M70.946 127.063a2.5 2.5 0 0 0-2.5 2.5v9.949c0 1.871-.737 3.648-2.074 5.007a2.5 2.5 0 1 0 3.562 3.508c2.265-2.3 3.512-5.324 3.512-8.515v-9.949a2.5 2.5 0 0 0-2.5-2.5zM108.56 144.519c-1.337-1.359-2.074-3.137-2.074-5.007v-9.887a2.5 2.5 0 1 0-5 0v9.887c0 3.191 1.247 6.215 3.511 8.515a2.492 2.492 0 0 0 1.782.746c.633 0 1.267-.239 1.754-.718a2.502 2.502 0 0 0 .027-3.536z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </svg>
                                </div>
                                <h4>Web Development</h4>
                                <p>We create responsive, dynamic websites with a user-friendly admin panel, making it easy to manage content, attract customers, enhance branding, and drive growth. Our high-performing websites deliver a seamless experience across all devices.</p>
                            </div>
                            <div class="big_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 256 256" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <circle cx="214.653" cy="59.167" r="34.801" fill="#f98fa6" transform="rotate(-45 214.658 59.21)" opacity="1" data-original="#f98fa6"></circle>
                                        <circle cx="214.116" cy="138.933" r="34.801" fill="#70d6f9" opacity="1" data-original="#70d6f9"></circle>
                                        <circle cx="214.116" cy="218.699" r="34.801" fill="#b598f9" opacity="1" data-original="#b598f9"></circle>
                                        <path fill="#70d6f9" d="M231.115 41.147h-31.956c-.841 0-1.522.682-1.522 1.522v6.956c0 .841.682 1.522 1.522 1.522h31.956c.841 0 1.522-.682 1.522-1.522v-6.956c0-.841-.681-1.522-1.522-1.522z" opacity="1" data-original="#70d6f9"></path>
                                        <path fill="#f5c84c" d="M206.115 60.147h-6.956c-.841 0-1.522.682-1.522 1.522v13.956c0 .841.682 1.522 1.522 1.522h6.956c.841 0 1.522-.682 1.522-1.522V61.669c0-.841-.681-1.522-1.522-1.522z" opacity="1" data-original="#f5c84c"></path>
                                        <path fill="#5290db" d="M228.788 198.199h-29.344a2.328 2.328 0 0 0-2.328 2.328v36.344a2.328 2.328 0 0 0 2.328 2.328h29.344a2.328 2.328 0 0 0 2.328-2.328v-36.344a2.328 2.328 0 0 0-2.328-2.328z" opacity="1" data-original="#5290db"></path>
                                        <path fill="#3a70bf" d="M197.116 211.699h34v14h-34z" opacity="1" data-original="#3a70bf"></path>
                                        <path d="M214.653 21.866c-20.568 0-37.301 16.733-37.301 37.301s16.733 37.301 37.301 37.301 37.301-16.733 37.301-37.301-16.733-37.301-37.301-37.301zm0 69.602c-17.811 0-32.301-14.49-32.301-32.301s14.49-32.301 32.301-32.301 32.301 14.49 32.301 32.301-14.49 32.301-32.301 32.301zM214.116 101.632c-20.568 0-37.301 16.733-37.301 37.301s16.733 37.301 37.301 37.301 37.301-16.733 37.301-37.301-16.733-37.301-37.301-37.301zm0 69.602c-17.811 0-32.301-14.49-32.301-32.301s14.49-32.301 32.301-32.301 32.301 14.49 32.301 32.301-14.49 32.301-32.301 32.301z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path d="M231.115 66.146H217.16a2.5 2.5 0 1 0 0 5h13.956a2.5 2.5 0 1 0-.001-5zM231.115 57.646H217.16a2.5 2.5 0 1 0 0 5h13.956a2.5 2.5 0 1 0-.001-5zM231.115 74.646H217.16a2.5 2.5 0 1 0 0 5h13.956a2.5 2.5 0 1 0-.001-5zM235.021 137.046l-8.306-8.307a2.498 2.498 0 0 0-3.535 0 2.498 2.498 0 0 0 0 3.535l6.538 6.539-6.538 6.539a2.498 2.498 0 0 0 1.768 4.267c.64 0 1.28-.244 1.768-.732l8.306-8.306a2.499 2.499 0 0 0-.001-3.535zM198.556 138.813l6.539-6.539a2.498 2.498 0 0 0 0-3.535 2.498 2.498 0 0 0-3.535 0l-8.307 8.307a2.498 2.498 0 0 0 0 3.536l8.307 8.306c.488.488 1.128.732 1.768.732s1.28-.244 1.768-.732a2.5 2.5 0 0 0 0-3.536zM217.774 126.344a2.497 2.497 0 0 0-3.1 1.7l-5.874 20.138a2.5 2.5 0 0 0 4.8 1.401l5.874-20.138a2.5 2.5 0 0 0-1.7-3.101zM214.116 181.398c-20.568 0-37.301 16.733-37.301 37.301S193.548 256 214.116 256s37.301-16.733 37.301-37.301-16.733-37.301-37.301-37.301zm0 69.602c-17.811 0-32.301-14.49-32.301-32.301s14.49-32.301 32.301-32.301 32.301 14.49 32.301 32.301S231.927 251 214.116 251z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path fill="#87d147" d="M176.298 111.21c-3.157-.561-5.613-3.017-6.245-6.104 0-.14-.281-.14-.281 0-.632 3.087-3.087 5.543-6.245 6.104-.14 0-.14.211 0 .281 3.157.561 5.613 3.017 6.245 6.104 0 .14.281.14.281 0 .631-3.087 3.087-5.543 6.245-6.104.141-.071.141-.281 0-.281z" opacity="1" data-original="#87d147"></path>
                                        <path fill="#fc657e" d="M128.488 0a3.4 3.4 0 1 0 0 6.8 3.4 3.4 0 0 0 0-6.8z" opacity="1" data-original="#fc657e"></path>
                                        <path fill="#f5c84c" d="M157.488 24.397c-4.5-.8-8-4.3-8.9-8.7 0-.2-.4-.2-.4 0-.9 4.4-4.4 7.9-8.9 8.7-.2 0-.2.3 0 .4 4.5.8 8 4.3 8.9 8.7 0 .2.4.2.4 0 .9-4.4 4.4-7.9 8.9-8.7.2-.1.2-.4 0-.4z" opacity="1" data-original="#f5c84c"></path>
                                        <path d="M230.125 209.199H198.25a2.5 2.5 0 1 0 0 5h31.875a2.5 2.5 0 1 0 0-5zM230.125 223.199h-31.937a2.5 2.5 0 1 0 0 5h31.937a2.5 2.5 0 1 0 0-5zM231.115 38.646H199.16a4.027 4.027 0 0 0-4.022 4.022v6.956a4.027 4.027 0 0 0 4.022 4.022h31.956a4.026 4.026 0 0 0 4.022-4.022v-6.956a4.028 4.028 0 0 0-4.023-4.022zm-.978 10h-30v-5h30zM206.115 57.646h-6.956a4.027 4.027 0 0 0-4.022 4.022v13.956a4.027 4.027 0 0 0 4.022 4.022h6.956a4.026 4.026 0 0 0 4.022-4.022V61.669a4.027 4.027 0 0 0-4.022-4.023zm-.978 17h-5v-12h5z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path d="M228.788 195.699h-29.344a4.834 4.834 0 0 0-4.828 4.828v36.344a4.834 4.834 0 0 0 4.828 4.828h29.344a4.834 4.834 0 0 0 4.828-4.828v-36.344a4.834 4.834 0 0 0-4.828-4.828zm-.172 41h-29v-36h29z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path fill="#3a70bf" d="M159.544 173.902a14.243 14.243 0 0 0-10.743-13.019l-6.903-1.743a4.383 4.383 0 0 1 1.091 2.879v74.363a4.423 4.423 0 0 1-4.423 4.423h6.616a3.122 3.122 0 0 1 3.122 3.122c0 5.286-4.286 9.572-9.572 9.572h19.604a3.96 3.96 0 0 0 3.953-4.179zM26.629 243.928a3.122 3.122 0 0 1 3.122-3.122h6.616a4.423 4.423 0 0 1-4.423-4.423V162.02c0-1.106.42-2.104 1.091-2.879l-6.903 1.743a14.242 14.242 0 0 0-10.743 13.019l-2.744 75.418a3.959 3.959 0 0 0 3.953 4.179h19.604c-5.288 0-9.573-4.286-9.573-9.572z" opacity="1" data-original="#3a70bf"></path>
                                        <path fill="#edf4fc" d="M138.565 157.598H36.367a4.423 4.423 0 0 0-4.423 4.423v74.363a4.423 4.423 0 0 0 4.423 4.423h102.198a4.423 4.423 0 0 0 4.423-4.423v-74.363a4.423 4.423 0 0 0-4.423-4.423z" opacity="1" data-original="#edf4fc"></path>
                                        <path fill="#c7d7e5" d="M145.181 240.807H29.75a3.122 3.122 0 0 0-3.122 3.122c0 5.286 4.286 9.572 9.572 9.572h102.53c5.286 0 9.572-4.286 9.572-9.572a3.12 3.12 0 0 0-3.121-3.122z" opacity="1" data-original="#c7d7e5"></path>
                                        <path fill="#f9d0b4" d="M124.426 71.985c-.759 0-1.502.064-2.229.177v26.294c0 .783-.036 1.558-.088 2.329.756.122 1.526.202 2.316.202 8.009 0 14.501-6.492 14.501-14.501.001-8.009-6.491-14.501-14.5-14.501z" opacity="1" data-original="#f9d0b4"></path>
                                        <path fill="#f9d0b4" d="M120.061 67.75c-3.514-.814-7.782-2.85-12.673-7.294-.967-.879-2.459-.807-3.31.186-5.29 6.174-24.047 24.906-51.344 17.13v20.684c0 19.102 15.629 34.732 34.732 34.732 19.102 0 34.732-15.629 34.732-34.732v-28.06c-.001-1.276-.894-2.358-2.137-2.646z" opacity="1" data-original="#f9d0b4"></path>
                                        <path fill="#f9d0b4" d="M52.734 98.455V77.771a56.46 56.46 0 0 1-7.346-2.668 4.418 4.418 0 0 0-4.803.825 14.426 14.426 0 0 0-4.581 10.557c0 8.008 6.492 14.501 14.501 14.501.79 0 1.56-.08 2.316-.202a35.175 35.175 0 0 1-.087-2.329z" opacity="1" data-original="#f9d0b4"></path>
                                        <path fill="#5b5d60" d="M87.466 20.526c-25.976 0-47.229 21.253-47.229 47.229v8.535c.118-.119.226-.246.348-.361a4.418 4.418 0 0 1 4.803-.825 56.608 56.608 0 0 0 7.346 2.668c27.297 7.776 46.055-10.956 51.344-17.13.85-.992 2.342-1.065 3.309-.186 4.892 4.445 9.159 6.48 12.673 7.294 1.243.288 2.136 1.37 2.136 2.646v1.766a14.454 14.454 0 0 1 12.497 4.086v-8.494c.002-25.975-21.251-47.228-47.227-47.228zM136.114 120.456c6.634-10.404 3.501-20.533.574-26.254-2.568 4.072-7.093 6.786-12.263 6.786-.79 0-1.56-.08-2.316-.202-.816 12.152-7.945 22.647-18.124 28.194v10.533a9.64 9.64 0 0 0 4.604 8.204c1.136.7-.306-.122 9.369 4.691a33.414 33.414 0 0 0 4.346 1.737c.263.082.529.154.794.229 5.111-1.87 9.621-4.841 12.542-9.466 5.356-8.48 2.23-16.696.259-20.374-.692-1.293-.573-2.842.215-4.078zM52.822 100.785c-.756.122-1.526.202-2.316.202-5.17 0-9.695-2.714-12.262-6.786-2.926 5.721-6.06 15.851.574 26.254.788 1.236.908 2.785.215 4.077-1.971 3.678-5.097 11.894.259 20.374 2.921 4.625 7.43 7.595 12.542 9.466.265-.075.531-.147.794-.229a33.33 33.33 0 0 0 4.346-1.737c10.303-5.125 8.318-4.043 9.369-4.691a9.642 9.642 0 0 0 4.604-8.204v-10.533c-10.18-5.547-17.31-16.041-18.125-28.193z" opacity="1" data-original="#5b5d60" class=""></path>
                                        <path fill="#f9d0b4" d="M26.629 243.928a3.122 3.122 0 0 1 3.122-3.122h6.616a4.423 4.423 0 0 1-4.423-4.423v-29.14l-17.612-4.309-1.688 46.386a3.959 3.959 0 0 0 3.953 4.179h19.604c-5.287.001-9.572-4.285-9.572-9.571zM160.6 202.935l-17.612 4.309v29.14a4.423 4.423 0 0 1-4.423 4.423h6.616a3.122 3.122 0 0 1 3.122 3.122c0 5.286-4.286 9.572-9.572 9.572h19.604a3.96 3.96 0 0 0 3.953-4.179z" opacity="1" data-original="#f9d0b4"></path>
                                        <path fill="#5290db" d="M68.153 146.273a9.599 9.599 0 0 1-2.593 1.899l-8.587 4.234a30.307 30.307 0 0 1-5.377 2.032l-9.371 3.159h34.13zM123.336 154.438a30.355 30.355 0 0 1-5.377-2.032l-8.587-4.234a9.599 9.599 0 0 1-2.593-1.899l-8.201 11.325h34.13z" opacity="1" data-original="#5290db"></path>
                                        <path fill="#f9d0b4" d="M103.986 139.512v-10.533a34.424 34.424 0 0 1-16.52 4.208 34.42 34.42 0 0 1-16.52-4.208v10.533a9.635 9.635 0 0 1-2.793 6.761l8.201 11.325h22.224l8.201-11.325a9.636 9.636 0 0 1-2.793-6.761z" opacity="1" data-original="#f9d0b4"></path>
                                        <path d="m164.787 249.23-2.747-75.467a16.668 16.668 0 0 0-12.627-15.303l-6.517-1.645a2.5 2.5 0 1 0-1.224 4.848l6.519 1.646c5.011 1.261 8.57 5.575 8.855 10.685l2.747 75.467c.03.545-.236.913-.397 1.083s-.514.457-1.06.457h-19.604a2.5 2.5 0 1 0 0 5h19.604a6.487 6.487 0 0 0 4.693-2.021c1.213-1.285 1.853-3.034 1.758-4.75zM36.201 251H16.597c-.547 0-.899-.286-1.06-.457-.162-.17-.427-.538-.395-1.132l2.742-75.37a11.692 11.692 0 0 1 8.859-10.734l6.63-1.674a2.5 2.5 0 1 0-1.224-4.848l-6.629 1.673c-7.144 1.798-12.219 7.949-12.631 15.352l-2.742 75.37a6.483 6.483 0 0 0 1.756 4.797 6.483 6.483 0 0 0 4.693 2.021H36.2a2.5 2.5 0 0 0 .001-4.998zM99.155 109.021a2.5 2.5 0 0 0-3.522.31c-1.799 2.146-4.852 3.427-8.167 3.427s-6.369-1.281-8.167-3.427a2.501 2.501 0 0 0-3.832 3.212c2.737 3.265 7.223 5.215 11.999 5.215s9.261-1.949 11.999-5.215a2.5 2.5 0 0 0-.31-3.522z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <circle cx="102.576" cy="90.5" r="4.5" fill="#000000" opacity="1" data-original="#000000"></circle>
                                        <circle cx="72.355" cy="90.5" r="4.5" fill="#000000" opacity="1" data-original="#000000"></circle>
                                        <path d="M94.312 200H80.356a2.5 2.5 0 1 0 0 5h13.956a2.5 2.5 0 1 0 0-5z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path d="M138.565 155.098H36.367a6.931 6.931 0 0 0-6.923 6.923v74.362a6.931 6.931 0 0 0 6.923 6.923h102.198a6.931 6.931 0 0 0 6.923-6.923v-74.362a6.931 6.931 0 0 0-6.923-6.923zm1.923 81.285a1.925 1.925 0 0 1-1.923 1.923H36.367a1.925 1.925 0 0 1-1.923-1.923v-74.362c0-1.061.863-1.923 1.923-1.923h102.198c1.061 0 1.923.863 1.923 1.923z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path d="M145.181 238.307H29.75a5.628 5.628 0 0 0-5.622 5.622c0 6.656 5.416 12.072 12.072 12.072h102.53c6.656 0 12.072-5.416 12.072-12.072a5.627 5.627 0 0 0-5.621-5.622zM138.731 251H36.201a7.08 7.08 0 0 1-7.072-7.072c0-.343.279-.622.622-.622h115.431c.343 0 .622.279.622.622-.001 3.9-3.174 7.072-7.073 7.072z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path fill="#70d6f9" d="M18.246 117.453h-2.3v-2.3c0-1.7-1.4-3.2-3.2-3.2s-3.2 1.4-3.2 3.2v2.3h-2.3c-1.7 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2h2.3v2.3c0 1.7 1.4 3.2 3.2 3.2s3.2-1.4 3.2-3.2v-2.3h2.3c1.7 0 3.2-1.4 3.2-3.2s-1.4-3.2-3.2-3.2z" opacity="1" data-original="#70d6f9"></path>
                                        <path fill="#f5c84c" d="M22.488 140.353a3.4 3.4 0 1 0 0 6.8 3.4 3.4 0 0 0 0-6.8z" opacity="1" data-original="#f5c84c"></path>
                                        <path d="M124.426 69.485c-.518 0-1.048.025-1.574.076a2.499 2.499 0 0 0-2.251 2.726 2.496 2.496 0 0 0 2.726 2.251c.362-.035.729-.053 1.1-.053 6.617 0 12 5.383 12 12s-5.383 12.001-12 12.001c-.361 0-.731-.021-1.132-.064a2.492 2.492 0 0 0-2.752 2.219 2.5 2.5 0 0 0 2.219 2.752c.58.062 1.125.092 1.666.092 9.374 0 17-7.626 17-17.001-.001-9.372-7.628-16.999-17.002-16.999z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path d="M120.625 65.314c-3.717-.861-7.605-3.119-11.557-6.709a4.875 4.875 0 0 0-3.556-1.253 4.744 4.744 0 0 0-3.333 1.663c-4.886 5.703-22.844 23.736-48.761 16.352a2.5 2.5 0 0 0-3.185 2.404v20.684c0 20.53 16.702 37.232 37.232 37.232 20.529 0 37.231-16.702 37.231-37.232v-28.06c.001-2.436-1.673-4.525-4.071-5.081zm-.928 33.141c0 17.773-14.459 32.232-32.231 32.232-17.773 0-32.232-14.459-32.232-32.232V80.979c26.819 5.88 45.249-12.354 50.606-18.552 4.547 4.103 9.142 6.712 13.656 7.759.1.023.201.097.201.21z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path d="M53.418 75.367a54.323 54.323 0 0 1-7.02-2.55 6.907 6.907 0 0 0-7.523 1.288 17.034 17.034 0 0 0-5.371 12.381c0 9.375 7.626 17.001 17.001 17.001.473 0 .939-.023 1.401-.066a2.5 2.5 0 1 0-.46-4.978c-.31.028-.624.045-.941.045-6.617 0-12.001-5.384-12.001-12.001 0-3.34 1.346-6.441 3.791-8.733a1.908 1.908 0 0 1 2.083-.361 59.377 59.377 0 0 0 7.671 2.785 2.5 2.5 0 1 0 1.369-4.811z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path d="M87.466 18.026c-27.421 0-49.729 22.308-49.729 49.729v8.327a2.5 2.5 0 1 0 5 0v-8.327c0-24.664 20.065-44.729 44.729-44.729s44.729 20.065 44.729 44.729v7.995a2.5 2.5 0 1 0 5 0v-7.995c-.001-27.421-22.309-49.729-49.729-49.729zM138.222 121.8c7.314-11.471 3.702-22.673.897-28.33a2.5 2.5 0 1 0-4.479 2.221c2.854 5.756 5.06 14.491-.634 23.42-1.29 2.023-1.409 4.553-.311 6.603 1.905 3.553 4.416 10.598-.169 17.857-2.301 3.643-5.978 6.442-10.927 8.319a2.5 2.5 0 1 0 1.773 4.675c5.987-2.27 10.489-5.743 13.382-10.324 6.16-9.754 2.296-19.257.349-22.889-.249-.464-.205-1.044.119-1.552zM51.968 151.75c-4.765-1.874-8.319-4.625-10.563-8.178-4.585-7.259-2.074-14.304-.169-17.858 1.098-2.049.979-4.579-.311-6.602-5.683-8.912-3.493-17.633-.654-23.379a2.5 2.5 0 1 0-4.483-2.215c-2.79 5.648-6.38 16.833.921 28.282.324.508.369 1.088.12 1.552-1.947 3.633-5.812 13.136.349 22.89 2.824 4.472 7.185 7.891 12.961 10.162a2.5 2.5 0 0 0 3.241-1.412 2.5 2.5 0 0 0-1.412-3.242zM31.891 204.657l-16.391-4.01a2.5 2.5 0 1 0-1.188 4.856l16.391 4.01a2.497 2.497 0 0 0 3.022-1.834 2.5 2.5 0 0 0-1.834-3.022zM162.236 202.535a2.498 2.498 0 0 0-3.022-1.834l-16.205 3.964a2.5 2.5 0 1 0 1.188 4.856l16.205-3.964a2.5 2.5 0 0 0 1.834-3.022z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path d="m77.896 155.465-7.719-10.659a2.498 2.498 0 0 0-3.806-.287 7.125 7.125 0 0 1-1.917 1.411l-8.587 4.234a28.01 28.01 0 0 1-4.935 1.864c-.045.013-.091.026-.136.042l-9.087 3.063a2.5 2.5 0 0 0 1.598 4.739l9.021-3.042a32.962 32.962 0 0 0 5.75-2.181l8.586-4.234c.34-.167.672-.353.998-.556l6.184 8.54a2.5 2.5 0 1 0 4.05-2.934zM133.304 155.161l-9.169-3.091a3.062 3.062 0 0 0-.136-.042 28.01 28.01 0 0 1-4.935-1.864l-8.587-4.235a7.12 7.12 0 0 1-1.917-1.41 2.5 2.5 0 0 0-3.806.287l-8.013 11.066a2.5 2.5 0 1 0 4.05 2.932l6.479-8.947c.325.203.658.388.998.556l8.587 4.234a32.833 32.833 0 0 0 5.75 2.181l9.103 3.069a2.501 2.501 0 0 0 3.168-1.571 2.5 2.5 0 0 0-1.572-3.165z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path d="M70.946 127.063a2.5 2.5 0 0 0-2.5 2.5v9.949c0 1.871-.737 3.648-2.074 5.007a2.5 2.5 0 1 0 3.562 3.508c2.265-2.3 3.512-5.324 3.512-8.515v-9.949a2.5 2.5 0 0 0-2.5-2.5zM108.56 144.519c-1.337-1.359-2.074-3.137-2.074-5.007v-9.887a2.5 2.5 0 1 0-5 0v9.887c0 3.191 1.247 6.215 3.511 8.515a2.492 2.492 0 0 0 1.782.746c.633 0 1.267-.239 1.754-.718a2.502 2.502 0 0 0 .027-3.536z" fill="#000000" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="single_indutry_block">
                        <a href="javascript:void(0)">
                            <div class="inner_box">
                                <div class="box_icon mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 68 68" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <path fill="#4d5d77" d="M42.26 7.727v52.546a3.974 3.974 0 0 1-3.974 3.973H11.892a3.974 3.974 0 0 1-3.973-3.973V7.727a3.974 3.974 0 0 1 3.973-3.973h26.394a3.974 3.974 0 0 1 3.974 3.973z" opacity="1" data-original="#4d5d77" class=""></path>
                                            <path fill="#ffffff" d="M40.778 9.935v47.087a2.485 2.485 0 0 1-2.485 2.485H11.89a2.485 2.485 0 0 1-2.485-2.485V9.935a2.485 2.485 0 0 1 2.485-2.484h26.404a2.485 2.485 0 0 1 2.485 2.484z" opacity="1" data-original="#ffffff" class=""></path>
                                            <path fill="#e2eaff" d="M33.352 12.039v14.29a1.11 1.11 0 0 1-1.112 1.113H17.943c-.611 0-1.113-.495-1.113-1.112V12.039c0-.617.502-1.112 1.113-1.112H32.24a1.11 1.11 0 0 1 1.112 1.112z" opacity="1" data-original="#e2eaff" class=""></path>
                                            <path fill="#ffffff" d="M23.136 5.91a.673.673 0 0 1-.667.674.674.674 0 0 1-.674-.674.672.672 0 0 1 1.341 0zM27.794 5.91a.472.472 0 0 1-.473.472h-3.045a.472.472 0 0 1-.472-.472.47.47 0 0 1 .472-.466h3.045a.47.47 0 0 1 .473.466z" opacity="1" data-original="#ffffff" class=""></path>
                                            <path fill="#e2eaff" d="M48.182 13.344v11.681c0 .504-.405.91-.909.91H35.587a.91.91 0 0 1-.91-.91V13.344c0-.504.41-.91.91-.91h11.686c.504 0 .91.406.91.91zM15.505 13.344v11.681c0 .504-.406.91-.91.91H2.91a.91.91 0 0 1-.909-.91V13.344c0-.504.41-.91.91-.91h11.685c.504 0 .91.406.91.91z" opacity="1" data-original="#e2eaff" class=""></path>
                                            <path fill="#234bba" d="M55.018 64.246h7.748V44.84l-10.195-1.652z" opacity="1" data-original="#234bba"></path>
                                            <path fill="#4d7cfe" d="M56.618 64.246h-8.803V44.84l10.723-1.652z" opacity="1" data-original="#4d7cfe"></path>
                                            <path fill="#fdbbad" d="M60.448 46.56a4.991 4.991 0 0 0 4.991-4.99v-6.146h-4.991z" opacity="1" data-original="#fdbbad"></path>
                                            <path fill="#f73731" d="M65.213 36.318c0 .135-5.139.135-5.139 0l-.731-10.35h1.148A5.509 5.509 0 0 1 66 31.477v4.053a.787.787 0 0 1-.787.788z" opacity="1" data-original="#f73731"></path>
                                            <path fill="#f73731" d="M47.763 48.096c.07 1.852 15.074 1.632 15.003-.22V29.343c0-1.863-1.47-3.374-3.284-3.374H50.16c-1.324 0-2.397 1.103-2.397 2.463z" opacity="1" data-original="#f73731"></path>
                                            <path fill="#fdbbad" d="m52.088 24.077.037.6.043.683.009.608h4.952v-3.995h-5.248l.122.769z" opacity="1" data-original="#fdbbad"></path>
                                            <path fill="#eca090" d="M54.908 23.166s-1.383 1.33-2.783 1.51l-.037-.598-.085-1.336-.122-.769h2.327z" opacity="1" data-original="#eca090"></path>
                                            <path fill="#fdbbad" d="M57.813 16.879v3.016a4.18 4.18 0 0 1-4.182 4.183 4.182 4.182 0 0 1-4.183-4.098v-3.101a4.184 4.184 0 0 1 7.14-2.958 4.166 4.166 0 0 1 1.225 2.958z" opacity="1" data-original="#fdbbad"></path>
                                            <path fill="#0e0f16" d="M57.946 22.534c1.285-1.45 3.083-4.88 3.083-6.624 0-2.58-2.95-3.576-4.681-3.576-1.73 0-3.357 3.38-3.357 5.961 0 .808.071 1.907.257 2.858.254 1.308 1.437 2.28 2.766 2.19.78-.053 1.523-.322 1.932-.81z" opacity="1" data-original="#0e0f16"></path>
                                            <path fill="#0e0f16" d="M52.991 16.978c-2.824 0-5.228-1.97-5.228-3.865 0-1.901 2.296-3.436 5.12-3.436 2.831 0 6.664 2.066 6.664 3.967 0 1.895-3.725 3.334-6.556 3.334z" opacity="1" data-original="#0e0f16"></path>
                                            <ellipse cx="52.768" cy="18.115" fill="#fdbbad" rx="1.1" ry="1.488" opacity="1" data-original="#fdbbad"></ellipse>
                                            <path fill="#0e0f16" d="m52.517 16.157-.636 3.154a.635.635 0 0 1-.636-.636v-2.518c0-.35.281-.636.636-.636.356 0 .636.286.636.636z" opacity="1" data-original="#0e0f16"></path>
                                            <path fill="#c61f17" d="M62.766 31.821h.446v4.5h-.446z" opacity="1" data-original="#c61f17"></path>
                                            <path fill="#fdbbad" d="M44.76 27.413c-.485.087-1.317.24-1.317.24l-7.71-5.895-2.279 3.565 6.769 8.366a3.308 3.308 0 0 0 3.162 1.042l2.088-.443z" opacity="1" data-original="#fdbbad"></path>
                                            <path fill="#f73731" d="m46.435 34.729-2.355.402c-.87.017-1.038-8.34-.168-8.358l.01-.005c.886-.163 4.332-.799 4.994-.799h1.517l.444 2.396a5.449 5.449 0 0 1-4.442 6.364z" opacity="1" data-original="#f73731"></path>
                                            <path fill="#c61f17" d="M50.877 28.365c.731 2.42-.727 5.19-3.114 5.96 2.242-1.34 3.297-3.537 3.114-5.96z" opacity="1" data-original="#c61f17"></path>
                                            <path fill="#fdbbad" d="m35.734 21.758-2.277 3.565-.608-.518a1.294 1.294 0 0 1-.343-1.51l.717-1.613-1.775-2.043a.525.525 0 0 1-.023-.661l.01-.012a.525.525 0 0 1 .8-.047 341.8 341.8 0 0 1 2.46 2.665l-.176-1.381a.5.5 0 0 1 .991-.13z" opacity="1" data-original="#fdbbad"></path>
                                            <path fill="#4d7cfe" d="m31.278 17.15-1.492 1.976a.207.207 0 0 1-.242.064l-.857-.36v5.363a.206.206 0 0 1-.205.206h-6.78a.206.206 0 0 1-.205-.206V18.83l-.856.36a.21.21 0 0 1-.245-.064l-1.492-1.976a.207.207 0 0 1 .057-.3l2.367-1.431a.19.19 0 0 1 .098-.027h1.79l.244.224c.924.845 2.34.845 3.263-.002l.242-.222h1.783c.04 0 .075.009.106.027l2.366 1.431c.106.064.13.203.058.3z" opacity="1" data-original="#4d7cfe"></path>
                                            <path fill="#f8c51a" d="M45.547 22.661h-3.098c-.53 0-1.01-.049-1.236-.409-.225-.357-1.363-2.664-1.976-2.46-.616.205-.514 2.87-.514 2.87h-.87s-.154-2.407-.514-3.661c-.358-1.254-.516-2.33.48-3.293 0 0 .495 0 1.067.617.515.558 1.215 2.11 1.788 2.676 1.47 1.454 2.87 1.507 2.87 1.507s.194.135 1.257.648c1.654.8.746 1.505.746 1.505z" opacity="1" data-original="#f8c51a"></path>
                                            <path fill="#1baa75" d="M13.09 15.792v6.765c0 .267-.169.479-.381.479h-2.513c-.168 0-.315-.136-.359-.343l-.99-4.285-.99 4.285c-.048.207-.195.343-.358.343H4.796c-.212 0-.381-.212-.381-.479v-6.765c0-.278.223-.5.5-.5h7.674c.278 0 .5.222.5.5z" opacity="1" data-original="#1baa75"></path>
                                            <path fill="#e2eaff" d="M36.382 33.562h-23.03a.682.682 0 0 1 0-1.364h23.03a.682.682 0 0 1 0 1.364z" opacity="1" data-original="#e2eaff" class=""></path>
                                            <path fill="#e8efff" d="M36.382 37.524h-23.03a.682.682 0 0 1 0-1.364h23.03a.682.682 0 0 1 0 1.364z" opacity="1" data-original="#e8efff"></path>
                                            <path fill="#e2eaff" d="M36.382 41.485h-23.03a.682.682 0 0 1 0-1.364h23.03a.682.682 0 0 1 0 1.364z" opacity="1" data-original="#e2eaff" class=""></path>
                                            <path fill="#1baa75" d="M34.027 49.743a4.528 4.528 0 0 1-1.32 3.198 4.528 4.528 0 0 1-3.197 1.319h-8.838a4.517 4.517 0 0 1 0-9.033h8.838a4.513 4.513 0 0 1 4.517 4.516z" opacity="1" data-original="#1baa75"></path>
                                            <path fill="#ffffff" d="M23.97 49.37h-1.196a.407.407 0 0 0-.294.122.406.406 0 0 0-.122.294c0 .112.042.214.122.293.079.08.18.122.294.122h.835v.832c-.548.265-1.247.268-1.697.009a1.293 1.293 0 0 1-.506-.523 1.624 1.624 0 0 1-.179-.77c0-.313.064-.585.188-.808.126-.223.293-.387.513-.502.385-.201.915-.22 1.327-.097.176.052.355.132.544.244a.44.44 0 0 0 .508-.076.415.415 0 0 0 .116-.291.42.42 0 0 0-.06-.219.361.361 0 0 0-.14-.141 3.234 3.234 0 0 0-.72-.34 2.887 2.887 0 0 0-.881-.123c-.42 0-.809.1-1.154.295a2.15 2.15 0 0 0-.826.835c-.2.356-.3.767-.3 1.223 0 .447.096.853.287 1.207.192.356.467.637.817.836.347.198.749.298 1.194.298.498 0 .991-.12 1.462-.355a.582.582 0 0 0 .327-.528V49.83a.45.45 0 0 0-.135-.326.451.451 0 0 0-.324-.133zM29.545 48.539a2.107 2.107 0 0 0-.804-.84c-.342-.201-.746-.303-1.199-.303s-.857.102-1.201.302a2.088 2.088 0 0 0-.804.838c-.186.349-.285.754-.293 1.21.008.45.107.856.293 1.205.188.356.458.637.804.838.344.2.748.301 1.201.301s.857-.101 1.2-.301c.343-.201.613-.484.803-.84.188-.352.287-.756.296-1.209a2.633 2.633 0 0 0-.296-1.201zM28.3 51.047c-.425.26-1.102.256-1.518 0a1.269 1.269 0 0 1-.482-.527c-.113-.228-.17-.488-.17-.777s.057-.549.17-.776c.112-.224.27-.397.482-.528a1.43 1.43 0 0 1 .76-.194c.292 0 .546.065.758.194.213.132.372.304.484.528.114.228.171.489.171.776s-.057.549-.17.776a1.261 1.261 0 0 1-.485.527z" opacity="1" data-original="#ffffff" class=""></path>
                                        </g>
                                    </svg>
                                </div>
                                <h4>E-Commerce</h4>
                                <p>We create secure, user-friendly e-commerce websites that make online selling easy, attract more customers, boost sales, and strengthen your brand’s online presence. Our high-performing websites ensure a smooth shopping experience on all devices best E-Commerce Website Development in Ahmedabad.</p>
                            </div>
                            <div class="big_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 68 68" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path fill="#4d5d77" d="M42.26 7.727v52.546a3.974 3.974 0 0 1-3.974 3.973H11.892a3.974 3.974 0 0 1-3.973-3.973V7.727a3.974 3.974 0 0 1 3.973-3.973h26.394a3.974 3.974 0 0 1 3.974 3.973z" opacity="1" data-original="#4d5d77" class=""></path>
                                        <path fill="#ffffff" d="M40.778 9.935v47.087a2.485 2.485 0 0 1-2.485 2.485H11.89a2.485 2.485 0 0 1-2.485-2.485V9.935a2.485 2.485 0 0 1 2.485-2.484h26.404a2.485 2.485 0 0 1 2.485 2.484z" opacity="1" data-original="#ffffff" class=""></path>
                                        <path fill="#e2eaff" d="M33.352 12.039v14.29a1.11 1.11 0 0 1-1.112 1.113H17.943c-.611 0-1.113-.495-1.113-1.112V12.039c0-.617.502-1.112 1.113-1.112H32.24a1.11 1.11 0 0 1 1.112 1.112z" opacity="1" data-original="#e2eaff" class=""></path>
                                        <path fill="#ffffff" d="M23.136 5.91a.673.673 0 0 1-.667.674.674.674 0 0 1-.674-.674.672.672 0 0 1 1.341 0zM27.794 5.91a.472.472 0 0 1-.473.472h-3.045a.472.472 0 0 1-.472-.472.47.47 0 0 1 .472-.466h3.045a.47.47 0 0 1 .473.466z" opacity="1" data-original="#ffffff" class=""></path>
                                        <path fill="#e2eaff" d="M48.182 13.344v11.681c0 .504-.405.91-.909.91H35.587a.91.91 0 0 1-.91-.91V13.344c0-.504.41-.91.91-.91h11.686c.504 0 .91.406.91.91zM15.505 13.344v11.681c0 .504-.406.91-.91.91H2.91a.91.91 0 0 1-.909-.91V13.344c0-.504.41-.91.91-.91h11.685c.504 0 .91.406.91.91z" opacity="1" data-original="#e2eaff" class=""></path>
                                        <path fill="#234bba" d="M55.018 64.246h7.748V44.84l-10.195-1.652z" opacity="1" data-original="#234bba"></path>
                                        <path fill="#4d7cfe" d="M56.618 64.246h-8.803V44.84l10.723-1.652z" opacity="1" data-original="#4d7cfe"></path>
                                        <path fill="#fdbbad" d="M60.448 46.56a4.991 4.991 0 0 0 4.991-4.99v-6.146h-4.991z" opacity="1" data-original="#fdbbad"></path>
                                        <path fill="#f73731" d="M65.213 36.318c0 .135-5.139.135-5.139 0l-.731-10.35h1.148A5.509 5.509 0 0 1 66 31.477v4.053a.787.787 0 0 1-.787.788z" opacity="1" data-original="#f73731"></path>
                                        <path fill="#f73731" d="M47.763 48.096c.07 1.852 15.074 1.632 15.003-.22V29.343c0-1.863-1.47-3.374-3.284-3.374H50.16c-1.324 0-2.397 1.103-2.397 2.463z" opacity="1" data-original="#f73731"></path>
                                        <path fill="#fdbbad" d="m52.088 24.077.037.6.043.683.009.608h4.952v-3.995h-5.248l.122.769z" opacity="1" data-original="#fdbbad"></path>
                                        <path fill="#eca090" d="M54.908 23.166s-1.383 1.33-2.783 1.51l-.037-.598-.085-1.336-.122-.769h2.327z" opacity="1" data-original="#eca090"></path>
                                        <path fill="#fdbbad" d="M57.813 16.879v3.016a4.18 4.18 0 0 1-4.182 4.183 4.182 4.182 0 0 1-4.183-4.098v-3.101a4.184 4.184 0 0 1 7.14-2.958 4.166 4.166 0 0 1 1.225 2.958z" opacity="1" data-original="#fdbbad"></path>
                                        <path fill="#0e0f16" d="M57.946 22.534c1.285-1.45 3.083-4.88 3.083-6.624 0-2.58-2.95-3.576-4.681-3.576-1.73 0-3.357 3.38-3.357 5.961 0 .808.071 1.907.257 2.858.254 1.308 1.437 2.28 2.766 2.19.78-.053 1.523-.322 1.932-.81z" opacity="1" data-original="#0e0f16"></path>
                                        <path fill="#0e0f16" d="M52.991 16.978c-2.824 0-5.228-1.97-5.228-3.865 0-1.901 2.296-3.436 5.12-3.436 2.831 0 6.664 2.066 6.664 3.967 0 1.895-3.725 3.334-6.556 3.334z" opacity="1" data-original="#0e0f16"></path>
                                        <ellipse cx="52.768" cy="18.115" fill="#fdbbad" rx="1.1" ry="1.488" opacity="1" data-original="#fdbbad"></ellipse>
                                        <path fill="#0e0f16" d="m52.517 16.157-.636 3.154a.635.635 0 0 1-.636-.636v-2.518c0-.35.281-.636.636-.636.356 0 .636.286.636.636z" opacity="1" data-original="#0e0f16"></path>
                                        <path fill="#c61f17" d="M62.766 31.821h.446v4.5h-.446z" opacity="1" data-original="#c61f17"></path>
                                        <path fill="#fdbbad" d="M44.76 27.413c-.485.087-1.317.24-1.317.24l-7.71-5.895-2.279 3.565 6.769 8.366a3.308 3.308 0 0 0 3.162 1.042l2.088-.443z" opacity="1" data-original="#fdbbad"></path>
                                        <path fill="#f73731" d="m46.435 34.729-2.355.402c-.87.017-1.038-8.34-.168-8.358l.01-.005c.886-.163 4.332-.799 4.994-.799h1.517l.444 2.396a5.449 5.449 0 0 1-4.442 6.364z" opacity="1" data-original="#f73731"></path>
                                        <path fill="#c61f17" d="M50.877 28.365c.731 2.42-.727 5.19-3.114 5.96 2.242-1.34 3.297-3.537 3.114-5.96z" opacity="1" data-original="#c61f17"></path>
                                        <path fill="#fdbbad" d="m35.734 21.758-2.277 3.565-.608-.518a1.294 1.294 0 0 1-.343-1.51l.717-1.613-1.775-2.043a.525.525 0 0 1-.023-.661l.01-.012a.525.525 0 0 1 .8-.047 341.8 341.8 0 0 1 2.46 2.665l-.176-1.381a.5.5 0 0 1 .991-.13z" opacity="1" data-original="#fdbbad"></path>
                                        <path fill="#4d7cfe" d="m31.278 17.15-1.492 1.976a.207.207 0 0 1-.242.064l-.857-.36v5.363a.206.206 0 0 1-.205.206h-6.78a.206.206 0 0 1-.205-.206V18.83l-.856.36a.21.21 0 0 1-.245-.064l-1.492-1.976a.207.207 0 0 1 .057-.3l2.367-1.431a.19.19 0 0 1 .098-.027h1.79l.244.224c.924.845 2.34.845 3.263-.002l.242-.222h1.783c.04 0 .075.009.106.027l2.366 1.431c.106.064.13.203.058.3z" opacity="1" data-original="#4d7cfe"></path>
                                        <path fill="#f8c51a" d="M45.547 22.661h-3.098c-.53 0-1.01-.049-1.236-.409-.225-.357-1.363-2.664-1.976-2.46-.616.205-.514 2.87-.514 2.87h-.87s-.154-2.407-.514-3.661c-.358-1.254-.516-2.33.48-3.293 0 0 .495 0 1.067.617.515.558 1.215 2.11 1.788 2.676 1.47 1.454 2.87 1.507 2.87 1.507s.194.135 1.257.648c1.654.8.746 1.505.746 1.505z" opacity="1" data-original="#f8c51a"></path>
                                        <path fill="#1baa75" d="M13.09 15.792v6.765c0 .267-.169.479-.381.479h-2.513c-.168 0-.315-.136-.359-.343l-.99-4.285-.99 4.285c-.048.207-.195.343-.358.343H4.796c-.212 0-.381-.212-.381-.479v-6.765c0-.278.223-.5.5-.5h7.674c.278 0 .5.222.5.5z" opacity="1" data-original="#1baa75"></path>
                                        <path fill="#e2eaff" d="M36.382 33.562h-23.03a.682.682 0 0 1 0-1.364h23.03a.682.682 0 0 1 0 1.364z" opacity="1" data-original="#e2eaff" class=""></path>
                                        <path fill="#e8efff" d="M36.382 37.524h-23.03a.682.682 0 0 1 0-1.364h23.03a.682.682 0 0 1 0 1.364z" opacity="1" data-original="#e8efff"></path>
                                        <path fill="#e2eaff" d="M36.382 41.485h-23.03a.682.682 0 0 1 0-1.364h23.03a.682.682 0 0 1 0 1.364z" opacity="1" data-original="#e2eaff" class=""></path>
                                        <path fill="#1baa75" d="M34.027 49.743a4.528 4.528 0 0 1-1.32 3.198 4.528 4.528 0 0 1-3.197 1.319h-8.838a4.517 4.517 0 0 1 0-9.033h8.838a4.513 4.513 0 0 1 4.517 4.516z" opacity="1" data-original="#1baa75"></path>
                                        <path fill="#ffffff" d="M23.97 49.37h-1.196a.407.407 0 0 0-.294.122.406.406 0 0 0-.122.294c0 .112.042.214.122.293.079.08.18.122.294.122h.835v.832c-.548.265-1.247.268-1.697.009a1.293 1.293 0 0 1-.506-.523 1.624 1.624 0 0 1-.179-.77c0-.313.064-.585.188-.808.126-.223.293-.387.513-.502.385-.201.915-.22 1.327-.097.176.052.355.132.544.244a.44.44 0 0 0 .508-.076.415.415 0 0 0 .116-.291.42.42 0 0 0-.06-.219.361.361 0 0 0-.14-.141 3.234 3.234 0 0 0-.72-.34 2.887 2.887 0 0 0-.881-.123c-.42 0-.809.1-1.154.295a2.15 2.15 0 0 0-.826.835c-.2.356-.3.767-.3 1.223 0 .447.096.853.287 1.207.192.356.467.637.817.836.347.198.749.298 1.194.298.498 0 .991-.12 1.462-.355a.582.582 0 0 0 .327-.528V49.83a.45.45 0 0 0-.135-.326.451.451 0 0 0-.324-.133zM29.545 48.539a2.107 2.107 0 0 0-.804-.84c-.342-.201-.746-.303-1.199-.303s-.857.102-1.201.302a2.088 2.088 0 0 0-.804.838c-.186.349-.285.754-.293 1.21.008.45.107.856.293 1.205.188.356.458.637.804.838.344.2.748.301 1.201.301s.857-.101 1.2-.301c.343-.201.613-.484.803-.84.188-.352.287-.756.296-1.209a2.633 2.633 0 0 0-.296-1.201zM28.3 51.047c-.425.26-1.102.256-1.518 0a1.269 1.269 0 0 1-.482-.527c-.113-.228-.17-.488-.17-.777s.057-.549.17-.776c.112-.224.27-.397.482-.528a1.43 1.43 0 0 1 .76-.194c.292 0 .546.065.758.194.213.132.372.304.484.528.114.228.171.489.171.776s-.057.549-.17.776a1.261 1.261 0 0 1-.485.527z" opacity="1" data-original="#ffffff" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="single_indutry_block">
                        <a href="javascript:void(0)">
                            <div class="inner_box">
                                <div class="box_icon mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <path fill="#688b96" d="M295.981 458.476H177.199l16.81-93.192h85.161z" opacity="1" data-original="#688b96"></path>
                                            <path fill="#557981" d="M279.17 365.284h-39.862l16.81 93.192h39.863z" opacity="1" data-original="#557981"></path>
                                            <path fill="#3c5959" d="M361.853 492.998H111.326c-5.699 0-10.319-4.62-10.319-10.319 0-21.561 17.479-39.04 39.04-39.04h193.086c21.561 0 39.04 17.479 39.04 39.04-.001 5.699-4.621 10.319-10.32 10.319z" opacity="1" data-original="#3c5959"></path>
                                            <path fill="#394949" d="M333.132 443.64h-29.287c15.862 0 28.721 12.859 28.721 28.721v20.637h29.286c5.699 0 10.319-4.62 10.319-10.319.001-21.56-17.478-39.039-39.039-39.039z" opacity="1" data-original="#394949"></path>
                                            <path fill="#e8f3ff" d="M453.535 388.185H19.644C8.795 388.185 0 379.39 0 368.54V38.646c0-10.849 8.795-19.644 19.644-19.644h433.891c10.849 0 19.644 8.795 19.644 19.644V368.54c0 10.85-8.795 19.645-19.644 19.645z" opacity="1" data-original="#e8f3ff" class=""></path>
                                            <path fill="#c1e2ff" d="M453.535 19.002h-19.637V368.54c0 10.849-8.795 19.644-19.644 19.644h39.282c10.849 0 19.644-8.795 19.644-19.644V38.646c-.001-10.849-8.796-19.644-19.645-19.644z" opacity="1" data-original="#c1e2ff"></path>
                                            <path fill="#3590bb" d="M57.187 253.424a7.7 7.7 0 0 1-5.463-2.263 7.725 7.725 0 0 1 0-10.927L174.259 117.7a7.727 7.727 0 0 1 10.927 0l84.42 84.42L394.249 77.474a7.727 7.727 0 1 1 10.928 10.927L275.068 218.509a7.729 7.729 0 0 1-10.928 0l-84.419-84.42L62.65 251.161a7.701 7.701 0 0 1-5.463 2.263z" opacity="1" data-original="#3590bb"></path>
                                            <path fill="#3c5959" d="M0 368.54c0 10.849 8.795 19.644 19.644 19.644h433.891c10.849 0 19.644-8.795 19.644-19.644v-36.727H0z" opacity="1" data-original="#3c5959"></path>
                                            <path fill="#394949" d="M433.897 368.54c0 10.849-8.795 19.644-19.644 19.644h39.282c3.39 0 6.58-.859 9.364-2.371a19.74 19.74 0 0 0 7.91-7.91 19.556 19.556 0 0 0 2.371-9.364v-36.727h-39.282v36.728z" opacity="1" data-original="#394949"></path>
                                            <path fill="#b3d8fb" d="m370.598 333.912 24.15-24.149 43.39 43.391-24.149 24.149z" opacity="1" data-original="#b3d8fb"></path>
                                            <circle cx="311.313" cy="250.391" r="112.076" fill="#69d8e4" opacity="1" data-original="#69d8e4"></circle>
                                            <path fill="#29d0df" d="M390.563 171.141c-26.898-26.898-64.066-37.259-98.881-31.096 21.836 3.865 42.748 14.226 59.619 31.096 43.768 43.769 43.768 114.732 0 158.5-16.871 16.871-37.782 27.231-59.619 31.096 34.816 6.162 71.983-4.198 98.881-31.096 43.769-43.768 43.769-114.731 0-158.5z" opacity="1" data-original="#29d0df"></path>
                                            <path fill="#fc5327" d="m510.435 424.413-25.1 25.1a5.343 5.343 0 0 1-7.555 0l-76.128-76.128a5.343 5.343 0 0 1 0-7.555l25.1-25.1a5.343 5.343 0 0 1 7.555 0l76.128 76.128a5.34 5.34 0 0 1 0 7.555z" opacity="1" data-original="#fc5327"></path>
                                            <g fill="#51be26">
                                                <circle cx="178.66" cy="124.225" r="22.513" fill="#51be26" opacity="1" data-original="#51be26"></circle>
                                                <circle cx="57.187" cy="245.698" r="22.513" fill="#51be26" opacity="1" data-original="#51be26"></circle>
                                                <circle cx="399.713" cy="84.897" r="22.513" fill="#51be26" opacity="1" data-original="#51be26"></circle>
                                            </g>
                                            <path fill="#ffffff" d="M314.522 232.484c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.895a7.5 7.5 0 0 0-7.5 7.5v51.962a7.5 7.5 0 0 0 7.5 7.5h21.895c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-14.395v-10.981h12.78c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-12.78v-10.981zM258.572 244.342c-6.28-2.316-12.138-4.836-14.102-5.694-1.613-1.411-1.184-4.742 2.657-5.898 6.873-2.073 13.349 2.995 13.562 3.165 7.62 6.307 17.17-5.162 9.607-11.52-.512-.43-12.687-10.469-27.496-6.007-17.954 5.408-17.954 27.937-5.135 33.654.305.136 7.554 3.363 15.716 6.374 11.586 4.272 4.852 11.27-1.958 11.27-4.95 0-9.704-1.985-12.716-5.31-6.658-7.347-17.783 2.714-11.115 10.072 5.895 6.506 14.582 10.237 23.832 10.237 24.338.001 33.996-30.44 7.148-40.343zM364.304 217.245c-18.594 0-33.721 15.127-33.721 33.72s15.127 33.72 33.721 33.72c18.593 0 33.72-15.127 33.72-33.72s-15.128-33.72-33.72-33.72zm0 52.441c-10.322 0-18.721-8.398-18.721-18.72s8.398-18.72 18.721-18.72 18.72 8.398 18.72 18.72-8.398 18.72-18.72 18.72z" opacity="1" data-original="#ffffff"></path>
                                        </g>
                                    </svg>
                                </div>
                                <h4>SEO</h4>
                                <p>We provide expert SEO services to improve your website’s visibility, enhance search engine rankings, and drive targeted organic traffic. Our strategies help attract the right audience, increase website traffic, and support your business’s growth and success online.</p>
                            </div>
                            <div class="big_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path fill="#688b96" d="M295.981 458.476H177.199l16.81-93.192h85.161z" opacity="1" data-original="#688b96"></path>
                                        <path fill="#557981" d="M279.17 365.284h-39.862l16.81 93.192h39.863z" opacity="1" data-original="#557981"></path>
                                        <path fill="#3c5959" d="M361.853 492.998H111.326c-5.699 0-10.319-4.62-10.319-10.319 0-21.561 17.479-39.04 39.04-39.04h193.086c21.561 0 39.04 17.479 39.04 39.04-.001 5.699-4.621 10.319-10.32 10.319z" opacity="1" data-original="#3c5959"></path>
                                        <path fill="#394949" d="M333.132 443.64h-29.287c15.862 0 28.721 12.859 28.721 28.721v20.637h29.286c5.699 0 10.319-4.62 10.319-10.319.001-21.56-17.478-39.039-39.039-39.039z" opacity="1" data-original="#394949"></path>
                                        <path fill="#e8f3ff" d="M453.535 388.185H19.644C8.795 388.185 0 379.39 0 368.54V38.646c0-10.849 8.795-19.644 19.644-19.644h433.891c10.849 0 19.644 8.795 19.644 19.644V368.54c0 10.85-8.795 19.645-19.644 19.645z" opacity="1" data-original="#e8f3ff" class=""></path>
                                        <path fill="#c1e2ff" d="M453.535 19.002h-19.637V368.54c0 10.849-8.795 19.644-19.644 19.644h39.282c10.849 0 19.644-8.795 19.644-19.644V38.646c-.001-10.849-8.796-19.644-19.645-19.644z" opacity="1" data-original="#c1e2ff"></path>
                                        <path fill="#3590bb" d="M57.187 253.424a7.7 7.7 0 0 1-5.463-2.263 7.725 7.725 0 0 1 0-10.927L174.259 117.7a7.727 7.727 0 0 1 10.927 0l84.42 84.42L394.249 77.474a7.727 7.727 0 1 1 10.928 10.927L275.068 218.509a7.729 7.729 0 0 1-10.928 0l-84.419-84.42L62.65 251.161a7.701 7.701 0 0 1-5.463 2.263z" opacity="1" data-original="#3590bb"></path>
                                        <path fill="#3c5959" d="M0 368.54c0 10.849 8.795 19.644 19.644 19.644h433.891c10.849 0 19.644-8.795 19.644-19.644v-36.727H0z" opacity="1" data-original="#3c5959"></path>
                                        <path fill="#394949" d="M433.897 368.54c0 10.849-8.795 19.644-19.644 19.644h39.282c3.39 0 6.58-.859 9.364-2.371a19.74 19.74 0 0 0 7.91-7.91 19.556 19.556 0 0 0 2.371-9.364v-36.727h-39.282v36.728z" opacity="1" data-original="#394949"></path>
                                        <path fill="#b3d8fb" d="m370.598 333.912 24.15-24.149 43.39 43.391-24.149 24.149z" opacity="1" data-original="#b3d8fb"></path>
                                        <circle cx="311.313" cy="250.391" r="112.076" fill="#69d8e4" opacity="1" data-original="#69d8e4"></circle>
                                        <path fill="#29d0df" d="M390.563 171.141c-26.898-26.898-64.066-37.259-98.881-31.096 21.836 3.865 42.748 14.226 59.619 31.096 43.768 43.769 43.768 114.732 0 158.5-16.871 16.871-37.782 27.231-59.619 31.096 34.816 6.162 71.983-4.198 98.881-31.096 43.769-43.768 43.769-114.731 0-158.5z" opacity="1" data-original="#29d0df"></path>
                                        <path fill="#fc5327" d="m510.435 424.413-25.1 25.1a5.343 5.343 0 0 1-7.555 0l-76.128-76.128a5.343 5.343 0 0 1 0-7.555l25.1-25.1a5.343 5.343 0 0 1 7.555 0l76.128 76.128a5.34 5.34 0 0 1 0 7.555z" opacity="1" data-original="#fc5327"></path>
                                        <g fill="#51be26">
                                            <circle cx="178.66" cy="124.225" r="22.513" fill="#51be26" opacity="1" data-original="#51be26"></circle>
                                            <circle cx="57.187" cy="245.698" r="22.513" fill="#51be26" opacity="1" data-original="#51be26"></circle>
                                            <circle cx="399.713" cy="84.897" r="22.513" fill="#51be26" opacity="1" data-original="#51be26"></circle>
                                        </g>
                                        <path fill="#ffffff" d="M314.522 232.484c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.895a7.5 7.5 0 0 0-7.5 7.5v51.962a7.5 7.5 0 0 0 7.5 7.5h21.895c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-14.395v-10.981h12.78c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-12.78v-10.981zM258.572 244.342c-6.28-2.316-12.138-4.836-14.102-5.694-1.613-1.411-1.184-4.742 2.657-5.898 6.873-2.073 13.349 2.995 13.562 3.165 7.62 6.307 17.17-5.162 9.607-11.52-.512-.43-12.687-10.469-27.496-6.007-17.954 5.408-17.954 27.937-5.135 33.654.305.136 7.554 3.363 15.716 6.374 11.586 4.272 4.852 11.27-1.958 11.27-4.95 0-9.704-1.985-12.716-5.31-6.658-7.347-17.783 2.714-11.115 10.072 5.895 6.506 14.582 10.237 23.832 10.237 24.338.001 33.996-30.44 7.148-40.343zM364.304 217.245c-18.594 0-33.721 15.127-33.721 33.72s15.127 33.72 33.721 33.72c18.593 0 33.72-15.127 33.72-33.72s-15.128-33.72-33.72-33.72zm0 52.441c-10.322 0-18.721-8.398-18.721-18.72s8.398-18.72 18.721-18.72 18.72 8.398 18.72 18.72-8.398 18.72-18.72 18.72z" opacity="1" data-original="#ffffff"></path>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="single_indutry_block">
                        <a href="javascript:void(0)">
                            <div class="inner_box">
                                <div class="box_icon mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 510 510" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <path d="M10 10h402v434H10z" style="" fill="#ffffff" data-original="#ffffff"></path>
                                            <path d="M10 10h402v434H10z" style="" fill="#ffffff" data-original="#ffffff"></path>
                                            <path d="M156.829 187.89c0-65.27 18.509-126.209 50.538-177.89H10v434h264.16c-71.85-62.016-117.331-153.75-117.331-256.11z" style="" fill="#d2dcfd" data-original="#d2dcfd" class=""></path>
                                            <path d="M10 10h402v88H168.93l-60.246-11.359L10 98z" style="" fill="#bc9af4" data-original="#bc9af4"></path>
                                            <path d="M207.367 10H10v88h158.93a336.311 336.311 0 0 1 38.437-88z" style="" fill="#6864f7" data-original="#6864f7"></path>
                                            <path d="M439.17 176.25 500 192.549 425.641 470.06 385.02 500l-20.209-46.239z" style="" fill="#fdcb50" data-original="#fdcb50"></path>
                                            <path d="M433.201 180.831h57.807v62.976h-57.807z" style="" transform="rotate(-75.001 462.114 212.326)" fill="#67ccd1" data-original="#67ccd1"></path>
                                            <circle cx="211" cy="228.245" r="80.998" style="" fill="#fd7da0" data-original="#fd7da0" class=""></circle>
                                            <circle cx="161.638" cy="313.742" r="80.998" style="" fill="#fdcb50" data-original="#fdcb50"></circle>
                                            <circle cx="260.362" cy="313.742" r="80.998" style="" fill="#b1d952" data-original="#b1d952" class=""></circle>
                                            <path d="M367.427 444H10V10h402v267.65" style="stroke-width:20;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#052a75" stroke-width="20" stroke-linejoin="round" stroke-miterlimit="10" data-original="#052a75" class=""></path>
                                            <path d="M59.052 54h0M103.052 54h0M147.052 54h0M362.948 54H213.227" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#ffffff"></path>
                                            <path d="M439.17 176.25 500 192.549 425.641 470.06 385.02 500l-20.209-46.239z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#052a75" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#052a75" class=""></path>
                                            <circle cx="211" cy="228.245" r="80.998" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#052a75" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#052a75" class=""></circle>
                                            <circle cx="161.638" cy="313.742" r="80.998" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#052a75" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#052a75" class=""></circle>
                                            <circle cx="260.362" cy="313.742" r="80.998" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#052a75" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#052a75" class=""></circle>
                                        </g>
                                    </svg>
                                </div>
                                <h4>Logo Design</h4>
                                <p>We design unique, memorable logos that perfectly represent your brand and make a lasting impression. Simple, eye-catching, and easy to recognize, our logos help your business stand out, build trust, and create a strong visual identity.</p>
                            </div>
                            <div class="big_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 510 510" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path d="M10 10h402v434H10z" style="" fill="#ffffff" data-original="#ffffff"></path>
                                        <path d="M10 10h402v434H10z" style="" fill="#ffffff" data-original="#ffffff"></path>
                                        <path d="M156.829 187.89c0-65.27 18.509-126.209 50.538-177.89H10v434h264.16c-71.85-62.016-117.331-153.75-117.331-256.11z" style="" fill="#d2dcfd" data-original="#d2dcfd" class=""></path>
                                        <path d="M10 10h402v88H168.93l-60.246-11.359L10 98z" style="" fill="#bc9af4" data-original="#bc9af4"></path>
                                        <path d="M207.367 10H10v88h158.93a336.311 336.311 0 0 1 38.437-88z" style="" fill="#6864f7" data-original="#6864f7"></path>
                                        <path d="M439.17 176.25 500 192.549 425.641 470.06 385.02 500l-20.209-46.239z" style="" fill="#fdcb50" data-original="#fdcb50"></path>
                                        <path d="M433.201 180.831h57.807v62.976h-57.807z" style="" transform="rotate(-75.001 462.114 212.326)" fill="#67ccd1" data-original="#67ccd1"></path>
                                        <circle cx="211" cy="228.245" r="80.998" style="" fill="#fd7da0" data-original="#fd7da0" class=""></circle>
                                        <circle cx="161.638" cy="313.742" r="80.998" style="" fill="#fdcb50" data-original="#fdcb50"></circle>
                                        <circle cx="260.362" cy="313.742" r="80.998" style="" fill="#b1d952" data-original="#b1d952" class=""></circle>
                                        <path d="M367.427 444H10V10h402v267.65" style="stroke-width:20;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#052a75" stroke-width="20" stroke-linejoin="round" stroke-miterlimit="10" data-original="#052a75" class=""></path>
                                        <path d="M59.052 54h0M103.052 54h0M147.052 54h0M362.948 54H213.227" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#ffffff"></path>
                                        <path d="M439.17 176.25 500 192.549 425.641 470.06 385.02 500l-20.209-46.239z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#052a75" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#052a75" class=""></path>
                                        <circle cx="211" cy="228.245" r="80.998" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#052a75" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#052a75" class=""></circle>
                                        <circle cx="161.638" cy="313.742" r="80.998" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#052a75" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#052a75" class=""></circle>
                                        <circle cx="260.362" cy="313.742" r="80.998" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#052a75" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#052a75" class=""></circle>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp">
                    <div class="single_indutry_block">
                        <a href="javascript:void(0)">
                            <div class="inner_box">
                                <div class="box_icon mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <linearGradient id="a" x1="250.859" x2="250.859" y1="36.314" y2="498.384" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#a03a8d"></stop>
                                                <stop offset="1" stop-color="#1f3c8d"></stop>
                                            </linearGradient>
                                            <path fill="url(#a)" fill-rule="evenodd" d="M155.02 202.57h136.74c14.54 0 26.38-11.82 26.38-26.36V62.68c0-14.54-11.84-26.36-26.38-26.36H76.75c-14.54 0-26.38 11.83-26.38 26.36v113.54c0 14.53 11.84 26.36 26.38 26.36h10.98c3.31 0 6 2.69 6 6v41.55l57.53-46.23a5.951 5.951 0 0 1 3.76-1.33zM74.89 498.38c-3.31 0-6-2.69-6-6s2.69-6 6-6h30.43v-70.81h43.44v70.81h45.28V353.73h43.44v132.65h45.24v-93.54h43.44v93.54h45.28V322.51h43.44v163.87h30.43c3.31 0 6 2.69 6 6s-2.69 6-6 6zm52.16-178.95c6.04 0 11.64 1.93 16.21 5.2l48.22-43.68c-2.37-4.1-3.72-8.85-3.72-13.91 0-15.44 12.58-28 28.01-28s27.97 12.56 27.97 28c0 3.13-.53 6.13-1.47 8.94l41.85 25.16c5.14-5.4 12.33-8.78 20.33-8.78 5.88 0 11.35 1.82 15.84 4.92l48.83-45.87c-2.49-4.2-3.96-9.1-3.96-14.34 0-15.44 12.58-28 28.01-28s28.01 12.56 28.01 28-12.58 28-28.01 28c-5.88 0-11.31-1.82-15.8-4.92l-48.88 45.87c2.53 4.2 3.96 9.1 3.96 14.34 0 15.44-12.58 28-28.01 28s-27.97-12.56-27.97-28c0-3.12.53-6.13 1.47-8.94l-41.85-25.16c-5.14 5.4-12.33 8.78-20.33 8.78-6.08 0-11.68-1.93-16.25-5.2l-48.18 43.68c2.37 4.1 3.72 8.85 3.72 13.91 0 15.44-12.58 28-28.01 28s-28.01-12.56-28.01-28c.01-15.44 12.59-28 28.02-28zm164.72-104.86c18.7 0 34.3-13.42 37.69-31.13H448.8v245.09c0 10.83-8.82 19.64-19.64 19.64h-2.25V316.51c0-3.31-2.69-6-6-6h-55.45c-3.31 0-6 2.69-6 6v131.67h-21.27v-61.33c0-3.32-2.69-6-6-6h-55.45c-3.31 0-6 2.69-6 6v61.33h-21.23V347.73c0-3.31-2.69-6-6-6h-55.45c-3.31 0-6 2.69-6 6v100.44h-21.27v-38.6c0-3.32-2.69-6.01-6-6.01H99.33c-3.31 0-6 2.69-6 6.01v38.6h-2.25c-10.82 0-19.64-8.81-19.64-19.64V214.2c1.76.24 3.51.38 5.31.38h4.98v48.07c0 2.31 1.35 4.41 3.39 5.41.86.4 1.71.59 2.61.59 1.35 0 2.69-.45 3.76-1.32l65.62-52.75h134.66zM143.06 347.43c0-8.82-7.19-16-16.01-16s-16.01 7.18-16.01 16 7.19 16 16.01 16 16.01-7.18 16.01-16zm72.72-64.39c8.82 0 16.01-7.18 16.01-16s-7.19-16-16.01-16-16.01 7.18-16.01 16 7.19 16 16.01 16zm104.69 37.32c0-8.82-7.15-16-16.01-16-8.82 0-16.01 7.18-16.01 16s7.19 16 16.01 16c8.86 0 16.01-7.17 16.01-16zm72.72-99.29c-8.82 0-16.01 7.18-16.01 16s7.19 16 16.01 16 16.01-7.18 16.01-16-7.19-16-16.01-16zm-63.08-104.11v54.48h118.7V136.6c0-10.83-8.82-19.64-19.64-19.64zm-165.25-3.51V91.13h14.74c6.12 0 11.15 5.01 11.15 11.16s-5.02 11.16-11.15 11.16zm26.5 42.99-15.48-30.99h-11.02v28.31c0 3.31-2.69 6-6 6s-6-2.69-6-6V85.14c0-3.31 2.69-6 6-6h20.74c12.74 0 23.15 10.39 23.15 23.16 0 9.64-5.92 17.92-14.33 21.4l13.68 27.38c1.51 2.96.29 6.57-2.65 8.05-.9.43-1.8.63-2.69.63-2.21-.01-4.34-1.22-5.4-3.32zm29.15-2.69V85.14c0-2.63 1.67-4.95 4.21-5.73 2.49-.78 5.23.16 6.7 2.32l27.03 39.17 27.03-39.17c1.51-2.16 4.25-3.1 6.74-2.32s4.21 3.1 4.21 5.73v68.62c0 3.31-2.65 6-6 6-3.31 0-6-2.69-6-6V104.4l-21.03 30.48c-1.1 1.62-2.94 2.59-4.94 2.59-1.96 0-3.8-.97-4.94-2.59l-21.03-30.48v49.36c0 3.31-2.65 6-6 6a5.99 5.99 0 0 1-5.98-6.01zm-110.12 6c-21.15 0-38.34-17.19-38.34-38.33v-3.96c0-21.13 17.19-38.33 38.34-38.33h.57c7.84 0 15.43 2.39 21.89 6.9a5.963 5.963 0 0 1 1.47 8.36c-1.88 2.72-5.63 3.38-8.33 1.48-4.45-3.1-9.64-4.74-15.03-4.74h-.57c-14.54 0-26.34 11.81-26.34 26.33v3.96c0 14.52 11.8 26.33 26.34 26.33h.57c5.39 0 10.58-1.64 15.03-4.74 2.69-1.9 6.45-1.24 8.33 1.48a5.951 5.951 0 0 1-1.47 8.35 38.02 38.02 0 0 1-21.89 6.9h-.57z" clip-rule="evenodd" opacity="1" data-original="url(#a)" class=""></path>
                                        </g>
                                    </svg>
                                </div>
                                <h4>Custome Software</h4>
                                <p><?php echo Company_Name; ?> offers custom software and website development tailored to your business needs, with affordable, SEO-friendly solutions. From E-commerce to CRM systems, we create secure, scalable platforms to help your business grow.</p>
                            </div>
                            <div class="big_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <linearGradient id="a" x1="250.859" x2="250.859" y1="36.314" y2="498.384" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#a03a8d"></stop>
                                            <stop offset="1" stop-color="#1f3c8d"></stop>
                                        </linearGradient>
                                        <path fill="url(#a)" fill-rule="evenodd" d="M155.02 202.57h136.74c14.54 0 26.38-11.82 26.38-26.36V62.68c0-14.54-11.84-26.36-26.38-26.36H76.75c-14.54 0-26.38 11.83-26.38 26.36v113.54c0 14.53 11.84 26.36 26.38 26.36h10.98c3.31 0 6 2.69 6 6v41.55l57.53-46.23a5.951 5.951 0 0 1 3.76-1.33zM74.89 498.38c-3.31 0-6-2.69-6-6s2.69-6 6-6h30.43v-70.81h43.44v70.81h45.28V353.73h43.44v132.65h45.24v-93.54h43.44v93.54h45.28V322.51h43.44v163.87h30.43c3.31 0 6 2.69 6 6s-2.69 6-6 6zm52.16-178.95c6.04 0 11.64 1.93 16.21 5.2l48.22-43.68c-2.37-4.1-3.72-8.85-3.72-13.91 0-15.44 12.58-28 28.01-28s27.97 12.56 27.97 28c0 3.13-.53 6.13-1.47 8.94l41.85 25.16c5.14-5.4 12.33-8.78 20.33-8.78 5.88 0 11.35 1.82 15.84 4.92l48.83-45.87c-2.49-4.2-3.96-9.1-3.96-14.34 0-15.44 12.58-28 28.01-28s28.01 12.56 28.01 28-12.58 28-28.01 28c-5.88 0-11.31-1.82-15.8-4.92l-48.88 45.87c2.53 4.2 3.96 9.1 3.96 14.34 0 15.44-12.58 28-28.01 28s-27.97-12.56-27.97-28c0-3.12.53-6.13 1.47-8.94l-41.85-25.16c-5.14 5.4-12.33 8.78-20.33 8.78-6.08 0-11.68-1.93-16.25-5.2l-48.18 43.68c2.37 4.1 3.72 8.85 3.72 13.91 0 15.44-12.58 28-28.01 28s-28.01-12.56-28.01-28c.01-15.44 12.59-28 28.02-28zm164.72-104.86c18.7 0 34.3-13.42 37.69-31.13H448.8v245.09c0 10.83-8.82 19.64-19.64 19.64h-2.25V316.51c0-3.31-2.69-6-6-6h-55.45c-3.31 0-6 2.69-6 6v131.67h-21.27v-61.33c0-3.32-2.69-6-6-6h-55.45c-3.31 0-6 2.69-6 6v61.33h-21.23V347.73c0-3.31-2.69-6-6-6h-55.45c-3.31 0-6 2.69-6 6v100.44h-21.27v-38.6c0-3.32-2.69-6.01-6-6.01H99.33c-3.31 0-6 2.69-6 6.01v38.6h-2.25c-10.82 0-19.64-8.81-19.64-19.64V214.2c1.76.24 3.51.38 5.31.38h4.98v48.07c0 2.31 1.35 4.41 3.39 5.41.86.4 1.71.59 2.61.59 1.35 0 2.69-.45 3.76-1.32l65.62-52.75h134.66zM143.06 347.43c0-8.82-7.19-16-16.01-16s-16.01 7.18-16.01 16 7.19 16 16.01 16 16.01-7.18 16.01-16zm72.72-64.39c8.82 0 16.01-7.18 16.01-16s-7.19-16-16.01-16-16.01 7.18-16.01 16 7.19 16 16.01 16zm104.69 37.32c0-8.82-7.15-16-16.01-16-8.82 0-16.01 7.18-16.01 16s7.19 16 16.01 16c8.86 0 16.01-7.17 16.01-16zm72.72-99.29c-8.82 0-16.01 7.18-16.01 16s7.19 16 16.01 16 16.01-7.18 16.01-16-7.19-16-16.01-16zm-63.08-104.11v54.48h118.7V136.6c0-10.83-8.82-19.64-19.64-19.64zm-165.25-3.51V91.13h14.74c6.12 0 11.15 5.01 11.15 11.16s-5.02 11.16-11.15 11.16zm26.5 42.99-15.48-30.99h-11.02v28.31c0 3.31-2.69 6-6 6s-6-2.69-6-6V85.14c0-3.31 2.69-6 6-6h20.74c12.74 0 23.15 10.39 23.15 23.16 0 9.64-5.92 17.92-14.33 21.4l13.68 27.38c1.51 2.96.29 6.57-2.65 8.05-.9.43-1.8.63-2.69.63-2.21-.01-4.34-1.22-5.4-3.32zm29.15-2.69V85.14c0-2.63 1.67-4.95 4.21-5.73 2.49-.78 5.23.16 6.7 2.32l27.03 39.17 27.03-39.17c1.51-2.16 4.25-3.1 6.74-2.32s4.21 3.1 4.21 5.73v68.62c0 3.31-2.65 6-6 6-3.31 0-6-2.69-6-6V104.4l-21.03 30.48c-1.1 1.62-2.94 2.59-4.94 2.59-1.96 0-3.8-.97-4.94-2.59l-21.03-30.48v49.36c0 3.31-2.65 6-6 6a5.99 5.99 0 0 1-5.98-6.01zm-110.12 6c-21.15 0-38.34-17.19-38.34-38.33v-3.96c0-21.13 17.19-38.33 38.34-38.33h.57c7.84 0 15.43 2.39 21.89 6.9a5.963 5.963 0 0 1 1.47 8.36c-1.88 2.72-5.63 3.38-8.33 1.48-4.45-3.1-9.64-4.74-15.03-4.74h-.57c-14.54 0-26.34 11.81-26.34 26.33v3.96c0 14.52 11.8 26.33 26.34 26.33h.57c5.39 0 10.58-1.64 15.03-4.74 2.69-1.9 6.45-1.24 8.33 1.48a5.951 5.951 0 0 1-1.47 8.35 38.02 38.02 0 0 1-21.89 6.9h-.57z" clip-rule="evenodd" opacity="1" data-original="url(#a)" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>


                <!-- <div class="col-md-4">
                    <div class="single_indutry_block">
                        <a href="/real-estate-digital-marketing-agency">
                            <div class="inner_box">
                                <div class="box_icon mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <path fill="#2d4d83" d="M54 45.683A12 12 0 0 1 62 57v5H2v-5a12 12 0 0 1 8-11.317" opacity="1" data-original="#2d4d83" class=""></path>
                                            <path fill="#fadfb2" d="M24.15 37A27.244 27.244 0 0 1 20 22.546V19l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028v4.518A27.236 27.236 0 0 1 39.849 37" opacity="1" data-original="#fadfb2" class=""></path>
                                            <path fill="#f5cf88" d="M21.048 30.028A27.221 27.221 0 0 1 20 22.546V22h-1.3a2.7 2.7 0 0 0-2.7 2.7 2.7 2.7 0 0 0 1.014 2.109l4.034 3.217zM43 30l3.986-3.189A2.7 2.7 0 0 0 48 24.7a2.7 2.7 0 0 0-2.7-2.7H44v.546a27.219 27.219 0 0 1-1.037 7.444z" opacity="1" data-original="#f5cf88" class=""></path>
                                            <path fill="#976947" d="m44 22 2.711-7.455a9.348 9.348 0 0 0-.243-6.992A9.35 9.35 0 0 0 37.924 2h-8.49A32.9 32.9 0 0 0 12 7l2.411.8a3.567 3.567 0 0 1 2.189 4.713 3.571 3.571 0 0 0 .121 2.92L20 22v-3l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028z" opacity="1" data-original="#976947"></path>
                                            <path fill="#f2f0eb" d="M24 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4zM34 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4z" opacity="1" data-original="#f2f0eb"></path>
                                            <path fill="#a8b0bc" d="M30 23h4v2h-4z" opacity="1" data-original="#a8b0bc"></path>
                                            <path fill="#d5cec2" d="M10 62V41a4 4 0 0 1 4-4h36a4 4 0 0 1 4 4v21" opacity="1" data-original="#d5cec2" class=""></path>
                                            <circle cx="32" cy="54" r="3" fill="#e7e4dd" opacity="1" data-original="#e7e4dd"></circle>
                                            <g fill="#c66b60">
                                                <path d="m25.292 48.707-4-4a1 1 0 0 1 0-1.415l4-4 1.415 1.415L23.414 44l3.293 3.292zM38.707 48.707l-1.415-1.415L40.585 44l-3.293-3.293 1.415-1.415 4 4a1 1 0 0 1 0 1.415zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#c66b60" opacity="1" data-original="#c66b60"></path>
                                            </g>
                                            <path d="M63 57a13.019 13.019 0 0 0-8-11.994V41a5.005 5.005 0 0 0-5-5h-8.418a28.18 28.18 0 0 0 2.226-5.367l3.8-3.042a3.694 3.694 0 0 0-2.188-6.579l2.228-6.126A10.349 10.349 0 0 0 37.923 1h-8.489a33.87 33.87 0 0 0-17.965 5.151 1 1 0 0 0 .214 1.8l2.411.8a2.569 2.569 0 0 1 1.572 3.39 4.569 4.569 0 0 0 .156 3.738L18.4 21.03a3.689 3.689 0 0 0-2.008 6.562l3.8 3.041A28.187 28.187 0 0 0 22.418 36H14a5.005 5.005 0 0 0-5 5v4.005A13.019 13.019 0 0 0 1 57v5a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1zM40 21h-6a1 1 0 0 0-1 1v1h-2v-1a1 1 0 0 0-1-1h-9v-1.465l6.242-4.162A8.154 8.154 0 0 1 31.779 14a10.217 10.217 0 0 0 6.36-2.231l1.633-1.308 1.716 2.574A8.968 8.968 0 0 1 43 18.027V21zm-1 2v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm-10 0v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm18 1.7a1.693 1.693 0 0 1-.638 1.329l-1.813 1.45A28.152 28.152 0 0 0 44.983 23h.317a1.7 1.7 0 0 1 1.7 1.7zM17.523 12.883a4.568 4.568 0 0 0-2.8-6.029l-.3-.1A31.863 31.863 0 0 1 29.434 3h8.489a8.349 8.349 0 0 1 7.848 11.2l-.87 2.391a10.969 10.969 0 0 0-1.749-4.669l-2.321-3.478a1 1 0 0 0-.678-.433 1.008 1.008 0 0 0-.778.207l-2.485 1.989A8.215 8.215 0 0 1 31.779 12a10.149 10.149 0 0 0-5.647 1.709l-6.687 4.458a.961.961 0 0 0-.17.147l-1.665-3.329a2.573 2.573 0 0 1-.087-2.102zm.115 13.147A1.7 1.7 0 0 1 18.7 23h.314a28.386 28.386 0 0 0 .435 4.48zM21.015 23H23v3a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-1h2v1a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-3h1.984a26.2 26.2 0 0 1-3.71 13H24.726a26.2 26.2 0 0 1-3.711-13zM14 38h36a3 3 0 0 1 3 3v20H11V41a3 3 0 0 1 3-3zM3 57a11.019 11.019 0 0 1 6-9.793V61H3zm58 4h-6V47.206A11.02 11.02 0 0 1 61 57z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                            <path d="M32 58a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm0-6a2 2 0 1 1-2 2 2 2 0 0 1 2-2zM25.292 48.707l1.415-1.415L23.414 44l3.293-3.293-1.415-1.415-4 4a1 1 0 0 0 0 1.415zM38.707 48.707l4-4a1 1 0 0 0 0-1.415l-4-4-1.415 1.415L40.585 44l-3.293 3.292zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                </div>
                                <h4>Web Design</h4>
                                <p>The real estate sector is in a state of chaos due to economic uncertainty. There are a variety of problems being faced by real estate companies nowadays.</p>
                            </div>
                            <div class="big_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path fill="#2d4d83" d="M54 45.683A12 12 0 0 1 62 57v5H2v-5a12 12 0 0 1 8-11.317" opacity="1" data-original="#2d4d83" class=""></path>
                                        <path fill="#fadfb2" d="M24.15 37A27.244 27.244 0 0 1 20 22.546V19l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028v4.518A27.236 27.236 0 0 1 39.849 37" opacity="1" data-original="#fadfb2" class=""></path>
                                        <path fill="#f5cf88" d="M21.048 30.028A27.221 27.221 0 0 1 20 22.546V22h-1.3a2.7 2.7 0 0 0-2.7 2.7 2.7 2.7 0 0 0 1.014 2.109l4.034 3.217zM43 30l3.986-3.189A2.7 2.7 0 0 0 48 24.7a2.7 2.7 0 0 0-2.7-2.7H44v.546a27.219 27.219 0 0 1-1.037 7.444z" opacity="1" data-original="#f5cf88" class=""></path>
                                        <path fill="#976947" d="m44 22 2.711-7.455a9.348 9.348 0 0 0-.243-6.992A9.35 9.35 0 0 0 37.924 2h-8.49A32.9 32.9 0 0 0 12 7l2.411.8a3.567 3.567 0 0 1 2.189 4.713 3.571 3.571 0 0 0 .121 2.92L20 22v-3l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028z" opacity="1" data-original="#976947"></path>
                                        <path fill="#f2f0eb" d="M24 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4zM34 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4z" opacity="1" data-original="#f2f0eb"></path>
                                        <path fill="#a8b0bc" d="M30 23h4v2h-4z" opacity="1" data-original="#a8b0bc"></path>
                                        <path fill="#d5cec2" d="M10 62V41a4 4 0 0 1 4-4h36a4 4 0 0 1 4 4v21" opacity="1" data-original="#d5cec2" class=""></path>
                                        <circle cx="32" cy="54" r="3" fill="#e7e4dd" opacity="1" data-original="#e7e4dd"></circle>
                                        <g fill="#c66b60">
                                            <path d="m25.292 48.707-4-4a1 1 0 0 1 0-1.415l4-4 1.415 1.415L23.414 44l3.293 3.292zM38.707 48.707l-1.415-1.415L40.585 44l-3.293-3.293 1.415-1.415 4 4a1 1 0 0 1 0 1.415zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#c66b60" opacity="1" data-original="#c66b60"></path>
                                        </g>
                                        <path d="M63 57a13.019 13.019 0 0 0-8-11.994V41a5.005 5.005 0 0 0-5-5h-8.418a28.18 28.18 0 0 0 2.226-5.367l3.8-3.042a3.694 3.694 0 0 0-2.188-6.579l2.228-6.126A10.349 10.349 0 0 0 37.923 1h-8.489a33.87 33.87 0 0 0-17.965 5.151 1 1 0 0 0 .214 1.8l2.411.8a2.569 2.569 0 0 1 1.572 3.39 4.569 4.569 0 0 0 .156 3.738L18.4 21.03a3.689 3.689 0 0 0-2.008 6.562l3.8 3.041A28.187 28.187 0 0 0 22.418 36H14a5.005 5.005 0 0 0-5 5v4.005A13.019 13.019 0 0 0 1 57v5a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1zM40 21h-6a1 1 0 0 0-1 1v1h-2v-1a1 1 0 0 0-1-1h-9v-1.465l6.242-4.162A8.154 8.154 0 0 1 31.779 14a10.217 10.217 0 0 0 6.36-2.231l1.633-1.308 1.716 2.574A8.968 8.968 0 0 1 43 18.027V21zm-1 2v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm-10 0v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm18 1.7a1.693 1.693 0 0 1-.638 1.329l-1.813 1.45A28.152 28.152 0 0 0 44.983 23h.317a1.7 1.7 0 0 1 1.7 1.7zM17.523 12.883a4.568 4.568 0 0 0-2.8-6.029l-.3-.1A31.863 31.863 0 0 1 29.434 3h8.489a8.349 8.349 0 0 1 7.848 11.2l-.87 2.391a10.969 10.969 0 0 0-1.749-4.669l-2.321-3.478a1 1 0 0 0-.678-.433 1.008 1.008 0 0 0-.778.207l-2.485 1.989A8.215 8.215 0 0 1 31.779 12a10.149 10.149 0 0 0-5.647 1.709l-6.687 4.458a.961.961 0 0 0-.17.147l-1.665-3.329a2.573 2.573 0 0 1-.087-2.102zm.115 13.147A1.7 1.7 0 0 1 18.7 23h.314a28.386 28.386 0 0 0 .435 4.48zM21.015 23H23v3a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-1h2v1a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-3h1.984a26.2 26.2 0 0 1-3.71 13H24.726a26.2 26.2 0 0 1-3.711-13zM14 38h36a3 3 0 0 1 3 3v20H11V41a3 3 0 0 1 3-3zM3 57a11.019 11.019 0 0 1 6-9.793V61H3zm58 4h-6V47.206A11.02 11.02 0 0 1 61 57z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M32 58a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm0-6a2 2 0 1 1-2 2 2 2 0 0 1 2-2zM25.292 48.707l1.415-1.415L23.414 44l3.293-3.293-1.415-1.415-4 4a1 1 0 0 0 0 1.415zM38.707 48.707l4-4a1 1 0 0 0 0-1.415l-4-4-1.415 1.415L40.585 44l-3.293 3.292zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div> -->
                <!-- <div class="col-md-4">
                    <div class="single_indutry_block">
                        <a href="/real-estate-digital-marketing-agency">
                            <div class="inner_box">
                                <div class="box_icon mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <path fill="#2d4d83" d="M54 45.683A12 12 0 0 1 62 57v5H2v-5a12 12 0 0 1 8-11.317" opacity="1" data-original="#2d4d83" class=""></path>
                                            <path fill="#fadfb2" d="M24.15 37A27.244 27.244 0 0 1 20 22.546V19l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028v4.518A27.236 27.236 0 0 1 39.849 37" opacity="1" data-original="#fadfb2" class=""></path>
                                            <path fill="#f5cf88" d="M21.048 30.028A27.221 27.221 0 0 1 20 22.546V22h-1.3a2.7 2.7 0 0 0-2.7 2.7 2.7 2.7 0 0 0 1.014 2.109l4.034 3.217zM43 30l3.986-3.189A2.7 2.7 0 0 0 48 24.7a2.7 2.7 0 0 0-2.7-2.7H44v.546a27.219 27.219 0 0 1-1.037 7.444z" opacity="1" data-original="#f5cf88" class=""></path>
                                            <path fill="#976947" d="m44 22 2.711-7.455a9.348 9.348 0 0 0-.243-6.992A9.35 9.35 0 0 0 37.924 2h-8.49A32.9 32.9 0 0 0 12 7l2.411.8a3.567 3.567 0 0 1 2.189 4.713 3.571 3.571 0 0 0 .121 2.92L20 22v-3l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028z" opacity="1" data-original="#976947"></path>
                                            <path fill="#f2f0eb" d="M24 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4zM34 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4z" opacity="1" data-original="#f2f0eb"></path>
                                            <path fill="#a8b0bc" d="M30 23h4v2h-4z" opacity="1" data-original="#a8b0bc"></path>
                                            <path fill="#d5cec2" d="M10 62V41a4 4 0 0 1 4-4h36a4 4 0 0 1 4 4v21" opacity="1" data-original="#d5cec2" class=""></path>
                                            <circle cx="32" cy="54" r="3" fill="#e7e4dd" opacity="1" data-original="#e7e4dd"></circle>
                                            <g fill="#c66b60">
                                                <path d="m25.292 48.707-4-4a1 1 0 0 1 0-1.415l4-4 1.415 1.415L23.414 44l3.293 3.292zM38.707 48.707l-1.415-1.415L40.585 44l-3.293-3.293 1.415-1.415 4 4a1 1 0 0 1 0 1.415zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#c66b60" opacity="1" data-original="#c66b60"></path>
                                            </g>
                                            <path d="M63 57a13.019 13.019 0 0 0-8-11.994V41a5.005 5.005 0 0 0-5-5h-8.418a28.18 28.18 0 0 0 2.226-5.367l3.8-3.042a3.694 3.694 0 0 0-2.188-6.579l2.228-6.126A10.349 10.349 0 0 0 37.923 1h-8.489a33.87 33.87 0 0 0-17.965 5.151 1 1 0 0 0 .214 1.8l2.411.8a2.569 2.569 0 0 1 1.572 3.39 4.569 4.569 0 0 0 .156 3.738L18.4 21.03a3.689 3.689 0 0 0-2.008 6.562l3.8 3.041A28.187 28.187 0 0 0 22.418 36H14a5.005 5.005 0 0 0-5 5v4.005A13.019 13.019 0 0 0 1 57v5a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1zM40 21h-6a1 1 0 0 0-1 1v1h-2v-1a1 1 0 0 0-1-1h-9v-1.465l6.242-4.162A8.154 8.154 0 0 1 31.779 14a10.217 10.217 0 0 0 6.36-2.231l1.633-1.308 1.716 2.574A8.968 8.968 0 0 1 43 18.027V21zm-1 2v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm-10 0v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm18 1.7a1.693 1.693 0 0 1-.638 1.329l-1.813 1.45A28.152 28.152 0 0 0 44.983 23h.317a1.7 1.7 0 0 1 1.7 1.7zM17.523 12.883a4.568 4.568 0 0 0-2.8-6.029l-.3-.1A31.863 31.863 0 0 1 29.434 3h8.489a8.349 8.349 0 0 1 7.848 11.2l-.87 2.391a10.969 10.969 0 0 0-1.749-4.669l-2.321-3.478a1 1 0 0 0-.678-.433 1.008 1.008 0 0 0-.778.207l-2.485 1.989A8.215 8.215 0 0 1 31.779 12a10.149 10.149 0 0 0-5.647 1.709l-6.687 4.458a.961.961 0 0 0-.17.147l-1.665-3.329a2.573 2.573 0 0 1-.087-2.102zm.115 13.147A1.7 1.7 0 0 1 18.7 23h.314a28.386 28.386 0 0 0 .435 4.48zM21.015 23H23v3a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-1h2v1a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-3h1.984a26.2 26.2 0 0 1-3.71 13H24.726a26.2 26.2 0 0 1-3.711-13zM14 38h36a3 3 0 0 1 3 3v20H11V41a3 3 0 0 1 3-3zM3 57a11.019 11.019 0 0 1 6-9.793V61H3zm58 4h-6V47.206A11.02 11.02 0 0 1 61 57z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                            <path d="M32 58a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm0-6a2 2 0 1 1-2 2 2 2 0 0 1 2-2zM25.292 48.707l1.415-1.415L23.414 44l3.293-3.293-1.415-1.415-4 4a1 1 0 0 0 0 1.415zM38.707 48.707l4-4a1 1 0 0 0 0-1.415l-4-4-1.415 1.415L40.585 44l-3.293 3.292zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                </div>
                                <h4>Web Design</h4>
                                <p>The real estate sector is in a state of chaos due to economic uncertainty. There are a variety of problems being faced by real estate companies nowadays.</p>
                            </div>
                            <div class="big_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path fill="#2d4d83" d="M54 45.683A12 12 0 0 1 62 57v5H2v-5a12 12 0 0 1 8-11.317" opacity="1" data-original="#2d4d83" class=""></path>
                                        <path fill="#fadfb2" d="M24.15 37A27.244 27.244 0 0 1 20 22.546V19l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028v4.518A27.236 27.236 0 0 1 39.849 37" opacity="1" data-original="#fadfb2" class=""></path>
                                        <path fill="#f5cf88" d="M21.048 30.028A27.221 27.221 0 0 1 20 22.546V22h-1.3a2.7 2.7 0 0 0-2.7 2.7 2.7 2.7 0 0 0 1.014 2.109l4.034 3.217zM43 30l3.986-3.189A2.7 2.7 0 0 0 48 24.7a2.7 2.7 0 0 0-2.7-2.7H44v.546a27.219 27.219 0 0 1-1.037 7.444z" opacity="1" data-original="#f5cf88" class=""></path>
                                        <path fill="#976947" d="m44 22 2.711-7.455a9.348 9.348 0 0 0-.243-6.992A9.35 9.35 0 0 0 37.924 2h-8.49A32.9 32.9 0 0 0 12 7l2.411.8a3.567 3.567 0 0 1 2.189 4.713 3.571 3.571 0 0 0 .121 2.92L20 22v-3l6.687-4.458A9.176 9.176 0 0 1 31.78 13a9.178 9.178 0 0 0 5.735-2.012L40 9l2.321 3.481A10 10 0 0 1 44 18.028z" opacity="1" data-original="#976947"></path>
                                        <path fill="#f2f0eb" d="M24 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4zM34 22h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4z" opacity="1" data-original="#f2f0eb"></path>
                                        <path fill="#a8b0bc" d="M30 23h4v2h-4z" opacity="1" data-original="#a8b0bc"></path>
                                        <path fill="#d5cec2" d="M10 62V41a4 4 0 0 1 4-4h36a4 4 0 0 1 4 4v21" opacity="1" data-original="#d5cec2" class=""></path>
                                        <circle cx="32" cy="54" r="3" fill="#e7e4dd" opacity="1" data-original="#e7e4dd"></circle>
                                        <g fill="#c66b60">
                                            <path d="m25.292 48.707-4-4a1 1 0 0 1 0-1.415l4-4 1.415 1.415L23.414 44l3.293 3.292zM38.707 48.707l-1.415-1.415L40.585 44l-3.293-3.293 1.415-1.415 4 4a1 1 0 0 1 0 1.415zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#c66b60" opacity="1" data-original="#c66b60"></path>
                                        </g>
                                        <path d="M63 57a13.019 13.019 0 0 0-8-11.994V41a5.005 5.005 0 0 0-5-5h-8.418a28.18 28.18 0 0 0 2.226-5.367l3.8-3.042a3.694 3.694 0 0 0-2.188-6.579l2.228-6.126A10.349 10.349 0 0 0 37.923 1h-8.489a33.87 33.87 0 0 0-17.965 5.151 1 1 0 0 0 .214 1.8l2.411.8a2.569 2.569 0 0 1 1.572 3.39 4.569 4.569 0 0 0 .156 3.738L18.4 21.03a3.689 3.689 0 0 0-2.008 6.562l3.8 3.041A28.187 28.187 0 0 0 22.418 36H14a5.005 5.005 0 0 0-5 5v4.005A13.019 13.019 0 0 0 1 57v5a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1zM40 21h-6a1 1 0 0 0-1 1v1h-2v-1a1 1 0 0 0-1-1h-9v-1.465l6.242-4.162A8.154 8.154 0 0 1 31.779 14a10.217 10.217 0 0 0 6.36-2.231l1.633-1.308 1.716 2.574A8.968 8.968 0 0 1 43 18.027V21zm-1 2v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm-10 0v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm18 1.7a1.693 1.693 0 0 1-.638 1.329l-1.813 1.45A28.152 28.152 0 0 0 44.983 23h.317a1.7 1.7 0 0 1 1.7 1.7zM17.523 12.883a4.568 4.568 0 0 0-2.8-6.029l-.3-.1A31.863 31.863 0 0 1 29.434 3h8.489a8.349 8.349 0 0 1 7.848 11.2l-.87 2.391a10.969 10.969 0 0 0-1.749-4.669l-2.321-3.478a1 1 0 0 0-.678-.433 1.008 1.008 0 0 0-.778.207l-2.485 1.989A8.215 8.215 0 0 1 31.779 12a10.149 10.149 0 0 0-5.647 1.709l-6.687 4.458a.961.961 0 0 0-.17.147l-1.665-3.329a2.573 2.573 0 0 1-.087-2.102zm.115 13.147A1.7 1.7 0 0 1 18.7 23h.314a28.386 28.386 0 0 0 .435 4.48zM21.015 23H23v3a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-1h2v1a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-3h1.984a26.2 26.2 0 0 1-3.71 13H24.726a26.2 26.2 0 0 1-3.711-13zM14 38h36a3 3 0 0 1 3 3v20H11V41a3 3 0 0 1 3-3zM3 57a11.019 11.019 0 0 1 6-9.793V61H3zm58 4h-6V47.206A11.02 11.02 0 0 1 61 57z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M32 58a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm0-6a2 2 0 1 1-2 2 2 2 0 0 1 2-2zM25.292 48.707l1.415-1.415L23.414 44l3.293-3.293-1.415-1.415-4 4a1 1 0 0 0 0 1.415zM38.707 48.707l4-4a1 1 0 0 0 0-1.415l-4-4-1.415 1.415L40.585 44l-3.293 3.292zM28.199 47.407l6-8 1.6 1.2-6 8z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div> -->
                <!-- Single Item -->
                <!-- <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-laptop"></i>
                        <h4>Web Design</h4>
                        <p>
                            we design stunning, responsive websites that captivate users and deliver seamless digital experiences.
                        </p>
                    </div>
                </div> -->
                <!-- End Single Item -->

                <!-- Single Item -->
                <!-- <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-laptop-code"></i>
                        <h4>Web Development</h4>
                        <p>
                            we create responsive, high-performing websites that help businesses attract customers, enhance their brand, and drive growth.
                        </p>
                    </div>
                </div> -->
                <!-- End Single Item -->

                <!-- Single Item -->
                <!-- <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-shopping-cart"></i>
                        <h4>E-Commerce</h4>
                        <p>
                            We develop secure, user-friendly, and high-converting e-commerce websites that drive sales and enhance online presence.
                        </p>
                    </div>
                </div> -->
                <!-- End Single Item -->

                <!-- Single Item -->
                <!-- <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-search"></i>
                        <h4>SEO</h4>
                        <p>
                            We provide expert SEO services to optimize websites, improve search engine rankings, and drive targeted organic traffic for business growth.
                        </p>
                    </div>
                </div> -->
                <!-- End Single Item -->

                <!-- Single Item -->
                <!-- <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fas fa-recycle"></i>
                            <h4>Software Update</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div> -->
                <!-- End Single Item -->

                <!-- Single Item -->
                <!-- <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fas fa-headset"></i>
                            <h4>24/7 Support</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div> -->
                <!-- End Single Item -->
            </div>
        </div>
    </section>
    <!-- Service End -->


    <!-- About Start -->
    <div class="about wow fadeInUp mt-3" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="about-content">
                        <div class="section-header text-left wow zoomIn">
                            <p>About Us</p>
                            <h2>Who We Are?</h2>
                        </div>
                        <div class="about-text">



                            <h3 style="font-size: 1.16rem;font-weight: 700;" class="wow fadeInUp mb-4">best budget friendly website design & development in ahmedabad</h3>

                            <p>Looking for a reliable and low-budget website developer in Ahmedabad? <strong>VS Developer Ahmedabad</strong> offers best budget-friendly website design & development in Ahmedabad, ensuring high-quality websites at the most affordable prices.</p>

                            <p>Our <strong>budget friendly web development</strong> in Ahmedabad services are perfect for startups, small businesses, and entrepreneurs who need a professional online presence without overspending. Whether it's a custom website, portfolio site, e-commerce store, or website redesign, our <strong>low budget web development</strong> in Ahmedabad solutions provide the perfect balance of quality and cost-effectiveness.</p>

                            <p>Best Budget Friendly Website Design & Development Company in Ahmedabad Looking for a reliable, low-budget website developer in Ahmedabad to bring your vision to life? <?php echo Company_Name; ?> Ahmedabad specializes in best website design and development in Ahmedabad, delivering high-quality websites at affordable prices.</p>

                            <p>At <strong>VS Developer Ahmedabad</strong>, we specialize in creating SEO-friendly, responsive, and AI-powered websites that help businesses grow online. Get in touch today for the best website design and development in Ahmedabad at unbeatable prices!</p>

                            <h4 class="mb-3 pb-3 wow fadeInUp">🌟<strong>Why Choose <?php echo Company_Name; ?>?</strong></h4>

                            <p>✅<strong>Custom Website Design</strong>: We create unique and eye-catching websites that match your brand and business goals.</p>
                            <p>✅<strong>Responsive Layouts</strong>: Your website will look great and function smoothly on any device, from mobiles to desktops.</p>
                            <p>✅<strong>E-Commerce Development</strong>: Get an affordable online store with secure payment options to start selling easily.</p>

                            <p>✅<strong>SEO-Optimized Websites</strong>: Our websites are designed to rank higher on Google, helping you attract more visitors.</p>
                            <p>✅<strong>Fast Turnaround</strong>: We deliver high-quality websites quickly, so you don’t have to wait long.</p>

                            <p>✅<strong>User-Friendly Interfaces</strong>: Easy-to-navigate designs that make browsing simple for your customers.</p>
                            <p>✅<strong>Maintenance & Support</strong>: We provide ongoing updates and technical help to keep your website running smoothly.</p>

                            <p>Whether you’re a startup, small business, or entrepreneur, <strong><?php echo Company_Name; ?> Ahmedabad</strong> offers the <strong>best budget friendly website design & development in Ahmedabad</strong> without compromising on quality.</p>

                            <p>📞 Let’s build your dream website today! <strong>Contact <?php echo Company_Name; ?> Ahmedabad</strong>, the <strong>best website developer in Ahmedabad</strong>, for top-notch yet affordable web development services. 🚀</p>

                        </div>
                    </div>
                </div>

                <div id="counter" class="wow fadeInUp" data-wow-delay="0.2s">

                    <div class="item">
                        <h2 class="count" data-number="5"></h2>
                        <h3 class="text">year+ Eexperience</h3>
                    </div>
                    <div class="item">
                        <h2 class="count" data-number="50"></h2>
                        <h3 class="text">project completed</h3>
                    </div>
                    <div class="item">
                        <h2 class="count" data-number="50"></h2>
                        <h3 class="text">happy clients</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <?php /*
    <section class="faqs-vs wow fadeInUp mt-3" data-wow-delay="0.3s" id="faq">
        <div class="container">
            <div class="row">
                <div class="section-header text-left wow zoomIn">
                    <p>FAQ'S</p>
                    <h2>Frequently Asked Questions</h2>
                </div>
                <!-- <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        1. Why choose <?php echo Company_Name;?> for budget-friendly website design?
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body"><p><?php echo Company_Name;?> offers cost-effective, SEO-friendly website design & development in Ahmedabad, ensuring a professional online presence for small businesses and startups.</p></div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        2. How much does a website cost?
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body"><p>We provide affordable website development starting at ₹6,000 for static websites and ₹10,000 for dynamic websites with an admin panel.</p></div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        3. Do you offer SEO-friendly websites?
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body"><p>Yes! All our websites are optimized for Google rankings, mobile-friendly, and include basic SEO to improve visibility.</p></div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                        4. How long does it take to develop a website?
                      </button>
                    </h2>
                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <p>The timeline depends on the website type: &nbsp;</p>
                        <ul>
                            <li><strong>Static Website</strong>: 4-5 days &nbsp;</li>
                            <li><strong>Dynamic Website with Admin Panel</strong>: 7-10 days &nbsp;</li>
                            <li><strong>E-commerce Website</strong>: 12-15 days&nbsp;</li>
                        </ul>
                    </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                        5. Do you provide e-commerce website development?
                      </button>
                    </h2>
                    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Yes! We specialize in <stong>budget-friendly e-commerce website development</stong> in Ahmedabad, helping businesses sell online with a user-friendly interface.  </p>
                        </div>
                    </div>
                  </div>


                </div> -->
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn accordion-button btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              1. Why choose <?php echo Company_Name;?> for budget-friendly website design?
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                            <p><?php echo Company_Name;?> offers cost-effective, SEO-friendly website design & development in Ahmedabad, ensuring a professional online presence for small businesses and startups.</p>
                          </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingtwo">
                          <h5 class="mb-0">
                            <button class="btn btn-link accordion-button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                               2. How much does a website cost?
                            </button>
                          </h5>
                        </div>

                        <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion">
                          <div class="card-body">
                            <p>We provide affordable website development starting at ₹6,000 for static websites and ₹10,000 for dynamic websites with an admin panel.</p>
                          </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingthree">
                          <h5 class="mb-0">
                            <button class="btn btn-link accordion-button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                                3. Do you offer SEO-friendly websites?
                            </button>
                          </h5>
                        </div>

                        <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordion">
                          <div class="card-body">
                            <p>Yes! All our websites are optimized for Google rankings, mobile-friendly, and include basic SEO to improve visibility.</p>
                          </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingfour">
                          <h5 class="mb-0">
                            <button class="btn btn-link accordion-button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                4. How long does it take to develop a website?
                            </button>
                          </h5>
                        </div>

                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                          <div class="card-body">
                            <p>The timeline depends on the website type: &nbsp;</p>
                            <ul>
                                <li><strong>Static Website</strong>: 4-5 days &nbsp;</li>
                                <li><strong>Dynamic Website with Admin Panel</strong>: 7-10 days &nbsp;</li>
                                <li><strong>E-commerce Website</strong>: 12-15 days&nbsp;</li>
                            </ul>
                          </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingfive">
                          <h5 class="mb-0">
                            <button class="btn btn-link accordion-button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                 5. Do you provide e-commerce website development?
                            </button>
                          </h5>
                        </div>

                        <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                          <div class="card-body">
                            <p>Yes! We specialize in <stong>budget-friendly e-commerce website development</stong> in Ahmedabad, helping businesses sell online with a user-friendly interface.  </p>
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> */ ?>


    <section class="faqs-vs wow fadeInUp mt-3" data-wow-delay="0.3s" id="faq">
        <div class="container">
            <div class="section-header text-left wow zoomIn">
                <p>FAQ'S</p>
                <h3 class="fr-title">Frequently Asked Questions</h3>
            </div>
            <div class="question">
               1. Why choose <?php echo Company_Name;?> for budget-friendly website design?
            </div>
            <div class="answercont">
                <div class="answer mt-4">
                    <p><?php echo Company_Name;?> Ahmedabad is the best budget-friendly website design & development company in Ahmedabad, offering cost-effective solutions for startups and small businesses. We ensure a professional online presence with high-quality, responsive designs at an affordable price.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="question">
                2. How much does a website cost?
            </div>
            <div class="answercont">
                <div class="answer mt-4">
                    <p>We provide low-budget web development in Ahmedabad with transparent pricing:</p>
                    <ul style="padding: 0% 0% 0% 3%;">
                        <li><strong>Static Website</strong>: ₹6,000 &nbsp;</li>
                        <li><strong>Dynamic Website with Admin Panel</strong>: ₹10,000 &nbsp;</li>
                        <li><strong>E-commerce Website</strong>: Custom pricing based on features&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="question">
                3. Do you offer SEO-friendly websites?
            </div>
            <div class="answercont">
                <div class="answer mt-4">
                    <p>Yes! We specialize in SEO-friendly, mobile-optimized websites that help improve Google rankings and online visibility. Every website we develop includes basic SEO, fast loading speeds, and a user-friendly experience.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="question">
                4. How long does it take to develop a website?
            </div>
            <div class="answercont">
                <div class="answer mt-4">
                    <p>Our budget-friendly web development ahmedabad is delivered within: &nbsp;</p>
                    <ul style="padding: 0% 0% 0% 3%;">
                        <li><strong>Static Website</strong>: 4-5 days &nbsp;</li>
                        <li><strong>Dynamic Website with Admin Panel</strong>: 7-10 days &nbsp;</li>
                        <li><strong>E-commerce Website</strong>: 12-15 days&nbsp;</li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="question">
                5. Do you provide e-commerce website development?
            </div>
            <div class="answercont">
                <div class="answer mt-4">
                    <p>Yes! We offer affordable e-commerce website development in Ahmedabad, creating feature-rich, easy-to-use online stores. Our e-commerce solutions ensure smooth navigation, secure payments, and seamless user experience to help businesses grow online <?php echo Company_Name;?> is best budget friendly website design & development in ahmedabad.</p>
                </div>
            </div>
        </div>

        <div class="more_faq" style="display: none;">
            
        
            <div class="container">
                <div class="question">
                    6. Do you offer website maintenance services?
                </div>
                <div class="answercont">
                    <div class="answer mt-4">
                        <p>Yes, we provide website maintenance and updates to ensure your site stays up-to-date and secure.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="question">
                    7. Will my website be mobile-friendly?
                </div>
                <div class="answercont">
                    <div class="answer mt-4">
                        <p>Yes, all our websites are responsive and optimized for mobile devices.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="question">
                    8. Can you add a payment gateway to my e-commerce website?
                </div>
                <div class="answercont">
                    <div class="answer mt-4">
                        <p>Yes! We can integrate Razorpay, Paytm, UPI, and more.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="question">
                    9. Will my website have an admin panel?
                </div>
                <div class="answercont">
                    <div class="answer mt-4">
                        <p>Admin panels are available in our Dynamic Website package (₹10,000) or higher.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="question">
                    10.Can I add custom features to my website?
                </div>
                <div class="answercont">
                    <div class="answer mt-4">
                        <p>Yes! We offer:</p>

                        <ul style="padding: 0% 0% 0% 4% !important;">
                            <li>Live chat &amp; AI chatbot</li>
                            <li>Booking &amp; appointment systems</li>
                            <li>Custom contact forms</li>
                            <li>Multi-language support</li>
                            <li>Custom integrations (APIs, CRMs, etc.)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="question">
                    11. How do I get started?
                </div>
                <div class="answercont">
                    <div class="answer mt-4">
                        <p>Just contact us with your requirements, and we&rsquo;ll guide you through the process!</p>

                        <p>📩 Email: <?php echo Company_Email;?><br />
                        📞 Phone/WhatsApp: <?php echo Company_Phone;?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3" id="faq_btn_div">
             <div class="price-dgtl">
                <button class="btninqry price-btn load_more_faq" style="background-color:#fff;"><a href="javascript:void(0);" class="">Load More FAQ's</a></button>
            </div>
            
        </div>

    </section>

    <div class="experience wow fadeInUp mt-3" id="experience" data-wow-delay="0.2s">
        <div class="container">
            <header class="section-header text-center wow zoomIn" >
                <p>Our Work Plan</p>
                <h5>Budget-Friendly Web Development Ahmedabad</h5>
                <h2>Project Work Flow</h2>
            </header>
            <div class="timeline">
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <!-- <div class="timeline-date">2045 - 2050</div> -->
                        <h2>Planning & Research</h2>
                        <h4>Define goals , Market Research , Content Strategy</h4>
                        <p>
                            Understand the website's purpose, target audience, and business objectives.
                            Analyze competitors and gather insights to shape the site’s design and functionality.
                            Plan what content will be featured, and how it will be structured.

                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <!-- <div class="timeline-date">2045 - 2050</div> -->
                        <h2>Wireframing & Design</h2>
                        <h4>Wireframing, UI/UX Design,</h4>
                        <p>
                            Create a basic layout or blueprint to define the structure and functionality of the site.
                            Design the user interface, focusing on user experience, navigation, and visual elements like color schemes, typography, and branding.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <!-- <div class="timeline-date">2045 - 2050</div> -->
                        <h2>Development</h2>
                        <h4>Front-End Development, Back-End Development, Content Management System (CMS)</h4>
                        <p>
                            Code the user-facing parts of the website using HTML, CSS, and JavaScript to build interactive features and responsive layouts.
                            Set up servers, databases, and any necessary back-end systems using languages like PHP, Python, or Node.js to handle data, APIs, and user interactions.
                            If applicable, integrate a CMS like WordPress or custom CMS for easier content updates.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <!-- <div class="timeline-date">2045 - 2050</div> -->
                        <h2>Testing</h2>
                        <h4>Quality Assurance, Bug Fixes, SEO Testing</h4>
                        <p>
                            Test the website for functionality, performance, and compatibility across different browsers and devices.
                            Identify and resolve any issues related to layout, functionality, or user experience.
                            Ensure proper optimization for search engines, including meta tags, keywords, and site speed.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <!-- <div class="timeline-date">2045 - 2050</div> -->
                        <h2>Launch</h2>
                        <h4>Deployment, Final Check, CA</h4>
                        <p>
                            Move the website from the development environment to a live server
                            Perform a last round of testing to ensure everything works smoothly post-launch.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <!-- <div class="timeline-date">2045 - 2050</div> -->
                        <h2>Post-Launch & Maintenance</h2>
                        <h4>Monitoring, Updates & Improvements, Ongoing Support</h4>
                        <p>
                            Track performance, security, and user behavior.
                            Continuously update the website with new content, features, or design changes based on user feedback and evolving business needs.
                            Provide technical support and fix any issues that may arise over time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner wow zoomIn mine-bg" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <!-- <p>Awesome Discount</p> -->
                    <h4>best budget friendly website design & development company in ahmedabad <?php echo Company_Name; ?>!</h4>
                </div>
                <div class="container banner-text">
                    <h5 style="color: #fff;font-weight: 700;" class="mb-3">Mission</h5>
                    <article style="color: #fff;" class="mb-2">At <strong><?php echo Company_Name;?></strong>, our mission is to <strong>empower businesses with high-quality, affordable, and SEO-driven website solutions</strong>. We strive to create <strong>visually stunning, highly responsive, and AI-powered websites</strong> that enhance online presence, drive engagement, and accelerate business growth. Our commitment is to deliver <strong>cost-effective digital solutions</strong> that help startups, entrepreneurs, and small businesses thrive in the competitive online world. </article>

                    <h5 style="color: #fff;font-weight: 700;" class="mb-3">Vision</h5>  
                    <article style="color: #fff;" class="mb-2">Our vision is to establish <strong><?php echo Company_Name;?> as the most trusted and budget-friendly website development company in Ahmedabad</strong>. We aim to revolutionize the digital landscape by offering <strong>cutting-edge, performance-driven, and user-centric websites</strong> that not only meet but exceed client expectations. Through continuous innovation, exceptional customer service, and a passion for excellence, we strive to help businesses achieve <strong>long-term digital success</strong>. </article>

                    <div class="price-dgtl-mrkt text-center">
                        <div class="price-dgtl">
                            <button class="btninqry price-btn" style="background-color:#fff;"><a href="#contact" class="sm_atag">Inquiry Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="team" id="team">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>My Team</p><br>
                <h5>Best Budget Friendly Website Design & Development in Ahmedabad</h5>
                <h2>Expert Team Members</h2>
            </header>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/Vaibhavnew.png" alt="Image" loading="lazy">
                        </div>
                        <div class="team-text">
                            <h2>Vaibhav Shah</h2>
                            <h4>Full Stack Developer</h4>
                            <p>
                                <!--  Vaibhav Shah is a skilled Full Stack Developer with expertise in both front-end and
                                back-end PHP development. He excels
                                in creating dynamic websites, building secure servers, optimizing for cross-platform
                                performance, and developing
                                efficient APIs. With a strong focus on delivering seamless, high-performance solutions,
                                Vaibhav ensures every project
                                meets both user and business needs from start to finish. -->
                                Vaibhav Shah is a skilled Full Stack Developer with expertise in both front-end and back-end PHP development. He excels in creating dynamic websites, building secure servers, optimizing for cross-platform performance, and developing efficient APIs. With a strong focus on delivering seamless, high-performance solutions, Vaibhav ensures every project meets both user and business needs from start to finish. He is committed to staying updated with the latest technologies to deliver innovative and scalable solutions.
                            </p>
                            <!-- <div class="team-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/nehal-new-pic.jpg" alt="Image" loading="lazy">
                        </div>
                        <div class="team-text">
                            <h2>Nehal Prajapati</h2>
                            <h4>Frontend Developer</h4>
                            <p class="fs-5">
                                Nehal Prajapati is a skilled frontend developer with expertise in HTML, CSS, Bootstrap, and JavaScript. Nehal excels in creating visually appealing and responsive web designs, ensuring a seamless user experience. With a deep understanding of modern web development practices, Nehal combines creativity with technical proficiency to deliver high-quality web solutions.
                            </p>
                            <div class="team-social">
                                <a class="btn" href="https://madhavfreelancr.ct.ws" target="_blank"><i class="fa fa fa-globe"></i></a>
                            </div>
                            <!-- <div class="team-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/ABDEVLOPERS.png" alt="Image" loading="lazy">
                        </div>
                        <div class="team-text">
                            <h2>Astaj Bhoraniya</h2>
                            <h4>Frontend Developer</h4>
                            <p class="fs-5">
                                Astaj Bhoraniya is a Frontend Developer with expertise in creating visually appealing and user-friendly web interfaces. Skilled in modern web technologies such as HTML, CSS, Boostrap, JQuery, JavaScript and popular frameworks like React or Vue.js, Astaj specializes in building responsive, interactive websites that offer seamless user experiences across different devices. Astaj is dedicated to crafting high-quality front-end solutions for a wide range of projects.
                            </p>
                            <div class="team-social">
                                <a class="btn" href="https://www.abdevelopers.website" target="_blank"><i class="fa fa fa-globe"></i></a>
                            </div>
                            <!-- <div class="team-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/Harsh-Bhuva.png" alt="Image" loading="lazy">
                        </div>
                        <div class="team-text">
                            <h2>Harsh Bhuva</h2>
                            <h4>Graphic Designer</h4>
                            <p class="fs-5">

                                Harsh Bhuva is a talented Graphic Designer specializing in creating visually captivating and impactful designs. He collaborates with clients and creative teams to deliver compelling visuals, enhance brand identity, and communicate messages effectively. With a focus on aesthetics and usability, he ensures designs align with brand guidelines and resonate with target audiences. Passionate about leveraging modern design tools and techniques, he stays updated with the latest industry trends. His commitment to creativity and attention to detail ensures the delivery of innovative and memorable design solutions.
                            </p>
                            <!-- <div class="team-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/Avdhesh.png" alt="Image" loading="lazy">
                        </div>
                        <div class="team-text">
                            <h2>Avdhesh Kushwah</h2>
                            <h4>Frontend Developer</h4>
                            <p class="fs-5">
                                Avdhesh Kushwaha is a Frontend Developer specializing in building responsive and intuitive web interfaces using modern technologies like HTML, CSS, JavaScript, and WordPress. He is passionate about creating user-friendly designs that enhance user experience. Avdhesh also stays updated with the latest industry trends to deliver innovative and efficient web solutions.
                            </p>
                            <!-- <div class="team-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>



                <?PHP /*
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/jinali-new0pic.jpg" alt="Image">
                        </div>
                        <div class="team-text">
                            <h2>Jinali Prajapati</h2>
                            <h4>Back-End Developer</h4>
                            <p>
                                "Skilled Backend Developer with expertise in building scalable, high-performance server-side applications using  Strong focus on API design, database management, and system architecture"


                            </p>
                            <div class="team-social">
                                <!-- <a class="btn" href=""><i class="fab fa-twitter"></i></a> -->
                                <!-- <a class="btn" href=""><i class="fab fa-facebook-f"></i></a> -->
                                <!-- <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a> -->
                                <!-- <a class="btn" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/hony-new.png" alt="Image">
                        </div>
                        <div class="team-text">
                            <h2>Himani Oza</h2>
                            <h4>Frontend Developer</h4>
                            <p>
                               Himani Oza is a skilled Front-End Developer specializing in building visually appealing and user-friendly interfaces. He collaborates with designers to optimize applications, create engaging features, and ensure consistent branding across all user-facing elements. With expertise in modern web technologies, he delivers responsive designs that adapt seamlessly to various devices. Himani is passionate about writing clean, maintainable code and delivering high-quality applications. His proactive problem-solving and attention to detail make him a valuable asset to any team.                          
                           </p>
                            <div class="team-social">
                                <!-- <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                */ ?>
            </div>
        </div>
    </div>





    <!-- Team End -->


    <!-- Service Start -->
    <?php /*
    <div class="service" id="service">
        
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>What I do</p>
                <h2>Awesome Quality Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="service-text">
                            <h3>Web Design</h3>
                            <p>
                                <!-- Transforming Ideas into Impactful Websites. Your Vision, Our Expertise—Crafting Digital Experiences that Drive Success. -->
                                we design stunning, responsive websites that captivate users and deliver seamless digital experiences.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <div class="service-text">
                            <h3>Web Development</h3>
                            <p>
                                <!-- Building the Future, One Line of Code at a Time. Custom Web Development Solutions that Power Your Business Forward. -->
                                we create responsive, high-performing websites that help businesses attract customers, enhance their brand, and drive growth.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="service-text">
                            <h3>E-Commerce</h3>
                            <p>
                                We develop secure, user-friendly, and high-converting e-commerce websites that drive sales and enhance online presence.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="service-text">
                            <h3>SEO</h3>
                            <p>
                                We provide expert SEO services to optimize websites, improve search engine rankings, and drive targeted organic traffic for business growth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 


    </div>
*/ ?>




    <!-- Experience Start -->


    <div class="banner mine-bg1 wow zoomIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="section-header text-center wow fadeInUp">
                <h4>🌟 Driving Innovation in Digital Solutions🌟</h4>
            </div>
            <div class="container banner-text">



                <p>Looking for a <strong>reliable, Best Budget-Friendly Website Design & Development in Ahmedabad</strong> to bring your vision to life? Our team at <strong><?php echo Company_Name; ?> Ahmedabad</strong> specializes in creating <strong>high-quality websites</strong> at <strong>affordable prices</strong>, ensuring you get the best value for your money, VS Devloper is Best Budget-Friendly Website Design & Development Company in Ahmedabad. Here's what we offer: </p>

                <p>🎨 Custom Website Designs: Unique, eye-catching websites tailored to your brand and business goals.</p>
                <p>📱 Responsive Layouts: Mobile-friendly designs that look great on any device, ensuring a smooth experience for all users.</p>
                <p>🛒 E-Commerce Solutions: Affordable online stores with secure payment integration to help you start selling online.</p>
                <p>🔍 SEO Optimization: Websites built to rank higher on search engines, driving more traffic and visibility to your site.</p>
                <p>⏱ Fast Turnaround: Quick delivery without compromising on quality, so you can launch your website on time.</p>
                <p>🔑 User-Friendly Interfaces: Easy-to-navigate designs that ensure a seamless user experience.</p>
                <p>🛠 Ongoing Maintenance & Support: Continuous updates and support to keep your website running smoothly.</p>

                <p>Whether you're a <strong>startup, small business, or an individual</strong> looking to establish an online presence, we provide the perfect blend of <strong>affordable website design and development services in Ahmedabad</strong>. Let’s work together to create a stunning website that fits your budget!</p>
                <p>💻🚀 Contact <?php echo Company_Name; ?> Ahmedabad today for the best website design and development services in Ahmedabad at budget-friendly rates!</p>
                <div class="price-dgtl-mrkt text-center">
                    <div class="price-dgtl">
                        <button class="btninqry price-btn" style="background-color:#fff;"><a href="#contact" class="sm_atag">Inquiry Now</a></button>
                    </div>
                </div>
                <!-- <a class="btn" href="#contact">Inquiry now</a> -->
            </div>
        </div>
    </div>

    <!-- Banner End -->


    <div class="wrapper">
    <div class="card">
      <div class="card-banner">
        <p class="category-tag popular">Pizza</p>
        <img class="banner-img" src='https://dev-to-uploads.s3.amazonaws.com/uploads/articles/xna5h3bfbgmyrb6py1o7.jpg' alt=''>
      </div>
      <div class="card-body">
        <p class="blog-hashtag">#Food #Pizza</p>
        <h2 class="blog-title">What is the tastiest pizza in Pizza Hut?</h2>
        <p class="blog-description">My thoughts on the future of front end web development</p>

        <div class="card-profile">
          <img class="profile-img" src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpYJQKSoM7S75P_KMRtQHqAAIPh133CSxByw&usqp=CAU' alt=''>
          <div class="card-profile-info">
            <h3 class="profile-name">Eleanor Pea</h3>
            <p class="profile-followers">5.2k followers</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-banner">
        <p class="category-tag technology">Biryani</p>
        <img class="banner-img" src='https://dev-to-uploads.s3.amazonaws.com/uploads/articles/lr627qqql65d9hvr5nsq.jpg' alt=''>
      </div>
      <div class="card-body">
        <p class="blog-hashtag">#Biryani #Food</p>
        <h2 class="blog-title">Which city is famous for biryani in India?</h2>
        <p class="blog-description">Looking to upgrade your gear? Here is the list of the best photography tools for this year</p>

        <div class="card-profile">
          <img class="profile-img" src='https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg' alt=''>
          <div class="card-profile-info">
            <h3 class="profile-name">Darrell Steward</h3>
            <p class="profile-followers">15.7k followers</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-banner">
        <p class="category-tag psychology">Burger</p>
        <img class="banner-img" src='https://dev-to-uploads.s3.amazonaws.com/uploads/articles/nfz3z2osldbm8ymanmoq.jpg' alt=''>
      </div>
      <div class="card-body">
        <p class="blog-hashtag">#Burger #Food</p>
        <h2 class="blog-title">What is the most popular burger?</h2>
        <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>

        <div class="card-profile">
          <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
          <div class="card-profile-info">
            <h3 class="profile-name">Savannah Nguyen</h3>
            <p class="profile-followers">18K followers</p>
          </div>
        </div>
      </div>
    </div>

  </div>


    <!-- Portfolio Start -->
    <?php /*
    <div class="portfolio mb-5" id="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Type Of Service</p>
                <h2>Service Types</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-filter">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-1">Web Development</li>
                        <li data-filter=".filter-2">SCO</li>
                        <li data-filter=".filter-3">Digital Marketing</li>
                        <!-- <li data-filter=".filter-3">Game Dev</li> -->
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="img/ecommerce-web-page-concept-illustration_114360-8204.avif" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>E-Commerce Website</h3>
                            <a class="btn" href="img/ecommerce-web-page-concept-illustration_114360-8204.avif" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="img/seo-analytics-team-concept-illustration_114360-9205.avif" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>SEO</h3>
                            <a class="btn" href="img/seo-analytics-team-concept-illustration_114360-9205.avif" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="img/hand-drawn-illustration-people-with-smartphone-marketing_52683-66659.avif" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Social Mobile Marketing</h3>
                            <a class="btn" href="img/hand-drawn-illustration-people-with-smartphone-marketing_52683-66659.avif" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="img/isometric-crm-illustration_52683-83950.avif" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Company Website</h3>
                            <a class="btn" href="img/isometric-crm-illustration_52683-83950.avif" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> */ ?>
    <!-- Portfolio End -->


    <!-- Banner Start -->
    <?php /*
    <div class="banner wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-header text-center">
                <p>Awesome Discount</p>
                <h2>Get <span>30%</span> Discount</h2>
            </div>
            <div class="container banner-text">
                <p>
                 Ready to launch or refresh your website? Now’s the perfect time to take action! Get an exclusive 30% discount on all our web development services, including static, dynamic, and e-commerce websites. With over 4 years of experience, we’ll create a beautiful, high-performance website that perfectly aligns with your business at an affordable price. Don’t miss this limited-time offer let’s bring your vision to life today and save big in the process!
                </p>
                <a class="btn" href="#contact">Inquiry now</a>
            </div>
        </div>
    </div> */ ?>

    <!-- Banner End -->



    <?php /*

    <!-- Testimonial Start -->
    <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
        <div class="container">
            <div class="testimonial-icon">
                <i class="fa fa-quote-left"></i>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-1.jpg" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
                            suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                        </p>
                        <h3>Customer Name</h3>
                        <h4>Profession</h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-2.jpg" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
                            suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                        </p>
                        <h3>Customer Name</h3>
                        <h4>Profession</h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-3.jpg" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
                            suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                        </p>
                        <h3>Customer Name</h3>
                        <h4>Profession</h4>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Testimonial End -->
    */ ?>


    <div class="wow fadeInUp mt-2" data-wow-delay="0.2s" id="contact">
        <section class="validation-form">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="vlidation-from-img">
                            <img src="<?php echo Site_Url; ?>img/form-validation-vs-devlopwers.avif" loading="lazy">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form name="inquery-form" id="inquery-form" method="post" autocomplete="off" novalidate="novalidate">
                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                            <div class="control-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="required" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required="required" />
                                <p class="help-block"></p>
                            </div>

                            <div class="control-group">
                                <select class="form-control" id="subject" name="subject" required="required">
                                    <option value="">Select Subject</option>
                                    <option value="Dynamic Website">Dynamic Website</option>
                                    <option value="Static Website">Static Website</option>
                                    <option value="E-Commerce Website">E-Commerce Website</option>
                                </select>
                                <p class="help-block">
                                    <!-- <i class="fa fa-arrow-up upes"></i> -->
                                    <!-- <i class="fa fa-arrow-down"></i> -->
                                </p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" name="message" placeholder="Message" required="required"></textarea>
                                <p class="help-block"></p>
                            </div>
                            <div>
                                <div class="g-recaptcha" data-sitekey="6Lflf9MqAAAAADVxMMPB9X8sjtuYw7u5CDHlmd3q"></div>
                                <button class="formbtn" type="submit" name="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <!-- Back to top button -->
    <a href="javascript:void(0);" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>
    </div>




    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=9157185288&text=Hello Vaibhav👋" target="_blank">
            <button class="whatsapp-button">
                <div class="whatsapp-pulse">
                    <i class="fa-brands fa-whatsapp" style="font-size:26px"></i>
                </div>
            </button>
        </a>
    </div>

    <a href="tel:+919157185288">
        <div class="wtspwrapper callbutton">
            <div class="content-center">
                <div class="pulse">
                    <i class="fa fa-phone fa-rotate-90" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </a>

    <div class="estimate estimate--bg mt-5">
        <div class="estimate__elements">
            <img class="estimate__element estimate__element--one" src="img/element1.svg" alt="element" loading="lazy">
            <img class="estimate__element estimate__element--two" src="img/element2.svg" alt="element" loading="lazy">
        </div>
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="estimate__content">
                        <div class="section-title animation-style2">
                            <span class="section-title__sub text-white mb-10">
                                Let's Work Together
                            </span>
                            <h2 class="section-title__main text-white" style="perspective: 400px;">
                                Need a Successful
                                Your Project?
                            </h2>
                        </div>
                        <div class="estimate-button pt-30">
                            <a href="#contact" class="btn btn--white sm_atag">Estimate Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="estimate__right wow fadeInUp  animated" data-wow-duration="800ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <img src="img/estimate-right.png" alt="Estimate" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="tg-footer-bg pt-100 position-relative pt-5">
        <div class="tg-footer-main pb-70">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="tg-footer-widget footer-col-1 mb-30">
                            <div class="tg-footer-widget-logo pb-15">
                                <h4 class="tg-footer-widget-title mb-25">About <?php echo Company_Name; ?> Ahmedabad</h4>
                            </div>
                            <div class="tg-footer-widget-content">
                                <p>Looking for a reliable, budget-friendly website developer in Ahmedabad? <?php echo Company_Name; ?> Ahmedabad specializes in best website design and development in Ahmedabad, offering custom websites, e-commerce, and SEO-friendly solutions at affordable prices. Get the best value for your money! 🚀</p>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-3">
                        <div class="tg-footer-widget footer-col-2 mb-30">
                            <h4 class="tg-footer-widget-title mb-25">Useful Links</h4>
                            <div class="tg-footer-widget-link">
                                <ul>
                                    <li class="man-footer-title"><a href="#home">Home</a></li>
                                    <li><a href="#price">Price</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#team">Team</a></li>
                                    <li><a href="#service">Service</a></li>
                                    <li><a href="#experience">Project Work Flow</a></li>
                                    <li><a href="#portfolio">Portfolio</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-5 col-sm-6 mb-3">
                        <div class="tg-footer-widget footer-col-3 mb-30">
                            <h4 class="tg-footer-widget-title mb-25">Services</h4>
                            <div class="tg-footer-widget-link">
                                <ul>
                                    <li><a href="javascript:void(0)">Website Development</a></li>
                                    <li><a href="javascript:void(0)">Website Design</a></li>
                                    <li><a href="javascript:void(0)">Portfolio Website Development</a></li>
                                    <li><a href="javascript:void(0)">E-Commerce Website Design</a></li>
                                    <li><a href="javascript:void(0)">SEO</a></li>
                                    <li><a href="javascript:void(0)">Social Media Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-7 mb-3">
                        <div class="tg-footer-widget footer-col-4 mb-30">
                            <h4 class="tg-footer-widget-title mb-25">Get In Touch</h4>
                            <div class="tg-footer-widget-submit-wrap">
                                <a href="tel:9157185288"><i class="fa fa-phone"></i> +91 9157185288</a>
                            </div>
                            <div class="tg-footer-widget-submit-wrap">
                                <a href="mailto:vaibhavshah0601@gmail.com"><i class="fa fa-envelope"></i> vaibhavshah0601@gmail.com</a>
                            </div>
                            <div class="tg-footer-widget-social mb-5">
                                <a href="https://g.co/kgs/A2r3Pt1"><i class="fa-brands fa-google"></i></a>
                                <a href="https://www.instagram.com/the_vs_devloper"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.instagram.com/the_vs_devloper"><i class="fa-solid fa-location-dot"></i></a>
                                <!-- <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer__wrapper-bottom">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-15">
                                    <p class="footer__copyright">
                                        <a href="/"><?php echo Company_Name; ?></a> @ <?php echo Date('Y'); ?>. All Rights
                                        Reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Libraries -->

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,gu,hi,mr,ur,ru,bn',
            }, 'google_translate_element');
        }
        document.addEventListener("DOMContentLoaded", function() {
            const translateIframe = document.querySelector('iframe.goog-te-banner-frame');
            if (translateIframe) {
                translateIframe.style.display = 'none';
            }

            const translateDiv = document.querySelector('div#goog-gt-tt');
            if (translateDiv) {
                translateDiv.style.display = 'none';
            }
        });

        // Counter Code
        let count = document.querySelectorAll(".count")
        let arr = Array.from(count)

        arr.map(function(item) {
            let startnumber = 0

            function counterup() {
                startnumber++
                item.innerHTML = startnumber

                if (startnumber == item.dataset.number) {
                    clearInterval(stop)
                }
            }

            let stop = setInterval(function() {
                counterup()
            }, 200)

        })
    </script>

    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->

    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->


    <script>
        $(document).ready(function() {

            $(".sm_atag").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();

                    $('html, body').animate({
                        scrollTop: $(this.hash).offset().top - 150
                    }, 1700, 'easeInOutExpo');
                    $(".contact_atag").addClass('active');
                    // if ($(this).parents('.navbar-nav').length) {
                    //     $('.navbar-nav .active').removeClass('active');
                    //     $(this).closest('a').addClass('active');
                    // }
                    $("#navbarCollapse").removeClass('show');
                }
            });

            $("#inquery-form").validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    subject: {
                        required: true
                    },
                    message: {
                        required: true
                    }
                },
                messages: {
                    name: "Please specify your name",
                    email: {
                        required: "Please enter a valid email address",
                        email: "Please enter a valid email"
                    },
                    phone: {
                        required: "Please enter your phone number",
                        digits: "Phone number must be digits only",
                        minlength: "Phone number must be 10 digits",
                        maxlength: "Phone number must be 10 digits"
                    },
                    subject: "Please enter a subject",
                    message: "Please enter your message"
                },
                submitHandler: function(form) {
                    if (grecaptcha.getResponse() === "") {
                        Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: "Please complete the reCAPTCHA verification."
                                });
                    }else{
                        $.ajax({
                            url: 'contact_form_insert.php',
                            type: 'POST',
                            data: $(form).serialize(),
                            dataType: 'json',
                            success: function(response) {
                                if (response.status === "success") {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: response.message
                                    });
                                    $('#inquery-form')[0].reset();
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: response.message || 'Unknown error occurred!'
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("AJAX Error:", xhr.responseText);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong with the AJAX request: ' + error
                                });
                            }
                        });
                    }
                    
                }
            });

            $(".filter-active").click();

            $(".load_more_faq").click(function(){
                // $(".more_faq").show();
                $(".more_faq").fadeIn(1700);
                $("#faq_btn_div").hide();
            });

        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/67543e064304e3196aee38a7/1iegh4j1c';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>