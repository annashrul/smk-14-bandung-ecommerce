
<!--================Single Product Area =================-->

<input type="hidden" id="member_jual" name="member_jual" value="<?=$this->session->id_member?>">
<input type="hidden" id="det_produk_jual" name="det_produk_jual" value="<?=$product['id_det_produk']?>">
<input type="hidden" id="berat_jual" name="berat_jual" value="<?=$product['berat']?>">
<input type="hidden" id="hrg_jual_jual" name="hrg_jual_jual" value="<?=$product['hrg_jual']?>">
<input type="hidden" id="hrg_varian_jual" name="hrg_varian_jual" value="0">
<input type="hidden" id="hrg_beli_jual" name="hrg_beli_jual" value="<?=$product['hrg_beli']?>">
<input type="hidden" id="hrg_coret_jual" name="hrg_coret_jual" value="<?=(isset($product['hrg_sebelum'])?$product['hrg_sebelum']:0)?>">
<!-- Start Align Area -->
<div class="container">
	<div class="row">
		<div class="col-md-5" style="border: 1px solid #eeeeee;">
			<div class="row">
				<div class="col-md-12" id="lightgallery">
					<a href="<?=base_url().$product['gambar']?>">
						<img src="<?=base_url().$product['gambar']?>" style="width: 100%;"/>
					</a>
				</div>
				<div class="col-md-12" style="margin-top: 10px;">
					<ul class="row" id="lightgalleryChild">
						<?php $readGambar = $this->m_crud->read_data("gambar_produk","*","produk='".$product['id_produk']."'"); foreach($readGambar as $key=>$row):?>
						<li class="col-4 col-xs-3 col-sm-4 col-md-3"  data-src="<?=base_url().$row['gambar']?>" data-sub-html="<h4 style='color:black;'><?=$product['nama']?></h4><p style='color:black;'>Rp <?=number_format($product['hrg_jual'])?></p>">
							<a href="javascript:void(0)">
								<img class="img-responsive" src="<?=base_url().$row['gambar']?>" style="width: 100%;height: 100px;">
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>

			</div>

		</div>

		<div class="col-md-7">
			<div class="single_product_text text-center">
				<h3><?=$product['nama']?></h3>
				<h3>Rp <?=number_format($product['hrg_jual'])?></h3>
				<p>
					<?=nl2br($product['deskripsi'])?>
				</p>
				<div class="card_area">
					<div class="product_count_area row">
						<div class="col-6 col-xs-6 col-md-3">
							<select name="ukuran" id="ukuran" class="form-control">
								<option value="">Size</option>
								<?php
								$get_ukuran = $this->m_crud->read_data("det_produk", "ukuran", "produk='".$product['id_produk']."'", "id_det_produk ASC", "ukuran");
								foreach($get_ukuran as $row):
									?>
									<option value="<?=$row['ukuran']?>"><?=$row['ukuran']?></option>
								<?php endforeach; ?>
							</select>

						</div>
						<div class="col-6 col-xs-6 col-md-3">
							<select name="" id="warnas" class="form-control">
								<option value="">Color</option>
							</select>
						</div>
						<div class="col-12 col-xs-12 col-md-3">
							<button class="d-none d-lg-block genric-btn danger-border circle" onclick="beli()">add to cart</button>
							<center><button style="width:100%;margin-top: 10px;" class="d-block d-lg-none genric-btn danger-border circle" onclick="beli()">add to cart</button></center>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>
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
<section class="latest-product-area padding-bottom section-padding30">
	<div class="container">
		<div class="row product-btn d-flex justify-content-end align-items-end">
			<!-- Section Tittle -->
			<div class="col-xl-12 col-lg-12 col-md-5">
				<div class="section-tittle mb-30">
					<h2>Releated Product</h2>
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
						<?php foreach($releatedProduct as $row):?>
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

<script>
	$(document).ready(function(){
		$('#lightgallery').lightGallery();
		$('#lightgalleryChild').lightGallery();
		$("#ukuran").on('change',function(){
			get_warna();
		})
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
	function get_warna() {
		$.ajax({
			url: "<?=base_url().'api/get_warna'?>",
			data: {produk: '<?=$product['id_produk']?>', ukuran: $("#ukuran").val()},
			type: "POST",
			dataType: "JSON",
			success: function (res) {
				console.log(res);
				if (res.status) {
					var list = '';
					for (var x=0; x<res.res_warna.length; x++) {
						// list+=res.res_warna[x].warna;
						// list += $('.current').html(res.res_warna[x].warna);
						list += '<option value="'+res.res_warna[x].id_det_produk+'">'+res.res_warna[x].warna+'</option>';
					}
					console.log(list);
					$("#warnas").html(list);
					// $("#xwarna").val(list);
				}
			}
		});
	}
	function beli(){
		if ("<?=$this->session->id_member?>" !== '') {
			var data_ = {
				member: $("#member_jual").val(),
				det_produk: $("#det_produk_jual").val(),
				berat: $("#berat_jual").val(),
				jumlah: 1,
				hrg_beli: $("#hrg_beli_jual").val(),
				hrg_jual: $("#hrg_jual_jual").val(),
				hrg_coret: $("#hrg_coret_jual").val(),
				hrg_varian: $("#hrg_varian_jual").val()
			};
			$.ajax({
				url: "<?=base_url().'api/to_cart'?>",
				type: "POST",
				data: data_,
				dataType: "JSON",
				success: function (res) {
					console.log(res);
					if (res.status) {
						console.log(res);
						countCart();
						Swal.fire({
							title: 'Add to bag success!',
							type: 'success',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Go to cart',
							cancelButtonText: 'Continue shoping'
						}).then(function (result) {
							if (result.value) {
								window.location = '<?=base_url().'store/cart'?>';
							}
						});
					} else {
						alert("Data gagal disimpan!");
					}
				}
			});
		}
		else {
			Swal.fire({
				title: 'Opppss ...',
				text: "You have not logged in",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Sign In'
			}).then((result) => {
				if (result.value) {
					window.location.href="<?=base_url().'store/auth?page=login'?>"
				}
			})
		}
	}


</script>
