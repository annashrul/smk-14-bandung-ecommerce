<?php
/**
 * Created by PhpStorm.
 * User: annashrul_yusuf
 * Date: 09/12/2020
 * Time: 0:38
 */
?>
<?php if($promo!=null){ foreach($promo as $row):
$tmp_disc = array();
$decode = json_decode($row['diskon'], true);
foreach ($decode as $disc) {
    array_push($tmp_disc, $disc.'%');
}
?>
<!-- CTA Start -->
<section class="section bg-cta" style="cursor: pointer;border-bottom:1px solid white;background: url('https://indokids.co.id/assets/images/promo/banana_boat1.jpg?width=2880&amp;quality=80)') center center;" onclick="return window.location.href='<?=base_url().'store/list_produk/promo/'.$row['slug_promo']?>'">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title title-dark text-white mb-4"><?=$row['promo'].' - '.implode(' + ', $tmp_disc)?></h4>
                    <p class="text-light para-dark para-desc mx-auto"><?=$row['deskripsi']?></p>
                    <a href="<?=base_url().'store/list_produk/promo/'.$row['slug_promo']?>" class="btn btn-primary m-1">Shop Now</a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- CTA Start -->
<?php endforeach; }else{

} ?>
