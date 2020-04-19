<style>
	.swiper-container {
		width: 100%;
		height: 100%;
	}
	.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;
		/* Center slide text vertically */
		display: -webkit-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center;
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
</style>
<!-- slider Area Start -->
<div class="slider-area ">
	<!-- Mobile Menu -->
	<div class="slider-active">
		<?php if($promo!=null){ foreach($promo as $row):
			$diskon = json_decode($row['diskon'], true);
			$data_diskon = '';
			for ($i=0;$i<count($diskon);$i++) {
				$data_diskon .= ($i>0)?' + ':' ';
				$data_diskon .= $diskon[$i].'%';
			}
		?>
			<div class="single-slider" style="background-size: cover;background-repeat: no-repeat;" data-background="<?=base_url().$row['gambar']?>">
				<div class="container">
					<div class="row d-flex align-items-center justify-content-between">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
							<div class="hero__img" data-animation="bounceIn" data-delay=".4s">
								<img src="<?=base_url().$row['gambar']?>" alt="" style="background-size: cover;background-repeat: no-repeat;background-position:center;height: 600px;">
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
							<div class="hero__caption">
								<span data-animation="fadeInRight" data-delay=".4s"><?=$data_diskon?> Discount</span>
								<h1 data-animation="fadeInRight" data-delay=".6s"><?=$row['promo']?></h1>
								<p data-animation="fadeInRight" data-delay=".8s"><?=$row['deskripsi']?></p>
								<!-- Hero-btn -->
								<div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
									<a href="<?=base_url().'store/list_produk/promo/'.$row['id_promo']?>" class="btn hero-btn">Shop Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; }else{ ?>
		<?php if($slider!=null){ foreach($slider as $row):
		?>
		<div class="single-slider slider-height" data-background="<?=base_url().$row['gambar']?>">
			<div class="container">
				<div class="row d-flex align-items-center justify-content-between">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
						<div class="hero__img" data-animation="bounceIn" data-delay=".4s">
							<img src="<?=base_url().$row['gambar']?>" alt="" style="height: 600px;">
						</div>
					</div>
					<div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
						<div class="hero__caption">
							<h1 data-animation="fadeInRight" data-delay=".6s"><?=$row['judul']?></h1>
							<!-- Hero-btn -->
							<div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
								<a href="<?=base_url().$row['link']?>" class="btn hero-btn">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; }} ?>
	</div>
</div>
<!-- slider Area End-->
<section class="latest-product-area padding-bottom section-padding30">
	<div class="container">
		<div class="row product-btn d-flex justify-content-end align-items-end">
			<!-- Section Tittle -->
			<div class="col-xl-4 col-lg-5 col-md-5">
				<div class="section-tittle mb-30">
					<h2>Best Seller</h2>
				</div>
			</div>
			<div class="col-xl-8 col-lg-7 col-md-7">
				<div class="properties__button f-right">
				</div>
			</div>
		</div>
		<!-- Nav Card -->
		<div class="tab-content" id="nav-tabContent">
			<!-- card one -->
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<div class="swiper-container swiper-best-seller">
					<div class="swiper-button-prev previous"></div>
					<div class="swiper-button-next next"></div>
					<div class="swiper-wrapper">
						<?php foreach($bestSeller as $row):?>
						<div class="swiper-slide">
							<div class="single-product mb-60">
								<div class="product-img">
									<img src="<?=base_url().$row['gambar']?>" alt="">
								</div>
								<div class="product-caption">
									<div class="product-ratting">
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star low-star"></i>
										<i class="far fa-star low-star"></i>
									</div>
									<h4><a href="<?=base_url().'store/product?product_id='.$row['id_produk']?>"><?=$row['nama']?></a></h4>
									<div class="price">
										<ul>
											<li><?=$row['hrg_jual']?></li>
											<li class="discount"><?=$row['hrg_sebelum']?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>

			</div>
		</div>
		<!-- End Nav Card -->
	</div>
</section>
<!-- Category Area End-->
<!-- Latest Products Start -->
<section class="latest-product-area">
	<div class="container">
		<div class="row product-btn d-flex justify-content-end align-items-end">
			<!-- Section Tittle -->
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="section-tittle mb-30">
					<h2>Latest Products</h2>
				</div>
			</div>
		</div>
		<!-- Nav Card -->
		<div class="tab-content" id="nav-tabContent">
			<!-- card one -->
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<div class="row">
					<?php foreach ($latestProduct as $row):?>
						<div class="col-6 col-xs-6 col-xl-3 col-lg-3 col-md-6">
							<div class="single-product mb-60">
								<div class="product-img">
									<img src="<?=base_url().$row['gambar']?>" alt="">
								</div>
								<div class="product-caption">
									<div class="product-ratting">
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star low-star"></i>
										<i class="far fa-star low-star"></i>
									</div>
									<h4><a href="<?=base_url().'store/product?product_id='.$row['id_produk']?>"><?=$row['nama']?></a></h4>
									<div class="price">
										<ul>
											<li><?=number_format($row['hrg_jual'])?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- End Nav Card -->
	</div>
</section>
<!-- Latest Products End -->
<!-- Best Product Start -->
<style>
	/*// Extra small devices (smart phones, less than 34em)*/
	@media (max-width: 33.9em) {
		.product_img_slide{height: 600px!important;}
	/*// write CSS properties here*/
	}
	/*// Small devices (phones, tablets less than 48em)*/
	@media (max-width: 47.9em) {
		.product_img_slide{height: 600px!important;}
	/*// write CSS properties here*/
	}

	/*// Medium devices (tablets, small laptops less than 62em)*/
	@media (max-width: 61.9em) {
		.product_img_slide{height: 600px!important;}
	/*// write CSS properties here*/
	}

	/*// Large devices (desktops, screens less than 75em)*/
	@media (min-width: 74.9em) {
		.product_img_slide{height: 700px!important;}
	/*// write CSS properties here*/
	}
	@media (max-width: 767px) {
		.product_img_slide{height: 400px!important;}
		/*.product_img_slide{border: 1px solid red;}*/
	}

	/*// Extra large devices (large desktops)*/
	/*// No media query since the extra-large breakpoint has no upper bound on its width*/
</style>
<!-- Start Align Area -->
<section class="latest-product-area">
	<div class="container">

		<!-- Nav Card -->
		<div class="swiper-container swiper-model">
			<div class="swiper-button-prev previous"></div>
			<div class="swiper-button-next next"></div>
			<div class="swiper-wrapper">
				<?php foreach($model as $key=>$row):$url=$key%2==0?'https://indokids.co.id/assets/images/produk/1.jpeg':'https://indokids.co.id/assets/images/produk/indokids_co_id-1522478700359.jpg'?>
					<div class="swiper-slide" onclick="return window.location.href='<?=base_url()."store/list_produk/model/".$row["id_model"]?>'" style="padding: 0px;cursor: pointer!important;">
						<img src="<?=base_url().$row['gambar']?>" style="height: 100%;width: 100%;" alt="">

					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- End Nav Card -->
	</div>
</section>

<!--================Blog Area =================-->
<section class="latest-product-area" >
	<div class="container">
		<div class="row product-btn d-flex justify-content-end align-items-end" style="margin-top: 50px;">
			<!-- Section Tittle -->
			<div class="col-6 col-xs-6 col-xl-4 col-lg-5 col-md-5">
				<div class="section-tittle mb-30">
					<h2>Article</h2>
				</div>
			</div>
			<div class="col-6 col-xs-6  col-xl-8 col-lg-7 col-md-7">
				<div class="properties__button f-right">
					<!--Nav Button  -->
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">See All</a>
						</div>
					</nav>
					<!--End Nav Button  -->
				</div>
			</div>
		</div>
		<!-- Nav Card -->
		<div class="row" >
			<?php foreach($news as $row):?>
				<article class="blog_item col-sm-6 col-lg-4" style="cursor: pointer" onclick="return window.location.href='<?=base_url()."store/article?detail=".$row['slug']?>'">
					<div class="blog_item_img">
						<img class="card-img rounded-0" src="<?=base_url().$row['gambar']?>" alt="">
						<a href="#" class="blog_item_date">
							<h3><?=date('d',strtotime($row['tgl_berita']))?></h3>
							<p><?=date('F',strtotime($row['tgl_berita']))?></p>
						</a>
					</div>
					<div class="blog_details">
						<a class="d-inline-block" href="#">
							<h2><?=strip_tags($row['judul'])?></h2>
						</a>
						<p><?=strip_tags($row['ringkasan'])?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
		<!-- End Nav Card -->
	</div>
</section>

<!---->
<!--<div class="best-product-area product_img_slide owl-carousel" style="" >-->
<!--	--><?php //foreach($topitem as $row):?>
<!--		<div class="product-wrapper bg-height" style="background-image: url('https://indokids.co.id/assets/images/site/Capture.PNG?height=960')">-->
<!--			<div class="container" style="background-color:rgba(0, 0, 0, 0.5);">-->
<!--				<div class="row justify-content-between align-items-end">-->
<!--					<div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">-->
<!--						<div class="vertical-text"  style="color: #0b0b0b">-->
<!--							<span>--><?//=$row['nama']?><!--</span>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="col-xl-8 col-lg-8">-->
<!--						<div class="best-product-caption">-->
<!--							<h2 style="color: white;">Find The Best Product<br> from Our Shop</h2>-->
<!--							<p style="color: white;">Designers who are interesten creating state ofthe.</p>-->
<!--							<a href="--><?//=base_url().'store/list_produk/top_item/'.$row['id_item']?><!--" class="black-btn">Shop Now</a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	--><?php //endforeach; ?>
<!--</div>-->



<script>
	$(document).ready(function(){
		countCart();
		var mySwiper = new Swiper ('.swiper-model', {
			direction: 'horizontal',
			// slidesPerColumn: 2,
			// slidesPerGroup:3,
			// spaceBetween: 5,
			// slidesPerColumn: 2,
			loop: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			grabCursor: true,
			centeredSlides: true,
			coverflowEffect: {
				rotate: 50,
				stretch: 0,
				depth: 100,
				modifier: 1,
				slideShadows : true,
			},
			lazyLoadingInPrevNext: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 10,
					centeredSlides: true,
					coverflowEffect: {
						rotate: 50,
						stretch: 0,
						depth: 100,
						modifier: 1,
						slideShadows : true,
					},
				},
				// when window width is <= 480px
				480: {
					slidesPerView: 2,
					spaceBetween: 20,
					centeredSlides: true,
					coverflowEffect: {
						rotate: 50,
						stretch: 0,
						depth: 100,
						modifier: 1,
						slideShadows : true,
					},
				},

				640: {
					slidesPerView: 2,
					spaceBetween: 20,
					centeredSlides: true,
					coverflowEffect: {
						rotate: 50,
						stretch: 0,
						depth: 100,
						modifier: 1,
						slideShadows : true,
					},
				},
				768: {
					slidesPerView: 4,
					spaceBetween: 40,
				},
				1024: {
					slidesPerView: 4,
					spaceBetween: 40,
				},
			}
		});

		var mySwiperBestSeller = new Swiper ('.swiper-best-seller', {
			direction: 'horizontal',
			loop: true,

			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			grabCursor: true,
			centeredSlides: true,
			coverflowEffect: {
				rotate: 50,
				stretch: 0,
				depth: 100,
				modifier: 1,
				slideShadows : true,
			},
			lazyLoadingInPrevNext: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 10,
					centeredSlides: true,
					coverflowEffect: {
						rotate: 50,
						stretch: 0,
						depth: 100,
						modifier: 1,
						slideShadows : true,
					},
				},
				// when window width is <= 480px
				480: {
					slidesPerView: 2,
					spaceBetween: 20,
					centeredSlides: true,
					coverflowEffect: {
						rotate: 50,
						stretch: 0,
						depth: 100,
						modifier: 1,
						slideShadows : true,
					},
				},

				640: {
					slidesPerView: 2,
					spaceBetween: 20,
					centeredSlides: true,
					coverflowEffect: {
						rotate: 50,
						stretch: 0,
						depth: 100,
						modifier: 1,
						slideShadows : true,
					},
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
	});
</script>
