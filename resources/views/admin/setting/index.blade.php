@extends('layouts.admin')
@section('title', 'Pengaturan')
@section('content_admin')
            <h3 class="mb-3 mt-3 text-six">Pengaturan <span id="explore"></span></h3>
            <div class="my-2">
                <button type="button" class="btn btn-brown d-flex justify-content-center align-items-center" id="change-2" data-bs-toggle="modal" data-bs-target="#formModal">
                    <i class='bx bx-plus fw-bolder me-2' ></i>
                    <span>Tambah</span>
                </button>
                <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-five" id="formModalLabel">Tambah Pengaturan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('insert-setting')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="mb-3">
                                            <label for="nama_perusahaan" class="form-label text-one fw-semibold">Nama Perusahaan</label>
                                            <input type="text" class="form-control text-two" id="" name="nama_perusahaan" value="" >
                                            @error('nama_perusahaan')
                                            <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                        @enderror
                                        </div>
                                                                                                               
                                        <div class="mb-3">
                                            <label for="nama_perusahaan" class="form-label text-one fw-semibold">Telepon</label>
                                            <input type="text" class="form-control text-two" id="" name="telepon" value="" >
                                            @error('nama_perusahaan')
                                            <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                        @enderror
                                                                                
                                        <div class="mb-3">
                                            <label for="nama_perusahaan" class="form-label text-one fw-semibold">Diskon</label>
                                            <input type="text" class="form-control text-two" id="" name="diskon" value="" >
                                            @error('nama_perusahaan')
                                            <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                        @enderror
                                        </div>

                                    </div>

                                    <label for="validationDefault02" class="form-label fw-semibold text-one">Alamat</label>
                                    <textarea class="form-control text-two shadow-sm fs-7" name="alamat" placeholder="Deskripsi Produk">
                                    </textarea>
                                    @error('alamat')
                                    <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                    @enderror
                                                                       
                                        <div class="mb-3">
                                            <label for="foto_kategori" class="form-label text-one fw-semibold">Logo Perusahaan</label>
                                            <div class="">
                                                <img src="../asset/img/input-produk.png" class="img-thumbnail shadow rounded-circle p-0 w-25 zoom mb-3" alt="">
                                            </div>
                                            <input type="file" class="form-control text-two" name="path_logo" id="validationDefault01" >
                                            @error('path_logo')
                                            <small class="text-danger text-start fs-8 fw-semibold">{{ $message }}</small>
                                        @enderror
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-center m-0 text-two">
                                            <p style="text-align: justify;">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</p>
                                        </div>

                                        <div class="modal-footer">
                                            <div class="col-12 d-grid gap-2 mt-5 mb-3">
                                                <button class="btn btn-hover" type="submit">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row table-data">
                <div class="col-12">
                    <div class="data_table" style="font-size: rem;">
                        <table id="example" class="table ">
                            <thead class="text-six">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Diskon</th>
                                    <th>LogoPerusahaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($settings as $item)
                                <tr>
                                    <td class="fw-bold">{{$no++}}</td>
                                    <td>{{$item->nama_perusahaan}}</td>
                                    <td>{{$item->telepon}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->diskon}}</td>
                                    <td><img src="{{asset('asset/uploads/setting/'.$item->path_logo)}}" class="cate-image" alt="logo perusahaan" style="width: 4vw; height: 100%;"></td>
                                    <td>
                                        <div class="action d-flex justify-content-start align-items-center">
                                            <a href="{{url('edit-setting/'.$item->id_setting)}}"><i class='bx bx-edit text-green fs-3'></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection