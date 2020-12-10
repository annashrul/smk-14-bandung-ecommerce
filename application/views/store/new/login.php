
<section class="bg-home d-flex align-items-center">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="mr-lg-5">
                    <img src="<?=base_url()?>assets/frontend/images/user/login.svg" class="img-fluid d-block mx-auto" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="card login-page bg-white shadow rounded border-10 ">
                    <div class="card-body">
                        <h4 class="card-title text-center">Login</h4>
                        <form class="login-form mt-4" id="formLogin">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Your Email <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="email" class="form-control pl-5" placeholder="Email" name="email" id="email" required>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" placeholder="Password" name="password" id="password" required>
                                        </div>
                                    </div>
                                </div><!--end col-->



                                <div class="col-lg-12 mb-0">
                                    <button class="btn btn-primary btn-block">Sign in</button>
                                </div><!--end col-->



                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="auth-signup.html" class="text-dark font-weight-bold">Sign Up</a></p>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                </div><!---->
            </div> <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->

<script>
    $(document).ready(function(){
        $("#email").focus();
        $("#formLogin").submit(function(){
            $.ajax({
                url: "<?=base_url().'ajax/login'?>",
                type: "POST",
                dataType: "JSON",
                data: $("#formLogin").serialize(),
                beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
                complete: function() {$('.first-loader').remove();},
                success: function (res) {
                    if (res.status) {
                        window.location.href="<?=base_url()?>";
                    }else{
                        swal({
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
        });
    })

</script>