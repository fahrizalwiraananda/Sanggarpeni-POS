@extends('layouts.admin')

@section('content_admin')
    <!-- Content -->
            <h3 class="mb-3 mt-3 text-six">Update Pengaturan<span id="explore"></span></h3>
            <div class="row p-3">
                <div class="col-md-6 p-4 rounded-4 border bg-white">
                    <form method="POST" action="{{url('update-setting',$setting->id_setting)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="input-nama_kategori" class="form-label text-one fw-semibold">Nama Perusahaan</label>
                            <input type="text" class="form-control text-two fs-7" id="" name="nama_perusahaan" value="{{$setting->nama_perusahaan}}">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label text-one fw-semibold">Telepon</label>
                            <input type="text" class="form-control text-two fs-7" id="" name="telepon" value="{{$setting->telepon}}">
                        </div>
                        <div class="mb-3">
                            <label for="validationDefault02" class="form-label fw-semibold text-one">Alamat</label>
                            <textarea class="form-control text-two shadow-sm fs-7" name="alamat" placeholder="Deskripsi Produk">
                            {{$setting->alamat}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="input-nama_kategori" class="form-label text-one fw-semibold">Diskon</label>
                            <input type="text" class="form-control text-two fs-7" id="" name="diskon" value="{{$setting->diskon}}">
                        </div>
                        <div class="mb-3">
                            <label for="foto_kategori" class="form-label text-one fw-semibold mb-2">Foto Produk Kategori</label>
                            @if($setting->path_logo)
                            <div class="">
                                <img src="{{ asset('asset/uploads/setting/'.$setting->path_logo) }}" class="img-thumbnail shadow rounded-circle p-0 w-25 zoom mb-3" alt="gambar kategori" style="width: 4vw; height: 100%;">
                            </div>
                            @endif
                            <input type="file" class="form-control text-two" name="path_logo" value="{{$setting->path_logo}}" id="validationDefault01">
                        </div>
                        <div class="col-md d-flex justify-content-center mb-3 text-two ">
                            <p class="" style="text-align: justify;">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG dengan rasio 1X1</p>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-hover w-100">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
            @endsection