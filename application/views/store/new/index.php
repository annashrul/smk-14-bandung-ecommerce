

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MJC5FWG');</script>
    <!-- End Google Tag Manager -->
    <meta name="google-site-verification" content="MGaJ-eY9-qmOrrUlu3DHE_-qVFzq6NSYLYvY2hbmyis" />

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
    <link rel="stylesheet" href="<?=base_url().'assets/frontend/'?>css/owl.theme.default.min.css"/>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="<?=base_url().'assets/frontend/'?>js/jquery-3.5.1.min.js"></script>
    <script src="<?=base_url().'assets/frontend/'?>js/owl.carousel.min.js"></script>
    <script src="<?=base_url().'assets/frontend/'?>js/owl.init.js"></script>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>-->
    <script type="text/javascript" src="<?=base_url().'assets/fo/'?>assets/js/jquery-validation/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/bootstrap-side-modals.css">

    <script type="text/javascript" src="<?=base_url().'assets/fo/'?>assets/js/jQuery-autocomplete/jquery.autocomplete.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <style>
        *{font-family: 'Stylish', sans-serif!important;}
        html{font-family: 'Stylish', sans-serif!important;}
        body{font-family: 'Stylish', sans-serif!important;}
        .error{
            color:red!important;
        }
        .first-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1050;
            background: rgba(168, 168, 168, .5)
        }
        .first-loader img {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px
        }
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
        .autocomplete-suggestions { border: 1px solid #999; background: #fff; cursor: default; overflow: auto; }
        .autocomplete-suggestion { padding: 10px 5px; font-size: 8pt; white-space: nowrap; overflow: hidden; }
        .autocomplete-selected { background: #f0f0f0; }
        .autocomplete-suggestions strong { font-weight: normal; color: #3399ff; }

    </style>
</head>


<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJC5FWG"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
<?php $mobile=$this->agent->is_mobile(); ?>
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="<?=base_url()?>">
                <img src="https://technopark.smkn14bdg.sch.id/assets/images/site/logo__2.png" height="30" alt="">
            </a>
        </div>
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                <div class="dropdown">
                    <button type="button" class="btn btn-link text-decoration-none dropdown-toggle p-0 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify h4 text-muted"></i>
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-0" style="width:400px;">
                        <form style="width: 100%!important;">
<!--                            <input type="text" name="Search" class="cari" placeholder="Search products">-->

                            <input style="width:400px;" type="text" id="text" name="name" class="form-control border bg-white cari" placeholder="Search...">
                        </form>
                    </div>
                </div>
            </li>
            <?php
            if($this->session->id_member!=''){
            ?>
            <li class="list-inline-item mb-0 pr-1">
                <div class="dropdown">
                    <button type="button" class="btn btn-icon btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-shopping-cart align-middle icons"></i><small id="countCart"></small></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 p-4" style="width: 300px;">
                        <div class="pb-4" id="cartNav">
                            <a href="javascript:void(0)" class="media align-items-center">
                                <img src="<?=base_url().'assets/frontend/'?>images/shop/product/s-1.jpg" class="shadow rounded" style="max-height: 64px;" alt="">
                                <div class="media-body text-left ml-3">
                                    <h6 class="text-dark mb-0">T-shirt (M)</h6>
                                    <p class="text-muted mb-0">$320 X 2</p>
                                </div>
                                <h6 class="text-dark mb-0">$640</h6>
                            </a>


                        </div>

                        <div class="media align-items-center justify-content-between pt-4 border-top">
                            <h6 class="text-dark mb-0">Total(Rp):</h6>
                            <h6 class="text-dark mb-0" id="totNav">$1690</h6>
                        </div>

                        <div class="media align-items-center justify-content-between pt-2">
                            <a href="javascript:void(0)" onclick="goCart()" class="btn btn-primary mr-2">View Cart</a>
                            <a href="javascript:void(0)" class="btn btn-primary" onclick="bayar()">Checkout</a>
                        </div>
                    </div>
                </div>
            </li>
            <?php if(!$mobile){ ?>
            <li class="list-inline-item mb-0">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-icon btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-user align-middle icons"></i></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-3" style="width: 200px;">
                        <a class="dropdown-item text-dark" href="<?=base_url().'store/profile'?>"><i class="uil uil-user align-middle mr-1"></i> Account</a>
                        <div class="dropdown-divider my-3 border-top"></div>
                        <a class="dropdown-item text-dark" href="<?=base_url().'store/logout'?>"><i class="uil uil-sign-out-alt align-middle mr-1"></i> Logout</a>
                    </div>
                </div>

            </li>
            <?php } ?>
            <?php }else{ if(!$mobile){?>
                <li class="list-inline-item mb-0">
                    <div class="dropdown dropdown-primary">
                        <a href="<?=base_url().'store/auth?page=login'?>" class="btn btn-icon btn-primary" aria-haspopup="true" aria-expanded="false"><i class="uil uil-sign-in-alt align-middle icons"></i></a>
                    </div>
                </li>
            <?php }} ?>
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
                <li><a style="<?=$this->uri->segment(1)==""?'color: #2f55d4!important;':'color:#000!important;'?>" href="<?=base_url()?>">Home</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Category</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <?php foreach ($nav_menu as $row) {?>
                                    <li>
                                        <a href="<?=base_url().'store/list_produk/groups/'.$row['id_groups']?>"><?=$row['nama']?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="<?=$this->uri->segment(2)=="promo"?'active':null?>"><a style="<?=$this->uri->segment(2)=="promo"?'color: #2f55d4!important;':'color:#000!important;'?>" href="<?=base_url().'store/promo'?>">Promo</a></li>
                <li class="<?=$_GET['page']=='gallery'?'active':null?>"><a style="<?=$_GET['page']=='gallery'?'color: #2f55d4!important;':'color:#000!important;'?>" href="<?=base_url()?>">Location</a></li>
                <li class="has-submenu <?=$_GET['page']=='about'||$_GET['page']=='tutorial'||$this->uri->segment(2)=='article'?'active':null?>">
                    <a style="<?=$_GET['page']=='about'||$_GET['page']=='tutorial'||$this->uri->segment(2)=='article'?'color:2f55d4!important':'color:#000!important;'?>" href="javascript:void(0)">Information</a>
                    <span class="menu-arrow" style="color: black!important;"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="<?=base_url().'store?page=about'?>">About</a></li>
                                <li><a href="<?=base_url().'store?page=tutorial'?>">Tutorial</a></li>
                                <li><a href="<?=base_url().'store/article/all'?>">Article</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
    <?php if($this->uri->segment(1)==''){?>
    <nav class="navbar navbar-dark bg-info navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom" style="background-color:#2f55d4!important; ">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item" style="padding: 0px!important;<?=$this->uri->segment(1)==''?'border:2px solid white;border-radius:10px;':null;?>">
                <a href="<?=base_url()?>" class="nav-link" style="<?=$this->uri->segment(1)==''?'color:white':null;?>">
                    <i class="uil uil-estate align-middle icons"></i><br/> Home
                </a>
            </li>

            <li class="nav-item" style="<?=$this->uri->segment(2)=='promo'?'border:2px solid white':null?>">
                <a href="<?=base_url().'store/get_all_product'?>" class="nav-link" style="<?=$this->uri->segment(2)=='promo'?'color:white':null;?>">
                    <i class="uil uil-apps align-middle icons" style="padding:0px!important;"></i><br/> Product
                </a>
            </li>
            <li class="nav-item" style="<?=$this->uri->segment(2)=='article'?'border:2px solid white':null?>">
                <a href="<?=base_url().'store/article/all'?>" class="nav-link" style="<?=$this->uri->segment(2)=='article'?'color:white':null;?>">
                    <i class="uil uil-newspaper align-middle icons" style="padding:0px!important;"></i><br/> Article
                </a>

            </li>
            <li class="nav-item" style="<?=$this->uri->segment(2)=='auth'?'border:2px solid white':null;?>">
                <?php if($this->session->userdata('id_member')!=''){ ?>
                    <a href="<?=base_url().'store/profile'?>" class="nav-link" style="<?=$this->uri->segment(2)=='auth'?'color:white':null;?>">
                        <i class="uil uil-user align-middle icons" style="padding:0px!important;"></i><br/> Profile
                    </a>
                <?php } else{ ?>
                    <a href="<?=base_url().'store/auth?page=login'?>" class="nav-link" style="<?=$this->uri->segment(2)=='auth'?'color:white':null;?>">
                        <i class="uil uil-sign-in-alt align-middle icons" style="padding:0px!important;"></i><br/> Login
                    </a>
                <?php } ?>
            </li>
        </ul>
    </nav>
    <?php } ?>
    <?php if($this->uri->segment(2)=='cart'){ ?>
    <nav class="navbar navbar-dark bg-info navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom" style="background-color:#2f55d4!important; ">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a href="javascript:void(0)" onclick="bayar()" class="nav-link text-left">Checkout <small class="totCart" style="float: right;font-weight: bold;"></small></a>
            </li>
        </ul>
    </nav>
    <?php } ?>
    <?php if($this->uri->segment(2)=='get_all_product'){ ?>
        <nav class="navbar navbar-dark bg-info navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom" style="background-color:#2f55d4!important; ">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="javascript:void(0)" onclick="loadmore()" class="nav-link">Loadmore</a>
                </li>
            </ul>
        </nav>
    <?php } ?>
    <?php if($this->uri->segment(2)=='list_produk'&&$this->uri->segment(4)!=''&&$this->uri->segment(4)!=''){ ?>
        <nav class="navbar navbar-dark bg-info navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom" style="background-color:#2f55d4!important; ">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="javascript:void(0)" onclick="loadmoreProduct()" class="nav-link">Loadmore</a>
                </li>
            </ul>
        </nav>
    <?php } ?>

    <?php if($this->uri->segment(2)=='article'&&$this->uri->segment(3)!=''){ ?>
        <nav class="navbar navbar-dark bg-info navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom" style="background-color:#2f55d4!important; ">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="javascript:void(0)" onclick="loadmoreNews()" class="nav-link">Loadmore</a>
                </li>
            </ul>
        </nav>
    <?php } ?>
</header><!--end header-->
<!-- Navbar End -->
<?php $this->load->view($content); ?>
<?php if(!$mobile||$this->uri->segment(1)==""){ ?>
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
<?php } ?>

<!-- Back to top -->
<a href="#" class="btn btn-icon btn-primary back-to-top" style="margin-bottom: 100px!important;"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->


<!-- javascript -->
<script src="<?=base_url().'assets/frontend/'?>js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url().'assets/frontend/'?>js/jquery.easing.min.js"></script>
<script src="<?=base_url().'assets/frontend/'?>js/scrollspy.min.js"></script>
<!--FLEX SLIDER-->
<script src="<?=base_url().'assets/frontend/'?>js/jquery.flexslider-min.js"></script>
<script src="<?=base_url().'assets/frontend/'?>js/flexslider.init.js"></script>
<!-- Slider -->
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
    $(document).ready(function(){
        countCart();
        AOS.init();
    });
    $(".cari").autocomplete({
        minChars: 3,
        serviceUrl: '<?=base_url().'ajax/get_produk'?>',
        type: 'post',
        dataType: 'json',
        response: function(event, ui) {
            if (ui.content.length === 0) {
                $("#empty-message").text("No results found");
            } else {
                $("#empty-message").empty();
            }
        },
        onSelect: function (suggestion) {
            if (suggestion.lokasi !== 'not_found') {
                window.location.href='<?=base_url().'store/product?product_id='?>'+suggestion.id_produk;
            } else {
                console.log('gagal')
            }
        }
    });

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
                slidesPerView: 4,
                spaceBetween: 40,
            },
        }
    });

    function countCart(){
        $.ajax({
            url : "<?=base_url().'ajax/cart'?>",
            type : "POST",
            dataType : "JSON",
            beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
            complete: function() {$('.first-loader').remove();},
            success:function(res){
                console.log(res);
                $("#countCart").html(res.count);
                $("#countCartMbl").html(res.count);
                $("#cartNav").html(res.result);
                $("#totNav").html(res.total)
                $(".totCart").html(res.total)
            }
        })
    }
    function goCart(){
        if($("#countCart").text()==="0"){
            alert("maaf keranjang anda kosong");
        }
        else{
            window.location.href="<?=base_url().'store/cart'?>"
        }
    }
    function bayar(){
        if($("#countCart").text()==="0"){
            swal({
                title: "Opppss ...",
                text: "basket is empty",
                icon: "warning",
            })
        }
        else{
            window.location.href="<?=base_url().'store/checkout'?>"
        }

    }
    function to_rp(angka, param=null){
        if(angka !== '' || angka !== 0){
            var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
            var rev2    = '';
            for(var i = 0; i < rev.length; i++){
                rev2  += rev[i];
                if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
                    rev2 += ',';
                }
            }

            var dec		= parseFloat(angka, 10).toString().split('.');
            if(dec[1] > 0){ dec = dec[1]; } else { dec = '00'; }

            //return 'IDR : ' + rev2.split('').reverse().join('') + ',-';
            return rev2.split('').reverse().join('') + (param==null?'.' + dec:'');
        } else {
            //return 'IDR : ';
            return '0';
        }
    }

</script>
</body>

<!-- Mirrored from shreethemes.in/landrick/layouts/index-shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 14:33:21 GMT -->
</html>