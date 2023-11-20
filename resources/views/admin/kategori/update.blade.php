@extends('layouts.admin')

@section('content_admin')
    <!-- Content -->
            <h3 class="mb-3 mt-3 text-six">Update Kategori<span id="explore"></span></h3>
            <div class="row p-3">
                <div class="col-md-6 p-4 rounded-4 border bg-white">
                    <form method="POST" action="{{url('update-category',$kategori->id_kategori)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="input-nama_kategori" class="form-label text-one fw-semibold">Nama Kategori</label>
                            <input type="text" class="form-control text-two fs-7" id="" name="nama_kategori" value="{{$kategori->nama_kategori}}">
                        </div>
                        <div class="mb-3">
                            <label for="foto_kategori" class="form-label text-one fw-semibold mb-2">Foto Produk Kategori</label>
                            @if($kategori->image)
                            <div class="">
                                <img src="{{ asset('asset/uploads/category/'.$kategori->image) }}" class="img-thumbnail shadow rounded-circle p-0 w-25 zoom mb-3" alt="gambar kategori" style="width: 4vw; height: 100%;">
                            </div>
                            @endif
                            <input type="file" class="form-control text-two" name="image" id="validationDefault01" required>
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