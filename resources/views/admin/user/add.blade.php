@extends('layouts.admin')

@section('content_admin')
            
            <h3 class="mb-3 mt-3 text-six">Tambah Produk <span id="explore"></span></h3>
            <form action="{{url('insert-user')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-baseline mb-3">
                                <img src="../asset/img/input-produk.png" class="img-thumbnail shadow rounded-circle p-0 w-75 zoom"  alt=""> <!---Preview Image-->
                            </div>
                            <div class="col-md-12 d-flex justify-content-center m-0 mb-3">
                                <input type="file" class="form-control text-two" name="foto" id="validationDefault01">
                                @error('foto')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 d-flex justify-content-center m-0 text-two">
                                <p style="text-align: justify;">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG dengan rasio 1X1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Nama Lengkap</label>
                                <input type="text" class="form-control text-two fs-7" name="name" id="validationDefault01" value="{{ old('name') }}">
                                @error('name')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3"><!--Untuk Kategori Ambil dari ID Kategori-->
                                <label for="kategori" class="form-label fw-semibold text-on">Username</label>
                                <input type="text" class="form-control bg-white rounded-3 shadow-sm py-2 px-3 fs-7 border-1" name="username" id="validationDefault01" value="{{ old('username') }}">
                                @error('username')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                                
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3"><!--Untuk Kategori Ambil dari ID Kategori-->
                                <label for="kategori" class="form-label fw-semibold text-on">Password</label>
                                <input type="password" class="form-control bg-white rounded-3 shadow-sm py-2 px-3 fs-7 border-1" name="password" id="validationDefault01" placeholder="password" value="{{ old('password') }}">
                                @error('password')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                                
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3"><!--Untuk Kategori Ambil dari ID Kategori-->
                                <label for="kategori" class="form-label fw-semibold text-on">Email</label>
                                <input type="email" class="form-control bg-white rounded-3 shadow-sm py-2 px-3 fs-7 border-1" name="email" id="validationDefault01" placeholder="email@gmail.com" value="{{ old('email') }}">
                                @error('email')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                                
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Jenis Kelamin</label>
                                <select class="form-select bg-white rounded-3 shadow-sm py-2 px-3 fs-7 text-two" aria-label="Default select example" name="gender">
                                    <option >Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Tanggal Lahir</label>
                                <input type="date" class="form-control floatingPassword bg-white rounded-3 shadow-sm text-two fs-7 px-3 border-1" name="ttl" id="validationDefault01" placeholder="Tanggal Lahir" value="{{ old('ttl') }}">
                                @error('ttl')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Telepon</label>
                                <input type="text" class="form-control bg-white rounded-3 shadow-sm py-2 px-3 fs-7 border-1" name="telepon" id="validationDefault01" placeholder="Telepon" value="{{ old('telepon') }}">
                                @error('telepon')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Status</label>
                                <select class="form-select bg-white rounded-3 shadow-sm py-2 px-3 fs-7 text-two" aria-label="Default select example" name="status" >
                                    <option >Status Akun</option>
                                    <option value="Request">Request</option>
                                    <option value="Active">Active</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Status</label>
                                <select class="form-select bg-white rounded-3 shadow-sm py-2 px-3 fs-7 text-two" aria-label="Default select example" name="level">
                                    <option >Level Akun</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Kasir</option>
                                </select>
                            </div>
                            <div class="col-md-12"> <!--Maksimal penulisan 500 character-->
                                <label for="validationDefault02" class="form-label fw-semibold text-one" id="editor">Alamat</label>
                                <textarea class="form-control text-two shadow-sm fs-7" rows="8" name="alamat" placeholder="Alamat" style="text-align:left;"  value="{{ old('alamat') }}"></textarea>
                                @error('alamat')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                                <!--
                                    Tambahkan query htmlspecialchars_decode($produk[deskripsi]) saat menampilkan data dari DB agar tag html hilang
                                -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-grid gap-2 mt-5 mb-3">
                        <button class="btn btn-hover" type="submit">Tambah</button>
                    </div>
                </div>
            </form>

    @endsection
 