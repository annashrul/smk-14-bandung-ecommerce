<!--================login_part Area =================-->
<section class="login_part">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6">
				<div class="login_part_text text-center">
					<div class="login_part_text_iner">
						<h2>New to our Shop?</h2>
						<p>There are advances being made in science and technology
							everyday, and a good example of this is the</p>
						<a href="<?=base_url().'store/auth?page=register'?>" class="btn_3">Create an Account</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="login_part_form">
					<div class="login_part_form_iner">
						<h3>Welcome Back ! <br>
							Please Sign in now</h3>
						<form class="row " id="formLogin">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" value="" placeholder="Email">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">

							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account d-flex align-items-center">
									<input type="checkbox" id="f-option" name="selector">
									<label for="f-option">Remember me</label>
								</div>
								<button type="submit" value="submit" class="btn_3">
									log in
								</button>
								<a class="lost_pass" href="#">forget password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================login_part end =================-->
<script>
	$(document).ready(function(){
		$("#email").focus();
	})
	$('#formLogin').validate({
		rules: {
			email: {
				required: true,
				email:true
			},
			password: {
				required: true
			},
		},
		//For custom messages
		messages: {
			email:{
				required: "Email tidak boleh kosong!",
				email: "Format email salah"
			},
			password: {
				required: "password tidak boleh kosong!"
			},
		},

		submitHandler: function (form) {
			$.ajax({
				url: "<?=base_url().'ajax/login'?>",
				type: "POST",
				dataType: "JSON",
				data: $("#formLogin").serialize(),
				beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
				complete: function() {$('.first-loader').remove();},
				success: function (res) {
					console.log(res);
					if (res.status) {
						window.location.href="<?=base_url()?>";
					}else{
                        Swal.fire({
                            title: 'Opppss ...',
                            text: "Periksa kembali email dan password anda",
                            icon: 'warning',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Oke'
                        })
//						alert(res.status);
					}
				}
			});
		}
	});
</script>
