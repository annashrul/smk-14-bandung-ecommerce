<!--================Cart Area =================-->
<style>
	.cart_inner .product_count input {
		width: 100px;
		padding-left: 30px;
		/*height: 50px;*/
		outline: none;
		box-shadow: none;
	}

</style>
<section class="cart_area d-none d-lg-block">
	<div class="container">
		<div class="cart_inner">
			<div class="table-responsive ">
				<table class="table">
					<thead>
					<tr>
						<th>No</th>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>#</th>
					</tr>
					</thead>
					<tbody id="resTable">

					</tbody>
					<tfoot>

					<tr>
						<td>TOTAL</td>
						<td></td>
						<td></td>
						<td>
							<div class="product_count">
								<input disabled style="text-align: left;" id="tot_qty" class="input-number" type="text" value="" >
							</div>
						</td>
						<td>
							<h5 id="tot_price"  style="text-align:right"></h5>
						</td>
						<td id=""></td>
					</tr>
					</tfoot>
				</table>
			</div>
			<div class="row">
				<div class="col-6 col-xs-6">
					<li class="d-lg-block"> <a href="<?=base_url()?>" class="btn header-btn">Belanja</a></li>
				</div>
				<div class="col-6 col-xs-6">
					<li class="d-lg-block"> <a href="javascript:void(0)" onclick="bayar()" style="float: right;" class="btn header-btn">Bayar</a></li>
				</div>
			</div>
		</div>
</section>


<section class="latest-product-area  d-block d-lg-none" style="margin-top: 60px;">
    <div class="container">
        <div class="row product-btn d-flex justify-content-end align-items-end" id="res_mobile">
        </div>
        <div class="row">
            <div class="col-6 col-xs-6">
                <a href="<?=base_url()?>" class="btn header-btn">Belanja</a>
            </div>
            <div class="col-6 col-xs-6">
                <a href="javascript:void(0)" onclick="bayar()" class="btn header-btn">Bayar</a>
            </div>
        </div>
    </div>
</section>


<script>
	load_cart();
	countCart();
	function bayar(){
        if($("#countCart").text()==="0"){
            alert("maaf keranjang anda kosong");
        }
        else{
            window.location.href="<?=base_url().'store/checkout'?>"
        }

    }
	function load_cart(){
        console.log($("#countCart").text());
		$.ajax({
			url : "<?=base_url().'ajax/cart'?>",
			type : "POST",
			dataType : "JSON",
			success:function(res){
				console.log(res.count);
				$("#resTable").html(res.result);
				$("#res_mobile").html(res.res_mobile);
				$("#tot_qty").val(res.qty);
				$("#tot_price").html(res.total);
				if(parseInt(res.count)>0) $("#btn_checkout").css('display','block')
				else  $("#btn_checkout").css('display','none')
			}
		})
	}
	function update_qty(order, produk) {
	    alert(`${order} ${produk}`);
		$.ajax({
			url: "<?=base_url().'api/edit_cart'?>",
			type:"POST",
			data: {jumlah:$(".qty-"+produk).val(), kd_trans:order, det_produk:produk},
			dataType: "JSON",
			success: function (res) {
				if (res.status) {
					load_cart();
				}
			}
		})
	}
	function hapus_item(trans, id) {
		$.ajax({
			url: "<?=base_url().'api/delete_item_cart'?>",
			type: "POST",
			data: {orders: trans, produk: id},
			dataType: "JSON",
            beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
            complete: function() {$('.first-loader').remove();},
			success: function (res) {
				if (res.status) {
					countCart();
					load_cart();
					location.reload();
				}
			}
		});
	}
    function update_qty_m(order, produk) {
        $.ajax({
            url: "<?=base_url().'api/edit_cart'?>",
            type:"POST",
            data: {jumlah:$(".qty_m-"+produk).val(), kd_trans:order, det_produk:produk},
            dataType: "JSON",
            success: function (res) {
                if (res.status) {
                    load_cart();
                }
            }
        })
    }

</script>
