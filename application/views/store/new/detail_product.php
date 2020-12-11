<?php
/**
 * Created by PhpStorm.
 * User: annashrul_yusuf
 * Date: 09/12/2020
 * Time: 6:15
 */
?>
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

<input type="hidden" id="member_jual" name="member_jual" value="<?=$this->session->id_member?>">
<input type="hidden" id="det_produk_jual" name="det_produk_jual" value="<?=$product['id_det_produk']?>">
<input type="hidden" id="berat_jual" name="berat_jual" value="<?=$product['berat']?>">
<input type="hidden" id="hrg_jual_jual" name="hrg_jual_jual" value="<?=$product['hrg_jual']?>">
<input type="hidden" id="hrg_varian_jual" name="hrg_varian_jual" value="0">
<input type="hidden" id="hrg_beli_jual" name="hrg_beli_jual" value="<?=$product['hrg_beli']?>">
<input type="hidden" id="hrg_coret_jual" name="hrg_coret_jual" value="<?=(isset($product['hrg_sebelum'])?$product['hrg_sebelum']:0)?>">
<!-- Hero Start -->

<?php
$get_promo = $this->m_crud->get_join_data("promo pr", "pr.diskon", "det_promo dp", "dp.slug_promo=pr.slug_promo", "dp.produk='".$_GET['product_id']."' AND '".date('Y-m-d H:i:s')."' BETWEEN pr.tgl_awal AND pr.tgl_akhir");
if ($get_promo!=null) {
    $promo = 1;
    $hrgcoret = $product['hrg_jual'];
    $diskon = json_decode($get_promo['diskon'], true);
    $harga_promo = $this->m_website->double_diskon($product['hrg_jual'], $diskon);
    $data_diskon = '';
    for ($i=0;$i<count($diskon);$i++) {
        $data_diskon .= ($i>0)?' + ':'Diskon ';
        $data_diskon .= $diskon[$i].'%';
    }
    $diskon_persen = $diskon;
    $diskon = $data_diskon;
    $hrg_jual = $harga_promo;
} else {
    $diskon_persen = array();
    $promo = 0;
    $hrg_jual = $product['hrg_jual'];
}
?>
<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> <?=$product['nama']?> </h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="<?=base_url()?>"><?= $this->data['site']->nama ?></a></li>
                                <li class="breadcrumb-item"><a href="<?=base_url().'store/get_all_product'?>">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<section class="section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="slider slider-for">
                    <?php $readGambar = $this->m_crud->read_data("gambar_produk","*","produk='".$product['id_produk']."'"); foreach($readGambar as $key=>$row):?>
                        <div style="border: 1px solid white!important;"><img src="<?=base_url().$row['gambar']?>" class="img-fluid rounded" alt=""></div>
                    <?php endforeach; ?>
                </div>
                <div class="slider slider-nav">
                    <?php $readGambar = $this->m_crud->read_data("gambar_produk","*","produk='".$product['id_produk']."'"); foreach($readGambar as $key=>$row):?>
                        <div style="border: 1px solid white!important;"><img src="<?=base_url().$row['gambar']?>" class="img-fluid" alt=""></div>
                    <?php endforeach; ?>
                </div>
            </div><!--end col-->

            <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ml-md-4">
                    <h4 class="title">Branded T-Shirts</h4>
                    <h5 class="text-muted"><?=number_format($hrg_jual)?> <del class="text-danger ml-2"><?=number_format($hrgcoret)?></del> </h5>
                    <h5 class="mt-4 py-2">Description :</h5>
                    <p class="text-muted"><?=$product['deskripsi']?></p>

                    <div class="row mt-4 pt-2 d-flex align-items-center justify-content-between">
                        <div class="col-lg-12 mt-4 pt-2 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="form custom-form">
                                    <div class="form-group mb-0" >
                                        <label for="">Size</label>
                                        <select name="ukuran" id="ukuran" class="form-control custom-select rounded" style="border:1px solid black;min-width: 100%!important;">
                                            <?php
                                            $get_ukuran = $this->m_crud->read_data("det_produk", "ukuran", "produk='".$product['id_produk']."'", "id_det_produk ASC", "ukuran");
                                            foreach($get_ukuran as $row):
                                                ?>
                                                <option value="<?=$row['ukuran']?>"><?=$row['ukuran']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex align-items-center">
                                <div class="form custom-form">
                                    <div class="form-group mb-0">
                                        <label for="">Color</label>
                                        <select name="" id="warnas" class="form-control custom-select rounded">
                                            <option value="">Color</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="shop-list align-items-center">
                                <h6 class="mb-10">Quantity:</h6>
                                <div>
                                    <input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="text" step="1" min="1" name="quantity" id="quantity" value="1" title="Qty" class="btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-4 pt-2">
                        <br>
                        <a href="javascript:void(0)" onclick="beli()" class="btn btn-soft-primary btn-block">Add to Cart</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->


    <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-0">Related Products</h5>
            </div><!--end col-->

            <div class="col-12 mt-4">
                <div class="swiper-container swiper-best-seller">
                    <div class="swiper-button-prev previous"></div>
                    <div class="swiper-button-next next"></div>
                    <div class="swiper-wrapper">
                        <?php foreach($releatedProduct as $row):
                            $i++;
                            $get_promo = $this->m_crud->get_join_data("promo pr", "pr.diskon", "det_promo dp", "dp.slug_promo=pr.slug_promo", "dp.produk='".$row['id_produk']."' AND '".date('Y-m-d H:i:s')."' BETWEEN pr.tgl_awal AND pr.tgl_akhir");
                            if ($get_promo!=null) {
                                $promo = 1;
                                $hrgcoret = $row['hrg_jual'];
                                $diskon = json_decode($get_promo['diskon'], true);
                                $harga_promo = $this->m_website->double_diskon($row['hrg_jual'], $diskon);
                                $data_diskon = '';
                                for ($i=0;$i<count($diskon);$i++) {
                                    $data_diskon .= ($i>0)?' + ':'Diskon ';
                                    $data_diskon .= $diskon[$i].'%';
                                }
                                $diskon_persen = $diskon;
                                $diskon = $data_diskon;
                                $hrg_jual = $harga_promo;
                            } else {
                                $diskon_persen = array();
                                $promo = 0;
                                $hrg_jual = $row['hrg_jual'];
                            }
                            ?>
                            <div class="swiper-slide">
                                <div class="card shop-list border-0 position-relative" style="background:#f5f6fa!important;box-shadow: 3px 3px 0px 0 #2f55d4!important;">
                                    <ul class="label list-unstyled mb-0">
                                        <li><a href="javascript:void(0)" class="badge badge-pill badge-primary"><?=$diskon?></a></li>
                                    </ul>
                                    <div class="shop-image position-relative overflow-hidden rounded shadow">
                                        <a href="<?=base_url().'store/product?product_id='.$row['id_produk']?>"><img src="<?=base_url().$row['gambar']?>" class="img-fluid" alt=""></a>
                                        <a href="<?=base_url().'store/product?product_id='.$row['id_produk']?>" class="overlay-work">
                                            <img src="<?=base_url().$row['gambar']?>" class="img-fluid" alt="">
                                        </a>
                                        <ul class="list-unstyled shop-icons">
                                            <li class="mt-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                            <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body content pt-4 p-2">
                                        <a href="<?=base_url().'store/product?product_id='.$row['id_produk']?>" class="text-dark product-name h6"><?=$row['nama']?></a>

                                        <h6 class="text-muted small font-italic mb-0 mt-1"><?=number_format($hrg_jual)?> <del class="text-danger ml-2"><?=number_format($hrgcoret)?></del> </h6>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container-fluid mt-100 mt-60 px-0">
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="<?=base_url().'store/product?product_id='.$prevProduct['id_produk']?>" class="text-dark align-items-center">
                                <span class="pro-icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left fea icon-sm"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></span>
                                <span class="text-muted  d-md-inline-block"><?=strlen($prevProduct['nama'])>20?substr($prevProduct['nama'],0,20).'...':$prevProduct['nama']?></span>
                            </a>

                            <a href="<?=base_url()?>" class="btn btn-lg btn-pills btn-icon btn-soft-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home icons"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a>

                            <a href="<?=base_url().'store/product?product_id='.$nextProduct['id_produk']?>" class="text-dark align-items-center">
                                <span class="text-muted  d-md-inline-block"><?=strlen($nextProduct['nama'])>20?substr($nextProduct['nama'],0,20).'...':$nextProduct['nama']?></span>
                                <span class="pro-icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fea icon-sm"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                            </a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end div-->
    </div>
</section><!--end section-->


<script>

    $(document).ready(function(){
        $("#ukuran").on('change',function(){
            get_warna();
        })
    });
    function get_warna() {
        $.ajax({
            url: "<?=base_url().'api/get_warna'?>",
            data: {produk: '<?=$product['id_produk']?>', ukuran: $("#ukuran").val()},
            type: "POST",
            dataType: "JSON",
            success: function (res) {
                if (res.status) {
                    var list = '';
                    for (var x=0; x<res.res_warna.length; x++) {
                        // list+=res.res_warna[x].warna;
                        // list += $('.current').html(res.res_warna[x].warna);
                        list += '<option value="'+res.res_warna[x].id_det_produk+'">'+res.res_warna[x].warna+'</option>';
                    }
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
                jumlah: $("#quantity").val(),
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
                    if (res.status) {
                        countCart();
                        swal({
                            title: 'Add to bag success!',
                            icon: 'success',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Go to cart',
                            cancelButtonText: 'Continue shoping'
                        })
                            .then((result) => {
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
            swal({
                title: "Opppss ...",
                text: "You have not logged in",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((result) => {

                if (result) {
                    window.location.href="<?=base_url().'store/auth?page=login'?>"
                }
            })
        }
    }

</script>