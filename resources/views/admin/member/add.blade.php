@extends('layouts.admin')

@section('content_admin')
            
            <h3 class="mb-3 mt-3 text-six">Tambah Produk <span id="explore"></span></h3>
            <form action="{{url('insert-member')}}" method="POST" enctype="multipart/form-data">
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
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Kode member</label>
                                <input type="text" class="form-control text-two fs-7" name="kode_member" value="{{ 'SPM-'.$kode }}" readonly id="validationDefault01">
                              
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Nama</label>
                                <input type="text" class="form-control text-two fs-7" name="name" id="validationDefault01">
                                @error('name')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                           
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Username</label>
                                <input type="text" class="form-control text-two fs-7" name="username" id="validationDefault01">
                                @error('username')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Email</label>
                                <input type="email" class="form-control text-two fs-7" name="email" id="validationDefault01">
                                @error('email')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3"><!--Untuk Kategori Ambil dari ID Kategori-->
                                <label for="jk" class="form-label fw-semibold text-on">Jenis Kelamin</label>
                                <select class="form-select" name="jk" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kelamin</option>                                                                       <option value="Laki-Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jk')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Tanggal Lahir</label>
                                <input type="date" class="form-control text-two fs-7" name="tgl_lahir" id="validationDefault01">
                                @error('tgl_lahir')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                          
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Telepon</label>
                                <input type="number" class="form-control text-two fs-7" name="telpon" id="validationDefault01">
                                @error('telpon')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Provinsi</label>
                                <input type="text" class="form-control text-two fs-7" name="provinsi" id="validationDefault01">
                                @error('provinsi')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Kabupaten</label>
                                <input type="text" class="form-control text-two fs-7" name="kabupaten" id="validationDefault01">
                                @error('kabupaten')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Kecamatan</label>
                                <input type="text" class="form-control text-two fs-7" name="kecamatan" id="validationDefault01">
                                @error('kecamatan')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Kode Pos</label>
                                <input type="text" class="form-control text-two fs-7" name="kode_pos" id="validationDefault01">
                                @error('kode_pos')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="validationDefault02" class="form-label fw-semibold text-one">Alamat Lengkap</label>
                                <textarea class="form-control text-two shadow-sm fs-7" name="alamat_lengkap" placeholder="Alamat"></textarea>
                                @error('alamat_lengkap')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-grid gap-2 mt-5 mb-3">
                        <button class="btn btn-hover" type="submit">Tambah</button>
                    </div>
                </div>
            </form>

    @endsection
 