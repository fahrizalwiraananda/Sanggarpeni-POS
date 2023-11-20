
@extends('layouts.kasir')

@section('content')
<div class="row row-produk">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 p-3" id="table-scroll">
        <div class="row">
            <div class="col-md-7">
                <form class="d-flex  ms-auto my-4 my-lg-0 m-0" role="search">
                    <div class="input-group mb-0">
                        <input type="search" class="form-control fs-7" placeholder="Cari Produk" aria-label="Search" aria-describedby="button-addon2">
                        <button class="btn btn-brown btn-outline-secondary m-0" type="submit" id="button-addon2"><i class="fa fa-search text-white" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <form class="d-flex  ms-auto my-4 my-lg-0 m-0" role="search">
                    <div class="input-group mb-0">
                        <input type="search" class="form-control fs-7" placeholder="Cek Data Member" aria-label="Search" aria-describedby="button-addon2">
                        <button class="btn btn-brown btn-outline-secondary m-0" type="submit" id="button-addon2"><i class="fa fa-search text-white" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    
        <table class="table text-center">
            <thead class="text-two">
                <tr>
                    <th scope="col" class="text-start fw-normal py-3">Produk</th>
                    <th scope="col" class="fw-normal py-3">Harga</th>
                    <th scope="col" class="fw-normal py-3">Jumlah</th>
                    <th scope="col" class="fw-normal py-3">SubTotal</th>
                    <th scope="col" class="fw-normal py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-one">
                <tr>
                    <td class="text-start fw-semibold"><img src="../asset/img/gelas kayu jati.webp" class="d-xs-none rounded-3 shadow-sm me-2 img-sizing" alt="">Gelas Kayu Jati</td>
                    <td class="align-middle fw-semibold">Rp. 39.900</td>
                    <td class="align-middle fw-semibold">
                        <div class="add-btn d-flex justify-content-center">
                            <div class="quantity d-flex align-items-center me-3">
                                <button type="button" data-decrease class="btn btn-brown btn-sm text-three"><i class="fas fa-minus"></i></button>
                                <input type="number" data-value name="jumlah"  class="p-1 fw-bold bg-none text-two mx-3"  value="1" min="1" max="5" style="width: 50px; text-align: center; border: none;">
                                <button type="button" data-increase class="btn btn-brown btn-sm text-three"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle fw-semibold">Rp.119.300</td>
                    <td class="align-middle fw-semibold"><a href="hapus-produk.html"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <td class="text-start fw-semibold"><img src="../asset/img/sendok.webp" class="rounded-3 shadow-sm me-2 img-sizing" alt="" >Sendok Kayu Jati</td>
                    <td class="align-middle fw-semibold">Rp. 15.000</td>
                    <td class="align-middle fw-semibold">
                        <div class="add-btn d-flex justify-content-center">
                            <div class="quantity d-flex align-items-center me-3">
                                <button type="button" data-decrease class="btn btn-brown btn-sm text-three"><i class="fas fa-minus"></i></button>
                                <input type="number" data-value name="jumlah"  class="p-1 fw-bold bg-none text-two mx-3"  value="1" min="1" max="5" style="width: 50px; text-align: center; border: none;">
                                <button type="button" data-increase class="btn btn-brown btn-sm text-three"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle fw-semibold">Rp.45.000</td>
                    <td class="align-middle fw-semibold"><a href="hapus-produk.html"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
        <div class="count p-3 border rounded-3 shadow-set text-one">
            <h6 class="fw-semibold">Total Sementara</h5>
                <div class="calculator p-2 py-1">
                    <table class="table text-center table-borderless">
                        <tbody class="text-one">
                            <tr>
                                <td class="text-start text-two" colspan="2">Jumlah Produk :</td>
                                <td class="align-middle fw-semibold text-end">3</td>
                            </tr>
                            <tr>
                                <td class="text-start text-two" colspan="2">Total Sementara :</td>
                                <td class="align-middle fw-semibold text-end">Rp. 164.300</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="fw-semibold">Ada Member ?</h5>
                    <div class="calculator p-2 py-1">
                        <div class="col-md-12 mb-3 d-flex justify-content-between align-items-center">
                            <div class="remember d-flex justify-content-between">
                                <input type="checkbox" value="" class="remember me-1" id="checkbox">
                                <label class="text-two fs-7" for="checkbox">
                                    Ada
                                </label>
                            </div>
                            <input type="text" class="form-control bg-white-2 shadow-sm fs-7 w-75" name="member" id="validationDefault01" placeholder="ID Member">
                        </div>
                    </div>
                    <h6 class="fw-semibold">Bayar Pakai Apa ?</h5>
                        <div class="calculator p-2 py-1 mb-1 d-flex justify-content-between">
                            <div class="remember">
                                <input type="radio" name="gender" class="text-two" name="tunai" id="validationDefault02" required value="Tunai"> Tunai
                            </div>
                            <div class="remember">
                                <input type="radio" name="gender" class="text-two ms-5" name="atm" id="validationDefault02" required value="ATM"> ATM
                            </div>
                            <div class="remember">
                                <input type="radio" name="gender" class="text-two ms-5" name="qris" id="validationDefault02" required value="QRIS"> QRIS
                            </div>
                        </div>
                <h6 class="fw-semibold">Perhitungan Total Harga</h5>
                <div class="calculator p-2 py-1">
                    <table class="table text-center table-borderless">
                        <tbody class="text-one">
                            <tr>
                                <td class="text-start text-two" colspan="2">Diskon :</td>
                                <td class="align-middle fw-semibold text-end">10 %</td>
                            </tr>
                            <tr>
                                <td class="text-start text-two" colspan="2">Total Sementara :</td>
                                <td class="align-middle fw-semibold text-end">Rp. 164.300</td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bold text-one fs-6" colspan="2">Total :</td>
                                <td class="align-middle fw-bolder text-end fs-6">Rp. 147.430</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <a href="checkout.html" class="btn btn text-three shop w-100" id="change-log" name="beli"> Simpan & Print</a>
        </div>
    </div>
</div>       
@endsection
 
