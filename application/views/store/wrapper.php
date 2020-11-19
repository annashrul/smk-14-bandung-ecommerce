
<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $this->data['site']->nama ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--	<link rel="manifest" href="site.webmanifest">-->
	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url().$this->data['site']->icon?>">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?=base_url().'assets/fo/'?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/fo/'?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/fo/'?>assets/css/flaticon.css">
	<link rel="stylesheet" href="<?=base_url().'assets/fo/'?>assets/css/slicknav.css">
	<link rel="stylesheet" href="<?=base_url().'assets/fo/'?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/fo/'?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url().'assets/fo/'?>assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/fo/'?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?=base_url().'assets/fo/'?>assets/css/slick.css">
<!--	<link rel="stylesheet" href="--><?//=base_url().'assets/fo/'?><!--assets/css/nice-select.css">-->
	<link rel="stylesheet" href="<?=base_url().'assets/fo/'?>assets/css/style.css">
	<link href="<?=base_url()?>assets/fo/popup-img/lightgallery.css" rel="stylesheet">

	<style>
		.owl-prev,.owl-next{display: none!important;}
		.header-bottom .header-right .shopping-card #countCart {
			position: absolute;
			width: 25px;
			height: 25px;
			background: #00b1ff;
			color: #fff;
			line-height: 25px;
			text-align: center;
			border-radius: 30px;
			font-size: 12px;
			top: 0px;
			right: -6px;
			-webkit-transition: all 0.2s ease-out 0s;
			-moz-transition: all 0.2s ease-out 0s;
			-ms-transition: all 0.2s ease-out 0s;
			-o-transition: all 0.2s ease-out 0s;
			transition: all 0.2s ease-out 0s;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
		}

		label.error {color: red;}
		form.error{color: red;}
		/*Loading*/
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
		.autocomplete-suggestions { border: 1px solid #999; background: #fff; cursor: default; overflow: auto; }
		.autocomplete-suggestion { padding: 10px 5px; font-size: 8pt; white-space: nowrap; overflow: hidden; }
		.autocomplete-selected { background: #f0f0f0; }
		.autocomplete-suggestions strong { font-weight: normal; color: #3399ff; }

	</style>
	<script src="<?=base_url().'assets/fo/'?>assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/fo/'?>assets/js/jquery-validation/jquery.validate.min.js"></script>
<!--	<script type="text/javascript" src="--><?//=base_url().'assets/fo/'?><!--assets/js/jquery-validation/additional-methods.min.js"></script>-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script type="text/javascript" src="<?=base_url().'assets/fo/'?>assets/js/jQuery-autocomplete/jquery.autocomplete.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
	<script src="<?=base_url().'assets/fo/'?>assets/js/main.js"></script>
	
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
		$(document).on('ready', function () {
			countCart();
		});

		function countCart(){
			$.ajax({
				url : "<?=base_url().'ajax/cart'?>",
				type : "POST",
				dataType : "JSON",
				success:function(res){
					$("#countCart").html(res.count);
					$("#countCartMbl").html(res.count);
				}
			})
		}
	</script>
</head>

<body>


<!-- GetButton.io widget -->
<script type="text/javascript">
	(function () {
		var options = {
			whatsapp: "+<?=$sosmed['whatsapp']?>", // WhatsApp number
			// company_logo_url: "//storage.whatshelp.io/widget/fb/fb9d/fb9d0cb73397d2a1244720058e5383df/17903932_1320400234679798_5162717605185640625_n.jpg", // URL of company logo (png, jpg, gif)
			call_to_action: "Message us", // Call to action
			position: "left", // Position may be 'right' or 'left'
		};
		var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
		var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
		s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
		var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
	})();
</script>
<!-- /GetButton.io widget -->
<!-- /GetButton.io widget -->
<header>
	<!-- Header Start -->
	<div class="header-area">
		<div class="main-header ">
			<div class="header-bottom  header-sticky" style="z-index: 99;">
				<div class="container-fluid">
					<div class="row align-items-center">
						<!-- Logo -->
						<div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
							<div class="logo">
								<a href="<?=base_url()?>"><img src="<?=base_url().$this->data['site']->logo?>" style="height: 50px;" alt=""></a>
							</div>
						</div>
						<div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
							<!-- Main-menu -->
							<div class="main-menu f-right d-none d-lg-block">
								<nav>
									<ul id="navigation">

										<li class="d-block d-lg-none"><a href="<?=base_url()?>">Home</a></li>
										<li><a href="javascript:void(0)">Baby Shop</a>
											<ul class="submenu">
												<?php foreach ($nav_menu as $row) {
													echo '
													<li class="item">
														<a href="'.base_url().'store/list_produk/groups/'.$row['id_groups'].'"><font size="3" face="calibri">'.$row['nama'].'</font></a>
													</li>
												';}?>
											</ul>
										</li>
										<li><a href="<?=base_url().'store/promo'?>">Pomo</a></li>
										<li><a href="<?=base_url().'store?page=gallery'?>">Gallery</a></li>
										<li><a href="<?=base_url().'store?page=location'?>">Location</a></li>
										<li><a href="javascript:void(0)">Information</a>
											<ul class="submenu">
												<li><a href="<?=base_url().'store?page=about'?>">About</a></li>
												<li><a href="<?=base_url().'store?page=tutorial'?>">Tutorial</a></li>
												<li><a href="<?=base_url().'store/article/all'?>">Article</a></li>
											</ul>
										</li>
										<?php if($this->session->userdata('id_member')!=''){ ?>
										<li><a href="javascript:void(0)"><?=$this->session->userdata('nama')?></a>
											<ul class="submenu">
												<li><a href="javascript:void(0)">poin : <?= $this->data['account']['poin'] ?></a></li>
												<li><a href="javascript:void(0)">member code : <?= $this->data['account']['ol_code'] ?></a></li>
												<li><a href="javascript:void(0)"><?=$this->session->userdata('telepon')?></a></li>
												<li><a href="<?=base_url().'store/history'?>">Order History</a></li>
											</ul>
										</li>
										<?php } ?>

									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
							<ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
								<li class="d-none d-xl-block">
									<div class="form-box f-right">
										<input type="text" name="Search" class="cari" placeholder="Search products">
										<div class="search-icon">
											<i class="fas fa-search special-tag"></i>
										</div>
									</div>
								</li>
								<?php if($this->session->userdata('id_member')!=''){ ?>
								<li>
									<div class="shopping-card">
										<p id="countCart">0</p>
										<a href="<?=base_url().'store/cart'?>"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</li>

									<li class="d-block d-lg-block"> <a href="<?=base_url().'store/logout'?>" class="btn btn-primary" style="font-size: 12px;"><i class="fa fa-power-off"></i></a></li>
								<?php }else{?>
									<li class="d-block d-lg-block"> <a href="<?=base_url().'store/auth?page=login'?>" class="btn btn-primary" style="font-size: 12px;"><i class="fa fa-sign-in-alt"></i></a></li>
								<?php } ?>
							</ul>
						</div>
						<!-- Mobile Menu -->
						<div class="col-12">
							<div class="mobile_menu d-block d-lg-none">

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- Header End -->
</header>
<!-- Modal -->
<script>
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
</script>

<main>
	<?php $this->load->view($content); ?>
</main>


<footer>

	<!-- Footer Start-->
	<div class="footer-area footer-padding">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
					<div class="single-footer-caption mb-50">
						<div class="single-footer-caption mb-30">
							<!-- logo -->
							<div class="footer-logo">
								<a href="javascript:void(0)"><img src="<?=base_url().$this->data['site']->logo?>" style="height: 50px;" alt=""></a>
							</div>
							<div class="footer-tittle">
								<div class="footer-pera">
									<aside class="single_sidebar_widget newsletter_widget">
										<form action="#">
											<div class="form-group">
												<input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" placeholder='email' required>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" placeholder='First Name' required>
													</div>

												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" placeholder='Last Name' required>
													</div>

												</div>
											</div>
											<button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
										</form>
									</aside>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
					<div class="single-footer-caption mb-50">
						<div class="footer-tittle">
							<h4>Quick Links</h4>
							<ul>
								<li><a href="<?=base_url().'store?page=about'?>">About</a></li>
								<li><a href="<?=base_url().'store?page=privacy_policy'?>">Privacy & Policy</a></li>
								<li><a href="<?=base_url().'store?page=resolution'?>">Resolution Center</a></li>
								<li><a href="<?=base_url().'store?page=career'?>">Career</a></li>
								<li><a href="<?=base_url().'store?page=tutorial'?>">Tutorial</a></li>
								<li><a href="<?=base_url().'store/store/article/all'?>">Article</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
					<div class="single-footer-caption mb-50">
						<div class="footer-tittle">
							<h4>Baby & Shop</h4>
							<ul>
								<?php foreach ($nav_menu as $row) {
								echo '
									<li class="item">
										<a href="'.base_url().'store/list_produk/groups/'.$row['id_groups'].'"><font size="3" face="calibri">'.$row['nama'].'</font></a>
									</li>
                                ';}?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
					<div class="single-footer-caption mb-50">
						<div class="footer-tittle">
							<h4>Support</h4>
							<ul>
								<li><a href="#"><?=$cs['open']?></a></li>
								<li><a href="#"><?=$cs['time_open']?> to <?=$cs['time_close']?></a></li>
								<li><a href="tel:<?=$cs['tlp']?>"><?=$cs['tlp']?></a></li>
								<li><a href="mailto:<?=$cs['email']?>"><?=$cs['email']?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer bottom -->
			<div class="row">
				<div class="col-xl-7 col-lg-7 col-md-7">
					<div class="footer-copy-right">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="ti-heart" aria-hidden="true"></i> by <a href="javascript:void(0)" target="_blank"><?=$this->data['site']->nama?></a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                   </div>
				</div>
				<div class="col-xl-5 col-lg-5 col-md-5">
					<div class="footer-copy-right f-right">
						<!-- social -->
						<div class="footer-social">
							<a href="https://www.twitter.com/<?=$sosmed['twitter']?>"><i class="fab fa-twitter"></i></a>
							<a href="https://www.twitter.com/<?=$sosmed['facebook']?>"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.instagram.com/<?=$sosmed['instagram']?>"><i class="fab fa-instagram"></i></a>
							<a href="https://api.whatsapp.com/send?phone=<?=$sosmed['whatsapp']?>"><i class="fab fa-whatsapp"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End-->
</footer>
<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="<?=base_url().'assets/fo/'?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->

<script src="<?=base_url().'assets/fo/'?>assets/js/popper.min.js"></script>
<script src="<?=base_url().'assets/fo/'?>assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="<?=base_url().'assets/fo/'?>assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="<?=base_url().'assets/fo/'?>assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url().'assets/fo/'?>assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="<?=base_url().'assets/fo/'?>assets/js/wow.min.js"></script>
<script src="<?=base_url().'assets/fo/'?>assets/js/animated.headline.js"></script>
<script src="<?=base_url().'assets/fo/'?>assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="<?=base_url().'assets/fo/'?>assets/js/jquery.scrollUp.min.js"></script>
<!--<script src="--><?//=base_url().'assets/fo/'?><!--assets/js/jquery.nice-select.min.js"></script>-->
<script src="<?=base_url().'assets/fo/'?>assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="<?=base_url().'assets/fo/'?>assets/js/contact.js"></script>
<script src="<?=base_url().'assets/fo/'?>assets/js/jquery.form.js"></script>
<script src="<?=base_url().'assets/fo/'?>assets/js/jquery.validate.min.js"></script>
<script src="<?=base_url().'assets/fo/'?>assets/js/mail-script.js"></script>
<script src="<?=base_url().'assets/fo/'?>assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="<?=base_url().'assets/fo/'?>assets/js/plugins.js"></script>

<link href="<?=base_url().'assets/fo/popup-img/'?>lightgallery.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script src="<?=base_url().'assets/fo/popup-img/'?>lightgallery-all.min.js"></script>
<script src="<?=base_url().'assets/fo/popup-img/'?>jquery.mousewheel.min.js"></script>
<script>
	$(document).on('ready', function () {
		initSlider();
		mainSlider();
		countCart();
		productImgSlider();
		$("[data-background]").each(function () {
			$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
		});

		var menu = $('ul#navigation');
		if(menu.length){
			menu.slicknav({
				prependTo: ".mobile_menu",
				closedSymbol: '+',
				openedSymbol:'-'
			});
		};
		$(window).on('scroll', function () {
			var scroll = $(window).scrollTop();
			if (scroll < 245) {
				$(".header-sticky").removeClass("sticky-bar");
			} else {
				$(".header-sticky").addClass("sticky-bar");
			}
		});

		$(window).on('scroll', function () {
			var scroll = $(window).scrollTop();
			if (scroll < 245) {
				$(".header-sticky").removeClass("sticky");
			} else {
				$(".header-sticky").addClass("sticky");
			}
		});

		/* 8. sildeBar scroll */
		$.scrollUp({
			scrollName: 'scrollUp', // Element ID
			topDistance: '300', // Distance from top before showing element (px)
			topSpeed: 300, // Speed back to top (ms)
			animation: 'fade', // Fade, slide, none
			animationInSpeed: 200, // Animation in speed (ms)
			animationOutSpeed: 200, // Animation out speed (ms)
			scrollText: '<i class="ti-arrow-up"></i>', // Text for element
			activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		});

	});
	function productImgSlider(){
		$('.product_img_slide').owlCarousel({
			items: 1,
			loop: true,
			// dots: true,
			autoplay: true,
			autoplayHoverPause: true,
			autoplayTimeout: 5000,
			nav: true,
			// center:true,
			// margin:10,
			autoWidth:true,
			responsiveClass:true,
			dots: false,
			navText: [" <i class='ti-angle-left'></i> ", "<i class='ti-angle-right'></i> "],
			responsive: {
				0: {
					nav: false,
					autoWidth:true,
				},
				768: {
					nav: false,
					autoWidth:true,
				},
				991: {
					nav: true,
					autoWidth:true,
				}
			}
		});
	}

	function mainSlider() {
		var BasicSlider = $('.slider-active');
		BasicSlider.on('init', function (e, slick) {
			var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
			doAnimations($firstAnimatingElements);
		});
		BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
			var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
			doAnimations($animatingElements);
		});
		BasicSlider.slick({
			autoplay: false,
			autoplaySpeed: 10000,
			dots: false,
			fade: true,
			arrows: false,
			prevArrow: '<button type="button" class="slick-prev"><i class="ti-shift-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="ti-shift-right"></i></button>',
			responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
				}
			},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false
					}
				}
			]
		});

		function doAnimations(elements) {
			var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			elements.each(function () {
				var $this = $(this);
				var $animationDelay = $this.data('delay');
				var $animationType = 'animated ' + $this.data('animation');
				$this.css({
					'animation-delay': $animationDelay,
					'-webkit-animation-delay': $animationDelay
				});
				$this.addClass($animationType).one(animationEndEvents, function () {
					$this.removeClass($animationType);
				});
			});
		}
	}

	function initSlider(){
		$('.best-seller').slick({
			prevArrow: '<button type="button" class="slick-prev" style="display:none!important;background-color: black"><i class="fa fa-chevron-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next" style="display:none!important;background-color: black"><i class="fa fa-chevron-right"></i></button>',
			dots: false,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			autoplay: true,
			// centerMode: true,
			// arrows: true,x

			responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
					infinite: true,
				}
			},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						arrows: false,
						prevArrow: '<button type="button" class="slick-prev" style="display:none!important;background-color: black"><i class="fa fa-chevron-left"></i></button>',
						nextArrow: '<button type="button" class="slick-next" style="display:none!important;background-color: black"><i class="fa fa-chevron-right"></i></button>',
					}
				}
			]
		});
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
	function countCart(){
		$.ajax({
			url : "<?=base_url().'ajax/cart'?>",
			type : "POST",
			dataType : "JSON",
			success:function(res){
				console.log(res);
				$("#countCart").html(res.count);
			}
		})
	}

</script>
</body>
</html>
