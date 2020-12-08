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
		grid-column: span 2;
		grid-row: span 2;
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
<style>
    /*// Extra small devices (smart phones, less than 34em)*/
    @media (max-width: 33.9em) {
        .myWrapperGallery{
            /*margin-top: 50px;*/
        }
    }
</style>

<div class="container-fluid myWrapperGallery">
    <div class="row">
        <?php foreach($model as $row):?>
            <div class="col-12 col-xs-12 col-lg-4 col-md-3" style="margin-bottom:10px;cursor: pointer;" onclick="return window.location.href='<?=base_url().'store/list_produk/model/'.$row['id_model']?>'">
                <img class="img img-responsive" src="<?=$row['gambar']?>" alt="notfound">
            </div>
        <?php endforeach; ?>
    </div>

</div>

