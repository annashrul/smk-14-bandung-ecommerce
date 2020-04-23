<style>
	.btn, .input-group-btn .btn {
		margin: 0px !important;
	}
</style>


<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" id="modal_bestsellers" style="display: none">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modal_title"></h4>
			</div>
			<form class="form-horizontal" id="form_bestsellers" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="box-body">
						<div class="row">
							<div class="form-group">
								<?php $label = 'harga_cod'; ?>
								<input type="text" name="<?=$label?>" class="form-control" id="<?=$label?>" autocomplete="off" placeholder="Cari Produk">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="simpan" name="simpan">Simpan</button>
				</div>
				<input type="hidden" name="param" id="param" value="add">
				<input type="hidden" name="id" id="id">
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<script>
	$("#modal_bestsellers").modal("show");
	$(document).ready(function(){
		$("#modal_title").text("Tambah Promo");
		$("#param").val("add");
		$("#modal_bestsellers").modal("show");
		load_data();
	});

	function load_data(){
		$.ajax({
			url : "<?=base_url().$content.'/load_data'?>",
			type:"POST",
			dataType:"JSON",
			success:function(res){
				console.log(res);
				$("#harga_cod").val(res.harga_cod)
			}
		})
	}

	$('#form_bestsellers').validate({
		rules: {
			harga_cod: {
				required: true
			}
		},
		//For custom messages
		messages: {
			harga_cod:{
				required: "harga harus diisi!"
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
			var myForm = document.getElementById('form_bestsellers');
			$.ajax({
				url: "<?=base_url().$content.'/simpan'?>",
				type: "POST",
				data: new FormData(myForm),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				beforeSend: function() {
					$('body').append('<div class="first-loader"><img src="<?=base_url().'/assets/images/spin.svg'?>"></div>');
				},
				complete: function() {
					$('.first-loader').remove();
				},
				success: function (res) {
					$("#modal_bestsellers").modal('hide');
					load_data(1);
				}
			});
		}
	});

	$("#modal_bestsellers").on("hide.bs.modal", function () {
		document.getElementById("form_bestsellers").reset();
		$( "#form_bestsellers" ).validate().resetForm();
	});
</script>
