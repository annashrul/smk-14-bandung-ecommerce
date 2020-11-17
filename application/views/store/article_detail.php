<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<div class="single-post">
					<div class="feature-img">
						<img class="img-fluid" src="<?=base_url().$detail['gambar']?>" alt="">
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
