

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Landrick - Saas & Software Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="shreethemes@gmail.com" />
    <meta name="website" content="http://www.shreethemes.in/" />
    <meta name="Version" content="v2.6" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Stylish" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url().'assets/frontend/'?>images/favicon.ico">
    <!-- Bootstrap -->
    <link href="<?=base_url().'assets/frontend/'?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="<?=base_url().'assets/frontend/'?>css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?=base_url().'assets/frontend/'?>unicons.iconscout.com/release/v3.0.3/css/line.css">
    <!-- FLEXSLIDER -->
    <link href="<?=base_url().'assets/frontend/'?>css/flexslider.css" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="<?=base_url().'assets/frontend/'?>css/slick.css"/>
    <link rel="stylesheet" href="<?=base_url().'assets/frontend/'?>css/slick-theme.css"/>
    <!-- Main Css -->
    <link href="<?=base_url().'assets/frontend/'?>css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="<?=base_url().'assets/frontend/'?>css/colors/default.css" rel="stylesheet" id="color-opt">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url().'assets/frontend/'?>css/owl.carousel.min.css"/>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <style>
        *{font-family: 'Stylish', sans-serif!important;}
        html{font-family: 'Stylish', sans-serif!important;}
        body{font-family: 'Stylish', sans-serif!important;}

        .swiper-container .next {
            height: 47px;
            width: 47px;
            background-image: url('https://indokids.co.id/assets/store/img/band-right.png');
            position: absolute;
            right: 0 !important;
            top: 50%;
            margin-top: -23.5px;
            z-index: 10;
            overflow: hidden;
            text-indent: -9000px;
            display: block;
            opacity: 1;
            transition: opacity 0.3s ease-in;
            -ms-transition: opacity 0.3s ease-in;
            -moz-transition: opacity 0.3s ease-in;
            -webkit-transition: opacity 0.3s ease-in;
        }
        .swiper-container .previous {
            height: 47px;
            width: 47px;
            background-image: url('https://indokids.co.id/assets/store/img/band-left.png');
            position: absolute;
            left: 0 !important;
            top: 50%;
            margin-top: -23.5px;
            z-index: 10;
            overflow: hidden;
            text-indent: -9000px;
            display: block;
            opacity: 1;
            transition: opacity 0.3s ease-in;
            -ms-transition: opacity 0.3s ease-in;
            -moz-transition: opacity 0.3s ease-in;
            -webkit-transition: opacity 0.3s ease-in;
        }
    </style>
</head>


<body>
<!-- Loader -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader -->

<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="index.html">
                <img src="https://technopark.smkn14bdg.sch.id/assets/images/site/logo__2.png" height="30" alt="">
            </a>
        </div>
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                <div class="dropdown">
                    <button type="button" class="btn btn-link text-decoration-none dropdown-toggle p-0 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify h4 text-muted"></i>
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-0" style="width: 300px;">
                        <form>
                            <input type="text" id="text" name="name" class="form-control border bg-white" placeholder="Search...">
                        </form>
                    </div>
                </div>
            </li>
            <li class="list-inline-item mb-0 pr-1">
                <div class="dropdown">
                    <button type="button" class="btn btn-icon btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-shopping-cart align-middle icons"></i></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 p-4" style="width: 300px;">
                        <div class="pb-4">
                            <a href="javascript:void(0)" class="media align-items-center">
                                <img src="<?=base_url().'assets/frontend/'?>images/shop/product/s-1.jpg" class="shadow rounded" style="max-height: 64px;" alt="">
                                <div class="media-body text-left ml-3">
                                    <h6 class="text-dark mb-0">T-shirt (M)</h6>
                                    <p class="text-muted mb-0">$320 X 2</p>
                                </div>
                                <h6 class="text-dark mb-0">$640</h6>
                            </a>

                            <a href="javascript:void(0)" class="media align-items-center mt-4">
                                <img src="<?=base_url().'assets/frontend/'?>images/shop/product/s-2.jpg" class="shadow rounded" style="max-height: 64px;" alt="">
                                <div class="media-body text-left ml-3">
                                    <h6 class="text-dark mb-0">Bag</h6>
                                    <p class="text-muted mb-0">$50 X 5</p>
                                </div>
                                <h6 class="text-dark mb-0">$250</h6>
                            </a>

                            <a href="javascript:void(0)" class="media align-items-center mt-4">
                                <img src="<?=base_url().'assets/frontend/'?>images/shop/product/s-3.jpg" class="shadow rounded" style="max-height: 64px;" alt="">
                                <div class="media-body text-left ml-3">
                                    <h6 class="text-dark mb-0">Watch (Men)</h6>
                                    <p class="text-muted mb-0">$800 X 1</p>
                                </div>
                                <h6 class="text-dark mb-0">$800</h6>
                            </a>
                        </div>

                        <div class="media align-items-center justify-content-between pt-4 border-top">
                            <h6 class="text-dark mb-0">Total($):</h6>
                            <h6 class="text-dark mb-0">$1690</h6>
                        </div>

                        <div class="mt-3 text-center">
                            <a href="javascript:void(0)" class="btn btn-primary mr-2">View Cart</a>
                            <a href="javascript:void(0)" class="btn btn-primary">Checkout</a>
                        </div>
                        <p class="text-muted text-left mt-1 mb-0">*T&C Apply</p>
                    </div>
                </div>
            </li>
            <li class="list-inline-item mb-0 pr-1">
                <a href="#" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#wishlist"><i class="uil uil-heart align-middle icons"></i></a>
            </li>
            <li class="list-inline-item mb-0">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-icon btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-user align-middle icons"></i></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-3" style="width: 200px;">
                        <a class="dropdown-item text-dark" href="#"><i class="uil uil-user align-middle mr-1"></i> Account</a>
                        <a class="dropdown-item text-dark" href="#"><i class="uil uil-clipboard-notes align-middle mr-1"></i> Order History</a>
                        <a class="dropdown-item text-dark" href="#"><i class="uil uil-arrow-circle-down align-middle mr-1"></i> Download</a>
                        <div class="dropdown-divider my-3 border-top"></div>
                        <a class="dropdown-item text-dark" href="#"><i class="uil uil-sign-out-alt align-middle mr-1"></i> Logout</a>
                    </div>
                </div>
            </li>
        </ul><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="index.html">Home</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="index-saas.html">Saas</a></li>
                                <li><a href="index-classic-saas.html">Classic Saas</a></li>
                                <li><a href="index-agency.html">Agency</a></li>
                                <li><a href="index-apps.html">Application</a></li>
                                <li><a href="index-classic-app.html">Classic Application</a></li>
                                <li><a href="index-studio.html">Studio</a></li>
                                <li><a href="index-marketing.html">Marketing</a></li>
                                <li><a href="index-enterprise.html">Enterprise</a></li>
                                <li><a href="index-services.html">Service</a></li>
                                <li><a href="index-payments.html">Payments</a></li>
                                <li><a href="index-crypto.html">Cryptocurrency</a></li>
                                <li><a href="index-hosting.html">Hosting & Domain</a></li>
                                <li><a href="index-it-solution.html">IT Solution </a></li>
                                <li><a href="index-business.html">Business</a></li>
                                <li><a href="index-modern-business.html">Modern Business</a></li>
                                <li><a href="index-corporate.html">Corporate Business</a></li>
                                <li><a href="index-hotel.html">Hotel</a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-developer.html">Developer <span class="badge badge-pill badge-danger">New</span></a></li>
                                <li><a href="index-seo-agency.html">SEO Agency <span class="badge badge-pill badge-danger">New</span></a></li>
                                <li><a href="index-construction.html">Construction <span class="badge badge-pill badge-danger">New</span></a></li>
                                <li><a href="index-real-estate.html">Real Estate <span class="badge badge-pill badge-danger">New</span></a></li>
                                <li><a href="index-hospital.html">Hospital <span class="badge badge-pill badge-danger">New</span></a></li>
                                <li><a href="index-integration.html">Integration <span class="badge badge-pill badge-danger">New</span></a></li>
                                <li><a href="index-landing-four.html">Landing Four <span class="badge badge-pill badge-danger">New</span></a></li>
                                <li><a href="index-task-management.html">Task Management </a></li>
                                <li><a href="index-email-inbox.html">Email Inbox </a></li>
                                <li><a href="index-landing-one.html">Landing One </a></li>
                                <li><a href="index-landing-two.html">Landing Two </a></li>
                                <li><a href="index-landing-three.html">Landing Three </a></li>
                                <li><a href="index-travel.html">Travel </a></li>
                                <li><a href="index-blog.html">Blog </a></li>
                                <li><a href="forums.html">Forums </a></li>
                                <li><a href="index-personal.html">Personal</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="index-shop.html">Shop <span class="badge badge-pill badge-info">Updated</span></a></li>
                                <li><a href="index-insurance.html">Insurance</a></li>
                                <li><a href="index-coworking.html">Coworking</a></li>
                                <li><a href="index-course.html">Course</a></li>
                                <li><a href="index-online-learning.html">Online Learning</a></li>
                                <li><a href="index-event.html">Event</a></li>
                                <li><a href="index-single-product.html">Product</a></li>
                                <li><a href="index-portfolio.html">Portfolio</a></li>
                                <li><a href="index-job.html">Job</a></li>
                                <li><a href="index-social-marketing.html">Social Media</a></li>
                                <li><a href="index-digital-agency.html">Digital Agency</a></li>
                                <li><a href="index-car-riding.html">Car Ride</a></li>
                                <li><a href="index-customer.html">Customer</a></li>
                                <li><a href="index-software.html">Software</a></li>
                                <li><a href="index-ebook.html">E-Book</a></li>
                                <li><a href="index-onepage.html">Saas <span class="badge badge-pill badge-warning ml-2">Onepage</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-aboutus.html"> About Us</a></li>
                                <li><a href="page-aboutus-two.html"> About Us Two </a></li>
                                <li><a href="page-services.html">Services</a></li>
                                <li><a href="page-history.html">History </a></li>
                                <li><a href="page-team.html"> Team</a></li>
                                <li><a href="page-pricing.html">Pricing</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Account </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="account-profile.html">Profile</a></li>
                                <li><a href="account-members.html">Members </a></li>
                                <li><a href="account-works.html">Works </a></li>
                                <li><a href="account-messages.html">Messages </a></li>
                                <li><a href="account-payments.html">Payments </a></li>
                                <li><a href="account-setting.html">Setting</a></li>
                                <li><a href="page-invoice.html">Invoice</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Shop <span class="badge badge-pill badge-success">Added</span></a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="shop-grids.html">Product Grids</a></li>
                                <li><a href="shop-lists.html">Product List <span class="badge badge-pill badge-danger">New</span></a></li>
                                <li><a href="shop-product-detail.html">Product Details</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="shop-checkouts.html">Checkouts</a></li>
                                <li><a href="shop-myaccount.html">My Account</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Help center </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="helpcenter-overview.html">Helpcenter</a></li>
                                <li><a href="helpcenter-faqs.html">Faqs</a></li>
                                <li><a href="helpcenter-guides.html">Guides</a></li>
                                <li><a href="helpcenter-support-request.html">Support Call</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Forums </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="forums.html">Overview </a></li>
                                <li><a href="forums-topic.html">Forum Topic </a></li>
                                <li><a href="forums-comments.html">Forum Comments </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="email-confirmation.html">Confirmation</a></li>
                                <li><a href="email-password-reset.html">Reset Password</a></li>
                                <li><a href="email-alert.html">Alert</a></li>
                                <li><a href="email-invoice.html">Invoice</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)">Careers <span class="badge badge-pill badge-success">Added</span></a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-jobs.html">Jobs</a></li>
                                <li><a href="page-jobs-sidebar.html">Jobs - Sidebar</a></li>
                                <li><a href="page-job-detail.html">Job Detail</a></li>
                                <li><a href="page-job-apply.html">Job Apply</a></li>
                                <li><a href="page-job-company-list.html">Company Listing <span class="badge badge-pill badge-danger">New</span></a></li>
                                <li><a href="page-job-company.html">Company Detail</a></li>
                                <li><a href="page-job-candidate-list.html">Candidate Listing <span class="badge badge-pill badge-danger">New</span></a></li>
                                <li><a href="page-job-candidate.html">Candidate Detail</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-blog-grid.html">Blog Grid</a></li>
                                <li><a href="page-blog-sidebar.html">Blog with Sidebar</a></li>
                                <li><a href="page-blog-list.html">Blog Listing</a></li>
                                <li><a href="page-blog-list-sidebar.html">Blog List & Sidebar</a></li>
                                <li><a href="page-blog-detail.html">Blog Detail</a></li>
                                <li><a href="page-blog-detail-two.html">Blog Detail 2 </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Case Study </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-cases.html">All Cases </a></li>
                                <li><a href="page-case-detail.html">Case Detail </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Portfolio</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-portfolio-modern.html">Portfolio Modern</a></li>
                                <li><a href="page-portfolio-classic.html">Portfolio Classic</a></li>
                                <li><a href="page-portfolio-grid.html">Portfolio Grid</a></li>
                                <li><a href="page-portfolio-masonry.html">Portfolio Masonry</a></li>
                                <li><a href="page-portfolio-detail.html">Portfolio Detail</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Auth Pages</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-login.html">Login</a></li>
                                <li><a href="auth-cover-login.html">Login Cover</a></li>
                                <li><a href="auth-login-three.html">Login Simple</a></li>
                                <li><a href="auth-signup.html">Signup</a></li>
                                <li><a href="auth-cover-signup.html">Signup Cover</a></li>
                                <li><a href="auth-signup-three.html">Signup Simple</a></li>
                                <li><a href="auth-re-password.html">Reset Password</a></li>
                                <li><a href="auth-cover-re-password.html">Reset Password Cover</a></li>
                                <li><a href="auth-re-password-three.html">Reset Password Simple</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-terms.html">Terms of Services</a></li>
                                <li><a href="page-privacy.html">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Special <span class="badge badge-pill badge-success">Added</span></a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-comingsoon.html">Coming Soon</a></li>
                                <li><a href="page-comingsoon2.html">Coming Soon Two</a></li>
                                <li><a href="page-maintenance.html">Maintenance</a></li>
                                <li><a href="page-error.html">Error</a></li>
                                <li><a href="page-thankyou.html">Thank you <span class="badge badge-pill badge-danger">New</span></a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-contact-detail.html">Contact Detail</a></li>
                                <li><a href="page-contact-one.html">Contact One</a></li>
                                <li><a href="page-contact-two.html">Contact Two</a></li>
                                <li><a href="page-contact-three.html">Contact Three</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="documentation.html">Documentation</a></li>
                        <li><a href="changelog.html">Changelog</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="widget.html">Widget</a></li>
                    </ul>
                </li>
            </ul><!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Buy Now</a>
            </div><!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
    <nav class="navbar navbar-dark bg-info navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom" style="background-color:#2f55d4!important; ">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item" style="padding: 0px!important;<?=$this->uri->segment(1)==''?'border:2px solid white;border-radius:10px;':null;?>">
                <a href="<?=base_url()?>" class="nav-link" style="<?=$this->uri->segment(1)==''?'color:white':null;?>">
                    <i class="uil uil-estate align-middle icons"></i><br/> Home
                </a>
            </li>

            <li class="nav-item" style="<?=$this->uri->segment(2)=='promo'?'border:2px solid white':null?>">
                <a href="<?=base_url().'store/promo'?>" class="nav-link" style="<?=$this->uri->segment(2)=='promo'?'color:white':null;?>">
                    <i class="uil uil-percentage align-middle icons" style="padding:0px!important;"></i><br/> promo

                </a>
            </li>
            <li class="nav-item" style="<?=$this->uri->segment(2)=='article'?'border:2px solid white':null?>">
                <a href="<?=base_url().'store/article/all'?>" class="nav-link" style="<?=$this->uri->segment(2)=='article'?'color:white':null;?>">
                    <i class="uil uil-newspaper align-middle icons" style="padding:0px!important;"></i><br/> Article
                </a>

            </li>
            <li class="nav-item" style="<?=$this->uri->segment(2)=='auth'?'border:2px solid white':null;?>">
                <?php if($this->session->userdata('id_member')!=''){ ?>
                    <a href="<?=base_url().'store/logout'?>" class="nav-link" style="<?=$this->uri->segment(2)=='auth'?'color:white':null;?>">
                        <i class="uil uil-sign-out-alt align-middle icons" style="padding:0px!important;"></i><br/> Logout
                    </a>
                <?php } else{ ?>
                    <a href="<?=base_url().'store/auth?page=login'?>" class="nav-link" style="<?=$this->uri->segment(2)=='auth'?'color:white':null;?>">
                        <i class="uil uil-sign-in-alt align-middle icons" style="padding:0px!important;"></i><br/> Login
                    </a>
                <?php } ?>
            </li>
        </ul>
    </nav>

</header><!--end header-->
<!-- Navbar End -->

<!-- Hero Start -->
<section class="main-slider">
    <ul class="slides">
        <li class="bg-slider slider-rtl-2 d-flex align-items-center" style="background:url('<?=base_url().'assets/frontend/'?>images/shop/bg2.jpg') center center;">
            <div class="container">
                <div class="row align-items-center mt-5">
                    <div class="col-lg-7 col-md-7">
                        <div class="title-heading mt-4">
                            <h1 class="display-4 title-white font-weight-bold mb-3">New Accessories <br> Collections</h1>
                            <p class="para-desc text-muted para-dark">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </li>
        <li class="bg-slider slider-rtl-1 d-flex align-items-center" style="background:url('<?=base_url().'assets/frontend/'?>images/shop/bg1.jpg') center center;">
            <div class="container">
                <div class="row align-items-center mt-5">
                    <div class="col-lg-7 col-md-7">
                        <div class="title-heading mt-4">
                            <h1 class="display-4 title-white font-weight-bold mb-3">Headphones <br> Speaker</h1>
                            <p class="para-desc text-muted para-dark">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </li>
        <li class="bg-slider slider-rtl-3 d-flex align-items-center" style="background:url('<?=base_url().'assets/frontend/'?>images/shop/bg3.jpg') center center;">
            <div class="container">
                <div class="row align-items-center mt-5">
                    <div class="col-lg-7 col-md-7">
                        <div class="title-heading mt-4">
                            <h1 class="display-4 title-white font-weight-bold mb-3">Modern Furniture, <br> Armchair</h1>
                            <p class="para-desc text-muted para-dark">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </li>
    </ul>
</section><!--end section-->
<!-- Hero End -->

<!-- Features Start -->
<div class="container-fluid mt-5 pt-2">
    <div class="row">
        <div class="swiper-container swiper-best-seller">
            <div class="swiper-button-prev previous"></div>
            <div class="swiper-button-next next"></div>
            <div class="swiper-wrapper">
                <?php $no=0; foreach($promo as $row):
                $tmp_disc = array();
                $decode = json_decode($row['diskon'], true);
                foreach ($decode as $disc) {
                    array_push($tmp_disc, $disc.'%');
                }
                ?>
                    <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding:0px;" class="swiper-slide" data-aos="<?=$no%2==0?'zoom-in':'zoom-out'?>" data-aos-duration="1000">
                        <div class="py-5 rounded shadow" style="background: url('<?=base_url().'assets/frontend/images/shop/fea2.jpg'?>') top center; ">
                            <div class="p-4" style="">
                                <h3 style="color:#EEEEEE"><?=$row['promo'].' - '.implode(' + ', $tmp_disc)?></h3>
                                <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Shop Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div><!--end row-->
</div><!--end container-->
<!-- Features End -->


<!-- Start -->
<section class="section">
    <!-- Start Most Viewed Products -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-0">Best Seller</h5>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <?php for($i=0;$i<8;$i++):?>
            <div class="col-lg-3 col-md-6 col-6 mt-4 pt-2">
                <div class="card shop-list border-0 position-relative" style="background:#f5f6fa!important;box-shadow: 0 3px 0px 0 rgba(47, 85, 212, 0.3)!important;">
                    <ul class="label list-unstyled mb-0">
                        <li><a href="javascript:void(0)" class="badge badge-pill badge-primary">New</a></li>
                        <li><a href="javascript:void(0)" class="badge badge-pill badge-success">Featured</a></li>
                        <li><a href="javascript:void(0)" class="badge badge-pill badge-warning">Sale</a></li>
                    </ul>
                    <div class="shop-image position-relative overflow-hidden rounded shadow">
                        <a href="shop-product-detail.html"><img src="<?=base_url().'assets/frontend/'?>images/shop/product/s1.jpg" class="img-fluid" alt=""></a>
                        <a href="shop-product-detail.html" class="overlay-work">
                            <img src="<?=base_url().'assets/frontend/'?>images/shop/product/s-1.jpg" class="img-fluid" alt="">
                        </a>
                        <ul class="list-unstyled shop-icons">
                            <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                            <li class="mt-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                            <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body content pt-4 p-2">
                        <a href="shop-product-detail.html" class="text-dark product-name h6">Branded T-Shirt</a>
                        <div class="d-flex justify-content-between mt-1">
                            <h6 class="text-muted small font-italic mb-0 mt-1">$16.00 <del class="text-danger ml-2">$21.00</del> </h6>
                            <ul class="list-unstyled text-warning mb-0">
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <?php endfor;?>
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Most Viewed Product -->

    <!-- Start Categories -->
    <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-0">Top Categories</h5>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-10 rounded text-center bg-white">
                    <div class="card-body">
                        <img src="<?=base_url().'assets/frontend/'?>images/shop/categories/fashion.jpg" class="avatar avatar-small rounded-circle shadow-md" alt="">
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Fashion</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-10 rounded text-center bg-white">
                    <div class="card-body">
                        <img src="<?=base_url().'assets/frontend/'?>images/shop/categories/sports.jpg" class="avatar avatar-small rounded-circle shadow-md" alt="">
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Sports</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-10 rounded text-center bg-white">
                    <div class="card-body">
                        <img src="<?=base_url().'assets/frontend/'?>images/shop/categories/music.jpg" class="avatar avatar-small rounded-circle shadow-md" alt="">
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Music</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-10 rounded text-center bg-white">
                    <div class="card-body">
                        <img src="<?=base_url().'assets/frontend/'?>images/shop/categories/furniture.jpg" class="avatar avatar-small rounded-circle shadow-md" alt="">
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Furniture</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-10 rounded text-center bg-white">
                    <div class="card-body">
                        <img src="<?=base_url().'assets/frontend/'?>images/shop/categories/electronics.jpg" class="avatar avatar-small rounded-circle shadow-md" alt="">
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Electronics</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-10 rounded text-center bg-white">
                    <div class="card-body">
                        <img src="<?=base_url().'assets/frontend/'?>images/shop/categories/mobile.jpg" class="avatar avatar-small rounded-circle shadow-md" alt="">
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Mobiles</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- Start Categories -->

    <!-- Start Popular -->
    <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-0">Latest Products</h5>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <?php for($i=0;$i<8;$i++):?>
            <div class="col-lg-3 col-md-6 col-6 mt-4 pt-2">
                <div class="card shop-list border-0 position-relative" style="background:#f5f6fa!important;box-shadow: 0 3px 0px 0 rgba(47, 85, 212, 0.3)!important;">
                    <ul class="label list-unstyled mb-0">
                        <li><a href="javascript:void(0)" class="badge badge-pill badge-info">Popular</a></li>
                    </ul>
                    <div class="shop-image position-relative overflow-hidden rounded shadow">
                        <a href="shop-product-detail.html"><img src="<?=base_url().'assets/frontend/'?>images/shop/product/s9.jpg" class="img-fluid" alt=""></a>
                        <a href="shop-product-detail.html" class="overlay-work">
                            <img src="<?=base_url().'assets/frontend/'?>images/shop/product/s-9.jpg" class="img-fluid" alt="">
                        </a>
                        <ul class="list-unstyled shop-icons">
                            <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                            <li class="mt-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                            <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body content pt-4 p-2">
                        <a href="shop-product-detail.html" class="text-dark product-name h6">Coffee Cup / Mug</a>
                        <div class="d-flex justify-content-between mt-1">
                            <h6 class="text-muted small font-italic mb-0 mt-1">$16.00 <del class="text-danger ml-2">$21.00</del> </h6>
                            <ul class="list-unstyled text-warning mb-0">
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <?php endfor;?>
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Popular -->

    <!-- Start CTA -->
    <div class="container-fluid mt-100 mt-60">
        <div class="rounded py-5" style="background: url('<?=base_url().'assets/frontend/'?>images/shop/cta.jpg') fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2 class="font-weight-bold mb-4">End of Season Clearance <br> Sale upto 30%</h2>
                            <p class="para-desc para-white text-muted mb-0">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </div><!--end container-->
    <!-- End CTA -->


    <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-0">Popular News</h5>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <?php for($i=0;$i<10;$i++):?>
                <div class="col-lg-4 col-md-6 mb-4 pb-2 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="<?=base_url().'assets/frontend/'?>images/blog/01.jpg" class="card-img-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                </ul>
                                <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div>
            <?php endfor;?>
        </div><!--end row-->
    </div><!--end container-->

</section><!--end section-->
<!-- End -->

<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a href="#" class="logo-footer">
                    <img src="https://technopark.smkn14bdg.sch.id/assets/images/site/logo__2.png" height="30" alt="">
                </a>
                <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                <ul class="list-unstyled social-icon social mb-0 mt-4">
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">Company</h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="page-aboutus.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> About us</a></li>
                    <li><a href="page-services.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Services</a></li>
                    <li><a href="page-team.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Team</a></li>
                    <li><a href="page-pricing.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                    <li><a href="page-portfolio-modern.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Project</a></li>
                    <li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Careers</a></li>
                    <li><a href="page-blog-grid.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                    <li><a href="auth-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Login</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">Usefull Links</h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="page-terms.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms of Services</a></li>
                    <li><a href="page-privacy.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                    <li><a href="documentation.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a></li>
                    <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Changelog</a></li>
                    <li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Components</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">Newsletter</h5>
                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="foot-subscribe form-group">
                                <label>Write your email <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Your email : " required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary btn-block" value="Subscribe">
                        </div>
                    </div>
                </form>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left">
                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                </div>
            </div><!--end col-->

            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <ul class="list-unstyled text-sm-right mb-0">
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="<?=base_url().'assets/frontend/'?>images/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="<?=base_url().'assets/frontend/'?>images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="<?=base_url().'assets/frontend/'?>images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="<?=base_url().'assets/frontend/'?>images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="<?=base_url().'assets/frontend/'?>images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                </ul>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Product View Start -->
<div class="modal fade" id="productview" tabindex="-1" role="dialog" aria-labelledby="productview-title" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header">
                <h5 class="modal-title" id="productview-title">Branded T-Shirts </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="container-fluid px-0">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="slider slider-for">

                                <div><img src="<?=base_url().'assets/frontend/'?>images/shop/product/single-2.jpg" class="img-fluid rounded" alt=""></div>
                                <div><img src="<?=base_url().'assets/frontend/'?>images/shop/product/single-3.jpg" class="img-fluid rounded" alt=""></div>
                                <div><img src="<?=base_url().'assets/frontend/'?>images/shop/product/single-4.jpg" class="img-fluid rounded" alt=""></div>
                                <div><img src="<?=base_url().'assets/frontend/'?>images/shop/product/single-5.jpg" class="img-fluid rounded" alt=""></div>
                                <div><img src="<?=base_url().'assets/frontend/'?>images/shop/product/single-6.jpg" class="img-fluid rounded" alt=""></div>
                            </div>
                            <div class="slider slider-nav">

                                <div><img src="<?=base_url().'assets/frontend/'?>images/shop/product/single-2.jpg" class="img-fluid" alt=""></div>
                                <div><img src="<?=base_url().'assets/frontend/'?>images/shop/product/single-3.jpg" class="img-fluid" alt=""></div>
                                <div><img src="<?=base_url().'assets/frontend/'?>images/shop/product/single-4.jpg" class="img-fluid" alt=""></div>
                                <div><img src="<?=base_url().'assets/frontend/'?>images/shop/product/single-5.jpg" class="img-fluid" alt=""></div>
                                <div><img src="<?=base_url().'assets/frontend/'?>images/shop/product/single-6.jpg" class="img-fluid" alt=""></div>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-7 mt-4 mt-lg-0 pt-2 pt-lg-0">
                            <h4 class="title">Branded T-Shirts</h4>
                            <h5 class="text-muted">$21.00 <del class="text-danger ml-2">$25.00</del> </h5>
                            <ul class="list-unstyled text-warning h5">
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            </ul>

                            <h5 class="mt-4">Overview :</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero exercitationem, unde molestiae sint quae inventore atque minima natus fugiat nihil quisquam voluptates ea omnis. Modi laborum soluta tempore unde accusantium.</p>

                            <div class="row mt-4 pt-2">
                                <div class="col-12">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0">Your Size:</h6>
                                        <ul class="list-unstyled mb-0 ml-3">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">S</a></li>
                                            <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">M</a></li>
                                            <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">L</a></li>
                                            <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">XL</a></li>
                                        </ul>
                                    </div>
                                </div><!--end col-->

                                <div class="col-12 mt-4">
                                    <div class="d-flex shop-list align-items-center">
                                        <h6 class="mb-0">Quantity:</h6>
                                        <div class="ml-3">
                                            <input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold">
                                            <input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="btn btn-icon btn-soft-primary font-weight-bold">
                                            <input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold">
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="mt-4 pt-2">
                                <a href="javascript:void(0)" class="btn btn-primary">Shop Now</a>
                                <a href="shop-cart.html" class="btn btn-soft-primary ml-2">Add to Cart</a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div>
    </div>
</div>
<!-- Product View End -->

<!-- Wishlist Popup Start -->
<div class="modal fade" id="wishlist" tabindex="-1" role="dialog" aria-labelledby="wishlist-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded shadow-lg border-0 overflow-hidden">
            <div class="modal-body py-5">
                <div class="text-center">
                    <div class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto" style="height: 95px; width:95px;">
                        <h1 class="mb-0"><i class="uil uil-heart-break align-middle"></i></h1>
                    </div>
                    <div class="mt-4">
                        <h4>Your wishlist is empty.</h4>
                        <p class="text-muted">Create your first wishlist request...</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-outline-primary">+ Create new wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wishlist Popup End -->

<!-- Back to top -->
<a href="#" class="btn btn-icon btn-primary back-to-top" style="margin-bottom: 100px!important;"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->


<!-- javascript -->
<script src="<?=base_url().'assets/frontend/'?>js/jquery-3.5.1.min.js"></script>
<script src="<?=base_url().'assets/frontend/'?>js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url().'assets/frontend/'?>js/jquery.easing.min.js"></script>
<script src="<?=base_url().'assets/frontend/'?>js/scrollspy.min.js"></script>
<!--FLEX SLIDER-->
<script src="<?=base_url().'assets/frontend/'?>js/jquery.flexslider-min.js"></script>
<script src="<?=base_url().'assets/frontend/'?>js/flexslider.init.js"></script>
<!-- Slider -->
<script src="<?=base_url().'assets/frontend/'?>js/owl.carousel.min.js"></script>
<script src="<?=base_url().'assets/frontend/'?>js/slick.min.js"></script>
<script src="<?=base_url().'assets/frontend/'?>js/slick.init.js"></script>
<!-- Icons -->
<script src="<?=base_url().'assets/frontend/'?>js/feather.min.js"></script>
<script src="<?=base_url().'assets/frontend/'?>unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js"></script>
<!-- Switcher -->
<script src="<?=base_url().'assets/frontend/'?>js/switcher.js"></script>
<!-- Main Js -->
<script src="<?=base_url().'assets/frontend/'?>js/app.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Quantity Plus Minus JS -->
<script>
    AOS.init();

    $('.plus').click(function () {
        if ($(this).prev().val() < 999) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.minus').click(function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });
    var mySwiperBestSeller = new Swiper ('.swiper-best-seller', {
        direction: 'horizontal',
        autoplay: true,
        autoplaySpeed: 2000,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        grabCursor: true,
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 10,
                centeredSlides: true,
            },
            // when window width is <= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 20,
                centeredSlides: true,
            },

            640: {
                slidesPerView: 2,
                spaceBetween: 20,
                centeredSlides: true,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        }
    });

</script>
</body>

<!-- Mirrored from shreethemes.in/landrick/layouts/index-shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 14:33:21 GMT -->
</html>