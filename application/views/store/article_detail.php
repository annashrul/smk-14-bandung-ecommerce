<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<div class="single-post">
					<div class="feature-img">
						<img class="img-fluid" src="<?=base_url().'assets/fo/'?>assets/img/blog/single_blog_1.png" alt="">
					</div>
					<div class="blog_details">
						<h2><?=$detail['judul']?></h2>
						<ul class="blog-info-link mt-3 mb-4">
							<li><a href="#"><i class="fa fa-tag"></i> <?=$detail['nama']?></a></li>
							<li><a href="#"><i class="fa fa-clock"></i> <?=date('Y-m-d',strtotime($detail['tgl_berita']))?></a></li>
						</ul>
						<div class="quote-wrapper">
							<div class="quotes">
								<?=strip_tags($detail['ringkasan'])?>
							</div>
						</div>
						<p class="excert">
							<?=nl2br($detail['isi'])?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget tag_cloud_widget">
						<h4 class="widget_title">Category</h4>
						<ul class="list">
							<li>
								<a href="javascript:void(0)" onclick="cari('')">All</a>
							</li>
							<?php foreach($category as $row): ?>
								<li>
									<a href="javascript:void(0)" onclick="cari('<?=$row["slug_kategori_berita"]?>')"><?=$row['nama']?></a>
									<input type="hidden" name="category" id="category">
								</li>
							<?php endforeach; ?>

						</ul>
					</aside>
					<aside class="single_sidebar_widget post_category_widget">
						<h4 class="widget_title">Category</h4>
						<ul class="list cat-list">
							<li>
								<a href="#" class="d-flex">
									<p>Resaurant food</p>
									<p>(37)</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<p>Travel news</p>
									<p>(10)</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<p>Modern technology</p>
									<p>(03)</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<p>Product</p>
									<p>(11)</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<p>Inspiration</p>
									<p>(21)</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<p>Health Care</p>
									<p>(21)</p>
								</a>
							</li>
						</ul>
					</aside>
					<aside class="single_sidebar_widget popular_post_widget">
						<h3 class="widget_title">Recent Post</h3>
						<div class="media post_item">
							<img src="assets/img/post/post_1.png" alt="post">
							<div class="media-body">
								<a href="single-blog.html">
									<h3>From life was you fish...</h3>
								</a>
								<p>January 12, 2019</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="assets/img/post/post_2.png" alt="post">
							<div class="media-body">
								<a href="single-blog.html">
									<h3>The Amazing Hubble</h3>
								</a>
								<p>02 Hours ago</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="assets/img/post/post_3.png" alt="post">
							<div class="media-body">
								<a href="single-blog.html">
									<h3>Astronomy Or Astrology</h3>
								</a>
								<p>03 Hours ago</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="assets/img/post/post_4.png" alt="post">
							<div class="media-body">
								<a href="single-blog.html">
									<h3>Asteroids telescope</h3>
								</a>
								<p>01 Hours ago</p>
							</div>
						</div>
					</aside>
					<aside class="single_sidebar_widget tag_cloud_widget">
						<h4 class="widget_title">Tag Clouds</h4>
						<ul class="list">
							<li>
								<a href="#">project</a>
							</li>
							<li>
								<a href="#">love</a>
							</li>
							<li>
								<a href="#">technology</a>
							</li>
							<li>
								<a href="#">travel</a>
							</li>
							<li>
								<a href="#">restaurant</a>
							</li>
							<li>
								<a href="#">life style</a>
							</li>
							<li>
								<a href="#">design</a>
							</li>
							<li>
								<a href="#">illustration</a>
							</li>
						</ul>
					</aside>
					<aside class="single_sidebar_widget instagram_feeds">
						<h4 class="widget_title">Instagram Feeds</h4>
						<ul class="instagram_row flex-wrap">
							<li>
								<a href="#">
									<img class="img-fluid" src="assets/img/post/post_5.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img class="img-fluid" src="assets/img/post/post_6.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img class="img-fluid" src="assets/img/post/post_7.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img class="img-fluid" src="assets/img/post/post_8.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img class="img-fluid" src="assets/img/post/post_9.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img class="img-fluid" src="assets/img/post/post_10.png" alt="">
								</a>
							</li>
						</ul>
					</aside>
					<aside class="single_sidebar_widget newsletter_widget">
						<h4 class="widget_title">Newsletter</h4>
						<form action="#">
							<div class="form-group">
								<input type="email" class="form-control" onfocus="this.placeholder = ''"
									   onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
							</div>
							<button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
									type="submit">Subscribe</button>
						</form>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ Blog Area end =================-->

<script>
	function cari(param){
		window.location.href="<?=base_url().'store/article/'?>"+param
	}
</script>
