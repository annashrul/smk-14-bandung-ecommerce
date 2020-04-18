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
</style>
<div class="container-fluid">
	<div class="row">
		<?php
		$w=0;$x=0;$z=0;
		for($w=0;$w<5;$w++){
			echo ' ';
			echo '-';
			echo ' ';
		}
		echo '<br/>';
		for($z=0;$z<$w;$z++){
			echo '<br/>*';
		}
		echo '<br/>';
		for($x=0;$x<5;$x++){
			echo ' ';
			echo '-';
			echo ' ';
		}

		?>
	</div>
</div>

