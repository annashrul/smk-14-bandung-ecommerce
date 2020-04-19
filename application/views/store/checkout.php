<!--================Checkout Area =================-->
<?php $exist='exist-';$add='add';?>
<section class="checkout_area "style="padding:10px;">
	<div class="container-fluid" >

		<div class="billing_details">
			<form class="row contact_form"  id="form_checkout">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3">
							<h3>Recipient's Address</h3>
							<div class="row">
								<div class="col-md-12 form-group p_star">
									<label for="">Choose Address</label>
									<select class="form-control"  name="ch_alamat_jual" onchange="ubah_alamat()" id="ch_alamat_jual">
										<option value="baru">New Address</option>
										<?php
										if(count($alamat) > 0) {
											foreach ($alamat as $row) {echo '<option value="'.$row['id_alamat_member'].'">'.$row['nama'].'</option>';}
										}
										?>
									</select>
								</div>
								<div class="col-md-12 form-group" id="new_address">
									<?php $field = 'nama_alamat'; ?>
									<label for="<?=$field?>">Address Name</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" />
								</div>
								<div class="col-md-6 form-group">
									<?php $field = 'nama_penerima'; ?>
									<label for="<?=$field?>">Name</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" />
								</div>
								<div class="col-md-6 form-group">
									<?php $field = 'telepon'; ?>
									<label for="<?=$field?>">Telephone</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" />
								</div>
								<div class="col-md-12 form-group">
									<?php $field = 'kota'; ?>
									<label for="<?=$field?>">City</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" />
								</div>
								<div class="col-md-6 form-group">
									<?php $field = 'kecamatan'; ?>
									<label for="<?=$field?>">District</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" />
								</div>
								<div class="col-md-6 form-group">
									<?php $field = 'provinsi'; ?>
									<label for="<?=$field?>">Province</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" />
								</div>
							</div>

						</div>
						<div class="col-lg-3">
							<h3>delivery</h3>
							<div class="row">
								<div class="col-md-12 form-group p_star">
									<label for="">courier</label>
									<select class="form-control" name="kurir" id="kurir" onchange="get_ongkir()">
										<option value="">Choose Courier</option>
										<?php
										if(count($kurir) > 0) {
											foreach ($kurir as $row) {
												echo '<option value="'.$row['id_kurir'].'">'.$row['kurir'].'</option>';
											}
										}
										?>
									</select>
								</div>
								<div class="col-md-12 form-group">
									<label for="">Shipping Service</label>
									<select class="form-control" name="layanan" id="layanan" onchange="hitung_total()">
										<option value="">Select Shipping Service</option>
									</select>
								</div>
								<div class="col-md-12 form-group">
									<?php $field = 'ongkir'; ?>
									<label for="<?=$field?>">Cost</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" readonly />
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<h3>Destination Account</h3>
							<div class="row">
								<div class="col-md-12 form-group p_star">
									<label for="">Bank</label>
									<?php
									$list_bank = '';
									if(count($bank_tujuan) > 0) {
										foreach ($bank_tujuan as $row) {
											echo '<input type="hidden" id="no_rek'.$row['id_bank'].'" value="'.$row['no_rek'].'"><input type="hidden" id="atas_nama'.$row['id_bank'].'" value="'.$row['atas_nama'].'"><input type="hidden" id="nama'.$row['id_bank'].'" value="'.$row['nama'].'">';
											$list_bank .= '<option value="'.$row['id_bank'].'">'.$row['nama'].'</option>';
										}
									}
									?>
									<select class="form-control" onchange="change_bank()" name="bank_tujuan" id="bank_tujuan">
										<option value="">Choose Bank</option>
										<?=$list_bank?>
									</select>
								</div>
								<div class="col-md-12 form-group">
									<?php $field = 'nomor_rekening_tujuan'; ?>
									<label for="<?=$field?>">Account Number</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" readonly />
								</div>
								<div class="col-md-12 form-group">
									<?php $field = 'atas_nama_tujuan'; ?>
									<label for="<?=$field?>">Name</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" readonly />
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<h3>Sender's Account</h3>
							<div class="row">
								<div class="col-md-12 form-group p_star">
									<label for="">Bank</label>
									<select class="form-control" onchange="get_rekening()" name="bank_pengirim" id="bank_pengirim">
										<option value="">Choose Bank</option>
										<?php
										if(count($bank) > 0) {
											foreach ($bank as $row) {
												echo '<option value="'.$row['id_bank'].'">'.$row['nama'].'</option>';
											}
										}
										?>
									</select>
								</div>
								<div class="col-md-12 form-group">
									<?php $field = 'nomor_rekening_pengirim'; ?>
									<label for="<?=$field?>">Account Number</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" />
								</div>
								<div class="col-md-12 form-group">
									<?php $field = 'atas_nama_pengirim'; ?>
									<label for="<?=$field?>">Name</label>
									<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" />
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-md-12 form-group">
									<?php $field = 'alamat'; ?>
									<label for="<?=$field?>">Address</label>
									<Textarea class="form-control" id="<?=$field?>" name="<?=$field?>"></Textarea>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="container-fluid">
					<div class="cart_inner">
						<div class="table-responsive d-none d-lg-block">
							<table class="table">
								<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Product</th>
									<th scope="col">Weight</th>
									<th scope="col">Price</th>
									<th scope="col">Quantity</th>
									<th scope="col">Total</th>
								</tr>
								</thead>
								<tbody>
									<?php $total=0;$berat=0;$no=1; foreach($cart as $row):
										$total = $total + ($row['harga'] * $row['qty']);
										$berat = $berat + ($row['berat']*$row['qty']);
										$gambar = $this->m_crud->get_data("gambar_produk", "CONCAT('" . base_url() . "', gambar) gambar", "produk='" . $row['id_produk'] . "'", "id_gambar DESC")['gambar'];
									?>
										<tr>
											<td><?=$no++?></td>
											<td>
												<div class="media">
													<div class="d-flex">
														<img src="<?=base_url().'assets/images/member/default.png'?>" alt="" style="height:40px;" />
													</div>
													<div class="media-body">
														<p><?=$row["nama_produk"]?></p>
														<p>Size &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <?=$row["ukuran"]?></p>
														<p>Color :&nbsp; <?=$row["warna"]?></p>
													</div>
												</div>
											</td>
											<td>
												<h5><?=(($row['berat']*$row['qty'])/1000)?> Kg</h5>
											</td>
											<td>
												<h5><?=number_format($row['harga'])?></h5>
											</td>
											<td>
												<h5><?=$row['qty']?></h5>
											</td>
											<td>
												<h4 style="text-align:right"><?=number_format($row['harga']*$row['qty'])?></h4>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
								<tr>
									<td>Shipping cost</td>
									<td></td><td></td><td></td><td></td>
									<td><h5 class="v_ongkir"  style="text-align:right">0</h5></td>
									<td></td>
								</tr>
								<tr>
									<td>Voucher</td>
									<td></td><td></td><td></td><td></td>
									<td><h5 class="v_voucher"  style="text-align:right">0</h5></td>
									<td></td>
								</tr>
								<tr>
									<td>Total amount:<br><span>Including vat</span></td>
									<td></td><td></td><td></td><td></td>
									<td><h5 style="text-align:right"><?=number_format($total)?></h5></td>
									<td></td>
								</tr>
								</tfoot>
							</table>


						</div>
						<div class="container latest-product-area  d-block d-lg-none">
							<!-- Nav Card -->
							<div class="row">
								<?php $total=0;$berat=0;$no=1; foreach($cart as $row):
									$total = $total + ($row['harga'] * $row['qty']);
									$berat = $berat + ($row['berat']*$row['qty']);
									$gambar = $this->m_crud->get_data("gambar_produk", "CONCAT('" . base_url() . "', gambar) gambar", "produk='" . $row['id_produk'] . "'", "id_gambar DESC")['gambar'];
									?>
									<div class="col-6 col-xs-6 col-xl-3 col-lg-3 col-md-6">
										<div class="single-product mb-60">
											<div class="product-img">
												<img src="<?=base_url()."assets/fo/assets/img/product/product_list_2.png"?>" alt="">
											</div>
											<div class="product-caption" style="height: 50px;">
												<h4 style="color: black;font-size: 12px!important;"><?=$row['nama_produk']?></h4>
											</div>
											<ul  class="unordered-list">
												<li style="text-align: left;font-size: 10px;">Price : <?=number_format($row['harga'])?> x <?=$row['qty']?> </li>
												<li style="text-align: left;font-size: 10px;">Weight : <?=$row['berat']?>  Kg</li>
												<li style="text-align: left;font-size: 10px;">Size : <?=$row['ukuran']?></li>
												<li style="text-align: left;font-size: 10px;">Color : <?=$row['warna']?></li>
												<li style="text-align: left;font-size: 10px;">Total : <?=number_format($row['harga']*$row['qty'])?></li>
											</ul>
											<div class="product-ratting" style="margin-top: 10px;">
												<li class="d-block d-lg-block"> <button style="margin-top: 10px;" type="submit" class="btn header-btn">Remove</button></li>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
							<table class="table">
								<thead>
								<tr>
									<th scope="col">Shipping cost</th>
									<th scope="col">Voucher	</th>
									<th scope="col">Total amount: Including vat</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td class="v_ongkir">0</td>
									<td class="v_voucher">0</td>
									<td><?=number_format($total)?></td>
								</tr>
								</tbody>
							</table>
							<!-- End Nav Card -->
						</div>
						<div class="row">
							<div class="col-6 col-xs-6">
								<li class="d-block d-lg-block"> <a href="<?=base_url()?>" class="btn header-btn">Continue Shopping</a></li>
							</div>
							<div class="col-6 col-xs-6">
								<li class="d-block d-lg-block"> <button type="submit" style="float: right;" class="btn header-btn">Go To Checkout</button></li>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" name="jumlah_voucher" id="jumlah_voucher">
				<input type="hidden" name="id_voucher" id="id_voucher" value="-">
				<input type="hidden" name="data_layanan" id="data_layanan">
				<input type="hidden" name="total" id="total" value="<?=$total?>">
				<input type="hidden" name="berat" id="berat" value="<?=$berat?>">
				<input type="hidden" name="kd_kec" id="kd_kec">
				<input type="hidden" name="kd_kota" id="kd_kota">
				<input type="hidden" name="kd_prov" id="kd_prov">
				<input type="hidden" name="nama_bank_tujuan" id="nama_bank_tujuan">
				<input type="hidden" name="nama_bank_pengirim" id="nama_bank_pengirim">
			</form>
		</div>
	</div>
</section>


<!--================End Checkout Area =================-->
<script>
	var array_ongkir = [];
	function ubah_alamat() {
		var alamat = $("#ch_alamat_jual").val();
		if (alamat === 'baru') {
			$("#form_checkout").validate();
			$("#nama_penerima").val('').attr('readonly', false).rules("add", {
				required: true,
				messages: {required: "Nama penerima tidak boleh kosong"}
			});
			$("#telepon").val('').attr('readonly', false).rules("add", {
				required: true,
				messages: {required: "Telepon tidak boleh kosong"}
			});
			$("#kota").val('').attr('readonly', false).rules("add", {
				required: true,
				messages: {required: "Kota tidak boleh kosong"}
			});
			$("#alamat").text('').attr('readonly', false).rules("add", {
				required: true,
				messages: {required: "Alamat tidak boleh kosong"}
			});
			$("#provinsi").val('');
			$("#kecamatan").val('');

		}
		else if (alamat !== '') {
			$.ajax({
				url: "<?=base_url() . 'api/get_alamat/'?>" + alamat,
				type: "GET",
				dataType: "JSON",
				success: function (res) {
					$("#nama_penerima").val(res.penerima).attr('readonly', true);
					$("#telepon").val(res.telepon).attr('readonly', true);
					$("#alamat").text(res.alamat).attr('readonly', true);
					$("#provinsi").val(res.nama_provinsi).attr('readonly', true);
					$("#kota").val(res.nama_kota).attr('readonly', true);
					$("#kecamatan").val(res.nama_kecamatan).attr('readonly', true);
					$("#kd_kota").val(res.kota);
					$("#kd_kec").val(res.kecamatan);
					$("#kd_prov").val(res.provinsi);
					$("#new_address").hide();
					get_ongkir();
				}
			});
		}
	}


	$("#kota").autocomplete({
		minChars: 3,
		serviceUrl: '<?=base_url().'ajax/get_location'?>',
		type: 'post',
		dataType: 'json',
		response: function(event, ui) {
			if (ui.content.length === 0) {
				$("#empty-message").text("No results found");
			} else {
				$("#empty-message").empty();
			}
		},
		onSelect: function (suggestion) {
			if (suggestion.lokasi !== 'not_found') {
				add_lokasi(suggestion);
			} else {
				$("#kota").val('').focus();
			}
		}
	});
	function add_lokasi(res) {
		console.log(res['kec']);
		$("#kd_kota").val(res['kota_id']);
		$("#kd_prov").val(res['provinsi_id']);
		$("#kd_kec").val(res['kecamatan_id']);
		$("#kota").val(res['kot']);
		$("#provinsi").val(res['prov']).attr('readonly', true);
		$("#kecamatan").val(res['kec']).attr('readonly', true);
	}

	function get_ongkir() {
		var kecamatan_ = $("#kd_kec").val();
		var kurir_ = $("#kurir").val();
		var berat_ = $("#berat").val();
		console.log("kec="+kecamatan_ + "kurir="+kurir_ + "berat="+berat_);
		if (kecamatan_ !== '' && kurir_ !== '') {
			array_ongkir = [];
			$.ajax({
				url: "<?=base_url().'api/get_ongkir';?>",
				type: "POST",
				data: {kecamatan: kecamatan_, kurir: kurir_, berat: berat_, jumlah: 1},
				dataType: "JSON",
				success: function (res) {
					console.log(res);
					var layanan = '';
					var data;
					if (res.costs.length > 0) {
						for (var x = 0; x < res.costs.length; x++) {
							data = {service: res.costs[x].service, cost: res.costs[x].cost};
							array_ongkir.push(data);
							layanan += '<option value="' + x + '">' + res.costs[x].service + '</option>';
						}
					} else {
						data = {service: '-', cost: 0};
						array_ongkir.push(data);
					}
					console.log(layanan);
					$("#layanan").html(layanan);
					setTimeout(function () {
						hitung_total();
					}, 500)
				}
			});
		}
	}


	function hitung_total() {
		/*if ($("#layanan").val() != '') {

		}*/

		var ongkir = 0;
		var etd = 0;
		var id = $("#layanan").val();
		var voucher = $("#jumlah_voucher").val();
		var data = array_ongkir[id];

		if (typeof data !== "undefined") {
			ongkir = data.cost[0]['value'];
			etd = data.cost[0]['etd'];
			$("#data_layanan").val(data.service);
		}

		total = ongkir + parseFloat($("#total").val()) - (isNaN(parseFloat(voucher))?0:parseFloat(voucher));
		$("#ongkir").val(to_rp(ongkir, '-'));
		$(".v_ongkir").text('Rp '+to_rp(ongkir, '-'));
		$("#v_total").text('Rp '+to_rp(total, '-'));
	}

	function change_bank() {
		var id = $("#bank_tujuan").val();
		$("#nama_bank_tujuan").val($("#nama"+id).val());
		$("#atas_nama_tujuan").val($("#atas_nama"+id).val());
		$("#nomor_rekening_tujuan").val($("#no_rek"+id).val());
		$("#bank_pengirim").val(id).change();
	}

	function get_rekening() {
		var id = $("#bank_pengirim").val();
		$.ajax({
			url: "<?=base_url().'api/get_rekening'?>",
			type: "POST",
			data: {bank: id},
			dataType: "JSON",
			success: function (res) {
				if (res.status) {
					$("#nama_bank_pengirim").val(res.res_rekening['bank']);
					$("#nomor_rekening_pengirim").val(res.res_rekening['no_rek']);
					$("#atas_nama_pengirim").val(res.res_rekening['atas_nama']);
				} else {
					$("#nama_bank_pengirim").val(res.res_rekening['nama']);
					$("#nomor_rekening_pengirim").val('');
					$("#atas_nama_pengirim").val('');
				}
			}
		});
	}

	$("#form_checkout").on('submit',function(e){
		e.preventDefault();
		var kota = $("#kota").val();
		Swal.fire({
			title: 'Confirm!',
			html: 'Pastikan data sudah benar.<br><b style="font-weight: bold">Bank '+$("#nama_bank_pengirim").val()+'</b><br> <b style="font-weight: bold">Nomor Rekening : '+$("#nomor_rekening_pengirim").val()+'</b><br> <b style="font-weight: bold">Atas Nama : '+$("#atas_nama_pengirim").val()+'</b>',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Tidak',
			confirmButtonText: 'Ya'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: "<?=base_url().'api/checkout_bayar'?>",
					type:"POST",
					data: $("#form_checkout").serialize(),
					dataType: "JSON",
					success: function (res) {
						console.log(res);
						if (res.status) {
							Swal.fire({
								title: 'Checkout berhasil!',
								html: 'Segera transfer ke rekening :<br><b style="font-weight: bold">Bank '+res.bank+'</b><br> <b style="font-weight: bold">Nomor Rekening : '+res.norek+'</b><br> <b style="font-weight: bold">Atas Nama : '+res.atasnama+'</b><br> <b style="font-weight: bold">Sejumlah : '+res.total+'</b>',
								type: 'success'
							}).then((result) => {
								if (result.value) {
									window.location = '<?=base_url().'store/history'?>';
								}
							})
						} else {
							alert("Data gagal disimpan!");
						}
					}
				});
			}
		})

	})



</script>
