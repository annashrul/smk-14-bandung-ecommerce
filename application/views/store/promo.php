
<!-- Mobile Menu -->
<?php if($promo==null){ foreach($promo as $row):
	$tmp_disc = array();
	$decode = json_decode($row['diskon'], true);
	foreach ($decode as $disc) {
		array_push($tmp_disc, $disc.'%');
	}
	?>
<div class="slider-area single-slider slider-height2 d-flex align-items-center" style="cursor: pointer" data-background="<?=base_url().$row['gambar']?>" onclick="return window.location.href='<?=base_url().'store/list_produk/promo/'.$row['id_promo']?>'">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="hero-cap text-center" style="padding:50px;background-color: rgba(255, 255, 255, 0.5);">
					<h2><?=$row['promo'].' - '.implode(' + ', $tmp_disc)?></h2>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach; }else{ ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="hero-cap text-center">
				<h2><?=$this->m_website->noData()?></h2>
			</div>
		</div>

	</div>
</div>
<?php } ?>
