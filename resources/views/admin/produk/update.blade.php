@extends('layouts.admin')

@section('content_admin')
            <h3 class="mb-5 fw-semibold text-brown">Ubah Data Produk <span id="explore"></span></h3>
            <form action="{{url('update-product',$produk->id_produk)}}" method="POST" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-baseline mb-3">
                            @if($produk->image)
                                <img src="{{ asset('asset/uploads/product/'.$produk->image) }}" class="img-thumbnail shadow rounded-circle p-0 w-75 zoom"  alt="" alt="">
                            @endif
                            </div>
                            <div class="col-md-12 d-flex justify-content-center m-0 mb-3">
                                <input type="file" class="form-control text-two" name="image" id="validationDefault01">
                            </div>
                            <div class="col-md-12 d-flex justify-content-center m-0 text-two">
                                <p style="text-align: justify;">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG dengan rasio 1X1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Kode Produk</label>
                                <input type="text" value="{{$produk->kode_produk}}" class="form-control text-two" name="kode_produk" id="validationDefault01" readonly>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Nama Produk</label>
                                <input type="text" value="{{$produk->nama_produk}}" class="form-control text-two" name="nama_produk" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="kategori" class="form-label fw-semibold text-on">Kategori</label>
                                <select class="form-select" name="id_kategori">
                                    <option value="{{$produk->id_kategori}}" selected>{{$produk->category->nama_kategori}}</option>
                                    @foreach($kategori as $item)
                                        <option value="{{ $item->id_kategori}}">{{$item->nama_kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Harga</label>
                                <input type="text" value="{{$produk->harga_produk}}" class="form-control text-two" name="harga_produk" id="validationDefault01"  required>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Berat</label>
                                <input type="text" value="{{$produk->berat}}" class="form-control text-two" name="berat" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Material</label>
                                <input type="text" value="{{$produk->material}}" class="form-control text-two" name="material" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Size</label>
                                <input type="text" value="{{$produk->size}}" class="form-control text-two" name="size" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Pelapis</label>
                                <input type="text" value="{{$produk->pelapis}}" class="form-control text-two" name="pelapis" id="validationDefault01" required>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Stok</label>
                                <input type="number" value="{{$produk->stok}}" class="form-control text-two" name="stok" id="validationDefault01" required>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Diskon (%)</label>
                                <input type="number" value="{{$produk->diskon}}" class="form-control text-two" name="diskon" id="validationDefault01" required>
                            </div>
                            <div class="col-md-12"> <!--Maksimal penulisan 500 character-->
                                <textarea class="form-control text-two shadow-sm" id="deskripsi" name="deskripsi" placeholder="Deskripsi Produk" required>
                                    {{$produk->deskripsi}}
                                    </textarea>
                                <!--
                                    Tambahkan query htmlspecialchars_decode($produk[deskripsi]) saat menampilkan data dari DB agar tag html hilang
                                -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-grid gap-2 mt-5 mb-3">
                        <button class="btn btn-hover" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
@endsection