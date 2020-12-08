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
<div class="slider-area " style="">
	<!-- Mobile Menu -->
	<div class="slider-active">
		<?php if($slider!=null){ foreach($slider as $row):?>
            <div class="single-slider" style="padding:10px;background-size: cover;background-repeat: no-repeat;" data-background="<?=base_url().$row['gambar']?>">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 align-items-center" style="height:370px!important;">
                            <div class="hero__caption text-right" style="padding-right:30px;padding-bottom:10px;position: absolute; bottom: 10px;width:100%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                <h3 data-animation="fadeInRight" data-delay=".6s" style="text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white ;"><?=$row['judul']?></h3>
                                <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                    <a href="<?=$row['link']?>" class="btn hero-btn">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php endforeach; } ?>
	</div>
</div>
<!-- slider Area End-->
<section class="latest-product-area padding-bottom section-padding30 bestSeller" >
	<div class="container">
		<div class="row product-btn d-flex justify-content-end align-items-end">
			<!-- Section Tittle -->
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="section-tittle">
					<h2>Best Seller</h2>
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
						<?php $np=0; foreach($bestSeller as $row):$no++;?>
						<div class="swiper-slide" data-aos="<?=$no%2==0?'zoom-in':'zoom-out'?>" data-aos-duration="1000">
							<?=$this->m_website->tempProduk($row['gambar'],$row['id_produk'],$row['nama'],$row['hrg_jual'],$row['hrg_sebelum'],null)?>
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
<section class="latest-product-area" >
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
					<?php $no=0; foreach ($latestProduct as $row):$no++;?>
						<div class="col-6 col-xs-6 col-xl-3 col-lg-3 col-md-6"  data-aos="<?=$no%2==0?'zoom-in':'zoom-out'?>" data-aos-duration="1000">
							<?=$this->m_website->tempProduk($row['gambar'],$row['id_produk'],$row['nama'],$row['hrg_jual'],null,null)?>
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
        .slider-area{height:500px;margin-bottom: -150px;}
        .single-slider{height:480px;}
        .bestSeller{margin-bottom: -150px;}
		.product_img_slide{height: 700px!important;}
	/*// write CSS properties here*/
	}
	@media (max-width: 767px) {
		.product_img_slide{height: 400px!important;}
		/*.product_img_slide{border: 1px solid red;}*/
	}

</style>
<!-- Start Align Area -->
<section class="latest-product-area">
	<div class="container">

		<div class="swiper-container swiper-model">
			<div class="swiper-button-prev previous"></div>
			<div class="swiper-button-next next"></div>
			<div class="swiper-wrapper">
				<?php $no=0; foreach($model as $row):$no++;?>
					<div  data-aos="<?=$no%2==0?'zoom-in':'zoom-out'?>" data-aos-duration="1000" class="swiper-slide" style="padding: 0px;cursor: pointer!important;" onclick="return window.location.href='<?=base_url()."store/list_produk/model/".$row["id_model"]?>//'">
                        <img src="<?=$row['gambar']?>" style="height: 100%;width: 100%;" alt="">
                    </div>
				<?php endforeach; ?>
			</div>
		</div>
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
							<a href="<?=base_url().'store/article/all'?>" class="d-none d-xl-block text-right nav-item nav-link active">Lihat Semua Artikel</a>
						</div>
					</nav>
					<!--End Nav Button  -->
				</div>
			</div>
		</div>
		<!-- Nav Card -->
		<div class="row" >
			<?php $no=0; foreach($news as $row):$no++;?>
				<div class="col-sm-6 col-lg-4" data-aos="<?=$no%2==0?'zoom-in-up':'zoom-in-down'?>" data-aos-duration="1000">
					<?=$this->m_website->tempNews($row["gambar"],$row["tgl_berita"],$row["slug_berita"],$row["judul"],$row["ringkasan"],$row["nama"])?>
				</div>

			<?php endforeach; ?>
		</div>
        <a href="<?=base_url().'store/article/all'?>" class="d-md-none d-lg-none d-xl-none button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn">Lihat Semua Artikel</a>

        <!-- End Nav Card -->
	</div>
</section>

<!-- feature part here -->
<section class="feature_part">
    <div class="container">
        <div class="row justify-content-center">
            <?php $no=0; foreach ($service as $row):$no++; ?>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part" data-aos="<?=$no%2==0?'zoom-in-up':'zoom-in-down'?>" data-aos-duration="1000">
                    <img src="<?=$row['image']?>" alt="#">
                    <h4><?=$row['title']?></h4>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- feature part end -->



<script>
	$(document).ready(function(){
		countCart();
		var mySwiper = new Swiper ('.swiper-model', {
			direction: 'horizontal',
			// slidesPerColumn: 2,
			// slidesPerGroup:3,
			// spaceBetween: 5,
			// slidesPerColumn: 2,
            autoplay: true,
            autoplaySpeed: 2000,
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
	});
</script>
