<div class="container">

<div class="row justify-content-center mt-5">
    <div class="col-xl-10 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- Ini Bagian Gambar pada Register page -->
                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><b> Registrasi </b></h1>
                        </div>
                        <form class="user">
                            <!-- <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <input type="name" class="form-control form-control-user" id="name" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username" placeholder="Username">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="Password" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="RepeatPassword" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Registrasi Akun
                            </button>
                            <hr>
                        </form>
                        <!-- <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div> -->
                        <div class="text-center">
                            <a  href="<?= base_url('auth'); ?>" class="small">Sudah punya akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


</div>