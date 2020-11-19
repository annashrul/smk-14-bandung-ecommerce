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
<input type="hidden" name="param" id="param" value="<?=$param?>">
<?php
$table=$this->uri->segment(3);
if($table=='groups'){
	$status = "AND status='1'";
}
if($table=='top_item'){
	$id = "id_item";
}else{
	$id = "id_$table";
}
$menu_group = $this->m_crud->get_data($table, "*", "$id='" . $param . "' $status");
?>
<!-- slider Area Start-->
<div class="slider-area ">
	<!-- Mobile Menu -->
	<div class="single-slider slider-height2 d-flex align-items-center" data-background="https://www.vippng.com/png/detail/21-217546_splash-teal-paint-stroke-transparent-background-png-paint.png">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="hero-cap text-center" style="background-color: rgba(255, 255, 255, 0.5);">
						<h2><?=$menu_group['nama']?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- slider Area End-->
<section class="latest-product-area" style="margin-top: 10px;">
	<div class="container-fluid">
		<div class="row product-btn d-flex justify-content-end align-items-center"  style="padding: 0px;">
			<div class="col-xl-12 col-lg-12 col-md-12" style="padding: 0px;">
				<div class="properties__button" style="padding: 0px;margin-top: 20px;">
					<!--Nav Button  -->
					<nav style="">
						<div class="nav nav-tabs" id="nav-tab" role="tablist" style="padding: 0px!important;">
							<div class="form-group">
								<?php $field = 'filter_kategori';?>
								<select name="<?=$field?>" id="<?=$field?>" class="filter" onchange="filter('kategori',$(this).val())">
									<option value="">Select Category</option>
								</select>
							</div>
							<div class="form-group">
								<?php $field = 'filter_merk';?>
								<select name="<?=$field?>" id="<?=$field?>" class="filter" onchange="filter('merk',$(this).val())">
									<option value="">Select Brand</option>
								</select>
							</div>
							<div class="form-group">
								<select class="filter form-control" name="select" id="filter_harga" onchange="filter('harga',$(this).val())">
									<option value="">Select Price</option>
									<option value="0-100">Rp 0 - 100,000</option>
									<option value="100-500">Rp 100000 - 500,000</option>
									<option value="500-">Rp + 500,000</option>
								</select>
							</div>
						</div>
					</nav>
					<!--End Nav Button  -->
				</div>
			</div>
		</div>
		<!-- Nav Card -->
		<div class="tab-content" id="nav-tabContent">
			<!-- card one -->
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<div class="row" id="items">
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12"><nav aria-label="..." id="pagination_link"></nav></div>
				</div>

			</div>
		</div>
		<!-- End Nav Card -->
	</div>
</section>

<input type="hidden" id="patokan">
<!-- product list part start-->



<!-- product list part end-->
<script>
	function filter(param,id) {
		$("#patokan").val(param);
		load_data_produk(1, {search:param,param: id});
	}



	$(document).ready(function() {
		$('.filter').select2();
		if ('<?=$this->uri->segment(3)?>' === 'groups') {
			load_data_produk(1, {search: '', group: $("#param").val()});
		} else {
			load_data_produk(1, {search: ''});
		}
		load_kelompok();
	}).on("click", ".pagination li a", function(event){
		event.preventDefault();
		var page = $(this).data("ci-pagination-page");
		var patokan=$("#patokan").val();
		if(patokan==='kategori'){
			load_data_produk(page, {search: patokan,param:$("#filter_kategori").val()});
		}else if(patokan==='merk'){
			load_data_produk(page, {search: patokan,param:$("#filter_merk").val()});
		}else if(patokan==='harga'){
			load_data_produk(page, {search: patokan,param:$("#filter_harga").val()});
		}else{
			load_data_produk(page, {search: ''});
		}

	});

	function load_data_produk(page, data={}) {
		console.log(data);
		$.ajax({
			url:"<?=base_url().'store/list_produk/'.$this->uri->segment(3).'/';?>"+$("#param").val()+'/'+page,
			type:"POST",
			data:data,
			dataType:"JSON",
			beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
			complete: function() {$('.first-loader').remove();},
			success:function(res)
			{

				// console.log(res.kelompok);
				// load_kelompok(res.kelompok);
				$('#items').html(res.res_produk);
				$('#pagination_link').html(res.pagination_link);
				// var list='';
				// for(var i=0;i<res.kelompok.length;i++){
				// 	list+='<option value="'+res.kelompok[i].id_kelompok+'">'+res.kelompok[i].nama+'</option>';
				// 	// list+=res.kelompok[i];
				// }
				// $("#filter_kategori").html(list);
			}
		});
	}

	function load_kelompok(){
		$.ajax({
			url:"<?=base_url().'store/list_produk/'.$this->uri->segment(3).'/';?>"+$("#param").val(),
			type:"POST",
			data:{search:''},
			dataType:"JSON",
			beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
			complete: function() {$('.first-loader').remove();},
			success:function(res) {
				var list='';var merk='';
				list+='<option value="Select Category">Select Category</option>';
				merk+='<option value="Select Brand">Select Brand</option>';
				for(var i=0;i<res.kelompok.length;i++){
					list+='<option value="'+res.kelompok[i].id_kelompok+'">'+res.kelompok[i].nama+'</option>';
				}
				for(var i=0;i<res.merk.length;i++){
					merk+='<option value="'+res.merk[i].id_merk+'">'+res.merk[i].nama+'</option>';
				}
				$("#filter_kategori").html(list);
				$("#filter_merk").html(merk);
			}
		});
	}
</script>
