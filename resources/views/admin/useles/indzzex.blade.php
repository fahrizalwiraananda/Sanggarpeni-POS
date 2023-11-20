@extends('layouts.admin')

@section('content_admin')

<h3 class="mb-3 mt-3 text-six">Kategori Produk <span id="explore"></span></h3>
            <div class="my-2">
                <button type="button" class="btn btn-brown d-flex justify-content-center align-items-center" id="change-2" data-bs-toggle="modal" data-bs-target="#formModal">
                    <i class='bx bx-plus fw-bolder me-2' ></i>
                    <span>Tambah</span>
                </button>
                <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-five" id="formModalLabel">Tambah Kategori</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                    <form action="{{url('insert-category')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nama_Kategori" class="form-label text-one fw-semibold">Nama Kategori</label>
                                            <input type="text" class="form-control text-two" id="" name="nama_kategori" value="" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="foto_kategori" class="form-label text-one fw-semibold">Foto Produk Kategori</label>
                                            <div class="">
                                                <img src="../asset/img/input-produk.png" class="img-thumbnail shadow rounded-circle p-0 w-25 zoom mb-3" alt="">
                                            </div>
                                            <input type="file" class="form-control text-two" name="image" id="validationDefault01" required>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-center m-0 text-two">
                                            <p style="text-align: justify;">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG dengan rasio 1X1</p>
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

            

    @endsection