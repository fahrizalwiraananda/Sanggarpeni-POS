@extends('layouts.admin')

@section('content_admin')
            <h3 class="mb-5 fw-semibold text-six">Ubah Data User <span id="explore"></span></h3>
            <form action="{{url('update-user',$userdt->id)}}" method="POST" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-baseline mb-3">
                            @if($userdt->foto)
                                <img src="{{ asset('asset/uploads/foto/'.$userdt->foto) }}" class="img-thumbnail shadow rounded-circle p-0 w-75 zoom"  alt="" alt="">
                            @endif
                            </div>
                            <div class="col-md-12 d-flex justify-content-center m-0 mb-3">
                                <input type="file" class="form-control text-two" name="foto" id="validationDefault01">
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
                                <input type="text" value="{{$userdt->name}}" class="form-control text-two" name="name" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Email</label>
                                <input type="text" value="{{$userdt->email}}" class="form-control text-two" name="email" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3"><!--Untuk Kategori Ambil dari ID Kategori-->
                                <label for="gender" class="form-label fw-semibold text-on">Jenis Kelamin</label>
                                <select class="form-select bg-white rounded-3 shadow-sm py-2 px-3 fs-7 text-two" aria-label="Default select example" name="gender">
                                    <option value="{{$userdt->gender}}" selected>{{$userdt->gender}}</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="ttl" class="form-label fw-semibold text-on">Jenis Kelamin</label>
                                <input type="date" class="form-control bg-white rounded-3 shadow-sm text-two fs-7 px-3 border-1" name="ttl" id="validationDefault01" placeholder="Tanggal Lahir" value="{{ $userdt->ttl }}">
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Telepon</label>
                                <input type="text" class="form-control bg-white rounded-3 shadow-sm py-2 px-3 fs-7 border-1" name="telepon" id="validationDefault01" placeholder="Telepon" value="{{ $userdt->telepon  }}" required>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Username</label>
                                <input type="text" value="{{$userdt->username}}" class="form-control text-two" name="username" id="validationDefault01" required>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Password</label>
                                <input type="text" value="{{$userdt->password}}" class="form-control text-two" name="password" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Level</label>
                                <select class="form-select bg-white rounded-3 shadow-sm py-2 px-3 fs-7 text-two" aria-label="Default select example" name="level">
                                    <option value="{{$userdt->level}}" selected>{{$userdt->level}}</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Kasir</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Status</label>
                                <select class="form-select bg-white rounded-3 shadow-sm py-2 px-3 fs-7 text-two" aria-label="Default select example" name="status">
                                    <option value="{{$userdt->status}}" selected>{{$userdt->status}}</option>
                                    <option value="Request">Request</option>
                                    <option value="Active">Active</option>
                                </select>
                            </div>
                            <div class="col-md-12"> <!--Maksimal penulisan 500 character-->
                                <textarea class="form-control text-two shadow-sm fs-7" rows="8" name="alamat" style="text-align:left;"  value="{{ $userdt->alamat }}">{{ $userdt->alamat }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-grid gap-2 mt-5 mb-3">
                        <button class="btn btn-hover" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
@endsection