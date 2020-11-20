<style>
	body {
		font-family: "Open Sans", sans-serif;
		line-height: 1.25;
	}

	table {
		border: 1px solid #ccc;
		border-collapse: collapse;
		margin: 0;
		padding: 0;
		width: 100%;
		table-layout: fixed;
	}

	table caption {
		font-size: 1.5em;
		margin: .5em 0 .75em;
	}

	table tr {
		background-color: #f8f8f8;
		border: 1px solid #ddd;
		padding: .35em;
	}

	table th,
	table td {
		padding: .625em;
		text-align: center;
	}

	table th {
		font-size: .85em;
		letter-spacing: .1em;
		text-transform: uppercase;
	}

	@media screen and (max-width: 900px) {
		table {
			border: 0;
		}

		table caption {
			font-size: 1.3em;
		}

		table thead {
			border: none;
			clip: rect(0 0 0 0);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px;
		}

		table tr {
			border-bottom: 3px solid #ddd;
			display: block;
			margin-bottom: .625em;
		}

		table td {
			border-bottom: 1px solid #ddd;
			display: block;
			font-size: .8em;
			text-align: right;
		}

		table td::before {
			/*
			* aria-label has no advantage, it won't be read inside a table
			content: attr(aria-label);
			*/
			content: attr(data-label);
			float: left;
			font-weight: bold;
			text-transform: uppercase;
		}

		table td:last-child {
			border-bottom: 0;
		}
	}


	.modal-body{
		height: 400px;
		overflow-y: auto;
	}


</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<Center><h1>Order History</h1></Center>
			<table>
				<caption>Statement Summary</caption>
				<thead>
				<tr>
					<th scope="col">No Transaction</th>
					<th scope="col">Due Date</th>
					<th scope="col">Time</th>
					<th scope="col">Transaction Type</th>
					<th scope="col">Amount</th>
					<th scope="col">Status</th>
					<th scope="col">Action</th>
				</tr>
				</thead>
				<tbody>
				<?php
				if($orders != null){
					foreach($orders as $key=>$row):
						$status='';

						$dropdown = '<a class="dropdown-item" href="javascript:" onclick="detail(\'' . $row['id_orders'] . '\')">Detail</a>';
						if ($row['status'] == '1'){
							if ($row['status_bayar'] == '1') {
								$status = '<span class="badge badge-pill badge-warning text-white py-2 px-3">Waiting Payment</span>';
								$dropdown .= '<a class="dropdown-item" href="javascript:" onclick="konfirmasi(\'' . $row['pembayaran'] . '\',\'' . $row['id_orders'] . '\')">Confirm</a>';
							}
						}
						else if ($row['status'] == '2' || $row['status'] == '3'){
							$dropdown .= '<a class="dropdown-item" href="javascript:" onclick="lacak(\'' . $row['id_pengiriman'] . '\')">Lacak</a> ';
							if ($row['status'] == '3') {
								$dropdown .= '<a class="dropdown-item" href="javascript:" onclick="finish(\'' . $row['id_orders'] . '\')">Terima</a>';
							}
							$status = '<span class="badge badge-pill badge-primary text-white py-2 px-3">On Process</span>';
						}
						else if ($row['status'] == '4'){
							$status = '<span class="badge badge-pill badge-success text-white py-2 px-3">Success</span>';
						}
						else{
							$status = '<span class="badge badge-pill badge-danger text-white py-2 px-3">Cancel</span>';
						}
						$get_ongkir = $this->m_crud->get_data("pengiriman", "biaya", "orders='" . $row['id_orders'] . "'")['biaya'];
				?>
				<tr>
					<td data-label="No Transaction" style="text-align:left;width:20%"><?=$row['id_orders']?></td>
					<td data-label="Due Date"><?=date('d M Y', strtotime($row['tgl_orders']))?></td>
					<td data-label="Time"><?=date('H:i:s', strtotime($row['tgl_orders']))?></td>
					<td data-label="Transaction Type">Transfer </td>
					<td data-label="Amount"><?=number_format((float)$row['total']+(float)$row['kode_unik']+(float)$get_ongkir-$row['jumlah_voucher'])?></td>
					<td data-label="Status"><?=$status?></td>
					<td data-label="Action">
						<div class="dropdown">
							<button style="font-size: 12px;padding: 10px;" class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Detail
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<?=$dropdown?>
							</div>
						</div>
					</td>
				</tr>
				<?php endforeach;} ?>

				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="modal" id="modal_detail" tabindex="-1" role="dialog" style="overflow: hidden;">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div style="margin: 10px" id="content_modal"></div>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modal_lacak" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Hasil Lacak</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h3 id="expedisi"></h3>
				<div class="table-responsive">
					<h4>Informasi Pengiriman</h4>
<!--					<table class="table table-bordered">-->
<!--						<tbody id="informasi"></tbody>-->
<!--					</table>-->
					<div class="container">
						<div class="row">
							<div class="col-4 col-xs-4 col-md-4"><p>No Resi</p></div>
							<div class="col-8 col-xs-8 col-md-8"><p id="res_resi"></p></div>
							<div class="col-4 col-xs-4 col-md-4"><p>Status</p></div>
							<div class="col-8 col-xs-8 col-md-8"><p id="res_status"></p></div>
							<div class="col-4 col-xs-4 col-md-4"><p>Jenis Layanan</p></div>
							<div class="col-8 col-xs-8 col-md-8"><p id="res_jenis"></p></div>
							<div class="col-4 col-xs-4 col-md-4"><p>Tanggal</p></div>
							<div class="col-8 col-xs-8 col-md-8"><p id="res_tanggal"></p></div>
							<div class="col-4 col-xs-4 col-md-4"><p>Pengirim</p></div>
							<div class="col-8 col-xs-8 col-md-8"><p id="res_pengirim"></p></div>
							<div class="col-4 col-xs-4 col-md-4"><p>Penerima</p></div>
							<div class="col-8 col-xs-8 col-md-8"><p id="res_penerima"></p></div>
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<h4>Status Pengiriman</h4>
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>Tanggal</th>
							<th>Jam</th>
							<th>Keterangan</th>
						</tr>
						</thead>
						<tbody id="status"></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal" id="myModal" tabindex="-1" role="dialog"  style="overflow: hidden;">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Upload Bukti Transfer</h5>
				<button type="button" class="close"  data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="form_confirm">
					<input type="text" name="id_orders" id="id_orders">
					<input type="hidden" name="id_pembayaran" id="id_pembayaran">
					<div class="form-group-group">
						<span>Nama Bank</span>
						<input class="form-control" type="text" name="" id="nama_bank" readonly>
					</div>
					<div class="form-group">
						<span>Nomor Rekening</span>
						<input class="form-control" type="text" name="" id="nomor_rekening" readonly>
					</div>
					<div class="form-group">
						<span>Atas Nama</span>
						<input class="form-control" type="text" name="" id="atas_nama" readonly>
					</div>
					<div class="form-group">
						<span>Jumlah Transfer</span>
						<input class="form-control" type="text" name="" id="jumlah_transfer" readonly>
					</div>
					<div class="form-group">
						<span>Bukti Transfer</span>
						<input class="form-control" type="file" accept="image/*" name="bukti_transfer" id="customFile">
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>




<script>
	function finish(id) {
		Swal.fire({
			title: 'Konfirmasi penerimaan',
			text: 'Akan menyelesaikan transaksi?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Tidak',
			confirmButtonText: 'Ya'
		}).then(function (result) {
			if (result.value) {
				$.ajax({
					url: "<?=base_url().'api/finish_order'?>",
					type: "POST",
					data: {id_orders: id},
					dataType: "JSON",
					success: function (res) {
						if (res.status) {
							location.reload();
						}
					}
				});
			}
		})
	}

	function lacak(id) {
		$.ajax({
			url: "<?=base_url().'api/lacak_resi'?>",
			type: "POST",
			data: {id_pengiriman: id},
			dataType: "JSON",
			beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
			complete: function() {$('.first-loader').remove();},
			success: function (res) {
				if (res.status) {
					$("#expedisi").text('Expedisi '+res.summary['courier_name']);
					$("#res_resi").text(": "+res.details['waybill_number']);
					$("#res_status").text(": "+res.summary['status']);
					$("#res_jenis").text(": "+res.summary['service_code']);
					$("#res_tanggal").text(": "+res.details['waybill_number']);
					$("#res_pengirim").text(": "+res.details['shippper_name']+' '+res.details['shipper_city']+', '+res.details['shipper_address1']+', '+res.details['shipper_address2']+', '+res.details['shipper_address3']);
					$("#res_penerima").text(": "+res.details['receiver_name']+' '+res.details['receiver_city']+', '+res.details['receiver_address1']+', '+res.details['receiver_address2']+', '+res.details['receiver_address3']);
					var informasi = '' +
						'<tr><td width="130">Nomor Resi</td><td>:</td><td>'+res.details['waybill_number']+'</td></tr>'+
						'<tr><td width="130">Status</td><td>:</td><td>'+res.summary['status']+'</td></tr>'+
						'<tr><td width="130">Jenis Layanan</td><td>:</td><td>'+res.summary['service_code']+'</td></tr>'+
						'<tr><td width="130">Tanggal</td><td>:</td><td>'+res.details['waybill_date']+' '+res.details['waybill_time']+'</td></tr>'+
						'<tr><td width="130">Pengirim</td><td>:</td><td>'+res.details['shippper_name']+' '+res.details['shipper_city']+', '+res.details['shipper_address1']+', '+res.details['shipper_address2']+', '+res.details['shipper_address3']+'</td></tr>'+
						'<tr><td width="130">Penerima</td><td>:</td><td>'+res.details['receiver_name']+' '+res.details['receiver_city']+', '+res.details['receiver_address1']+', '+res.details['receiver_address2']+', '+res.details['receiver_address3']+'</td></tr>';
					$("#informasi").html(informasi);
					var manifest = res.manifest;
					var status = '';
					for (var x=0; x<manifest.length; x++) {
						status += '' +
							'<tr><td>'+manifest[x]['manifest_date']+'</td><td>'+manifest[x]['manifest_time']+'</td><td>'+manifest[x]['manifest_description']+'</td></tr>';
					}
					$("#status").html(status);
					$("#modal_lacak").modal('show')
				} else {
					Swal.fire({
						type: 'info',
						title: 'Oops...',
						text: 'Nomor resi salah atau belum terdata oleh sistem expedisi'
					})
				}
			}
		});
	}

	function detail(id) {
		$.ajax({
			url: "<?=base_url().'api/get_detail_orders/'?>" + btoa(id),
			type: "GET",
			dataType: "JSON",
			success: function (res) {
				if (res.status) {
					$("#content_modal").html(res.res_detail);
					$("#modal_detail").modal("show");
				}
			}
		});
	}

	function konfirmasi(id,order) {
		$.ajax({
			url: "<?=base_url().'api/prev_confirm'?>",
			data: {id_pembayaran: id},
			type: "POST",
			dataType: "JSON",
			success: function (res) {
				console.log(res);
				$("#id_orders").val(order);
				if (res.status) {
					$("#kode_pembayaran").text(id);
					$("#id_pembayaran").val(id);
					$("#nama_bank").val(res.res_confirm['bank']);
					$("#nomor_rekening").val(res.res_confirm['no_rek']);
					$("#atas_nama").val(res.res_confirm['atas_nama']);
					$("#jumlah_transfer").val(to_rp(res.res_confirm['total'], '-'));
					//$("#myModal").show();
					$("#myModal").modal('show');
					// document.getElementById('myModal').style.display = "block";
				}
			}
		});
	}

	$('#form_confirm').validate({
		rules: {
			bukti_transfer: {
				required: true
			}
		},
		//For custom messages
		messages: {
			bukti_transfer: {
				required: "Bukti transfer harus di upload!"
			}
		},
		errorElement : 'div',
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			if (placement) {
				$(placement).append(error)
			} else {
				error.insertAfter(element);
			}
		},
		submitHandler: function (form) {
			var myForm = document.getElementById('form_confirm');
			$.ajax({
				url: "<?=base_url().'api/konfirmasi_pembayaran'?>",
				type: "POST",
				data: new FormData(myForm),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				dataType: "JSON",
				success: function (res) {
					console.log(res);
					if (res.status) {
						Swal.fire({
							title: 'Success!',
							type: 'success'
						}).then((result) => {
							if (result.value) {
								location.reload();
							}
						});
					}
				}
			});
		}
	});

	function hide_modal(param){
		if(param==='lacak'){
			$("#modal_lacak").modal('hide');
		}
		if(param==='bukti'){
			$('#myModal').on('shown.bs.modal', function(e) {
				$("#myModal").modal("hide");
			});
		}
	}
</script>


