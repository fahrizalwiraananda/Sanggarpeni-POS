@extends('layouts.auth')

@section('content_auth')
        <nav class="navbar bg-blue navbar-expand-lg height-4 img-login-section">
            <div class="container">
                <div class="nav-brand">
                    <p class="fs-4 m-0 p-0 text-logo fw-semibold" style="margin-bottom: -5px !important;">SanggarPeni</p> <span class="text-logo fs-7">Point Of Sale</span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex justify-content-between align-items-center">
                        <li class="nav-item">
                            <div class="d-grid gap-2 w-100 py-1">
                                <a class="nav-link px-3 hvr-icon-wobble-horizontal cta hvr-float-shadow" id="change-sign" href="register">Request Account <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"></i> </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row bg-white-2 d-flex justify-content-center align-items-center height-1">
                <div class="col-sm-4 col-md-6 col-lg-6 col-xl-6 img-login-section">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-center text-center">
                            <div class="img-login-section">
                                <img class="img-login mb-3 reflection" src="../asset/img/undraw_web_shopping_re_owap (1).svg" alt="">
                                <p class="text-two m-0 p-0"> <span class="text-three fw-semibold">Selamat Datang Kembali !</span> pendataan dan proses transaksi menjadi lebih cepat dengan SanggarPeni Point Of sale.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-5 col-lg-5 col-xl-5">
                    <div class="card" >
                        <div class="card-body bg-white br-1 p-5 text-center border shadow-card">
                            <div class="mb-3">
                                <h4 class="fw-bold text-three p-0">Masuk Akun</h3>
                                <img src="../asset/img/logo-removebg.png" class=" p-0 my-3 reflection" id="image-logo" alt="">
                            </div>
                            <div class="row">
                                <form method="post" action="{{ url('login/proses') }}" class="px-1">
                                    @csrf
                                        <div class="col-md-12 mb-3" style="text-align:left;">
                                            <input type="text" class="form-control bg-white rounded-3 shadow-sm py-2 px-3 fs-7 border-1"
                                            name="username" id="validationDefault01" placeholder="Username" value="{{ old('username') }}">
                                            @error('username')
                                            <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3" style="text-align:left;">
                                            <input type="password" class="form-control bg-white rounded-3 shadow-sm border-1 py-2 px-3 fs-7 border-1" is-invalid 
                                            name="password" id="validationDefault01" placeholder="Password">
                                            @error('password')
                                            <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3 d-flex justify-content-between">
                                            <div class="remember d-flex justify-content-between">
                                                <input type="checkbox" value="" class="remember me-1" id="checkbox">
                                                <label class="text-two fs-7" for="checkbox">
                                                    Ingat Saya !
                                                </label>
                                            </div>
                                            <a href="sign-up.html" class="text-decoration-none fw-semibold text-three fs-7 fw-normal cta hvr-float-shadow" id="forgot">Lupa Password ?</a>
                                        </div>

                                        <div class="col-md-12 d-grid gap-2 mb-5 border border-1">
                                            <button class="btn btn-sign fw-semibold fs-6 hvr-box-shadow-inset" type="submit">Masuk</button>
                                        </div>
                                    
                                </form>	
                            </div>
                            <div class="mb-0">
                                <p class="text-two fs-7">Belum punya akun ? <a href="register" class="text-decoration-none text-three fw-bold cta hvr-float-shadow">Request</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 @endsection