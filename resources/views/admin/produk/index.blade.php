@extends('layouts.admin')
@section('title', 'Produk')
@section('content_admin')
@php
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
@endphp
            <h3 class="mb-3 mt-3 text-six">Data Produk <span id="explore"></span></h3>
            <div class="my-2">
                <a href="tambah-produk" class="btn btn-brown me-1" id="change-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <i class='bx bx-plus fw-bolder me-2' ></i>
                        <span>Tambah</span>
                    </div>
                </a>
                <a href="export-produk" class="btn btn-green" id="change-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <i class='bx bx-download fw-bold me-2' ></i>
                        <span>Export</span>
                    </div>
                </a>
            </div>
            <div class="row table-data">
                <div class="col-12">
                    <div class="data_table" style="font-size: rem;">
                        <table id="example" class="table ">
                            <thead class="text-six">
                                <tr>
                                    <th>Kode Produk</th>
                                    <th style="width: 150px !important;">Nama</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Berat</th>
                                    <th>Material</th>
                                    <th>Size</th>
                                    <th>Foto</th>
                                    <th>Pelapis</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produk as $item)
                                <tr>
                                    <td class="btn px-0 text-three" style="width: 90px;">{{$item->kode_produk}}</td>
                                    <td><span style="width: 150px !important;">{{$item->nama_produk}} </span></td>
                                    <td>{{$item->nama_kategori}}</td>
                                    <td>Rp.{{$item->harga_produk}}</td>
                                    <td>{{$item->berat}}</td>
                                    <td>{{$item->material}}</td>
                                    <td>{{$item->size}}</td>
                                    <td><img src="{{asset('asset/uploads/product/'.$item->image)}}" style="width: 5vw; height: 100%;" alt="image here" >
                                    </td>
                                    <td>{{ $item->pelapis }}</td>
                                    <td>{{$item->stok}}</td>
                                    <td>
                                        <div class="action d-flex justify-content-center align-items-center">
                                            <a href="{{url('print-barcode/'.$item->id_produk)}}"><i class='bx bx-barcode-reader fs-3'></i></a>
                                            <a href="{{url('edit-product/'.$item->id_produk)}}"><i class='bx bx-edit text-green fs-3'></i></a>
                                            <a href="{{url('delete-product/'.$item->id_produk)}}"><i class='bx bxs-trash text-red fs-3' ></i></a>
                                        
                                        </div>

                                    </td>
                                    @endforeach
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

           
            @endsection