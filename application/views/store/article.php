
<!-- slider Area End-->
<style>
	.pagination > li > a {
		padding: 6px 12px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #ffffff;
		border: 1px solid #dddddd;
		margin: 0 3px;
	}
	.pagination > .active > a {
		color: #000000;
		font-weight: bold;
		background-color: #ffffff;
		border: 1px solid #dddddd;
	}
	.pagination > li:first-child > a {
		border-bottom-left-radius: 0;
		border-top-left-radius: 0;
	}
	.pagination > li:last-child > a {
		border-bottom-right-radius: 0;
		border-top-right-radius: 0;
	}
	.pagination > li > a:hover,
	.pagination > li > a:focus {
		color: #ffffff;
		background-color: #0073b7 !important;
		border-color: #0073b7 !important;
	}
	.pagination > .active > a,
	.pagination > .active > a:hover,
	.pagination > .active > a:focus {
		color: #ffffff;
		background-color: #0073b7 !important;
		border-color: #0073b7 !important;
		z-index: -0!important;
	}
	.pagination > .disabled > a,
	.pagination > .disabled > a:hover,
	.pagination > .disabled > a:focus {
		color: #777777;
		background-color: #ffffff;
		border-color: #dddddd;

	}
	.select2-selection {
		-webkit-box-shadow: 0;
		box-shadow: 0;
		background-color: #fff;
		border: 0;
		border-radius: 0;
		color: #555555;
		font-size: 14px;
		outline: 0;
		min-height: 48px;
		text-align: left;
	}

	.select2-selection__rendered {
		margin: 10px;
	}

	.select2-selection__arrow {
		margin: 10px;
	}
	.select2-container--default .select2-selection--single {
		background-color: #fff;
		border: 1px solid grey;
		border-radius: 0px;

	}
</style>
<!--================Blog Area =================-->
<section class="blog_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="blog_right_sidebar" style="overflow: hidden;">
					<aside class="single_sidebar_widget search_widget">
						<div class="form-group">
							<div class="input-group mb-3">
								<input id="any" type="text" class="form-control" placeholder='Search Keyword'>
								<div class="input-group-append">
									<button class="btns" type="button" onclick="cari('any')"><i class="ti-search"></i></button>
								</div>
							</div>
						</div>
						<div class="form-group">
							<p id="totalResult"></p>
						</div>
					</aside>
				</div>
			</div>
			<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="blog_left_sidebar">
					<div class="row" id="resultArticle"></div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12"><nav aria-label="..." id="pagination_link"></nav></div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget tag_cloud_widget">
						<h4 class="widget_title">Category</h4>
						<ul class="list">
							<li>
								<a href="javascript:void(0)" onclick="cari('all')">All</a>
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
						<h4 class="widget_title">Promo</h4>
						<ul class="list cat-list">
							<?php foreach($promo as $row):
								$diskon = json_decode($row['diskon'], true);
								$harga_promo = $this->m_website->double_diskon($row['hrg_jual'], $diskon);
								$data_diskon = '';
								for ($i=0;$i<count($diskon);$i++) {
									$data_diskon .= ($i>0)?' + ':'Diskon ';
									$data_diskon .= $diskon[$i].'%';
								}
							?>
							<li>
								<a href="<?=base_url().'store/list_produk/promo/'.$row['id_promo']?>" class="d-flex">
									<p><?=$row['promo']?> <?=$data_diskon?></p>
								</a>
							</li>
							<?php endforeach; ?>

						</ul>
					</aside>
					<aside class="single_sidebar_widget instagram_feeds">
						<h4 class="widget_title">Model</h4>
						<ul class="instagram_row flex-wrap">
							<?php foreach($model as $row):?>
							<li>
								<a href="#">
									<img class="img-fluid" src="<?=base_url()?>assets/fo/assets/img/post/post_5.png" alt="">
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================Blog Area =================-->


<script>
	$(document).ready(function() {

		load_data(1);

	}).on("click", ".pagination li a", function(event){
		event.preventDefault();
		var page = $(this).data("ci-pagination-page");
		if($("#any").val() !== '' && $("#category").val() !==''){
			load_data(page,{any:$("#any").val(),category:$("#category").val()});
		}else if($("#any").val() !== ''){
			load_data(page,{any:$("#any").val()});
		}else if($("#category").val() !== ''){
			load_data(page,{category:$("#category").val()});
		}else{
			load_data(page);
		}
	});
	$('#any').keyup(function(e){
		if(e.keyCode === 13)
		{
			if($("#category").val() !== ''){
				load_data(1,{any:$("#any").val(),category:$("#category").val()})
			}else{
				load_data(1,{any:$("#any").val()})
			}
		}
	});
	function cari(param){
		if(param==='any'){
			if($("#category").val() !== ''){
				load_data(1,{any:$("#any").val(),category:$("#category").val()})
			}else{
				load_data(1,{any:$("#any").val()})
			}
		}else{
			$("#category").val(param);
			//document.location.hash = param.replace("#<?//=$this->uri->segment(3)?>//", param);
			//document.location.href = String( document.location.href ).replace( "<?//=$this->uri->segment(3)?>//", param );
			//var url = 'http://localhost/ecommerce/store/article/<?//=$this->uri->segment(3)?>//';
			//url = url.slice( 0, url.indexOf("#<?//=$this->uri->segment(3)?>//"));
			//console.log(url);
			if($("#any").val()!==''){
				load_data(1,{any:$("#any").val(),category:$("#category").val()})
			}else{
				load_data(1,{category:$("#category").val()})
			}


		}

	}

	function load_data(page, data={}) {
		console.log(data);
		$.ajax({
			url:"<?=base_url().'store/article/'.$this->uri->segment(3).'/load_data/';?>"+page,
			type:"POST",
			data:data,
			dataType:"JSON",
			beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
			complete: function() {$('.first-loader').remove();},
			success:function(res)
			{
				console.log(res);
				$('#resultArticle').html(res.result);
				$('#pagination_link').html(res.pagination_link);



			}
		});
	}
</script>
