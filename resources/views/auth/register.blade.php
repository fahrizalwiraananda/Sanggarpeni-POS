@extends('layouts.auth')

@section('content_auth')
    <section class="main-nav">
        
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
                                <a class="nav-link px-3 hvr-icon-wobble-horizontal cta hvr-float-shadow" id="change-sign" href="login">Sign In <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"></i> </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            <div class="row bg-white-2 justify-content-center align-items-center height-1">              
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card" >
                        <div class="card-body bg-white shadow-sm border br-1 p-5 py-4 text-center">
                            <div class="mb-3">
                                <h4 class="fw-bold text-three m-0 p-0">Buat Akun</h3>
                                <img src="../asset/img/logo-removebg.png" class=" p-0 my-3 reflection" id="image-logo" alt="">
                            </div>
                                <form action="{{url('register-request')}}" class="px-1" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 com-lg-4 col-xl-4">
                                            <div class="row">
                                                <div class="col-md-12 mb-3" style="text-align:left;">
                                                    <input type="text" class="form-control bg-white rounded-3 shadow-sm py-2 px-3 fs-7 " name="name" id="validationDefault01" placeholder="Nama Lengkap" value="{{ old('name') }}" autocomplete="none" autofocus>
                                                    @error('name')
                                                    <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                
                                                <div class="col-md-12 mb-3" style="text-align:left;">
                                                    <input type="email" class="form-control bg-white rounded-3 shadow-sm py-2 px-3 fs-7 border-1" name="email" id="validationDefault01" placeholder="Email" value="{{ old('email') }}">
                                                    @error('email')
                                                    <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                
                                                <div class="col-md-12 mb-3" style="text-align:left;">
                                                    <select class="form-select bg-white rounded-3 shadow-sm py-2 px-3 fs-7 text-two" aria-label="Default select example" name="gender">
                                                        <option >Jenis Kelamin</option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                    @error('gender')
                                                    <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12 mb-3 form-floating" style="text-align:left;">
                                                    <input type="date" class="form-control floatingPassword bg-white rounded-3 shadow-sm text-two fs-7 px-3 border-1" name="ttl" id="validationDefault01" placeholder="Tanggal Lahir" value="{{ old('ttl') }}">
                                                    <label for="floatingPassword ">&nbsp; &nbsp; Tanggal Lahir</label>
                                                    @error('ttl')
                                                    <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4 com-lg-4 col-xl-4">
                                            <div class="row">
                                                <div class="col-md-12 mb-3" style="text-align:left;">
                                                    <input type="text" class="form-control bg-white rounded-3 shadow-sm py-2 px-3 fs-7 border-1" name="telepon" id="validationDefault01" placeholder="Telepon" value="{{ old('telepon') }}">
                                                    @error('telepon')
                                                    <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12 mb-3" style="text-align:left;">
                                                    <textarea class="form-control text-two shadow-sm fs-7" rows="8" name="alamat" placeholder="Alamat" style="text-align:left;"  value="{{ old('alamat') }}"></textarea>
                                                    @error('alamat')
                                                    <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4 com-lg-4 col-xl-4">
                                            <div class="mb-3">
                                                <label for="foto_kategori" class="form-label text-one fw-semibold">Foto Profil Anda</label>
                                                <div class="">
                                                    <img src="../asset/img/input-produk.png" class="img-thumbnail shadow rounded-circle p-0 w-25 zoom mb-3" alt="">
                                                </div>
                                                <input type="file" class="form-control text-two" name="foto" id="validationDefault01" >
                                                @error('foto')
                                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-two fs-7 p-0">Sudah punya akun ? <a href="login" class="text-decoration-none p-0 text-three fw-bold cta hvr-float-shadow">Masuk</a></p>
                                    <div class="col-md-12 d-grid gap-2 mb-3 border border-1">
                                        <button class="btn btn-sign fw-normal gap-5 fs-6 hvr-box-shadow-inset" type="submit">Request</button>
                                    </div>
                                </form>	
                                <div class="term-condition my-2 p-0">
                                    <p class="text-two fs-7 label-sign  m-0 p-0 ">Dengan request akun, saya menyetujui <a href="sign-up.html" class="text-decoration-none text-three fw-bold">Syarat & Ketentuan</a> serta <a href="sign-up.html" class="text-decoration-none text-three fw-bold">Kebijakan Privasi</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <!-- <div class="col-sm-4 col-md-6 col-lg-6 col-xl-6 img-login-section">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-center text-center">
                            <div class="img-login-section mb-5">
                                <img class="img-login mb-3  reflection" src="../asset/img/undraw_referral_re_0aji.svg" alt="">
                                <p class="text-two m-0 p-0">Selamat Datang ! Masukan data yang diperlukan untuk membuat akunmu</p>
                            </div>
                        </div>
                    </div>
                </div>--->
            </div>
        </div>
   @endsection