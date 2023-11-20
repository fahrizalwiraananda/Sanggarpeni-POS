@extends('layouts.admin')
@section('title', 'User')
@section('content_admin')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <h2 class="mb-3 fw-normal text-six">Dashboard<span id="explore"></span></h2>                        
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card bg-white text-white border-0 shadow-sm text-two box-info">
                    <div class="card-body text-two p-3">
                        <div class="out bg-lightbrown rounded-5 mb-3 d-flex justify-content-center align-items-center text-six" id="image-height">
                            <i class="fa-solid fa-shop"></i>
                        </div>
                        <p class="size-p mb-1">Produk Terjual</p>
                        <h3 class="fw-bolder mb-0">352</h3>
                        <p class="size-p mb-0 mt-1">Hari ini</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card bg-white text-white border-0 shadow-sm text-two box-info">
                    <div class="card-body text-two p-3">
                        <div class="out bg-lightbrown rounded-5 mb-3 d-flex justify-content-center align-items-center text-six" id="image-height">
                            <i class="fa-solid fa-shop"></i>
                        </div>
                        <p class="size-p mb-1">Total Pembelian</p>
                        <h3 class="fw-bolder mb-0">121</h3>
                        <p class="size-p mb-0 mt-1">Hari ini</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card bg-white text-white border-0 shadow-sm text-two box-info">
                    <div class="card-body text-two p-3">
                        <div class="out bg-lightbrown rounded-5 mb-3 d-flex justify-content-center align-items-center text-six" id="image-height">
                            <i class="fa-solid fa-shop"></i>
                        </div>
                        <p class="size-p mb-1">Total Pendapatan</p>
                        <h3 class="fw-bolder mb-0">Rp. 5.635.000</h3>
                        <p class="size-p mb-0 mt-1">Hari ini</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card bg-white text-white border-0 shadow-sm text-two box-info">
                    <div class="card-body text-two p-3">
                        <div class="out bg-lightbrown rounded-5 mb-3 d-flex justify-content-center align-items-center text-six" id="image-height">
                            <i class="fa-solid fa-shop"></i>
                        </div>
                        <p class="size-p mb-1">Total Pengguna</p>
                        <h3 class="fw-bolder mb-0">2</h3>
                        <p class="size-p mb-0 mt-1">Orang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="card bg-white text-white border-0 shadow-sm text-two box-info">
                    <div class="card-body text-two p-3">
                        <div class="head d-flex mb-3 align-items-center">
                            <i class="fa fa-inbox text-six" aria-hidden="true"></i>
                            <span class="fs-7 ms-1 fw-semibold">Stok Hampir Habis !</span>
                        </div>


                        <table class="table" id="" style=" overflow-x:auto Important; ">
                            <thead class="text-six">
                                <tr>
                                    <th>Nama</th>
                                    <!--<th>Kategori</th>-->
                                    <th>Harga</th>
                                    <th>Foto</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produk as $item)
                                <tr>
                                    <td style="width: 100px;">{{$item->nama_produk}}</td>
                                    <td>Rp.{{$item->harga_produk}}</td>
                                    <td><img src="{{asset('asset/uploads/product/'.$item->image)}}" style="width: 5vw; height: 100%;" alt="image here" ></td>
                                    <td class="text-red fw-bold">{{$item->stok}}</td>
                                    <td>
                                        <a href="{{url('edit-product/'.$item->id_produk)}}"><i class='bx bx-edit text-green fs-3'></i></a>
                                    </td>
                                    @endforeach
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card bg-white text-white border-0 shadow-sm text-two box-info" style="max-height: 45vh !important; min-height: 45vh !important; overflow-y:auto; ">
                    <div class="card-body text-two p-3 ">
                        <div class="head d-flex mb-3 align-items-center">
                            <i class="fa fa-bell text-red" aria-hidden="true"></i>
                            <span class="fs-7 ms-1 fw-semibold">Notifikasi </span>
                        </div>
                        
                        <div class="notification">
                            @foreach($userdt as $item)
                            <div class="card shadow-sm bg-lightbrown mb-1">
                                <div class="card-body p-2">
                                    <p class="text-one fw-semibold fs-8 text-five mb-1">Request Akun Kasir !</p>
                                    <div class="info-req d-flex fs-7 p-0 px-1 justify-content-between">
                                        <p class="p-0 m-0">{{$item->name}}</p>
                                        <a class="nav-link px-3 fs-8 m-0 text-six" href="{{url('edit-user/'.$item->id)}}"> Detail <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
