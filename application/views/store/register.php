<!--================login_part Area =================-->
<!--<section class="login_part">-->
<!--	<div class="container">-->
<!--		<div class="row align-items-center">-->
<!--			<div class="col-lg-6 col-md-6">-->
<!--				<div class="login_part_text text-center">-->
<!--					<div class="login_part_text_iner">-->
<!--						<h2>New to our Shop?</h2>-->
<!--						<p>There are advances being made in science and technology-->
<!--							everyday, and a good example of this is the</p>-->
<!--						<a href="--><?//=base_url().'store/auth?page=login'?><!--" class="btn_3">Sign In</a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-6 col-md-6">-->
<!--				<div class="login_part_form">-->
<!--					<div class="login_part_form_iner">-->
<!--						<h3>Welcome Back ! <br>Please Sign in now</h3>-->
<!--						<form class="row " id="formRegister">-->
<!--							<div class="col-md-12 form-group">-->
<!--								--><?php //$field = 'nama'; ?>
<!--								<input type="text" class="form-control" id="--><?//=$field?><!--" name="--><?//=$field?><!--" placeholder="Name">-->
<!--							</div>-->
<!--							<div class="col-md-12 form-group">-->
<!--								--><?php //$field = 'jk'; ?>
<!--								<select name="--><?//=$field?><!--" id="--><?//=$field?><!--" class="form-control">-->
<!--									<option value="">Gender</option>-->
<!--									<option value="L">Male</option>-->
<!--									<option value="P">Female</option>-->
<!--								</select>-->
<!--							</div>-->
<!--							<div class="col-md-12 form-group">-->
<!--								--><?php //$field = 'tgl_lahir'; ?>
<!--								<input type="date" class="form-control" name="--><?//=$field?><!--" id="--><?//=$field?><!--" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>-->
<!--							</div>-->
<!--							<div class="col-md-12 form-group">-->
<!--								--><?php //$field = 'telp'; ?>
<!--								<input type="text" class="form-control" id="--><?//=$field?><!--" name="--><?//=$field?><!--" value="" placeholder="No Telephone">-->
<!--							</div>-->
<!--							<div class="col-md-12 form-group">-->
<!--								--><?php //$field = 'email'; ?>
<!--								<input type="text" class="form-control" id="--><?//=$field?><!--" name="--><?//=$field?><!--" value="" placeholder="Email">-->
<!--							</div>-->
<!--							<div class="col-md-12 form-group">-->
<!--								--><?php //$field = 'password'; ?>
<!--								<input type="text" class="form-control" id="--><?//=$field?><!--" name="--><?//=$field?><!--" value="" placeholder="Passeord">-->
<!--							</div>-->
<!--							<div class="col-md-12 form-group">-->
<!--								<button type="submit" value="submit" class="btn_3">-->
<!--									Create Account-->
<!--								</button>-->
<!--							</div>-->
<!--						</form>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<!--================login_part end =================-->
<script>
	//$("#formRegister").on('submit',function(e){
	//	e.preventDefault();
	//	$.ajax({
	//		url: "<?//=base_url().'ajax/register/simpan'?>//",
	//		type: "POST",
	//		dataType: "JSON",
	//		data: $("#formRegister").serialize(),
	//		beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?//=base_url()?>//assets/images/spin.svg"></div>');},
	//		complete: function() {$('.first-loader').remove();},
	//		success: function (res) {
	//			console.log(res);
	//			if (res.status) {
	//				window.location.href="<?//=base_url()?>//";
	//			}else{
	//				alert(res.status);
	//			}
	//		}
	//	});
	//})
</script>

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
						<form class="row " id="formLogin">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="nama" name="nama" value="" placeholder="Name">
							</div>
							<div class="col-md-12 form-group">
								<?php $field = 'jk'; ?>
								<select name="<?=$field?>" id="<?=$field?>" class="form-control">
									<option value="">Gender</option>
									<option value="L">Male</option>
									<option value="P">Female</option>
								</select>
							</div>
							<div class="col-md-12 form-group">
								<?php $field = 'tgl_lahir'; ?>
								<input type="date" class="form-control" name="<?=$field?>" id="<?=$field?>" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
							</div>
							<div class="col-md-12 form-group">
								<?php $field = 'telp'; ?>
								<input type="text" class="form-control" id="<?=$field?>" name="<?=$field?>" value="" placeholder="No Telephone">
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" value="" placeholder="Email">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password_conf" name="password_conf" value="" placeholder="Confirmation Password">
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
		$("#nama").focus();
	})
	var notif = 'cannot be empty!';
	$('#formLogin').validate({

		rules: {
			nama: {
				required: true
			},
			jk: {
				required: true
			},
			tgl_lahir: {
				required: true
			},
			email: {
				required: true,
				email: true,
				remote: {
					url: "<?=base_url().'ajax/register/cek_email'?>",
					type: "post"
				}
			},
			password: {
				required: true,
				minlength: 6,
				maxlength: 15
			},
			password_conf: {
				required: true,
				equalTo: "#password"
			},
			telp: {
				required: true,
				remote: {
					url: "<?=base_url().'ajax/register/cek_telepon'?>",
					type: "post"
				}
			}
		},
		//For custom messages
		messages: {
			nama: {
				required: "Name "+notif
			},
			jk: {
				required: "Gender "+notif
			},
			tgl_lahir: {
				required: "Date of birth "+notif
			},
			telp: {
				required: "Phone Number "+notif,
				remote: "Phone number already exist!"
			},
			email:{
				required: "Email "+notif,
				email: "Email Is Incorrect",
				remote: "Email already exist!"
			},
			password:{
				required: "Password "+notif,
				minlength: "Password must be more than 6 characters!",
				maxlength: "Password cannot be longer than 15 characters"
			},
			password_conf:{
				required: "Confirmation Password "+notif,
				equalTo: "Password does not match!"
			},
		},

		submitHandler: function (form) {
			$.ajax({
				url: "<?=base_url().'ajax/register/simpan'?>",
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
						alert(res.status);
					}
				}
			});
		}
	});
</script>

