<style>
	main.gallery {
		padding: 2rem;
	}

	.gallery > h1 {
		font-size: 3rem;
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		margin-bottom: 1rem;
		color: #333333;
		font-weight: 100;
	}

	.gallery > .gallery__list {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
		grid-template-rows: repeat(6, 200px);
		grid-gap: 1rem;
		grid-auto-flow: dense;
	}

	.gallery > .gallery__list > li:nth-child(4n) {
		grid-column: span 2;
		grid-row: span 2;
	}

	.gallery > .gallery__list > li:nth-child(8n) {
		grid-column: span 3;
		grid-row: span 3;
	}

	.gallery > .gallery__list > li > figure {
		height: 100%;
	}

	.gallery > .gallery__list > li > figure > img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
</style>
<main class="gallery">

	<ul class="gallery__list">
		<?php foreach($model as $row):?>
		<li style="cursor: pointer;" onclick="return window.location.href='<?=base_url().'store/list_produk/model/'.$row['id_model']?>'">
			<figure>
				<img src="<?=$row['gambar']?>" alt="notfound">
			</figure>
		</li>
		<?php endforeach; ?>
	</ul>
</main>
