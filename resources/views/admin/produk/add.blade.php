@extends('layouts.admin')

@section('content_admin')
            
            <h3 class="mb-3 mt-3 text-six">Tambah Produk <span id="explore"></span></h3>
            <form action="{{url('insert-produk')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-baseline mb-3">
                                <img src="../asset/img/input-produk.png" class="img-thumbnail shadow rounded-circle p-0 w-75 zoom"  alt=""> <!---Preview Image-->
                            </div>
                            <div class="col-md-12 d-flex justify-content-center m-0 mb-3">
                                <input type="file" class="form-control text-two" name="image" id="validationDefault01">
                                @error('image')
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
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Kode Produk</label>
                                <input type="text" class="form-control text-two fs-7" name="kode_produk" value="{{ 'SP-'.$kode }}" id="validationDefault01" readonly>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Nama Produk</label>
                                <input type="text" class="form-control text-two fs-7" name="nama_produk" id="validationDefault01" >
                                @error('nama_produk')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3"><!--Untuk Kategori Ambil dari ID Kategori-->
                                <label for="kategori" class="form-label fw-semibold text-on">Kategori</label>
                                <select class="form-select" name="id_kategori" aria-label="Default select example">
                                    <option selected>Pilih Kategori</option>
                                    @foreach($kategori as $item)
                                    <option value="{{ $item->id_kategori}}">{{$item->nama_kategori}}</option>
                                    @endforeach
                                </select>
                                @error('kategori')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Harga</label>
                                <input type="text" class="form-control text-two fs-7" name="harga_produk" id="validationDefault01">
                                @error('harga_produk')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Diskon</label>
                                <input type="text" class="form-control text-two fs-7" name="diskon" id="validationDefault01">
                                @error('diskon')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Berat</label>
                                <input type="text" class="form-control text-two fs-7" name="berat" id="validationDefault01">
                                @error('berat')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Material</label>
                                <input type="text" class="form-control text-two fs-7" name="material" id="validationDefault01">
                                @error('material')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Size</label>
                                <input type="text" class="form-control text-two fs-7" name="size" id="validationDefault01">
                                @error('size')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Stok</label>
                                <input type="number" class="form-control text-two fs-7" name="stok" id="validationDefault01">
                                @error('stok')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault01" class="form-label fw-semibold text-one">Pelapis</label>
                                <input type="text" class="form-control text-two fs-7" name="pelapis" id="validationDefault01">
                                @error('pelapis')
                                <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12"> <!--Maksimal penulisan 500 character-->
                                <label for="validationDefault02" class="form-label fw-semibold text-one" id="editor">Deskripsi</label>
                                <textarea class="form-control text-two shadow-sm fs-7" id="deskripsi" name="deskripsi" placeholder="Deskripsi Produk">
                                </textarea>
                                @error('deskripsi')
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
 